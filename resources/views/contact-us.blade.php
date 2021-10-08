@extends('layouts.app')
@section('content')
    <section class="breadcrumbs-custom">
        <div class="parallax-container" data-parallax-img="images/bg-about.jpg">
            <div class="breadcrumbs-custom-body parallax-content context-dark">
                <div class="container">
                    <h2 class="text-transform-capitalize breadcrumbs-custom-title">Contact Us</h2>
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
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
            <form class="rd-form"
                  method="post" action="{{ route('contact-us') }}">
                @csrf
                <div class="row row-20 row-md-30">
                    <div class="col-lg-8">
                        <div class="row row-20 row-md-30">
                            <div class="col-sm-6">
                                <div class="form-wrap">
                                    <input class="form-input form-control @error('name') is-invalid @enderror" id="name"
                                           type="text" name="name"
                                           />
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <label class="form-label" for="name">Name</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-wrap">
                                    <input class="form-input form-control @error('subject') is-invalid @enderror"
                                           id="subject" type="text" name="subject"
                                          />
                                    @error('subject')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <label class="form-label" for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-wrap">
                                    <input class="form-input form-control @error('email') is-invalid @enderror"
                                           id="email" type="email" name="email"
                                          />
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <label class="form-label" for="email">E-mail</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-wrap">
                                    <input class="form-input form-control @error('phone_number') is-invalid @enderror"
                                           id="phone_number" type="text" name="phone_number"
                                          />
                                    @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <label class="form-label" for="phone_number">Phone</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-wrap">
                            <label class="form-label" for="message">Message</label>
                            <textarea class="form-input textarea-lg form-control @error('message') is-invalid @enderror" id="message" name="message" ></textarea>
                            @error('message')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
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
                        <li>Office <a href="tel:+32 2 514 26 88">+32 2 514 26 88</a>
                        </li>
                        <li>Fax <a href="tel:+32 2 275 27 27">+32 2 275 27 27</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-4">
                    <h4>Address</h4>
                    <div class="contacts-classic">Rue Charles Buls 14, 1000 <br>Brussels, Belgium.
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <h4>E-mails</h4>
                    <ul class="contacts-classic">
                        <li><a href="mailTo:info@savefood.com">info@savefood.com</a></li>
                        <li><a href="mailTo:contact@savefood.com">contact@savefood.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
