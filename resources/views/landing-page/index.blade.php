@extends('layouts.landing-page')
@section('title', 'Landing Page 1')
@section('main')
    <main>
        <!--Start Hero-->
        <section class="hero-section niwax-lp1" data-background="images/banner/niwax-lpbg.jpg" id="home">
            <div class="text-block">
                <div class="container">
                    <div class="row v-center justify-content-between">
                        <div class="col-lg-6">
                            <div class="header-headings">
                                <span class="text-effect-1">Solution-Oriented Services</span>
                                <h1 class="wow fadeIn mt20 mb30 cd-headline clip" data-wow-delay=".4s">Creative Design
                                    Company We Create
                                    <span class="cd-words-wrapper"> <b class="is-visible">Websites</b> <b>Apps</b> <b>Graphics</b> <b>Brandings</b> <b>Marketings</b> </span>
                                </h1>
                                <p class="wow fadeIn" data-wow-delay=".8s">Niwax is one of the most creative and
                                    experienced mobile app development companies in India.</p>
                                <!-- btn set -->
                                <div class="niwaxbtnvideo mt30">
                                    <a href="#" class="niwax-btn2">GET STARTED<i
                                            class="fas fa-chevron-right fa-icon"></i></a>
                                    <div class="video-btn  d-flex v-center gap10">
                                        <div class="video-intro-ppx"><a class="video-link play-video"
                                                                        href="https://www.youtube.com/watch?v=SZEflIVnhH8?autoplay=1&amp;rel=0"><span
                                                    class="triangle-play"></span></a></div>
                                        <div class="title-hero">
                                            <p>Play Video</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 v-center">
                            <div class="form-block formcover shadow">
                                <h4>Request a Free Quote</h4>
                                <form id="contactForm" data-bs-toggle="validator" class="shake mt30">
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <input type="text" id="name" placeholder="Enter name" required
                                                   data-error="Please fill Out">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <input type="email" id="email" placeholder="Enter email" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <input type="text" id="mobile" placeholder="Enter mobile" required
                                                   data-error="Please fill Out">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <select name="Dtype" id="Dtype" required>
                                                <option value="">Select Requirement</option>
                                                <option value="web">web</option>
                                                <option value="graphic">graphic</option>
                                                <option value="video">video</option>
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <textarea id="message" rows="5" placeholder="Enter your message"
                                                  required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <button type="submit" id="form-submit" class="btn btn-main bg-btn3">Submit</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Hero-->
        <!--Start Service-->
        <section class="dg-service2 pad-tb" id="services">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="common-heading text-center">
                            <span class="text-effect-2">Our Best Services</span>
                            <h2 class="mb30">Our Design & Development Services</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-6 mt30 wow fadeIn" data-wow-delay=".2s">
                        <div class="isotope_item h-scl-">
                            <div class="item-image h-scl-base">
                                <a href="#"><img src="images/portfolio/servc-1.jpg" alt="portfolio" class="img-fluid">
                                </a>
                            </div>
                            <div class="item-info">
                                <h4><a href="#">Web Design</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mt30 wow fadeIn" data-wow-delay=".5s">
                        <div class="isotope_item h-scl-">
                            <div class="item-image h-scl-base">
                                <a href="#"><img src="images/portfolio/servc-2.jpg" alt="portfolio" class="img-fluid">
                                </a>
                            </div>
                            <div class="item-info">
                                <h4><a href="#">UI/UX Design</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mt30 wow fadeIn" data-wow-delay=".8s">
                        <div class="isotope_item h-scl-">
                            <div class="item-image h-scl-base">
                                <a href="#"><img src="images/portfolio/servc-3.jpg" alt="portfolio" class="img-fluid">
                                </a>
                            </div>
                            <div class="item-info">
                                <h4><a href="#">Product Design</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="-cta-btn mt70">
                    <div class="free-cta-title v-center wow zoomInDown" data-wow-delay=".9s">
                        <p>Hire a <span>Dedicated Developer</span></p>
                        <a href="#" class="niwax-btn2">Hire Developer<i class="fas fa-chevron-right fa-icon"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!--End Service-->
        <!-- company awards icons -->
        <div class="niwax-company-awards-cover">
            <div class="container">
                <div class="row v-center">
                    <div class="companytime col-lg-3">
                        <p>20 Yesrs* <span>Industry Experience</span></p>
                    </div>
                    <div class="companyawards col-lg-9">
                        <div class="niwax-logo-awards niwax-logo-slider owl-carousel">
                            <div class="industry-workfors">
                                <img src="images/icons/house.svg" alt="img">
                                <h6>Real estate</h6>
                            </div>
                            <div class="industry-workfors">
                                <img src="images/icons/travel-case.svg" alt="img">
                                <h6>Tour &amp; Travels</h6>
                            </div>
                            <div class="industry-workfors">
                                <img src="images/icons/video-tutorials.svg" alt="img">
                                <h6>Education</h6>
                            </div>
                            <div class="industry-workfors">
                                <img src="images/icons/taxi.svg" alt="img">
                                <h6>Transport</h6>
                            </div>
                            <div class="industry-workfors">
                                <img src="images/icons/event.svg" alt="img">
                                <h6>Event</h6>
                            </div>
                            <div class="industry-workfors">
                                <img src="images/icons/smartphone.svg" alt="img">
                                <h6>eCommerce</h6>
                            </div>
                            <div class="industry-workfors">
                                <img src="images/icons/joystick.svg" alt="img">
                                <h6>Game</h6>
                            </div>
                            <div class="industry-workfors">
                                <img src="images/icons/healthcare.svg" alt="img">
                                <h6>Healthcare</h6>
                            </div>
                            <div class="industry-workfors">
                                <img src="images/icons/money-growth.svg" alt="img">
                                <h6>Finance</h6>
                            </div>
                            <div class="industry-workfors">
                                <img src="images/icons/baker.svg" alt="img">
                                <h6>Restaurant</h6>
                            </div>
                            <div class="industry-workfors">
                                <img src="images/icons/mobile-app.svg" alt="img">
                                <h6>On-Demand</h6>
                            </div>
                            <div class="industry-workfors">
                                <img src="images/icons/groceries.svg" alt="img">
                                <h6>Grocery</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- company awards icons -->

        <!-- who we are about-->
        <section class="why-choos-lg pad-tb deep-dark">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="common-heading text-l">
                            <span>Who We Are</span>
                            <h2 class="mb20">Since 2000, We've Been the Most Dependable Web Design Company.</h2>
                            <p>We have produced IT solutions at a worldwide level by using the full potential of the
                                latest disruptive technologies as one of the leading IT consulting companies in India.
                                We have produced IT solutions at a worldwide level by using the full potential of the
                                latest disruptive technologies as one of the leading IT consulting companies in
                                India.</p>
                            <p>We have produced IT solutions at a worldwide level by using the full potential of the
                                latest disruptive technologies as one of the leading IT consulting companies in
                                India.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="img-design h-scl-">
                            <div class="imgac "><img src="images/hero/creative-ag2a.jpg"
                                                     alt="creative agnecy html template"
                                                     class="ag-dg1 img-fluid h-scl-base"></div>
                            <div class="imgac h-scl-base"><img src="images/hero/creative-ag2b.jpg"
                                                               alt="creative agnecy html template"
                                                               class="ag-dg2 img-fluid "></div>
                            <div class="shpdez1 shpdzz"></div>
                            <div class="shpdez2 shpdzz"></div>
                            <div class="shpdez3 shpdzz"></div>
                            <div class="shpdez4 shpdzz"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt30">
                        <div class="itm-media-object mt40 tilt-3d">
                            <div class="media">
                                <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"><img
                                        src="images/icons/computers.svg" alt="icon" class="layer"></div>
                                <div class="media-body">
                                    <h4>Streamlined Project Management</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec
                                        leo elementum semper. Mauris aliquet egestas metus.</p>
                                </div>
                            </div>
                            <div class="media mt40">
                                <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"><img
                                        src="images/icons/worker.svg" alt="icon" class="layer"></div>
                                <div class="media-body">
                                    <h4>A Dedicated Team of Experts</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec
                                        leo elementum semper. Mauris aliquet egestas metus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt30">
                        <div class="itm-media-object mt40 tilt-3d">
                            <div class="media">
                                <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"><img
                                        src="images/icons/computers.svg" alt="icon" class="layer"></div>
                                <div class="media-body">
                                    <h4>Streamlined Project Management</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec
                                        leo elementum semper. Mauris aliquet egestas metus.</p>
                                </div>
                            </div>
                            <div class="media mt40">
                                <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"><img
                                        src="images/icons/worker.svg" alt="icon" class="layer"></div>
                                <div class="media-body">
                                    <h4>A Dedicated Team of Experts</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec
                                        leo elementum semper. Mauris aliquet egestas metus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- who we are about-->
        <!--End why choose-->
        <section class="portfolio-page dark-bg4 bg-gradient6 pad-tb" id="work">
            <div class="container">
                <div class="row justify-content-left">
                    <div class="col-lg-6">
                        <div class="common-heading pp">
                            <span>Our Work</span>
                            <h2>Portfolio</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 v-center">
                        <div class="filters">
                            <ul class="filter-menu">
                                <li data-filter="*" class="is-checked">All</li>
                                <li data-filter=".website">Website</li>
                                <li data-filter=".app">Mobile App</li>
                                <li data-filter=".graphic">Graphic</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row card-list justify-content-center">
                    <div class="col-lg-4 col-md-6 grid-sizer"></div>
                    <div class="col-lg-4 col-sm-6 single-card-item app">
                        <div class="isotope_item hover-scale">
                            <div class="item-image">
                                <a href="#"><img src="images/portfolio/image-1.jpg" alt="portfolio" class="img-fluid"/>
                                </a>
                            </div>
                            <div class="item-info">
                                <h4><a href="#">Creative App</a></h4>
                                <p>ios, design</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 single-card-item graphic">
                        <div class="isotope_item hover-scale">
                            <div class="item-image">
                                <a href="#"><img src="images/portfolio/image-2.jpg" alt="image" class="img-fluid"/> </a>
                            </div>
                            <div class="item-info">
                                <h4><a href="#">Brochure Design</a></h4>
                                <p>Graphic, Print</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 single-card-item website">
                        <div class="isotope_item hover-scale">
                            <div class="item-image">
                                <a href="#"><img src="images/portfolio/image-3.jpg" alt="image" class="img-fluid"/> </a>
                            </div>
                            <div class="item-info">
                                <h4><a href="#">Ecommerce Development</a></h4>
                                <p>Web Application</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 single-card-item app">
                        <div class="isotope_item hover-scale">
                            <div class="item-image">
                                <a href="#"><img src="images/portfolio/image-4.jpg" alt="image" class="img-fluid"/> </a>
                            </div>
                            <div class="item-info">
                                <h4><a href="#">Icon Pack</a></h4>
                                <p>Android & iOs, Design</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 single-card-item graphic">
                        <div class="isotope_item hover-scale">
                            <div class="item-image">
                                <a href="#"><img src="images/portfolio/image-5.jpg" alt="image" class="img-fluid"/> </a>
                            </div>
                            <div class="item-info">
                                <h4><a href="#">Smart Watch</a></h4>
                                <p>UI/UX Design</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 single-card-item graphic">
                        <div class="isotope_item hover-scale">
                            <div class="item-image">
                                <a href="#"><img src="images/portfolio/image-6.jpg" alt="image" class="img-fluid"/> </a>
                            </div>
                            <div class="item-info">
                                <h4><a href="#">Brochure Design</a></h4>
                                <p>Graphic, Print</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 single-card-item website">
                        <div class="isotope_item hover-scale">
                            <div class="item-image">
                                <a href="#"><img src="images/portfolio/image-7.jpg" alt="image" class="img-fluid"/> </a>
                            </div>
                            <div class="item-info">
                                <h4><a href="#">Packaging Design</a></h4>
                                <p>Graphic, Print</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 single-card-item app">
                        <div class="isotope_item hover-scale">
                            <div class="item-image">
                                <a href="#"><img src="images/portfolio/image-8.jpg" alt="image" class="img-fluid"/> </a>
                            </div>
                            <div class="item-info">
                                <h4><a href="#">Restaurant App</a></h4>
                                <p>Android App</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 single-card-item  website">
                        <div class="isotope_item hover-scale">
                            <div class="item-image">
                                <a href="#"><img src="images/portfolio/image-9.jpg" alt="image" class="img-fluid"/> </a>
                            </div>
                            <div class="item-info">
                                <h4><a href="#">Portfolio Website</a></h4>
                                <p>Web Design</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Portfolio-->
        <!--Start why choose niwax company-->
        <section class="why-niwax-section pad-tb">
            <div class="container">
                <div class="row justify-content-center ">
                    <div class="col-lg-12">
                        <div class="whychooseniwax v-center">
                            <div class="niwaxawardrow1">
                                <div class="awardbgwithtext">
                                    <img src="images/icons/award-bg.png" alt="">
                                    <p>20+<span>YEARS Experience</span></p>
                                </div>
                                <div class="awardbgwithtext">
                                    <img src="images/icons/award-bg.png" alt="">
                                    <p>20+<span>YEARS Experience</span></p>
                                </div>
                                <div class="awardbgwithtext">
                                    <img src="images/icons/award-bg.png" alt="">
                                    <p>20+<span>YEARS Experience</span></p>
                                </div>
                            </div>
                            <div class="niwaxawardrow2">
                                <h2>Why Should You <span
                                        class="text-radius text-light text-animation bg-b">Choose Us!</span></h2>
                                <h4 class="mt10 text-second">Find your reasons to choose us</h4>
                                <p class="mt20">We have been providing Digital Marketing service from last 8 years by
                                    direct collaboration with our clients. As a Digital Marketing company we are
                                    providing all services like SEO Audit, Pay Per Click, Social Media Management,
                                    Organic SEO.</p>
                                <p class="mt10">We work with organizations of all sizes, from startups to Fortune
                                    companies. We believe in forging long-lasting partnerships with all of our clients
                                    and we remain available to our clients whenever they need us. Contact us for more
                                    information.</p>
                                <div class="pairofbtn mt40">
                                    <a href="#" class="niwax-btn3">Get In Touch With Us</a>
                                    <a href="#" class="btnwithiconside d-flex gap10 v-center">
                                        <img src="images/icons/whatsapp.svg" alt="whatsapp">
                                        <div><span>Or - Just Give Us A Call:</span>+91- 1234567890</div>
                                    </a>
                                </div>
                            </div>
                            <div class="niwaxawardrow1">
                                <div class="awardbgwithtext">
                                    <img src="images/icons/award-bg.png" alt="">
                                    <p>20+<span>YEARS Experience</span></p>
                                </div>
                                <div class="awardbgwithtext">
                                    <img src="images/icons/award-bg.png" alt="">
                                    <p>20+<span>YEARS Experience</span></p>
                                </div>
                                <div class="awardbgwithtext">
                                    <img src="images/icons/award-bg.png" alt="">
                                    <p>20+<span>YEARS Experience</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end why choose us -->
        <!--Start reveiws-->
        <section class="bg-gradient1 dark-bg4 pad-tb">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="common-heading ptag">
                            <span>Reviews</span>
                            <h2>Client Testimonials</h2>
                            <p class="mb30">Check our customers success stories.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt30">
                        <div class="niwax-review-slider owl-carousel center-dots">
                            <div class="reviews-card pr-shadow">
                                <div class="row v-center">
                                    <div class="col"><span class="revbx-lr"><i class="fas fa-quote-left"></i></span>
                                    </div>
                                    <div class="col"><span class="revbx-rl"><img src="images/client/upwork-logo.png"
                                                                                 alt="review service logo"></span></div>
                                </div>
                                <div class="review-text">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen
                                        book.</p>
                                </div>
                                <div class="-client-details-">
                                    <div class="-reviewr">
                                        <img src="images/client/reviewer-a.jpg" alt="Good Review" class="img-fluid">
                                    </div>
                                    <div class="reviewer-text">
                                        <h4>Mario Speedwagon</h4>
                                        <p>Business Owner, <small>Jaipur</small></p>
                                        <div class="star-rate">
                                            <ul>
                                                <li><a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                                                                  aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                                                                  aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                                                                  aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                                                                  aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="javascript:void(0)"><i class="fas fa-star"
                                                                                    aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="reviews-card pr-shadow">
                                <div class="row v-center">
                                    <div class="col"><span class="revbx-lr"><i class="fas fa-quote-left"></i></span>
                                    </div>
                                    <div class="col"><span class="revbx-rl"><img src="images/client/upwork-logo.png"
                                                                                 alt="review service logo"></span></div>
                                </div>
                                <div class="review-text">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen
                                        book.</p>
                                </div>
                                <div class="-client-details-">
                                    <div class="-reviewr">
                                        <img src="images/client/reviewer-a.jpg" alt="Good Review" class="img-fluid">
                                    </div>
                                    <div class="reviewer-text">
                                        <h4>Mario Speedwagon</h4>
                                        <p>Business Owner, <small>Jaipur</small></p>
                                        <div class="star-rate">
                                            <ul>
                                                <li><a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                                                                  aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                                                                  aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                                                                  aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                                                                  aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="javascript:void(0)"><i class="fas fa-star"
                                                                                    aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="reviews-card pr-shadow">
                                <div class="row v-center">
                                    <div class="col"><span class="revbx-lr"><i class="fas fa-quote-left"></i></span>
                                    </div>
                                    <div class="col"><span class="revbx-rl"><img src="images/client/upwork-logo.png"
                                                                                 alt="review service logo"></span></div>
                                </div>
                                <div class="review-text">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen
                                        book.</p>
                                </div>
                                <div class="-client-details-">
                                    <div class="-reviewr">
                                        <img src="images/client/reviewer-a.jpg" alt="Good Review" class="img-fluid">
                                    </div>
                                    <div class="reviewer-text">
                                        <h4>Mario Speedwagon</h4>
                                        <p>Business Owner, <small>Jaipur</small></p>
                                        <div class="star-rate">
                                            <ul>
                                                <li><a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                                                                  aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                                                                  aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                                                                  aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                                                                  aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="javascript:void(0)"><i class="fas fa-star"
                                                                                    aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="reviews-card pr-shadow">
                                <div class="row v-center">
                                    <div class="col"><span class="revbx-lr"><i class="fas fa-quote-left"></i></span>
                                    </div>
                                    <div class="col"><span class="revbx-rl"><img src="images/client/upwork-logo.png"
                                                                                 alt="review service logo"></span></div>
                                </div>
                                <div class="review-text">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen
                                        book.</p>
                                </div>
                                <div class="-client-details-">
                                    <div class="-reviewr">
                                        <img src="images/client/reviewer-a.jpg" alt="Good Review" class="img-fluid">
                                    </div>
                                    <div class="reviewer-text">
                                        <h4>Mario Speedwagon</h4>
                                        <p>Business Owner, <small>Jaipur</small></p>
                                        <div class="star-rate">
                                            <ul>
                                                <li><a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                                                                  aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                                                                  aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                                                                  aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                                                                  aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="javascript:void(0)"><i class="fas fa-star"
                                                                                    aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End reviews-->
        <!--Start pricing-->
        <section class="pricing-block pad-tb" id="price">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="common-heading ptag">
                            <span>Our Pricing</span>
                            <h2>Packages that are within your financial constraints</h2>
                            <p class="mb30">Choose from one of our three packages, all of which are priced
                                competitively. We offer comprehensive yet cost-effective options. Everyone will find
                                enticing features in our Basic, Professional, and Premium packages.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 nxpb-1">
                        <div class="niwaxpricingbox shadow">
                            <div class="pricingheader" data-background="images/icons/plan-1.svg">
                                <h2>Basic</h2>
                                <p>Great For Small Business</p>
                            </div>
                            <div class="pricingrate">
                                <div class="pricevalue">
                                    <h2><sup>$</sup> 50.00</h2>
                                </div>
                                <div class="priceoffer">
                                    <h2>10% <span>$60.00</span></h2>
                                </div>
                            </div>
                            <div class="pricingoffers">
                                <ul class="list-ul ul-check">
                                    <li>Customized Theme Based Design</li>
                                    <li>Home Page Slider</li>
                                    <li>Up-to 50 Products</li>
                                    <li>Content Management System</li>
                                    <li>Shopping Cart Integration</li>
                                    <li>Payment Module Integration</li>
                                    <li>Perfect Product Search</li>
                                    <li>Social Media Integration</li>
                                    <li>Responsive Device Design</li>
                                    <li>Dedicated Designer &amp; Developer</li>
                                    <li>Unlimited Revisions</li>
                                    <li>100% Unique Design</li>
                                    <li>100% Satisfaction</li>
                                    <li>100% Unique Design</li>
                                    <li>100% Money Back</li>
                                </ul>
                            </div>
                            <div class="priceodernow">
                                <div class="priceoderbtn"><a href="#" class="niwax-btn3">Order Now</a></div>
                                <div class="priceaskwithus">
                                    <a href="#" class="livechatbtn d-flex gap10 v-center">
                                        <i class="fas fa-comment"></i>
                                        <div><span>Click here to</span> Live Chat</div>
                                    </a>
                                </div>
                            </div>
                            <div class="pricingfooter mt30">
                                <div class="pfdiv1"><a href="#">Call Us: +91 123456790</a></div>
                                <div class="pfdiv2"><a href="#">Need Support</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 nxpb-2">
                        <div class="niwaxpricingbox shadow reco">
                            <div class="pricingheader" data-background="images/icons/plan-2.svg">
                                <h2>Professional</h2>
                                <p>Great For Small Business</p>
                            </div>
                            <div class="pricingrate">
                                <div class="pricevalue">
                                    <h2><sup>$</sup> 150.00</h2>
                                </div>
                                <div class="priceoffer">
                                    <h2>20% <span>$170.00</span></h2>
                                </div>
                            </div>
                            <div class="pricingoffers">
                                <ul class="list-ul ul-check">
                                    <li>Customized Theme Based Design</li>
                                    <li>Home Page Slider</li>
                                    <li>Up-to 50 Products</li>
                                    <li>Content Management System</li>
                                    <li>Shopping Cart Integration</li>
                                    <li>Payment Module Integration</li>
                                    <li>Perfect Product Search</li>
                                    <li>Social Media Integration</li>
                                    <li>Responsive Device Design</li>
                                    <li>Dedicated Designer &amp; Developer</li>
                                    <li>Unlimited Revisions</li>
                                    <li>100% Unique Design</li>
                                    <li>100% Satisfaction</li>
                                    <li>100% Unique Design</li>
                                    <li>100% Money Back</li>
                                </ul>
                            </div>
                            <div class="priceodernow">
                                <div class="priceoderbtn"><a href="#" class="niwax-btn2">Order Now</a></div>
                                <div class="priceaskwithus">
                                    <a href="#" class="livechatbtn d-flex gap10 v-center">
                                        <i class="fas fa-comment"></i>
                                        <div><span>Click here to</span> Live Chat</div>
                                    </a>
                                </div>
                            </div>
                            <div class="pricingfooter mt30">
                                <div class="pfdiv1"><a href="#">Call Us: +91 123456790</a></div>
                                <div class="pfdiv2"><a href="#">Need Support</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 nxpb-3">
                        <div class="niwaxpricingbox shadow">
                            <div class="pricingheader" data-background="images/icons/plan-3.svg">
                                <h2>Premium </h2>
                                <p>Great For Small Business</p>
                            </div>
                            <div class="pricingrate">
                                <div class="pricevalue">
                                    <h2><sup>$</sup> 150.00</h2>
                                </div>
                                <div class="priceoffer">
                                    <h2>40% <span>$280.00</span></h2>
                                </div>
                            </div>
                            <div class="pricingoffers">
                                <ul class="list-ul ul-check">
                                    <li>Customized Theme Based Design</li>
                                    <li>Home Page Slider</li>
                                    <li>Up-to 50 Products</li>
                                    <li>Content Management System</li>
                                    <li>Shopping Cart Integration</li>
                                    <li>Payment Module Integration</li>
                                    <li>Perfect Product Search</li>
                                    <li>Social Media Integration</li>
                                    <li>Responsive Device Design</li>
                                    <li>Dedicated Designer &amp; Developer</li>
                                    <li>Unlimited Revisions</li>
                                    <li>100% Unique Design</li>
                                    <li>100% Satisfaction</li>
                                    <li>100% Unique Design</li>
                                    <li>100% Money Back</li>
                                </ul>
                            </div>
                            <div class="priceodernow">
                                <div class="priceoderbtn"><a href="#" class="niwax-btn3">Order Now</a></div>
                                <div class="priceaskwithus">
                                    <a href="#" class="livechatbtn d-flex gap10 v-center">
                                        <i class="fas fa-comment"></i>
                                        <div><span>Click here to</span> Live Chat</div>
                                    </a>
                                </div>
                            </div>
                            <div class="pricingfooter mt30">
                                <div class="pfdiv1"><a href="#">Call Us: +91 123456790</a></div>
                                <div class="pfdiv2"><a href="#">Need Support</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End pricing-->
        <!--Start Why Choose-->
        <section class="service-block pad-tb bg-gradient3">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="common-heading ptag">
                            <span>We Deliver Our Best</span>
                            <h2>Why Choose Niwax</h2>
                            <p class="mb30">Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In
                                vel hendrerit nisi. Vestibulum eget risus velit.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-6 mt30  wow fadeIn" data-wow-delay=".2s">
                        <div class="s-block wide-sblock">
                            <div class="s-card-icon"><img src="images/icons/teama.svg" alt="service" class="img-fluid">
                            </div>
                            <div class="s-block-content">
                                <h4>Reliable Service. In House Team</h4>
                                <p>In vel hendrerit nisi. Vestibulum eget risus velit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mt30 wow fadeIn" data-wow-delay=".5s">
                        <div class="s-block wide-sblock">
                            <div class="s-card-icon"><img src="images/icons/link.svg" alt="service" class="img-fluid">
                            </div>
                            <div class="s-block-content">
                                <h4>Trusted by People Like You</h4>
                                <p>In vel hendrerit nisi. Vestibulum eget risus velit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mt30 wow fadeIn" data-wow-delay=".8s">
                        <div class="s-block wide-sblock">
                            <div class="s-card-icon"><img src="images/icons/tech.svg" alt="service" class="img-fluid">
                            </div>
                            <div class="s-block-content">
                                <h4>Complete Technical Competency</h4>
                                <p>In vel hendrerit nisi. Vestibulum eget risus velit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mt30 wow fadeIn" data-wow-delay="1.1s">
                        <div class="s-block wide-sblock">
                            <div class="s-card-icon"><img src="images/icons/hi.svg" alt="service" class="img-fluid">
                            </div>
                            <div class="s-block-content">
                                <h4>Friendly & Cordial in Nature</h4>
                                <p>In vel hendrerit nisi. Vestibulum eget risus velit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mt30 wow fadeIn" data-wow-delay="1.4s">
                        <div class="s-block wide-sblock">
                            <div class="s-card-icon"><img src="images/icons/badge.svg" alt="service" class="img-fluid">
                            </div>
                            <div class="s-block-content">
                                <h4>Excellent Quality Delivered on Time</h4>
                                <p>In vel hendrerit nisi. Vestibulum eget risus velit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mt30 wow fadeIn" data-wow-delay="1.7s">
                        <div class="s-block wide-sblock">
                            <div class="s-card-icon"><img src="images/icons/tin.svg" alt="service" class="img-fluid">
                            </div>
                            <div class="s-block-content">
                                <h4>Effective & Continuous Communication</h4>
                                <p>In vel hendrerit nisi. Vestibulum eget risus velit.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="-cta-btn mt70">
                    <div class="free-cta-title v-center wow zoomInDown" data-wow-delay="1.8s">
                        <p>Let's Start a <span>New Project</span> Together</p>
                        <a href="#" class="niwax-btn2">Inquire Now<i class="fas fa-chevron-right fa-icon"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!--End Why Choose-->
        <div class="clientslider">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="niwax-client-slider owl-carousel">
                            <div class="awardlogo"><img src="images/client/customer-logo-1.png" alt="icon"></div>
                            <div class="awardlogo"><img src="images/client/customer-logo-2.png" alt="icon"></div>
                            <div class="awardlogo"><img src="images/client/customer-logo-3.png" alt="icon"></div>
                            <div class="awardlogo"><img src="images/client/customer-logo-4.png" alt="icon"></div>
                            <div class="awardlogo"><img src="images/client/customer-logo-5.png" alt="icon"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
