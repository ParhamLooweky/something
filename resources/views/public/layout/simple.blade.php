@extends('public.layout.index')

@section('content')
    <article>
        <section class="section section-commerce">
            <div class="container element-top-50 element-bottom-50">
                <ol class="breadcrumb">
                    <li> <a class="home" href="shop-index.html">Home</a> </li>
                    <li> <a href="shop-womens-category.html">Jeans</a> </li>
                    <li>Top Fancy</li>
                </ol>
                <div class="product-nav pull-left">
                    <a href="#" rel="prev"> <i class="fa fa-angle-right" data-toggle="tooltip" data-original-title="Top Black"></i> </a>
                    <a href="#" rel="next"> <i class="fa fa-angle-left" data-toggle="tooltip" data-original-title="Womens Jeans"></i> </a>
                </div>
                <div class="product">
                    <div class="row product-summary">
                        <div class="col-md-6">
                            <div class="product-images"> <span class="onsale">Sale!</span>
                                <div class="flexslider" data-flex-animation="slide" data-flex-controls="thumbnails" data-flex-controlsalign="left" data-flex-controlsposition="outside" data-flex-directions="hide" data-flex-directions-type="simple"
                                     data-flex-duration="600" data-flex-slideshow="true" data-flex-speed="7000" id="product-images">
                                    <ul class="slides product-gallery">
                                        <li data-thumb="assets/images/shop/top1-1-90x114.jpg">
                                            <figure> <img alt="Top Fancy" src="{{ asset('public') }}/assets/images/shop/top1-1-700x893.jpg">
                                                <figcaption>
                                                    <h4><a href="{{ asset('public') }}/assets/images/shop/top1-1-700x893.jpg">Zoom In</a></h4> </figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure> <img src="" alt="Top Fancy">
                
                                            </figure>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="summary entry-summary">
                                <h1 class="product-title bordered">Top Fancy</h1>
                                <div>
                                    <p class="price price-big"><del><span class="amount">&#36;33.00</span></del> <ins><span class="amount">&#36;24.00</span></ins></p>
                                </div>
                                <div class="description">
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.
                                        Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                </div>
                                <form>
                                    <div class="quantity">
                                        <input type="button" value="-" class="minus">
                                        <input class="input-text qty text" min="1" name="quantity" step="1" title="Qty" type="number" value="1">
                                        <input type="button" value="+" class="plus"> </div>
                                    <input name="add-to-cart" type="hidden" value="60">
                                    <button class="single_add_to_cart_button button alt" type="submit">Add to cart</button>
                                </form>
                                <div class="product_meta"> <span class="posted_in">Categories:
                                    <a href="shop-mens-category.html" rel="tag">Jeans</a>,
                                    <a href="shop-mens-category.html" rel="tag">Tops</a>,
                                    <a href="shop-mens-category.html" rel="tag">Womens</a>.
                                </span> <span class="tagged_as">Tags:
                                    <a href="shop-mens-category.html" rel="tag">new in</a>,
                                    <a href="shop-mens-category.html" rel="tag">Recommended</a>,
                                    <a href="shop-mens-category.html" rel="tag">Top</a>,
                                    <a href="shop-mens-category.html" rel="tag">womens sale</a>.
                                </span> </div>
                                <div>
                                    <ul class="social-icons social-sm social-background social-rect">
                                        <li>
                                            <a href="#"> <i class="fa fa-twitter"></i> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="fa fa-google-plus"></i> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="fa fa-facebook"></i> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="fa fa-pinterest"></i> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .summary -->
                    <div class="row single-product-extras">
                        <div class="col-md-12">
                            <div class="tabbable top">
                                <ul class="nav nav-tabs" data-tabs="tabs">
                                    <li class="active"> <a data-toggle="tab" href="#tab-description">Description</a> </li>
                                    <li> <a data-toggle="tab" href="#tab-reviews">Reviews (0)</a> </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-description">
                                        <h3>Product Description</h3>
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas
                                            semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                    </div>
                                    <div class="tab-pane" id="tab-reviews">
                                        <div class="row" id="reviews">
                                            <div class="col-md-6" id="comments">
                                                <h3>Reviews</h3>
                                                <p>There are no reviews yet.</p>
                                            </div>
                                            <div class="col-md-6" id="review_form_wrapper">
                                                <div id="review_form">
                                                    <div class="comment-respond" id="respond">
                                                        <h3>Be the first to review &ldquo;Top Fancy&rdquo;
                                                            <small>
                                                                <a href="#">Cancel reply</a>
                                                            </small>
                                                        </h3>
                                                        <form action="#" class="comment-form" id="commentform" method="post" name="commentform">
                                                            <div class="form-group">
                                                                <label>Your Rating</label>
                                                                <p class="stars"> <span>
                                                                    <a class="star-1" href="#">1</a>
                                                                    <a class="star-2" href="#">2</a>
                                                                    <a class="star-3" href="#">3</a>
                                                                    <a class="star-4" href="#">4</a>
                                                                    <a class="star-5" href="#">5</a>
                                                                </span> </p>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="comment">Your Review</label>
                                                                <textarea class="form-control" cols="45" id="comment" name="comment" rows="8"> </textarea>
                                                            </div>
                                                            <p class="form-submit">
                                                                <input class="btn btn-primary" id="submit" name="submit" type="submit" value="Submit">
                                                                <input name='comment_post_ID' type='hidden' value='60'>
                                                                <input name='comment_parent' type='hidden' value='0'> </p>
                                                        </form>
                                                    </div>
                                                    <!-- #respond -->
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="related products">
                        <h2>Related Products</h2>
                        <div class="row">
                            <ul class="products list-container">
                                <li class="product col-md-4"> <a href="shop-simple-product.html"><span class="onsale">Sale!</span>

                                        <div class="product-image">
                                            <div class="product-image-front">
                                                <img alt="bag3-1" class="attachment-shop_catalog" height="893" src="assets/images/shop/bag3-1-700x893.jpg" width="700"></div>

                                            <div class="product-image-back">
                                                <img alt="bag3-2" src="assets/images/shop/bag3-2-700x893.jpg">
                                            </div>

                                            <div class="product-image-overlay">
                                                <h4>View Details</h4>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="product-info">
                                        <h3 class="product-title">
                                            <a href="shop-simple-product.html">Slick Red bag</a>
                                        </h3> <span class="product-categories">
                                        <a href="shop-womens-category.html" rel="tag">Bags</a></span>
                                        <h3 class="price">
                                            <del><span class="amount">&#36;15.00</span></del>
                                            <ins><span class="amount">&#36;12.00</span></ins>
                                        </h3>
                                        <a href="#" rel="nofollow" class="add-to-cart-button"> <i class="icon-bag"></i> </a>
                                    </div>
                                </li>
                                <li class="product col-md-4"> <a href="shop-simple-product.html"><span class="onsale">Sale!</span>
                                        <div class="product-image">
                                            <div class="product-image-front">
                                                <img alt="bag5-1" class="attachment-shop_catalog" height="893" src="assets/images/shop/bag5-1-700x893.jpg" width="700">
                                            </div>

                                            <div class="product-image-back">
                                                <img alt="" src="assets/images/shop/bag3-1-700x893.jpg">
                                            </div>

                                            <div class="product-image-overlay">
                                                <h4>View Details</h4>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="product-info">
                                        <h3 class="product-title">
                                            <a href="shop-simple-product.html">All the Bags</a>
                                        </h3> <span class="product-categories">
                                        <a href="shop-womens-category.html" rel="tag">Bags</a>
                                    </span>
                                        <h3 class="price">
                                            <span class="amount">&#36;12.00</span>&ndash;<span class="amount">&#36;25.00</span>
                                        </h3>
                                        <a href="#" rel="nofollow" class="add-to-cart-button"> <i class="icon-bag"></i> </a>
                                    </div>
                                </li>
                                <li class="product col-md-4"> <a href="shop-simple-product.html"><span class="onsale">Sale!</span>
                                        <div class="product-image">
                                            <div class="product-image-front">
                                                <img alt="bag5-1" class="attachment-shop_catalog" height="893" src="assets/images/shop/bag1-1-700x893.jpg" width="700">
                                            </div>

                                            <div class="product-image-back">
                                                <img alt="" src="assets/images/shop/bag1-2-700x893.jpg">
                                            </div>

                                            <div class="product-image-overlay">
                                                <h4>View Details</h4>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="product-info">
                                        <h3 class="product-title">
                                            <a href="shop-simple-product.html">Black & white</a>
                                        </h3> <span class="product-categories">
                                        <a href="shop-womens-category.html" rel="tag">Bags</a>
                                    </span>
                                        <h3 class="price">
                                            <span class="amount">&#36;18.00</span>&ndash;<span class="amount">&#36;25.00</span>
                                        </h3>
                                        <a href="#" rel="nofollow" class="add-to-cart-button"> <i class="icon-bag"></i> </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </article>
@endsection
