@extends('pages.mediacorner.layout')
@section('title', $title)
@section('file', $title)
@section('folder', $folder)

@section('page-content')

    <section>
        <!-- Container -->
        <div class="mx-auto w-full max-w-7xl px-5 py-16 md:px-10 md:py-20">
            <!-- Title -->
            <h2 class="text-center text-3xl font-bold md:text-5xl lg:text-left">YPA's Classified Blog</h2>
            <p class="mb-8 mt-4 text-center text-sm text-gray-500 sm:text-base md:mb-12 lg:mb-16 lg:text-left"> Here the
                blog of YPA activities and publications</p>
            <!-- Content -->
            <div class="mx-auto grid gap-8 lg:grid-cols-2">
                <div class="selected-blog">
                    {{-- <a href="#" class="flex flex-col gap-4 rounded-md [grid-area:1/1/4/2] lg:pr-8">
                        <img src="/uploads/jan11.png" alt="" class="inline-block h-72 w-full object-cover" />
                        <div class="flex flex-col items-start py-4">
                            <div class="mb-4 rounded-md bg-gray-100 px-2 py-1.5">
                                <p class="text-sm font-semibold text-blue-600"> STREET PLAY </p>
                            </div>
                            <p class="mb-4 text-xl font-bold md:text-2xl"> January 11, 2023 || Water Conservation </p>
                            <div class="flex flex-col text-sm text-gray-500 lg:flex-row">
                                <p>To make people conscious of various public concerns, for which Youth
                                    Power Association was entrusted with the accountability of performing
                                    street plays related to cleanliness, water conservation, environmental
                                    protection and health. Champa Devi Park, Shaheed Ashfaqullah
                                    Khan Zoological Park, Boating Spot ( Nauka Vihar)
                                    Gorakhpur</p>
                                <p class="mx-2 hidden lg:block">-</p>
                                <p></p>
                            </div>
                        </div>
                    </a> --}}
                </div>
                <div class="md:flex md:justify-between lg:flex-col latest-blogs">
                    {{-- <a href="#" class="flex flex-col pb-5 lg:mb-3 lg:flex-row lg:border-b lg:border-gray-300">
                        <img src="/uploads/RAMAIYA.PNG" alt="ramaiya concert"
                            class="inline-block h-60 w-full object-cover md:h-32 lg:h-32 lg:w-32" />
                        <div class="flex flex-col items-start pt-4 lg:px-8">
                            <div class="mb-2 rounded-md bg-gray-100 px-2 py-1.5">
                                <p class="text-sm font-semibold text-blue-600"> CONCERT </p>
                            </div>
                            <p class="mb-2 text-sm font-bold sm:text-base"> YPA Volunteer Partner & Local Coordinator
                                at "Ram-Ramaiya Concert" </p>
                            <div class="flex flex-col items-start">
                                <div class="flex flex-col text-sm text-gray-500 sm:text-base lg:flex-row lg:items-center">
                                    <p>Yogiraj Baba
                                        Gambheernath Auditorium </p>
                                    <p class="mx-2 hidden lg:block">-</p>
                                    <p>19th Feb 2023.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="flex flex-col pb-5 lg:mb-3 lg:flex-row lg:border-b lg:border-gray-300">
                        <img src="/uploads/school_event.png" alt=""
                            class="inline-block h-60 w-full object-cover md:h-32 lg:h-32 lg:w-32" />
                        <div class="flex flex-col items-start pt-4 lg:px-8">
                            <div class="mb-2 rounded-md bg-gray-100 px-2 py-1.5">
                                <p class="text-sm font-semibold text-blue-600"> AWARENESS PROGRAM </p>
                            </div>
                            <p class="mb-2 text-sm font-bold sm:text-base"> Environment Protection theamed program in school
                                on Earth Day </p>
                            <div class="flex flex-col items-start">
                                <div class="flex flex-col text-sm text-gray-500 sm:text-base lg:flex-row lg:items-center">
                                    <p>Litle Star Academy</p>
                                    <p class="mx-2 hidden lg:block">-</p>
                                    <p>22 March, 2022</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="flex flex-col pb-5 lg:mb-3 lg:flex-row lg:border-b lg:border-gray-300">
                        <img src="/uploads/screening_poonam_tandon.png" alt=""
                            class="inline-block h-60 w-full object-cover md:h-32 lg:h-32 lg:w-32" />
                        <div class="flex flex-col items-start pt-4 lg:px-8">
                            <div class="mb-2 rounded-md bg-gray-100 px-2 py-1.5">
                                <p class="text-sm font-semibold text-blue-600"> CANCER AWARENESS PROGRAM </p>
                            </div>
                            <p class="mb-2 text-sm font-bold sm:text-base"> In collaboration with DDU, Synergy Cancer Super
                                specility HOspital and YPA </p>
                            <div class="flex flex-col items-start">
                                <div class="flex flex-col text-sm text-gray-500 sm:text-base lg:flex-row lg:items-center">
                                    <p>Laila Bahar</p>
                                    <p class="mx-2 hidden lg:block">-</p>
                                    <p>6 mins read</p>
                                </div>
                            </div>
                        </div>
                    </a> --}}
                </div>
            </div>
            <div class="mx-auto grid gap-8 lg:grid-cols-2 blogs-container">


            </div>
        </div>
    </section>

    <script>
        async function printLatest(id) {
            await fetch('http://127.0.0.1:8000/api/blogs/' + id)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    var element = data.data;

                    $('.selected-blog').html(` <a href="#" class="flex flex-col gap-4 rounded-md [grid-area:1/1/4/2] lg:pr-8">
                        <img src="${element.cover}" alt="" class="inline-block h-72 w-full object-cover" />
                        <div class="flex flex-col items-start py-4">
                            <div class="mb-4 rounded-md bg-gray-100 px-2 py-1.5">
                                <p class="text-sm font-semibold text-blue-600"> ${element.category==='NA'? '':element.category} </p>
                            </div>
                            <p class="mb-4 text-xl font-bold md:text-2xl">${element.title==='NA'? '':element.title} </p>
                            <div class=" text-sm text-gray-500">
                                <p>${element.content==='NA'? '':element.content} </p>
                                <p class="mx-2 hidden lg:block">-</p>
                                
                                    <h3>${element.author} </h3>
                            </div>
                        </div>
                    </a>`);
                }).catch((error) => {
                    console.log(error);

                })
        }
        async function fetchBlogs() {
            await fetch('http://127.0.0.1:8000/api/blogs/')
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    let arr = data.data;
                    let firstFour = arr.slice(0, 3);
                    printLatest(firstFour[0].id)
                    printLatest({{ $id }})

                    firstFour.forEach(element => {

                        if (element.status == 'TRUE') {
                            isChecked = '';


                        } else {
                            isChecked = 'hidden';
                            $('.latest-blogs').append(`
                         <a href="/blog-&-articles/${element.id}" class="flex flex-col pb-5 lg:mb-3 lg:flex-row lg:border-b lg:border-gray-300">
                        <img src="${element.cover}" alt="${element.title}"
                            class="inline-block h-60 w-full object-cover md:h-32 lg:h-32 lg:w-32" />
                        <div class="flex flex-col items-start pt-4 lg:px-8">
                            <div class="mb-2 rounded-md bg-gray-100 px-2 py-1.5">
                                <p class="text-sm font-semibold text-blue-600"> ${element.category} </p>
                            </div>
                            <p class="mb-2 text-sm font-bold sm:text-base"> ${element.title}</p>
                            <div class="flex flex-col items-start">
                                <div class="">
                                    <h3>${element.author} </h3>
                                </div>
                            </div>
                        </div>
                    </a>`);

                        }

                    })







                    var isChecked = '';
                    var author;
                    var key = 0;



                    arr.forEach(element => {
                        key++;

                        if (key > 3) {
                            if (element.author) {
                                author = element.author.split(',');
                            }

                            if (element.status == 'TRUE') {
                                isChecked = '';
                            } else {
                                isChecked = 'hidden';
                                $('.blogs-container').append(` <a href="/blog-&-articles/${element.id}" 
                    class="flex flex-col p-3 rounded lg:mb-3 lg:flex-row lg:border-b bg-gray-50/[0.6] lg:border-gray-300">
                    <img src="${element.cover}" alt="ramaiya concert"
                        class="inline-block h-60 w-full object-cover md:h-32 lg:h-32 lg:w-32" />
                    <div class="flex flex-col items-start  lg:px-8">
                        <div class="mb-2 rounded-md bg-gray-100 px-2 py-1.5">
                            <p class="text-sm font-semibold text-blue-600">${element.category==='NA'? '':element.category} </p>
                        </div>
                        <p class="mb-2 text-sm font-bold sm:text-base"> ${element.title==='NA'? '':element.title} </p>
                        <div class="flex flex-col items-start">
                            <div class="flex flex-col text-sm text-gray-500 sm:text-base lg:flex-row lg:items-center">
                                <p> ${element.author==='NA'? '':element.author} </p>
                                <p class="mx-2 hidden lg:block">-</p>
                                <p>19th Feb 2023.</p>
                            </div>
                        </div>
                    </div>
                </a>`);

                            }

                        }


                    })
                })
                .catch(error => {
                    console.error('Error:', error);
                    // Handle error (e.g., show an error message)
                });


        }
        fetchBlogs();
    </script>
@endsection
