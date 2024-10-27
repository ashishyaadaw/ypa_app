@extends('pages.about.layout')

@section('title', $title)
@section('file',$title)
@section('folder',$folder)

@section('page-content')

<!-- <h1 class="text-center text-slate-900 text-5xl mt-10 font-bold uppercase">{{$title}}</h1> -->
<section class="relative py-20 xl:py-28 " id="features">
    <div class="container 2xl:max-w-[87.5rem] px-4 mx-auto">
        <div class="grid items-center grid-cols-1 gap-5 lg:grid-cols-2">
            <div class="text-center ltr:lg:text-left rtl:lg:text-right">
                <h1 class="mb-3 text-4xl font-medium !leading-snug capitalize lg:text-5xl">How YPA came to live</h1>
                <p class="leading-normal text-slate-500 dark:text-zink-300/50">YPA is the brainchild of Mr. Shiv Prasad
                    Shukla, who in his college days found that, there is a lack of such organization in which the
                    involvement of youth is major, in the eastern Uttar Pradesh. Being a Democratic Dividend country,
                    Mr. Shukla turned up with an idea of establishing such an organization that would be aiming for the
                    development of youth and channelizing the youth power. Thus, in the year 2018, the organization was
                    registered as Youth Power Association, which is efficiently and eminently run by youth and in line
                    with the National Youth Policy of 2014, YPA aims and involves the youth from 15 to 29 years of age
                    at major.</p>
            </div>
            <div>
                <div class="p-6 bg-orange-100 rounded-md dark:bg-zink-800/10 ltr:lg:ml-8 rtl:lg:mr-8">
                    <p class="mb-4 text-slate-500 dark:text-zink-300/50">" YPA strives to transform society where the
                        youth are capable to understand and recognize their true
                        potential, their rights to the fullest and their duties towards their environment, society and
                        nation. "</p>
                    <div class="flex items-center gap-3">
                        <img src="https://themesdesign.in/twito/html/assets/images/user-2.jpg" alt=""
                            class="rounded-full h-11 shrink-0">
                        <div class="grow">
                            <h6 class="mb-1">Shri. Shiv Prasad Shukla</h6>
                            <p class="text-15 text-slate-500 dark:text-zink-300/50">YPA President</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end grid-->

        <div class="grid items-center grid-cols-1 gap-5 mt-16 md:grid-cols-2 lg:grid-cols-3">
            <div class="bg-white p-1 rounded-md">
                <div class="mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        data-lucide="credit-card"
                        class="lucide lucide-credit-card w-12 h-12 stroke-1 fill-rose-200 text-rose-700 dark:fill-zink-900/40">
                        <rect width="20" height="14" x="2" y="5" rx="2"></rect>
                        <line x1="2" x2="22" y1="10" y2="10"></line>
                    </svg>
                </div>
                <h5 class="mb-2 text-xl">Vision</h5>
                <p class="text-slate-500 dark:text-zink-300/50">YPA strives to transform the society into a platform
                    where the youths are capable to understand and recognize their true potential and their rights to
                    the fullest, their duties towards their environment, society and nation, VPA believes in ancient
                    Indian notion of Vasudhaiva Kutumbam, that is, Whole World is One Family and therefore it aims to
                    bring positive changes in the world throughout.</p>
            </div>
            <div class="bg-white p-1 rounded-md">
                <div class="mb-4 ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        data-lucide="users"
                        class="lucide lucide-users w-12 h-12 stroke-1 fill-rose-200 text-rose-700 dark:fill-zink-900/40">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                </div>
                <h5 class="mb-2 text-xl">Mission</h5>
                <p class="text-slate-500 dark:text-zink-300/50">Support & aim nurturing emphatic young leaders and
                    provide opportunities to youth to advance their skills and sharpen their personality making them
                    more equitable, cooperative and sustainable, not just for themselves but also for the society,
                    nation and at global level. </p>
            </div>
            <div class="bg-white p-1 rounded-md">
                <div class="mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        data-lucide="line-chart"
                        class="lucide lucide-line-chart w-12 h-12 stroke-1 fill-rose-200 text-rose-700 dark:fill-zink-900/40">
                        <path d="M3 3v18h18"></path>
                        <path d="m19 9-5 5-4-4-3 3"></path>
                    </svg>
                </div>
                <h5 class="mb-2 text-xl">Weekly Reports</h5>
                <p class="text-slate-500 dark:text-zink-300/50">The report provides a breakdown of all the activities ,
                    events, workshops, and more by ypa. Our weekly avhievements , our voluteer discussion , meeting
                    report published in a specified week.</p>
            </div>
        </div>
        <!--end grid-->
    </div>
    <!--end container-->
</section>
@include('components.blog',["type"=>"How YPA came to live"])
@endsection