@extends('main/layouts/app')

@section('content')
@include('admin.partials.smallheader')

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
        @include('profile.partials.update-profile-information-form')

        @include('profile.partials.update-password-form')


    </div>
</section>

<!--=================================
 register-form  -->
@endsection