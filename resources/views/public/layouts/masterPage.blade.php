<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="canonical" href="{{ url('/')}}" />
    <meta name="robots" content="all, index, follow" />
    <meta name="revisit-after" content="1 days" />
    <meta name="GOOGLEBOT" content="index, follow" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:description"
        content="Eagle Eye Security Sdn. Bhd. is the Best Security guard company in Malaysia, Providing highly trained armed and unarmed Security Guards and Ghurkha Guards" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url('/')}}" />
    <meta property="og:site_name" content="Eagle Eye Security Guard|" />
    <meta property="og:image" content="{{ url('/assets/images/Eagle_Eye_security_about.jpg') }}" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@Eagleeyesecurity" />
    <meta name="twitter:domain" content="Eagle Eye Security Guard" />
    <meta name="twitter:creator" content="@Eagleeyesecurity" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />

    <title>@yield('title')</title>
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="description" content="@yield('description')" />


    <?php /*
    <title>One Stop Security Solutions Consultation, Security guard company in Malaysia, best security guard company in
            kl, No.# security guard company in kl, best security guard company in Penang, No.1# security guard company in
            Penang Best security guard company in malaysia - Security Company in Malaysia | Security Guards Malaysia|
            Security Guards |Local Guards Malaysia | Local Guards</title>
    <meta name="keywords" content="Malaysia Security Guard Company,security service,security service company Malaysia, Security Malaysia, security service company in Malaysia,&lt;br /&gt;security service company in kl,&lt;br /&gt;security service company kl" />
    <meta name="description" content="Eagle Eye Security Sdn Bhd is a principal company (Not franchise). Eagle Eye Security is a leading security services provider company in malaysia. Established 2002, The Security Guard Services in our company are one of the highest quality security services in Malaysia with good pricing available in the market. We are specialized in High End Condominium and Commercial Building for the provision as Private Agency in Malaysia ,Eagle Eye Security provides security, monitoring, consulting and investigative services. Our security solutions are tailored to your business needs" />
    */ ?>

    <!-- favicon -->
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}" sizes="20x20" type="image/png" />
    <!-- animate -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
    <!-- Nice Select -->
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" />
    <!-- iconmoon -->
    <link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <!-- Responsive -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
</head>

<body>
    <div class="body-overlay" id="body-overlay"></div>
    <div class="search-popup" id="search-popup">
        <form action="#" class="search-form">
            <div class="container custom-container">
                <div class="form-group-wrap">
                    <div class="form-group mb-0">
                        <input type="text" name="s" class="form-control" placeholder="Search....">
                    </div>
                    <button class="close-btn border-none submit-btn"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>
    </div>
    <div class="header-style-01">
        <!-- top bar area start -->

        @include('public/layouts/header_top')
        <!-- top bar areda end -->

        <!-- main  navbar area start -->

        @include('public/layouts/menu')

        <!-- main navbar area end -->
    </div>




    @yield('contents')







    <!-- footer area start -->
    @include('public/layouts/footer')
    <!-- footer area end -->

    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->

    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- magnific popup -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script>
    <!-- wow -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <!-- owl carousel -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <!-- Nice Select -->
    <script src="{{ asset('assets/js/jquery.nice-select.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <!-- isotop -->
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <!-- isotop image load -->
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- isotop image load -->
    <script src="{{ asset('assets/js/jQuery.Progressbar.js') }}"></script>
    <!-- countdown -->
    <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
