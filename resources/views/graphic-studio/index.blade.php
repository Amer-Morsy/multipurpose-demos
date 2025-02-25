@extends('layouts.base', ['bodyClass'=>'dark-main f-weight active-dark'])
@section('title', 'Graphic Studio')
@section('content')
    @include('includes.graphic-studio.header')
    <main>
        <!--Start Hero-->
        <section class="hero-section hero-digital-agency-1 dg-bg--1 graphic-studio" id="home">
            <div class="text-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 v-center">
                            <div class="header-heading">
                                <h1 class="wow fadeInUp text-effect-1" data-wow-delay=".2s">We Build Your Brand
                                    Online</h1>
                                <p class="wow fadeInUp" data-wow-delay=".4s">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Suspendisse faucibus, risus sit amet auctor sodales, justo erat
                                    tempor eros.</p>
                                <div class="-content-sec  d-flex mt60 v-center">
                                    <div class="mr25"><a href="#" class="btn-main bg-btn4 lnk">GET STARTED<i
                                                class="fas fa-chevron-right fa-icon"></i><span
                                                class="circle"></span></a></div>
                                    <div class="video-intro-pp v-center"><a class="video-link play-video"
                                                                            href="https://www.youtube.com/watch?v=SZEflIVnhH8?autoplay=1&amp;rel=0"><span
                                                class="triangle-play"></span></a></div>
                                    <div class="title-hero-oth v-center">
                                        <p>See live demo
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 v-center tilt-3d">
                            <div class="img-with-shape base" data-tilt data-tilt-max="8" data-tilt-speed="2000">
                                <div class="shape-dg-1 dg-hero-shp2"><img src="images/shape/shape-dg-1.png" alt="shape"
                                                                          class="img-fluid niwax"
                                                                          data-rellax-speed="-3"></div>
                                <img src="images/about/digi-agency-dg.jpg" alt="digital agency"
                                     class="img-fluid dg-hero-img0"/>
                                <div class="shape-dg-1 dg-hero-shp1a"><img src="images/shape/dots-dg.png" alt="shape"
                                                                           class="img-fluid niwax"
                                                                           data-rellax-speed="-6"></div>
                                <div class="shape-dg-1 dg-hero-shp3"><img src="images/shape/shape-dg-2.png" alt="shape"
                                                                          class="img-fluid niwax" data-rellax-speed="4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Hero-->
        <!--Start About-->
        <section class="about-dg- dg-bg--2 pb130 pt130" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="common-heading-2 text-l">
                            <span class="text-effect-1">We Are Creative Agency</span>
                            <h2 class="mb20">About Agency</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500.</p>
                            <div class="itm-media-object mt60 tilt-3d">
                                <div class="media">
                                    <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"><img
                                            src="images/icons/computers.svg" alt="icon" class="layer"></div>
                                    <div class="media-body">
                                        <h4>Streamlined Project Management</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula
                                            nec leo elementum semper.</p>
                                    </div>
                                </div>
                                <div class="media mt50">
                                    <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"><img
                                            src="images/icons/worker.svg" alt="icon" class="layer"></div>
                                    <div class="media-body">
                                        <h4>A Dedicated Team of Experts</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula
                                            nec leo elementum semper.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 v-center tilt-3d pl--100">
                        <div class="img-block base" data-tilt data-tilt-max="4" data-tilt-speed="2000">
                            <img src="images/about/digital-agency-dg.jpg" alt="about"
                                 class="img-fluid upset dg-hero-img0"/>
                            <div class="shape-dg-1 dg-hero-shp1a"><img src="images/shape/dots-dg.png" alt="shape"
                                                                       class="img-fluid niwax" data-rellax-speed="1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-dg-2 dg-bg--1 pb130 pt130">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 v-center tilt-3d pr--100">
                        <div class="img-block base m-mb30 mt0" data-tilt data-tilt-max="4" data-tilt-speed="2000">
                            <img src="images/about/about-dg-agency.jpg" alt="about"
                                 class="img-fluid upset dg-hero-img0"/>
                            <div class="shape-dg-1 dg-hero-shp1a"><img src="images/shape/dots-dg.png" alt="shape"
                                                                       class="img-fluid niwax" data-rellax-speed="1">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="common-heading-2 text-l">
                            <span class="text-effect-1">We Are Creative Agency</span>
                            <h2 class="mb20">We are A Creative Agency with a passion for design</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500. Lorem Ipsum is simply
                                dummy text of the printing and typesetting industry.</p>
                            <a href="#" class="btn-main bg-btn4 lnk mt40">Request a proposal<i
                                    class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End About-->
        <!--Start Service-->
        <section class="dg-service2 dg-bg--2 pb130 pt130" id="services">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="common-heading-2 text-center">
                            <span class="text-effect-1">Populor Services</span>
                            <h2 class="mb30">We help Brands with</h2>
                        </div>
                    </div>
                </div>
                <div class="row upset ovr-bg1 ho-gdnt">
                    <div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".2s">
                        <div class="s-block up-hor ovr-base">
                            <div class="nn-card-set">
                                <div class="s-card-icon"><img src="images/icons/branding.svg" alt="service"
                                                              class="img-fluid"/></div>
                                <h4>Social Media Marketing</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".4s">
                        <div class="s-block up-hor ovr-base">
                            <div class="nn-card-set">
                                <div class="s-card-icon"><img src="images/icons/development.svg" alt="service"
                                                              class="img-fluid"/></div>
                                <h4>Branding & Identity</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".6s">
                        <div class="s-block up-hor ovr-base">
                            <div class="nn-card-set">
                                <div class="s-card-icon"><img src="images/icons/app.svg" alt="service"
                                                              class="img-fluid"/></div>
                                <h4>Performance Marketing</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".8s">
                        <div class="s-block up-hor ovr-base">
                            <div class="nn-card-set">
                                <div class="s-card-icon"><img src="images/icons/marketing.svg" alt="service"
                                                              class="img-fluid"/></div>
                                <h4>Instagram Growth</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay="1s">
                        <div class="s-block up-hor ovr-base">
                            <div class="nn-card-set">
                                <div class="s-card-icon"><img src="images/icons/marketing.svg" alt="service"
                                                              class="img-fluid"/></div>
                                <h4>Online Branding</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay="1.2s">
                        <div class="s-block up-hor ovr-base">
                            <div class="nn-card-set">
                                <div class="s-card-icon"><img src="images/icons/marketing.svg" alt="service"
                                                              class="img-fluid"/></div>
                                <h4>Video Marketing</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="-cta-btn mt70">
                    <div class="free-cta-title v-center wow zoomInDown" data-wow-delay="1s">
                        <p>Want to <span>kick start</span> your project right now?</p>
                        <a href="#" class="btn-main bg-btn4 lnk"> Request a proposal<i
                                class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                    </div>
                </div>
            </div>
        </section>
        <!--End Service-->
        <!--Start statistics-->
        <div class="dg-statistics-section dg-bg--1 pb130 pt130 tilt3d">
            <div class="container">
                <div class="row justify-content-center t-ctr">
                    <div class="col-lg-4 col-sm-6">
                        <div class="statistics">
                            <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img dg-bg2">
                                <img src="images/icons/startup-w.svg" alt="years" class="img-fluid"/>
                            </div>
                            <div class="statnumb">
                                <span class="counter">15</span><span>+</span>
                                <p>Year In Business</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="statistics">
                            <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img dg-bg2">
                                <img src="images/icons/team-w.svg" alt="team" class="img-fluid"/>
                            </div>
                            <div class="statnumb">
                                <span class="counter">80</span><span>+</span>
                                <p>Team Members</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row small t-ctr">
                    <div class="col-lg-3 col-sm-6">
                        <div class="statistics">
                            <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img dg-bg2">
                                <img src="images/icons/deal-w.svg" alt="happy" class="img-fluid"/>
                            </div>
                            <div class="statnumb">
                                <span class="counter">450</span>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="statistics">
                            <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img dg-bg2">
                                <img src="images/icons/computers-w.svg" alt="project" class="img-fluid"/>
                            </div>
                            <div class="statnumb counter-number">
                                <span class="counter">48</span><span>k</span>
                                <p>Projects Done</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="statistics">
                            <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img dg-bg2">
                                <img src="images/icons/worker-w.svg" alt="work" class="img-fluid"/>
                            </div>
                            <div class="statnumb">
                                <span class="counter">95</span><span>k</span>
                                <p>Hours Worked</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="statistics mb0">
                            <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img dg-bg2">
                                <img src="images/icons/customer-service-w.svg" alt="support" class="img-fluid"/>
                            </div>
                            <div class="statnumb">
                                <span class="counter">24</span><span>/</span><span class="counter">7</span>
                                <p>Support Available</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End statistics-->
        <!--Start Portfolio-->
        <section class="dg-portfolio-section dg-bg--2 pb130 pt130" id="work">
            <div class="container">
                <div class="row justify-content-center ">
                    <div class="col-lg-8">
                        <div class="common-heading-2">
                            <span class="text-effect-1">Our Work</span>
                            <h2 class="mb0">Our Latest Creative Work</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 single-card-item wow fadeInUp" data-wow-delay=".2s">
                        <div class="isotope_item h-scl-">
                            <div class="item-image h-scl-base">
                                <a href="#"><img src="images/portfolio/image-1.jpg" alt="portfolio" class="img-fluid"/>
                                </a>
                            </div>
                            <div class="item-info">
                                <h4><a href="#">Creative App</a></h4>
                                <p>ios, design</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 single-card-item  wow fadeInUp" data-wow-delay=".4s">
                        <div class="isotope_item h-scl-">
                            <div class="item-image h-scl-base">
                                <a href="#"><img src="images/portfolio/image-2.jpg" alt="image" class="img-fluid"/> </a>
                            </div>
                            <div class="item-info">
                                <h4><a href="#">Brochure Design</a></h4>
                                <p>Graphic, Print</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 single-card-item  wow fadeInUp" data-wow-delay=".6s">
                        <div class="isotope_item h-scl-">
                            <div class="item-image h-scl-base">
                                <a href="#"><img src="images/portfolio/image-3.jpg" alt="image" class="img-fluid"/> </a>
                            </div>
                            <div class="item-info">
                                <h4><a href="#">Ecommerce Development</a></h4>
                                <p>Web Application</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 single-card-item  wow fadeInUp" data-wow-delay=".8s">
                        <div class="isotope_item h-scl-">
                            <div class="item-image h-scl-base">
                                <a href="#"><img src="images/portfolio/image-4.jpg" alt="image" class="img-fluid"/> </a>
                            </div>
                            <div class="item-info">
                                <h4><a href="#">Icon Pack</a></h4>
                                <p>Android & iOs, Design</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 single-card-item  wow fadeInUp" data-wow-delay="1s">
                        <div class="isotope_item h-scl-">
                            <div class="item-image h-scl-base">
                                <a href="#"><img src="images/portfolio/image-5.jpg" alt="image" class="img-fluid"/> </a>
                            </div>
                            <div class="item-info">
                                <h4><a href="#">Smart Watch</a></h4>
                                <p>UI/UX Design</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 single-card-item  wow fadeInUp" data-wow-delay="1.2s">
                        <div class="isotope_item h-scl-">
                            <div class="item-image h-scl-base">
                                <a href="#"><img src="images/portfolio/image-6.jpg" alt="image" class="img-fluid"/> </a>
                            </div>
                            <div class="item-info">
                                <h4><a href="#">Brochure Design</a></h4>
                                <p>Graphic, Print</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Portfolio-->
        <!--Start Clients-->
        <section class="dg-clients-section dg-bg--1 pb130 pt130" id="clients">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="common-heading-2">
                            <span class="text-effect-1">Our happy customers</span>
                            <h2 class="mb30">Some of Our Partners</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="opl">
                            <div class="client-logoset">
                                <ul class="row text-center clearfix">
                                    <li class="col-lg-2 col-md-3 col-sm-4 col-6 mt30 wow fadeIn" data-wow-delay=".2s">
                                        <div class="brand-logo"><img src="images/client/logo1.png" alt="clients"
                                                                     class="img-fluid"></div>
                                        <p>Shutter, USA</p>
                                    </li>
                                    <li class="col-lg-2 col-md-3 col-sm-4 col-6 mt30 wow fadeIn" data-wow-delay=".4s">
                                        <div class="brand-logo"><img src="images/client/logo2.png" alt="clients"
                                                                     class="img-fluid"></div>
                                        <p>Hipster, USA</p>
                                    </li>
                                    <li class="col-lg-2 col-md-3 col-sm-4 col-6 mt30 wow fadeIn" data-wow-delay=".6s">
                                        <div class="brand-logo"><img src="images/client/logo3.png" alt="clients"
                                                                     class="img-fluid"></div>
                                        <p>Happy, USA</p>
                                    </li>
                                    <li class="col-lg-2 col-md-3 col-sm-4 col-6 mt30 wow fadeIn" data-wow-delay=".8s">
                                        <div class="brand-logo"><img src="images/client/logo4.png" alt="clients"
                                                                     class="img-fluid"></div>
                                        <p>Opera Tours, USA</p>
                                    </li>
                                    <li class="col-lg-2 col-md-3 col-sm-4 col-6 mt30 wow fadeIn" data-wow-delay="1s">
                                        <div class="brand-logo"><img src="images/client/logo5.png" alt="clients"
                                                                     class="img-fluid"></div>
                                        <p>Royale Stone, UK</p>
                                    </li>
                                    <li class="col-lg-2 col-md-3 col-sm-4 col-6 mt30 wow fadeIn" data-wow-delay="1.2s">
                                        <div class="brand-logo"><img src="images/client/logo6.png" alt="clients"
                                                                     class="img-fluid"></div>
                                        <p>QTP, Australia</p>
                                    </li>
                                    <li class="col-lg-2 col-md-3 col-sm-4 col-6 mt30 wow fadeIn" data-wow-delay="1.4s">
                                        <div class="brand-logo"><img src="images/client/logo7.png" alt="clients"
                                                                     class="img-fluid"></div>
                                        <p>PAPA, Malaysia</p>
                                    </li>
                                    <li class="col-lg-2 col-md-3 col-sm-4 col-6 mt30 wow fadeIn" data-wow-delay="1.6s">
                                        <div class="brand-logo"><img src="images/client/logo8.png" alt="clients"
                                                                     class="img-fluid"></div>
                                        <p>Coffee, Australia</p>
                                    </li>
                                    <li class="col-lg-2 col-md-3 col-sm-4 col-6 mt30 wow fadeIn" data-wow-delay="1.8s">
                                        <div class="brand-logo"><img src="images/client/logo9.png" alt="clients"
                                                                     class="img-fluid"></div>
                                        <p>Bakery, India</p>
                                    </li>
                                    <li class="col-lg-2 col-md-3 col-sm-4 col-6 mt30 wow fadeIn" data-wow-delay="2s">
                                        <div class="brand-logo"><img src="images/client/logo10.png" alt="clients"
                                                                     class="img-fluid"></div>
                                        <p>Iconico, India</p>
                                    </li>
                                    <li class="col-lg-2 col-md-3 col-sm-4 col-6 mt30 wow fadeIn" data-wow-delay="2.2s">
                                        <div class="brand-logo"><img src="images/client/logo11.png" alt="clients"
                                                                     class="img-fluid"></div>
                                        <p>Tom N Jerry, UK</p>
                                    </li>
                                    <li class="col-lg-2 col-md-3 col-sm-4 col-6 mt30 wow fadeIn" data-wow-delay="2.4s">
                                        <div class="brand-logo"><img src="images/client/logo12.png" alt="clients"
                                                                     class="img-fluid"></div>
                                        <p>Arch, India</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="-cta-btn mt80">
                        <div class="free-cta-title v-center wow zoomInDown" data-wow-delay="1.2s">
                            <p>We <span>Promise.</span> We <span>Deliver.</span></p>
                            <a href="#" class="btn-main bg-btn4 lnk">Request a proposal<i
                                    class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Clients-->
        <!--Start Testinomial-->
        <section class="dg-testinomial-section dg-bg--2 pb130 pt130">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="common-heading-2">
                            <span class="text-effect-1">Our happy customers</span>
                            <h2 class="mb30">Some of Our Partners</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt60">
                    <div class="col-lg-6">
                        <div class="video-testimonial">
                            <div class="video-review hover-scale mr15">
                                <a class="video-link"
                                   href="https://www.youtube.com/watch?v=SZEflIVnhH8?autoplay=1&amp;rel=0">
                                    <img src="images/client/client-pic.jpg" alt="client" class="img-fluid">
                                    <div class="review-vid-details">
                                        <div class="-vid-ico"><span class="triangle-play2"></span></div>
                                        <p>Cina Cleaves</p>
                                    </div>
                                </a>
                            </div>
                            <div class="video-review hover-scale">
                                <a class="video-link"
                                   href="https://www.youtube.com/watch?v=SZEflIVnhH8?autoplay=1&amp;rel=0">
                                    <img src="images/client/client-pic-a.jpg" alt="client" class="img-fluid">
                                    <div class="review-vid-details">
                                        <div class="-vid-ico"><span class="triangle-play2"></span></div>
                                        <p>Jokvch Marlin</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="owl-carousel testimonial-card-a pl25">
                            <div class="testimonial-card">
                                <div class="client-thumbs">
                                    <div class="media v-center ">
                                        <div class="user-image bdr-radius"><img src="images/user-thumb/girl.jpg"
                                                                                alt="girl" class="img-fluid"/></div>
                                        <div class="media-body user-info v-center">
                                            <h5>Mike Smith</h5>
                                            <p>Business Owner, <small>Sydney, Australia</small></p>
                                        </div>
                                        <i class="fas fa-quote-right quote-css"></i>
                                    </div>
                                </div>
                                <div class="t-text mt30">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen
                                        book.</p>
                                </div>
                                <div class="link-reviewrr"><a href="#">Read Project Case Study <i
                                            class="fas fa-chevron-right fa-icon"></i></a></div>
                            </div>
                            <div class="testimonial-card">
                                <div class="client-thumbs">
                                    <div class="media v-center ">
                                        <div class="user-image bdr-radius"><img src="images/user-thumb/girl.jpg"
                                                                                alt="girl" class="img-fluid"/></div>
                                        <div class="media-body user-info v-center">
                                            <h5>Mike Smith</h5>
                                            <p>Business Owner, <small>Sydney, Australia</small></p>
                                        </div>
                                        <i class="fas fa-quote-right quote-css"></i>
                                    </div>
                                </div>
                                <div class="t-text mt30">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen
                                        book.</p>
                                </div>
                                <div class="link-reviewrr"><a href="#">Read Project Case Study <i
                                            class="fas fa-chevron-right fa-icon"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Testinomial-->
        <!--Start Blogs-->
        <section class="blogs-section dg-bg--1 -dg-blog pb130 pt130" id="blogs">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="common-heading-2">
                            <span class="text-effect-1">what's going on</span>
                            <h2 class="mb30">Latest Stories</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 mt30">
                        <div class="single-blog-post- up-hor">
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
                    <div class="col-lg-4 mt30">
                        <div class="single-blog-post- up-hor">
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
                    <div class="col-lg-4 mt30">
                        <div class="single-blog-post- up-hor">
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
        <!--Start CTA-->
        <section class="-cta-section dg-bg--2 dg-cta-sec pb130 pt130">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="common-heading-2">
                            <span class="text-effect-1">LET'S WORK TOGETHER</span>
                            <h2>Let’s Create Big Stories Together</h2>
                            <p class="mt20">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below
                                for those.</p>
                            <a href="#" class="btn-main bg-btn4 lnk mt40">Request a proposal<i
                                    class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End CTA-->
    </main>
    @include('includes.graphic-studio.footer')
@endsection

