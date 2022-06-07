<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="description" content="@yield('meta_description')" />
<meta name="keywords" content="" />

{{-- Facebook Meta --}}
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:image" content="{{ config('app.url') }}/@yield('og:image')">
<meta property="og:title" content="@yield('og:title')" />

<!-- Favicons -->
<link href="{{ asset ('assets/img/icon.png') }}" rel="icon">
<link href="{{ asset ('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

<!-- Google Fonts -->
<link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
<!-- Vendor CSS Files -->
<link href="{{ asset ('assets/vendor/aos/aos.css') }}" rel="stylesheet">
<link href="{{ asset ('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset ('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset ('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
<link href="{{ asset ('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
<link href="{{ asset ('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
<link href="{{ asset ('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="{{ asset ('assets/css/style.css') }}" rel="stylesheet">

<script src="{{ asset('js/app.js') }}" defer></script>
<!-- Vendor JS Files -->
<script src="{{ asset ('assets/vendor/purecounter/purecounter.js') }}" defer></script>
<script src="{{ asset ('assets/vendor/aos/aos.js') }}" defer></script>
<script src="{{ asset ('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>
<script src="{{ asset ('assets/vendor/glightbox/js/glightbox.min.js') }}" defer></script>
<script src="{{ asset ('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}" defer></script>
<script src="{{ asset ('assets/vendor/swiper/swiper-bundle.min.js') }}" defer></script>
<script src="{{ asset ('assets/vendor/php-email-form/validate.js') }}" defer></script>

<!-- Template Main JS File -->
<script src="{{ asset ('assets/js/main.js') }}" defer></script>


<title>@yield('tittle', 'Mytia')</title>

@livewireStyles