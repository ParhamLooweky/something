<div class="menu navbar navbar-static-top header-logo-center-menu-below oxy-mega-menu text-caps" id="masthead">
    <div class="logo-navbar container-logo">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle collapsed" data-target=".main-navbar" data-toggle="collapse" type="button"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="{{route('Index')}}"> <img alt="Lambda Theme - Shop" src="{{ asset('public') }}/assets/images/shop/lambda-shop.png"> </a>
                <div class="logo-sidebar"></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="nav-container clearfix">
            <nav class="collapse navbar-collapse main-navbar">
                <div class="menu-container">
                    <ul class="nav navbar-nav" id="menu-main">
                        <li class="menu-item  "> <a href="{{ route('Index') }}">Home</a>
                        </li>
                            <ul class="dropdown-menu dropdown-menu-left row" style='background-image: url(assets/images/shop/womens_menu.jpg); background-size: cover;'>
                                <li class="menu-item menu-item-object-oxy_mega_columns menu-item-has-children dropdown-submenu dropdown col-md-3"> <strong>Shop Womens</strong>
                                    <ul class="dropdown-menu-left">
                                        <li class="menu-item"> <a href="/shop-womens-category.html">Skirts

                                                    <span class="label menu-label label-danger">On Sale!</span>

                                            </a> </li>
                                        <li class="menu-item"> <a href="/shop-womens-category.html">Jeans

                                            </a> </li>
                                        <li class="menu-item"> <a href="/shop-womens-category.html">Tops

                                            </a> </li>
                                        <li class="menu-item"> <a href="/shop-womens-category.html">Bags

                                            </a> </li>
                                    </ul>
                                </li>

                                <li class="menu-item menu-item-object-oxy_mega_columns menu-item-has-children dropdown-submenu dropdown col-md-3"> <strong>Best Sellers</strong>
                                    <ul class="dropdown-menu-left">
                                        <li class="menu-item"> <a href="/shop-womens-category.html">Top 10

                                            </a> </li>
                                        <li class="menu-item"> <a href="/shop-womens-category.html">Recommended

                                            </a> </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item dropdown  "> <a class="dropdown-toggle" data-toggle="dropdown" href="/#">Pages</a>
                            <ul class="dropdown-menu dropdown-menu-left ">
                                <li class="menu-item"> <a href="/shop-mens-category.html">Simple Category</a> </li>
                                <li class="menu-item"> <a href="/shop-video-category.html">Video Category</a> </li>
                                <li class="menu-item"> <a href="/shop-simple-product.html">Single Product</a> </li>
                                <li class="menu-item"> <a href="{{route('cart')}}">Cart</a> </li>
                                <li class="menu-item"> <a href="{{route('billing')}}">Checkout</a> </li>
                            </ul>
                        </li>


                        <li class="menu-item dropdown  "> <a href="{{ route('contacts') }}" >Contact</a> </li>
                    </ul>
                </div>
                <div class="menu-sidebar">
                    <div  class="sidebar-widget widget_shopping_cart">
                        <h3 class="sidebar-header">Cart</h3>
                        <div class="widget_shopping_cart_content">
                            <div class="mini-cart-overview dropdown navbar-right">
                                <a data-toggle="dropdown"> <i class="icon icon-bag animated pulse-two"></i> <span class="mini-cart-count">5</span> <span href="{{route('cart')}}" class="amount">$114.96</span> </a>
                                <ul href="#" class="dropdown-menu product_list_widget">
                                    <li>
                                        <div class="product-mini">
                                            <div class="product-image">
                                                <a href="shop-simple-product.html"> <img alt="hoodie1-1" height="114" src="{{ asset('public') }}/assets/images/shop/hoodie1-1-90x114.jpg" width="90"> </a>
                                            </div>
                                            <div class="product-details">
                                                <h4 class="product-details-heading"><a href="shop-simple-product.html">Mens Sporty Hoodie</a></h4>
                                                <p></p>
                                                <p><span class="quantity">1 × <span class="amount">$24.99</span></span>
                                                </p><a class="remove" href="#" title="Remove this item">×</a> </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="product-mini">
                                            <div class="product-image">
                                                <a href="shop-simple-product.html"> <img alt="jacket1-1" height="114" src="{{ asset('public') }}/assets/images/shop/jacket1-1-90x114.jpg" width="90"> </a>
                                            </div>
                                            <div class="product-details">
                                                <h4 class="product-details-heading"><a href="shop-simple-product.html">Mens Bomber Jacket</a></h4>
                                                <p></p>
                                                <p><span class="quantity">1 × <span class="amount">$32.99</span></span>
                                                </p><a class="remove" href="#" title="Remove this item">×</a> </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="product-mini">
                                            <div class="product-image">
                                                <a href="shop-simple-product.html"> <img alt="skirt1-1" height="114" src="{{ asset('public') }}/assets/images/shop/skirt1-1-90x114.jpg" width="90"> </a>
                                            </div>
                                            <div class="product-details">
                                                <h4 class="product-details-heading"><a href="shop-simple-product.html">White Skirt</a></h4>
                                                <p></p>
                                                <p><span class="quantity">1 × <span class="amount">$20.00</span></span>
                                                </p><a class="remove" href="#" title="Remove this item">×</a> </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="product-mini">
                                            <div class="product-image">
                                                <a href="shop-simple-product.html"> <img alt="kidspants2-1" height="105" src="{{ asset('public') }}/assets/images/shop/kidspants2-1-90x105.jpg" width="90"> </a>
                                            </div>
                                            <div class="product-details">
                                                <h4 class="product-details-heading"><a href="shop-simple-product.html">Lazy Sweatpants</a></h4>
                                                <p></p>
                                                <p><span class="quantity">1 × <span class="amount">$16.99</span></span>
                                                </p><a class="remove" href="#" title="Remove this item">×</a> </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="product-mini">
                                            <div class="product-image">
                                                <a href="shop-simple-product.html"> <img alt="kidsjacket2-1" height="105" src="{{ asset('public') }}/assets/images/shop/kidsjacket2-1-90x105.jpg" width="90"> </a>
                                            </div>
                                            <div class="product-details">
                                                <h4 class="product-details-heading"><a href="shop-simple-product.html">Patterned Hooded Jacket</a></h4>
                                                <p></p>
                                                <p><span class="quantity">1 × <span class="amount">$19.99</span></span>
                                                </p><a class="remove" href="#" title="Remove this item">×</a> </div>
                                        </div>
                                    </li>
                                    <li>
                                        <p class="total"><strong>Subtotal:</strong> <span class="amount">$114.96</span></p>
                                        <div class="buttons"> <a href="shop-cart.html">View Cart</a> <a href="shop-checkout.html">Checkout</a> </div>
                                    </li>
                                </ul>
                                <!-- end product list -->
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
