@extends('layouts.frontend')

@section('navbar')
@includeIf('layouts.navbar')
@endsection

@section('breadcrumb')
@includeIf('layouts.breadcrumb', ['title' => 'Contact Us', 'subtitle' => "Drop us Message for any Query"])
@endsection

@section('page-content')
<section class="contact-box ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-contact-box">
                    <i class="bx bxs-location-plus"></i>
                    <div class="content-title">
                        <h3>Address</h3>
                        <p>{{config('app.address_1')}}</p>
                        <p>{{config('app.address_2')}}</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-contact-box">
                    <i class="bx bx-mail-send"></i>
                    <div class="content-title">
                        <h3>Email</h3>
                        <a href="mailto:{{config('app.email')}}">{{config('app.email')}}</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                <div class="single-contact-box">
                    <i class="bx bxs-phone"></i>
                    <div class="content-title">
                        <h3>Phone</h3>
                        <a href="tel:{{config('app.phone_1')}}">{{config('app.phone_1')}}</a>
                        <a href="tel:{{config('app.phone_2')}}">{{config('app.phone_2')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Start Contact Area -->
<section class="contact-area pb-70">
    <div class="container">
        <div class="contact-inner">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="contact-features-list">
                        <h3>Locate Us Today</h3>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31716.31274344193!2d3.376537635960926!3d6.453161595137153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf4cc8be5bb47%3A0xa100e775f73a58!2sLagos%20Island%2C%20Lagos!5e0!3m2!1sen!2sng!4v1658585494583!5m2!1sen!2sng" style="border:0; width: 100%; height: 460px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="contact-form">
                        <h3>Have Any Questions About Us?</h3>
                        @includeIf('layouts.error_template')
                        <!-- <div id="msgSubmit" class="h3 text-center hidden"></div> -->
                        <!-- <form id="contactForm" method="POST"> -->
                        <form action="/contact-us" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="phone" id="phone" required data-error="Please enter your number" class="form-control" placeholder="Your Phone">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="subject" id="subject" class="form-control" required data-error="Please enter your subject" placeholder="Your Subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="6" required data-error="Write your message" placeholder="Your Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn"><i class='bx bxs-paper-plane'></i>Send Message<span></span></button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Area -->
@endsection