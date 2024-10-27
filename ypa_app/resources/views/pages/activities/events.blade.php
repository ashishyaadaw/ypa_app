@extends('pages.activities.layout')

@section('title', $title)
@section('file', $title)
@section('folder', $folder)

@php

    function readDirectoryToArray($dir)
    {
        $result = [];
        $files = scandir($dir);

        foreach ($files as $file) {
            if ($file !== '.' && $file !== '..') {
                $filePath = $dir . DIRECTORY_SEPARATOR . $file;
                if (is_dir($filePath)) {
                    $result[$file] = readDirectoryToArray($filePath);
                } else {
                    $result[] = $filePath;
                }
            }
        }

        return $result;
    }

    $temps = [[]];

    //echo readTxtFile("./uploads/events/image.txt");
    // Example usage
    $directoryPath = './uploads/events';
    $directoryArray = readDirectoryToArray($directoryPath);

    $count = 0;
    for ($i = 0; $i < count($directoryArray) - 1; $i++) {
        $currentfileInfo = pathinfo($directoryArray[$i]);
        $currentfileNameWithoutExtension = $currentfileInfo['filename'];
        $nextfileInfo = pathinfo($directoryArray[$i + 1]);
        $nextfileNameWithoutExtension = $nextfileInfo['filename'];
        if ($currentfileNameWithoutExtension === $nextfileNameWithoutExtension) {
            $lines = file($directoryPath . '/' . $currentfileNameWithoutExtension . '.txt');

            $temps[$count][0] = $currentfileNameWithoutExtension; // used in url
            $temps[$count][1] = $lines[0]; // date
            $temps[$count][2] = $lines[1]; // Title
            $temps[$count][3] = $lines[2]; // author / location
            $temps[$count][4] = $lines[3]; // Paragraph
        } else {
            $count++;
        }
        $events = array_reverse($temps);
    }
@endphp

@section('page-content')
    <!-- Add custome page content here -->

    <section>
        <!-- Container -->
        <div class="mx-auto w-full max-w-7xl px-5 py-8 md:px-10 md:py-20  ">
            <!-- Component -->
            <div class="mx-auto mb-8 flex max-w-3xl flex-col items-center text-center md:mb-12 lg:mb-16">
                <h2
                    class="text-3xl font-bold md:text-5xl bg-clip-text text-transparent bg-gradient-to-r from-red-700 to-blue-700">
                    Let's see our events</h2>
                <p class="mx-auto mb-8 mt-4 max-w-lg text-base text-gray-500 md:mb-12 md:text-lg lg:mb-16"> Our events and
                    campaign </p>
                <div class="flex justify-center">
                    <div class="mr-6 md:mr-10 lg:mr-12">
                        <h3 class="text-2xl font-bold md:text-3xl">100+</h3>
                        <p class="text-sm text-gray-500">Events</p>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold md:text-3xl">20K+</h3>
                        <p class="text-sm text-gray-500">Attendee</p>
                    </div>
                </div>
            </div>
            <!-- Image -->
            <article
                class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl px-8 pb-8 pt-40 h-[500px] w-full mx-auto mt-24">

                <img src="https://images.unsplash.com/photo-1499856871958-5b9627545d1a"
                    alt="University of Southern California" class="absolute inset-0 h-full w-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40">
                    <div
                        class="text-sm absolute top-0 right-0 bg-indigo-600 px-4 text-white text-center rounded-full h-20 w-20 flex flex-col items-center justify-center mt-3 mr-3 hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out">
                        <span class="font-semibold font-sm">new</span>
                    </div>
                </div>

                <h3 class="z-10 mt-3 p-1 pl-2 pr-2 text-xl font-bold text-white bg-blue-600 rounded-md max-w-fit">
                    {{ $events[0][1] }}</h3>
                <h3 class="z-10 mt-3 text-3xl font-bold text-white">{{ $events[0][2] }}</h3>
                <div class="z-10 flex w-full flex-col gap-3 text-gray-500 sm:w-auto md:flex-row lg:items-center">
                    <p class="text-sm">{{ $events[0][3] }}</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 6 6" fill="none"
                        preserveAspectRatio="xMidYMid meet"
                        class="hidden h-1.5 w-1.5 items-center justify-center text-gray-500 lg:block">
                        <circle cx="3" cy="3" r="3" fill="currentColor"></circle>
                    </svg>
                    <p class="text-sm">{{ $events[0][4] }}</p>
                </div>
            </article>
        </div>
    </section>

    <section class="relative">
        <!-- Container -->
        <div class="mx-auto w-full max-w-7xl px-5 py-16 md:px-10 md:py-20">
            <!-- Filter -->
            <div class="relative  mb-14">
                <div
                    class="hidden text-gray-500 font-semibold text-sm sm:text-base md:text-sm lg:text-base flex-col md:flex-row gap-5 md:gap-0 max-w-3xl w-full md:justify-between mx-auto">
                    <div class="relative cursor-pointer">
                        <p class="text-black pl-5 md:pl-0">All Categories</p>
                        <div class="md:w-full md:h-[1.5px] h-full w-[1.5px] absolute md:top-8 top-0 bg-black z-10"></div>
                    </div>
                    <div class="relative cursor-pointer">
                        <p class="pl-5 md:pl-0">Category 1</p>
                        <div class="md:w-full md:h-[1.5px] h-full w-[1.5px] absolute md:top-8 top-0 bg-black z-10 hidden">
                        </div>
                    </div>
                    <div class="relative cursor-pointer">
                        <p class="pl-5 md:pl-0">Category 2</p>
                        <div class="md:w-full md:h-[1.5px] h-full w-[1.5px] absolute md:top-8 top-0 bg-black z-10 hidden">
                        </div>
                    </div>
                    <div class="relative cursor-pointer">
                        <p class="pl-5 md:pl-0">Category 3</p>
                        <div class="md:w-full md:h-[1.5px] h-full w-[1.5px] absolute md:top-8 top-0 bg-black z-10 hidden">
                        </div>
                    </div>
                    <div class="relative cursor-pointer">
                        <p class="pl-5 md:pl-0">Category 4</p>
                        <div class="md:w-full md:h-[1.5px] h-full w-[1.5px] absolute md:top-8 top-0 bg-black z-10 hidden">
                        </div>
                    </div>
                    <div class="relative cursor-pointer">
                        <p class="pl-5 md:pl-0">Category 5</p>
                        <div class="md:w-full md:h-[1.5px] h-full w-[1.5px] absolute md:top-8 top-0 bg-black z-10 hidden">
                        </div>
                    </div>
                </div>
                <div class="md:w-full md:h-[1.5px] h-full w-[1.5px] absolute md:top-8 top-0 bg-gray-300">

                </div>
            </div>
            <div>
                <div class="mx-auto grid w-full gap-8 md:grid-cols-2 lg:grid-cols-3">
                    <!-- Item -->

                    @php
                        for ($i = 1; $i < count($events); $i++) {
                            echo '<a href="#"
                    class="flex flex-col items-start gap-4 pb-6 text-black sm:items-start shadow p-2 hover:border border-blue-900 rounded-md">
                    <div class="relative aspect-[16_/_7] w-full overflow-hidden rounded-sm md:aspect-[16_/_8]">
                        <img src="/uploads/events/' .
                                $events[$i][0] .
                                '.jpeg"
                            alt="" class="absolute inline-block h-full w-full object-cover" />
                    </div>
                    <div class="flex w-full flex-col items-start gap-5 pt-4 md:gap-0 md:pt-0">
                        <div class="rounded-md mb-1 bg-blue-50 px-2 py-1.5 text-sm font-medium uppercase text-blue-600">
                            <p>' .
                                $events[$i][1] .
                                '</p>
                        </div>
                        <p class="mb-3 text-xl font-bold md:text-2xl"> ' .
                                $events[$i][2] .
                                ' </p>
                        <div
                            class="flex w-full flex-col justify-between gap-3 text-gray-500 sm:w-auto md:flex-row lg:items-center">
                            <p class="text-sm">' .
                                $events[$i][3] .
                                '</p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 6 6"
                                fill="none" preserveAspectRatio="xMidYMid meet"
                                class="hidden h-1.5 w-1.5 items-center justify-center text-gray-500 lg:block">
                                <circle cx="3" cy="3" r="3" fill="currentColor"></circle>
                            </svg>
                            <p class="text-sm">' .
                                $events[$i][4] .
                                '</p>
                        </div>
                    </div>
                </a>';
                        }

                    @endphp

                </div>
            </div>
        </div>
    </section>
@endsection
