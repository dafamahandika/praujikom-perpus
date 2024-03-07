<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content=""/>
        <title>WIKBOOK</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('user/images/logo-perpus.png') }}" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('user/css/style.css') }}" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="/user/dashboard"><i class="bi bi-book-fill" style="color: #0dcaf0"></i> WIKBOOK</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto fw-semibold">
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="{{ route('dashboardUser') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/">About</a></li>
                        @yield('list')
                        <a href="{{ route('logout') }}" class="btn btn-info text-decoration-none text-light"><i class="bi bi-person-circle me-1"></i> Logout</a>
                    </ul>
                </div>
            </div>
        </nav>
          @yield('content')
        <!-- Footer-->
        <footer class="py-5 bg-info">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; WIKBOOK 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../user/js/scripts.js"></script>
    </body>
</html>
