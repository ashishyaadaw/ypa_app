@extends('pages.mediacorner.layout')
@section('title', $title)
@section('file', $title)
@section('folder', $folder)

@section('page-content')
    <!-- Add custome page content here -->
    <!-- <h1 class="text-center text-slate-900 text-5xl mt-10 font-bold">In the NEWS</h1> -->
    <br>


    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <div class="grid gap-4">
            <div>
                <img class="h-auto max-w-full rounded-lg" src="/uploads/cutouts/news (1).jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="/uploads/cutouts/news (2).jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="/uploads/cutouts/news (3).jpg" alt="">
            </div>
        </div>
        <div class="grid gap-4">
            <div>
                <img class="h-auto max-w-full rounded-lg" src="/uploads/cutouts/news (4).jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="/uploads/cutouts/news (5).jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="/uploads/cutouts/news (6).jpg" alt="">
            </div>
        </div>
        <div class="grid gap-4">
            <div>
                <img class="h-auto max-w-full rounded-lg" src="/uploads/cutouts/news (7).jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="/uploads/cutouts/news (8).jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="/uploads/cutouts/news (9).jpg" alt="">
            </div>
        </div>
        <div class="grid gap-4">
            <div>
                <img class="h-auto max-w-full rounded-lg" src="/uploads/cutouts/news (10).jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="/uploads/cutouts/news (11).jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="/uploads/cutouts/news (12).jpg" alt="">
            </div>
        </div>
    </div>

@endsection
