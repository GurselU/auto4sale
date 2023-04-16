@extends('main/layouts/app')
@section('content')
@include('main/partials/header')

@include('main/home/banner')
@include('main/home/about')
@include('main/home/choose')
@include('main/home/services')
@include('main/home/welcome')
@include('main/home/testimonials')
@include('main/home/form')
@include('main/home/newsletter')
@include('main/partials/backToTop')
@include('main/partials/footer')

@include('main/home/script')

@endsection