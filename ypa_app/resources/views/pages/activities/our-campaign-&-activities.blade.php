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

    function readTxtFile($filename)
    {
        //$filename = './uploads/activities/image.txt';
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

    $activities = [[]];

    //echo readTxtFile("./uploads/activities/image.txt");
    // Example usage
    $directoryPath = './uploads/activities';
    $directoryArray = readDirectoryToArray($directoryPath);

    $count = 0;
    for ($i = 0; $i < count($directoryArray) - 1; $i++) {
        $currentfileInfo = pathinfo($directoryArray[$i]);
        $currentfileNameWithoutExtension = $currentfileInfo['filename'];
        $nextfileInfo = pathinfo($directoryArray[$i + 1]);
        $nextfileNameWithoutExtension = $nextfileInfo['filename'];
        if ($currentfileNameWithoutExtension === $nextfileNameWithoutExtension) {
            $lines = file($directoryPath . '/' . $currentfileNameWithoutExtension . '.txt');

            $activities[$count][0] = $currentfileNameWithoutExtension;
            $activities[$count][1] = $lines[1];
            $activities[$count][2] = $lines[2];
            $activities[$count][3] = $lines[0];
        } else {
            $count++;
        }
    }
@endphp
@section('page-content') <!-- Add
        custome page content here -->
    <section style="z-index: 1000;" class="pdf-viewer model-screen top-0 fixed blur-sm bg-gray-300/[0.8] h-screen w-full">


    </section>
    <section style="z-index: 1001;" class="fixed model-screen h-screen bg-gray-300 md:h-screen ">
        <!-- Container -->
        <div
            class="fixed  left-1/2 lg:top-1/3 sm:top-1/2 w-[90%] max-w-3xl -translate-x-1/2 -translate-y-1/2  md:h-96 lg:w-full">
            <div id="off-model" style="z-index: 1001;" class="absolute  -top-2 -end-2 cursor-pointer">
                <div class="relative flex h-8 w-8 ">
                    <span
                        class="animate-ping absolute inline-flex h-full w-full rounded-full hover:bg-red-500 bg-sky-400 opacity-75"></span>
                    <span
                        class="relative inline-flex rounded-full h-8 w-8 border bg-gray-100 hover:bg-blue-100 pl-1 pt-[2px] border-red-600 text-[16.5px]">&#10006;</span>
                    </>
                </div>
            </div>
            <!-- Content -->
            <div class="relative  overflow-hidden rounded-2xl shadow-lg group show-image">
                <img src="" alt="Sport" class="w-full  h-full max-h-[500px] object-cover set-src">
                <div
                    class="absolute inset-0 bg-black bg-opacity-60 opacity-0  group-hover:opacity-100 transition-opacity duration-300">
                    <div class="absolute bottom-0 left-0 right-0 p-4 ">
                        <h4 class="text-3xl font-raleway font-semibold text-white capitalize set-heading">title
                        </h4>
                        <p class="text-xl font-normal text-white set-para">desciption</p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16">
        <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-2 gap-10">
            @php
                foreach ($activities as $value) {
                    echo ' <div class="rounded overflow-hidden shadow-lg get-data">
                                                             <a href="#"></a>
                                                             <div class="relative get-data-src cursor-pointer">
                                                                     <img class="w-full get-src"
                                                                         src="/uploads/activities/' .
                        $value[0] .
                        '.jpeg"
                                                                         alt="Sunset in the mountains">
                                                                     <div
                                                                         class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                                                                     </div>
                                                                     <a href="#!">
                                                                         <div
                                                                             class="absolute bottom-0 left-0 bg-indigo-600 px-4 py-2 text-white text-sm hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out">
                                                                             Photos
                                                                         </div>
                                                                     </a>

                                                                   <a href="!#">
                                                                       <div
                                                                           class="text-sm absolute top-0 right-0 bg-indigo-600 px-4 text-white text-center rounded-full h-20 w-20 flex flex-col items-center justify-center mt-3 mr-3 hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out">
                                                                           <span class="font-semibold font-sm">' .
                        $value[3] .
                        '</span>
                                                                       </div>
                                                                   </a>
                                                               </div>
                                                              <div class="px-6 py-4 get-data-text">

                                                                     <a href="#"
                                                                         class="font-semibold capitalize text-lg get-heading inline-block hover:text-indigo-600 transition duration-500 ease-in-out">
                                                                         ' .
                        $value[1] .
                        '</a>
                                                                     <p class="text-gray-500 text-sm get-para">
                                                                         ' .
                        $value[2] .
                        '
                                                                     </p>
                                                                 </div>

                                                             </div>
                                                                                                                                                                                 ';
                }

            @endphp


        </div>
    </div>


    <script>
        $(document).ready(function() {
            $(".model-screen").hide()
            $('#off-model').click(function() {
                $(".model-screen").hide()
            })

            $('.get-data').click(function() {
                $(".model-screen").show()
                $(".set-src").attr('src', $(this).children('.get-data-src').children('.get-src').attr(
                    'src'))
                $(".set-heading").text($(this).children('.get-data-text').children('.get-heading').text())
                $(".set-para").text($(this).children('.get-data-text').children('.get-para').text())
            })
        })
    </script>

@endsection
