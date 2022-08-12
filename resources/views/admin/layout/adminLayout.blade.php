<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="" />
    <meta name="description" content="">
    <meta name="author" content="Mahdi Ghiasy ">
    <link rel = "icon" href = https://www.freeiconspng.com/thumbs/deal-with-it-glasses-png/deal-with-it-glasses-png-clip-art-3.png type = "image/x-icon">
    <title>{{App\Models\Tool::admintl() }}</title>
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
<!--     @yield('mycss') -->

</head>

<body style="background-color: #212121">

<section id="container" class="">
    <!--header start-->
    <header style="background-color: #312f2f" class="header ">
        <div class="sidebar-toggle-box">
            <div data-original-title="Click to toggle close Menu" data-placement="left" class="icon-reorder tooltips"></div>
        </div>
        <!--logo start-->
        <a href="{{ route('Index') }}" class="logo"> <span> MANAGEMENT</span> </a>
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
                                <li><a href=""><i class="icon-eject"></i>Log out</a></li>
                            </ul>
                        </span>
                    </a>

                </li>
            </ul>
        </div>

    </header>

    <aside>
        <div id="sidebar" class="nav-collapse" style="background-color: #4e4a4a">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">
                <li class="sub-menu
                @if (Route::currentRouteName()== 'adminvisit')
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
                <li class="sub-menu
                    @if (Route::currentRouteName() == 'permvisit')
                    active
                    @elseif (Route::currentRouteName() == 'permadd')
                    active
                    @elseif (Route::currentRouteName() == 'visitrole')
                    active
                    @elseif (Route::currentRouteName() == 'addrole')
                    active
                    @endif">
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


                <li class="sub-menu
                @if (Route::currentRouteName() == 'visitcat')
                    active
                @elseif (Route::currentRouteName() == 'addcat')
                    active
                @endif">
                    <a href="javascript:;" class="">
                        <i class="icon-user"></i>
                        <span>Categories</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('visitcat')}}" style="color: #f2f2f2">Manage categories</a></li>
                        <li><a href="{{route('addcat')}}" style="color: #f2f2f2">Add categories</a></li>
                    </ul>
                </li>

                <li class="sub-menu
                @if (Route::currentRouteName() == 'visittag')
                    active
                @elseif (Route::currentRouteName() == 'addtag')
                    active
                @endif
                ">
                    <a href="javascript:;" class="">
                        <i class="icon-archive"></i>
                        <span>Tags</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('visittag')}}" style="color: #f2f2f2">Manage tags</a></li>
                        <li><a href="{{route('addtag')}}" style="color: #f2f2f2">Add tags</a></li>
                    </ul>
                </li>



                <li class="sub-menu
                @if (Route::currentRouteName() == 'visitdiscount')
                    active
                @elseif (Route::currentRouteName() == 'adddiscount')
                    active
                @endif
                ">
                    <a href="javascript:;" class="">
                        <i class="icon-user"></i>
                        <span>Discounts</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('visitdiscount')}}" style="color: #f2f2f2">Manage discounts</a></li>
                        <li><a href="{{route('adddiscount')}}" style="color: #f2f2f2">Add discounts</a></li>
                    </ul>
                </li>

                <li class="sub-menu"
                    @if (Route::currentRouteName() == 'addproduct')
                        active
                    @elseif (Route::currentRouteName() == 'visitproduct')
                       active
                    @endif>
                    <a href="javascript:;" class="">
                        <i class="icon-user"></i>
                        <span>Products</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                       <li><a href="{{route('visitproduct')}}" style="color: #f2f2f2">Manage Products</a></li>
                        <li><a href="{{route('addproduct')}}" style="color: #f2f2f2">Add products</a></li>
                    </ul>
                </li>

                <li class="sub-menu
                @if (Route::currentRouteName() == 'admincomment')
                    active
                @endif">
                    <a href="javascript:;" class="">
                        <i class="icon-user"></i>
                        <span>Comments</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('admincomment')}}" style="color: #f2f2f2">Manage comments</a></li>
                    </ul>
                </li>

                <li class="sub-menu
                @if (Route::currentRouteName() == 'adminprovince')
                    active
                @elseif (Route::currentRouteName() == 'addprovince')
                    active
                @elseif (Route::currentRouteName() == 'admincity')
                    active
                @elseif (Route::currentRouteName() == 'addcity')
                    active
                @endif">
                    <a href="javascript:;" class="">
                        <i class="icon-user"></i>
                        <span>Manage locations</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('adminprovince')}}" style="color: #f2f2f2">Manage province</a></li>
                        <li><a href="{{route('addprovince')}}" style="color: #f2f2f2">Add province</a></li>
                        <li><a href="{{route('admincity')}}" style="color: #f2f2f2">Manage city</a></li>
                        <li><a href="{{route('addcity')}}" style="color: #f2f2f2">Add city</a></li>
                    </ul>
                </li>
                <li class="sub-menu
                @if(Route::currentRouteName() == 'adminaddress')
                    active
                @endif">

                    <a href="javascript:;" class="">
                        <i class="icon-user"></i>
                        <span>Addresses</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('adminaddress')}}" style="color: #f2f2f2">Manage addresses</a></li>
                    </ul>
                </li>
                <li class="sub-menu
                @if(Route::currentRouteName() == 'adminfactor')
                    active
                @endif
                ">
                    <a href="javascript:;" class="">
                        <i class="icon-user"></i>
                        <span>Factors</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('adminfactor')}}" style="color: #f2f2f2">Manage factors</a></li>
                    </ul>
                </li>
                <li class="sub-menu
                @if(Route::currentRouteName() == 'admintransfer')
                    active
                @endif">
                    <a href="javascript:;" class="">
                        <i class="icon-user"></i>
                        <span>Transaction</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('admintransfer')}}" style="color: #f2f2f2">Manage transactions</a></li>
                    </ul>
                </li>
                <li class="sub-menu
                @if(Route::currentRouteName() == 'admincontact')
                    active
                @endif">
                    <a href="javascript:;" class="">
                        <i class="icon-user"></i>
                        <span>Contact Us</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('admincontact')}}" style="color: #f2f2f2">Ù„ÛŒØ³Øª ØªÙ…Ø§Ø³ Ù‡Ø§</a></li>
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
