@extends('public.layout.index')
@section('content')
    <article>
        <section class="section">
            <div class="background-overlay" style="background-color: rgba(240,240,240,1);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-right element-top-30 element-bottom-30 normal regular">
                            Cart
                        </h1> </div>
                </div>
            </div>
        </section>
        <section class="section section-commerce">
            <div class="container">
                <div class="row element-top-50 element-bottom-50">
                    <div class="col-md-12">
                        <form action="#" method="post">
                            <div class="table-responsive">
                                <table cellspacing="0" class="shop_table cart table element-bottom-20">
                                    <thead>
                                    <tr>
                                        <th class="product-remove">&nbsp;</th>
                                        <th class="product-thumbnail">&nbsp;</th>
                                        <th class="product-name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="cart_item">
                                        <td class="product-remove">
                                            <a href="#" class="remove" title="Remove this item"> <i class="icon-cross"></i> </a>
                                        </td>
                                        <td class="product-thumbnail">
                                            <a href="shop-simple-product.html"> <img alt="hoodie1-1" height="114" src="assets/images/shop/hoodie1-1-90x114.jpg" width="90"> </a>
                                        </td>
                                        <td class="product-name"> <a href="shop-simple-product.html">Mens Sporty Hoodie</a> </td>
                                        <td class="product-price"><span class="amount">&#36;24.99</span></td>
                                        <td class="product-quantity">
                                            <div class="quantity">
                                                <input type="button" value="-" class="minus">
                                                <input class="input-text qty text" step="1" title="Qty" type="number" value="1">
                                                <input type="button" value="+" class="plus"> </div>
                                        </td>
                                        <td class="product-subtotal"><span class="amount">&#36;24.99</span></td>
                                    </tr>
                                    <tr class="cart_item">
                                        <td class="product-remove">
                                            <a href="#" class="remove" title="Remove this item"> <i class="icon-cross"></i> </a>
                                        </td>
                                        <td class="product-thumbnail">
                                            <a href="shop-simple-product.html"> <img alt="jacket1-1" height="114" src="assets/images/shop/jacket1-1-90x114.jpg" width="90"> </a>
                                        </td>
                                        <td class="product-name"> <a href="shop-simple-product.html">Mens Bomber Jacket</a> </td>
                                        <td class="product-price"><span class="amount">&#36;32.99</span></td>
                                        <td class="product-quantity">
                                            <div class="quantity">
                                                <input type="button" value="-" class="minus">
                                                <input class="input-text qty text" step="1" title="Qty" type="number" value="1">
                                                <input type="button" value="+" class="plus"> </div>
                                        </td>
                                        <td class="product-subtotal"><span class="amount">&#36;32.99</span></td>
                                    </tr>
                                    <tr class="cart_item">
                                        <td class="product-remove">
                                            <a href="#" class="remove" title="Remove this item"> <i class="icon-cross"></i> </a>
                                        </td>
                                        <td class="product-thumbnail">
                                            <a href="shop-simple-product.html"> <img alt="skirt1-1" height="114" src="assets/images/shop/skirt1-1-90x114.jpg" width="90"> </a>
                                        </td>
                                        <td class="product-name"> <a href="shop-simple-product.html">White Skirt</a> </td>
                                        <td class="product-price"><span class="amount">&#36;20.00</span></td>
                                        <td class="product-quantity">
                                            <div class="quantity">
                                                <input type="button" value="-" class="minus">
                                                <input class="input-text qty text" max="16" step="1" title="Qty" type="number" value="1">
                                                <input type="button" value="+" class="plus"> </div>
                                        </td>
                                        <td class="product-subtotal"><span class="amount">&#36;20.00</span></td>
                                    </tr>
                                    <tr class="cart_item">
                                        <td class="product-remove">
                                            <a href="#" class="remove" title="Remove this item"> <i class="icon-cross"></i> </a>
                                        </td>
                                        <td class="product-thumbnail">
                                            <a href="shop-simple-product.html"> <img alt="kidspants2-1" height="105" src="assets/images/shop/kidspants2-1-90x105.jpg" width="90"></a>
                                        </td>
                                        <td class="product-name"> <a href="shop-simple-product.html">Lazy Sweatpants</a> </td>
                                        <td class="product-price"><span class="amount">&#36;16.99</span></td>
                                        <td class="product-quantity">
                                            <div class="quantity">
                                                <input type="button" value="-" class="minus">
                                                <input class="input-text qty text" name="" size="4" step="1" title="Qty" type="number" value="1">
                                                <input type="button" value="+" class="plus"> </div>
                                        </td>
                                        <td class="product-subtotal"><span class="amount">&#36;16.99</span></td>
                                    </tr>
                                    <tr class="cart_item">
                                        <td class="product-remove">
                                            <a href="#" class="remove" title="Remove this item"> <i class="icon-cross"></i> </a>
                                        </td>
                                        <td class="product-thumbnail">
                                            <a href="shop-simple-product.html"> <img alt="kidsjacket2-1" height="105" src="assets/images/shop/kidsjacket2-1-90x105.jpg" width="90"> </a>
                                        </td>
                                        <td class="product-name"> <a href="shop-simple-product.html">Patterned Hooded Jacket</a> </td>
                                        <td class="product-price"><span class="amount">&#36;19.99</span></td>
                                        <td class="product-quantity">
                                            <div class="quantity">
                                                <input type="button" value="-" class="minus">
                                                <input class="input-text qty text" step="1" title="Qty" type="number" value="1">
                                                <input type="button" value="+" class="plus"> </div>
                                        </td>
                                        <td class="product-subtotal"><span class="amount">&#36;19.99</span></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-6 element-bottom-20">
                                    <div class="input-group">
                                        <input class="input-text form-control" id="coupon_code" name="coupon_code" placeholder="Coupon code"> <span class="input-group-btn">
                                        <input class="btn btn-primary" name="apply_coupon" type="submit" value="Apply Coupon">
                                    </span> </div>
                                </div>
                                <div class="col-md-3 element-bottom-20">
                                    <button class="btn btn-info btn-block" name="update_cart" type="submit" value="true"> <i class="fa fa-refresh"></i> Update Cart </button>
                                </div>
                                <div class="col-md-3 element-bottom-20">
                                    <button class="btn btn-success btn-block" name="proceed" type="submit" value="true"> Proceed to Checkout <i class="fa fa-shopping-cart"></i> </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div class="cart_totals">
                            <table cellspacing="0" class="table">
                                <thead>
                                <tr>
                                    <th class="text-center" colspan="2">Cart Totals</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="cart-subtotal">
                                    <th>Cart Subtotal</th>
                                    <td><span class="amount">&#36;114.96</span></td>
                                </tr>
                                <tr class="shipping">
                                    <th>Shipping and Handling</th>
                                    <td>Free Shipping
                                        <input class="shipping_method" data-index="0" type="hidden" value="free_shipping">
                                    </td>
                                </tr>
                                <tr class="order-total success">
                                    <th>Order Total</th>
                                    <td><strong><span class="amount">&#36;114.96</span></strong></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row element-top-20">
                    <div class="col-md-12"></div>
                </div>
            </div>
        </section>
    </article>
@endsection
