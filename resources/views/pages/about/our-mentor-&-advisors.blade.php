@extends('pages.about.layout')

@section('title', $title)
@section('file', $title)
@section('folder', $folder)

@section('page-content')

    <!-- <h1 class="text-center text-slate-900 text-5xl mt-10 font-bold uppercase">{{ $title }}</h1> -->

    <div class=" w-full shadow  p-4 md:p-6 ">

        <div class="flex justify-center w-full">
            <div class="grid mentors-list  grid-cols-1 md:grid-cols-2 xl:grid-cols-3 xxl:grid-cols-4  gap-12">
                {{-- <div class="w-96 h-20 flex relative justify-around px-3">
                    <div class="w-24 h-24 absolute -start-8 bottom-0 p-2 rounded-full rounded-br-none bg-red-700 ">
                        <div class="w-20 h-20 rounded-full bg-white"></div>
                    </div>
                    <div class="w-full pl-20 h-20 pt-1 text-left bg-orange-400">
                        <h3 class="font-bold text-xl">Heading Here</h3>
                        <p class="font-normal text-md">Some text must be going here!</p>
                    </div>
                </div> --}}


            </div>
        </div>
    </div>


    <script>
        async function fetchMentors() {
            await fetch('http://127.0.0.1:8000/api/mentors/')
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    var isChecked = '';
                    data.data.forEach(element => {
                        if (element.status == 'TRUE') {
                            isChecked = '';
                        } else {
                            isChecked = 'hidden';
                        }


                        $('.mentors-list').append(`<div  class="${isChecked} w-96 h-20 flex relative justify-around px-3">
                    <div class="w-24 h-24 absolute -start-8 bottom-0 p-2 rounded-full rounded-br-none bg-red-700 ">
                        <div class="w-20 h-20 rounded-full bg-white">
                            <img src="${element.src}" class="w-20 h-20 rounded-full" alt="${element.name}"/></div>
                    </div>
                    <div class="w-full pl-20 h-20 pt-1 text-left bg-orange-400">
                        <h3 class="font-bold text-xl">${element.name}</h3>
                        <p class="font-normal text-md">${element.title}</p>
                    </div>
                </div>`);
                    })
                })
                .catch(error => {
                    console.error('Error:', error);
                    // Handle error (e.g., show an error message)
                });



            var slideCount = 4;
            if ($(window).width() > 1500) {
                slideCount = 4;
            } else if ($(window).width() > 1000 && $(window).width() <= 1500) {
                slideCount = 3;
            } else if ($(window).width() > 700 && $(window).width() <= 1000) {
                slideCount = 2;
            } else {
                slideCount = 1;
            }

            var splide = new Splide('#testimonial-carousel', {
                type: 'loop',
                perPage: slideCount,
                autoScroll: {
                    speed: 0.5,
                    autoStart: true,
                },
            });
            splide.mount(window.splide.Extensions);
        }
        fetchMentors();
    </script>


@endsection
