@extends('layouts.frontend')

@section('navbar')
@includeIf('layouts.navbar')
@endsection

@section('breadcrumb')
@includeIf('layouts.breadcrumb', ['title' => 'About', 'subtitle' => "The Ivav Solutions Story"])
@endsection

@section('footer')
@includeIf('layouts.footer')
@endsection

@section('page-content')
<!-- Start About Area -->
<section class="about-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="about-content">
                    <span class="sub-title">How we are Founded</span>
                    <h2>Take your business to the next level</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    <p>Every month they moved their money the old way – which wasted their time and money. So they invented a beautifully simple workaround that became a billion-dollar business.</p>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="about-image">
                    <img src="assets/img/about-img.jpg" alt="image">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Area -->

<!-- Start Video Presentation Area -->
<section class="video-presentation-area ptb-100">
    <div class="container">
        <div class="section-title">
            <h2>Watch this video presentation to know more</h2>
        </div>

        <div class="video-box">
            <img src="assets/img/video-bg.jpg" class="main-image" alt="image">

            <a href="#" class="video-btn popup-youtube"><i class="bx bx-play"></i></a>

        </div>

        <div class="funfacts-inner">
            <div class="row">
                <div class="col-lg-3 col-6 col-sm-3 col-md-3">
                    <div class="single-funfacts">
                        <h3><span class="odometer" data-count="180">00</span><span class="sign-icon">k</span></h3>
                        <p>Downloaded</p>
                    </div>
                </div>

                <div class="col-lg-3 col-6 col-sm-3 col-md-3">
                    <div class="single-funfacts">
                        <h3><span class="odometer" data-count="20">00</span><span class="sign-icon">k</span></h3>
                        <p>Feedback</p>
                    </div>
                </div>

                <div class="col-lg-3 col-6 col-sm-3 col-md-3">
                    <div class="single-funfacts">
                        <h3><span class="odometer" data-count="500">00</span><span class="sign-icon">+</span></h3>
                        <p>Workers</p>
                    </div>
                </div>

                <div class="col-lg-3 col-6 col-sm-3 col-md-3">
                    <div class="single-funfacts">
                        <h3><span class="odometer" data-count="70">00</span><span class="sign-icon">+</span></h3>
                        <p>Contributors</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="shape-map1"><img src="assets/img/map1.png" alt="image"></div>
</section>
<!-- End Video Presentation Area -->

<!-- Start Features Card -->
<div class="features-card-section pt-100 pb-70 bg-f8fbfa">
    <div class="container">
        <div class="section-title">
            <h2>Our Brands</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                <div class="single-features-card tx-center">
                    <i class='bx bx-cable-car'></i>
                    <h3>
                        <a href="#">IvavTravel</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor dolore magna aliqua.</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                <div class="single-features-card tx-center">
                    <i class='bx bx-laptop'></i>
                    <h3>
                        <a href="#">IvavTech</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor dolore magna aliqua.</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                <div class="single-features-card tx-center">
                    <i class='bx bxs-badge-check'></i>
                    <h3>
                        <a href="#">IvavTalent</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor dolore magna aliqua.</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
                <div class="single-features-card tx-center">
                    <i class='bx bxs-megaphone'></i>
                    <h3>
                        <a href="https://www.faofoundation.com/">FAO Foundation</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor dolore magna aliqua.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Features Card -->

<section class="contact-box ptb-100">
    <div class="container">
        <div class="section-title">
            <h2>Contact Us</h2>
        </div>
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