@extends('pages.work.layout')

@section('title', $title)
@section('file', $title)
@section('folder', $folder)


@section('title', 'Theatre')

@section('page-content')
    <!-- Add custome page content here -->
    <!-- <h1 class="text-center text-slate-900 text-5xl mt-10 font-bold"></h1> -->
    <div class="max-w-screen-xl mx-auto px-5">
        <main class="grid lg:grid-cols-2 place-items-center pt-16 pb-8 md:pt-12 md:pb-24">
            <div class="py-6 md:order-1 hidden md:block">
                <picture>
                    <source type="image/webp" sizes="(max-width: 800px) 100vw, 620px">
                    <img src="/uploads/theatre.png" alt="Health and well being" class="mix-blend-multiply"
                        sizes="(max-width: 800px) 100vw, 620px" loading="eager" width="520" height="424"
                        decoding="async">
                </picture>
            </div>
            <div>
                <h1
                    class="text-5xl lg:text-6xl xl:text-7xl h-32 relative font-bold uppercase lg:tracking-tight xl:tracking-tighter">
                    <div class="theatre-effect ">
                        <h2>YPA Theatre</h2>
                        <h2>YPA Theatre</h2>

                    </div>
                </h1>
                <p class="text-lg mt-4 text-slate-600 max-w-xl">
                    Street theatre, being an impactful and accessible form of communication, allows Youth Power Association
                    to reach diverse audiences in urban and rural settings. Through compelling and thought-provoking
                    performances, the NGO strives to inform and educate the public about pressing social issues, promote
                    health awareness, and advocate for the protection of the environment.
                </p>
                <div class="mt-6 flex flex-col sm:flex-row gap-3"> <button
                        class="flex items-center gap-4 register-form-waitlist rounded-md bg-black px-6 py-3 text-white">
                        <img src="/uploads/event-svgrepo-com.svg" alt=""
                            class="inline-block h-5 w-5 fill-slate-50" />
                        <p>Register in Waitlist</p>
                    </button> <a href="/donate/youth_development" rel="noopener" target="_blank"
                        class="rounded text-center transition text-orange-400 focus-visible:ring-2 ring-offset-2 ring-gray-200 px-5 py-2.5 bg-white border-2 border-orange-300 hover:bg-gray-100 flex gap-1 items-center justify-center">
                        <svg mlns="http://www.w3.org/2000/svg" class="text-orange-300  fill-orange-300 w-4 h-4"
                            viewBox="0 0 50 50">

                            <g id="Solid">

                                <path
                                    d="M10.99548,10.55878A11.46414,11.46414,0,0,1,10,5.28037c.08534-2.19357,2.48223-2.63247,3.69878-.99131C14.19189,4.78223,14.43408,5,15,5c.562,0,.80273-.2168,1.293-.707a3.48028,3.48028,0,0,1,5.41406,0C22.19727,4.7832,22.438,5,23,5c.561,0,.80176-.2168,1.293-.70789,1.2293-1.63868,3.61325-1.2208,3.70693.98816a11.46964,11.46964,0,0,1-.99026,5.28138A3.95443,3.95443,0,0,0,25,10H13A3.95472,3.95472,0,0,0,10.99548,10.55878ZM25,12H13a2.00229,2.00229,0,0,0-2,2v2a2.00229,2.00229,0,0,0,2,2H25a2.00229,2.00229,0,0,0,2-2V14A2.00229,2.00229,0,0,0,25,12Zm5-6a12.90894,12.90894,0,0,1-.63824,4H37a3.95443,3.95443,0,0,1,2.0097.56165A11.47054,11.47054,0,0,0,40,5.28027c-.09082-2.20782-2.48-2.62678-3.70693-.98816C35.80176,4.7832,35.561,5,35,5c-.562,0-.80273-.2168-1.293-.707A3.56363,3.56363,0,0,0,31,3a3.21854,3.21854,0,0,0-1.48846.34412A4.94335,4.94335,0,0,1,30,6Zm7,6H28.44366A3.95376,3.95376,0,0,1,29,14v2a3.95376,3.95376,0,0,1-.55634,2H37a2.00229,2.00229,0,0,0,2-2V14A2.00229,2.00229,0,0,0,37,12Zm2.42731,7.15717A3.96075,3.96075,0,0,1,37,20H30.76923A26.92507,26.92507,0,0,1,36,35a12.689,12.689,0,0,1-7.14264,11.90381C29.55267,46.96088,30.262,47,31,47c9.39258,0,15-4.48633,15-12A24.90006,24.90006,0,0,0,39.42731,19.15717ZM26.994,16.04236C26.99432,16.0282,27,16.01416,27,16h-.056C26.96106,16.01343,26.97693,16.02887,26.994,16.04236Zm.43335,3.11481A3.96075,3.96075,0,0,1,25,20H13a3.96075,3.96075,0,0,1-2.42731-.84283A24.90006,24.90006,0,0,0,4,35c0,5.95239,3.53,9.9942,9.66241,11.42126C11.43127,43.98712,10,40.0451,10,35.5a1,1,0,0,1,2,0C12,41.7334,15.20557,47,19,47s7-5.2666,7-11.5a1,1,0,0,1,2,0c0,4.5451-1.43121,8.48712-3.66235,10.92126C30.47,44.9942,34,40.95239,34,35A24.90006,24.90006,0,0,0,27.42731,19.15717Z" />

                            </g>

                        </svg>
                        Donate
                    </a> </div>
            </div>
        </main>
        <div class="mt-16 md:mt-0">
            <h2 class="text-4xl lg:text-5xl font-bold lg:tracking-tight">
                How we reach our idea to people ?
            </h2>
            <p class="text-lg mt-4 text-slate-600">
                Astro comes batteries included. It takes the best parts of state-of-the-art
                tools and adds its own innovations.
            </p>
        </div>
        <div class="grid sm:grid-cols-2 md:grid-cols-3 mt-16 gap-16">
            <div class="flex gap-4 items-start">
                <div class="mt-1 bg-black rounded-full  p-2 w-8 h-8 shrink-0"> <svg width="1em" height="1em"
                        viewBox="0 0 24 24" class="text-white" data-icon="bx:bxs-briefcase">
                        <symbol id="ai:bx:bxs-briefcase">
                            <path
                                d="M20 6h-3V4c0-1.103-.897-2-2-2H9c-1.103 0-2 .897-2 2v2H4c-1.103 0-2 .897-2 2v3h20V8c0-1.103-.897-2-2-2zM9 4h6v2H9V4zm5 10h-4v-2H2v7c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2v-7h-8v2z"
                                fill="currentColor"></path>
                        </symbol>
                        <use xlink:href="#ai:bx:bxs-briefcase"></use>
                    </svg> </div>
                <div>
                    <h3 class="font-semibold text-lg ">GROUND WATER WEEK EVENTS </h3>
                    <p class="text-slate-500 mt-2 text-sm leading-relaxed">On the occasion of Ground Water Week (16th-22nd
                        July,
                        2021), Online Poetry Writing and Drawing Competition
                        were conducted by YPA. It was sought as a way for having the voice of youth heard. In the alarming
                        time of
                        climate crisis and environment degradation, YPA had taken steps to register its participation to
                        face the global
                        situations and had worked towards its solution through youth's engagement</p>
                </div>
            </div>
            <div class="flex gap-4 items-start">
                <div class="mt-1 bg-black rounded-full  p-2 w-8 h-8 shrink-0"> <svg width="1em" height="1em"
                        viewBox="0 0 24 24" class="text-white" data-icon="bx:bxs-window-alt">
                        <symbol id="ai:bx:bxs-window-alt">
                            <path
                                d="M20 3H4c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zm-3 3h2v2h-2V6zm-3 0h2v2h-2V6zM4 19v-9h16.001l.001 9H4z"
                                fill="currentColor"></path>
                        </symbol>
                        <use xlink:href="#ai:bx:bxs-window-alt"></use>
                    </svg> </div>
                <div>
                    <h3 class="font-semibold text-lg">JAL HAI TO KAL HAI EVENT</h3>
                    <p class="text-slate-500 mt-2 leading-relaxed">The government has been implementing numerous policies
                        and
                        programmes to address the issue of water conservation, but every
                        action begins with us. The "Jal Hai To Kal Hai" was used to promote
                        water conservation in eastern Uttar Pradesh. The fact that only 1% of
                        the water on Earth is fit for drinking and because of it, for
                        preservation of the ecosystem and for maintaining water clean and
                        pure, water conservation is essential</p>
                </div>
            </div>
            <div class="flex gap-4 items-start">
                <div class="mt-1 bg-black rounded-full  p-2 w-8 h-8 shrink-0"> <svg width="1em" height="1em"
                        viewBox="0 0 24 24" class="text-white" data-icon="bx:bxs-data">
                        <symbol id="ai:bx:bxs-data">
                            <path
                                d="M20 6c0-2.168-3.663-4-8-4S4 3.832 4 6v2c0 2.168 3.663 4 8 4s8-1.832 8-4V6zm-8 13c-4.337 0-8-1.832-8-4v3c0 2.168 3.663 4 8 4s8-1.832 8-4v-3c0 2.168-3.663 4-8 4z"
                                fill="currentColor"></path>
                            <path d="M20 10c0 2.168-3.663 4-8 4s-8-1.832-8-4v3c0 2.168 3.663 4 8 4s8-1.832 8-4v-3z"
                                fill="currentColor"></path>
                        </symbol>
                        <use xlink:href="#ai:bx:bxs-data"></use>
                    </svg> </div>
                <div>
                    <h3 class="font-semibold text-lg"> SIGNATURE CAMPAIGN AND PAMPHLET DISTRIBUTION</h3>
                    <p class="text-slate-500 mt-2 leading-relaxed">In this campaign, 500 persons who were in attendance at
                        Gorakhpur's Nauka Vihar took an oath to do their part to
                        prevent cancer. After performing street plays, YPA volunteers distributed pamphlets, which included
                        information
                        on cancer and its numerous aspects of symptoms, treatment, prevention, and cure, in Gorakhpur and
                        West
                        Champaran as well. </p>
                </div>
            </div>
            <div class="flex gap-4 items-start">
                <div class="mt-1 bg-black rounded-full  p-2 w-8 h-8 shrink-0"> <svg width="1em" height="1em"
                        viewBox="0 0 24 24" class="text-white" data-icon="bx:bxs-bot">
                        <symbol id="ai:bx:bxs-bot">
                            <path
                                d="M21 10.975V8a2 2 0 0 0-2-2h-6V4.688c.305-.274.5-.668.5-1.11a1.5 1.5 0 0 0-3 0c0 .442.195.836.5 1.11V6H5a2 2 0 0 0-2 2v2.998l-.072.005A.999.999 0 0 0 2 12v2a1 1 0 0 0 1 1v5a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-5a1 1 0 0 0 1-1v-1.938a1.004 1.004 0 0 0-.072-.455c-.202-.488-.635-.605-.928-.632zM7 12c0-1.104.672-2 1.5-2s1.5.896 1.5 2s-.672 2-1.5 2S7 13.104 7 12zm8.998 6c-1.001-.003-7.997 0-7.998 0v-2s7.001-.002 8.002 0l-.004 2zm-.498-4c-.828 0-1.5-.896-1.5-2s.672-2 1.5-2s1.5.896 1.5 2s-.672 2-1.5 2z"
                                fill="currentColor"></path>
                        </symbol>
                        <use xlink:href="#ai:bx:bxs-bot"></use>
                    </svg> </div>
                <div>
                    <h3 class="font-semibold text-lg">KAVYA SPANDAN</h3>
                    <p class="text-slate-500 mt-2 leading-relaxed"> POETRY (Kavya), influx of deep and inspirational
                        sentiments wrapped in the sheet of ornate words from the
                        heart of a poet, is one of the best literary genre, whose tune holds a capacity to leave a deep
                        impression on the
                        audience mind. Poets have occasionally helped throughout Indian history by organising societal
                        messages into
                        poetry in order to transmit them effectively</p>
                </div>
            </div>
            <div class="flex gap-4 items-start">
                <div class="mt-1 bg-black rounded-full  p-2 w-8 h-8 shrink-0"> <svg width="1em" height="1em"
                        viewBox="0 0 24 24" class="text-white" data-icon="bx:bxs-file-find">
                        <symbol id="ai:bx:bxs-file-find">
                            <path
                                d="M6 22h12c.178 0 .348-.03.512-.074l-3.759-3.759A4.966 4.966 0 0 1 12 19c-2.757 0-5-2.243-5-5s2.243-5 5-5s5 2.243 5 5a4.964 4.964 0 0 1-.833 2.753l3.759 3.759c.044-.164.074-.334.074-.512V8l-6-6H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2z"
                                fill="currentColor"></path>
                            <circle cx="12" cy="14" r="3" fill="currentColor"></circle>
                        </symbol>
                        <use xlink:href="#ai:bx:bxs-file-find"></use>
                    </svg> </div>
                <div>
                    <h3 class="font-semibold text-lg">RAISING AWARENESS THROUGH STREET PLAYS</h3>
                    <p class="text-slate-500 mt-2 leading-relaxed">Street theatre, being an impactful and accessible form
                        of
                        communication, allows Youth Power Association to reach diverse audiences in urban and rural
                        settings. Through compelling and thought-provoking performances, the NGO strives to inform and
                        educate the public about pressing social issues, promote health awareness, and advocate for the
                        protection of the environment.</p>
                </div>
            </div>
            <div class="flex gap-4 items-start">
                <div class="mt-1 bg-black rounded-full  p-2 w-8 h-8 shrink-0"> <svg width="1em" height="1em"
                        viewBox="0 0 24 24" class="text-white" data-icon="bx:bxs-user">
                        <symbol id="ai:bx:bxs-user">
                            <path
                                d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2S7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h17z"
                                fill="currentColor"></path>
                        </symbol>
                        <use xlink:href="#ai:bx:bxs-user"></use>
                    </svg> </div>
                <div>
                    <h3 class="font-semibold text-lg">SOCIAL MEDIA COMMUNITY</h3>
                    <p class="text-slate-500 mt-2 leading-relaxed">Through our social plateform running ads , reel , post
                        help YPA to reach people directly.</p>
                </div>
            </div>
        </div>
    </div>
    @include('components.blog', ['type' => 'water-conservation'])
@endsection
