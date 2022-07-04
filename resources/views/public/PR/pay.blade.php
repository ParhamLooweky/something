@extends('public.layout.index')
@section('content')
    <article>
        <section class="section">
            <div class="background-overlay" style="background-color: rgba(240,240,240,1);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-left element-top-30 element-bottom-30 normal regular">
                            Checkout
                        </h1> </div>
                </div>
            </div>
        </section>
        <div class="woocommerce">
            <section class="section section-commerce">
                <div class="container element-top-50 element-bottom-50">
                    <form action="#" class="checkout" id="checkout" method="post" name="checkout">
                        <div class="row">
                            <div class="col-md-6">
                                <h3>Billing Addresss</h3>
                                <p>
                                    <label>Country <abbr class="required" title="required">*</abbr> </label>
                                    <select name="billing_country" class="country_to_state form-control">
                                        <option value=""> Select a country&hellip; </option>
                                        <option value="GR"> Greece </option>
                                        <option value="FR"> France </option>
                                        <option value="UK"> United Kingdom </option>
                                    </select>
                                </p>
                                <p>
                                    <label> First Name <abbr class="required" title="required">*</abbr> </label>
                                    <input class="input-text form-control" name="billing_first_name" placeholder="" type="text"> </p>
                                <p>
                                    <label>Last Name <abbr class="required" title="required">*</abbr> </label>
                                    <input class="input-text form-control" name="billing_last_name" type="text"> </p>
                                <div class="clear"></div>
                                <p>
                                    <label>Company Name</label>
                                    <input class="input-text form-control" name="billing_company" placeholder="" type="text"> </p>
                                <p>
                                    <label>Address <abbr class="required" title="required">*</abbr></label>
                                    <input class="input-text form-control" name="billing_address_1" placeholder="Street address" type="text"> </p>
                                <p>
                                    <input class="input-text form-control" name="billing_address_2" placeholder="Apartment, suite, unit etc. (optional)" type="text"> </p>
                                <p>
                                    <label>Town / City <abbr class="required" title="required">*</abbr> </label>
                                    <input class="input-text form-control" name="billing_city" placeholder="Town / City" type="text"> </p>
                                <p>
                                    <label>County</label>
                                    <input class="input-text form-control" name="billing_state" placeholder="State / County" type="text"> </p>
                                <p>
                                    <label>Postcode <abbr class="required" title="required">*</abbr> </label>
                                    <input class="input-text form-control" name="billing_postcode" placeholder="Postcode / Zip" type="text" value=""> </p>
                                <div class="clear"></div>
                                <p>
                                    <label>Email Address <abbr class="required" title="required">*</abbr></label>
                                    <input class="input-text form-control" name="billing_email" type="text" value="info@oxygenna.com"> </p>
                                <p>
                                    <label>Phone <abbr class="required" title="required">*</abbr> </label>
                                    <input class="input-text form-control" name="billing_phone" type="text"> </p>
                                <div class="clear"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkbox" id="ship-to-different-address">
                                    <label>
                                        <input checked='checked' class="input-checkbox" name="ship_to_different_address" type="checkbox" value="1">
                                        <h3>Ship to a different address?</h3> </label>
                                </div>
                                <p>
                                    <label>Country <abbr class="required" title="required">*</abbr> </label>
                                    <select class="country_to_state form-control" id="billing_country" name="billing_country">
                                        <option value=""> Select a country&hellip; </option>
                                        <option value="GR"> Greece </option>
                                        <option value="FR"> France </option>
                                        <option value="UK"> United Kingdom </option>
                                    </select>
                                </p>
                                <p>
                                    <label> First Name <abbr class="required" title="required">*</abbr> </label>
                                    <input class="input-text form-control" name="billing_first_name" placeholder="" type="text"> </p>
                                <p>
                                    <label>Last Name <abbr class="required" title="required">*</abbr> </label>
                                    <input class="input-text form-control" name="billing_last_name" type="text"> </p>
                                <div class="clear"></div>
                                <p>
                                    <label>Company Name</label>
                                    <input class="input-text form-control" name="billing_company" placeholder="" type="text"> </p>
                                <p>
                                    <label>Address <abbr class="required" title="required">*</abbr></label>
                                    <input class="input-text form-control" name="billing_address_1" placeholder="Street address" type="text"> </p>
                                <p>
                                    <input class="input-text form-control" name="billing_address_2" placeholder="Apartment, suite, unit etc. (optional)" type="text"> </p>
                                <p>
                                    <label>Town / City <abbr class="required" title="required">*</abbr> </label>
                                    <input class="input-text form-control" name="billing_city" placeholder="Town / City" type="text"> </p>
                                <p>
                                    <label>County</label>
                                    <input class="input-text form-control" name="billing_state" placeholder="State / County" type="text"> </p>
                                <p>
                                    <label>Postcode <abbr class="required" title="required">*</abbr> </label>
                                    <input class="input-text form-control" name="billing_postcode" placeholder="Postcode / Zip" type="text" value=""> </p>
                                <div class="clear"></div>
                                <p>
                                    <label>Email Address <abbr class="required" title="required">*</abbr></label>
                                    <input class="input-text form-control" name="billing_email" type="text" value="info@oxygenna.com"> </p>
                                <p>
                                    <label>Phone <abbr class="required" title="required">*</abbr> </label>
                                    <input class="input-text form-control" name="billing_phone" type="text"> </p>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <h3 class="element-top-20">Your order</h3>
                        <div>
                            <table class="shop_table table table-bordered">
                                <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Total</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Cart Subtotal</th>
                                    <td><span>&#36;114.96</span></td>
                                </tr>
                                <tr>
                                    <th>Shipping and Handling</th>
                                    <td>Free Shipping</td>
                                </tr>
                                <tr class="success">
                                    <th>Order Total</th>
                                    <td><strong><span>&#36;114.96</span></strong></td>
                                </tr>
                                </tfoot>
                                <tbody>
                                <tr>
                                    <td>Mens Sporty Hoodie <strong>&times; 1</strong></td>
                                    <td><span>&#36;24.99</span></td>
                                </tr>
                                <tr>
                                    <td>Mens Bomber Jacket <strong>&times; 1</strong></td>
                                    <td><span>&#36;32.99</span></td>
                                </tr>
                                <tr>
                                    <td>White Skirt <strong>&times; 1</strong></td>
                                    <td><span>&#36;20.00</span></td>
                                </tr>
                                <tr>
                                    <td>Lazy Sweatpants <strong>&times; 1</strong></td>
                                    <td><span>&#36;16.99</span></td>
                                </tr>
                                <tr>
                                    <td>Patterned Hooded Jacket <strong>&times; 1</strong></td>
                                    <td><span>&#36;19.99</span></td>
                                </tr>
                                </tbody>
                            </table>
                            <div id="payment">
                                <ul class="payment_methods methods">
                                    <li>
                                        <input checked='checked' class="input-radio" name="payment_method" type="radio">
                                        <label>Direct Bank Transfer</label>
                                    </li>
                                    <li>
                                        <input class="input-radio" name="payment_method" type="radio">
                                        <label>Cheque Payment</label>
                                    </li>
                                    <li>
                                        <input class="input-radio" name="payment_method" type="radio" value="paypal">
                                        <label> PayPal <img alt="PayPal Acceptance Mark" src="https://www.paypalobjects.com/webstatic/mktg/Logo/AM_mc_vs_ms_ae_UK.png"><a class="about_paypal" href="https://www.paypal.com/gb/webapps/mpp/paypal-popup" onclick="javascript:window.open('https://www.paypal.com/gb/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;"
                                                                                                                                                                          title="What is PayPal?">What is PayPal?</a> </label>
                                    </li>
                                </ul>
                                <div class="form-row place-order">
                                    <input class="btn btn-success btn-lg pull-left alt" data-value="Place order" type="submit" value="Place order">
                                    <div class="checkbox">
                                        <label>
                                            <input class="input-checkbox" id="terms" name="terms" type="checkbox"> I have read and accept the <a href="shop-terms.html" target="_blank">terms &amp; conditions</a> </label>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </article>
@endsection
