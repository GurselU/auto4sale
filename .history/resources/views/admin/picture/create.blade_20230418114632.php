@extends('main.layouts.app')

@section('content')
<!--=================================
 header -->

 <header id="header" class="topbar-dark">
  <div class="topbar">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="topbar-left text-lg-start text-center">
            <ul class="list-inline">
              <li> <i class="fa fa-envelope-o"> </i> info@autoforsale.be</li>
              <li> <i class="fa fa-clock-o"></i> Lundi - Dimanche 08:00 - 22:00</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="topbar-right text-lg-end text-center">
            <ul class="list-inline">
              <li> <i class="fa fa-phone"></i> +32 491 76 77 28</li>
              <li><a href="https://www.facebook.com/profile.php?id=100090436626844"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://instagram.com/auto4sale.be?igshid=YmMyMTA2M2Y="><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--=================================
 mega menu -->

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
                <li class="{{ (request()->routeIs('car.index')) ? 'active' : '' }}"><a href="{{route('car.index')}}">Véhicules</a></li>
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
<div class="container">
    <h1 class="page-header text-center">Uploader les photos</h1>
    <div class="col-4">
        <div class="card">
            <div class="card-header">Upload Form</div>
            <div class="card-body">
                <form method="POST" action="{{route('picture.store')}}" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <input type="file" name="file[]" multiple><br><br>
                    <button type="submit" class="btn btn-primary">Upload</button>
                    <div class="mb-3 d-none">
                        <label for="car_id" class="block font-medium text-sm text-gray-700 dark:text-gray-300">car_id</label>
                        <input type="text" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" id="car_id" value="{{$car->id}}" name="car_id">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
