<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('client.layouts.head')

<body @can('isAdmin') style="padding-top: 100px;" @elsecan('isManager') style="padding-top: 100px;" @endcan>

    {{-- @include('client.layouts.header') --}}
    @include('client.layouts.nav')

    <!-- Modal -->
    @include('auth.login-modal')
    @include('auth.register-modal')
    @include('auth.passwords.email-modal')
    @include('client.layouts.policy-modal')
    @include('client.layouts.terms-modal')
    {{-- @include('client.shop.carts.cart-modal') --}}

    @yield('content')


    @include('client.layouts.footer')

    @include('client.layouts.footer_scripts')

    @include('client.layouts.custom_scripts')


</body>

</html>
