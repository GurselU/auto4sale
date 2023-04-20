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
                                <li><a href="{{route('car.index')}}">Véhicules</a></li>
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
    <h1 class="font-bold text-xl text-center">Photos Imperfection</h1>
    <div class="col-4">
        <div>
            <form method="POST" action="{{route('drowbackPicture.store')}}" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <input type="file" name="drowback"><br><br>
                <div>
                    <label for="descriptionDrowback">descriptionDrowback</label>
                    <input type="text" id="descriptionDrowback" name="descriptionDrowback">
                </div>
                <button type="submit" class="bg-success">Upload</button>

                <div hidden>
                    <label for="car_id">car_id</label>
                    <input type="text" id="car_id" value="{{$car->id}}" name="car_id">
                </div>
            </form>
        </div>
    </div>
    <div class="pt-6 w-full">
        @if(count($drowbackPictures) > 0)
        @foreach($drowbackPictures as $drowback)
        <div class="w-100 d-flex justify-content-between">
            <div class="w-full lg:w-1/3"><img src="{{asset($drowback->location)}}" name="{{$drowback->name}}" class="w-full"></div>
            <div class="text-center lg:text-left">{{$drowback->name}}</div>
            <div class="text-center lg:text-left">{{$drowback->description}}</div>
            <div>
                <form action="{{ route('drowbackPicture.destroy', $drowback->id) }}" method="post">
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