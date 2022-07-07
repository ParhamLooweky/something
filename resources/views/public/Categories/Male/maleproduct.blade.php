@extends('public.layout.index')



@section('content')
    <article>
        <section class="section">
            <div class="background-overlay grid-overlay-0 " style="background-color: rgba(240,240,240,1);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-left element-top-30 element-bottom-30 text-normal normal regular" data-os-animation="none" data-os-animation-delay="0s">
                            Shop Right
                        </h1> </div>
                </div>
            </div>
        </section>
        <section class="section section-commerce">
            <div class="container element-top-50 element-bottom-50">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <ol class="breadcrumb">
                                    <li><a class="home" href="shop-index.html">Home</a></li>
                                    <li>Shop Right</li>
                                </ol>
                            </div>
                            <div class="col-md-6 text-left">
                                <p class="woocommerce-result-count"> Showing 1&ndash;9 of 31 results </p>
                                <form class="woocommerce-ordering pull-right" method="get">
                                    <select name="orderby" class="orderby">
                                        <option value="menu_order" selected='selected'>Default sorting</option>
                                        <option value="popularity">Sort by popularity</option>
                                        <option value="rating">Sort by average rating</option>
                                        <option value="date">Sort by newness</option>
                                        <option value="price">Sort by price: low to high</option>
                                        <option value="price-desc">Sort by price: high to low</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <ul class="products list-container">
                                <li class="product col-md-4 sale">
                                    <a href="shop-simple-product.html"> <span class="onsale">Sale!</span>
                                        <div class="product-image">
                                            <div class="product-image-front"> <img width="700" height="893" src="assets/images/shop/skirt1-1-700x893.jpg" alt="skirt1-1" /> </div>
                                            <div class="product-image-back"> <img src="assets/images/shop/skirt1-2-700x893.jpg" alt="" /> </div>
                                            <div class="product-image-overlay">
                                                <h4>View Details</h4>
                                                <div class="star-rating" title="Rated 5.00 out of 5"> <span style="width:100%"><strong class="rating">5.00</strong> out of 5</span> </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="product-info">
                                        <h3 class="product-title">
                                            <a href="shop-simple-product.html">
                                                White Skirt
                                            </a>
                                        </h3> <span class="product-categories">
				                    	<a href="shop-mens-category.html" rel="tag">Jeans</a>,
				                    	<a href="shop-mens-category.html" rel="tag">Skirts</a>,
				                    	<a href="shop-mens-category.html" rel="tag">Tops</a>,
				                    	<a href="shop-mens-category.html" rel="tag">Womens</a>
				                    </span>
                                        <h3 class="price">
                                            <del><span class="amount">&#36;30.00</span></del> <ins><span class="amount">&#36;20.00</span></ins>
                                        </h3> <a href="#" rel="nofollow" class="add-to-cart-button add_to_cart_button product_type_simple"><i class="icon-bag"></i></a> </div>
                                </li>
                                <li class="product col-md-4 sale">
                                    <a href="shop-simple-product.html"> <span class="onsale">Sale!</span>
                                        <div class="product-image">
                                            <div class="product-image-front"> <img width="700" height="893" src="assets/images/shop/skirt4-1-700x893.jpg" alt="skirt4-1" /> </div>
                                            <div class="product-image-back"> <img src="assets/images/shop/skirt4-2-700x893.jpg" alt="" /> </div>
                                            <div class="product-image-overlay">
                                                <h4>View Details</h4> </div>
                                        </div>
                                    </a>
                                    <div class="product-info">
                                        <h3 class="product-title">
                                            <a href="shop-simple-product.html">
                                                Ra Ra Skirt
                                            </a>
                                        </h3> <span class="product-categories">
				                    	<a href="shop-mens-category.html" rel="tag">Skirts</a>,
				                    	<a href="shop-mens-category.html" rel="tag">Tops</a>,
				                    	<a href="shop-mens-category.html" rel="tag">Womens</a>
				                    </span>
                                        <h3 class="price">
                                            <del><span class="amount">&#36;49.99</span></del> <ins><span class="amount">&#36;39.99</span></ins>
                                        </h3> <a href="#" rel="nofollow" class="add-to-cart-button add_to_cart_button product_type_simple"><i class="icon-bag"></i></a> </div>
                                </li>
                                <li class="product col-md-4">
                                    <a href="shop-simple-product.html">
                                        <div class="product-image">
                                            <div class="product-image-front"> <img width="700" height="893" src="assets/images/shop/jeans1-1-700x893.jpg" alt="jeans1-1" /></div>
                                            <div class="product-image-back"> <img src="assets/images/shop/jeans1-2-700x893.jpg" alt="" /> </div>
                                            <div class="product-image-overlay">
                                                <h4>View Details</h4> </div>
                                        </div>
                                    </a>
                                    <div class="product-info">
                                        <h3 class="product-title">
                                            <a href="shop-simple-product.html">
                                                Womens Jeans
                                            </a>
                                        </h3> <span class="product-categories">
				                    	<a href="shop-mens-category.html" rel="tag">Jeans</a>,
				                    	<a href="shop-mens-category.html" rel="tag">Tops</a>,
				                    	<a href="shop-mens-category.html" rel="tag">Womens</a>
				                    </span>
                                        <h3 class="price">
                                            <span class="amount">&#36;29.00</span>
                                        </h3> <a href="#" rel="nofollow" class="add-to-cart-button add_to_cart_button product_type_simple"><i class="icon-bag"></i></a> </div>
                                </li>
                                <li class="product col-md-4 sale">
                                    <a href="shop-simple-product.html"> <span class="onsale">Sale!</span>
                                        <div class="product-image">
                                            <div class="product-image-front"> <img width="700" height="893" src="assets/images/shop/top1-1-700x893.jpg" alt="top1-1" /> </div>
                                            <div class="product-image-back"> <img src="assets/images/shop/top1-2-700x893.jpg" alt="top1-2" /> </div>
                                            <div class="product-image-overlay">
                                                <h4>View Details</h4> </div>
                                        </div>
                                    </a>
                                    <div class="product-info">
                                        <h3 class="product-title">
                                            <a href="shop-simple-product.html">
                                                Woo Top Fancy
                                            </a>
                                        </h3> <span class="product-categories">
				                    	<a href="shop-mens-category.html" rel="tag">Jeans</a>,
				                    	<a href="shop-mens-category.html" rel="tag">Tops</a>,
				                    	<a href="shop-mens-category.html" rel="tag">Womens</a>
				                    </span>
                                        <h3 class="price">
                                            <del><span class="amount">&#36;33.00</span></del> <ins><span class="amount">&#36;24.00</span></ins>
                                        </h3> <a href="#" rel="nofollow" class="add-to-cart-button add_to_cart_button product_type_simple"><i class="icon-bag"></i></a> </div>
                                </li>
                                <li class="product col-md-4">
                                    <a href="shop-simple-product.html">
                                        <div class="product-image">
                                            <div class="product-image-front"> <img width="700" height="893" src="assets/images/shop/top2-1-700x893.jpg" alt="top2-1" /> </div>
                                            <div class="product-image-back"> <img src="assets/images/shop/top2-2-700x893.jpg" alt="" /> </div>
                                            <div class="product-image-overlay">
                                                <h4>View Details</h4> </div>
                                        </div>
                                    </a>
                                    <div class="product-info">
                                        <h3 class="product-title">
                                            <a href="shop-simple-product.html">
                                                Woo Top Black
                                            </a>
                                        </h3> <span class="product-categories">
				                    	<a href="shop-mens-category.html" rel="tag">Jeans</a>,
				                    	<a href="shop-mens-category.html" rel="tag">Tops</a>,
				                    	<a href="shop-mens-category.html" rel="tag">Womens</a>
				                    </span>
                                        <h3 class="price">
                                            <span class="amount">&#36;21.00</span>
                                        </h3> <a href="#" rel="nofollow" class="add-to-cart-button add_to_cart_button product_type_simple"><i class="icon-bag"></i></a> </div>
                                </li>
                                <li class="product col-md-4 sale">
                                    <a href="shop-simple-product.html"> <span class="onsale">Sale!</span>
                                        <div class="product-image">
                                            <div class="product-image-front"> <img width="700" height="893" src="assets/images/shop/dress1-1-700x893.jpg" alt="dress1-1" /> </div>
                                            <div class="product-image-back"> <img src="assets/images/shop/dress1-2-700x893.jpg" alt="" /> </div>
                                            <div class="product-image-overlay">
                                                <h4>View Details</h4>
                                                <div class="star-rating" title="Rated 3.00 out of 5"> <span style="width:60%"><strong class="rating">3.00</strong> out of 5</span> </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="product-info">
                                        <h3 class="product-title">
                                            <a href="shop-simple-product.html">
                                                Woo Dress
                                            </a>
                                        </h3> <span class="product-categories">
				                    	<a href="shop-mens-category.html" rel="tag">Skirts</a>,
				                    	<a href="shop-mens-category.html" rel="tag">Womens</a>
				                    </span>
                                        <h3 class="price">
                                            <del><span class="amount">&#36;15.00</span></del> <ins><span class="amount">&#36;12.00</span></ins>
                                        </h3> <a href="#" rel="nofollow" class="add-to-cart-button add_to_cart_button product_type_simple"><i class="icon-bag"></i></a> </div>
                                </li>
                                <li class="product col-md-4 sale">
                                    <a href="shop-simple-product.html"> <span class="onsale">Sale!</span>
                                        <div class="product-image">
                                            <div class="product-image-front"> <img width="700" height="893" src="assets/images/shop/jacket2-1-700x893.jpg" alt="jacket2-1" /> </div>
                                            <div class="product-image-back"> <img src="assets/images/shop/jacket2-2-700x893.jpg" alt="" /> </div>
                                            <div class="product-image-overlay">
                                                <h4>View Details</h4> </div>
                                        </div>
                                    </a>
                                    <div class="product-info">
                                        <h3 class="product-title">
                                            <a href="shop-simple-product.html">
                                                Mens Bomber In Jersey
                                            </a>
                                        </h3> <span class="product-categories">
				                    	<a href="shop-mens-category.html" rel="tag">Hoodies</a>,
				                    	<a href="shop-mens-category.html" rel="tag">Jackets</a>,
				                    	<a href="shop-mens-category.html" rel="tag">Mens</a>
				                    </span>
                                        <h3 class="price">
                                            <del><span class="amount">&#36;42.99</span></del> <ins><span class="amount">&#36;26.99</span></ins>
                                        </h3> <a href="#" rel="nofollow" class="add-to-cart-button add_to_cart_button product_type_simple"><i class="icon-bag"></i></a> </div>
                                </li>
                                <li class="product col-md-4">
                                    <a href="shop-simple-product.html">
                                        <div class="product-image">
                                            <div class="product-image-front"> <img width="700" height="893" src="assets/images/shop/jacket1-1-700x893.jpg" alt="jacket1-1" /> </div>
                                            <div class="product-image-back"> <img src="assets/images/shop/jacket1-2-700x893.jpg" alt="" /> </div>
                                            <div class="product-image-overlay">
                                                <h4>View Details</h4> </div>
                                        </div>
                                    </a>
                                    <div class="product-info">
                                        <h3 class="product-title">
                                            <a href="shop-simple-product.html">
                                                Mens Bomber Jacket
                                            </a>
                                        </h3> <span class="product-categories">
				                    	<a href="shop-mens-category.html" rel="tag">Hoodies</a>,
				                    	<a href="shop-mens-category.html" rel="tag">Jackets</a>,
				                    	<a href="shop-mens-category.html" rel="tag">Mens</a>,
				                    	<a href="shop-mens-category.html" rel="tag">Shirts</a>
				                    </span>
                                        <h3 class="price">
                                            <span class="amount">&#36;32.99</span>
                                        </h3> <a href="#" rel="nofollow" class="add-to-cart-button add_to_cart_button product_type_simple"><i class="icon-bag"></i></a> </div>
                                </li>
                                <li class="product col-md-4">
                                    <a href="shop-simple-product.html">
                                        <div class="product-image">
                                            <div class="product-image-front"> <img width="700" height="893" src="assets/images/shop/hoodie1-1-700x893.jpg" alt="hoodie1-1" /> </div>
                                            <div class="product-image-back"> <img src="assets/images/shop/hoodie1-2-700x893.jpg" alt="" /> </div>
                                            <div class="product-image-overlay">
                                                <h4>View Details</h4>
                                                <div class="star-rating" title="Rated 4.00 out of 5"> <span style="width:80%"><strong class="rating">4.00</strong> out of 5</span> </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="product-info">
                                        <h3 class="product-title">
                                            <a href="shop-simple-product.html">
                                                Mens Sporty Hoodie
                                            </a>
                                        </h3> <span class="product-categories">
				                    	<a href="shop-mens-category.html" rel="tag">Hoodies</a>,
				                    	<a href="shop-mens-category.html" rel="tag">Jackets</a>,
				                    	<a href="shop-mens-category.html" rel="tag">Mens</a>
				                    </span>
                                        <h3 class="price">
                                            <span class="amount">&#36;24.99</span>
                                        </h3> <a href="#" rel="nofollow" class="add-to-cart-button add_to_cart_button product_type_simple"><i class="icon-bag"></i></a> </div>
                                </li>
                            </ul>
                        </div>
                        <nav class="woocommerce-pagination">
                            <ul class='page-numbers'>
                                <li><span class='page-numbers current'>1</span></li>
                                <li><a class='page-numbers' href='shop-right-sidebar.html'>2</a></li>
                                <li><a class='page-numbers' href='shop-right-sidebar.html'>3</a></li>
                                <li><a class='page-numbers' href='shop-right-sidebar.html'>4</a></li>
                                <li><a class="next page-numbers" href="shop-right-sidebar.html">&rarr;</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-3">
                        <div class="sidebar-widget">
                            <form role="search" method="get" id="searchform">
                                <div class="input-group">
                                    <input type="text" value name="s" class="form-control" placeholder="Search"> <span class="input-group-btn">
            	<button class="btn btn-primary" type="submit" id="searchsubmit" value="">
            		<i class="fa fa-search"></i>
            	</button>
            	<input type="hidden" name="post_type" value="product">
            </span> </div>
                            </form>
                        </div>
                        <div class="sidebar-widget">
                            <h3 class="sidebar-header">Best Sellers</h3>
                            <ul class="product_list_widget">
                                <li>
                                    <a href="shop-simple-product.html" title="White Skirt"> <img width="90" height="114" src="assets/images/shop/skirt1-1-90x114.jpg" alt="skirt1-1" />White Skirt </a> <del><span class="amount">&#36;30.00</span></del> <ins><span class="amount">&#36;20.00</span></ins> </li>
                                <li>
                                    <a href="shop-simple-product.html" title="Woo Colorful Dress"> <img width="90" height="114" src="assets/images/shop/dress2-1-90x114.jpg" alt="dress2-1" />Woo Colorful Dress </a> <span class="amount">&#36;20.00</span> </li>
                                <li>
                                    <a href="shop-simple-product.html" title="Ra Ra Skirt"> <img width="90" height="114" src="assets/images/shop/skirt4-1-90x114.jpg" alt="skirt4-1" />Ra Ra Skirt </a> <del><span class="amount">&#36;49.99</span></del> <ins><span class="amount">&#36;39.99</span></ins> </li>
                            </ul>
                        </div>
                        <div class="sidebar-widget">
                            <h3 class="sidebar-header">Top Rated</h3>
                            <ul class="product_list_widget">
                                <li>
                                    <a href="shop-simple-product.html" title="White Skirt"> <img width="90" height="114" src="assets/images/shop/skirt1-1-90x114.jpg" alt="skirt1-1" />White Skirt </a>
                                    <div class="star-rating" title="Rated 5.00 out of 5"> <span style="width:100%"><strong class="rating">5.00</strong> out of 5</span> </div> <del><span class="amount">&#36;30.00</span></del> <ins><span class="amount">&#36;20.00</span></ins> </li>
                                <li>
                                    <a href="shop-simple-product.html" title="Mens Luxury Black Shirt"> <img width="90" height="114" src="assets/images/shop/shirt2-1-90x114.jpg" alt="shirt2-1" />Mens Luxury Black Shirt </a>
                                    <div class="star-rating" title="Rated 5.00 out of 5"> <span style="width:100%"><strong class="rating">5.00</strong> out of 5</span> </div> <span class="amount">&#36;79.99</span> </li>
                                <li>
                                    <a href="shop-simple-product.html" title="Mens Sporty Hoodie"> <img width="90" height="114" src="assets/images/shop/hoodie1-1-90x114.jpg" alt="hoodie1-1" />Mens Sporty Hoodie </a>
                                    <div class="star-rating" title="Rated 4.00 out of 5"> <span style="width:80%"><strong class="rating">4.00</strong> out of 5</span> </div> <span class="amount">&#36;24.99</span> </li>
                            </ul>
                        </div>
                        <div class="sidebar-widget woocommerce widget_product_tag_cloud">
                            <h3 class="sidebar-header">Tags</h3>
                            <div class="tagcloud">
                                <ul>
                                    <li><a href='shop-mens-category.html'>casual</a></li>
                                    <li><a href='shop-mens-category.html'>fashion</a></li>
                                    <li><a href='shop-mens-category.html'>new in</a></li>
                                    <li><a href='shop-mens-category.html'>on sale</a></li>
                                    <li><a href='shop-mens-category.html'>premium</a></li>
                                    <li><a href='shop-mens-category.html'>Recommended</a></li>
                                    <li><a href='shop-mens-category.html'>school</a></li>
                                    <li><a href='shop-mens-category.html'>selected homme</a></li>
                                    <li><a href='shop-mens-category.html'>Top 5</a></li>
                                    <li><a href='shop-mens-category.html'>Top 10</a></li>
                                    <li><a href='shop-mens-category.html'>tops</a></li>
                                    <li><a href='shop-mens-category.html'>womens sale</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </article>
@endsection
