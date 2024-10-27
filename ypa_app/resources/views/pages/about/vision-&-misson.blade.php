@extends('pages.about.layout')

@section('title', $title)
@section('file', $title)
@section('folder', $folder)

@section('page-content')


    <section>
        <!-- Container -->
        <div class="mx-auto w-full max-w-7xl px-5 py-16 md:px-10 md:py-20">
            <!-- Title -->
            <h2 class="mb-8 text-3xl font-bold md:text-5xl lg:mb-14"> YPA's Goal </h2>
            <p class="mb-8 max-w-lg text-sm text-gray-500 sm:text-base lg:mb-24"> </p>
            <div class="grid gap-10 lg:grid-cols-2 lg:gap-12">
                <img src="/uploads/selfie.png" alt="" class="inline-block h-full w-full rounded-2xl object-cover" />
                <div class="flex flex-col gap-5 rounded-2xl border border-solid border-black p-10 sm:p-20">
                    <h2 class="text-3xl font-bold md:text-5xl">Our Vision</h2>
                    <p class="text-sm text-gray-500 sm:text-base"> YPA strives to transform the society into a platform
                        where the youths are capable to understand and recognize their true potential and their rights to
                        the fullest, their duties towards their environment, society and nation, VPA believes in ancient
                        Indian notion of Vasudhaiva Kutumbam, that is, Whole World is One Family and therefore it aims to
                        bring positive changes in the world throughout.
                        <br />
                    </p>
                </div>
            </div>
            <br>
            <div class="grid gap-10 lg:grid-cols-2 lg:gap-12">
                <div class="flex flex-col gap-5 rounded-2xl border border-solid border-black p-10 sm:p-20">
                    <h2 class="text-3xl font-bold md:text-5xl">Our Mission</h2>
                    <p class="text-sm text-gray-500 sm:text-base"> Support & aim nurturing emphatic young leaders and
                        provide opportunities to youth to advance their skills and sharpen their personality making them
                        more equitable, cooperative and sustainable, not just for themselves but also for the society,
                        nation and at global level. YPA, working primarily in environmental, cancer and Youth development,
                        is leaving no stone unturned to ensure enhancement of the living standards of people globally.
                    </p>
                </div>

                <img src="/uploads/team.png" alt="" class="inline-block h-full w-full rounded-2xl object-cover" />
            </div>
        </div>
    </section>
@endsection
