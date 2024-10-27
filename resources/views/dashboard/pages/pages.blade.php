@extends('dashboard.layout')

@section('title', $title)
@section('file', $title)
@section('content')
    <h1 class="text-center  font-bold text-white"> Pages</h1>



@endsection
@push('script')
    $('.pages').children('span').removeClass('hidden');
    $('.pages').children('a').addClass('text-gray-800');
@endpush
