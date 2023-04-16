@extends('main/layouts/app')
@section('content')
@include('main/partials/header')

@include('main/dealer/banner')
@include('main/dealer/about')
@include('main/dealer/services')
@include('main/partials/backToTop')
@include('main/partials/footer')

@include('main/dealer/script')

@endsection