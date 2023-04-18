@extends('main/layouts/app')

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
                <li><a href="javascript:void(0)"> {{Auth::user()->name}} <i class="fa fa-angle-down fa-indicator"></i></a>
                  <!-- drop down multilevel  -->
                  <ul class="drop-down-multilevel">
                    <li><a href="{{route('profile.edit')}}">Profile</a></li>
                    <li>
                      <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="dropdown-item" type="submit">Se déconnecter</button>
                      </form>
                    </li>
                  </ul>
                </li>


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

@if (session()->has('error'))
<div class="bg-danger text-white">
    {{ session()->get('error') }}
</div>
@endif
<!--=================================
 register-form  -->

<section class="register-form page-section-ptb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="section-title">
                    <h2>modifiez vos donnees</h2>
                    <div class="separator"></div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12">
                <div class="gray-form">
                    <form method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                        @csrf
                        @method('patch')

                        <!-- Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Nom d'utilisateur* </label>
                            <input id="name" class="form-control" type="text" value="{{$user->name}}" name="name" required>
                        </div>

                        <!-- Email Address -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email* </label>
                            <input id="email" class="form-control" type="email" value="{{$user->email}}" name="email" required>
                        </div>

                        <!-- Company name -->
                        <div class="mb-3">
                            <label for="company" class="form-label">Nom société </label>
                            <input id="company" class="form-control" type="text" value="{{$user->company}}" name="company">
                        </div>

                        <!-- Company vat -->
                        <div class="mb-3">
                            <label for="vat" class="form-label">Numéro de TVA(facultatif) </label>
                            <input id="vat" class="form-control" type="text" value="{{$user->vat}}" name="vat">
                        </div>

                        <!-- Adres -->
                        <div class="mb-3">
                            <label for="adres" class="form-label">Rue et numéro* </label>
                            <input id="adres" class="form-control" type="text" value="{{$user->adres}}" name="adres" required>
                        </div>
                        <!-- ZipCode -->
                        <div class="mb-3">
                            <label for="zipCode" class="form-label">Code postal* </label>
                            <input id="zipCode" class="form-control" type="text" value="{{$user->zipCode}}" name="zipCode" required>
                        </div>
                        <!-- Country -->
                        <div class="mb-3">
                            <label for="country" class="form-label">Country* </label>
                            <input id="country" class="form-control" type="text" value="{{$user->country}}" name="country" required>
                        </div>
                        <!-- Phone -->
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone* </label>
                            <input id="phone" class="form-control" type="text" value="{{$user->phone}}" name="phone" required>
                        </div>
                        <!-- Max Budget -->
                        <div class="mb-3">
                            <label for="maxBudget" class="form-label">Budget Maximum par véhicule* </label>
                            <input id="maxBudget" class="form-control" type="text" value="{{$user->maxBudget}}" name="maxBudget" required>
                        </div>
                        <!-- Max Year -->
                        <div class="mb-3">
                            <label for="maxYear" class="form-label">Age maximum des véhicules* </label>
                            <input id="maxYear" class="form-control" type="text" value="{{$user->maxYear}}" name="maxYear" required>
                        </div>

                        <div class="mb-4">
                            <h5>Catégories de véhicules:</h5>
                            <div class="d-flex flex-wrap align-items-center">
                                @foreach($categories as $cat)
                                <div class="d-flex col-6 justify-content-start">
                                    <div class="px-3"><input type="checkbox" id='categ' name='tableIdCat[]' value="{{ $cat->id }}" {{$user->categories->where('categorie', '=', $cat->categorie)->count() == 1 ? 'checked' : ''}}></div>
                                    <div><label for='categ'>{{$cat->name}}</label></div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="mb-4">
                            <h5>Type de Chassi:</h5>
                            <div class="d-flex flex-wrap align-items-center">
                                @foreach($chassis as $chassi)
                                <div class="d-flex col-6 justify-content-start">
                                    <div class="px-3"><input type="checkbox" id='chassi' name='tableIdChassi[]' value="{{ $chassi->id }}" {{$user->chassis->where('chassi', '=', $chassi->chassi)->count() == 1 ? 'checked' : ''}}></div>
                                    <div><label for='chassi'>{{$chassi->name}}</label></div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="mb-4">
                            <h5>Origine des marques de véhicules:</h5>
                            <div class="d-flex flex-wrap align-items-center">
                                @foreach($carOrigins as $origin)
                                <div class="d-flex col-6 justify-content-start">
                                    <div class="px-3"><input type="checkbox" id='origin' name='tableIdOrigin[]' value="{{ $origin->id }}" {{$user->carOrigins->where('origin', '=', $origin->origin)->count() == 1 ? 'checked' : ''}}></div>
                                    <div><label for='origin'>{{$origin->name}}</label></div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="mb-4">
                            <h5>Emission co²:</h5>
                            <div class="d-flex flex-wrap align-items-center">
                                @foreach($emissionClasses as $class)
                                <div class="d-flex col-6 justify-content-start">
                                    <div class="px-3"><input type="checkbox" id='class' name='tableIdClass[]' value="{{ $class->id }}" {{$user->emissionClasses->where('class', '=', $class->class)->count() == 1 ? 'checked' : ''}}></div>
                                    <div><label for='class'>{{$class->name}}</label></div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="mb-4">
                            <h5>Boite de vitesse:</h5>
                            <div class="d-flex flex-wrap align-items-center">
                                @foreach($gearboxes as $gearbox)
                                <div class="d-flex col-6 justify-content-start">
                                    <div class="px-3"><input type="checkbox" id='gearbox' name='tableIdGearbox[]' value="{{ $gearbox->id }}" {{$user->gearboxes->where('gearbox', '=', $gearbox->gearbox)->count() == 1 ? 'checked' : ''}}></div>
                                    <div><label for='gearbox'>{{$gearbox->name}}</label></div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="mb-5">
                            <h5>Par quel moyen souhaitez-vous être informé des nouveaux véhicules ?</h5>
                            <div class="d-flex flex-wrap align-items-center">
                                @foreach($contacts as $contact)
                                <div class="d-flex col-6 justify-content-start">
                                    <div class="px-3"><input type="checkbox" id='contact' name='tableIdContact[]' value="{{ $contact->id }}" {{$user->contacts->where('contact', '=', $contact->contact)->count() == 1 ? 'checked' : ''}}></div>
                                    <div><label for='contact'>{{$contact->name}}</label></div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <button type="submit" class="button red"> Enregistrer </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!--=================================
 register-form  -->


<script>
    function pswdCheck() {
        var pw1 = document.getElementById("password").value;
        var pw2 = document.getElementById("password_confirmation").value;
        var pswdlabel = document.getElementById("pswdlabel");
        if (pw1 != pw2) {
            console.log(pw1);
            console.log(pw2);
            pswdlabel.classList.remove('text-success');
            pswdlabel.classList.add('text-danger');
            document.getElementById('pswdlabel').innerHTML = '(Les mots de passe que vous avez entrés ne sont pas identiques.)';
        } else {
            pswdlabel.classList.remove('text-danger');
            pswdlabel.classList.add('text-success');
            document.getElementById('pswdlabel').innerHTML = '(Confirmation bon)';
        }
    }
</script>
@endsection