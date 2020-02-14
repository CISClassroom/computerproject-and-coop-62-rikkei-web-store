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
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light"
@can('isAdmin')style="margin-top: 80px;"@endcan
@can('isManager')style="margin-top: 80px;"@endcan>

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
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
            @endguest
            {{-- <button class="btn btn-outline-transparent icon-user rounded-0 my-2" type="button" data-toggle="modal"
                data-target="#loginModal"></button> --}}
            <a href="#" class="btn btn-outline-transparent icon-question rounded-0 my-2" type="button"></a>
            <a href="#" class="btn btn-outline-transparent icon-cart rounded-0 my-2" type="button"></a>

        </div>
    </div>

</nav>

<div class="mb-5"></div>
@can('isAdmin')
    <div class="btn btn-success btn-lg">
        You have Admin Access
    </div>
    @elsecan('isManager')
    <div class="btn btn-primary btn-lg">
        You have Manager Access
    </div>
@endcan
