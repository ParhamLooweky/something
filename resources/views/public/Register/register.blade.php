@extends('public.layout.index')

@section('content')
<div id="content" role="main">

        <section class="section">
            <div class="container container-vertical-middle">
                <div class="row vertical-middle">
                    <div class="col-md-4">
                        <h2 class="text-left element-top-0 element-bottom-0  os-animation normal" data-os-animation="fadeIn" data-os-animation-delay="0s">Register a new Account </h2> </div>
                    <div class="col-md-8">
                        <hr class="element-top-0 element-bottom-0 os-animation" data-os-animation="fadeIn" data-os-animation-delay="0s"> </div>
                </div>
            </div>
        </section>
        <section class="section text-normal section-text-no-shadow section-inner-no-shadow section-normal section-opaque">
            <div class="background-overlay grid-overlay-0" style="background-color: rgba(255,255,255,0);"></div>
            <div class="container container-vertical-default">
                <div class="row vertical-default">
                    <div class="col-md-12 text-default small-screen-default">
                        <div class="row">
                            <div class="col-md-4 text-right small-screen-left os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.3s">
                                <div class="divider-wrapper">
                                    <div class="visible-xs element-height-20"></div>
                                    <div class="visible-sm element-height-20"></div>
                                    <div class="visible-md element-height-20"></div>
                                    <div class="visible-lg element-height-20"></div>
                                </div>
                                <div class="col-text-1 text-normal element-top-0 element-bottom-0" data-os-animation="none" data-os-animation-delay="0s">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, minima, dolor, repudiandae dolores eum numquam nihil eaque quisquam commodi iste totam et consectetur rerum ducimus alias dolorum nulla at molestias.</p>
                                </div>
                                <ul class="fa-ul text-normal element-top-0 element-bottom-0" data-os-animation="none" data-os-animation-delay="0s">
                                    <li><i class="fa-li fa fa-home"></i> Some street. Some town. Some postcode. UK</li>
                                    <li><i class="fa-li fa fa-phone"></i> 0044123456789</li>
                                    <li><i class="fa-li fa fa-globe"></i> http://lambdahtml.oxygenna.com/shop/</li>
                                </ul>
                                <div class="divider-wrapper">
                                    <div class="visible-xs element-height-60"></div>
                                    <div class="visible-sm element-height-60"></div>
                                    <div class="visible-md element-height-60"></div>
                                    <div class="visible-lg element-height-60"></div>
                                </div>
                            </div>
                            <div class="col-md-8 text-left small-screen-center os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.3s">
                                <div class="divider-wrapper">
                                    <div class="visible-xs element-height-20"></div>
                                    <div class="visible-sm element-height-20"></div>
                                    <div class="visible-md element-height-20"></div>
                                    <div class="visible-lg element-height-20"></div>
                                </div>
                                <form action="contact_mailer.php" class="contact-form">
                                    <div class="row">
                                        <div class="col-md-6 pull-right">
                                            <div class="form-group form-icon-group"> <i class="fa fa-user"></i>
                                                <input class="form-control" id="name" name="name" placeholder="Your name *" type="text" required=""> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-icon-group"> <i class="fa fa-envelope"></i>
                                                <input class="form-control" id="email" name="email" placeholder="Your email *" type="email" required=""> </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-icon-group"> <i class="fa fa-shield"></i>
                                        <textarea class="form-control" id="password" name="pass" placeholder="Password"  required=""></textarea>
                                    </div>
                                    <p>
                                        <input type="submit" value="Register" class="btn btn-primary pull-right"> </p>
                                        <small><a>Fields With * Are required</a></small>
                                    <div class="messages text-center"></div>
                                </form>
                                <div class="divider-wrapper">
                                    <div class="visible-xs element-height-60"></div>
                                    <div class="visible-sm element-height-60"></div>
                                    <div class="visible-md element-height-60"></div>
                                    <div class="visible-lg element-height-60"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="background-overlay" style="background-color: rgba(240,240,240,1);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="flexslider flex-controls-bottom element-top-10 element-bottom-20 os-animation" data-flex-animation="slide" data-flex-captionhorizontal="left" data-flex-controls="hide" data-flex-controlsalign="center" data-flex-controlsposition="inside"
                             data-flex-controlsvertical="bottom" data-flex-directions="hide" data-flex-duration="600" data-flex-itemwidth="165" data-flex-sliderdirection="horizontal" data-flex-slideshow="true" data-flex-speed="7000" data-os-animation="fadeIn"
                             data-os-animation-delay="0s" id="flexslider-100">

                        </div>
                    </div>
                </div>
            </div>
        </section>
        </article>
        <section class="section section-upper-footer">
            <div class="container">
                <div class="row element-top-40 element-bottom-20 footer-columns-4">
                    <div class="col-sm-3">
                        <div class="sidebar-widget woocommerce widget_top_rated_products">
                            <h3 class="sidebar-header">Top Rated Products</h3>
                            <ul class="product_list_widget">
                                <li>
                                    <a href="shop-simple-product.html" title="White Skirt"> <img alt="skirt1-1" height="114" src="assets/images/shop/skirt1-1-90x114.jpg" width="90"> White Skirt </a>
                                    <div class="star-rating" title="Rated 5.00 out of 5"> <span style="width:100%"><strong class="rating">5.00</strong> out of 5</span> </div> <del><span class="amount">&#36;30.00</span></del> <ins><span class="amount">&#36;20.00</span></ins> </li>
                                <li>
                                    <a href="shop-simple-product.html" title="Mens Luxury Black Shirt"> <img alt="shirt2-1" height="114" src="assets/images/shop/shirt2-1-90x114.jpg" width="90"> Mens Luxury Black Shirt </a>
                                    <div class="star-rating" title="Rated 5.00 out of 5"> <span style="width:100%"><strong class="rating">5.00</strong> out of 5</span> </div><span class="amount">&#36;79.99</span> </li>
                                <li>
                                    <a href="shop-simple-product.html" title="Mens Sporty Hoodie"> <img alt="hoodie1-1" height="114" src="assets/images/shop/hoodie1-1-90x114.jpg" width="90"> Mens Sporty Hoodie </a>
                                    <div class="star-rating" title="Rated 4.00 out of 5"> <span style="width:80%"><strong class="rating">4.00</strong> out of 5</span> </div><span class="amount">&#36;24.99</span> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="sidebar-widget woocommerce widget_products">
                            <h3 class="sidebar-header">Featured Products</h3>
                            <ul class="product_list_widget">
                                <li>
                                    <a href="shop-simple-product.html" title="All the Bags"> <img alt="bag5-1" height="114" src="assets/images/shop/bag5-1-90x114.jpg" width="90"> All the Bags </a> <span class="amount">&#36;12.00</span>&ndash;<span class="amount">&#36;25.00</span> </li>
                                <li>
                                    <a href="shop-simple-product.html" title="Woo Colorful Dress"> <img alt="dress2-1" height="114" src="assets/images/shop/dress2-1-90x114.jpg" width="90"> Woo Colorful Dress </a> <span class="amount">&#36;20.00</span> </li>
                                <li>
                                    <a href="shop-simple-product.html" title="Woo Black Jeans"> <img alt="jeans2-1" height="114" src="assets/images/shop/jeans2-1-90x114.jpg" width="90"> Woo Black Jeans </a> <span class="amount">&#36;80.00</span> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="sidebar-widget woocommerce widget_products">
                            <h3 class="sidebar-header">On Sale</h3>
                            <ul class="product_list_widget">
                                <li>
                                    <a href="shop-simple-product.html" title="White Skirt"> <img alt="skirt1-1" height="114" src="assets/images/shop/skirt1-1-90x114.jpg" width="90"> White Skirt </a> <del><span class="amount">&#36;30.00</span></del> <ins><span class="amount">&#36;20.00</span></ins> </li>
                                <li>
                                    <a href="shop-simple-product.html" title="Ra Ra Skirt"> <img alt="skirt4-1" height="114" src="assets/images/shop/skirt4-1-90x114.jpg" width="90"> Ra Ra Skirt </a> <del><span class="amount">&#36;49.99</span></del> <ins><span class="amount">&#36;39.99</span></ins> </li>
                                <li>
                                    <a href="shop-simple-product.html" title="Woo Top Fancy"> <img alt="top1-1" height="114" src="assets/images/shop/top1-1-90x114.jpg" width="90"> Woo Top Fancy </a> <del><span class="amount">&#36;33.00</span></del> <ins><span class="amount">&#36;24.00</span></ins> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="sidebar-widget woocommerce widget_recent_reviews">
                            <h3 class="sidebar-header">Recent Reviews</h3>
                            <ul class="product_list_widget">
                                <li>
                                    <a href="shop-simple-product.html"> <img alt="hoodie1-1" height="114" src="assets/images/shop/hoodie1-1-90x114.jpg" width="90">Mens Sporty Hoodie </a>
                                    <div class="star-rating" title="Rated 4 out of 5"> <span style="width:80%"><strong class="rating">4</strong> out of 5</span> </div><span class="reviewer">by Proistakis Manos</span> </li>
                                <li>
                                    <a href="shop-simple-product.html"><img alt="shirt2-1" height="114" src="assets/images/shop/shirt2-1-90x114.jpg" width="90">Mens Luxury Black Shirt</a>
                                    <div class="star-rating" title="Rated 5 out of 5"> <span style="width:100%"><strong class="rating">5</strong> out of 5</span> </div><span class="reviewer">by Proistakis Manos</span> </li>
                                <li>
                                    <a href="shop-simple-product.html"><img alt="dress1-1" height="114" src="assets/images/shop/dress1-1-90x114.jpg" width="90">Woo Dress</a>
                                    <div class="star-rating" title="Rated 3 out of 5"> <span style="width:60%"><strong class="rating">3</strong> out of 5</span> </div><span class="reviewer">by oxygenna</span> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    </div>
@endsection

