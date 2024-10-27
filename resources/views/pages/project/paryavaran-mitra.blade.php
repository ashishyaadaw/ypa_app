@extends('pages.project.layout')

@section('title', $title)
@section('file', $title)
@section('folder', $folder)



@section('page-content')
    <!-- Add custome page content here -->
    <!-- Container -->
    <div class="mx-auto w-full max-w-7xl px-5 py-12 md:px-10 md:py-16 lg:py-20">
        <!-- Component -->
        <div class="grid gap-12 sm:gap-20 lg:grid-cols-2">
            <!-- Content -->
            <div class="flex flex-col items-start gap-2">
                <div class="flex items-center rounded-md bg-gray-300 px-3 py-1">
                    <div class="mr-1 h-2 w-2 animate-ping rounded-full bg-red-600"></div>
                    <p class="text-sm">Uttar Pradesh, India</p>
                </div>
                <p class="text-sm text-gray-500 sm:text-xl">Enviroment Protection</p>
                <!-- Title -->
                <h1 class="mb-6 text-4xl font-bold md:text-6xl lg:mb-8">Paryavaran Mitra</h1>
                <p class="text-sm text-gray-500 sm:text-xl">A YPA's Drive to plant more and more tree. Making people aware
                    of deforestation, increasing air polution,ozone depletion and more serious environment issues.</p>
                <!-- Divider -->
                <div class="mb-8 mt-8 h-px w-full bg-black"></div>
                <div class="mb-6 flex flex-col gap-2 text-sm text-gray-500 sm:text-base lg:mb-8">
                    <p class="hidden">
                        <strong>2020: </strong>YPA theatre form
                    </p>
                </div>
                <!-- Link -->
                <a href="#"
                    class="mb-6  hidden items-center gap-2.5 text-center text-sm font-bold uppercase md:mb-10 lg:mb-12">
                    <p>All Achievements</p>
                    <img src="https://assets.website-files.com/6458c625291a94a195e6cf3a/64b1465d46adaf3f26099edf_arrow.svg"
                        alt="" class="inline-block " />
                </a>
                <!-- Buttons -->
                <div class="flex flex-col gap-4 font-semibold sm:flex-row">
                    <button class="flex items-center gap-4 register-form-waitlist rounded-md bg-black px-6 py-3 text-white">
                        <img src="/uploads/event-svgrepo-com.svg" alt=""
                            class="inline-block h-5 w-5 fill-slate-50" />
                        <p>Register in Waitlist</p>
                    </button>
                    <a href="#" class="flex gap-4 rounded-md border border-solid border-black px-6 py-3">
                        <img src="https://assets.website-files.com/6458c625291a94a195e6cf3a/64b14704c8616ad7ba080fe0_Note.svg"
                            alt="" class="inline-block" />
                        <p>Brochure</p>
                    </a>
                </div>
            </div>
            <!-- Image -->
            <div class="min-h-[530px] overflow-hidden rounded-md bg-gray-100">
                <img src="/uploads/jaago.png" class="mix-blend-multiply " alt="JAAGO" />
            </div>
        </div>
    </div>
    @include('components.blog', ['type' => 'parayavaran_mitra'])
@endsection
