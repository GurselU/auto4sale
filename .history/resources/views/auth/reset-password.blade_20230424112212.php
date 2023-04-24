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
                    <h2>Changer votre mot de passe</h2>
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
                            <input id="email" class="form-control" type="email" placeholder="Email" name="email" required autofocus>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="password">Mot de passe* </label>
                            <input id="password" class="form-control" type="password" placeholder="Mot de passe" name="password">
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="button red btn-block"> Changer mot de passe </button>
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