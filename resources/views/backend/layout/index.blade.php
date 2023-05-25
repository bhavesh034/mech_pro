<!DOCTYPE HTML>
<html lang="en">



<head>
    <meta charset="utf-8">
    <title>Evara Dashboard</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/backend/imgs/theme/favicon.svg')}}">

    <!-- Template CSS -->
    <link href="{{ asset('assets/backend/css/main.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="screen-overlay"></div>
    @include('backend.layout.sidebar')
    <main class="main-wrap">
    @include('backend.layout.header')
 
    @include('backend.layout.footer')
        
    </main>
    <script src="{{ asset('assets/backend/js/vendors/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/vendors/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/vendors/select2.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/vendors/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/backend/js/vendors/jquery.fullscreen.min.js') }}"></script>
    <!-- Main Script -->
    <script src="{{ asset('assets/backend/js/main.js') }}" type="text/javascript"></script>
</body>


<!-- Mirrored from wp.alithemes.com/html/evara/evara-backend/page-products-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Aug 2021 15:33:21 GMT -->
</html>