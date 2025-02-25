<!-- Stored in resources/views/home.blade.php -->

@extends('layouts.app')

@section('title', 'Project')


@section('content')
@include("components.header")



<div class="w-full mx-auto {{$bg_color}}">
    <h1 class="text-center text-5xl font-extrabold font-poppins-medium h-56 p-5 "></h1>



    <div class="flex justify-center -mt-16 mb-2">
        <nav aria-label="Breadcrumb" class="flex">
            <ol class="flex overflow-hidden rounded-lg border border-gray-200 text-gray-600">
                <li class="flex items-center">
                    <a href="/" class="flex h-10 items-center gap-1.5 bg-gray-100 px-4 transition hover:text-gray-900">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>

                        <span class="ms-1.5 text-xs font-medium"> Home </span>
                    </a>
                </li>

                <li class="relative flex items-center">
                    <span
                        class="absolute inset-y-0 -start-px h-10 w-4 bg-gray-100 [clip-path:_polygon(0_0,_0%_100%,_100%_50%)] rtl:rotate-180">
                    </span>

                    <a href="#"
                        class="flex h-10 items-center bg-white pe-4 ps-8 text-xs font-medium transition hover:text-gray-900">
                        @yield('folder')
                    </a>
                </li>
                <li class="relative flex items-center">
                    <span
                        class="absolute inset-y-0 -start-px h-10 w-4 bg-gray-100 [clip-path:_polygon(0_0,_0%_100%,_100%_50%)] rtl:rotate-180">
                    </span>
                    <a href="#"
                        class="flex h-10 items-center  bg-white pe-4 ps-8 text-xs font-medium transition hover:text-gray-900">
                        @yield('file')
                    </a>
                </li>
            </ol>
        </nav>
    </div>
    @yield('page-content')


    @include("components.footer")

</div>

@endsection