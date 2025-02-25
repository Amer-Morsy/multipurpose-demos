@extends('layouts.agency')
@section('title', 'Agency')

@section('content')
    @include('includes.agency.header')

    <main>
        <!--Start Hero-->
        <section class="hero-slider hero-style">
            <div class="swiper-container">
                <!-- start swiper-wrapper -->
                <div class="swiper-wrapper">
                    <!--slider 1 start -->
                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image" data-background="images/hero/slider-1.jpg">
                            <div class="container">
                                <div data-swiper-parallax="300" class="slide-title">
                                    <h2>Build Your Brand With Niwax</h2>
                                </div>
                                <div data-swiper-parallax="400" class="slide-text">
                                    <p>We are enabling digital transformation for our clients since 1999 by providing
                                        tailored solutions</p>
                                </div>
                                <div class="clearfix"></div>
                                <div data-swiper-parallax="500" class="slide-btns">
                                    <a href="#" class="btn-main bg-btn lnk">View Showcase <i
                                            class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--slider 1 end -->
                    <!--slider 2 start -->
                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image" data-background="images/hero/slider-2.jpg">
                            <div class="container">
                                <div data-swiper-parallax="300" class="slide-title">
                                    <h2>Find Your Place on the Web</h2>
                                </div>
                                <div data-swiper-parallax="400" class="slide-text">
                                    <p>We are enabling digital transformation for our clients since 1999 by providing
                                        tailored solutions</p>
                                </div>
                                <div class="clearfix"></div>
                                <div data-swiper-parallax="500" class="slide-btns">
                                    <a href="#" class="btn-main bg-btn lnk">View Showcase <i
                                            class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--slider 2 end -->
                </div>
                <!-- end swiper-wrapper -->
                <!-- swipper controls -->
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <!-- swipper controls -->
            </div>
        </section>
        <!--End Hero-->


        <!--Start About-->
        <section class="about-sec-app pad-tb pt60 dark-bg2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="common-heading text-l">
                            <h2 class="mb30"><span class="text-second text-bold">Niwax</span> Mobile App Development
                                Company</h2>
                            <p>Lorem Ipsum is text of the printing and typesetting industry. Lorem Ipsum has been the
                                industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled it to make a type specimen book.</p>
                            <p class="mt10"><span class="text-bold">Lorem Ipsumis simply dummy text of the printing and typesetting industry. Simply dummy text of the printing and typesetting industry. </span>
                            </p>
                        </div>
                        <div class="cta-card mt40">
                            <h3 class="mb30">Let's Start a New Project Together</h3>
                            <a href="#" class="btn-outline lnk">Request A Quote<i
                                    class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="funfact">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                    <div class="tilt-outer" data-tilt data-tilt-max="20" data-tilt-speed="1000">
                                        <div class="funfct tilt-inner">
                                            <img src="images/icons/startup.svg" alt="niwax app development template">
                                            <span class="services-cuntr counter">20</span><span
                                                class="services-cuntr">+</span>
                                            <p>Years Experience</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                    <div class="tilt-outer" data-tilt data-tilt-max="20" data-tilt-speed="1000">
                                        <div class="funfct tilt-inner">
                                            <img src="images/icons/team.svg" alt="niwax app development template">
                                            <span class="services-cuntr counter">250</span><span class="services-cuntr">+</span>
                                            <p>Talented Squad</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                    <div class="tilt-outer" data-tilt data-tilt-max="20" data-tilt-speed="1000">
                                        <div class="funfct tilt-inner">
                                            <img src="images/icons/mobile.svg" alt="niwax app development template">
                                            <span class="services-cuntr counter">1200</span><span
                                                class="services-cuntr">+</span>
                                            <p>Apps Developed</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                    <div class="tilt-outer" data-tilt data-tilt-max="20" data-tilt-speed="1000">
                                        <div class="funfct tilt-inner">
                                            <img src="images/icons/computers.svg" alt="niwax app development template">
                                            <span class="services-cuntr counter">100</span><span class="services-cuntr">%</span>
                                            <p>Projects Delivered</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                    <div class="tilt-outer" data-tilt data-tilt-max="20" data-tilt-speed="1000">
                                        <div class="funfct tilt-inner">
                                            <img src="images/icons/world.svg" alt="niwax app development template">
                                            <span class="services-cuntr counter">120</span><span class="services-cuntr">+</span>
                                            <p>Countries Served</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                    <div class="tilt-outer" data-tilt data-tilt-max="20" data-tilt-speed="1000">
                                        <div class="funfct tilt-inner">
                                            <img src="images/icons/deal.svg" alt="niwax app development template">
                                            <span class="services-cuntr counter">100</span><span class="services-cuntr">%</span>
                                            <p>Client Satisfaction</p>
                                        </div>
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
        <section class="service-section service-2 pad-tb">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="common-heading">
                            <span>Services We’re Provided</span>
                            <h2 class="mb30">Our Digital Marketing Services</h2>
                        </div>
                    </div>
                </div>
                <div class="row upset link-hover">
                    <div class="col-lg-6 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".2s">
                        <div class="wide-block service-img1" data-tilt data-tilt-max="2" data-tilt-speed="600">
                            <div class="block-space-">
                                <span>PPC</span>
                                <h4>Digital Media & PPC Advertising</h4>
                                <a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 mt30  wow fadeInUp" data-wow-delay=".4s">
                        <div class="wide-block service-img2" data-tilt data-tilt-max="2" data-tilt-speed="600">
                            <div class="block-space-">
                                <span>MARKETING </span>
                                <h4>Content Marketing Service</h4>
                                <a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 mt30  wow fadeInUp" data-wow-delay=".6s">
                        <div class="wide-block service-img3" data-tilt data-tilt-max="2" data-tilt-speed="600">
                            <div class="block-space-">
                                <span>SEO</span>
                                <h4>Search Engine Optimization</h4>
                                <a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 mt30  wow fadeInUp" data-wow-delay=".8s">
                        <div class="wide-block service-img4" data-tilt data-tilt-max="2" data-tilt-speed="600">
                            <div class="block-space-">
                                <span>WEB DESIGN</span>
                                <h4>Website Design & Development</h4>
                                <a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="-cta-btn mt70">
                    <div class="free-cta-title v-center  wow zoomInDown" data-wow-delay=".9s">
                        <p>Let's Start A <span>New Project Together</span></p>
                        <a href="#" class="btn-main bg-btn2 lnk">Request A Quote <i
                                class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                    </div>
                </div>
            </div>
        </section>
        <!--End Service-->

        <!--why choose-->
        <section class="why-choos-lg-nx pad-tb deep-dark bg-gradient10">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="common-heading text-l">
                            <span>Why Choose Us</span>
                            <h2 class="mb20">Why The Niwax <span class="text-second text-bold">Ranked Top</span> Among
                                The Leading Web & App Development Companies</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s.</p>
                            <div class="itm-media-object mt40 tilt-3d">
                                <div class="media">
                                    <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"><img
                                            src="images/icons/computers.svg" alt="icon" class="layer"></div>
                                    <div class="media-body">
                                        <h4>Streamlined Project Management</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula
                                            nec leo elementum semper. Mauris aliquet egestas metus.</p>
                                    </div>
                                </div>
                                <div class="media mt40">
                                    <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"><img
                                            src="images/icons/worker.svg" alt="icon" class="layer"></div>
                                    <div class="media-body">
                                        <h4>A Dedicated Team of Experts</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula
                                            nec leo elementum semper. Mauris aliquet egestas metus.</p>
                                    </div>
                                </div>
                                <div class="media mt40">
                                    <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"><img
                                            src="images/icons/deal.svg" alt="icon" class="layer"></div>
                                    <div class="media-body">
                                        <h4>Completion of Project in Given Time</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula
                                            nec leo elementum semper. Mauris aliquet egestas metus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div data-tilt data-tilt-max="5" data-tilt-speed="1000" class="single-image wow fadeIn"
                             data-wow-duration="2s"><img src="images/about/about-company.jpg" alt="image" class="w-100">
                        </div>
                        <p class="text-center mt30">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <div class="cta-card mt60 text-center">
                            <h3 class="mb20">Let's Start a <span class="text-second text-bold">New Project</span>
                                Together</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec leo
                                elementum semper.</p>
                            <a href="#" class="btn-outline lnk mt30">Request A Quote <i
                                    class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End why choose-->

        <!--Start Portfolio-->
        <section class="portfolio-section-nx pad-tb">
            <div class="container">
                <div class="row justify-content-center ">
                    <div class="col-lg-8">
                        <div class="common-heading">
                            <span>Our Work</span>
                            <h2 class="mb0">Our Latest Creative Work</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt60">

                    <div class="col-lg-12 col-sm-12 wptbb">
                        <div class="pbwide shadow bg-gradient1">
                            <div class="portfolio-item-info-tt">
                                <div class="logowide mb20"><img src="images/client/customer-logo-5.png" alt="logo"
                                                                class="img-fluid"></div>
                                <div class="widebloktag"><span>Design</span> <span>Coding</span> <span>Design</span>
                                </div>
                                <h3 class="mt30 mb30">Weather & Radar - Accurate Weather Forecast</h3>
                                <ul class="info-list-ul">
                                    <li>Product Strategy</li>
                                    <li>Product UI/UX Design</li>
                                    <li>Branding Design</li>
                                    <li>Design System</li>
                                </ul>
                                <a href="#" class="btn-outline lnk mt30">View Case Study <i
                                        class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                            </div>
                            <div class="portfolio-wide-image">
                                <div class="img-wide-blocktt tilt-outer">
                                    <div class="innerwidedevice tilt-inner" data-tilt data-tilt-max="4"
                                         data-tilt-speed="1000" data-tilt-perspective="2000">
                                        <div class="desktopblock shadow1"><img
                                                src="images/portfolio/portfolio-wide-1.jpg" alt="img" class="img-fluid">
                                        </div>
                                        <div class="mobileblock shadow1"><img
                                                src="images/portfolio/portfolio-wide-1a.jpg" alt="img"
                                                class="img-fluid"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-12 col-sm-12 wptbb">
                        <div class="pbwide shadow bg-gradient2">
                            <div class="portfolio-item-info-tt">
                                <div class="logowide mb20"><img src="images/client/customer-logo-3.png" alt="logo"
                                                                class="img-fluid"></div>
                                <div class="widebloktag"><span>Design</span> <span>Coding</span> <span>Design</span>
                                </div>
                                <h3 class="mt30 mb30">Rethinking how we find & hire photographer</h3>
                                <ul class="info-list-ul">
                                    <li>Product Strategy</li>
                                    <li>Product UI/UX Design</li>
                                    <li>Branding Design</li>
                                    <li>Design System</li>
                                </ul>
                                <a href="#" class="btn-outline lnk mt30">View Case Study <i
                                        class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                            </div>
                            <div class="portfolio-wide-image">
                                <div class="img-wide-blocktt tilt-outer">
                                    <div class="innerwidedevice tilt-inner" data-tilt data-tilt-max="4"
                                         data-tilt-speed="1000" data-tilt-perspective="2000">
                                        <div class="desktopblock shadow1"><img
                                                src="images/portfolio/portfolio-wide-2.jpg" alt="img" class="img-fluid">
                                        </div>
                                        <div class="mobileblock shadow1"><img
                                                src="images/portfolio/portfolio-wide-2a.jpg" alt="img"
                                                class="img-fluid"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-sm-12 wptbb">
                        <div class="pbwide shadow bg-gradient3">
                            <div class="portfolio-item-info-tt">
                                <div class="logowide mb20"><img src="images/client/customer-logo-7.png" alt="logo"
                                                                class="img-fluid"></div>
                                <div class="widebloktag"><span>Design</span> <span>Coding</span> <span>Design</span>
                                </div>
                                <h3 class="mt30 mb30">Rethinking how we find & hire photographer</h3>
                                <ul class="info-list-ul">
                                    <li>Product Strategy</li>
                                    <li>Product UI/UX Design</li>
                                    <li>Branding Design</li>
                                    <li>Design System</li>
                                </ul>
                                <a href="#" class="btn-outline lnk mt30">View Case Study <i
                                        class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                            </div>
                            <div class="portfolio-wide-image">
                                <div class="img-wide-blocktt tilt-outer">
                                    <div class="innerwidedevice tilt-inner" data-tilt data-tilt-max="4"
                                         data-tilt-speed="1000" data-tilt-perspective="2000">
                                        <div class="desktopblock shadow1"><img
                                                src="images/portfolio/portfolio-wide-3.jpg" alt="img" class="img-fluid">
                                        </div>
                                        <div class="mobileblock shadow1"><img
                                                src="images/portfolio/portfolio-wide-3a.jpg" alt="img"
                                                class="img-fluid"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-sm-12 wptbb">
                        <div class="pbwide shadow bg-gradient4">
                            <div class="portfolio-item-info-tt">
                                <div class="logowide mb20"><img src="images/client/customer-logo-5.png" alt="logo"
                                                                class="img-fluid"></div>
                                <div class="widebloktag"><span>Design</span> <span>Coding</span> <span>Design</span>
                                </div>
                                <h3 class="mt30 mb30">Rethinking how we find & hire photographer</h3>
                                <ul class="info-list-ul">
                                    <li>Product Strategy</li>
                                    <li>Product UI/UX Design</li>
                                    <li>Branding Design</li>
                                    <li>Design System</li>
                                </ul>
                                <a href="#" class="btn-outline lnk mt30">View Case Study <i
                                        class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                            </div>
                            <div class="portfolio-wide-image">
                                <div class="img-wide-blocktt tilt-outer">
                                    <div class="innerwidedevice tilt-inner" data-tilt data-tilt-max="4"
                                         data-tilt-speed="1000" data-tilt-perspective="2000">
                                        <div class="desktopblock shadow1"><img
                                                src="images/portfolio/portfolio-wide-4.jpg" alt="img" class="img-fluid">
                                        </div>
                                        <div class="mobileblock shadow1"><img
                                                src="images/portfolio/portfolio-wide-4a.jpg" alt="img"
                                                class="img-fluid"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!--End Portfolio-->


        <!--Start work-category-->
        <section class="work-category pad-tb">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="common-heading ptag">
                            <span>We Have Worked Across Multiple Industries</span>
                            <h2>Industries We Serve</h2>
                            <p>Successfully delivered digital products Lorem Ipsum is simply dummy text of the printing
                                and typesetting industry.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt30">
                    <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="industry-workfor hoshd">
                            <img src="images/icons/house.svg" alt="img">
                            <h6>Real estate</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.3s">
                        <div class="industry-workfor hoshd">
                            <img src="images/icons/travel-case.svg" alt="img">
                            <h6>Tour &amp; Travels</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="industry-workfor hoshd">
                            <img src="images/icons/video-tutorials.svg" alt="img">
                            <h6>Education</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.7s">
                        <div class="industry-workfor hoshd">
                            <img src="images/icons/taxi.svg" alt="img">
                            <h6>Transport</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.9s">
                        <div class="industry-workfor hoshd">
                            <img src="images/icons/event.svg" alt="img">
                            <h6>Event</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1.1s">
                        <div class="industry-workfor hoshd">
                            <img src="images/icons/smartphone.svg" alt="img">
                            <h6>eCommerce</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1.3s">
                        <div class="industry-workfor hoshd">
                            <img src="images/icons/joystick.svg" alt="img">
                            <h6>Game</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1.5s">
                        <div class="industry-workfor hoshd">
                            <img src="images/icons/healthcare.svg" alt="img">
                            <h6>Healthcare</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1.7s">
                        <div class="industry-workfor hoshd">
                            <img src="images/icons/money-growth.svg" alt="img">
                            <h6>Finance</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1.9s">
                        <div class="industry-workfor hoshd">
                            <img src="images/icons/baker.svg" alt="img">
                            <h6>Restaurant</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="2.1s">
                        <div class="industry-workfor hoshd">
                            <img src="images/icons/mobile-app.svg" alt="img">
                            <h6>On-Demand</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="2.3s">
                        <div class="industry-workfor hoshd">
                            <img src="images/icons/groceries.svg" alt="img">
                            <h6>Grocery</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End  work-category-->

        <!--Start Pricing-->
        <section class="pricing-block  pad-tb pb120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="common-heading ptag">
                            <span>Our Pricing</span>
                            <h2>Ready to start?</h2>
                            <p class="mb0">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-table mt60">
                            <div class="inner-table">
                                <img src="images/icons/plan-1.svg" alt="Personal"/>
                                <span class="title">Personal</span>
                                <p class="title-sub">Great For Small Business</p>
                                <h2><sup>$</sup> 79.99</h2>
                                <p class="duration">Monthly Package</p>
                                <div class="details">
                                    <ul>
                                        <li>Social Media Marketing</li>
                                        <li>2.100 Keywords</li>
                                        <li>One Way Link Building</li>
                                        <li>5 Free Optimization</li>
                                        <li>3 Press Releases</li>
                                    </ul>
                                </div>
                            </div>
                            <a href="#" class="btn-main bg-btn lnk">Get Started <i
                                    class="fas fa-chevron-right fa-icon"></i> <span class="circle"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-table best-plan mt60 bg-gradient4">
                            <div class="inner-table">
                                <img src="images/icons/plan-2.svg" alt="Advance"/>
                                <span class="title">Advance</span>
                                <p class="title-sub">Great For Small Business</p>
                                <h2><sup>$</sup> 79.99</h2>
                                <p class="duration">Monthly Package</p>
                                <div class="details">
                                    <ul>
                                        <li>Social Media Marketing</li>
                                        <li>2.100 Keywords</li>
                                        <li>One Way Link Building</li>
                                        <li>5 Free Optimization</li>
                                        <li>3 Press Releases</li>
                                    </ul>
                                </div>
                            </div>
                            <a href="#" class="btn-main bg-btn3 lnk">Get Started <i
                                    class="fas fa-chevron-right fa-icon"></i> <span class="circle"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-table mt60">
                            <div class="inner-table">
                                <img src="images/icons/plan-3.svg" alt="Ultimate"/>
                                <span class="title">Ultimate</span>
                                <p class="title-sub">Great For Small Business</p>
                                <h2><sup>$</sup> 79.99</h2>
                                <p class="duration">Monthly Package</p>
                                <div class="details">
                                    <ul>
                                        <li>Social Media Marketing</li>
                                        <li>2.100 Keywords</li>
                                        <li>One Way Link Building</li>
                                        <li>5 Free Optimization</li>
                                        <li>3 Press Releases</li>
                                    </ul>
                                </div>
                            </div>
                            <a href="#" class="btn-main bg-btn lnk">Get Started <i
                                    class="fas fa-chevron-right fa-icon"></i> <span class="circle"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Pricing-->

        <!--Start Testinomial-->
        <section class="testinomial-section-nx bg-gradient6 pb100 pt100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="common-heading text-l">
                            <h2 class="mb0">What our clients say about our design</h2>
                        </div>
                        <div class="owl-carousel testimonial-card-b mt60">
                            <div class="testimonial-card">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen
                                    book.</p>
                                <div class="-client-details- mt20">
                                    <i class="fas fa-quote-left posiqut"></i>
                                    <div class="reviewer-text">
                                        <h4>Buck Kinnear</h4>
                                        <p>Business Owner, <small>Jaipur</small></p>
                                        <div class="star-rate mt10">
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
                            <div class="testimonial-card">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen
                                    book.</p>
                                <div class="-client-details- mt20">
                                    <i class="fas fa-quote-left posiqut"></i>
                                    <div class="reviewer-text">
                                        <h4>Buck Kinnear</h4>
                                        <p>Business Owner, <small>Jaipur</small></p>
                                        <div class="star-rate mt10">
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
                            <div class="testimonial-card">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen
                                    book.</p>
                                <div class="-client-details- mt20">
                                    <i class="fas fa-quote-left posiqut"></i>
                                    <div class="reviewer-text">
                                        <h4>Buck Kinnear</h4>
                                        <p>Business Owner, <small>Jaipur</small></p>
                                        <div class="star-rate mt10">
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
                            <div class="testimonial-card">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen
                                    book.</p>
                                <div class="-client-details- mt20">
                                    <i class="fas fa-quote-left posiqut"></i>
                                    <div class="reviewer-text">
                                        <h4>Buck Kinnear</h4>
                                        <p>Business Owner, <small>Jaipur</small></p>
                                        <div class="star-rate mt10">
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
                            <div class="testimonial-card">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen
                                    book.</p>
                                <div class="-client-details- mt20">
                                    <i class="fas fa-quote-left posiqut"></i>
                                    <div class="reviewer-text">
                                        <h4>Buck Kinnear</h4>
                                        <p>Business Owner, <small>Jaipur</small></p>
                                        <div class="star-rate mt10">
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
                            <div class="testimonial-card">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen
                                    book.</p>
                                <div class="-client-details- mt20">
                                    <i class="fas fa-quote-left posiqut"></i>
                                    <div class="reviewer-text">
                                        <h4>Buck Kinnear</h4>
                                        <p>Business Owner, <small>Jaipur</small></p>
                                        <div class="star-rate mt10">
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
                    <div class="col-lg-6">
                        <div class="clients-creative-pic pl25">
                            <div class="owl-dots" id="testimonials-avatar">
                                <button class="dot-c1 tcc1 owl-dot active"><img alt="image"
                                                                                src="images/user-thumb/user1.jpg">
                                </button>
                                <button class="dot-c1 tcc2 owl-dot"><img alt="image" src="images/user-thumb/user2.jpg">
                                </button>
                                <button class="dot-c1 tcc3 owl-dot"><img alt="image" src="images/user-thumb/user3.jpg">
                                </button>
                                <button class="dot-c1 tcc4 owl-dot"><img alt="image" src="images/user-thumb/user4.jpg">
                                </button>
                                <button class="dot-c1 tcc5 owl-dot"><img alt="image" src="images/user-thumb/user5.jpg">
                                </button>
                                <button class="dot-c1 tcc6 owl-dot"><img alt="image" src="images/user-thumb/user1.jpg">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Testinomial-->

        <!--Start Blogs-->
        <section class="blogs-section pb120 pt120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="common-heading">
                            <span class="text-effect">what's going on</span>
                            <h2 class="mb30">Latest Stories</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-6 mt30">
                        <div class="single-blog-post- up-hor shdo">
                            <div class="single-blog-img-">
                                <a href="#"><img src="images/blog/blog-dg-1.jpg" alt="girl" class="img-fluid"/></a>
                                <div class="entry-blog-post dg-bg2">
                                    <span class="bypost-"><a href="#"><i class="fas fa-tag"></i> Nodejs</a></span>
                                    <span class="posted-on-">
                           <a href="#"><i class="fas fa-clock"></i> Sep 23, 2020</a>
                           </span>
                                </div>
                            </div>
                            <div class="blog-content-tt">
                                <div class="single-blog-info-">
                                    <h4><a href="#">Everything You Need To Know About Nodejs!</a></h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                                <div class="post-social">
                                    <div
                                        class="ss-inline-share-wrapper ss-hover-animation-fade ss-inline-total-counter-left ss-left-inline-content ss-small-icons ss-with-spacing ss-circle-icons ss-without-labels">
                                        <div class="ss-inline-share-content">
                                            <div class="ss-social-icons-container">
                                                <a href="javascript:void(0)">Shares</a>
                                                <a href="javascript:void(0)" target="blank"><i
                                                        class="fab fa-facebook"></i></a>
                                                <a href="javascript:void(0)" target="blank"><i
                                                        class="fab fa-twitter"></i></a>
                                                <a href="javascript:void(0)" target="blank"><i
                                                        class="fab fa-linkedin"></i></a>
                                                <a href="javascript:void(0)" target="blank"><i
                                                        class="fas fa-envelope"></i></a>
                                                <a href="javascript:void(0)" target="blank"><i
                                                        class="fab fa-facebook-messenger"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mt30">
                        <div class="single-blog-post- up-hor shdo">
                            <div class="single-blog-img-">
                                <a href="#"><img src="images/blog/blog-dg-2.jpg" alt="girl" class="img-fluid"/></a>
                                <div class="entry-blog-post dg-bg2">
                                    <span class="bypost-"><a href="#"><i class="fas fa-tag"></i> Laravel</a></span>
                                    <span class="posted-on-">
                           <a href="#"><i class="fas fa-clock"></i> Sep 24, 2020</a>
                           </span>
                                </div>
                            </div>
                            <div class="blog-content-tt">
                                <div class="single-blog-info-">
                                    <h4><a href="#">Exploring the Key Features of Laravel 7 Framework</a></h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                                <div class="post-social">
                                    <div
                                        class="ss-inline-share-wrapper ss-hover-animation-fade ss-inline-total-counter-left ss-left-inline-content ss-small-icons ss-with-spacing ss-circle-icons ss-without-labels">
                                        <div class="ss-inline-share-content">
                                            <div class="ss-social-icons-container">
                                                <a href="javascript:void(0)">Shares</a>
                                                <a href="javascript:void(0)" target="blank"><i
                                                        class="fab fa-facebook"></i></a>
                                                <a href="javascript:void(0)" target="blank"><i
                                                        class="fab fa-twitter"></i></a>
                                                <a href="javascript:void(0)" target="blank"><i
                                                        class="fab fa-linkedin"></i></a>
                                                <a href="javascript:void(0)" target="blank"><i
                                                        class="fas fa-envelope"></i></a>
                                                <a href="javascript:void(0)" target="blank"><i
                                                        class="fab fa-facebook-messenger"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mt30">
                        <div class="single-blog-post- up-hor shdo">
                            <div class="single-blog-img-">
                                <a href="#"><img src="images/blog/blog-dg-3.jpg" alt="girl" class="img-fluid"/></a>
                                <div class="entry-blog-post dg-bg2">
                                    <span class="bypost-"><a href="#"><i class="fas fa-tag"></i> Mobile Application</a></span>
                                    <span class="posted-on-">
                           <a href="#"><i class="fas fa-clock"></i> Sep 25, 2020</a>
                           </span>
                                </div>
                            </div>
                            <div class="blog-content-tt">
                                <div class="single-blog-info-">
                                    <h4><a href="#">Best Technology for Mobile Application Development</a></h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                                <div class="post-social">
                                    <div
                                        class="ss-inline-share-wrapper ss-hover-animation-fade ss-inline-total-counter-left ss-left-inline-content ss-small-icons ss-with-spacing ss-circle-icons ss-without-labels">
                                        <div class="ss-inline-share-content">
                                            <div class="ss-social-icons-container">
                                                <a href="javascript:void(0)">Shares</a>
                                                <a href="javascript:void(0)" target="blank"><i
                                                        class="fab fa-facebook"></i></a>
                                                <a href="javascript:void(0)" target="blank"><i
                                                        class="fab fa-twitter"></i></a>
                                                <a href="javascript:void(0)" target="blank"><i
                                                        class="fab fa-linkedin"></i></a>
                                                <a href="javascript:void(0)" target="blank"><i
                                                        class="fas fa-envelope"></i></a>
                                                <a href="javascript:void(0)" target="blank"><i
                                                        class="fab fa-facebook-messenger"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Blogs-->
        <!--Start contact-->
        <section class="contact--block bg-gradient1 pad-tb">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="common-heading text-l text-wt">
                            <h2 class="mb0">Interested in working with us?</h2>
                            <p>LET’S TALK AND GET STARTED</p>
                        </div>
                        <div class="contact-fields">
                            <div class="connect-block mt40">
                                <a href="mailto:info@abcd.com" tabindex="-1">
                                    <div class="icon-fld-nx v-center">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="text-fld-nx v-center">
                                        <span class="small-text rows">mail to our hr department</span>
                                        <span class="large-text rows">info@niwax.company.com</span>
                                    </div>
                                </a>
                            </div>
                            <div class="connect-block mt30">
                                <a href="tel:12345679" class="transition" tabindex="-1">
                                    <div class="icon-fld-nx v-center">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="text-fld-nx v-center">
                                        <span class="small-text rows">Our contact Number</span>
                                        <span class="large-text rows">(91) 123 456 7890</span>
                                    </div>
                                </a>
                            </div>
                            <div class="text-fieds- mt40">
                                <h4>& What's you will get :</h4>
                                <ul class="list-style- mt10">
                                    <li> Excellent Customer Support</li>
                                    <li>Project Consulting by Experts</li>
                                    <li>On-Time Project Delivery</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="contact-form-card-pr contact-block-btm">
                            <div class="form-block">
                                <form action="#" id="quotes-form" method="post">
                                    <div class="fieldsets row">
                                        <div class="col-md-6 form-group floating-label">
                                            <input type="text" placeholder=" " required="required"
                                                   class="floating-input">
                                            <label>Full Name*</label>
                                        </div>
                                        <div class="col-md-6 form-group floating-label">
                                            <input type="email" placeholder=" " required="required"
                                                   class="floating-input">
                                            <label>Email Address*</label>
                                        </div>
                                    </div>
                                    <div class="fieldsets row">
                                        <div class="col-md-6 form-group floating-label">
                                            <input type="tel" placeholder=" " required="required"
                                                   class="floating-input">
                                            <label>Mobile Number*</label>
                                        </div>
                                        <div class="col-md-6 form-group floating-label">
                                            <select required="required" class="floating-select">
                                                <option value="">&nbsp;</option>
                                                <option value="Graphic Design">Graphic Design</option>
                                                <option value="Web Design">Web Design</option>
                                                <option value="App Design">App Design</option>
                                                <option value="Other">Other</option>
                                            </select>
                                            <label>Interested In*</label>
                                        </div>
                                    </div>
                                    <div class="fieldsets row">
                                        <div class="col-md-6 form-group floating-label">
                                            <select required="required" class="floating-select">
                                                <option value="">&nbsp;</option>
                                                <option value="#">Less than $500</option>
                                                <option value="#">$500 - $1000</option>
                                                <option value="#">$1000 - $2000</option>
                                                <option value="#">$2000 - $300</option>
                                                <option value="#">$3000+</option>
                                            </select>
                                            <label>Your Budget*</label>
                                        </div>
                                        <div class="col-md-6 form-group floating-label">
                                            <input type="text" placeholder=" " required="required"
                                                   class="floating-input">
                                            <label>Skype ID/Whatsapp No.*</label>
                                        </div>
                                    </div>
                                    <div class="fieldsets row">
                                        <div class="col-md-12 form-group floating-label">
                                            <textarea placeholder=" " required="required"
                                                      class="floating-input"></textarea>
                                            <label>Message*</label>
                                        </div>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck"
                                               name="example1" checked="checked">
                                        <label class="custom-control-label" for="customCheck">I agree to the <a
                                                href="javascript:void(0)">Terms &amp; Conditions</a> of Business
                                            Name.</label>
                                    </div>
                                    <div class="fieldsets mt20">
                                        <button type="submit" name="submit" class="lnk btn-main bg-btn">Submit <i
                                                class="fas fa-chevron-right fa-icon"></i><span class="circle"></span>
                                        </button>
                                    </div>
                                    <p class="trm"><i class="fas fa-lock"></i>We hate spam, and we respect your privacy.
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End contact-->

    </main>
    @include('includes.agency.footer')
@endsection
