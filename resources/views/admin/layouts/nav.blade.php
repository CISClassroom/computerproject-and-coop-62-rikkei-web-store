{{-- Navbar --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom fixed-top">
    <a class="navbar-brand icon-nav-rikkeisoft-white-mini" href="{{ route('index') }}"></a>
    <a class="navbar-brand show" id="collapseNavTitle" href="{{ route('index') }}">Admin System</a>
    <div class="icon-edit-tools-white mr-auto" id="menu-toggle" data-toggle="collapse" data-target="#collapseNavTitle"
        aria-expanded="true" aria-controls="collapseNavTitle" style="cursor: pointer;"></div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('index') }}">Dashboard<span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/">Client Site<span class="sr-only"></span></a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li> --}}
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>
