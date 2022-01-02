<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="{{ mix('admin/css/app.css') }}" type="text/css" rel="stylesheet" />
        <meta name="csrf-token" value="{{ csrf_token() }}" />

        <!-- Vendor CSS Files -->
        <link href="{{asset('admin/frontend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
        <link href="{{asset('admin/frontend/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
        <link href="{{asset('admin/frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('admin/frontend/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
        <link href="{{asset('admin/frontend/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
        <link href="{{asset('admin/frontend/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
        <link href="{{asset('admin/frontend/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
        <link href="{{asset('admin/frontend/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    </head>
    <body>
        <div id="app"></div>

         <!-- Vendor JS Files -->
        <script src="{{asset('admin/frontend/vendor/purecounter/purecounter.js')}}"></script>
        <script src="{{asset('admin/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('admin/frontend/vendor/glightbox/js/glightbox.min.js')}}"></script>
        <script src="{{asset('admin/frontend/vendor/swiper/swiper-bundle.min.js')}}"></script>
        <script src="{{asset('admin/frontend/vendor/php-email-form/validate.js')}}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA6Ry5WzM5kjO4ryPGeoLXL3-lkrAGi0xY&libraries=places"
            async defer></script>

        <script src="{{ mix('admin/js/app.js') }}" type="text/javascript"></script>
    </body>
</html>