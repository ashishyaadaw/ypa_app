@extends('dashboard.layout')

@section('title', $title)
@section('file', $title)
@section('content')
    <h1 class="text-center  font-bold text-white">DISTRIC COORDINATOR</h1>



@endsection
@push('script')
    $('.forms').children('span').removeClass('hidden');
    $('.forms').children('a').addClass('text-gray-800');
    $('.forms > ul').toggleClass('hidden');
    $('.forms > ul > li:nth-child(6)').css('color', '#9333EA');
@endpush
