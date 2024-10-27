@extends('dashboard.layout')

@section('title', $title)
@section('file', $title)
@section('content')
    <h1 class="text-center  font-bold text-white"> Tables</h1>



@endsection
@push('script')
    $('.tables').children('span').removeClass('hidden');
    $('.tables').children('a').addClass('text-gray-800');
@endpush
