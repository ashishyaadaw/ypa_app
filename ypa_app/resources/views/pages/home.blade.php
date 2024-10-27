<!-- Stored in resources/views/home.blade.php -->

@extends('layouts.app')

@section('title', 'Home')


@section('content')
    <style>
        .animated-div {
            opacity: 0;
            position: relative;
            top: 50px;
            transition: opacity 1s, top 1s;
        }

        .visible {
            opacity: 1;
            top: 0;
        }
    </style>
    @include('components.header')
    <div class="lg:pt-32 md:pt-28 xl:pt-36">

        @include('components.notice')
    </div>
    @include('components.count')
    @include('components.works')
    @include('components.author')
    @include('components.projects')
    @include('components.map')
    @include('components.reviews')
    @include('components.testimonials')
    @include('components.partners')
    @include('components.footer')

    @include('components.widget')
    <script>
        $(document).ready(function() {
            var splide = new Splide('.splide', {
                type: 'loop',
                perPage: 1,
                autoplay: true,
            });
            splide.mount();
            $(window).on('scroll', function() {
                $('.animated-div').each(function() {
                    if ($(this).is(':visible') && $(this).offset().top < $(window).scrollTop() + $(
                            window).height()) {
                        $(this).addClass('visible');
                    }
                });
            });

        });
    </script>

@endsection
