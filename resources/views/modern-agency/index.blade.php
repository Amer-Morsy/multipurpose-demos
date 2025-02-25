@extends('layouts.base', ['bodyClass'=>'dg-bg--1 dark-main active-dark'])
@section('title', 'modern Agency')
@section('content')
    @include('includes.modern-agency.header')
    <main>
        <!--Start Hero-->
        <section class="hero-section hero-creative-agenc2" id="home">
            <div class="text-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 v-center">
                            <div class="header-heading">
                                <h1 class="wow fadeInUp" data-wow-delay=".2s">Creative Digital Agency <span
                                        class="text-primary">Focused</span> on <span class="text-primary">Growing</span>
                                    Brands Online</h1>
                                <p class="wow fadeInUp" data-wow-delay=".4s">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Suspendisse faucibus, risus sit amet auctor sodales, justo erat
                                    tempor eros.</p>
                                <a href="#" class="btn-main bg-btn7 lnk wow fadeInUp" data-wow-delay=".6s">GET STARTED<i
                                        class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                            </div>
                        </div>
                        <div class="col-lg-6 v-center">
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
                    </div>
                </div>
            </div>
        </section>
        <!--End Hero-->
        <!--Start About-->
        <section class="about-dg-ca2 posrtl pb80 pt80" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="common-heading text-l">
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
                    <div class="col-lg-6 v-center h-scl-">
                        <div class="img-block-ca2 text-center h-scl-base m-mt30">
                            <img src="images/about/digital-agency-dg.jpg" alt="about" class="abt-ca2"/>
                            <div class="shape-dg-1 dg-hero-shp1"><img src="images/shape/dots-dg.png" alt="shape"
                                                                      class="img-fluid dot-sp-ca2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End About-->
        <!--Start Service-->
        <section class="dg-service2 posrtl pb80 pt80" id="services">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="common-heading text-center">
                            <h2 class="mb20">We help Brands with</h2>
                            <p class="mb30">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                </div>
                <div class="row upset ovr-bg2 bd-hor">
                    <div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".2s">
                        <div class="s-block up-hor bd-hor-base">
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
                        <div class="s-block up-hor bd-hor-base">
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
                        <div class="s-block up-hor bd-hor-base">
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
                        <div class="s-block up-hor bd-hor-base">
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
                        <div class="s-block up-hor bd-hor-base">
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
                        <div class="s-block up-hor bd-hor-base">
                            <div class="nn-card-set">
                                <div class="s-card-icon"><img src="images/icons/marketing.svg" alt="service"
                                                              class="img-fluid"/></div>
                                <h4>Video Marketing</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="-cta-btn mt70">
                        <div class="free-cta-title v-center wow zoomInDown" data-wow-delay="1s">
                            <p>Want to <span>kick start</span> your project right now?</p>
                            <a href="#" class="btn-main bg-btn7 lnk"> Request a proposal<i
                                    class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Service-->
        <!--Start Portfolio-->
        <section class="dg-portfolio-section pb80 pt80" id="work">
            <div class="container">
                <div class="row justify-content-center ">
                    <div class="col-lg-8">
                        <div class="common-heading">
                            <h2 class="mb20">Our Latest Creative Work</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is
                                simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt60">
                    <div class="col-lg-12 col-sm-12">
                        <div class="porto-slide owl-carousel">
                            <div class="div-portfolio- row no-gutters">
                                <div class="div-item-image col-lg-6 text-center v-center">
                                    <a href="#"><img src="images/portfolio/image-1.jpg" alt="portfolio"
                                                     class="img-fluid"/> </a>
                                </div>
                                <div class="div-item-info col-lg-6 v-center">
                                    <h3>Creative Android App</h3>
                                    <div class="mt20"><p class="itm-tag">ios, design</p></div>
                                    <p class="mt20">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry.</p>
                                    <a href="#" class="btn-main bg-btn4 lnk mt30">View Case Study<i
                                            class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                                </div>
                            </div>
                            <div class="div-portfolio- row no-gutters">
                                <div class="div-item-image col-lg-6 text-center v-center">
                                    <a href="#"><img src="images/portfolio/image-2.jpg" alt="portfolio"
                                                     class="img-fluid"/> </a>
                                </div>
                                <div class="div-item-info col-lg-6 v-center">
                                    <h3>Real Estate Brochure Design</h3>
                                    <div class="mt20"><p class="itm-tag">ios, design</p></div>
                                    <p class="mt20">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry.</p>
                                    <a href="#" class="btn-main bg-btn4 lnk mt30">View Case Study<i
                                            class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Portfolio-->
        <!--Start Clients-->
        <section class="dg-clients-section-ca2  pb80 pt80">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="common-heading">
                            <h2 class="mb20">Amazing Clients</h2>
                            <p class="mb30">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
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
                        <a href="#" class="btn-main bg-btn7 lnk">Request a proposal<i
                                class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                    </div>
                </div>
            </div>
        </section>
        <!--End Clients-->
        <!--Start Team-->
        <section class="dg-testinomial-section  pb80 pt80" id="team">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="common-heading">
                            <h2 class="mb20">Our Team</h2>
                            <p class="mb30">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                </div>
                <div class="single-slide owl-carousel mt60">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-4">
                            <div class="image-block upset h-scl-">
                                <div class="image-div h-scl-base"><img src="images/team/team-single.jpg" alt="team"
                                                                       class="img-fluid"/></div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5">
                            <div class="full-image-card mt0">
                                <div class="info-text-block">
                                    <h3><a href="#">Anna Rexia</a></h3>
                                    <p>Company CTO</p>
                                    <div class="social-media-profile">
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-instagram"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-dribbble"></i></a>
                                    </div>
                                </div>
                                <div class="otherinfo">
                                    <p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-4">
                            <div class="image-block upset">
                                <div class="image-div"><a href="#"><img src="images/team/team-single.jpg" alt="team"
                                                                        class="img-fluid"/></a></div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5">
                            <div class="full-image-card mt0">
                                <div class="info-text-block">
                                    <h3><a href="#">Anna Rexia</a></h3>
                                    <p>Company CTO</p>
                                    <div class="social-media-profile">
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-instagram"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-dribbble"></i></a>
                                    </div>
                                </div>
                                <div class="otherinfo">
                                    <p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Team-->
        <!--start photo gallery-->
        <div class="photosets- pb80 pt50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 mt30 h-scl-">
                        <div class="img-ca2set h-scl-base"><img src="images/about/office-1.jpg" alt="companyname"
                                                                class="img-fluid"></div>
                    </div>
                    <div class="col-lg-7 mt30 h-scl-">
                        <div class="img-ca2set h-scl-base"><img src="images/about/office-2.jpg" alt="companyname"
                                                                class="img-fluid"></div>
                    </div>
                    <div class="col-lg-7 mt30 h-scl-">
                        <div class="img-ca2set h-scl-base"><img src="images/about/office-3.jpg" alt="companyname"
                                                                class="img-fluid"></div>
                    </div>
                    <div class="col-lg-5 mt30 h-scl-">
                        <div class="img-ca2set h-scl-base"><img src="images/about/office-4.jpg" alt="companyname"
                                                                class="img-fluid"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--End photo gallery-->
        <!--Start Testinomial-->
        <section class="dg-testinomial-section pb80 pt80">
            <div class="container">
                <div class="row mt60">
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
        <section class="blogs-section pb80 pt80" id="blogs">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="common-heading">
                            <h2 class="mb20">Latest Stories</h2>
                            <p class="mb30">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 mt30">
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
                    <div class="col-lg-4 mt30">
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
                    <div class="col-lg-4 mt30">
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
        <div class="cta-sec-bhv pb80 pt80">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-7">
                        <div class="email-subs">
                            <h3>Get New Insights Weekly</h3>
                            <p>News letter dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt. Enter your email</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt40">
                    <div class="col-lg-4 v-center">
                        <div class="email-subs-form">
                            <input type="text" placeholder="Name" name="name">
                        </div>
                    </div>
                    <div class="col-lg-5 v-center">
                        <div class="email-subs-form">
                            <div class="form-cta">
                                <input type="email" placeholder="Email Address" name="emails">
                                <button type="submit" name="submit" class="lnk btn-main bg-btn7">Subscribe <i
                                        class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    @include('includes.modern-agency.footer')
@endsection
