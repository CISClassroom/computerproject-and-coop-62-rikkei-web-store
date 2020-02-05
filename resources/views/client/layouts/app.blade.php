<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('client.layouts.head')

<body>

    @include('client.layouts.nav')

    <!-- Modal -->
    @include('auth.login-modal')
    @include('auth.register-modal')
    @include('auth.passwords.email-modal')

    {{-- Alert --}}
    {{-- @if(Session::has('success'))
  <script type="text/javascript">
     swal({
         title:'Success!',
         text:"{{Session::get('success')}}",
         timer:5000,
         type:'success'
     }).then((value) => {
       //location.reload();
     }).catch(swal.noop);
 </script>
 @endif --}}

    @yield('content')

    @include('client.layouts.footer')

    @include('client.layouts.footer-scripts')

</body>

</html>
