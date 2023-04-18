@extends('main.layouts.app')

@section('content')
@include('admin.partials.header')
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