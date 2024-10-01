<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Perpustakaan Digital</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body class="bg-white">
    <div class="container-scroller">
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row shadow-sm">
            <div class="navbar-brand-wrapper d-flex align-items-center justify-content-center bg-primary">
                <h4 class="perpus text-black m-0">Perpustakaan Digital</h4>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end bg-white">
                <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item">
                        <a href="#" class="btn btn-outline-primary mx-2">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="btn btn-outline-primary mx-2">Login</a>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="ti-view-list"></span>
                </button>
            </div>
        </nav>
        <div class="container-fluid page-body-wrapper">
            @yield('konten')
        </div>
    </div>
    <script src="{{ asset('vendors/base/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('js/off-canvas.js') }}"></script>
    <script src="{{ asset('js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('js/template.js') }}"></script>
</body>
</html>