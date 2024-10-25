<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - HRSync</title>

    <!-- CSS AdminLTE dan Font Awesome -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    @stack('styles')
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Header -->
        @include('admin.layouts.header')

        <!-- Sidebar -->
        @include('admin.layouts.sidebar')

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <!-- Breadcrumb -->
            @include('admin.layouts.breadcrumb')

            <!-- Content -->
            <section class="content">
                @yield('content')
            </section>
        </div>

        <!-- Footer -->
        @include('admin.layouts.footer')
    </div>

    <!-- Script AdminLTE dan jQuery -->
    <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
    <script>
        // Setup CSRF token for AJAX requests
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>
    @stack('scripts')
</body>
</html>
