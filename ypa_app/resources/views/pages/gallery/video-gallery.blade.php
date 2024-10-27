@extends('pages.gallery.layout')

@section('title', $title)
@section('file', $title)
@section('folder', $folder)
@php

@endphp
@section('page-content')
    {{-- @php

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

        function readTxtFile($filename)
        {
            //$filename = './uploads/gallery/video.txt';
            $file = fopen($filename, 'r');

            if ($file) {
                $fileContents = fread($file, filesize($filename));
                fclose($file);
                return nl2br($fileContents); // nl2br() converts newlines to HTML line breaks
            } else {
                echo 'Error opening file.';
            }
        }

        function isTxtFile($filename)
        {
            // $filename = 'path/to/your/file.txt';
            $fileExtension = pathinfo($filename, PATHINFO_EXTENSION);
            if ($fileExtension === 'txt') {
                return true;
            } else {
                return false;
            }
        }

        $gallery = [[]];

        //echo readTxtFile("./uploads/gallery/video.txt");
        // Example usage
        $directoryPath = './uploads/gallery';
        $directoryArray = readDirectoryToArray($directoryPath);

        $count = 0;
        for ($i = 0; $i < count($directoryArray) - 1; $i++) {
            $currentfileInfo = pathinfo($directoryArray[$i]);
            $currentfileNameWithoutExtension = $currentfileInfo['filename'];
            $nextfileInfo = pathinfo($directoryArray[$i + 1]);
            $nextfileNameWithoutExtension = $nextfileInfo['filename'];
            if ($currentfileNameWithoutExtension === $nextfileNameWithoutExtension) {
                $gallery[$count][0] = $currentfileNameWithoutExtension;
                $gallery[$count][1] = readTxtFile($directoryPath . '/' . $currentfileNameWithoutExtension . '.txt');
            } else {
                $count++;
            }
        }
    @endphp --}}
    <section style="z-index: 1000;" class="pdf-viewer model-screen top-0  fixed blur-sm bg-gray-300/[0.8] h-screen w-full">


    </section>
    <section style="z-index: 1001;" class="fixed model-screen h-screen bg-gray-300 md:h-screen ">
        <!-- Container -->
        <div class="fixed  left-1/2 top-1/3 w-[90%] max-w-3xl -translate-x-1/2 -translate-y-1/2  md:h-96 lg:w-full">
            <div id="off-model" style="z-index: 1001;" class="absolute  -top-2 -end-2 cursor-pointer">
                <div class="relative flex h-8 w-8 ">
                    <span
                        class="animate-ping absolute inline-flex h-full w-full rounded-full hover:bg-red-500 bg-sky-400 opacity-75"></span>
                    <span
                        class="relative inline-flex rounded-full h-8 w-8 border bg-gray-100 hover:bg-blue-100 pl-1 pt-[2px] border-red-600 text-[16.5px]">&#10006;</span>

                </div>
            </div>
            <!-- Content -->
            {{-- <div
                class="relative  overflow-hidden border-2 border-slate-900 bg-white  rounded-2xl shadow-lg group show-video">
                <img src="" alt="Sport" class="w-full max-w-md  h-auto object-cover video-viewer-img">
                <div
                    class="absolute inset-0 bg-black bg-opacity-60 opacity-0  group-hover:opacity-100 transition-opacity duration-300">
                    <div class="absolute bottom-0 left-0 right-0 p-4 ">
                        <h4 class="text-xl xl:text-4xl font-bold text-white capitalize video-viewer-heading"></h4>
                        <p class="text-sm xl:text-xl font-normal text-white video-viewer-para"></p>

                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold text-center mb-8">Video Gallery </h1>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 gallery-container">
            <!-- Large item -->

            {{-- @php
                foreach ($gallery as $item) {
                    echo ' <div class="relative  overflow-hidden rounded-2xl shadow-lg group show-video">
                                                <img src="/uploads/gallery/' .
                        $item[0] .
                        '.jpeg" alt="Sport" class="w-full  h-48 object-cover this-video-img">
                                                <div
                                                    class="absolute inset-0 bg-black bg-opacity-60 opacity-0 this-video-heading group-hover:opacity-100 transition-opacity duration-300">
                                                    <div class="absolute bottom-0 left-0 right-0 p-4 ">
                                                        <h4 class="text-xl font-bold text-white ">' .
                        $item[0] .
                        '</h4>
                                                    </div>
                                                </div>
                                                <p class="hidden this-video-para ">' .
                        $item[1] .
                        '</p>
                                            </div>';
                }

            @endphp --}}

        </div>
    </div>
    <script>
        async function fetchGallery() {
            await fetch('http://127.0.0.1:8000/api/gallery/')
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    var isChecked = '';
                    data.data.forEach(element => {
                        var isHidden = 'hidden';
                        if (element.type === 'video') {
                            isHidden = '';
                            $('.gallery-container').append(`
                                              <div class="each mb-10 m-2 shadow-lg border-gray-800 bg-gray-100 relative">
         <iframe class="w-full h-48 rounded-t-md" src="${element.src}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                               
        <div class="badge absolute top-0 right-0 bg-red-500 m-1 text-gray-200 p-1 px-2 text-xs font-bold rounded hidden">Live
        </div>
        <div class="desc p-4 text-gray-800">
            <a href="${element.src}" target="_new"
                class="title font-bold block cursor-pointer hover:underline">${element.title}</a>
            <a href="${element.src}" target="_new"
                class="badge bg-indigo-500 text-blue-100 rounded px-1 text-xs font-bold cursor-pointer">${element.date}</a>
            <span class="description text-sm block py-2 border-gray-400 mb-2">${element.description}</span>
        </div>
    </div>`);
                        } else {
                            isHidden = 'hidden';
                        }

                        if (element.status == 'TRUE') {
                            isChecked = '';
                        } else {
                            isChecked = 'hidden';
                        }


                        // $('.gallery-container').append(`<div class="relative ${isHidden} overflow-hidden rounded-2xl shadow-lg group show-video">
                    //                         <img src="${element.src}" alt="Sport" class="w-full  h-48 object-cover this-video-img">
                    //                         <div
                    //                             class="absolute inset-0 bg-black bg-opacity-60 opacity-0 this-video-heading group-hover:opacity-100 transition-opacity duration-300">
                    //                             <div class="absolute bottom-0 left-0 right-0 p-4 ">
                    //                                 <h4 class="text-md xl:text-xl font-bold text-white ">${element.title}</h4>
                    //                             </div>
                    //                         </div>
                    //                         <p class="hidden this-video-para ">${element.description}</p>
                    //                     </div>`);
                    })
                })
                .catch(error => {
                    console.error('Error:', error);
                    // Handle error (e.g., show an error message)
                });





            $(".model-screen").hide()
            $('#off-model').click(function() {
                $(".model-screen").hide()
            })

            $('.show-video').click(function() {
                $(".model-screen").show()
                $(".video-viewer-img").attr('src', $(this).children('.this-video-img').attr('src'))
                $(".video-viewer-heading").text($(this).children('.this-video-heading').text())
                $(".video-viewer-para").text($(this).children('.this-video-para').text())
            })
        }
        fetchGallery();
        $(document).ready(function() {

        })
    </script>

@endsection
