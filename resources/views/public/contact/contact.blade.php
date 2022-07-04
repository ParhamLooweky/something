@extends('public.layout.index')
@section('content')
<article>
    <section class="section">
        <div class="container container-vertical-middle">
            <div class="row vertical-middle">
                <div class="col-md-4">
                    <h2 class="text-left element-top-0 element-bottom-0 os-animation normal" data-os-animation="fadeIn" data-os-animation-delay="0s">Get in touch with us</h2> </div>
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
                                <div class="form-group form-icon-group"> <i class="fa fa-pencil"></i>
                                    <textarea class="form-control" id="message" name="message" placeholder="Your message" rows="10" required=""></textarea>
                                </div>
                                <p>
                                    <input type="submit" value="Send email" class="btn btn-primary pull-right"> </p>
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
    
</article>

@endsection
