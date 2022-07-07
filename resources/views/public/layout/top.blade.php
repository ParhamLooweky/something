<div class="top-bar">
    <div class="container">
        <div class="top top-left">
            <div class="sidebar-widget text-left small-screen-center widget_text">
             {{ Verta::today()->format('d M Y') }}

             </div>
        </div>
        <div class="top top-right">
            <div class="sidebar-widget text-right small-screen-center widget_nav_menu" id="nav_menu-5">
                <div class="menu-top-bar-menu-container">
                    <ul class="menu">
                        <li> <a href="{{route('login')}}">Login</a> </li>
                        <li> <a href="{{route('register')}}">Register</a> </li>
                    </ul>
                </div>
            </div>
            <div class="sidebar-widget text-right small-screen-center widget_search">
                <form action="shop-index.html" method="get" name="searchform">
                    <div class="input-group">
                        <input class="form-control" id="s" name="s" placeholder="Search" type="text"> <span class="input-group-btn">
                            <button class="btn btn-primary" type="submit" id="searchsubmit" value="Search">
                                <i class="fa fa-search"></i>
                            </button>
                        </span> </div>
                </form>
            </div>
        </div>
    </div>
</div>
