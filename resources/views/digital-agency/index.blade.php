@extends('layouts.base')
@section('title', 'Digital Agency')
@section('content')
    @include('includes.digital-agency.header')
    <main>
        <!--Start Hero-->
        <section class="hero-card-web bg-gradient12 shape-bg3" id="home">
            <div class="hero-main-rp container-fluid">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="hero-heading-sec">
                            <h2 class="wow fadeIn" data-wow-delay="0.3s"><span>Web.</span> <span>Mobile.</span> <span>Graphic.</span>
                                <span>Marketing.</span></h2>
                            <p class="wow fadeIn" data-wow-delay="0.6s">Website and App development solution for
                                transforming and innovating businesses.</p>
                            <a href="#" class="btn-main bg-btn lnk wow fadeIn" data-wow-delay="0.8s"
                               data-bs-toggle="modal" data-bs-target="#menu-popup">Contact Us <i
                                    class="fas fa-chevron-right fa-ani"></i><span class="circle"></span></a>
                            <div class="awards-block-tt  wow fadeIn" data-wow-delay="1s"><img
                                    src="images/hero/awards-logo.png" alt="awards-logo" class="img-fluid"/></div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="hero-content-sec wow fadeIn" data-wow-delay="0.8s">
                            <div class="video-intro-pp"><a class="video-link play-video"
                                                           href="https://www.youtube.com/watch?v=SZEflIVnhH8?autoplay=1&amp;rel=0"><span
                                        class="triangle-play"></span></a></div>
                            <div class="title-hero-oth"><p>We design digital solutions
                                    <span>for brands and companies</span></p></div>
                        </div>
                        <div class="hero-right-scmm">
                            <div class="hero-service-cards wow fadeInRight" data-wow-duration="2s">
                                <div class="owl-carousel service-card-prb">
                                    <div class="service-slide card-bg-a" data-tilt data-tilt-max="5"
                                         data-tilt-speed="1000"><a href="#">
                                            <div class="service-card-hh">
                                                <div class="image-sr-mm">
                                                    <img alt="custom-sport" src="images/service/vr.png">
                                                </div>
                                                <div class="title-serv-c"><span>VR</span> Solution</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="service-slide card-bg-b" data-tilt data-tilt-max="5"
                                         data-tilt-speed="1000"><a href="#">
                                            <div class="service-card-hh">
                                                <div class="image-sr-mm">
                                                    <img alt="custom-sport" src="images/service/app-develop.png">
                                                </div>
                                                <div class="title-serv-c"><span>Custom</span> App Solution</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="service-slide card-bg-c" data-tilt data-tilt-max="5"
                                         data-tilt-speed="1000"><a href="#">
                                            <div class="service-card-hh">
                                                <div class="image-sr-mm">
                                                    <img alt="custom-sport" src="images/service/startup.png">
                                                </div>
                                                <div class="title-serv-c"><span>Startup</span> Solution</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="service-slide card-bg-d" data-tilt data-tilt-max="5"
                                         data-tilt-speed="1000"><a href="#">
                                            <div class="service-card-hh">
                                                <div class="image-sr-mm">
                                                    <img alt="custom-sport" src="images/service/car-rental.png">
                                                </div>
                                                <div class="title-serv-c"><span>Car</span> Rental Solution</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="service-slide card-bg-e" data-tilt data-tilt-max="5"
                                         data-tilt-speed="1000"><a href="#">
                                            <div class="service-card-hh">
                                                <div class="image-sr-mm">
                                                    <img alt="custom-sport" src="images/service/marketing.png">
                                                </div>
                                                <div class="title-serv-c"><span>Marketing</span> Solution</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="service-slide card-bg-f" data-tilt data-tilt-max="5"
                                         data-tilt-speed="1000"><a href="#">
                                            <div class="service-card-hh">
                                                <div class="image-sr-mm">
                                                    <img alt="custom-sport" src="images/service/ewallet.png">
                                                </div>
                                                <div class="title-serv-c"><span>e-Wallet</span> Solution</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Hero-->
        <!--Start About-->
        <section class="about-sec-rpb pad-tb" id="about">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-10">
                        <div class="common-heading">
                            <span>We Are Creative Agency</span>
                            <h1 class="mb30"><span class="text-second">Top-rated</span> Web And Mobile App Development
                                Company</h1>
                            <p>Lorem Ipsum is <span
                                    class="text-radius text-light text-animation bg-b">simply dummy</span> text of the
                                printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                text ever since the 1500s, when an unknown printer took a galley of type and scrambled
                                it to make a type
                                specimen book. <span class="text-bold">Lorem Ipsum</span> is simply dummy text of the
                                printing and typesetting industry. <span class="text-bold">Lorem Ipsum </span> is simply
                                dummy text of the printing and typesetting industry.</p>
                            <h3 class="mt30 mb30">Big Ideas, creative people, new technology.</h3>
                            <p>Lorem Ipsum is <span class="text-bold">simply dummy</span> text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's specimen book. Lorem Ipsum is
                                simply dummy text of the <span class="text-bold">printing</span> and typesetting
                                industry. <span class="text-bold">Lorem Ipsum is simply</span> dummy text of the
                                printing and typesetting industry. is simply dummy text of the printing and typesetting
                                industry. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End About-->
        <!--Start Service-->
        <section class="service-section-prb pad-tb" id="services">
            <div class="container">
                <div class="row upset">
                    <div data-tilt data-tilt-max="5" data-tilt-speed="1000" class="col-lg-6-cus wow fadeInUp"
                         data-wow-delay=".2s">
                        <div class="service-sec-brp srvc-bg-nx bg-gradient13 text-w">
                            <h4 class="mb10">INTEGRATED SERVICES</h4>
                            <p>Lorem Ipsum is text of the printing and typesetting industry. Lorem Ipsum has been the
                                industry's standard dummy text ever since the 1500.</p>
                            <a href="javascript:void(0)" class="mt20 link-prb">Learn More <i
                                    class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <div data-tilt data-tilt-max="5" data-tilt-speed="1000" class="col-lg-3-cus wow fadeInUp"
                         data-wow-delay=".4s">
                        <div class="service-sec-list srvc-bg-nx srcl1">
                            <img src="images/icons/development.svg" alt="service">
                            <h5 class="mb10">Web Development</h5>
                            <ul class="-service-list">
                                <li><a href="#">PHP</a></li>
                                <li><a href="#"><strong>.</strong>Net</a></li>
                                <li><a href="#">Java</a></li>
                                <li><a href="#">Joomla</a></li>
                            </ul>
                            <p>Lorem Ipsum is text of the printing and typesetting industry. Lorem Ipsum has been the
                                industry's standard dummy text ever since the 1500.</p>
                        </div>
                    </div>
                    <div data-tilt data-tilt-max="5" data-tilt-speed="1000" class="col-lg-3-cus wow fadeInUp"
                         data-wow-delay=".6s">
                        <div class="service-sec-list srvc-bg-nx srcl2">
                            <img src="images/icons/ecommerce.svg" alt="service">
                            <h5 class="mb10">Ecommerce Development</h5>
                            <ul class="-service-list">
                                <li><a href="#">Magento </a></li>
                                <li><a href="#">WP</a></li>
                                <li><a href="#">Shopify </a></li>
                                <li><a href="#">Joomla</a></li>
                            </ul>
                            <p>Lorem Ipsum is text of the printing and typesetting industry. Lorem Ipsum has been the
                                industry's standard dummy text ever since the 1500.</p>
                        </div>
                    </div>
                    <div data-tilt data-tilt-max="5" data-tilt-speed="1000" class="col-lg-3-cus mt30- wow fadeInUp"
                         data-wow-delay=".8s">
                        <div class="service-sec-list srvc-bg-nx srcl3">
                            <img src="images/icons/app.svg" alt="service">
                            <h5 class="mb10">Mobile App Development</h5>
                            <ul class="-service-list">
                                <li><a href="#">iPhone </a></li>
                                <li><a href="#">Android</a></li>
                                <li><a href="#">Cross Platform </a></li>
                            </ul>
                            <p>Lorem Ipsum is text of the printing and typesetting industry. Lorem Ipsum has been the
                                industry's standard dummy text ever since the 1500.</p>
                        </div>
                    </div>
                    <div data-tilt data-tilt-max="5" data-tilt-speed="1000" class="col-lg-3-cus mt30- wow fadeInUp"
                         data-wow-delay="1s">
                        <div class="service-sec-list srvc-bg-nx srcl4">
                            <img src="images/icons/tech.svg" alt="service">
                            <h5 class="mb10">Trending Technologies</h5>
                            <ul class="-service-list">
                                <li><a href="#">React.JS </a></li>
                                <li><a href="#">Node.JS </a></li>
                                <li><a href="#"> Angular.JS </a></li>
                            </ul>
                            <p>Lorem Ipsum is text of the printing and typesetting industry. Lorem Ipsum has been the
                                industry's standard dummy text ever since the 1500.</p>
                        </div>
                    </div>
                    <div data-tilt data-tilt-max="5" data-tilt-speed="1000" class="col-lg-6-cus mt30- wow fadeInUp"
                         data-wow-delay="1.2s">
                        <div class="service-sec-list srvc-bg-nx srcl5">
                            <img src="images/icons/seo.svg" alt="service">
                            <h5 class="mb10">Digital Marketing</h5>
                            <ul class="-service-list">
                                <li><a href="#">SEO </a></li>
                                <li><a href="#">SMO </a></li>
                                <li><a href="#">PPC </a></li>
                                <li><a href="#">PPC </a></li>
                            </ul>
                            <p>Lorem Ipsum is text of the printing and typesetting industry. Lorem Ipsum has been the
                                industry's standard dummy text ever since the 1500.</p>
                        </div>
                    </div>
                </div>
                <div class="-cta-btn mt70">
                    <div class="free-cta-title v-center zoomInDown wow" data-wow-delay="1.4s">
                        <p>Hire a <span>Dedicated Developer</span></p>
                        <a href="#" class="btn-main bg-btn2 lnk">Hire Now<i
                                class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                    </div>
                </div>
            </div>
        </section>
        <!--End Service-->
        <!--Start statistics-->
        <div class="statistics-section bg-gradient6 pad-tb tilt3d">
            <div class="container">
                <div class="row justify-content-center t-ctr">
                    <div class="col-lg-4 col-sm-6">
                        <div class="statistics">
                            <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
                                <img src="images/icons/startup.svg" alt="years" class="img-fluid"/>
                            </div>
                            <div class="statnumb">
                                <span class="counter">15</span><span>+</span>
                                <p>Year In Business</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="statistics">
                            <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
                                <img src="images/icons/team.svg" alt="team" class="img-fluid"/>
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
                            <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
                                <img src="images/icons/deal.svg" alt="happy" class="img-fluid"/>
                            </div>
                            <div class="statnumb">
                                <span class="counter">450</span>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="statistics">
                            <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
                                <img src="images/icons/computers.svg" alt="project" class="img-fluid"/>
                            </div>
                            <div class="statnumb counter-number">
                                <span class="counter">48</span><span>k</span>
                                <p>Projects Done</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="statistics">
                            <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
                                <img src="images/icons/worker.svg" alt="work" class="img-fluid"/>
                            </div>
                            <div class="statnumb">
                                <span class="counter">95</span><span>k</span>
                                <p>Hours Worked</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="statistics mb0">
                            <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
                                <img src="images/icons/customer-service.svg" alt="support" class="img-fluid"/>
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
        <!--why choose-->
        <section class="why-choos-lg pad-tb deep-dark">
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
                        <div data-tilt data-tilt-max="5" data-tilt-speed="1000"
                             class="single-image bg-shape-dez wow fadeIn" data-wow-duration="2s"><img
                                src="images/about/about-company.jpg" alt="image" class="img-fluid"></div>
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
        <section class="clients-section- bg-gradient15 pad-tb" id="clients">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="common-heading">
                            <span>Our happy customers</span>
                            <h2 class="mb30">Some of our Clients</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="clients-logos text-center col-12">
                            <ul class="row text-center clearfix">
                                <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay=".2s">
                                    <div class="brand-logo"><img src="images/client/clients-1.png" alt="clients"
                                                                 class="img-fluid"></div>
                                    <p>Shutter, USA</p>
                                </li>
                                <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay=".4s">
                                    <div class="brand-logo"><img src="images/client/clients-2.png" alt="clients"
                                                                 class="img-fluid"></div>
                                    <p>Hipster, USA</p>
                                </li>
                                <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay=".6s">
                                    <div class="brand-logo"><img src="images/client/clients-3.png" alt="clients"
                                                                 class="img-fluid"></div>
                                    <p>Happy, USA</p>
                                </li>
                                <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay=".8s">
                                    <div class="brand-logo"><img src="images/client/clients-4.png" alt="clients"
                                                                 class="img-fluid"></div>
                                    <p>Opera Tours, USA</p>
                                </li>
                                <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay="1s">
                                    <div class="brand-logo"><img src="images/client/clients-5.png" alt="clients"
                                                                 class="img-fluid"></div>
                                    <p>Royale Stone, UK</p>
                                </li>
                                <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay="1.2s">
                                    <div class="brand-logo"><img src="images/client/clients-6.png" alt="clients"
                                                                 class="img-fluid"></div>
                                    <p>QTP, Australia</p>
                                </li>
                                <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay="1.4s">
                                    <div class="brand-logo"><img src="images/client/clients-7.png" alt="clients"
                                                                 class="img-fluid"></div>
                                    <p>PAPA, Malaysia</p>
                                </li>
                                <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay="1.6s">
                                    <div class="brand-logo"><img src="images/client/clients-8.png" alt="clients"
                                                                 class="img-fluid"></div>
                                    <p>Coffee, Australia</p>
                                </li>
                                <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay="1.8s">
                                    <div class="brand-logo"><img src="images/client/clients-9.png" alt="clients"
                                                                 class="img-fluid"></div>
                                    <p>Bakery, India</p>
                                </li>
                                <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay="2s">
                                    <div class="brand-logo"><img src="images/client/clients-10.png" alt="clients"
                                                                 class="img-fluid"></div>
                                    <p>Iconico, India</p>
                                </li>
                                <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay="2.2s">
                                    <div class="brand-logo"><img src="images/client/clients-11.png" alt="clients"
                                                                 class="img-fluid"></div>
                                    <p>Tom N Jerry, UK</p>
                                </li>
                                <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay="2.4s">
                                    <div class="brand-logo"><img src="images/client/clients-12.png" alt="clients"
                                                                 class="img-fluid"></div>
                                    <p>Arch, India</p>
                                </li>
                                <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay="2.6s">
                                    <div class="brand-logo"><img src="images/client/clients-13.png" alt="clients"
                                                                 class="img-fluid"></div>
                                    <p>Aro Group, India</p>
                                </li>
                                <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay="2.8s">
                                    <div class="brand-logo"><img src="images/client/clients-14.png" alt="clients"
                                                                 class="img-fluid"></div>
                                    <p>Tom Group, India</p>
                                </li>
                                <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay="3s">
                                    <div class="brand-logo"><img src="images/client/clients-4.png" alt="clients"
                                                                 class="img-fluid"></div>
                                    <p>Premier Pipes, India</p>
                                </li>
                                <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay="3.2s">
                                    <div class="brand-logo"><img src="images/client/clients-1.png" alt="clients"
                                                                 class="img-fluid"></div>
                                    <p>Dynamic, India</p>
                                </li>
                                <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay="3.4s">
                                    <div class="brand-logo"><img src="images/client/clients-7.png" alt="clients"
                                                                 class="img-fluid"></div>
                                    <p>Fns Inc, India</p>
                                </li>
                                <li class="col-lg-2 col-md-3 col-sm-4 col-6 wow fadeIn" data-wow-delay="3.6s">
                                    <div class="brand-logo"><img src="images/client/clients-2.png" alt="clients"
                                                                 class="img-fluid"></div>
                                    <p>RP School, India</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Clients-->
        <!--Start Badges-->
        <section class="badges-section bg-gradient5  pad-tb">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="common-heading w-tdxt">
                            <span>WE MAKE RELATIONSHIPS</span>
                            <h2>Ranked as #1 Top Web & App Development Companies</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-6 wow fadeIn" data-wow-delay=".2s">
                        <div class="badges-content">
                            <img src="images/about/badges-a.png" alt="budges" class="img-fluid">
                            <p>ABC DEF Industry Leader</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6 wow fadeIn" data-wow-delay=".4s">
                        <div class="badges-content">
                            <img src="images/about/badges-b.png" alt="budges" class="img-fluid">
                            <p>Best eCommerce Development Company</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6 wow fadeIn" data-wow-delay=".6s">
                        <div class="badges-content">
                            <img src="images/about/badges-c.png" alt="budges" class="img-fluid">
                            <p>ABC DEF High Performer Winner</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6 wow fadeIn" data-wow-delay=".8s">
                        <div class="badges-content">
                            <img src="images/about/badges-d.png" alt="budges" class="img-fluid">
                            <p>Top App Developer 2019-20</p>
                        </div>
                    </div>
                </div>
                <div class="-cta-btn mt70">
                    <div class="free-cta-title v-center wow fadeInUp" data-wow-delay="1s">
                        <p>We <span>Promise.</span> We <span>Deliver.</span></p>
                        <a href="#" class="btn-main bg-btn2 lnk">Let's Work Together<i
                                class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                    </div>
                </div>
            </div>
        </section>
        <!--End Badges-->
        <!--Start work-category-->
        <section class="work-category pad-tb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 v-center">
                        <div class="common-heading text-l">
                            <span>Industries we work for</span>
                            <h2>Helping Businesses in All Domains</h2>
                            <p>Successfully delivered digital products Lorem Ipsum is simply dummy text of the printing
                                and typesetting industry.</p>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="work-card-set">
                            <div class="icon-set wow fadeIn" data-wow-delay=".2s">
                                <div class="work-card cd1">
                                    <div class="icon-bg"><img src="images/icons/icon-1.png" alt="Industries"/></div>
                                    <p>Social Networking</p>
                                </div>
                            </div>
                            <div class="icon-set wow fadeIn" data-wow-delay=".4s">
                                <div class="work-card cd2">
                                    <div class="icon-bg"><img src="images/icons/icon-2.png" alt="Industries"/></div>
                                    <p>Digital Marketing</p>
                                </div>
                            </div>
                            <div class="icon-set wow fadeIn" data-wow-delay=".6s">
                                <div class="work-card cd3">
                                    <div class="icon-bg"><img src="images/icons/icon-3.png" alt="Industries"/></div>
                                    <p>Ecommerce Development</p>
                                </div>
                            </div>
                            <div class="icon-set wow fadeIn" data-wow-delay=".8s">
                                <div class="work-card cd4">
                                    <div class="icon-bg"><img src="images/icons/icon-4.png" alt="Industries"/></div>
                                    <p>Video Service</p>
                                </div>
                            </div>
                            <div class="icon-set wow fadeIn" data-wow-delay="1s">
                                <div class="work-card cd5">
                                    <div class="icon-bg"><img src="images/icons/icon-5.png" alt="Industries"/></div>
                                    <p>Banking Service</p>
                                </div>
                            </div>
                            <div class="icon-set wow fadeIn" data-wow-delay="1.2s">
                                <div class="work-card cd6">
                                    <div class="icon-bg"><img src="images/icons/icon-6.png" alt="Industries"/></div>
                                    <p>Enterprise Service</p>
                                </div>
                            </div>
                            <div class="icon-set wow fadeIn" data-wow-delay="1.4s">
                                <div class="work-card cd7">
                                    <div class="icon-bg"><img src="images/icons/icon-7.png" alt="Industries"/></div>
                                    <p>Education Service</p>
                                </div>
                            </div>
                            <div class="icon-set wow fadeIn" data-wow-delay="1.6s">
                                <div class="work-card cd8">
                                    <div class="icon-bg"><img src="images/icons/icon-8.png" alt="Industries"/></div>
                                    <p>Tour and Travels</p>
                                </div>
                            </div>
                            <div class="icon-set wow fadeIn" data-wow-delay="1.8s">
                                <div class="work-card cd9">
                                    <div class="icon-bg"><img src="images/icons/icon-9.png" alt="Industries"/></div>
                                    <p>Health Service</p>
                                </div>
                            </div>
                            <div class="icon-set wow fadeIn" data-wow-delay="2s">
                                <div class="work-card cd10">
                                    <div class="icon-bg"><img src="images/icons/icon-10.png" alt="Industries"/></div>
                                    <p>Event & Ticket</p>
                                </div>
                            </div>
                            <div class="icon-set wow fadeIn" data-wow-delay="2.2s">
                                <div class="work-card cd11">
                                    <div class="icon-bg"><img src="images/icons/icon-11.png" alt="Industries"/></div>
                                    <p>Restaurant Service</p>
                                </div>
                            </div>
                            <div class="icon-set wow fadeIn" data-wow-delay="2.4s">
                                <div class="work-card cd12">
                                    <div class="icon-bg"><img src="images/icons/icon-12.png" alt="Industries"/></div>
                                    <p>Business Consultant</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End  work-category-->
        <!--Start Testinomial-->
        <section class="testinomial-section bg-none pad-tb" id="review">
            <div class="container">
                <div class="row justify-content-center ">
                    <div class="col-lg-8">
                        <div class="common-heading">
                            <span>What our clients say about Niwax.</span>
                            <h2>Over 1200+ Satisfied Clients and Growing</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="video-testimonials owl-carousel">
                            <div class="video-review" data-tilt data-tilt-max="5" data-tilt-speed="1000">
                                <a class="video-link"
                                   href="https://www.youtube.com/watch?v=SZEflIVnhH8?autoplay=1&amp;rel=0"><img
                                        src="images/client/client-pic.jpg" alt="client" class="img-fluid">
                                    <div class="review-vid-details">
                                        <div class="-vid-ico"><span class="triangle-play2"></span></div>
                                        <p>Cina Cleaves</p>
                                    </div>
                                </a>
                            </div>
                            <div class="video-review" data-tilt data-tilt-max="5" data-tilt-speed="1000">
                                <a class="video-link"
                                   href="https://www.youtube.com/watch?v=SZEflIVnhH8?autoplay=1&amp;rel=0"><img
                                        src="images/client/client-pic-a.jpg" alt="client" class="img-fluid">
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
                                <div class="t-text">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen
                                        book.</p>
                                </div>
                                <div class="client-thumbs mt30">
                                    <div class="media v-center">
                                        <div class="user-image bdr-radius"><img src="images/user-thumb/girl.jpg"
                                                                                alt="girl" class="img-fluid"/></div>
                                        <div class="media-body user-info v-center">
                                            <h5>Mike Smith</h5>
                                            <p>Business Owner, <small>Sydney, Australia</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-card">
                                <div class="t-text">
                                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                        when an unknown printer took a galley of type and scrambled it to make a type
                                        specimen book.</p>
                                </div>
                                <div class="client-thumbs mt30">
                                    <div class="media v-center">
                                        <div class="user-image bdr-radius"><img src="images/user-thumb/girl.jpg"
                                                                                alt="girl" class="img-fluid"/></div>
                                        <div class="media-body user-info">
                                            <h5>Fred Chener</h5>
                                            <p>CEO of Aramxx, <small>Ohio, US State</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-card">
                                <div class="t-text">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen
                                        book.</p>
                                </div>
                                <div class="client-thumbs mt30">
                                    <div class="media v-center">
                                        <div class="user-image bdr-radius"><img src="images/user-thumb/girl.jpg"
                                                                                alt="girl" class="img-fluid"/></div>
                                        <div class="media-body user-info">
                                            <h5>Mathilda Burns</h5>
                                            <p>Backery Shop, <small>Tronto, Italy</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="review-ref mt100">
                            <div class="review-title-ref">
                                <h4>Read More Reviews</h4>
                                <p>Read our reviews from all over world.</p>
                            </div>
                            <div class="review-icons">
                                <a href="#" target="blank" class="wow fadeIn" data-wow-delay=".2s"><img
                                        src="images/about/reviews-icon-1.png" alt="review" class="img-fluid"></a>
                                <a href="#" target="blank" class="wow fadeIn" data-wow-delay=".4s"><img
                                        src="images/about/reviews-icon-2.png" alt="review" class="img-fluid"></a>
                                <a href="#" target="blank" class="wow fadeIn" data-wow-delay=".6s"><img
                                        src="images/about/reviews-icon-3.png" alt="review" class="img-fluid"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Testinomial-->
        <!--Start CTA-->
        <section class="cta-area pad-tb">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="common-heading">
                            <span>Let's work together</span>
                            <h2>We Love to Listen to Your Requirements</h2>
                            <a href="javascript:void(0)" class="btn-outline">Estimate Project <i
                                    class="fas fa-chevron-right fa-icon"></i></a>
                            <p class="cta-call">Or call us now <a href="tel:+1234567890"><i
                                        class="fas fa-phone-alt"></i> (123) 456 7890</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape shape-a1"><img src="images/shape/shape-3.svg" alt="shape"></div>
            <div class="shape shape-a2"><img src="images/shape/shape-4.svg" alt="shape"></div>
            <div class="shape shape-a3"><img src="images/shape/shape-13.svg" alt="shape"></div>
            <div class="shape shape-a4"><img src="images/shape/shape-11.svg" alt="shape"></div>
        </section>
        <!--End CTA-->
        <!--Start Location-->
        <section class="our-office pad-tb">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="common-heading">
                            <span>Our Locations</span>
                            <h2>Our Office</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center upset shape-numm">
                    <div class="col-lg-4 col-sm-6 shape-loc wow fadeInUp" data-wow-delay=".2s">
                        <div class="office-card">
                            <div class="skyline-img" data-tilt data-tilt-max="4" data-tilt-speed="1000">
                                <img src="images/location/newyork.png" alt="New York" class="img-fluid"/>
                            </div>
                            <div class="office-text">
                                <h4>New York</h4>
                                <p>603 FA Forest Avenue, New York, USA 10021</p>
                                <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i
                                        class="fas fa-map-marker-alt"></i></a>
                                <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i
                                        class="fas fa-phone-alt"></i></a>
                                <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i
                                        class="fas fa-envelope"></i></a>
                                <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i
                                        class="fab fa-skype"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 shape-loc wow fadeInUp" data-wow-delay=".5s">
                        <div class="office-card">
                            <div class="skyline-img" data-tilt data-tilt-max="4" data-tilt-speed="1000">
                                <img src="images/location/sydeny.png" alt="sydney" class="img-fluid"/>
                            </div>
                            <div class="office-text">
                                <h4>Sydney</h4>
                                <p>2449 Columbia Boulevard, Sydney, 10021</p>
                                <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i
                                        class="fas fa-map-marker-alt"></i></a>
                                <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i
                                        class="fas fa-phone-alt"></i></a>
                                <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i
                                        class="fas fa-envelope"></i></a>
                                <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i
                                        class="fab fa-skype"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 shape-loc wow fadeInUp" data-wow-delay=".8s">
                        <div class="office-card mb0">
                            <div class="skyline-img" data-tilt data-tilt-max="4" data-tilt-speed="1000">
                                <img src="images/location/rome.png" alt="rome" class="img-fluid"/>
                            </div>
                            <div class="office-text">
                                <h4>Rome</h4>
                                <p>9988 Piazzetta Scalette Rubiani 99, Rome, 84090</p>
                                <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i
                                        class="fas fa-map-marker-alt"></i></a>
                                <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i
                                        class="fas fa-phone-alt"></i></a>
                                <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i
                                        class="fas fa-envelope"></i></a>
                                <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i
                                        class="fab fa-skype"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Location-->
    </main>
    @include('includes.digital-agency.footer')
@endsection
