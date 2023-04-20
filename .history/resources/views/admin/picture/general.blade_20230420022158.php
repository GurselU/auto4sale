@extends('main.layouts.app')

@section('content')
<!--=================================
 header -->

<header id="header" class="topbar-dark">

    <div class="menu">
        <!-- menu start -->
        <nav id="menu" class="mega-menu">
            <!-- menu list items container -->
            <section class="menu-list-items">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 position-relative">
                            <!-- menu logo -->
                            <ul class="menu-logo">
                                <li>
                                    <a href="{{ url('') }}"><img id="logo_dark_img" src="{{asset('images/logo-dark.png')}}" alt="logo"> </a>
                                </li>
                            </ul>
                            <!-- menu links -->
                            <ul class="menu-links">
                                <!-- active class -->
                                <li><a class="bg-danger" href="{{route('car.index')}}">Véhicules</a></li>
                                <li class="{{ (request()->routeIs('picture.show', $car->id)) ? 'active' : '' }}"><a href="{{route('picture.show', $car->id)}}">General</a></li>
                                <li class="{{ (request()->routeIs('asset.picture')) ? 'active' : '' }}"><a href="{{route('asset.picture', $car->id)}}">Asset</a></li>
                                <li class="{{ (request()->routeIs('drowback.picture')) ? 'active' : '' }}"><a href="{{route('drowback.picture', $car->id)}}">Drowback</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </nav>
        <!-- menu end -->
    </div>
</header>

<!--=================================
 header -->
<div class="w-full p-4">
    <h1 class="font-bold text-xl text-center">Photos</h1>
    <div class="col-4">
        <div class="">
            <form method="POST" action="{{route('picture.store')}}" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <input type="file" name="file[]" multiple><br><br>
                <button type="submit" class="bg-success">Upload</button>
                <div hidden>
                    <label for="car_id">car_id</label>
                    <input type="text" id="car_id" value="{{$car->id}}" name="car_id">
                </div>
            </form>
        </div>
    </div>
    <div class="pt-4 w-100">
        @if(count($pictures) > 0)
        @foreach($pictures as $picture)
        <div class="w-100 d-flex justify-content-between">
            <div class="w-25"><img src="{{asset($picture->location)}}" name="{{$picture->name}}" class="w-100"></div>
            <div class="text-center lg:text-left">{{$picture->name}}</div>
            <div class="text-center lg:text-left">{{$picture->description}}</div>
            <div>
                <form action="{{ route('picture.destroy', $picture->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="bg-danger text-white" type="submit">Delete</button>
                </form>
            </div>
        </div>
        @endforeach
        @else
        <div colspan="5" class="text-center">No Table Data</div>
        @endif
    </div>
</div>







@endsection