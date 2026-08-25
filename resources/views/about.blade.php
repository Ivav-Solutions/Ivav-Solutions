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

                    <p>At Ivav Solutions (brand of My Ivav Limited), we do things a little differently and question the norm as can be seen in our mode of operation.</p>

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

<!-- ============================================================
    FEATURES CARD SECTION
    ============================================================ -->
<div class="features-card-section pt-100 pb-70 bg-f8fbfa">
    <div class="container">
        <div class="section-title">
            <h2>Our Services</h2>
        </div>

        <div class="row g-4">
            <!-- 1 – Web Development -->
            <div class="col-lg-3 col-sm-6 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                <div class="single-features-card" data-bs-toggle="modal" data-bs-target="#modalWebDev">
                    <i class='bx bx-laptop'></i>
                    <h3>Web Development</h3>
                </div>
            </div>

            <!-- 2 – Mobile App Development -->
            <div class="col-lg-3 col-sm-6 wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                <div class="single-features-card" data-bs-toggle="modal" data-bs-target="#modalMobileApp">
                    <i class='bx bx-mobile-alt'></i>
                    <h3>Mobile App Development</h3>
                </div>
            </div>

            <!-- 3 – Project Management -->
            <div class="col-lg-3 col-sm-6 wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                <div class="single-features-card" data-bs-toggle="modal" data-bs-target="#modalProjectMgmt">
                    <i class='bx bx-task'></i>
                    <h3>Project Management</h3>
                </div>
            </div>

            <!-- 4 – Product Management -->
            <div class="col-lg-3 col-sm-6 wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                <div class="single-features-card" data-bs-toggle="modal" data-bs-target="#modalProductMgmt">
                    <i class='bx bx-package'></i>
                    <h3>Product Management</h3>
                </div>
            </div>

            <!-- 5 – Brand Design -->
            <div class="col-lg-3 col-sm-6 wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
                <div class="single-features-card" data-bs-toggle="modal" data-bs-target="#modalBrandDesign">
                    <i class='bx bx-palette'></i>
                    <h3>Brand Design</h3>
                </div>
            </div>

            <!-- 6 – Digital Marketing -->
            <div class="col-lg-3 col-sm-6 wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
                <div class="single-features-card" data-bs-toggle="modal" data-bs-target="#modalDigitalMkt">
                    <i class='bx bx-line-chart'></i>
                    <h3>Digital Marketing</h3>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- ============================================================
    MODALS
    ============================================================ -->

<!-- ─── 1. Web Development ─── -->
<div class="modal fade service-modal" id="modalWebDev" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class='bx bx-x'></i></button>
            </div>
            <div class="modal-body">
                <div class="modal-icon"><i class='bx bx-laptop'></i></div>
                <div class="modal-sub">Service</div>
                <h5 class="modal-title">Web Development</h5>
                <p class="modal-description">
                    We build fast, responsive, and scalable web applications tailored to your business needs.
                    From sleek landing pages to complex enterprise platforms, our team uses modern frameworks
                    and best practices to deliver outstanding digital experiences.
                </p>
                <ul class="modal-features">
                    <li><i class='bx bx-check-circle'></i> Custom front-end &amp; back-end</li>
                    <li><i class='bx bx-check-circle'></i> E-commerce &amp; CMS solutions</li>
                    <li><i class='bx bx-check-circle'></i> API integration &amp; microservices</li>
                    <li><i class='bx bx-check-circle'></i> Performance optimisation</li>
                </ul>
                <a href="https://wa.me/{{config('app.phone_1')}}" target="_blank" class="modal-cta">Let's talk about your project</a>
            </div>
        </div>
    </div>
</div>

<!-- ─── 2. Mobile App Development ─── -->
<div class="modal fade service-modal" id="modalMobileApp" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class='bx bx-x'></i></button>
            </div>
            <div class="modal-body">
                <div class="modal-icon"><i class='bx bx-mobile-alt'></i></div>
                <div class="modal-sub">Service</div>
                <h5 class="modal-title">Mobile App Development</h5>
                <p class="modal-description">
                    We create native and cross-platform mobile apps that engage users and drive results.
                    Whether you need an iOS, Android, or hybrid solution, our team designs intuitive
                    interfaces with robust back-end support for seamless performance.
                </p>
                <ul class="modal-features">
                    <li><i class='bx bx-check-circle'></i> Native (Swift / Kotlin) &amp; cross-platform</li>
                    <li><i class='bx bx-check-circle'></i> UI/UX design &amp; prototyping</li>
                    <li><i class='bx bx-check-circle'></i> App store deployment &amp; maintenance</li>
                    <li><i class='bx bx-check-circle'></i> Push notifications &amp; analytics</li>
                </ul>
                <a href="https://wa.me/{{config('app.phone_1')}}" target="_blank" class="modal-cta">Let's build your app</a>
            </div>
        </div>
    </div>
</div>

<!-- ─── 3. Project Management ─── -->
<div class="modal fade service-modal" id="modalProjectMgmt" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class='bx bx-x'></i></button>
            </div>
            <div class="modal-body">
                <div class="modal-icon"><i class='bx bx-task'></i></div>
                <div class="modal-sub">Service</div>
                <h5 class="modal-title">Project Management</h5>
                <p class="modal-description">
                    We bring structure, clarity, and accountability to your projects. Using agile methodologies
                    and industry-leading tools, we ensure your initiatives are delivered on time, within scope,
                    and aligned with your strategic goals.
                </p>
                <ul class="modal-features">
                    <li><i class='bx bx-check-circle'></i> Agile / Scrum / Kanban</li>
                    <li><i class='bx bx-check-circle'></i> Risk &amp; resource management</li>
                    <li><i class='bx bx-check-circle'></i> Stakeholder communication</li>
                    <li><i class='bx bx-check-circle'></i> End-to-end project delivery</li>
                </ul>
                <a href="https://wa.me/{{config('app.phone_1')}}" target="_blank" class="modal-cta">Let's manage your project</a>
            </div>
        </div>
    </div>
</div>

<!-- ─── 4. Product Management ─── -->
<div class="modal fade service-modal" id="modalProductMgmt" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class='bx bx-x'></i></button>
            </div>
            <div class="modal-body">
                <div class="modal-icon"><i class='bx bx-package'></i></div>
                <div class="modal-sub">Service</div>
                <h5 class="modal-title">Product Management</h5>
                <p class="modal-description">
                    We help you define, develop, and launch products that customers love. From discovery and
                    roadmap planning to go-to-market strategy, our product managers partner with you to turn
                    ideas into successful, revenue-generating products.
                </p>
                <ul class="modal-features">
                    <li><i class='bx bx-check-circle'></i> Product discovery &amp; validation</li>
                    <li><i class='bx bx-check-circle'></i> Roadmap &amp; backlog prioritisation</li>
                    <li><i class='bx bx-check-circle'></i> Market research &amp; competitor analysis</li>
                    <li><i class='bx bx-check-circle'></i> Launch &amp; growth strategy</li>
                </ul>
                <a href="https://wa.me/{{config('app.phone_1')}}" target="_blank" class="modal-cta">Let's build your product</a>
            </div>
        </div>
    </div>
</div>

<!-- ─── 5. Brand Design ─── -->
<div class="modal fade service-modal" id="modalBrandDesign" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class='bx bx-x'></i></button>
            </div>
            <div class="modal-body">
                <div class="modal-icon"><i class='bx bx-palette'></i></div>
                <div class="modal-sub">Service</div>
                <h5 class="modal-title">Brand Design</h5>
                <p class="modal-description">
                    We craft distinctive brand identities that resonate with your audience and set you apart.
                    From logos and colour systems to typography and visual language, we create cohesive brand
                    experiences that build trust and recognition.
                </p>
                <ul class="modal-features">
                    <li><i class='bx bx-check-circle'></i> Logo &amp; identity design</li>
                    <li><i class='bx bx-check-circle'></i> Brand guidelines &amp; style tiles</li>
                    <li><i class='bx bx-check-circle'></i> Packaging &amp; collateral design</li>
                    <li><i class='bx bx-check-circle'></i> Brand strategy &amp; positioning</li>
                </ul>
                <a href="https://wa.me/{{config('app.phone_1')}}" target="_blank" class="modal-cta">Let's design your brand</a>
            </div>
        </div>
    </div>
</div>

<!-- ─── 6. Digital Marketing ─── -->
<div class="modal fade service-modal" id="modalDigitalMkt" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class='bx bx-x'></i></button>
            </div>
            <div class="modal-body">
                <div class="modal-icon"><i class='bx bx-line-chart'></i></div>
                <div class="modal-sub">Service</div>
                <h5 class="modal-title">Digital Marketing</h5>
                <p class="modal-description">
                    We drive measurable growth through data-driven digital marketing strategies. From SEO and
                    paid media to content marketing and social media, we help you reach the right audience,
                    engage them effectively, and convert them into loyal customers.
                </p>
                <ul class="modal-features">
                    <li><i class='bx bx-check-circle'></i> SEO &amp; content marketing</li>
                    <li><i class='bx bx-check-circle'></i> Paid advertising (Google, Meta, etc.)</li>
                    <li><i class='bx bx-check-circle'></i> Social media management</li>
                    <li><i class='bx bx-check-circle'></i> Analytics &amp; conversion optimisation</li>
                </ul>
                <a href="https://wa.me/{{config('app.phone_1')}}" target="_blank" class="modal-cta">Let's grow your business</a>
            </div>
        </div>
    </div>
</div>
<!-- End Features Card -->

<!-- ============================================================
    PRODUCT SECTION
    ============================================================ -->
<section class="product-section">
    <div class="container">

        <!-- Section Header -->
        <div class="text-center">
            <h2 class="section-title">Our Product</h2>
            <p class="section-subtitle">Empowering everyday financial flexibility</p>
        </div>

        <!-- TrivPay Card -->
        <div class="product-card-wrapper">
            <div class="trivpay-card">
                <div class="icon">
                    <img src="https://trivpay.ivavsolutions.com/assets/TrivPaY-wziT8eb0.png" width="100" />
                </div>
                <h3>Triv<span>Pay</span></h3>
                <p class="tagline">Flexible credit for everyday bills.</p>
                <p class="description">
                    Pay bills, stay connected, and handle important expenses with a Credit Wallet designed for real life - not financial pressure.
                </p>
                <a href="https://trivpay.ivavsolutions.com/" target="_blank" class="btn-trivpay">
                    <i class='bx bx-right-arrow-alt'></i> Learn More
                </a>
            </div>
        </div>

    </div>
</section>

<!-- <div class="features-card-section pt-100 pb-70 bg-f8fbfa">
    <div class="container">
        <div class="section-title">
            <h2>Our Brands</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                <a href="https://ivavtravel.com" target="_blank">    
                    <div class="single-features-card tx-center">
                        <i class='bx bx-cable-car'></i>
                        <h3>
                            IvavTravel
                        </h3>
                        <p>IvavTravel is a travel company planning clients needs and making their desires to travel abroad a success.</p>
                    </div>
                </a>
            </div>
            
            <div class="col-lg-3 col-sm-6 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                <a href="https://ivavtravel.com" target="_blank">    
                    <div class="single-features-card tx-center">
                        <i class='bx bx-cable-car'></i>
                        <h3>
                            IvavTravel
                        </h3>
                        <p>IvavTravel is a travel company planning clients needs and making their desires to travel abroad a success.</p>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-sm-6 wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                <a href="https://ivavtech.com/" target="_blank">
                    <div class="single-features-card tx-center">
                        <i class='bx bx-laptop'></i>
                        <h3>
                            IvavTech
                        </h3>
                        <p>IvavTech is a tech company building products and offering services to help people and businesses become better.</p>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-sm-6 wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                <a href="#" target="_blank">    
                    <div class="single-features-card tx-center">
                        <i class='bx bxs-badge-check'></i>
                        <h3>
                            IvavTalent
                        </h3>
                        <p>IvavTalent is a platform where young and talented individuals can promote their gifts to the world.</p>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-sm-6 wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
                <a href="https://www.faofoundation.com/" target="_blank">
                    <div class="single-features-card tx-center">
                        <i class='bx bxs-megaphone'></i>
                        <h3>
                            FAO Foundation
                        </h3>
                        <p>FAO Foundation is our non-profit organization committed to touching the lives of people in ways they least expected.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div> -->

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
                                    <div class="form-group">
                                        {!! app('captcha')->display() !!}
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