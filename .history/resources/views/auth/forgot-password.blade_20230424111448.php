@extends('main/layouts/app')

@section('content')
@include('main/partials/smallheader')
<!--=================================
 login-form  -->

<section class="login-form page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <span>Connectez-vous via votre mot de passe ou un lien de connexion </span>
                    <h2>Connectez vous à votre compte</h2>
                    <div class="separator"></div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-12">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="gray-form clearfix">
                        <div class="mb-3">
                            <label class="form-label" for="email">Email* </label>
                            <input id="email" class="form-control" type="email" placeholder="Email" name="email">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="password">Mot de passe* </label>
                            <input id="password" class="form-control" type="password" placeholder="Mot de passe" name="password">
                        </div>
                        <div class="mb-3">
                            <div class="remember-checkbox mb-4">
                                <input type="checkbox" name="remember" id="remember_me">
                                <label for="remember_me"> Se souvenir de moi</label>
                                <a href="{{route('password.request')}}" class="float-end">Mot de passe oublier?</a>
                            </div>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="button red btn-block"> Connectez-vous </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!--=================================
 login-form  -->

@endsection