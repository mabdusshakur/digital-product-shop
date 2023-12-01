<!doctype html>
<html lang="en" class="semi-dark">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('resources/admin/assets/images/favicon-32x32.png') }}" type="image/png" />
    <!--plugins-->
    <link href="{{ asset('resources/admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <link href="{{ asset('resources/admin/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('resources/admin/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="{{ asset('resources/admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('resources/admin/assets/css/bootstrap-extended.css') }}" rel="stylesheet" />
    <link href="{{ asset('resources/admin/assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('resources/admin/assets/css/icons.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- loader-->
    <link href="{{ asset('resources/admin/assets/css/pace.min.css') }}" rel="stylesheet" />

    <!--Theme Styles-->
    <link href="{{ asset('resources/admin/assets/css/semi-dark.css') }}" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    @livewireStyles

    <title>Admin Template</title>
</head>

<body>


    <!--start wrapper-->
    <div class="wrapper">
        <!--start top header-->
        @livewire('admin.header-component')
        <!--end top header-->

        <!--start sidebar -->
        @livewire('admin.sidebar-component')
        <!--end sidebar -->

        <!--start content-->
        <main class="page-content">
            {{ $slot }}
        </main>
        <!--end page main-->

        <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
        <!--end overlay-->

        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
    </div>
    <!--end wrapper-->


    <!-- Bootstrap bundle JS -->
    <script src="{{ asset('resources/admin/assets/js/bootstrap.bundle.min.js') }}"></script>
    <!--plugins-->
    <script src="{{ asset('resources/admin/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('resources/admin/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('resources/admin/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('resources/admin/assets/js/pace.min.js') }}"></script>
    <!-- Vector map JavaScript -->
    <script src="{{ asset('resources/admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('resources/admin/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!--app-->
    <script src="{{ asset('resources/admin/assets/js/app.js') }}"></script>
    <script src="{{ asset('resources/admin/assets/js/index.js') }}"></script>
    @livewireScripts

</body>

</html>
