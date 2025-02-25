@extends('layouts.base')

@section('content')
    <x-landing-header/>
    @yield('main')
    <x-landing-footer/>
@endsection

@section('page-script')
    <script async src="js/typer.js"></script>
    <script>
        //Owl-Carousel - client logo
        var owl = $('.niwaxwideserviceslider');
        owl.owlCarousel({
            items: 1,
            loop: true,
            center: false,
            autoplay: true,
            margin: 20,
            nav: false,
            dots: true,
            autoplayTimeout: 3500,
            autoplayHoverPause: true,
            smartSpeed: 2000
        });
        //Owl-Carousel - client logo
        var owl = $('.niwax-client-slider');
        owl.owlCarousel({
            loop: true,
            center: false,
            autoplay: true,
            margin: 20,
            nav: false,
            dots: false,
            autoplayTimeout: 3500,
            autoplayHoverPause: true,
            smartSpeed: 2000,
            responsive: {
                0: {
                    items: 3,
                },
                520: {
                    items: 3
                },
                768: {
                    items: 4
                },
                1200: {
                    items: 4
                },
                1400: {
                    items: 5
                },
                1600: {
                    items: 6
                },
            }
        });
        //Owl-Carousel - awards card
        var owl = $('.niwax-logo-slider');
        owl.owlCarousel({
            loop: true,
            center: false,
            autoplay: true,
            margin: 20,
            nav: false,
            dots: false,
            autoplayTimeout: 3500,
            autoplayHoverPause: true,
            smartSpeed: 2000,
            responsive: {
                0: {
                    items: 3,
                },
                520: {
                    items: 3
                },
                768: {
                    items: 4
                },
                1200: {
                    items: 4
                },
                1400: {
                    items: 5
                },
                1600: {
                    items: 6
                },
            }
        });

        //Owl-Carousel - awards card
        var owl = $('.niwax-review-slider');
        owl.owlCarousel({
            items: 3,
            loop: true,
            center: false,
            autoplay: true,
            margin: 20,
            nav: false,
            dots: true,
            autoplayTimeout: 3500,
            autoplayHoverPause: true,
            smartSpeed: 2000,
            responsive: {
                0: {
                    items: 1,
                },
                520: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1200: {
                    items: 2
                },
                1400: {
                    items: 3
                },
                1600: {
                    items: 3
                },
            }
        });
    </script>
@endsection
