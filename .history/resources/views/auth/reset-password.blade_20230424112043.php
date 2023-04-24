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
                    <h2>Changer votre mot </h2>
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
                <form action="{{ route('send.magic.link') }}" method="post">
                    @csrf
                    <div class="login-social text-center">
                        <h5>Connectez-vous via un mail de connection</h5>
                        <div class="d-flex justify-content-start">
                            <input class="px-3 text-black" type="email" placeholder="Email" style="width: 300px;" name="email">
                            <button type="submit" class="button red px-4">Envoyez</button>
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