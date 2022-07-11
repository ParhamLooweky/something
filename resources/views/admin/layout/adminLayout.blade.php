<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="" />
    <meta name="description" content="">
    <meta name="author" content="Hossein Pourghadiri">
    <title></title>
    <!-- Bootstrap core CSS -->
    <link rel="shortcut icon" href="">

    <link href="{{asset('admin')}}/css/bootstrap-slider.css" rel="stylesheet">
    <link href="{{asset('admin')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('admin')}}/css/bootstrap-reset.css" rel="stylesheet">
    <link href="{{asset('admin')}}/js/bootstrap-datepicker.min.css" rel="stylesheet">

    <!--external css-->
    <link href="{{asset('admin')}}/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="{{asset('admin')}}/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="{{asset('admin')}}/css/owl.carousel.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template -->
    <link href="{{asset('admin')}}/css/style.css" rel="stylesheet">
    <link href="{{asset('admin')}}/css/style-responsive.css" rel="stylesheet" />

    <script src="{{asset('admin')}}/js/jquery.js"></script>
    <script src="{{asset('admin')}}/js/jquery-1.8.3.min.js"></script>
    @yield('css')

</head>

<body>

<section id="container" class="">
    <!--header start-->
    <header class="header white-bg">
        <div class="sidebar-toggle-box">
            <div data-original-title="برای باز و بسته شدن منو کلیک کنید" data-placement="left" class="icon-reorder tooltips"></div>
        </div>
        <!--logo start-->
        <a href="" class="logo">  مدیریت <span> SHOP</span></a>
        <!--logo end-->

        <div class="top-nav ">
            <ul class="nav pull-left top-menu">

                <li id="header_notification_bar" class="dropdown">
                    <a href="{{route('adminlayout')}}">Home</a>

                </li>

                <li class="dropdown">

                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="username">
                              Mahdi Ghiasy
                            <b class="caret"></b>
                            <ul class="dropdown-menu extended logout">
                                <div class="log-arrow-up"></div>
                                <p></p>
                                <li><a href=""><i class="icon-eject"></i> خروج</a></li>
                            </ul>
                        </span>
                    </a>

                </li>
            </ul>
        </div>

    </header>

    <aside>
        <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">
                <li class="sub-menu @if (Route::currentRouteName()== 'adminvisit')
                active
                @elseif (Route::currentRouteName()=='adduser')
                active

                @endif">
                    <a href="javascript:;" class="">
                        <i class="icon-user"></i>
                        <span>Users</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ route('adminvisit') }}" style="color: #f2f2f2"> Users List</a></li>
                        <li><a href="{{ route('adduser') }}" style="color: #f2f2f2">Add User</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-ban-circle"></i>
                        <span>Levels of Access</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li> <a href="{{route('permvisit')}}" style="color: #f2f2f2">Manage levels of access</a></li>
                        <li> <a href="{{route('permadd')}}" style="color: #f2f2f2">Add levels of access</a></li>
                        <li> <a href="{{route('visitrole')}}" style="color: #f2f2f2">Manage roles</a></li>
                        <li> <a href="{{route('addrole')}}" style="color: #f2f2f2">Add roles</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-user"></i>
                        <span>Categories</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('visitcat')}}" style="color: #f2f2f2">لیست دسته ها</a></li>
                        <li><a href="{{route('addcat')}}" style="color: #f2f2f2">افزودن دسته</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-archive"></i>
                        <span>Tags</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('visittag')}}" style="color: #f2f2f2">لیست تگ ها</a></li>
                        <li><a href="{{route('addtag')}}" style="color: #f2f2f2">افزودن تگ</a></li>
                    </ul>
                </li>



                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-user"></i>
                        <span>Discounts</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a href="" style="color: #f2f2f2">لیست تخفیف ها</a></li>
                        <li><a href="" style="color: #f2f2f2">افزودن تخفیف</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-user"></i>
                        <span>محصولات</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a href="" style="color: #f2f2f2">لیست محصولات</a></li>
                        <li><a href="" style="color: #f2f2f2">افزودن محصولات</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-user"></i>
                        <span>Comments</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a href="" style="color: #f2f2f2">لیست نظر ها</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-user"></i>
                        <span>مدیریت شهر و استان</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a href="" style="color: #f2f2f2">لیست استان ها</a></li>
                        <li><a href="" style="color: #f2f2f2">افزودن استان</a></li>
                        <li><a href="" style="color: #f2f2f2">لیست شهر</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-user"></i>
                        <span>آدرس ها</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a href="" style="color: #f2f2f2">لیست آدرس ها</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-user"></i>
                        <span>فاکتور ها</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a href="" style="color: #f2f2f2">لیست فاکتور ها</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-user"></i>
                        <span>تراکنش ها</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a href="" style="color: #f2f2f2">لیست تراکنش ها</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-user"></i>
                        <span>تماس با ما</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a href="" style="color: #f2f2f2">لیست تماس ها</a></li>
                    </ul>
                </li>

            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>

    @yield('content')

</section>

</body>

<script src="{{asset('admin')}}/js/bootstrap.min.js"></script>
<script src="{{asset('admin')}}/js/jquery.scrollTo.min.js"></script>
<script src="{{asset('admin')}}/js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="{{asset('admin')}}/js/jquery.sparkline.js" type="text/javascript"></script>
<script src="{{asset('admin')}}/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="{{asset('admin')}}/js/owl.carousel.js" ></script>
<script src="{{asset('admin')}}/js/jquery.customSelect.min.js" ></script>

<!--common script for all pages-->
<script src="{{asset('admin')}}/js/common-scripts.js"></script>
<!--script for this page-->
<script src="{{asset('admin')}}/js/sparkline-chart.js"></script>
<script src="{{asset('admin')}}/js/easy-pie-chart.js"></script>
<script src="{{asset('admin')}}/js/bootstrap-select.js"></script>
@yield('js')
</html>
