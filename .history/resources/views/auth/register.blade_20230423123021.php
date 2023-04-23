@extends('main/layouts/app')

@section('content')
@include('main/partials/smallheader')

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
                    <h2>creer votre compte</h2>
                    <div class="separator"></div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12">
                <div class="gray-form">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Nom d'utilisateur* </label>
                            <input id="name" class="form-control" type="text" placeholder="Nom Prénom" name="name" required autofocus>
                        </div>

                        <!-- Email Address -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email* </label>
                            <input id="email" class="form-control" type="email" placeholder="Email" name="email" required>
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Mot de passe (minimum 8 caractères)*</label>
                            <input id="password" class="form-control" type="password" placeholder="Mot de passe" name="password" required>
                        </div>

                        <!-- Confirm Password -->
                        <div class="mb-3">
                            <div class="d-flex">
                                <label for="password_confirmation" class="form-label">Confirmez mot de passe*&nbsp;</label>
                                <div id="pswdlabel"></div>
                            </div>
                            <input id="password_confirmation" class="form-control" onblur="pswdCheck()" type="password" placeholder="Confirmez mot de passe" name="password_confirmation" required>
                        </div>

                        <!-- Company name -->
                        <div class="mb-3">
                            <label for="company" class="form-label">Nom société </label>
                            <input id="company" class="form-control" type="text" placeholder="Nom société" name="company">
                        </div>

                        <!-- Company vat -->
                        <div class="mb-3">
                            <label for="vat" class="form-label">Numéro de TVA(facultatif) </label>
                            <input id="vat" class="form-control" type="text" placeholder="Nom société" name="vat">
                        </div>

                        <!-- Adres -->
                        <div class="mb-3">
                            <label for="adres" class="form-label">Rue et numéro* </label>
                            <input id="adres" class="form-control" type="text" placeholder="Rue et numéro" name="adres" required>
                        </div>
                        <!-- ZipCode -->
                        <div class="mb-3">
                            <label for="zipCode" class="form-label">Code postal* </label>
                            <input id="zipCode" class="form-control" type="text" placeholder="Code postal" name="zipCode" required>
                        </div>
                        <!-- Country -->
                        <div class="mb-3">
                            <label for="country" class="form-label">Country* </label>
                            <input id="country" class="form-control" type="text" placeholder="Country" name="country" required>
                        </div>
                        <!-- Phone -->
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone* </label>
                            <input id="phone" class="form-control" type="text" placeholder="Phone" name="phone" required>
                        </div>
                        <!-- Max Budget -->
                        <div class="mb-3">
                            <label for="maxBudget" class="form-label">Budget Maximum par véhicule* </label>
                            <input id="maxBudget" class="form-control" type="text" placeholder="Budget maximum" name="maxBudget" required>
                        </div>
                        <!-- Max Year -->
                        <div class="mb-3">
                            <label for="maxYear" class="form-label">Age maximum des véhicules* </label>
                            <input id="maxYear" class="form-control" type="text" placeholder="Age maximum" name="maxYear" required>
                        </div>

                        <div class="mb-4">
                            <h5>Catégories de véhicules:</h5>
                            <div class="d-flex flex-wrap align-items-center">
                                @foreach($categories as $cat)
                                <div class="d-flex col-6 justify-content-start">
                                    <div class="px-3"><input style="font-size: 100px;" type="checkbox" id='categ' name='tableIdCat[]' value="{{ $cat->id }}"></div>
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
                                    <div class="px-3"><input type="checkbox" id='chassi' name='tableIdChassi[]' value="{{ $chassi->id }}"></div>
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
                                    <div class="px-3"><input type="checkbox" id='origin' name='tableIdOrigin[]' value="{{ $origin->id }}"></div>
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
                                    <div class="px-3"><input type="checkbox" id='class' name='tableIdClass[]' value="{{ $class->id }}"></div>
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
                                    <div class="px-3"><input type="checkbox" id='gearbox' name='tableIdGearbox[]' value="{{ $gearbox->id }}"></div>
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
                                    <div class="px-3"><input type="checkbox" id='contact' name='tableIdContact[]' value="{{ $contact->id }}"></div>
                                    <div><label for='contact'>{{$contact->name}}</label></div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="remember-checkbox">
                                <input type="checkbox" name="one" id="one" required />
                                <label for="one">J'ai lu et j'accepte la politique de confidentalité <a href="/privacy"> Politique de confidentalité</a></label>
                            </div>
                        </div>
                        <button type="submit" class="button red"> Créer un compte </button>
                        <p class="link">Avez-vous déjà un compte ? <a href="{{ route('login') }}"> Connectez-vous </a></p>
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