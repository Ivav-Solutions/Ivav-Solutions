@extends('layouts.frontend')

@section('navbar')
    @includeIf('layouts.navbar')
@endsection

@section('banner')
    @includeIf('layouts.banner')
@endsection

@section('page-content')

<!-- Start Features Card -->
<div class="features-card-section pt-100 pb-70 bg-f8fbfa">
    <div class="container">
        <div class="row">
            <!-- <div class="col-lg-4 col-sm-6 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                <div class="single-features-card text-center rounded">
                    <i class='bx bx-conversation rounded'></i>
                    <h3>
                        <a href="single-service.html">Product Development And Management</a>
                    </h3>
                    <p>We’ve provided our services to a variety of businesses. On every project we undertake, our most important objective is to relate with clients and understand their core necessities and goals.</p>
                </div>
            </div> -->

            <div class="col-lg-6 col-sm-6 wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                <div class="single-features-card text-center rounded">
                    <i class='bx bx-laptop rounded'></i>
                    <h3>
                        <a href="#">Web And Application Development</a>
                    </h3>
                    <p>We bring a wide array of professional personels and services in web development, design, and project management to the work we’re involved with.</p>

                </div>
            </div>

            <!-- <div class="col-lg-4 col-sm-6 wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                <div class="single-features-card text-center rounded">
                    <i class='bx bxs-badge-check rounded'></i>
                    <h3>
                        <a href="#">IT Procurement And Trainings</a>
                    </h3>
                    <p>We exists to solve the critical issues facing our clients, both large and small. Our unique approach is not only what differentiates us, but also what makes us successful.</p>

                </div>
            </div> -->

            <div class="col-lg-6 col-sm-6 wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
                <div class="single-features-card text-center rounded">
                    <i class='bx bxs-megaphone rounded'></i>
                    <h3>
                        <a href="single-service.html">Travel Consultancy</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, consectetur adipiscing elit,  consectetur adipiscing elit, sed do eiusmod tempor dolore magna aliqua.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Features Card -->

<!-- Start Features Area -->
<section class="features-area pt-100 pb-70 bg-f4f6fc">
    <div class="container">
        <div class="section-title">
            <h2>Our Amazing Features</h2>
        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="single-features-box wow animate__animated animate__fadeInRight" data-wow-delay=".1s">
                    <div class="icon">
                        <i class='bx bxs-badge-check'></i>
                    </div>
                    <h3>IT Solutions</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor dolore magna aliqua.</p>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="single-features-box wow animate__animated animate__fadeInRight" data-wow-delay=".2s">
                    <div class="icon">
                        <i class='bx bx-cog'></i>
                    </div>
                    <h3>Flexible Functionality</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor dolore magna aliqua.</p>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="single-features-box wow animate__animated animate__fadeInRight" data-wow-delay=".3s">
                    <div class="icon">
                        <i class='bx bx-conversation'></i>
                    </div>
                    <h3>IT Consultancy</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor dolore magna aliqua.</p>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="single-features-box wow animate__animated animate__fadeInRight" data-wow-delay=".4s">
                    <div class="icon">
                        <i class='bx bxs-dashboard'></i>
                    </div>
                    <h3>Simple Dashboard</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor dolore magna aliqua.</p>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="single-features-box wow animate__animated animate__fadeInRight" data-wow-delay=".5s">
                    <div class="icon">
                        <i class='bx bxs-info-circle'></i>
                    </div>
                    <h3>Information Retrieval</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor dolore magna aliqua.</p>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="single-features-box wow animate__animated animate__fadeInRight" data-wow-delay=".6s">
                    <div class="icon">
                        <i class='bx bxs-bell-ring'></i>
                    </div>
                    <h3>Deadline Reminders</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor dolore magna aliqua.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Features Area -->

<!-- Start Testimonials Area -->
<section class="testimonials-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2>Whats Our Clients Said About <span>{{config('app.name')}}</span></h2>
        </div>

        <div class="row">
            <div class="col-lg-6 col-sm-6">
                <div class="single-testimonials-item">
                    <div class="client-info">
                        <!-- <img src="assets/img/author-image/6.jpg" alt="image"> -->
                        <h3>Michel John</h3>
                        <span>CEO at Envato</span>
                    </div>

                    <div class="testimonials-desc">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6">
                <div class="single-testimonials-item">
                    <div class="client-info">
                        <!-- <img src="assets/img/author-image/7.jpg" alt="image"> -->
                        <h3>Anthony Silas</h3>
                        <span>CEO at EverGreen</span>
                    </div>

                    <div class="testimonials-desc">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6">
                <div class="single-testimonials-item">
                    <div class="client-info">
                        <h3>James Oni</h3>
                        <span>CEO at 3S</span>
                    </div>

                    <div class="testimonials-desc">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6">
                <div class="single-testimonials-item">
                    <div class="client-info">
                        <h3>Jisan James</h3>
                        <span>CEO at IT4u</span>
                    </div>

                    <div class="testimonials-desc">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Testimonials Area -->

<!-- Start Our Loving Clients Area -->
<section class="our-loving-clients ptb-100 bg-color-f8fbfa">
    <div class="container">
        <div class="section-title">
            <h2>Our Loving Clients</h2>
        </div>

        <div class="clients-logo-list align-items-center">
            <div class="single-clients-logo">
                <a href="#">
                    <img src="assets/img/clients-image/1.png" alt="image">
                </a>
            </div>

            <div class="single-clients-logo">
                <a href="#">
                    <img src="assets/img/clients-image/6.png" alt="image">
                </a>
            </div>

            <div class="single-clients-logo">
                <a href="#">
                    <img src="assets/img/clients-image/7.png" alt="image">
                </a>
            </div>

            <div class="single-clients-logo">
                <a href="#">
                    <img src="assets/img/clients-image/8.png" alt="image">
                </a>
            </div>

            <div class="single-clients-logo">
                <a href="#">
                    <img src="assets/img/clients-image/9.png" alt="image">
                </a>
            </div>
        </div>
    </div>
</section>
<!-- End Our Loving Clients Area -->

@endsection