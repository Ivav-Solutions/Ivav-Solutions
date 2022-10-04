<!-- Start Subscribe Area -->
<section class="subscribe-area bg-f4f5fe">
    <div class="container">
        <div class="subscribe-content">
            <h2>We always try to be as close to you as possible</h2>

            <form class="newsletter-form" data-bs-toggle="validator">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-8">
                        <input type="email" class="input-newsletter" placeholder="Enter your email" name="EMAIL" required autocomplete="off">
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <button type="submit"><i class="bx bxs-hot"></i> Subscribe Now</button>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div id="validator-newsletter" class="form-result"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- End Subscribe Area -->

<!-- Start Footer Area -->
<footer class="footer-area">
    <!-- <div class="divider"></div> -->

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <div class="logo">
                        <a href="/"><img src="{{URL::asset('assets/img/ivavsolutions_logo.png')}}" alt="image"></a>
                    </div>
                    <p>We create a room for innovative ideas and experimental practices to enable quick and tangible results in bid to fulfill customer's satisfaction.</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Company</h3>

                    <ul class="services-list">
                    <li><a href="/">Home</a></li>
                        <li><a href="/about-us">About Us</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Brands</h3>

                    <ul class="support-list">
                        <li><a href="https://ivavtech.com/" target="_blank">IvavTech</a></li>
                        <li><a href="https://ivavtravel.com" target="_blank">IvavTravel</a></li>
                        <li><a href="" target="_blank">IvavTalent</a></li>
                        <li><a href="https://www.faofoundation.com/">FAO Foundation</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Contact Info</h3>

                    <ul class="footer-contact-info">
                        <li>Location: <a href="#" target="_blank">[{{config('app.address_1')}}]</a>
                                      <a href="#" target="_blank">[{{config('app.address_2')}}]</a></li>
                        <li>Email: <a href="mailto:{{config('app.email')}}"><span class="__cf_email__" data-cfemail="a6cec3cacac9e6d5d2d4c7de88c5c9cb">[{{config('app.email')}}]</span></a></li>
                        <li>Phone: <a href="tel:{{config('app.phone_1')}}">[{{config('app.phone_2')}}]</a></li>
                    </ul>
                    <ul class="social">
                        <li><a href="#" target="_blank"><i class="bx bxl-facebook"></i></a></li>
                        <li><a href="#" target="_blank"><i class="bx bxl-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="bx bxl-linkedin"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/ivav-solutions/" target="_blank"><i class="bx bxl-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="copyright-area">
            <p>Copyright @ {{ date('Y') }} <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                <!-- <script>
                    document.write(new Date().getFullYear())
                </script>  -->
                {{config('app.name')}}. </a>
            </p>
        </div>
    </div>
</footer>
<!-- End Footer Area -->