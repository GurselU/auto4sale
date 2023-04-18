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
                <!-- active class -->
                @if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
                <li class="{{ (request()->routeIs('user.index')) ? 'active' : '' }}"><a href="{{route('user.index')}}">Utilisateurs</a></li>
                <li class="{{ (request()->routeIs('seller.create')) ? 'active' : '' }}"><a href="{{route('seller.create')}}">Formulaire</a></li>
                <li class="{{ (request()->routeIs('archive.index')) ? 'active' : '' }}"><a href="{{route('archive.index')}}">Archives</a></li>
                <li class="{{ (request()->routeIs('form.index')) ? 'active' : '' }}"><a href="{{route('form.index')}}">To Call</a></li>
                @endif
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
<section class="register-form page-section-ptb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="section-title">
                    <h2>creer votre compte</h2>
                    <div class="separator"></div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12">
                <div class="gray-form">
                    <form action="{{ route('seller.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="mb-3">
                            <label for="email" class="form-label">Email </label>
                            <input id="email" class="form-control" type="email" value="{{ old('email') }}" placeholder="Email" name="email">
                        </div>
                        
                        <div class="mb-3">
                            <label for="name" class="form-label">Nom Prénom </label>
                            <input id="name" class="form-control" type="text" value="{{ old('name') }}" placeholder="Nom Prénom" name="name">
                        </div>
                        
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone* </label>
                            <input id="phone" class="form-control" type="text" value="{{ old('phone') }}" placeholder="Phone" name="phone" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="adres" class="form-label">Adresse et numéro </label>
                            <input id="adres" class="form-control" type="text" value="{{ old('adres') }}" placeholder="Adresse et numéro" name="adres">
                        </div>
                        
                        <div class="mb-3">
                            <label for="zipCode" class="form-label">Code Postal </label>
                            <input id="zipCode" class="form-control" type="text" value="{{ old('zipCode') }}" placeholder="Code Postal" name="zipCode">
                        </div>
                        
                        <div class="mb-3">
                            <label for="country" class="form-label">Pays </label>
                            <input id="country" class="form-control" type="text" value="{{ old('country') }}" placeholder="Pays" name="country">
                        </div>

                        <button type="submit" class="button red"> Créer </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection