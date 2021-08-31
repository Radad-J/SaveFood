@extends('layouts.app')
@section('content')

    <section class="breadcrumbs-custom">
        <div class="parallax-container" data-parallax-img="images/bg-about.jpg">
            <div class="breadcrumbs-custom-body parallax-content context-dark">
                <div class="container">
                    <h2 class="text-transform-capitalize breadcrumbs-custom-title">Contact Us</h2>
                    <h5 class="breadcrumbs-custom-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eius <br class="d-none d-md-block">mod tempor incididunt ut labore et dolore magna aliqua.</h5>
                </div>
            </div>
        </div>
        <div class="breadcrumbs-custom-footer">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Get in touch-->
    <section class="section section-xl bg-default text-md-left">
        <div class="container">
            <div class="title-classic">
                <h3 class="title-classic-title">Get in touch</h3>
                <p class="title-classic-subtitle">We are available 24/7 by fax, e-mail or by phone. You can also use our
                    <br class="d-none d-lg-block">quick contact form to ask a question about our products.</p>
            </div>
            <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact"
                  method="post" action="bat/rd-mailform.php">
                <div class="row row-20 row-md-30">
                    <div class="col-lg-8">
                        <div class="row row-20 row-md-30">
                            <div class="col-sm-6">
                                <div class="form-wrap">
                                    <input class="form-input" id="contact-first-name-2" type="text" name="name"
                                           data-constraints="@Required"/>
                                    <label class="form-label" for="contact-first-name-2">First Name</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-wrap">
                                    <input class="form-input" id="contact-last-name-2" type="text" name="name"
                                           data-constraints="@Required"/>
                                    <label class="form-label" for="contact-last-name-2">Last Name</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-wrap">
                                    <input class="form-input" id="contact-email-2" type="email" name="email"
                                           data-constraints="@Email @Required"/>
                                    <label class="form-label" for="contact-email-2">E-mail</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-wrap">
                                    <input class="form-input" id="contact-phone-2" type="text" name="phone"
                                           data-constraints="@Numeric"/>
                                    <label class="form-label" for="contact-phone-2">Phone</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-wrap">
                            <label class="form-label" for="contact-message-2">Message</label>
                            <textarea class="form-input textarea-lg" id="contact-message-2" name="phone"
                                      data-constraints="@Required"></textarea>
                        </div>
                    </div>
                </div>
                <button class="button button-lg button-primary button-zakaria" type="submit">Send Message</button>
            </form>
        </div>
    </section>
    <!-- Get in touch-->
    <section class="section section-xl bg-gray-4">
        <div class="container">
            <div class="row row-30 justify-content-center">
                <div class="col-sm-6 col-md-4">
                    <h4>Phones</h4>
                    <ul class="contacts-classic">
                        <li>Office <a href="tel:#">+1 (409) 987–5874</a>
                        </li>
                        <li>Fax <a href="tel:#">+1 (409) 987–5874</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-4">
                    <h4>Address</h4>
                    <div class="contacts-classic"><a href="#">523 Sylvan Ave, 5th Floor <br>Mountain View, CA 94041 USA</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <h4>E-mails</h4>
                    <ul class="contacts-classic">
                        <li><a href="mailTo:#">info@demolink.org</a></li>
                        <li><a href="mailTo:#">mail@demolink.org</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <!-- RD Google Map-->
        <div class="google-map-container" data-zoom="5" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45."
             data-styles="[{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#e9e9e9&quot;},{&quot;lightness&quot;:17}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f5f5f5&quot;},{&quot;lightness&quot;:20}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:17}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:29},{&quot;weight&quot;:0.2}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:18}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:16}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f5f5f5&quot;},{&quot;lightness&quot;:21}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#dedede&quot;},{&quot;lightness&quot;:21}]},{&quot;elementType&quot;:&quot;labels.text.stroke&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:16}]},{&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:36},{&quot;color&quot;:&quot;#333333&quot;},{&quot;lightness&quot;:40}]},{&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f2f2f2&quot;},{&quot;lightness&quot;:19}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#fefefe&quot;},{&quot;lightness&quot;:20}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#fefefe&quot;},{&quot;lightness&quot;:17},{&quot;weight&quot;:1.2}]}]">
            <div class="google-map"></div>
            <ul class="google-map-markers">
                <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45."
                    data-description="9870 St Vincent Place, Glasgow" data-icon="images/gmap_marker.png"
                    data-icon-active="images/gmap_marker_active.png"></li>
            </ul>
        </div>
    </section>
@endsection
