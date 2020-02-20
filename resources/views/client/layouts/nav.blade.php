@can('isAdmin')
<nav class="navbar fixed-top navbar-expand-lg justify-content-center" style="background-color: #ffd57b; height:80px;">
    <span class="text-center">You're logged in as Administrator &nbsp;</span>
    <a class="text-center" href="/admin">Go back to Admin page</a>
</nav>
@endcan
@can('isManager')
<nav class="navbar fixed-top navbar-expand-lg justify-content-center" style="background-color: #ffd57b; height:80px;">
    <span class="text-center">You're logged in as Manager &nbsp;</span>
    <a class="text-center" href="/admin">Go back to Manager page</a>
</nav>
@endcan
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light" @can('isAdmin')style="margin-top: 80px;" @endcan
    @can('isManager')style="margin-top: 80px;" @endcan>

    <a class="navbar-brand icon-home-nike" href="/"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler"
        aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarToggler">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 mx-auto">
            <li class="nav-item dropdown" style="position: initial;">
                <a href="#" class="btn btn-outline-dark border-0 rounded-0 my-3 text-uppercase font-weight-bold"
                    type="button" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    style="height: 100%;">Men</a>
                <div class="dropdown-menu dropdown-content" aria-labelledby="navbarDropdownMenuLink"
                    style="width: 100%;">
                    <div class="row">
                        <div class="col-lg-1">
                        </div>
                        <div class="col-lg-2 border-right">
                            <a class="dropdown-item text-wrap text-uppercase font-weight-bold my-3" href="/">New
                                Releases</a>
                            <a class="dropdown-item text-wrap text-uppercase font-weight-bold my-3" href="#">New
                                Apparel</a>
                            <a class="dropdown-item text-wrap text-uppercase font-weight-bold my-3" href="#">Nike
                                React</a>
                            <a class="dropdown-item text-wrap text-uppercase font-weight-bold my-3" href="#">NikeLap</a>
                            <a class="dropdown-item text-wrap text-uppercase font-weight-bold my-3" href="#">Sale</a>
                        </div>
                        <div class="col-lg-2">
                            <a class="dropdown-item text-wrap text-uppercase font-weight-bold my-3" href="#">Shoes</a>
                            <a class="dropdown-item text-wrap" href="#">Newest Sneakers</a>
                            <a class="dropdown-item text-wrap" href="#">All Shoes</a>
                            <a class="dropdown-item text-wrap" href="#">Lifestyle</a>
                            <a class="dropdown-item text-wrap" href="#">Running</a>
                            <a class="dropdown-item text-wrap" href="#">Basketball</a>
                            <a class="dropdown-item text-wrap" href="#">Jordan</a>
                            <a class="dropdown-item text-wrap" href="#">Football</a>
                            <a class="dropdown-item text-wrap" href="#">Gym & Training</a>
                            <a class="dropdown-item text-wrap" href="#">Skateboarding</a>
                            <a class="dropdown-item text-wrap" href="#">Tennis</a>
                            <a class="dropdown-item text-wrap" href="#">Sandals & Flips Flops</a>
                            <a class="dropdown-item text-wrap" href="#">Customise with Nike By You</a>
                            <a class="dropdown-item text-wrap font-weight-bold my-2" href="#">All Sale Shoes</a>

                        </div>
                        <div class="col-lg-2 border-right">
                            <a class="dropdown-item text-wrap text-uppercase font-weight-bold my-3"
                                href="#">Clothing</a>
                            <a class="dropdown-item text-wrap" href="#">All Clothing</a>
                            <a class="dropdown-item text-wrap font-weight-bold my-2" href="#">All Sale Clothing</a>
                        </div>
                        <div class="col-lg-2">
                            <a class="dropdown-item text-wrap text-uppercase font-weight-bold my-3" href="#">Shop By
                                Sport</a>
                            <a class="dropdown-item text-wrap" href="#">Runing</a>
                            <a class="dropdown-item text-wrap" href="#">Football</a>
                            <a class="dropdown-item text-wrap" href="#">Basketball</a>
                            <a class="dropdown-item text-wrap" href="#">Gym & Training</a>
                            <a class="dropdown-item text-wrap" href="#">Skateboarding</a>
                            <a class="dropdown-item text-wrap" href="#">Tennis</a>
                            <a class="dropdown-item text-wrap" href="#">Golf</a>
                        </div>
                        <div class="col-lg-2">
                            <a class="dropdown-item text-wrap text-uppercase font-weight-bold my-3" href="#">Shop By
                                Brand</a>
                            <a class="dropdown-item text-wrap" href="#">Nike Sportswear</a>
                            <a class="dropdown-item text-wrap" href="#">NikeLab</a>
                            <a class="dropdown-item text-wrap" href="#">Nike By You</a>
                            <a class="dropdown-item text-wrap" href="#">Jordan</a>
                            <a class="dropdown-item text-wrap" href="#">ACG</a>
                            <a class="dropdown-item text-wrap" href="#">NBA</a>
                            <a class="dropdown-item text-wrap text-uppercase font-weight-bold my-3 mt-5"
                                href="#">Icons</a>
                            <a class="dropdown-item text-wrap" href="#">React</a>
                            <a class="dropdown-item text-wrap" href="#">Vapormax</a>
                            <a class="dropdown-item text-wrap" href="#">Pegasus</a>
                            <a class="dropdown-item text-wrap" href="#">Free</a>
                        </div>
                        <div class="col-lg-1">
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown" style="position: initial;">
                <a href="#" class="btn btn-outline-dark border-0 rounded-0 my-3 text-uppercase font-weight-bold"
                    type="button" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    style="height: 100%;">Women</a>
                <div class="dropdown-menu dropdown-content" aria-labelledby="navbarDropdownMenuLink"
                    style="width: 100%;">
                    <div class="row">
                        <div class="col-lg-1">
                        </div>
                        <div class="col-lg-2 border-right">
                            <a class="dropdown-item text-wrap text-uppercase font-weight-bold my-3" href="#">New
                                Releases</a>
                            <a class="dropdown-item text-wrap text-uppercase font-weight-bold my-3" href="#">New
                                Apparel</a>
                            <a class="dropdown-item text-wrap text-uppercase font-weight-bold my-3" href="#">Nike
                                React</a>
                            <a class="dropdown-item text-wrap text-uppercase font-weight-bold my-3" href="#">Air
                                Max</a>
                            <a class="dropdown-item text-wrap text-uppercase font-weight-bold my-3" href="#">NikeLap</a>
                            <a class="dropdown-item text-wrap text-uppercase font-weight-bold my-3" href="#">Sale</a>
                        </div>
                        <div class="col-lg-2">
                            <a class="dropdown-item text-wrap text-uppercase font-weight-bold my-3" href="#">Shoes</a>
                            <a class="dropdown-item text-wrap" href="#">Newest Sneakers</a>
                            <a class="dropdown-item text-wrap" href="#">All Shoes</a>
                            <a class="dropdown-item text-wrap" href="#">Lifestyle</a>
                            <a class="dropdown-item text-wrap" href="#">Running</a>
                            <a class="dropdown-item text-wrap" href="#">Basketball</a>
                            <a class="dropdown-item text-wrap" href="#">Jordan</a>
                            <a class="dropdown-item text-wrap" href="#">Football</a>
                            <a class="dropdown-item text-wrap" href="#">Gym & Training</a>
                            <a class="dropdown-item text-wrap" href="#">Skateboarding</a>
                            <a class="dropdown-item text-wrap" href="#">Tennis</a>
                            <a class="dropdown-item text-wrap" href="#">Sandals & Flips Flops</a>
                            <a class="dropdown-item text-wrap" href="#">Customise with Nike By You</a>
                            <a class="dropdown-item text-wrap font-weight-bold my-2" href="#">All Sale Shoes</a>

                        </div>
                        <div class="col-lg-2 border-right">
                            <a class="dropdown-item text-wrap text-uppercase font-weight-bold my-3"
                                href="#">Clothing</a>
                            <a class="dropdown-item text-wrap" href="#">All Clothing</a>
                            <a class="dropdown-item text-wrap font-weight-bold my-2" href="#">All Sale Clothing</a>
                        </div>
                        <div class="col-lg-2">
                            <a class="dropdown-item text-wrap text-uppercase font-weight-bold my-3" href="#">Shop By
                                Sport</a>
                            <a class="dropdown-item text-wrap" href="#">Runing</a>
                            <a class="dropdown-item text-wrap" href="#">Yoga</a>
                            <a class="dropdown-item text-wrap" href="#">Football</a>
                            <a class="dropdown-item text-wrap" href="#">Basketball</a>
                            <a class="dropdown-item text-wrap" href="#">Gym & Training</a>
                            <a class="dropdown-item text-wrap" href="#">Skateboarding</a>
                            <a class="dropdown-item text-wrap" href="#">Tennis</a>
                            <a class="dropdown-item text-wrap" href="#">Golf</a>
                        </div>
                        <div class="col-lg-2">
                            <a class="dropdown-item text-wrap text-uppercase font-weight-bold my-3" href="#">Shop By
                                Brand</a>
                            <a class="dropdown-item text-wrap" href="#">Nike Sportswear</a>
                            <a class="dropdown-item text-wrap" href="#">NikeLab</a>
                            <a class="dropdown-item text-wrap" href="#">Nike By You</a>
                            <a class="dropdown-item text-wrap" href="#">Jordan</a>
                            <a class="dropdown-item text-wrap" href="#">ACG</a>
                            <a class="dropdown-item text-wrap" href="#">NBA</a>
                            <a class="dropdown-item text-wrap text-uppercase font-weight-bold my-3 mt-5"
                                href="#">Icons</a>
                            <a class="dropdown-item text-wrap" href="#">React</a>
                            <a class="dropdown-item text-wrap" href="#">Vapormax</a>
                            <a class="dropdown-item text-wrap" href="#">Pegasus</a>
                            <a class="dropdown-item text-wrap" href="#">Free</a>
                        </div>
                        <div class="col-lg-1">
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown" style="position: initial;">
                <a href="#" class="btn btn-outline-dark border-0 rounded-0 my-3 text-uppercase font-weight-bold"
                    type="button" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    style="height: 100%;">Kids</a>
                <div class="dropdown-menu dropdown-content" aria-labelledby="navbarDropdownMenuLink"
                    style="width: 100%;">
                    <div class="row">
                        <div class="col-lg-1">
                        </div>
                        <div class="col-lg-2 border-right">
                            <a class="dropdown-item text-wrap text-uppercase font-weight-bold my-3" href="#">New
                                Releases</a>
                            <a class="dropdown-item text-wrap text-uppercase font-weight-bold my-3" href="#">New
                                Apparel</a>
                            <a class="dropdown-item text-wrap text-uppercase font-weight-bold my-3" href="#">Easy on
                                &
                                Off shoes</a>
                            <a class="dropdown-item text-wrap text-uppercase font-weight-bold my-3" href="#">Jordan</a>
                            <a class="dropdown-item text-wrap text-uppercase font-weight-bold my-3" href="#">Sale</a>
                        </div>
                        <div class="col-lg-2">
                            <a class="dropdown-item text-wrap text-uppercase font-weight-bold my-3" href="#">Boys
                                Shoes</a>
                            <a class="dropdown-item text-wrap" href="#">Big Kids (3.5Y - 7Y)</a>
                            <a class="dropdown-item text-wrap" href="#">Little Kids (10.5C - 3Y)</a>
                            <a class="dropdown-item text-wrap" href="#">Baby & Toddler Kids (0.5C - 10Y)</a>
                            <a class="dropdown-item text-wrap" href="#">Lifestyle</a>
                            <a class="dropdown-item text-wrap" href="#">Running</a>
                            <a class="dropdown-item text-wrap" href="#">Basketball</a>
                            <a class="dropdown-item text-wrap" href="#">Football</a>
                            <a class="dropdown-item text-wrap" href="#">Jordan</a>
                            <a class="dropdown-item text-wrap" href="#">Sandals & Flips Flops</a>
                            <a class="dropdown-item text-wrap" href="#">All Shoes</a>
                            <a class="dropdown-item text-wrap font-weight-bold my-2" href="#">All Sale Shoes</a>

                        </div>
                        <div class="col-lg-2 border-right">
                            <a class="dropdown-item text-wrap text-uppercase font-weight-bold my-3" href="#">Girls
                                Shoes</a>
                            <a class="dropdown-item text-wrap" href="#">Big Kids (3.5Y - 7Y)</a>
                            <a class="dropdown-item text-wrap" href="#">Little Kids (10.5C - 3Y)</a>
                            <a class="dropdown-item text-wrap" href="#">Baby & Toddler Kids (0.5C - 10Y)</a>
                            <a class="dropdown-item text-wrap" href="#">Lifestyle</a>
                            <a class="dropdown-item text-wrap" href="#">Running</a>
                            <a class="dropdown-item text-wrap" href="#">Basketball</a>
                            <a class="dropdown-item text-wrap" href="#">Football</a>
                            <a class="dropdown-item text-wrap" href="#">Sandals & Flips Flops</a>
                            <a class="dropdown-item text-wrap" href="#">All Shoes</a>
                            <a class="dropdown-item text-wrap font-weight-bold my-2" href="#">All Sale Shoes</a>
                        </div>
                        <div class="col-lg-2">
                            <a class="dropdown-item text-wrap text-uppercase font-weight-bold my-3" href="#">Shop By
                                Sport</a>
                            <a class="dropdown-item text-wrap" href="#">Runing</a>
                            <a class="dropdown-item text-wrap" href="#">Football</a>
                            <a class="dropdown-item text-wrap" href="#">Basketball</a>
                            <a class="dropdown-item text-wrap" href="#">Gym & Training</a>
                            <a class="dropdown-item text-wrap" href="#">Skateboarding</a>
                        </div>
                        <div class="col-lg-2">

                        </div>
                        <div class="col-lg-1">
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown" style="position: initial;">
                <a href="#" class="btn btn-outline-dark border-0 rounded-0 my-3 text-uppercase font-weight-bold"
                    type="button" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    style="height: 100%;">Collections</a>
                <div class="dropdown-menu dropdown-content" aria-labelledby="navbarDropdownMenuLink"
                    style="width: 100%;">
                    <div class="row">
                        <div class="col-lg-1">
                        </div>
                        <div class="col-lg-2 border-right">
                            <a class="dropdown-item text-wrap text-uppercase font-weight-bold my-3" href="#">New
                                Releases</a>
                            <a class="dropdown-item text-wrap text-uppercase font-weight-bold my-3" href="#">New
                                Apparel</a>
                            <a class="dropdown-item text-wrap text-uppercase font-weight-bold my-3" href="#">Nike
                                React</a>
                            <a class="dropdown-item text-wrap text-uppercase font-weight-bold my-3" href="#">Air
                                Max</a>
                            <a class="dropdown-item text-wrap text-uppercase font-weight-bold my-3" href="#">NikeLap</a>
                            <a class="dropdown-item text-wrap text-uppercase font-weight-bold my-3" href="#">Sale</a>
                        </div>
                        <div class="col-lg-2">
                            <a class="dropdown-item text-wrap text-uppercase font-weight-bold my-3" href="#">Shoes</a>
                            <a class="dropdown-item text-wrap" href="#">Newest Sneakers</a>
                            <a class="dropdown-item text-wrap" href="#">All Shoes</a>
                            <a class="dropdown-item text-wrap" href="#">Lifestyle</a>
                            <a class="dropdown-item text-wrap" href="#">Running</a>
                            <a class="dropdown-item text-wrap" href="#">Basketball</a>
                            <a class="dropdown-item text-wrap" href="#">Jordan</a>
                            <a class="dropdown-item text-wrap" href="#">Football</a>
                            <a class="dropdown-item text-wrap" href="#">Gym & Training</a>
                            <a class="dropdown-item text-wrap" href="#">Skateboarding</a>
                            <a class="dropdown-item text-wrap" href="#">Tennis</a>
                            <a class="dropdown-item text-wrap" href="#">Sandals & Flips Flops</a>
                            <a class="dropdown-item text-wrap" href="#">Customise with Nike By You</a>
                            <a class="dropdown-item text-wrap font-weight-bold my-2" href="#">All Sale Shoes</a>

                        </div>
                        <div class="col-lg-2 border-right">
                            <a class="dropdown-item text-wrap text-uppercase font-weight-bold my-3"
                                href="#">Clothing</a>
                            <a class="dropdown-item text-wrap" href="#">All Clothing</a>
                            <a class="dropdown-item text-wrap font-weight-bold my-2" href="#">All Sale Clothing</a>
                        </div>
                        <div class="col-lg-2">
                            <a class="dropdown-item text-wrap text-uppercase font-weight-bold my-3" href="#">Shop By
                                Sport</a>
                            <a class="dropdown-item text-wrap" href="#">Runing</a>
                            <a class="dropdown-item text-wrap" href="#">Yoga</a>
                            <a class="dropdown-item text-wrap" href="#">Football</a>
                            <a class="dropdown-item text-wrap" href="#">Basketball</a>
                            <a class="dropdown-item text-wrap" href="#">Gym & Training</a>
                            <a class="dropdown-item text-wrap" href="#">Skateboarding</a>
                            <a class="dropdown-item text-wrap" href="#">Tennis</a>
                            <a class="dropdown-item text-wrap" href="#">Golf</a>
                        </div>
                        <div class="col-lg-2">
                            <a class="dropdown-item text-wrap text-uppercase font-weight-bold my-3" href="#">Shop By
                                Brand</a>
                            <a class="dropdown-item text-wrap" href="#">Nike Sportswear</a>
                            <a class="dropdown-item text-wrap" href="#">NikeLab</a>
                            <a class="dropdown-item text-wrap" href="#">Nike By You</a>
                            <a class="dropdown-item text-wrap" href="#">Jordan</a>
                            <a class="dropdown-item text-wrap" href="#">ACG</a>
                            <a class="dropdown-item text-wrap" href="#">NBA</a>
                            <a class="dropdown-item text-wrap text-uppercase font-weight-bold my-3 mt-5"
                                href="#">Icons</a>
                            <a class="dropdown-item text-wrap" href="#">React</a>
                            <a class="dropdown-item text-wrap" href="#">Vapormax</a>
                            <a class="dropdown-item text-wrap" href="#">Pegasus</a>
                            <a class="dropdown-item text-wrap" href="#">Free</a>
                        </div>
                        <div class="col-lg-1">
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <form class="form-inline">
            <div class="input-group">
                <input class="form-control rounded-0 md-2" type="search" placeholder="Search"
                    style="padding-left:30px;">
                <div class="input-group-append">
                    <button class="btn btn-outline-dark icon-search rounded-0 mr-2" type="submit"></button>
                </div>
            </div>
        </form>

        <div class="text-center mr-0">
            @guest
            @if (Route::has('login'))
            <button class="btn btn-outline-transparent icon-user rounded-0 my-2" type="button" data-toggle="modal"
                data-target="#loginModal"></button>
            @endif

            @else
            <button class="btn btn-outline-transparent icon-user-filled rounded-0 my-2" type="button" id="userDropdown"
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
        </div>
        <a href="#" class="btn btn-outline-transparent icon-question rounded-0 my-2" type="button"></a>

        {{-- <a class="btn btn-outline-transparent icon-cart rounded-0 my-2" type="button" data-target="cartModal"
            data-toggle="modal"></a> --}}

        <button class="btn btn-outline-transparent icon-cart rounded-0 my-2" type="button" data-target="#cartDropdown"
            data-toggle="dropdown"></button>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="cartDropdown" id="cartDropdown">
            <ul class="nav navbar-nav">
                <div class="container">
                    <div class="pl-3">
                        <h3 class="__detailheader my-3">{{ __('Cart') }}</h3>
                    </div>
                    <div class="dropdown-divider"><br></div>
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success mt-5">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                        <a class="icon-home my-3"></a>
                    @if(session('cart') == null)
                    <div class="container text-center my-5">
                        <label class="showproduct-title text-muted"> {{ __('Your cart is emty') }} </label>
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
                                <td class="text-right">
                                    {{ $stotal = $details['quantity'] * $details['price'] }}
                                    {{ Form::hidden('invisible', $total += $stotal) }}
                                </td>
                                <td class="actions text-right" data-th="">
                                    <div class="row text-center mt-4" style="margin-left: 0px !important;">
                                        <button class="btn btn-dark btn-sm rounded-0 update-cart"
                                            data-old-url="{{ route('cart.update', ['cart' => $id]) }}"
                                            data-id="{{ $id }}"
                                            data-url="{{ route('cart.update', ['cart' => $id, 'quantity' => $details['quantity']]) }}">
                                            U
                                        </button>
                                        <button class="btn btn-outline-danger btn-sm rounded-0 remove-from-cart"
                                            data-id="{{ $id }}"
                                            data-url="{{ route('cart.update', ['cart' => $id]) }}"></i>R</button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                    @endif
                </div>
            </ul>
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
