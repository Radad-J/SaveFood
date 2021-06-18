@extends('layouts.app')
@section('content')

<section class="breadcrumbs-custom">
    <div class="parallax-container" data-parallax-img="images/bg-about.jpg">
        <div class="breadcrumbs-custom-body parallax-content context-dark">
            <div class="container">
                <h2 class="text-transform-capitalize breadcrumbs-custom-title">Single Product</h2>
                <h5 class="breadcrumbs-custom-text">We are industry-leading organic farm delivering the best products <br class="d-none d-md-block">that boost your daily life energy and potential.</h5>
            </div>
        </div>
    </div>
    <div class="breadcrumbs-custom-footer">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li><a href="grid-shop.html">Shop</a></li>
                <li class="active">Single Product</li>
            </ul>
        </div>
    </div>
</section>
<!-- Single Product-->
<section class="section section-sm section-first bg-default">
    <div class="container">
        <div class="row row-30">
            <div class="col-lg-6">
                <div class="slick-vertical slick-product">
                    <!-- Slick Carousel-->
                    <div class="slick-slider carousel-parent" id="carousel-parent" data-items="1" data-swipe="true" data-child="#child-carousel" data-for="#child-carousel">
                        <div class="item">
                            <div class="slick-product-figure"><img src="images/single-product-1-530x480.png" alt="" width="530" height="480"/>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slick-product-figure"><img src="images/single-product-2-530x480.jpg" alt="" width="530" height="480"/>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slider child-carousel slick-nav-1" id="child-carousel" data-arrows="true" data-items="3" data-sm-items="3" data-md-items="3" data-lg-items="3" data-xl-items="3" data-xxl-items="3" data-md-vertical="true" data-for="#carousel-parent">
                        <div class="item">
                            <div class="slick-product-figure"><img src="images/single-product-1-530x480.png" alt="" width="530" height="480"/>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slick-product-figure"><img src="images/single-product-2-530x480.jpg" alt="" width="530" height="480"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single-product">
                    <h3 class="text-transform-none font-weight-medium">Avocados</h3>
                    <div class="group-md group-middle">
                        <div class="single-product-price">$20</div>
                        <div class="single-product-rating"><span class="icon mdi mdi-star"></span><span class="icon mdi mdi-star"></span><span class="icon mdi mdi-star"></span><span class="icon mdi mdi-star"></span><span class="icon mdi mdi-star-half"></span></div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Venenatis a condimentum vitae sapien pellentesque habitant morbi. Purus gravida quis </p>
                    <hr class="hr-gray-100">
                    <ul class="list list-description">
                        <li><span>Categories:</span><span>Avocados</span></li>
                        <li><span>Weight:</span><span>1 kg</span></li>
                        <li><span>Box:</span><span>60 x 60 x 90 cm</span></li>
                    </ul>
                    <div class="group-xs group-middle">
                        <div class="product-stepper">
                            <input class="form-input" type="number" data-zeros="true" value="1" min="1" max="1000">
                        </div>
                        <div><a class="button button-lg button-primary button-zakaria" href="#">Add to cart</a></div>
                    </div>
                    <hr class="hr-gray-100">
                    <div class="group-xs group-middle"><span class="list-social-title">Share</span>
                        <div>
                            <ul class="list-inline list-social list-inline-sm">
                                <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                                <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                                <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                                <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap tabs-->
        <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-1">
            <!-- Nav tabs-->
            <div class="nav-tabs-wrap">
                <ul class="nav nav-tabs nav-tabs-1">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-1-1" data-toggle="tab">testimonials</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-2" data-toggle="tab">Additional information</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-3" data-toggle="tab">Delivery and payment</a></li>
                </ul>
            </div>
            <!-- Tab panes-->
            <div class="tab-content tab-content-1">
                <div class="tab-pane fade show active" id="tabs-1-1">
                    <div class="box-comment">
                        <div class="unit flex-column flex-sm-row unit-spacing-md">
                            <div class="unit-left"><a class="box-comment-figure" href="#"><img src="images/user-1-119x119.jpg" alt="" width="119" height="119"/></a></div>
                            <div class="unit-body">
                                <div class="group-sm group-justify">
                                    <div>
                                        <div class="group-xs group-middle">
                                            <h5 class="box-comment-author"><a href="#">Jane Doe</a></h5>
                                            <div class="box-rating"><span class="icon mdi mdi-star"></span><span class="icon mdi mdi-star"></span><span class="icon mdi mdi-star"></span><span class="icon mdi mdi-star"></span><span class="icon mdi mdi-star-half"></span></div>
                                        </div>
                                    </div>
                                    <div class="box-comment-time">
                                        <time datetime="2020-11-30">Nov 30, 2020</time>
                                    </div>
                                </div>
                                <p class="box-comment-text">Urna molestie at elementum eu facilisis sed odio. Odio eu feugiat pretium nibh ipsum consequat nisl vel. Sed risus ultricies tristique nulla aliquet enim tortor. Sapien faucibus et molestie ac feugiat sed. </p>
                            </div>
                        </div>
                    </div>
                    <h4 class="text-transform-none font-weight-medium">Leave a Review</h4>
                    <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                        <div class="row row-20 row-md-30">
                            <div class="col-lg-8">
                                <div class="row row-20 row-md-30">
                                    <div class="col-sm-6">
                                        <div class="form-wrap">
                                            <input class="form-input" id="contact-first-name-2" type="text" name="name" data-constraints="@Required"/>
                                            <label class="form-label" for="contact-first-name-2">First Name</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-wrap">
                                            <input class="form-input" id="contact-last-name-2" type="text" name="name" data-constraints="@Required"/>
                                            <label class="form-label" for="contact-last-name-2">Last Name</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-wrap">
                                            <input class="form-input" id="contact-email-2" type="email" name="email" data-constraints="@Email @Required"/>
                                            <label class="form-label" for="contact-email-2">E-mail</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-wrap">
                                            <input class="form-input" id="contact-phone-2" type="text" name="phone" data-constraints="@Numeric"/>
                                            <label class="form-label" for="contact-phone-2">Phone</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-wrap">
                                    <label class="form-label" for="contact-message-2">Message</label>
                                    <textarea class="form-input textarea-lg" id="contact-message-2" name="phone" data-constraints="@Required"></textarea>
                                </div>
                            </div>
                        </div>
                        <button class="button button-lg button-primary button-zakaria" type="submit">Submit</button>
                    </form>
                </div>
                <div class="tab-pane fade" id="tabs-1-2">
                    <div class="single-product-info">
                        <div class="unit unit-spacing-md flex-column flex-sm-row align-items-sm-center">
                            <div class="unit-left"><span class="icon icon-80 mdi mdi-information-outline"></span></div>
                            <div class="unit-body">
                                <p>Ac orci phasellus egestas tellus rutrum tellus pellentesque. Pellentesque elit eget gravida cum sociis. Ut porttitor leo a diam sollicitudin tempor id. Consectetur lorem donec massa sapien faucibus et molestie ac. Rutrum tellus pellentesque eu tincidunt tortor aliquam. Lacinia at quis risus sed. Elit ullamcorper dignissim cras tincidunt lobortis feugiat vivamus at augue. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tabs-1-3">
                    <div class="single-product-info">
                        <div class="unit unit-spacing-md flex-column flex-sm-row align-items-sm-center">
                            <div class="unit-left"><span class="icon icon-80 mdi mdi-truck-delivery"></span></div>
                            <div class="unit-body">
                                <p>Ut tortor pretium viverra suspendisse potenti. Fermentum leo vel orci porta non pulvinar neque laoreet suspendisse. Pellentesque dignissim enim sit amet. Rhoncus urna neque viverra justo nec ultrices dui sapien eget. Diam phasellus vestibulum lorem sed risus. Feugiat in fermentum posuere urna. Feugiat vivamus at augue eget arcu. Feugiat pretium nibh ipsum consequat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Related Products-->
<section class="section section-sm section-last bg-default">
    <div class="container">
        <h4 class="font-weight-sbold">Featured Products</h4>
        <div class="row row-lg row-30 row-lg-50 justify-content-center">
            <div class="col-sm-6 col-md-5 col-lg-3">
                <!-- Product-->
                <article class="product">
                    <div class="product-body">
                        <div class="product-figure"><img src="images/product-1-196x134.png" alt="" width="196" height="134"/>
                        </div>
                        <h5 class="product-title"><a href="single-product.html">Carrots</a></h5>
                        <div class="product-price-wrap">
                            <div class="product-price product-price-old">$30.00</div>
                            <div class="product-price">$23.00</div>
                        </div>
                    </div><span class="product-badge product-badge-sale">Sale</span>
                    <div class="product-button-wrap">
                        <div class="product-button"><a class="button button-secondary button-zakaria fl-bigmug-line-search74" href="single-product.html"></a></div>
                        <div class="product-button"><a class="button button-primary button-zakaria fl-bigmug-line-shopping202" href="cart-page.html"></a></div>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-3">
                <!-- Product-->
                <article class="product">
                    <div class="product-body">
                        <div class="product-figure"><img src="images/product-2-155x145.png" alt="" width="155" height="145"/>
                        </div>
                        <h5 class="product-title"><a href="single-product.html">Sparkling drinks</a></h5>
                        <div class="product-price-wrap">
                            <div class="product-price">$13.00</div>
                        </div>
                    </div><span class="product-badge product-badge-new">New</span>
                    <div class="product-button-wrap">
                        <div class="product-button"><a class="button button-secondary button-zakaria fl-bigmug-line-search74" href="single-product.html"></a></div>
                        <div class="product-button"><a class="button button-primary button-zakaria fl-bigmug-line-shopping202" href="cart-page.html"></a></div>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-3">
                <!-- Product-->
                <article class="product">
                    <div class="product-body">
                        <div class="product-figure"><img src="images/product-3-180x154.png" alt="" width="180" height="154"/>
                        </div>
                        <h5 class="product-title"><a href="single-product.html">Tomatoes</a></h5>
                        <div class="product-price-wrap">
                            <div class="product-price">$16.99</div>
                        </div>
                    </div>
                    <div class="product-button-wrap">
                        <div class="product-button"><a class="button button-secondary button-zakaria fl-bigmug-line-search74" href="single-product.html"></a></div>
                        <div class="product-button"><a class="button button-primary button-zakaria fl-bigmug-line-shopping202" href="cart-page.html"></a></div>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-3">
                <!-- Product-->
                <article class="product">
                    <div class="product-body">
                        <div class="product-figure"><img src="images/product-4-222x153.png" alt="" width="222" height="153"/>
                        </div>
                        <h5 class="product-title"><a href="single-product.html">Persimmon</a></h5>
                        <div class="product-price-wrap">
                            <div class="product-price">$13.00</div>
                        </div>
                    </div><span class="product-badge product-badge-new">New</span>
                    <div class="product-button-wrap">
                        <div class="product-button"><a class="button button-secondary button-zakaria fl-bigmug-line-search74" href="single-product.html"></a></div>
                        <div class="product-button"><a class="button button-primary button-zakaria fl-bigmug-line-shopping202" href="cart-page.html"></a></div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
@endsection
