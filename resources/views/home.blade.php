@extends('layouts.base')

@section('content')

@section('page-style')
    <link href="css/demo-css.css" rel="stylesheet">
@endsection

<!--Start Demo-->
<section class="portfolio-section- pad-tb dark-bg3" id="demo">
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-lg-8">
                <div class="common-heading">
                    <h2 class="mb0">Multipurpose Creative Demos</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-lg-4 col-md-6 col-12 mt60">
                <div class="isotope_item up-hor">
                    <div class="item-image">
                        <a href="{{route('agency')}}" target="_blank"><img src="img/digital-agency-v2.jpg" alt="image"
                                                                           class="img-fluid"> </a>
                    </div>
                    <div class="item-info">
                        <h4><a href="{{route('agency')}}" target="_blank">Agency</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mt60">
                <div class="isotope_item up-hor">
                    <div class="item-image">
                        <a href="{{route('app-development')}}" target="_blank"><img src="img/app-development.jpg"
                                                                                    alt="image"
                                                                                    class="img-fluid"> </a>
                    </div>
                    <div class="item-info">
                        <h4><a href="{{route('app-development')}}" target="_blank">App Development Agency</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mt60">
                <div class="isotope_item up-hor">
                    <div class="item-image">
                        <a href="{{route('branding-agency')}}" target="_blank"><img src="img/branding-agency.jpg"
                                                                                    alt="image" class="img-fluid">
                        </a>
                    </div>
                    <div class="item-info">
                        <h4><a href="{{route('branding-agency')}}" target="_blank">Branding Agency</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mt60">
                <div class="isotope_item up-hor">
                    <div class="item-image">
                        <a href="{{route('business-startup')}}" target="_blank"><img src="img/business-and-startup.jpg"
                                                                                     alt="image"
                                                                                     class="img-fluid"> </a>
                    </div>
                    <div class="item-info">
                        <h4><a href="{{route('business-startup')}}" target="_blank">Business and Startup</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mt60">
                <div class="isotope_item up-hor">
                    <div class="item-image">
                        <a href="{{route('digital-agency')}}" target="_blank"><img src="img/digital-agency.jpg"
                                                                                   alt="image" class="img-fluid">
                        </a>
                    </div>
                    <div class="item-info">
                        <h4><a href="{{route('digital-agency')}}" target="_blank">Digital Agency</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mt60">
                <div class="isotope_item up-hor">
                    <div class="item-image">
                        <a href="{{route('digital-marketing')}}" target="_blank"><img src="img/digital-marketing.jpg"
                                                                                      alt="image"
                                                                                      class="img-fluid"> </a>
                    </div>
                    <div class="item-info">
                        <h4><a href="{{route('digital-marketing')}}" target="_blank">Digital Marketing</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mt60">
                <div class="isotope_item up-hor">
                    <div class="item-image">
                        <a href="{{route('freelance-portfolio')}}" target="_blank"><img src="img/freelance.jpg"
                                                                                        alt="image" class="img-fluid">
                        </a>
                    </div>
                    <div class="item-info">
                        <h4><a href="{{route('freelance-portfolio')}}" target="_blank">Freelance Personal Portfolio</a>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mt60">
                <div class="isotope_item up-hor">
                    <div class="item-image">
                        <a href="{{route('graphic-studio')}}" target="_blank"><img src="img/graphic-studio.jpg"
                                                                                   alt="image" class="img-fluid">
                        </a>
                    </div>
                    <div class="item-info">
                        <h4><a href="{{route('graphic-studio')}}" target="_blank">Graphic Studio</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mt60">
                <div class="isotope_item up-hor">
                    <div class="item-image">
                        <a href="{{route('landing-page')}}" target="_blank"><img src="img/landing-page-2.jpg"
                                                                                 alt="image" class="img-fluid">
                        </a>
                    </div>
                    <div class="item-info">
                        <h4><a href="{{route('landing-page')}}" target="_blank">Landing Page </a></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mt60">
                <div class="isotope_item up-hor">
                    <div class="item-image">
                        <a href="{{route('lead-generation')}}" target="_blank"><img src="img/lead-generation.jpg"
                                                                                    alt="image" class="img-fluid">
                        </a>
                    </div>
                    <div class="item-info">
                        <h4><a href="{{route('lead-generation')}}" target="_blank">Lead Generation Agency</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mt60">
                <div class="isotope_item up-hor">
                    <div class="item-image">
                        <a href="{{route('modern-agency')}}" target="_blank"><img src="img/modern-agency.jpg"
                                                                                  alt="image" class="img-fluid">
                        </a>
                    </div>
                    <div class="item-info">
                        <h4><a href="{{route('modern-agency')}}" target="_blank">Modern Agency</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mt60">
                <div class="isotope_item up-hor">
                    <div class="item-image">
                        <a href="{{route('web-design-agency')}}" target="_blank"><img src="img/web-design.jpg"
                                                                                      alt="image" class="img-fluid">
                        </a>
                    </div>
                    <div class="item-info">
                        <h4><a href="{{route('web-design-agency')}}" target="_blank">Web Design Agency</a></h4>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<!--End demo-->

@endsection
