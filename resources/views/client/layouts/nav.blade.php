@can('isAdmin')
<nav class="navbar fixed-top navbar-expand-lg justify-content-center" style="background-color: #ffd57b; height:80px;">
    <span class="text-center">You're logged in as Administrator &nbsp;</span>
    <a class="text-center" href="{{ route('index') }}">Go back to Admin page</a>
</nav>
@endcan
@can('isManager')
<nav class="navbar fixed-top navbar-expand-lg justify-content-center" style="background-color: #ffd57b; height:80px;">
    <span class="text-center">You're logged in as Manager &nbsp;</span>
    <a class="text-center" href="{{ route('index') }}">Go back to Manager page</a>
</nav>
@endcan
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light" @can('isAdmin')style="margin-top: 80px;" @endcan
    @can('isManager')style="margin-top: 80px;" @endcan>

    <a class="navbar-brand icon-nav-rikkeisoft" href="/"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler"
        aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarToggler">
        {{-- menu --}}
        @include('client.layouts.nav-dropdown-menu')

        {{-- <form class="form-inline" method="GET" action="{{ route('search') }}"> --}}
        {!! Form::open(['route' => 'search']) !!}
        <div class="input-group">
            <input class="form-control rounded-0 md-2" name="query" type="search" placeholder="Search"
                style="padding-left:30px;">
            <div class="input-group-append">
                <button class="btn btn-outline-dark icon-search rounded-0 mr-2" type="submit" value="Search"></button>
            </div>
        </div>
        {{-- </form> --}}
        {!! Form::close() !!}

        <div class="text-center mr-0">
            @guest
            @if (Route::has('login'))
            <button class="btn btn-outline-transparent icon-login rounded-0 my-2" type="button" data-toggle="modal"
                data-target="#loginModal"></button>
            @endif

            @else
            <button class="btn btn-outline-transparent icon-user rounded-0 my-2" type="button" id="userDropdown"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre></button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="/account/profile">Profile</a>
                <a class="dropdown-item" href="#">Settings</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
            @endguest
            <a href="{{ route('support') }}" class="btn btn-outline-transparent icon-question rounded-0 my-2" type="button"></a>

            {{-- <a class="btn btn-outline-transparent icon-cart rounded-0 my-2" type="button" data-target="cartModal"
            data-toggle="modal"></a> --}}

            @if(!session('cart'))
            <button class="btn btn-outline-transparent icon-cart rounded-0 my-2" type="button"
                data-target="#cartDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                v-pre></button>
            @endif
            @if(session('cart'))
            <button class="btn btn-outline-transparent icon-cart rounded-0 my-2" type="button"
                data-target="#cartDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                style="position: initial;" v-pre>
                <span class="badge badge-pill badge-danger badge-up"
                    style="position: relative; top: -10px; right: 15px;">
                    {{count(session('cart'))}}
                </span>
            </button>
            @endif
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="cartDropdown" id="cartDropdown">
                <ul class="">
                    <div class="container">
                        <div class="pl-3">
                            <h3 class="__detailheader my-3">{{ __('Cart') }}</h3>
                        </div>
                        <div class="dropdown-divider"><br></div>
                        @if ($message = Session::get('cart-success'))
                        <div class="alert alert-success" style="width: 100%;">
                            <p>{{ $message }}</p>
                        </div>
                        @endif
                        @if(!session('cart'))
                        <div class="container text-center my-5">
                            <label class="showproduct-subtitle text-muted"> {{ __('Your cart is emty') }} </label>
                        </div>
                        @else
                        {{ Form::hidden('total', $total = 0) }}
                        {{ Form::hidden('stotal', $stotal = 0) }}
                        {{ Form::hidden('i', $i = 0) }}
                        <table class="table table-hover table-borderless">
                            <thead>
                                <tr>
                                    <th style="white-space: nowrap; width: 1%;">No.</th>
                                    <th style="white-space: nowrap; width: 1%;">Image</th>
                                    <th>Name</th>
                                    <th style="white-space: nowrap; width: 1%;">Quantity</th>
                                    <th class="text-center" style="white-space: nowrap; width: 1%;">Price</th>
                                    <th style="white-space: nowrap; width: 1%;">Subtotal</th>
                                    <th style="white-space: nowrap; width: 1%;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(session('cart'))
                                @foreach(session('cart') as $id => $details)

                                <tr style="line-height: 80px; min-height: 80px; height: 80px;">
                                    <td>
                                        {{ ++$i }}
                                    </td>
                                    <td>
                                        <img src="{{ $details['image_url'] }}" width="60" height="60"
                                            class="img-responsive" />
                                    </td>
                                    <td>
                                        {{ $details['name'] }}
                                    </td>
                                    <td>
                                        <input type="number" value="{{ $details['quantity'] }}" name="quantity"
                                            class="form-control mt-3 txt-quantity" min="1" />
                                    </td>
                                    <td class="text-right text-nowrap">
                                        @if ($details['fullprice'] != $details['price'])
                                            <del>@currency($details['fullprice'])</del> <label class="text-danger">@currency($details['price'])</label>
                                        @else
                                            @currency($details['price'])
                                        @endif
                                        </td>
                                    <td class="text-right">
                                        @currency($stotal = $details['quantity'] * $details['price'])
                                        {{ Form::hidden('invisible', $total += $stotal) }}
                                    </td>
                                    <td class="actions text-right" data-th="">
                                        <div class="row text-center mt-4">
                                            <button class="btn btn-dark btn-sm rounded-0 icon-refresh-white update-cart"
                                                data-old-url="{{ route('cart.update', ['cart' => $id]) }}"
                                                data-id="{{ $id }}"
                                                data-url="{{ route('cart.update', ['cart' => $id, 'quantity' => $details['quantity']]) }}">
                                            </button>
                                            <button
                                                class="btn btn-outline-danger btn-sm rounded-0 icon-bin-red bg-btn-lgray remove-from-cart"
                                                data-id="{{ $id }}"
                                                data-url="{{ route('cart.update', ['cart' => $id]) }}">
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                        <div class="container">
                            <a href="{{ route('cart.index') }}" class="btn btn-outline-dark rounded-0 btn-block"
                                style="">{{ __('Review cart') }}</a>
                        </div>
                        @endif
                    </div>
                </ul>
            </div>
        </div>
    </div>


</nav>

<div class="mb-5"></div>
{{-- @can('isAdmin')
<div class="btn btn-success btn-lg">
    You have Admin Access
</div>
@elsecan('isManager')
<div class="btn btn-primary btn-lg">
    You have Manager Access
</div>
@endcan --}}
