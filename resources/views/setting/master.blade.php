@include('setting.header')

<body>

<!-- ======= Mobile nav toggle button ======= -->
<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

<!-- ======= Header ======= -->
@include('setting.sidebar')
<!-- ======= Hero Section ======= -->
<!-- End Hero -->

<main id="main">
@yield('content')

</main><!-- End #main -->


@include('setting.footer')
</body>

</html>
