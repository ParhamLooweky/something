
@extends('public.layout.index')
@extends('public.layout.head')





@section('content')
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="figure element-top-30 element-bottom-20 image-effect-scroll-right os-animation" data-os-animation="fadeIn" data-os-animation-delay="0s">
                    <a class="figure-image" href="{{route('malep')}}" target="_self"> <img  alt="woman-sales" src="{{ asset('public') }}/assets/images/shop/dani.jpg"> </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="figure element-top-30 element-bottom-0 image-effect-scroll-left os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">
                    <a class="figure-image" href="{{route('femalep')}}" target="_self"> <img alt="kids-sales" src="{{ asset('public') }}/assets/images/shop/milkman.jpg"> </a>
                </div>
                <div class="figure element-top-30 element-bottom-20 image-effect-scroll-left os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.4s">
                    <a class="figure-image" href="shop-mens-category.html" target="_self"> <img alt="mans-sales" src="{{ asset('public') }}/assets/images/shop/widee.jpg"> </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container container-vertical-middle">
        <div class="row vertical-middle">
            <div class="col-md-3">
                <h2 class="text-left element-top-20 element-bottom-20 text-normal os-animation normal default" data-os-animation="fadeIn" data-os-animation-delay="0s">Latest Products</h2> </div>
            <div class="col-md-9">
                <hr class="element-top-0 element-bottom-0 os-animation" data-os-animation="fadeIn" data-os-animation-delay="0s"> </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="divider-wrapper">
                    <div class="visible-xs element-height-30"></div>
                    <div class="visible-sm element-height-30"></div>
                    <div class="visible-md element-height-30"></div>
                    <div class="visible-lg element-height-30"></div>
                </div>
                <div class="woocommerce columns-4">
                    <div class="row">
                        <ul class="products">
                            <li class="product col-md-3"> <a href="{{route('simple')}}"><span class="onsale">Sale!</span>

                            <div class="product-image">
                                <div class="product-image-front">
                                    <img alt="skirt4-1" height="893" src="{{ asset('public') }}/assets/images/shop/skirt4-1-700x893.jpg" width="700">
                                </div>

                                <div class="product-image-back"><img alt="skirt4-1" src="{{ asset('public') }}/assets/images/shop/skirt4-2-700x893.jpg"></div>

                                <div class="product-image-overlay">
                                    <h4>View Details</h4>
                                </div>
                            </div>
                        </a>
                                <div class="product-info">
                                    <h3 class="product-title">
                                <a href="{{route('simple')}}">Ra Ra Skirt</a>
                            </h3> <span class="product-categories">
                                <a href="shop-mens-category.html" rel="tag">Skirts</a>,
                                <a href="shop-mens-category.html" rel="tag">Tops</a>,
                                <a href="shop-mens-category.html" rel="tag">Womens</a>
                            </span>
                                    <h3 class="price">
                                <del>
                                    <span class="amount">&#36;49.99</span>
                                </del>
                                <ins>
                                    <span class="amount">&#36;39.99
                                    </span>
                                </ins>
                            </h3>
                                    <a class="add-to-cart-button" href="#" rel="nofollow"> <i class="icon-bag"></i> </a>
                                </div>
                            </li>
                            <li class="product col-md-3">
                                <a href="{{route('simple')}}"> <span class="onsale">Sale!</span>
                                    <div class="product-image">
                                        <div class="product-image-front"> <img alt="bag1-1" height="893" src="{{ asset('public') }}/assets/images/shop/bag1-1-700x893.jpg" width="700"> </div>
                                        <div class="product-image-back"> <img alt="bag1-2" src="{{ asset('public') }}/assets/images/shop/bag1-2-700x893.jpg"> </div>
                                        <div class="product-image-overlay">
                                            <h4>View Details</h4> </div>
                                    </div>
                                </a>
                                <div class="product-info">
                                    <h3 class="product-title">
                                <a href="{{route('simple')}}">Black and White</a>
                            </h3> <span class="product-categories">
                                <a href="shop-mens-category.html" rel="tag">Bags</a>
                            </span>
                                    <h3 class="price">
                                <del>
                                    <span class="amount">&#36;29.99
                                    </span>
                                </del>
                                <ins>
                                    <span class="amount">&#36;19.99</span>
                                </ins>
                            </h3>
                                    <a class="add-to-cart-button" href="#" rel="nofollow"> <i class="icon-bag"></i> </a>
                                </div>
                            </li>
                            <li class="product col-md-3">
                                <a href="{{route('simple')}}"> <span class="onsale">Sale!</span>
                                    <div class="product-image">
                                        <div class="product-image-front"> <img alt="bag3-1" height="893" src="{{ asset('public') }}/assets/images/shop/bag3-1-700x893.jpg" width="700"> </div>
                                        <div class="product-image-back"> <img alt="bag3-2" src="{{ asset('public') }}/assets/images/shop/bag3-2-700x893.jpg"> </div>
                                        <div class="product-image-overlay">
                                            <h4>View Details</h4> </div>
                                    </div>
                                </a>
                                <div class="product-info">
                                    <h3 class="product-title">
                                <a href="{{route('simple')}}">Slick Red bag</a>
                            </h3> <span class="product-categories">
                                <a href="shop-mens-category.html" rel="tag">Bags</a>
                            </span>
                                    <h3 class="price">
                                <del>
                                    <span class="amount">&#36;15.00</span>
                                </del>
                                <ins>
                                    <span class="amount">&#36;12.00</span>
                                </ins>
                            </h3>
                                    <a class="add-to-cart-button" href="#" rel="nofollow"> <i class="icon-bag"></i> </a>
                                </div>
                            </li>
                            <li class="product col-md-3"> <a href="{{route('simple')}}"><span class="onsale">Sale!</span>

                        <div class="product-image">
                            <div class="product-image-front">
                                <img alt="bag5-1" height="893" src="{{ asset('public') }}/assets/images/shop/bag5-1-700x893.jpg" width="700">
                            </div>

                            <div class="product-image-back">
                                <img alt="bag3-1" src="{{ asset('public') }}/assets/images/shop/bag3-1-700x893.jpg">
                            </div>

                            <div class="product-image-overlay">
                                <h4>View Details</h4>
                            </div>
                        </div></a>
                                <div class="product-info">
                                    <h3 class="product-title">
                                <a href="{{route('simple')}}">All the Bags</a>
                            </h3> <span class="product-categories">
                                <a href="shop-mens-category.html" rel="tag">Bags</a>
                            </span>
                                    <h3 class="price">
                                <span class="amount">&#36;12.00</span>&ndash;<span class="amount">&#36;25.00</span>
                            </h3>
                                    <a class="add-to-cart-button" href="#" rel="nofollow"> <i class="icon-bag"></i> </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</section>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center">
                <div class="figure element-top-20 element-bottom-20 image-effect-zoom-in os-animation" data-os-animation="fadeIn" data-os-animation-delay="0s">
                    <a class="figure-image" href="shop-mens-category.html" target="_self"> <img alt="" src="{{ asset('public') }}/assets/images/shop/banner-small-1-notinclude.jpg"> </a>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="figure element-top-20 element-bottom-20 image-effect-zoom-in os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">
                    <a class="figure-image" href="shop-mens-category.html" target="_self"> <img alt="banner-small-2" src="{{ asset('public') }}/assets/images/shop/banner-small-2-notinclude.jpg"> </a>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="figure element-top-20 element-bottom-20 image-effect-zoom-in os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.4s">
                    <a class="figure-image" href="shop-mens-category.html" target="_self"> <img alt="banner-small-3" src="{{ asset('public') }}/assets/images/shop/banner-small-3-notinclude.jpg"> </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container container-vertical-middle">
        <div class="row vertical-middle">
            <div class="col-md-3">
                <h2 class="text-left element-top-20 element-bottom-20 os-animation normal" data-os-animation="fadeIn" data-os-animation-delay="0s">Womens Latest</h2> </div>
            <div class="col-md-9">
                <hr class="element-top-0 element-bottom-0 os-animation" data-os-animation="fadeIn" data-os-animation-delay="0s"> </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="divider-wrapper">
                    <div class="visible-xs element-height-30"></div>
                    <div class="visible-sm element-height-30"></div>
                    <div class="visible-md element-height-30"></div>
                    <div class="visible-lg element-height-30"></div>
                </div>
                <div class="woocommerce columns-6">
                    <div class="row">
                        <ul class="products">
                            <li class="product col-md-2"> <a href="{{route('simple')}}"><span class="onsale">Sale!</span>

                            <div class="product-image">
                                <div class="product-image-front">
                                    <img alt="skirt1-1" height="893" src="{{ asset('public') }}/assets/images/shop/skirt1-1-700x893.jpg" width="700">
                                </div>

                                <div class="product-image-back"><img alt="skirt1-2" src="{{ asset('public') }}/assets/images/shop/skirt1-2-700x893.jpg"></div>

                                <div class="product-image-overlay">
                                    <h4>View Details</h4>
                                    <div class="star-rating" title="Rated 5.00 out of 5">
                                        <span style="width:100%"><strong class="rating">5.00</strong> out of 5</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                                <div class="product-info">
                                    <h3 class="product-title">
                                <a href="{{route('simple')}}">White Skirt</a>
                            </h3> <span class="product-categories">
                                <a href="shop-mens-category.html" rel="tag">Jeans</a>,
                                <a href="shop-mens-category.html" rel="tag">Skirts</a>,
                                <a href="shop-mens-category.html" rel="tag">Tops</a>,
                                <a href="shop-mens-category.html" rel="tag">Womens</a>
                            </span>
                                    <h3 class="price">
                                <del>
                                    <span class="amount">&#36;30.00</span>
                                </del>
                                <ins>
                                    <span class="amount">&#36;20.00
                                    </span>
                                </ins>
                            </h3>
                                    <a class="add-to-cart-button" href="#" rel="nofollow"> <i class="icon-bag"></i> </a>
                                </div>
                            </li>
                            <li class="product col-md-2"> <a href="{{route('simple')}}"><span class="onsale">Sale!</span>

                            <div class="product-image">
                                <div class="product-image-front">
                                    <img alt="skirt4-1" height="893" src="assets/images/shop/skirt4-1-700x893.jpg" width="700">
                                </div>

                                <div class="product-image-back"><img alt="skirt4-1" src="{{ asset('public') }}/assets/images/shop/skirt4-2-700x893.jpg"></div>

                                <div class="product-image-overlay">
                                    <h4>View Details</h4>
                                </div>
                            </div>
                        </a>
                                <div class="product-info">
                                    <h3 class="product-title">
                                <a href="{{route('simple')}}">Ra Ra Skirt</a>
                            </h3> <span class="product-categories">
                                <a href="shop-mens-category.html" rel="tag">Skirts</a>,
                                <a href="shop-mens-category.html" rel="tag">Tops</a>,
                                <a href="shop-mens-category.html" rel="tag">Womens</a>
                            </span>
                                    <h3 class="price">
                                <del>
                                    <span class="amount">&#36;49.99</span>
                                </del>
                                <ins>
                                    <span class="amount">&#36;39.99
                                    </span>
                                </ins>
                            </h3>
                                    <a class="add-to-cart-button" href="#" rel="nofollow"> <i class="icon-bag"></i> </a>
                                </div>
                            </li>
                            <li class="product col-md-2">
                                <a href="{{route('simple')}}">
                                    <div class="product-image">
                                        <div class="product-image-front"> <img alt="jeans1-1" height="893" src="{{ asset('public') }}/assets/images/shop/jeans1-1-700x893.jpg" width="700"> </div>
                                        <div class="product-image-back"> <img alt="jeans1-2" src="{{ asset('public') }}/assets/images/shop/jeans1-2-700x893.jpg"> </div>
                                        <div class="product-image-overlay">
                                            <h4>View Details</h4> </div>
                                    </div>
                                </a>
                                <div class="product-info">
                                    <h3 class="product-title">
                                <a href="{{route('simple')}}">Womens Jeans</a>
                            </h3> <span class="product-categories">
                                <a href="shop-mens-category.html" rel="tag">Jeans</a>,
                                <a href="shop-mens-category.html" rel="tag">Tops</a>,
                                <a href="shop-mens-category.html" rel="tag">Womens</a>
                            </span>
                                    <h3 class="price">
                                <ins>
                                    <span class="amount">&#36;29.00</span>
                                </ins>
                            </h3>
                                    <a class="add-to-cart-button" href="#" rel="nofollow"> <i class="icon-bag"></i> </a>
                                </div>
                            </li>
                            <li class="product col-md-2">
                                <a href="{{route('simple')}}"> <span class="onsale">Sale!</span>
                                    <div class="product-image">
                                        <div class="product-image-front"> <img alt="top1-1" height="893" src="{{ asset('public') }}/assets/images/shop/top1-1-700x893.jpg" width="700"> </div>
                                        <div class="product-image-back"> <img alt="top1-2" src="{{ asset('public') }}/assets/images/shop/top1-2-700x893.jpg"> </div>
                                        <div class="product-image-overlay">
                                            <h4>View Details</h4> </div>
                                    </div>
                                </a>
                                <div class="product-info">
                                    <h3 class="product-title">
                                <a href="{{route('simple')}}">Top Fancy</a>
                            </h3> <span class="product-categories">
                                <a href="shop-mens-category.html" rel="tag">Jeans</a>,
                                <a href="shop-mens-category.html" rel="tag">Tops</a>,
                                <a href="shop-mens-category.html" rel="tag">Womens</a>
                            </span>
                                    <h3 class="price">
                                <del>
                                    <span class="amount">&#36;33.00</span>
                                </del>
                                <ins>
                                    <span class="amount">&#36;24.00</span>
                                </ins>
                            </h3>
                                    <a class="add-to-cart-button" href="#" rel="nofollow"> <i class="icon-bag"></i> </a>
                                </div>
                            </li>
                            <li class="product col-md-2">
                                <a href="{{route('simple')}}">
                                    <div class="product-image">
                                        <div class="product-image-front"> <img alt="top2-1" height="893" src="{{ asset('public') }}/assets/images/shop/top2-1-700x893.jpg" width="700"> </div>
                                        <div class="product-image-back"> <img alt="top2-2" src="{{ asset('public') }}/assets/images/shop/top2-2-700x893.jpg"> </div>
                                        <div class="product-image-overlay">
                                            <h4>View Details</h4> </div>
                                    </div>
                                </a>
                                <div class="product-info">
                                    <h3 class="product-title">
                                <a href="{{route('simple')}}">Top Black</a>
                            </h3> <span class="product-categories">
                                <a href="shop-mens-category.html" rel="tag">Jeans</a>,
                                <a href="shop-mens-category.html" rel="tag">Tops</a>,
                                <a href="shop-mens-category.html" rel="tag">Womens</a>
                            </span>
                                    <h3 class="price">
                                <ins>
                                    <span class="amount">&#36;21.00</span>
                                </ins>
                            </h3>
                                    <a class="add-to-cart-button" href="#" rel="nofollow"> <i class="icon-bag"></i> </a>
                                </div>
                            </li>
                            <li class="product col-md-2"> <a href="{{route('simple')}}"><span class="onsale">Sale!</span>

                        <div class="product-image">
                            <div class="product-image-front">
                                <img alt="dress1-1" height="893" src="{{ asset('public') }}/assets/images/shop/dress1-1-700x893.jpg" width="700">
                            </div>

                            <div class="product-image-back">
                                <img alt="dress1-1" src="{{ asset('public') }}/assets/images/shop/dress1-2-700x893.jpg">
                            </div>

                            <div class="product-image-overlay">
                                <h4>View Details</h4>
                            </div>
                        </div></a>
                                <div class="product-info">
                                    <h3 class="product-title">
                                <a href="{{route('simple')}}">Fancy Dress</a>
                            </h3> <span class="product-categories">
                                <a href="shop-mens-category.html" rel="tag">Skirts</a>,
                                <a href="shop-mens-category.html" rel="tag">Womens</a>
                            </span>
                                    <h3 class="price">
                                <del>
                                    <span class="amount">&#36;15.00</span>
                                </del>
                                <ins>
                                    <span class="amount">&#36;12.00</span>
                                </ins>
                            </h3>
                                    <a class="add-to-cart-button" href="#" rel="nofollow"> <i class="icon-bag"></i> </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container container-vertical-middle">
        <div class="row vertical-middle">
            <div class="col-md-3">
                <h2 class="text-left element-top-20 element-bottom-20 os-animation normal" data-os-animation="fadeIn" data-os-animation-delay="0s">Mens Latest</h2> </div>
            <div class="col-md-9">
                <hr class="element-top-0 element-bottom-0 os-animation" data-os-animation="fadeIn" data-os-animation-delay="0s"> </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="divider-wrapper">
                    <div class="visible-xs element-height-30"></div>
                    <div class="visible-sm element-height-30"></div>
                    <div class="visible-md element-height-30"></div>
                    <div class="visible-lg element-height-30"></div>
                </div>
                <div class="woocommerce columns-6">
                    <div class="row">
                        <ul class="products">
                            <li class="product col-md-2"> <a href="{{route('simple')}}"><span class="onsale">Sale!</span>

                            <div class="product-image">
                                <div class="product-image-front">
                                    <img alt="jacket2-1" height="893" src="{{ asset('public') }}/assets/images/shop/jacket2-1-700x893.jpg" width="700">
                                </div>

                                <div class="product-image-back"><img alt="jacket2-2" src="{{ asset('public') }}/assets/images/shop/jacket2-2-700x893.jpg"></div>

                                <div class="product-image-overlay">
                                    <h4>View Details</h4>
                                </div>
                            </div>
                        </a>
                                <div class="product-info">
                                    <h3 class="product-title">
                                <a href="{{route('simple')}}">Mens Bomber in Jersey</a>
                            </h3> <span class="product-categories">
                                <a href="shop-mens-category.html" rel="tag">Hoodies</a>,
                                <a href="shop-mens-category.html" rel="tag">Jackets</a>,
                                <a href="shop-mens-category.html" rel="tag">Mens</a>
                            </span>
                                    <h3 class="price">
                                <del>
                                    <span class="amount">&#36;42.99</span>
                                </del>
                                <ins>
                                    <span class="amount">&#36;26.99
                                    </span>
                                </ins>
                            </h3>
                                    <a class="add-to-cart-button" href="#" rel="nofollow"> <i class="icon-bag"></i> </a>
                                </div>
                            </li>
                            <li class="product col-md-2">
                                <a href="{{route('simple')}}">
                                    <div class="product-image">
                                        <div class="product-image-front"> <img alt="jacket1-1" height="893" src="{{ asset('public') }}/assets/images/shop/jacket1-1-700x893.jpg" width="700"> </div>
                                        <div class="product-image-back"><img alt="jacket1-1" src="{{ asset('public') }}/assets/images/shop/jacket1-2-700x893.jpg"></div>
                                        <div class="product-image-overlay">
                                            <h4>View Details</h4> </div>
                                    </div>
                                </a>
                                <div class="product-info">
                                    <h3 class="product-title">
                                <a href="{{route('simple')}}">Mens Bomber Jacket</a>
                            </h3> <span class="product-categories">
                                <a href="shop-mens-category.html" rel="tag">Hoodies</a>,
                                <a href="shop-mens-category.html" rel="tag">Jackets</a>,
                                <a href="shop-mens-category.html" rel="tag">Mens</a>,
                                <a href="shop-mens-category.html" rel="tag">Shirts</a>
                            </span>
                                    <h3 class="price">
                                <ins>
                                    <span class="amount">&#36;32.99
                                    </span>
                                </ins>
                            </h3>
                                    <a class="add-to-cart-button" href="#" rel="nofollow"> <i class="icon-bag"></i> </a>
                                </div>
                            </li>
                            <li class="product col-md-2">
                                <a href="{{route('simple')}}">
                                    <div class="product-image">
                                        <div class="product-image-front"> <img alt="hoodie1-1" height="893" src="{{ asset('public') }}/assets/images/shop/hoodie1-1-700x893.jpg" width="700"> </div>
                                        <div class="product-image-back"> <img alt="hoodie1-2" src="{{ asset('public') }}/assets/images/shop/hoodie1-2-700x893.jpg"> </div>
                                        <div class="product-image-overlay">
                                            <h4>View Details</h4>
                                            <div class="star-rating" title="Rated 4.00 out of 5"> <span style="width:80%"><strong class="rating">4.00</strong> out of 5</span> </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="product-info">
                                    <h3 class="product-title">
                                <a href="{{route('simple')}}">Mens Sporty Hoodie</a>
                            </h3> <span class="product-categories">
                                <a href="shop-mens-category.html" rel="tag">Hoodies</a>,
                                <a href="shop-mens-category.html" rel="tag">Jackets</a>,
                                <a href="shop-mens-category.html" rel="tag">Mens</a>
                            </span>
                                    <h3 class="price">
                                <ins>
                                    <span class="amount">&#36;24.99</span>
                                </ins>
                            </h3>
                                    <a class="add-to-cart-button" href="#" rel="nofollow"> <i class="icon-bag"></i> </a>
                                </div>
                            </li>
                            <li class="product col-md-2">
                                <a href="{{route('simple')}}"> <span class="onsale">Sale!</span>
                                    <div class="product-image">
                                        <div class="product-image-front"> <img alt="shirt1-1" height="893" src="{{ asset('public') }}/assets/images/shop/shirt1-1-700x893.jpg" width="700"> </div>
                                        <div class="product-image-back"> <img alt="shirt1-2" src="{{ asset('public') }}/assets/images/shop/shirt1-2-700x893.jpg"> </div>
                                        <div class="product-image-overlay">
                                            <h4>View Details</h4>
                                            <div class="star-rating" title="Rated 4.00 out of 5"> <span style="width:80%"><strong class="rating">4.00</strong> out of 5</span> </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="product-info">
                                    <h3 class="product-title">
                                <a href="{{route('simple')}}">Mens Vintage Shirt</a>
                            </h3> <span class="product-categories">
                                <a href="shop-mens-category.html" rel="tag">Jacket</a>,
                                <a href="shop-mens-category.html" rel="tag">Mens</a>,
                                <a href="shop-mens-category.html" rel="tag">Shirts</a>
                            </span>
                                    <h3 class="price">
                                <del>
                                    <span class="amount">&#36;35.00</span>
                                </del>
                                <ins>
                                    <span class="amount">&#36;19.99</span>
                                </ins>
                            </h3>
                                    <a class="add-to-cart-button" href="#" rel="nofollow"> <i class="icon-bag"></i> </a>
                                </div>
                            </li>
                            <li class="product col-md-2">
                                <a href="{{route('simple')}}">
                                    <div class="product-image">
                                        <div class="product-image-front"> <img alt="shirt2-1" height="893" src="{{ asset('public') }}/assets/images/shop/shirt2-1-700x893.jpg" width="700"> </div>
                                        <div class="product-image-back"> <img alt="shirt2-2" src="{{ asset('public') }}/assets/images/shop/shirt2-2-700x893.jpg"> </div>
                                        <div class="product-image-overlay">
                                            <h4>View Details</h4>
                                            <div class="star-rating" title="Rated 5.00 out of 5"> <span style="width:100%"><strong class="rating">5.00</strong> out of 5</span> </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="product-info">
                                    <h3 class="product-title">
                                <a href="{{route('simple')}}">Mens Luxury Black Shirt</a>
                            </h3> <span class="product-categories">
                                <a href="shop-mens-category.html" rel="tag">Mens</a>,
                                <a href="shop-mens-category.html" rel="tag">Shirts</a>
                            </span>
                                    <h3 class="price">
                                <ins>
                                    <span class="amount">&#36;79.00</span>
                                </ins>
                            </h3>
                                    <a class="add-to-cart-button" href="#" rel="nofollow"> <i class="icon-bag"></i> </a>
                                </div>
                            </li>
                            <li class="product col-md-2"> <a href="{{route('simple')}}"><span class="onsale">Sale!</span>

                        <div class="product-image">
                            <div class="product-image-front">
                                <img alt="hoodie2-1" height="893" src="{{ asset('public') }}/assets/images/shop/hoodie2-1-700x893.jpg" width="700">
                            </div>

                            <div class="product-image-back">
                                <img alt="hoodie2-1" src="{{ asset('public') }}/assets/images/shop/hoodie2-2-700x893.jpg">
                            </div>

                            <div class="product-image-overlay">
                                <h4>View Details</h4>
                            </div>
                        </div></a>
                                <div class="product-info">
                                    <h3 class="product-title">
                                <a href="{{route('simple')}}">Mens Casual Hoodie</a>
                            </h3> <span class="product-categories">
                                <a href="shop-mens-category.html" rel="tag">Hoodies</a>,
                                <a href="shop-mens-category.html" rel="tag">Mens</a>
                            </span>
                                    <h3 class="price">
                                <del>
                                    <span class="amount">&#36;48.99</span>
                                </del>
                                <ins>
                                    <span class="amount">&#36;30.00</span>
                                </ins>
                            </h3>
                                    <a class="add-to-cart-button" href="#" rel="nofollow"> <i class="icon-bag"></i> </a>
                                </div>
                            </li>
                        </ul>
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
                <div class="flexslider flex-controls-bottom element-top-0 element-bottom-20 os-animation" data-flex-animation="slide" data-flex-captionhorizontal="left" data-flex-controls="hide" data-flex-controlsalign="center" data-flex-controlsposition="inside"
                data-flex-controlsvertical="bottom" data-flex-directions="hide" data-flex-duration="600" data-flex-itemwidth="165" data-flex-sliderdirection="horizontal" data-flex-slideshow="true" data-flex-speed="7000" data-os-animation="fadeIn"
                data-os-animation-delay="0s" id="flexslider-100">
                    <ul class="slides">
                        <li>
                            <figure> <img alt="chanel-notinclude" class="attachment-full wp-post-image" height="200" src="{{ asset('public') }}/assets/images/shop/chanel-notinclude.png" width="200"> </figure>
                        </li>
                        <li>
                            <figure> <img alt="diesel-notinclude" class="attachment-full wp-post-image" height="200" src="{{ asset('public') }}/assets/images/shop/diesel-notinclude.png" width="200"> </figure>
                        </li>
                        <li>
                            <figure> <img alt="hm-notinclude" class="attachment-full wp-post-image" height="200" src="{{ asset('public') }}/assets/images/shop/hm-notinclude.png" width="200"> </figure>
                        </li>
                        <li>
                            <figure> <img alt="knsley-notinclude" class="attachment-full wp-post-image" height="200" src="{{ asset('public') }}/assets/images/shop/knsley-notinclude.png" width="200"> </figure>
                        </li>
                        <li>
                            <figure> <img alt="lecoq-notinclude" class="attachment-full wp-post-image" height="200" src="{{ asset('public') }}/assets/images/shop/lecoq-notinclude.png" width="200"> </figure>
                        </li>
                        <li>
                            <figure> <img alt="levis-notinclude" class="attachment-full wp-post-image" height="200" src="{{ asset('public') }}/assets/images/shop/levis-notinclude.png" width="200"> </figure>
                        </li>
                        <li>
                            <figure> <img alt="nike-notinclude" class="attachment-full wp-post-image" height="200" src="{{ asset('public') }}/assets/images/shop/nike-notinclude.png" width="200"> </figure>
                        </li>
                        <li>
                            <figure> <img alt="pullbear-notinclude" class="attachment-full wp-post-image" height="200" src="{{ asset('public') }}/assets/images/shop/pullbear-notinclude.png" width="200"> </figure>
                        </li>
                        <li>
                            <figure> <img alt="zara-notinclude" class="attachment-full wp-post-image" height="200" src="{{ asset('public') }}/assets/images/shop/zara-notinclude.png" width="200"> </figure>
                        </li>
                    </ul>
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
                        <a href="{{route('simple')}}" title="White Skirt"> <img alt="skirt1-1" height="114" src="{{ asset('public') }}/assets/images/shop/skirt1-1-90x114.jpg" width="90"> White Skirt </a>
                        <div class="star-rating" title="Rated 5.00 out of 5"> <span style="width:100%"><strong class="rating">5.00</strong> out of 5</span> </div> <del><span class="amount">&#36;30.00</span></del> <ins><span class="amount">&#36;20.00</span></ins> </li>
                    <li>
                        <a href="{{route('simple')}}" title="Mens Luxury Black Shirt"> <img alt="shirt2-1" height="114" src="{{ asset('public') }}/assets/images/shop/shirt2-1-90x114.jpg" width="90"> Mens Luxury Black Shirt </a>
                        <div class="star-rating" title="Rated 5.00 out of 5"> <span style="width:100%"><strong class="rating">5.00</strong> out of 5</span> </div><span class="amount">&#36;79.99</span> </li>
                    <li>
                        <a href="{{route('simple')}}" title="Mens Sporty Hoodie"> <img alt="hoodie1-1" height="114" src="{{ asset('public') }}/assets/images/shop/hoodie1-1-90x114.jpg" width="90"> Mens Sporty Hoodie </a>
                        <div class="star-rating" title="Rated 4.00 out of 5"> <span style="width:80%"><strong class="rating">4.00</strong> out of 5</span> </div><span class="amount">&#36;24.99</span> </li>
                </ul>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="sidebar-widget woocommerce widget_products">
                <h3 class="sidebar-header">Featured Products</h3>
                <ul class="product_list_widget">
                    <li>
                        <a href="{{route('simple')}}" title="All the Bags"> <img alt="bag5-1" height="114" src="{{ asset('public') }}/assets/images/shop/bag5-1-90x114.jpg" width="90"> All the Bags </a> <span class="amount">&#36;12.00</span>&ndash;<span class="amount">&#36;25.00</span> </li>
                    <li>
                        <a href="{{route('simple')}}" title="Woo Colorful Dress"> <img alt="dress2-1" height="114" src="{{ asset('public') }}/assets/images/shop/dress2-1-90x114.jpg" width="90"> Woo Colorful Dress </a> <span class="amount">&#36;20.00</span> </li>
                    <li>
                        <a href="{{route('simple')}}" title="Woo Black Jeans"> <img alt="jeans2-1" height="114" src="{{ asset('public') }}/assets/images/shop/jeans2-1-90x114.jpg" width="90"> Woo Black Jeans </a> <span class="amount">&#36;80.00</span> </li>
                </ul>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="sidebar-widget woocommerce widget_products">
                <h3 class="sidebar-header">On Sale</h3>
                <ul class="product_list_widget">
                    <li>
                        <a href="{{route('simple')}}" title="White Skirt"> <img alt="skirt1-1" height="114" src="{{ asset('public') }}/assets/images/shop/skirt1-1-90x114.jpg" width="90"> White Skirt </a> <del><span class="amount">&#36;30.00</span></del> <ins><span class="amount">&#36;20.00</span></ins> </li>
                    <li>
                        <a href="{{route('simple')}}" title="Ra Ra Skirt"> <img alt="skirt4-1" height="114" src="{{ asset('public') }}/assets/images/shop/skirt4-1-90x114.jpg" width="90"> Ra Ra Skirt </a> <del><span class="amount">&#36;49.99</span></del> <ins><span class="amount">&#36;39.99</span></ins> </li>
                    <li>
                        <a href="{{route('simple')}}" title="Woo Top Fancy"> <img alt="top1-1" height="114" src="{{ asset('public') }}/assets/images/shop/top1-1-90x114.jpg" width="90"> Woo Top Fancy </a> <del><span class="amount">&#36;33.00</span></del> <ins><span class="amount">&#36;24.00</span></ins> </li>
                </ul>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="sidebar-widget woocommerce widget_recent_reviews">
                <h3 class="sidebar-header">Recent Reviews</h3>
                <ul class="product_list_widget">
                    <li>
                        <a href="{{route('simple')}}"> <img alt="hoodie1-1" height="114" src="{{ asset('public') }}/assets/images/shop/hoodie1-1-90x114.jpg" width="90">Mens Sporty Hoodie </a>
                        <div class="star-rating" title="Rated 4 out of 5"> <span style="width:80%"><strong class="rating">4</strong> out of 5</span> </div><span class="reviewer">by Proistakis Manos</span> </li>
                    <li>
                        <a href="{{route('simple')}}"><img alt="shirt2-1" height="114" src="{{ asset('public') }}/assets/images/shop/shirt2-1-90x114.jpg" width="90">Mens Luxury Black Shirt</a>
                        <div class="star-rating" title="Rated 5 out of 5"> <span style="width:100%"><strong class="rating">5</strong> out of 5</span> </div><span class="reviewer">by Proistakis Manos</span> </li>
                    <li>
                        <a href="{{route('simple')}}"><img alt="dress1-1" height="114" src="{{ asset('public') }}/assets/images/shop/dress1-1-90x114.jpg" width="90">Woo Dress</a>
                        <div class="star-rating" title="Rated 3 out of 5"> <span style="width:60%"><strong class="rating">3</strong> out of 5</span> </div><span class="reviewer">by oxygenna</span> </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</section>

@endsection
