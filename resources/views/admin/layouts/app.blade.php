<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('admin.layouts.head')

<body>
    <div class="d-flex" id="wrapper">

        {{-- sidebar --}}
        @include('admin.layouts.sidebar')

        <!-- Page Content -->
        <div id="page-content-wrapper">

            {{-- nav bar --}}
            @include('admin.layouts.nav')

            {{-- content --}}
            <div class="mx-5 mt-5">
                @yield('content')
            </div>

            {{-- footer --}}
            @include('admin.layouts.footer')

        </div>
        {{-- <!-- /#page-content-wrapper --> --}}

    </div>
    {{-- <!-- /#wrapper --> --}}

    {{-- footer script --}}
    @include('admin.layouts.footer_scripts')

</body>

</html>
