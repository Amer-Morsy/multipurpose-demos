@extends('layouts.base', ['bodyClass' => 'active-dark'])
@section('title', 'Freelance Portfolio')
@section('content')
    @include('includes.freelance-portfolio.header')
    <main>
        <!--Start Hero-->
        <section class="hero-section fl-hero" id="home">
            <div class="text-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 v-center">
                            <div class="header-heading">
                                <span class="title- wow fadeInUp" data-wow-delay=".1s">Hi there, I am Deo Jones</span>
                                <h1 class="wow fadeInUp" data-wow-delay=".2s"><span>Freelance</span> Web Designer</h1>
                                <p class="wow fadeInUp" data-wow-delay=".4s">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Suspendisse faucibus, risus sit amet auctor sodales, justo erat
                                    tempor eros.</p>
                                <a href="#contact" class="btn-main bg-btn lnk wow fadeInUp" data-wow-delay=".6s">Hire Me
                                    <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay=".4s">
                            <div class="single-image">
                                <img src="images/hero/freelancer-mobile.png" alt="service" class="img-fluid"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Hero-->
        <!--Start About-->
        <section class="about-freelance pad-tb" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="common-heading text-l">
                            <span>Creative Web Designer</span>
                            <h2 class="mb20">Deo Jones</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type
                                specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. is
                                simply dummy text of the printing and typesetting industry. </p>
                            <div class="follow-label mt30"><h6>Follow Me</h6>
                                <a href="javascript:void(0)" target="blank" class="wow bounceIn" data-wow-delay=".2s"><i
                                        class="fab fa-facebook"></i></a>
                                <a href="javascript:void(0)" target="blank" class="wow bounceIn" data-wow-delay=".4s"><i
                                        class="fab fa-instagram"></i></a>
                                <a href="javascript:void(0)" target="blank" class="wow bounceIn" data-wow-delay=".6s"><i
                                        class="fab fa-dribbble"></i></a>
                                <a href="javascript:void(0)" target="blank" class="wow bounceIn" data-wow-delay=".8s"><i
                                        class="fab fa-behance"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="counter-facts">
                            <div class="counter-no mb20 wow bounceIn" data-wow-delay=".2s">
                                <div class="hexagon hexa1" data-tilt data-tilt-max="20" data-tilt-speed="1000">
                                    <div class="counter-number">
                                        <span class="counter">450</span><span>+</span>
                                        <p>Happy Clients</p>
                                    </div>
                                </div>
                            </div>
                            <div class="counter-no mb20  wow bounceIn" data-wow-delay=".4s">
                                <div class="hexagon hexa2" data-tilt data-tilt-max="20" data-tilt-speed="1000">
                                    <div class="counter-number">
                                        <span class="counter">380</span><span>+</span>
                                        <p>Projects Complete</p>
                                    </div>
                                </div>
                            </div>
                            <div class="counter-no mt20  wow bounceIn" data-wow-delay=".6s">
                                <div class="hexagon hexa3" data-tilt data-tilt-max="20" data-tilt-speed="1000">
                                    <div class="counter-number">
                                        <span class="counter">2200</span>
                                        <p>Sales</p>
                                    </div>
                                </div>
                            </div>
                            <div class="counter-no mt20  wow bounceIn" data-wow-delay=".8s">
                                <div class="hexagon hexa4" data-tilt data-tilt-max="20" data-tilt-speed="1000">
                                    <div class="counter-number">
                                        <span class="counter">10</span><span>y</span>
                                        <p>Experience</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End About-->
        <!--Start Service-->
        <section class="bhv-service bg-gradient3 pad-tb deep-dark" id="services">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="common-heading">
                            <span>Service</span>
                            <h2 class="mb30">Specializing In</h2>
                        </div>
                    </div>
                </div>
                <div class="row upset link-hover shape-num justify-content-center">
                    <div class="col-lg-3 col-sm-6 mt30 shape-loc  wow fadeIn" data-wow-delay=".2s">
                        <div class="s-block" data-tilt data-tilt-max="5" data-tilt-speed="1000">
                            <div class="s-card-icon"><img src="images/icons/branding.svg" alt="service"
                                                          class="img-fluid"/></div>
                            <h4>Logo & Branding Service</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mt30 shape-loc  wow fadeIn" data-wow-delay=".5s">
                        <div class="s-block" data-tilt data-tilt-max="5" data-tilt-speed="1000">
                            <div class="s-card-icon"><img src="images/icons/development.svg" alt="service"
                                                          class="img-fluid"/></div>
                            <h4>Website Design & Development</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mt30 shape-loc  wow fadeIn" data-wow-delay=".8s">
                        <div class="s-block" data-tilt data-tilt-max="5" data-tilt-speed="1000">
                            <div class="s-card-icon"><img src="images/icons/app.svg" alt="service" class="img-fluid"/>
                            </div>
                            <h4>Mobile App Development</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
                        </div>
                    </div>
                </div>
                <div class="-cta-btn mt70">
                    <div class="free-cta-title v-center  wow zoomInDown" data-wow-delay="1.1s">
                        <p>Let's Start A <span>New Project Together</span></p>
                        <a href="#" class="btn-main bg-btn2 lnk">Get A Quote <i
                                class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                    </div>
                </div>
            </div>
        </section>
        <!--End Service-->
        <!--Start Portfolio-->
        <section class="portfolio-section pad-tb" id="work">
            <div class="container">
                <div class="row justify-content-center ">
                    <div class="col-lg-8">
                        <div class="common-heading">
                            <span>Our Work</span>
                            <h2 class="mb0">Our Latest Creative Work</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-sm-8 mt60 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="isotope_item hover-scale">
                            <div class="item-image" data-tilt data-tilt-max="2" data-tilt-speed="1000">
                                <a href="#"><img src="images/portfolio/image-d.jpg" alt="image" class="img-fluid"/> </a>
                            </div>
                            <div class="item-info">
                                <h4><a href="#">Ecommerce Development</a></h4>
                                <p>Web Application</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 mt60 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="isotope_item hover-scale">
                            <div class="item-image" data-tilt data-tilt-max="2" data-tilt-speed="1000">
                                <a href="#"><img src="images/portfolio/image-1.jpg" alt="image" class="img-fluid"/> </a>
                            </div>
                            <div class="item-info">
                                <h4><a href="#">Creative App</a></h4>
                                <p>iOs, Android</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 mt60 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="isotope_item hover-scale">
                            <div class="item-image" data-tilt data-tilt-max="2" data-tilt-speed="1000">
                                <a href="#"><img src="images/portfolio/image-6.jpg" alt="image" class="img-fluid"/> </a>
                            </div>
                            <div class="item-info">
                                <h4><a href="#">Brochure Design</a></h4>
                                <p>Graphic, Print</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-sm-8 mt60 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="isotope_item hover-scale">
                            <div class="item-image" data-tilt data-tilt-max="2" data-tilt-speed="1000">
                                <a href="#"><img src="images/portfolio/image-c.jpg" alt="image" class="img-fluid"/> </a>
                            </div>
                            <div class="item-info">
                                <h4><a href="#">Icon Pack</a></h4>
                                <p>iOs, Android</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Portfolio-->
        <!--Start Clients-->
        <section class="clients-section pad-tb" id="clients">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="common-heading">
                            <span>Happy customers</span>
                            <h2>Some of My Clients</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="opl">
                            <ul>
                                <li class=" wow fadeIn" data-wow-delay=".2s">
                                    <div class="clients-logo"><img src="images/client/clients-1.png" alt="text"
                                                                   class="img-fluid"/></div>
                                </li>
                                <li class=" wow fadeIn" data-wow-delay=".4s">
                                    <div class="clients-logo"><img src="images/client/clients-2.png" alt="text"
                                                                   class="img-fluid"/></div>
                                </li>
                                <li class=" wow fadeIn" data-wow-delay=".6s">
                                    <div class="clients-logo"><img src="images/client/clients-3.png" alt="text"
                                                                   class="img-fluid"/></div>
                                </li>
                                <li class=" wow fadeIn" data-wow-delay=".8s">
                                    <div class="clients-logo"><img src="images/client/clients-4.png" alt="text"
                                                                   class="img-fluid"/></div>
                                </li>
                                <li class=" wow fadeIn" data-wow-delay="1s">
                                    <div class="clients-logo"><img src="images/client/clients-5.png" alt="text"
                                                                   class="img-fluid"/></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Clients-->
        <!--Start Testinomial-->
        <section class="testinomial-section pad-tb" id="review">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 v-center">
                        <div class="common-heading text-l">
                            <span>Clients Testimonial</span>
                            <h2 class="mb0">What clients say about my services.</h2>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="owl-carousel testimonial-card-a pl25">
                            <div class="testimonial-card">
                                <div class="t-text">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type
                                        specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. Lorem Ipsum has been the industry's standard dummy text ever
                                        since.</p>
                                </div>
                                <div class="client-thumbs mt30">
                                    <div class="media v-center">
                                        <div class="user-image bdr-radius"><img src="images/user-thumb/girl.jpg"
                                                                                alt="girl" class="img-fluid"/></div>
                                        <div class="media-body user-info v-center">
                                            <h5>Moana Smile</h5>
                                            <p>CEO of Niwax, <small>Jaipur, India</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-card">
                                <div class="t-text">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type
                                        specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. Lorem Ipsum has been the industry's standard dummy text ever
                                        since.</p>
                                </div>
                                <div class="client-thumbs mt30">
                                    <div class="media v-center">
                                        <div class="user-image bdr-radius"><img src="images/user-thumb/girl.jpg"
                                                                                alt="girl" class="img-fluid"/></div>
                                        <div class="media-body user-info">
                                            <h5>Moana Smile</h5>
                                            <p>CEO of Niwax, <small>Jaipur, India</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-card">
                                <div class="t-text">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type
                                        specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. Lorem Ipsum has been the industry's standard dummy text ever
                                        since.</p>
                                </div>
                                <div class="client-thumbs mt30">
                                    <div class="media v-center">
                                        <div class="user-image bdr-radius"><img src="images/user-thumb/girl.jpg"
                                                                                alt="girl" class="img-fluid"/></div>
                                        <div class="media-body user-info">
                                            <h5>Moana Smile</h5>
                                            <p>CEO of Niwax, <small>Jaipur, India</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Testinomial-->
        <!--Start Enquire Form-->
        <section class="enquire-form pad-tb" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="common-heading text-l">
                            <span>Contact Now</span>
                            <h2 class="mt0 mb0">Have Question? Write a Message</h2>
                            <p class="mb60 mt20">We will catch you as early as we receive the message</p>
                        </div>
                        <div class="form-block">
                            <form action="#" method="post" name="feedback-form">
                                <div class="fieldsets row">
                                    <div class="col-md-6"><input type="text" placeholder="Full Name" name="name"></div>
                                    <div class="col-md-6"><input type="email" placeholder="Email Address" name="email">
                                    </div>
                                </div>
                                <div class="fieldsets row">
                                    <div class="col-md-6"><input type="number" placeholder="Contact Number"
                                                                 name="phone"></div>
                                    <div class="col-md-6"><input type="text" placeholder="Subject" name="subject"></div>
                                </div>
                                <div class="fieldsets"><textarea placeholder="Message" name="message"></textarea></div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck" name="example1"
                                           checked="checked">
                                    <label class="custom-control-label" for="customCheck">I agree to the <a
                                            href="javascript:void(0)">Terms &amp; Conditions</a> of Business
                                        Name.</label>
                                </div>
                                <div class="fieldsets mt20">
                                    <button type="submit" name="submit" class="lnk btn-main bg-btn">Submit <i
                                            class="fas fa-chevron-right fa-icon"></i><span class="circle"></span>
                                    </button>
                                </div>
                                <p class="trm"><i class="fas fa-lock"></i>We hate spam, and we respect your privacy.</p>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 v-center">
                        <div class="enquire-image">
                            <img src="images/about/freelancer.png" alt="enquire" class="img-fluid"/>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Enquire Form-->
    </main>
    @include('includes.freelance-portfolio.footer')
@endsection
