<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('client.layouts.head')

<body>

    @include('client.layouts.nav')

    <!-- Modal -->
    @include('auth.login-modal')
    @include('auth.register-modal')
    @include('auth.passwords.email-modal')


    @yield('content')

    @include('client.layouts.footer')

    @include('client.layouts.footer-scripts')

</body>

</html>
