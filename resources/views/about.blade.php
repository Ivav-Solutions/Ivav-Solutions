@extends('layouts.frontend')

@section('navbar')
@includeIf('layouts.navbar')
@endsection

@section('breadcrumb')
@includeIf('layouts.breadcrumb', ['title' => 'About', 'subtitle' => "The Ivav Solutions Story"])
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

        <div class="contact-cta-box">
            <h3>Have any question about us?</h3>
            <p>Don't hesitate to contact us.</p>

            <a href="/contact" class="default-btn"><i class="bx bxs-edit-alt"></i>Contact Us<span></span></a>
        </div>
    </div>

    <div class="shape-map1"><img src="assets/img/map1.png" alt="image"></div>
</section>
<!-- End Video Presentation Area -->

<!-- Start Team Area -->
<section class="team-area pb-70">
    <div class="container">
        <div class="section-title">
            <h2>Meet Our experts always ready to help you</h2>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-team-box">
                    <div class="image">
                        <img src="https://via.placeholder.com/580x580">

                        <ul class="social">
                            <li><a href="#" target="_blank"><i class="bx bxl-facebook"></i></a></li>
                            <li><a href="#" target="_blank"><i class="bx bxl-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="bx bxl-linkedin"></i></a></li>
                            <li><a href="#" target="_blank"><i class="bx bxl-instagram"></i></a></li>
                        </ul>
                    </div>

                    <div class="content">
                        <h3>Emmanuuel Nwachukwu</h3>
                        <span>CEO & Founder</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-team-box">
                    <div class="image">
                        <img src="https://via.placeholder.com/580x580">

                        <ul class="social">
                            <li><a href="#" target="_blank"><i class="bx bxl-facebook"></i></a></li>
                            <li><a href="#" target="_blank"><i class="bx bxl-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="bx bxl-linkedin"></i></a></li>
                            <li><a href="#" target="_blank"><i class="bx bxl-instagram"></i></a></li>
                        </ul>
                    </div>

                    <div class="content">
                        <h3>James Oni</h3>
                        <span>UX/UI Designer</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-team-box">
                    <div class="image">
                        <img src="https://via.placeholder.com/580x580">

                        <ul class="social">
                            <li><a href="#" target="_blank"><i class="bx bxl-facebook"></i></a></li>
                            <li><a href="#" target="_blank"><i class="bx bxl-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="bx bxl-linkedin"></i></a></li>
                            <li><a href="#" target="_blank"><i class="bx bxl-instagram"></i></a></li>
                        </ul>
                    </div>

                    <div class="content">
                        <h3>Promise Ezema</h3>
                        <span>Web Developer</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-team-box">
                    <div class="image">
                        <img src="https://via.placeholder.com/580x580">

                        <ul class="social">
                            <li><a href="#" target="_blank"><i class="bx bxl-facebook"></i></a></li>
                            <li><a href="#" target="_blank"><i class="bx bxl-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="bx bxl-linkedin"></i></a></li>
                            <li><a href="#" target="_blank"><i class="bx bxl-instagram"></i></a></li>
                        </ul>
                    </div>

                    <div class="content">
                        <h3>Michael Alabi</h3>
                        <span>Support</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Team Area -->

<!-- Start Feedback Area -->
<section class="feedback-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2>Whats Our Clients Said About <span>{{config('app.name')}}</span></h2>
        </div>

        <div class="feedback-slides owl-carousel owl-theme">
            <div class="single-feedback-item">
                <div class="feedback-desc">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse.</p>
                    <div class="client-info">
                        <h3>Allwell Anibi</h3>
                        <span>CEO at Envato</span>
                    </div>
                </div>
            </div>

            <div class="single-feedback-item">
                <div class="feedback-desc">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse.</p>

                    <div class="client-info">
                        <h3>Victor Ebube</h3>
                        <span>CEO at 4Green</span>
                    </div>
                </div>
            </div>

            <div class="single-feedback-item">

                <div class="feedback-desc">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse.</p>

                    <div class="client-info">
                        <h3>Olu Yekeen</h3>
                        <span>CEO at Fify</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start Feedback Area -->
@endsection