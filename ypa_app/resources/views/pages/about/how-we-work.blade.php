@extends('pages.about.layout')

@section('title', $title)
@section('file', $title)
@section('folder', $folder)

@section('page-content')

    <!-- <h1 class="text-center text-slate-900 text-5xl mt-10 font-bold uppercase">{{ $title }}</h1> -->
    <section class="overflow-hidden  py-8 sm:py-16">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div
                class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                <div class="lg:pr-8 lg:pt-4">
                    <div class="lg:max-w-lg">
                        <h2 class="text-base font-semibold leading-7 text-indigo-600">Let&apos;s see </h2>
                        <p class="mt-2 text-4xl font-bold tracking-tight text-gray-900 sm:text-4xl">How we work</p>
                        <p class="mt-6 text-lg leading-8 text-gray-600">With the cooperation and coordination of the
                            district administration and with the participation of the local people and community, the Youth
                            Power Association along with the youth brigade is doing the work of public awareness, public
                            sensitization and empowerment through street plays.
                        </p>
                        <dl class="mt-10 max-w-xl space-y-8 text-base leading-7 text-gray-600 lg:max-w-none">
                            <div class="relative pl-9">
                                <dt class="inline font-semibold text-gray-900"><svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                        class="absolute left-1 top-1 h-5 w-5 text-indigo-600">
                                        <path
                                            d="M3.196 12.87l-.825.483a.75.75 0 000 1.294l7.25 4.25a.75.75 0 00.758 0l7.25-4.25a.75.75 0 000-1.294l-.825-.484-5.666 3.322a2.25 2.25 0 01-2.276 0L3.196 12.87z">
                                        </path>
                                        <path
                                            d="M3.196 8.87l-.825.483a.75.75 0 000 1.294l7.25 4.25a.75.75 0 00.758 0l7.25-4.25a.75.75 0 000-1.294l-.825-.484-5.666 3.322a2.25 2.25 0 01-2.276 0L3.196 8.87z">
                                        </path>
                                        <path
                                            d="M10.38 1.103a.75.75 0 00-.76 0l-7.25 4.25a.75.75 0 000 1.294l7.25 4.25a.75.75 0 00.76 0l7.25-4.25a.75.75 0 000-1.294l-7.25-4.25z">
                                        </path>
                                    </svg>In collaboration and coordination with District Administration.
                                </dt>
                                <dd class="inline">Inspired by Sendgrid, Mailchimp, and Postmark, we allow you to create and
                                    apply
                                    templated content to your media.
                                </dd>
                            </div>
                            <div class="relative pl-9">
                                <dt class="inline font-semibold text-gray-900">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true" class="absolute left-1 top-1 h-5 w-5 text-indigo-600">
                                        <path
                                            d="M3.196 12.87l-.825.483a.75.75 0 000 1.294l7.25 4.25a.75.75 0 00.758 0l7.25-4.25a.75.75 0 000-1.294l-.825-.484-5.666 3.322a2.25 2.25 0 01-2.276 0L3.196 12.87z">
                                        </path>
                                        <path
                                            d="M3.196 8.87l-.825.483a.75.75 0 000 1.294l7.25 4.25a.75.75 0 00.758 0l7.25-4.25a.75.75 0 000-1.294l-.825-.484-5.666 3.322a2.25 2.25 0 01-2.276 0L3.196 8.87z">
                                        </path>
                                        <path
                                            d="M10.38 1.103a.75.75 0 00-.76 0l-7.25 4.25a.75.75 0 000 1.294l7.25 4.25a.75.75 0 00.76 0l7.25-4.25a.75.75 0 000-1.294l-7.25-4.25z">
                                        </path>
                                    </svg>
                                    Mass-Awareness through Street Plays – “Nukkad – Natak”
                                </dt>
                                <dd class="inline">A simple REST API that allows you to create, generate, and manage your
                                    content.</dd>
                            </div>
                            <div class="relative pl-9">
                                <dt class="inline font-semibold text-gray-900"><svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                        class="absolute left-1 top-1 h-5 w-5 text-indigo-600">
                                        <path
                                            d="M3.196 12.87l-.825.483a.75.75 0 000 1.294l7.25 4.25a.75.75 0 00.758 0l7.25-4.25a.75.75 0 000-1.294l-.825-.484-5.666 3.322a2.25 2.25 0 01-2.276 0L3.196 12.87z">
                                        </path>
                                        <path
                                            d="M3.196 8.87l-.825.483a.75.75 0 000 1.294l7.25 4.25a.75.75 0 00.758 0l7.25-4.25a.75.75 0 000-1.294l-.825-.484-5.666 3.322a2.25 2.25 0 01-2.276 0L3.196 8.87z">
                                        </path>
                                        <path
                                            d="M10.38 1.103a.75.75 0 00-.76 0l-7.25 4.25a.75.75 0 000 1.294l7.25 4.25a.75.75 0 00.76 0l7.25-4.25a.75.75 0 000-1.294l-7.25-4.25z">
                                        </path>
                                    </svg>Through mass sensitization & empowerment of young brigade</dt>
                                <dd class="inline">Documented and easy to use, we make it easy to integrate with your
                                    existing workflow.
                                </dd>
                            </div>
                            <div class="relative pl-9">
                                <dt class="inline font-semibold text-gray-900"><svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                        class="absolute left-1 top-1 h-5 w-5 text-indigo-600">
                                        <path
                                            d="M3.196 12.87l-.825.483a.75.75 0 000 1.294l7.25 4.25a.75.75 0 00.758 0l7.25-4.25a.75.75 0 000-1.294l-.825-.484-5.666 3.322a2.25 2.25 0 01-2.276 0L3.196 12.87z">
                                        </path>
                                        <path
                                            d="M3.196 8.87l-.825.483a.75.75 0 000 1.294l7.25 4.25a.75.75 0 00.758 0l7.25-4.25a.75.75 0 000-1.294l-.825-.484-5.666 3.322a2.25 2.25 0 01-2.276 0L3.196 8.87z">
                                        </path>
                                        <path
                                            d="M10.38 1.103a.75.75 0 00-.76 0l-7.25 4.25a.75.75 0 000 1.294l7.25 4.25a.75.75 0 00.76 0l7.25-4.25a.75.75 0 000-1.294l-7.25-4.25z">
                                        </path>
                                    </svg>Involvement of local people and community.</dt>
                                <dd class="inline">Documented and easy to use, we make it easy to integrate with your
                                    existing workflow.
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div><img src="/uploads/platation.webp" alt="Product screenshot"
                    class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem] md:-ml-4 lg:-ml-0"
                    width="2432" height="1442">
            </div>
        </div>
    </section>
@endsection
