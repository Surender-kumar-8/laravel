<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
</head>

<body class="sb-nav-fixed">
    @include('layouts/navhead')
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            @include('layouts/nav')
        </div>
        <div id="layoutSidenav_content">

            @yield('n-content')
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@include('layouts/footer')
</body>
 <!-- <div id="layoutSidenav">

        @include('layouts/nav')
        @yield('content')
    </div>
    @include('layouts/footer')
    <div> -->

</html>