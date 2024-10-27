@extends('pages.mediacorner.layout')
@section('title', $title)
@section('file', $title)
@section('folder', $folder)

@section('page-content')
    <!-- Add custome page content here -->
    <!-- <h1 class="text-center text-slate-900 text-5xl mt-10 font-bold">publications</h1> -->


    <div class="text-center p-10">
        <h1 class="font-bold text-4xl mb-4">
            <span
                class="relative inline-block before:absolute before:h-5 before:w-full before:bg-rose-200 dark:before:bg-rose-900/30 before:bottom-2 before:-skew-y-6 text-rose-700"><span
                    class="relative">&nbsp; Newsletter</span></span>
        </h1>
        <!-- <h1 class="text-3xl">Tailwind CSS</h1> -->
    </div>

    <section style="z-index: 1000;" class="pdf-viewer model-screen top-0 fixed blur-sm bg-gray-300/[0.8] h-screen w-full">


    </section>
    <section style="z-index: 1001;" class="fixed model-screen h-screen bg-gray-300 md:h-screen ">
        <!-- Container -->
        <div class="fixed left-1/2 top-1/2 w-[90%] max-w-3xl -translate-x-1/2 -translate-y-1/2 bg-white md:h-96 lg:w-full">
            <div id="off-model" class="absolute  -top-2 -end-2 cursor-pointer">
                <div class="relative flex h-4 w-4 ">
                    <span
                        class="animate-ping absolute inline-flex h-full w-full rounded-full hover:bg-red-500 bg-sky-400 opacity-75"></span>
                    <span
                        class="relative inline-flex rounded-full h-4 w-4  border border-red-600 text-[9.5px]">&#10006;</span>
                    </>
                </div>
            </div>
            <!-- Content -->
            <div class="grid h-full md:grid-cols-[1fr_0.5fr]">
                <div class="flex flex-col justify-center px-6 py-12 sm:pl-12 sm:pr-20 md:py-16">
                    <!-- Title -->
                    <h3 class="mb-2 text-2xl font-bold md:text-4xl">Get Newsletter </h3>
                    <p class="mb-6 text-sm text-gray-500 sm:text-base lg:mb-8"> After you enter the email and click
                        subscribe email will deliver to you soon. </p>
                    <!-- Form -->
                    <form name="email-form" method="get" class="relative mb-4 max-w-full">
                        <input type="email"
                            class="block h-9 w-full rounded-md border border-solid border-black px-3 py-6 text-sm text-black placeholder:text-black"
                            placeholder="Enter your email" required="" />
                        <input type="submit" value="Subscribe"
                            class="relative top-2 sm:top-1/2 sm:-translate-y-1/2 w-full cursor-pointer rounded-md bg-black px-6 py-2 font-semibold text-white sm:absolute sm:right-1 sm:w-36" />
                    </form>
                    <p class="text-sm text-gray-500"> One time enrollment. </p>
                </div>
                <!-- Image -->
                <img src="https://firebasestorage.googleapis.com/v0/b/flowspark-1f3e0.appspot.com/o/Tailspark%20Images%2FPlaceholder%20Image.svg?alt=media&token=375a1ea3-a8b6-4d63-b975-aac8d0174074"
                    alt=""
                    class="inline-block h-full max-h-60 w-full object-cover [grid-area:1/1/2/2] sm:max-h-full sm:[grid-area:1/2/2/3]" />
            </div>
        </div>
    </section>
    <!-- ✅ Grid Section - Starts Here 👇 -->
    <section id="Projects"
        class="w-fit pb-8 mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5">

        <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl newsletter-box">
            <a href="#">
                <img src="/uploads/newsletter_april_2023.png" alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
                <div class="px-4 py-3 w-72">
                    <span class="text-gray-400 mr-3 uppercase text-xs">QUATERLY NEWSLETTER</span>
                    <p class="text-lg font-bold text-black truncate block capitalize">April 2023</p>

                </div>
            </a>
        </div>
        <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl newsletter-box">
            <a href="#">
                <img src="/uploads/newsletter_april_2023.png" alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
                <div class="px-4 py-3 w-72">
                    <span class="text-gray-400 mr-3 uppercase text-xs">QUATERLY NEWSLETTER</span>
                    <p class="text-lg font-bold text-black truncate block capitalize">April 2023</p>

                </div>
            </a>
        </div>
        <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl newsletter-box">
            <a href="#">
                <img src="/uploads/newsletter_april_2023.png" alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
                <div class="px-4 py-3 w-72">
                    <span class="text-gray-400 mr-3 uppercase text-xs">QUATERLY NEWSLETTER</span>
                    <p class="text-lg font-bold text-black truncate block capitalize">April 2023</p>

                </div>
            </a>
        </div>

    </section>

    <script>
        $(document).ready(function() {
            $(".model-screen").hide()
            $('#off-model').click(function() {
                $(".model-screen").hide()
            })

            $('.newsletter-box').click(function() {
                $(".model-screen").show()
            })
        })
    </script>

@endsection
