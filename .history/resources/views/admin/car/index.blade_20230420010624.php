@extends('main.layouts.app')

@section('content')
@include('main.partials.loader')
@include('admin.partials.header')

@if (session()->has('error'))
<div class="rounded bg-danger p-3 mt-3 text-white fw-bold">
    {{ session()->get('error') }}
</div>
@endif
@if (session()->has('success'))
<div class="rounded bg-success p-3 mt-3 text-white fw-bold">
    {{ session()->get('success') }}
</div>
@endif

<!--=================================
product-listing  -->

<section class="product-listing page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                @foreach($cars as $car)
                <div class="car-grid position-relative">
                    <div class="position-absolute bottom-0 end-0 px-2 py-1 zindex-tooltip text-white {{$car->status == 'available' ? 'bg-success' : ''}}{{$car->status == 'reserved' ? 'bg-warning' : ''}}{{$car->status == 'sold' ? 'bg-danger' : ''}}">{{$car->status}}</div>
                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <div class="car-item gray-bg text-center">
                                <a href="{{ route('offer.edit', $car->id) }}" class="car-image">
                                    <img class="img-fluid" src="{{asset($pictures->where('car_id', $car->id)->first()->location ?? 'images/logo-dark.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <div class="car-details">
                                <div class="car-title">
                                    <a href="{{ route('offer.edit', $car->id) }}">{{$car->mark}} {{$car->model}}</a>
                                    <p>{{$car->miniDescription}}</p>
                                </div>
                                <div class="price">
                                    <span class="new-price">{{$allOffers->where('car_id', $car->id)->count()}} offres </span>
                                    <a class="button red float-end" href="{{ route('offer.edit', $car->id) }}">Détails</a>
                                    @if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2 || Auth::user()->role_id == 3)
                                    <a class="button bg-success float-end" href="{{ route('offer.show', $car->id) }}">Offres</a>
                                    @endif
                                    @if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
                                    <a class="button bg-primary float-end" onclick="adminView(<?php echo json_encode($car->id); ?>)">A</a>
                                    @endif
                                </div>

                                <div class="car-list pb-3">
                                    <ul class="list-inline">
                                        <li><i class="fa fa-calendar"></i> {{$car->registration}}</li>
                                        <li><i class="glyph-icon flaticon-gearstick"></i> {{$gearboxes->where('id', $car->gearbox_id)->first()->name}} </li>
                                        <li><i class="fa fa-road"></i> {{$car->mileage}}km</li>
                                        <li><i class="glyph-icon flaticon-gas-station"></i> {{$emissionClasses->where('id', $car->emission_class_id)->first()->name}}</li>
                                        <li><i class="fa fa-dashboard"></i> {{ floor($car->power/1.26) }}kw/{{ $car->power }}ch</li>
                                    </ul>
                                </div>
                                @if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
                                <div id="car{{$car->id}}" hidden>
                                    <div class="pl-24 d-flex flex-wrap">
                                        <div class="m-2 px-2 py-1 border bg-primary">
                                            <a class="text-light" href="{{ route('picture.show', $car->id) }}">Photos</a>
                                        </div>
                                        <div class="m-2 px-2 py-1 border bg-primary">
                                            <a class="text-light" href="{{ route('car.edit', $car->id) }}">Modifier</a>
                                        </div>
                                        <div class="m-2 px-2 py-1 border bg-primary">
                                            <a class="text-light" href="{{ route('car.show', $car->id) }}">{{ $car->status == 'available' ? 'Available' : '' }}{{ $car->status == 'reserved' ? 'Réservé' : '' }}{{ $car->status == 'sold' ? 'Vendu' : '' }}</a>
                                        </div>
                                        <div class="m-2 px-2 py-1 border bg-primary">
                                            <a class="text-light" href="{{ route('newsletter.show', $car->id) }}">Envoyer</a>
                                        </div>
                                        <div class="m-2 px-2 py-1 border bg-primary">
                                            <a class="text-light" href="{{ route('archive.edit', $car->id) }}">Archiver</a>
                                        </div>
                                        <form class="m-2 px-2 py-1 border" action="{{ route('countdown.edit', $car->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('GET')
                                            <div>
                                                <input type="number" class="w-12 h-6" name="timer">
                                                <button class="bg-primary text-light" type="submit">Start Timer</a>
                                            </div>
                                        </form>




                                        @endif

                                    </div>
                                    @if(Auth::user()->role_id == 1)
                                    <div class="d-flex">
                                        <div class="m-2 px-2 py-1 border bg-warning">
                                            <a href="{{ route('realoffers', $car->id) }}">View</a>
                                        </div>
                                        <form action="{{ route('seller.destroy', $car->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="m-2 px-2 py-1 border bg-danger text-dark" type="submit">Supprimer</button>
                                        </form>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!--=================================
product-listing  -->

@include('main.partials.backToTop')
@include('main.partials.footer')
<script>
    function adminView(id) {
        element = document.getElementById("car" + id);
        console.log(element);
        if (element.hidden == true) {
            element.hidden = false;
        } else {
            element.hidden = true;
        }
    }
</script>
@endsection