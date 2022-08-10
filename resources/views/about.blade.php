@extends('layouts.frontend')

@section('navbar')
@includeIf('layouts.navbar')
@endsection

@section('breadcrumb')
@includeIf('layouts.breadcrumb', ['title' => 'About'])
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
                    <h2>{{config('app.name')}} is a multidisciplinary creative company.</h2>

                    <p>We are a passionate team living and working in different countries around the world to build the best products and offer great services to our audiences.</p>

                    <p>At Ivav Solutions, we do things a little differently and question the norm as can be seen in our mode of operation.</p>

                    <p>We care about building quality products and nurturing trusted relationships that connect us all together. Our passion for making meaningful connections flows through everything we do.</p>

                    <!-- <p>To learn more about our approach to business and work, feel free to reach us using the details below.</p> -->

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

<!-- Start Features Card -->
<div class="features-card-section pt-100 pb-70 bg-f8fbfa">
    <div class="container">
        <div class="section-title">
            <h2>Our Values</h2>
            <p>We want to build a different type of company that’s focused on the happiness of our customers and the growth of our team.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-4 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                <div class="single-features-card tx-center">
                    <i class='bx bx-user-check'></i>
                    <h3>
                        <a>Integrity</a>
                    </h3>
                    <p>When we say we will do, trust us, we will because it is what makes us different.</p>
                </div>
            </div>

            <div class="col-lg-4 col-sm-4 wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                <div class="single-features-card tx-center">
                    <i class='bx bx-search-alt'></i>
                    <h3>
                        <a>Transparency</a>
                    </h3>
                    <p>As a team, we view transparency as a lifestyle not just an act which helps us to inspect and adapt.</p>
                </div>
            </div>

            <div class="col-lg-4 col-sm-4 wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                <div class="single-features-card tx-center">
                    <i class='bx bx-trending-up'></i>
                    <h3>
                        <a>Growth</a>
                    </h3>
                    <p>We appreciate and support individuals’ personal and professional growth.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Features Card -->

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
                <div class="col-lg-4 col-4 col-sm-4 col-md-4">
                    <div class="single-funfacts">
                        <h3><span class="odometer" data-count="5000">00</span><span class="sign-icon">+</span></h3>
                        <p>Hours Worked</p>
                    </div>
                </div>

                <div class="col-lg-4 col-4 col-sm-4 col-md-4">
                    <div class="single-funfacts">
                        <h3><span class="odometer" data-count="99">00</span><span class="sign-icon">%</span></h3>
                        <p>Client's Satisfaction</p>
                    </div>
                </div>

                <div class="col-lg-4 col-4 col-sm-4 col-md-4">
                    <div class="single-funfacts">
                        <h3><span class="odometer" data-count="1000">00</span><span class="sign-icon">+</span></h3>
                        <p>Subscribers</p>
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
                        <a href="https://ivavtravel.com" target="_blank">IvavTravel</a>
                    </h3>
                    <p>IvavTravel is a travel company planning clients needs and making their desires to travel abroad a success.</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                <div class="single-features-card tx-center">
                    <i class='bx bx-laptop'></i>
                    <h3>
                        <a href="#" target="_blank">IvavTech</a>
                    </h3>
                    <p>IvavTech is a tech company building products and offering services to help people and businesses become better.</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                <div class="single-features-card tx-center">
                    <i class='bx bxs-badge-check'></i>
                    <h3>
                        <a href="#" target="_blank">IvavTalent</a>
                    </h3>
                    <p>IvavTalent is a platform where young and talented individuals can promote their gifts to the world.</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
                <div class="single-features-card tx-center">
                    <i class='bx bxs-megaphone'></i>
                    <h3>
                        <a href="https://www.faofoundation.com/" target="_blank">FAO Foundation</a>
                    </h3>
                    <p>FAO Foundation is our non-profit organization committed to touching the lives of people in ways they least expected.</p>
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
                        <!-- <a href="tel:{{config('app.phone_2')}}">{{config('app.phone_2')}}</a> -->
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