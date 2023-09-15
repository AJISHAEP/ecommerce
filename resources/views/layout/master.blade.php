<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecommerce</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href={{ asset('css/fontawesome-free/css/all.css') }}>
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href={{ asset('css/adminlte.css') }}>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        @include('layout.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->

        @include('layout.left_menu')


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        @include('layout.footer')
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src={{ asset('js/jquery.min.js') }}></script>
    <!-- Bootstrap -->
    <script src={{ asset('js/bootstrap.bundle.min.js') }}></script>
    <!-- AdminLTE -->
    <script src={{ asset('js/adminlte.js') }}></script>
    <script>

        // Function to hide the flash message after 3 seconds

        setTimeout(function() {

            var flashMessage = document.querySelector('.flashMessage');

            if (flashMessage) {

                flashMessage.style.display = 'none';

            }

        }, 3000); // 3000 milliseconds (3 seconds)

    </script>

</body>

</html>
