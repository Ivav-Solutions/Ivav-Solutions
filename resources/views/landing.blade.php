<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro&family=Lora:wght@700&family=Manrope:wght@500;600;800&family=Montserrat:ital,wght@0,500;1,700&family=Outfit:wght@100;200;300;400;500;600;700;800;900&family=PT+Serif:wght@700&family=Playfair+Display:wght@700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;1,200&family=Space+Mono:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL::asset('styles/style.css')}}">
</head>
<body>
    <header>
        <nav>
            <img src="{{URL::asset('image/IVAV SOLUTIONS 3.png')}}" alt="logo" class="nav-logo" />
            <ul class="nav-links">
                <li class="links"><a href="#">Home</a></li>
                <li class="links"><a href="#">About Us</a></li>
                <li class="links"><a href="#">Services</a></li>
                <li class="links"><a href="#">Pricing</a></li>
                <li class="links"><a href="#">FAQ</a></li>
            </ul>

            <div class="header-logo">
                <div>
                    <i class="fa fa-phone" aria-hidden="true"></i>
                </div>
                <div>
                    <span>Call anytime</span>
                    <p>+234 (09) 3945-9108</p>
                </div>

            </div>
        </nav>
        <div class="container">
            <div class="content-container">
               <span>Welcome to {{config('app.name')}} where innovation meet excellence in the digital realm!</span>
               <h1>Now You Can Elevate Your<br> Digital Presence with <br>Cutting-Edge IT solutions</h1>
               <p>Are you ready to transform your online presence, captivate your audience, reduce your business cost and skyrocket your revenue?</p>
               <div class="btnd">
                   <button class="btn">Schedule a call Today!</button>
               </div>
            </div>
            <div class="img-container">
                <img src="{{URL::asset('image/Rectangle 1847.png')}}" alt="image" class="first-img" />
                <img src="{{URL::asset('image/Rectangle 1848.png')}}" alt="image" class="second-img"  />
            </div>
        </div>


    </header>

    <main>
        <div class="cards-details">
            <h1 class="details">How Can We Help You?</h1>
           <div class="cards-container">
              <div class="cards">
                  <div class="card-content">
                       <div class="card-design">
                          <img src="{{URL::asset('image/fluent_design-ideas-16-regular.png')}}" alt="icon" />
                          <h1>01</h1>
                       </div>
                       <div class="card-text">
                         <h1>Web <br class="br-none"> Design</h1>
                         <p>Immerse your audience in visually stunning, user-friendly websites tailored to your brand.</p>
                         <div class="arrow">
                             <i class="fa fa-arrow-right" aria-hidden="true"></i>
                         </div>
                      </div>
                  </div>
              </div>

               <div class="card">
                  <div class="card-content">
                      <div class="card-design">
                          <img src="{{URL::asset('image/covid_transmission-virus-mobile-application.png')}}" alt="icon" />
                          <h1>02</h1>
                      </div>
                      <div class="card-text">
                         <h1>Mobile Application Development</h1>
                         <p>From concept to code, we turn your ideas into powerful, custom software solutions.</p>
                         <div class="arrow">
                             <i class="fa fa-arrow-right" aria-hidden="true"></i>
                         </div>
                      </div>
                  </div>
               </div>

               <div class="card">
                  <div class="card-content">
                      <div class="card-design">
                          <img src="{{URL::asset('image/tabler_brand-kbin.png')}}" alt="icon" />
                          <h1>03</h1>
                      </div>
                      <div class="card-text">
                         <h1>Digital Branding & Transformation</h1>
                         <p>Propel your business forward with strategic transformations that positions you as a go-to brand.</p>
                         <div class="arrow">
                             <i class="fa fa-arrow-right" aria-hidden="true"></i>
                         </div>
                      </div>
                   </div>
               </div>

               <div class="card">
                    <div class="card-content">
                      <div class="card-design">
                          <img src="{{URL::asset('image/ph_strategy-fill.png')}}" alt="icon" />
                          <h1>04</h1>
                       </div>
                      <div class="card-text">
                         <h1>Digital Marketing <br> Strategies</h1>
                         <p>We will show you the best tactics that will drive hundreds of quality potential clients/customers to your online platform.</p>
                         <div class="arrow">
                             <i class="fa fa-arrow-right" aria-hidden="true"></i>
                         </div>
                       </div>
                  </div>
              </div>
          </div>

        </div>

        <div class="reviews-container">
            <div class="rev-text">
                <h1>Why Choose Us</h1>
            </div>
            <div class="reviews-content">
                <div class="img-hero">
                    <div class="brief-img">
                        <img src="{{URL::asset('image/man.png')}}" alt="image" />
                        <img src="{{URL::asset('image/laptop.png')}}" alt="image" />
                    </div>
                    <img src="{{URL::asset('image/IVAV SOLUTIONS 3.png')}}" alt="logo" class="small-logo" />
                </div>
                <div>
                    <div class="reviews">
                        <div>
                            <img src="{{URL::asset('image/material-symbols_nest-wake-on-approach-outline.png')}}" alt="logo" />
                        </div>
                        <div>
                            <h1>Client-Centric Approach</h1>
                            <p>Your goals are our priority - we tailor solutions to YOUR needs.</p>
                        </div>
                    </div>
                    <hr>
                    <div class="reviews">
                        <div>
                            <img src="{{URL::asset('image/carbon_result.png')}}" alt="logo" />
                        </div>
                        <div>
                            <h1>Proven Results</h1>
                            <p>Our track record speaks for itself - success <br> stories across industries.</p>
                        </div>
                    </div>
                    <hr>
                    <div class="reviews">
                        <div>
                            <img src="{{URL::asset('image/mdi_partnership.png')}}" alt="logo" />
                        </div>
                        <div>
                            <h1>Collaborative Patnership</h1>
                            <p>We're not just service providers; we're your digital <br> partners.</p>
                        </div>
                    </div>
                    <hr>
                    <div class="reviews">
                        <div>
                            <img src="{{URL::asset('image/streamline_industry-innovation-and-infrastructure.png')}}" alt="logo" />
                        </div>
                        <div>
                            <h1>Innovative Solutions</h1>
                            <p>Stay ahead of the curve with cutting-edge <br> designs and technology.</p>
                        </div>
                    </div>
                    <hr>
                </div>

            </div>

        </div>

        <div class="project-container">
            <div class="proj-text">
                <div>
                    <h1>Featured Pojects</h1>
                </div>
                <div class="project-img">
                    <div class="pro-img1">
                        <img src="{{URL::asset('image/WhatsApp.jpg')}}" alt="" width="300" class="pro-img-1"/>
                    </div>
                    <div class="pro-img">
                        <img src="{{URL::asset('image/phones.png')}}" alt="" width="300" class="pro-img-1"/>
                    </div>
                    <div class="pro-img">
                        <img src="{{URL::asset('image/blankpage.png')}}" alt="" width="300" class="pro-img-1"/>
                    </div>

                </div>
                <div class="proj-icon">
                    <img src="{{URL::asset('image/rightarrow.png')}}" alt="" />
                    <img src="{{URL::asset('image/solar_arrow-left-outline.png')}}" alt="" />
                </div>
            </div>

        </div>

        <div class="bookings">
            <div class="book-container">
                <div class="book-content">
                    <h1>Ready to take the leap into digital greatness?</h1>
                    <p>Let's talk! Schedule a call with us now and let us uncover the limitless possibilities for your business.</p>
                    <p>Book A Call Today, it's Free! </p>
                    <div class="book-content-btn">
                        <button>Book Now</button>
                    </div>
                </div>

                <div class="book-img">
                  <img src="{{URL::asset('image/Rectangle 1847.png')}}" alt="image" class="first-book"  />
                  <img src="{{URL::asset('image/Rectangle 1848.png')}}" alt="image" class="second-book" />
                </div>
            </div>
        </div>

        <div class="contact-container">
            <div>
                <h1>Schedule a Phone Call with us, its free</h1>
                <p>Please use this form below to show your interest in having a call with our team of experts</p>
                <form>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Name</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter your name">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="formGroupExampleInput2" placeholder="Enter your phone number">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="formGroupExampleInput2" placeholder="Enter your email address">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Another label</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
                    </div>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Are you comfortable with WhatsApp call?</option>
                        <option value="1">Yes</option>
                        <option value="2">No</option>
                      </select>

                </form>
            </div>

        </div>

        <div class="footer">
            <div class="footer-container">
                <div class="footer-form">
                    <h1>Subscribe to our <br> newsletter</h1>
                    <form>
                        <input type="email" placeholder="Email address" />
                        <button><img src="{{URL::asset('image/Submit.png')}}" alt="" width="40" /></button>
                    </form>
                </div>
                <div class="footer-services">
                    <h1>Explore</h1>
                    <p>Search</p>
                    <p>About Company</p>
                    <p>Our Projects</p>
                    <p>Services</p>
                    <p>Pricing</p>
                </div>
                <div class="footer-contact">
                    <h1>Contact</h1>
                    <p>info@ivavsolutions.com</p>
                    <p>+234 (09) 3945-9108</p>
                </div>
                <div class="footer-help">
                    <h1>Help</h1>
                    <p>FAQ</p>
                </div>

            </div>

            <div class="footer-social">
               <div class="policy">
                 <p>Terms & Service</p>
                 <p>Privacy Policy</p>
               </div>
               <div>
                <img src="{{URL::asset('image/Social.png')}}" alt="" width="120" />
               </div>
            </div>
            <hr>
            <p class="footer-copy">Copyright © 2024, {{config('app.name')}}</p>

        </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
