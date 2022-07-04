<!doctype html>
<html class="no-js" lang="">

@include('public.layout.head')
@include('public.layout.top')
@include('public.layout.menu')


<body class="pace-on pace-dot">
    <div class="pace-overlay"></div>

    <div id="content" role="main">
        @yield('content')
        <article>

        @include('public.layout.footer')
    </div>
    <a class="go-top go-top-square" href="javascript:void(0)"> <i class="fa fa-angle-up"></i> </a>
    <script type="text/javascript">
        var oxyThemeData = {
            navbarHeight: 130,
            navbarScrolled: 120,
            navbarScrolledPoint: 200,
            menuClose: 'off',
            scrollFinishedMessage: 'No more items to load.',
            hoverMenu:
            {
                hoverActive: true,
                hoverDelay: 200,
                hoverFadeDelay: 200
            },
            siteLoader: 'on'
        };
    </script>
    <script src="{{ asset('public') }}/assets/js/theme.min.js"></script>
</body>

</html>