
<!DOCTYPE HTML>
<!-- BEGIN html -->
<html lang = "en">
<!-- BEGIN head -->
<head>
    @include('includes.head')
</head>

<!-- BEGIN body -->
<!-- <body> -->
<body class="">

<!-- BEGIN .boxed -->
<div class="boxed">

    <!-- BEGIN .header -->
    <div class="header">
        @include('includes.header')
    </div>


    <!-- BEGIN .main-slider -->
    @if($data['home_page'] == true)
        @include('includes.slider')
    @endif
    <!-- BEGIN .main-slider -->

    <!-- BEGIN .content -->
    <div class="content">
        @yield('content')
    </div>


    <!-- BEGIN #footer -->
    <footer id="footer">
        @include('includes.footer')
    </footer>

    <div class="ot-follow-share">
        <a href="#" class="ot-color-facebook" data-h-title="Facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="ot-color-twitter" data-h-title="Twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="ot-color-google-plus" data-h-title="Google+"><i class="fa fa-google-plus"></i></a>
        <a href="#" class="ot-color-rss" data-h-title="RSS Feed"><i class="fa fa-rss"></i></a>
    </div>

    <div class="ot-responsive-menu-header">
        <a href="#" class="ot-responsive-menu-header-burger"><i class="material-icons">menu</i></a>
        <a href="index.html" class="ot-responsive-menu-header-logo"><img src="{{ URL::asset('public/assets/images/logo.png') }}" alt="" /></a>
    </div>

    <!-- END .boxed -->
</div>

<div class="ot-responsive-menu-content-c-header">
    <a href="#" class="ot-responsive-menu-header-burger"><i class="material-icons">menu</i></a>
</div>
<div class="ot-responsive-menu-content">
    <div class="ot-responsive-menu-content-inner has-search">
        <form action="blog.html" method="get">
            <input type="text" value="" placeholder="Search" />
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
        <ul id="responsive-menu-holder"></ul>
    </div>
</div>
<div class="ot-responsive-menu-background"></div>

<!-- Scripts -->
<script type="text/javascript" src="{{ URL::asset('public/assets/js/jquery-latest.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('public/assets/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('public/assets/js/theia-sticky-sidebar.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('public/assets/js/modernizr.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('public/assets/js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('public/assets/js/shortcode-scripts.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('public/assets/js/theme-scripts.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('public/assets/js/ot-lightbox.min.js') }}"></script>
<script>
    // jQuery('.main-slider-owl').owlCarousel({
    // 	margin: 20,
    // 	responsiveClass: true,
    // 	items: 1,
    // 	nav: true,
    // 	dots: false,
    // 	loop: true,
    // 	autoplay: true,
    // 	autoplayTimeout: 5000,
    // 	autoplayHoverPause: true,
    // 	animateOut: 'slideOutDown',
    // 	animateIn: 'slideInDown'
    // });
    jQuery('.main-slider-owl').owlCarousel({
        margin: 20,
        responsiveClass: true,
        nav: true,
        dots: false,
        loop: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            }
        }
    });
</script>
<!-- Demo Only -->

<!-- END body -->
</body>
<!-- END html -->
</html>