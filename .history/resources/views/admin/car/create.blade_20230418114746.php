@extends('main.layouts.app')

@section('content')
@include('smallheader.blade.php')
<section class="register-form page-section-ptb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="section-title">
                    <h2>Veuillez remplir les infos du vehicule</h2>
                    <div class="separator"></div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12">
                <div class="gray-form">
                    <form action="{{ route('car.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="mb-3">
                            <label for="categorie">Categorie</label>
                            <select name="categorie" id="categorie">
                                @foreach($categories as $cat)
                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="chassi">Chassi</label>
                            <select name="chassi" id="chassi">
                                @foreach($chassis as $chassi)
                                <option value="{{$chassi->id}}">{{$chassi->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="origin">Origine de la marque du véhicule</label>
                            <select name="origin" id="origin">
                                @foreach($carOrigins as $origin)
                                <option value="{{$origin->id}}">{{$origin->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="class">Classe d'émission</label>
                            <select name="class" id="class">
                                @foreach($emissionClasses as $class)
                                <option value="{{$class->id}}">{{$class->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="gearbox">Boite de vitesse</label>
                            <select name="gearbox" id="gearbox">
                                @foreach($gearboxes as $gearbox)
                                <option value="{{$gearbox->id}}">{{$gearbox->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3" hidden>
                            <label for="seller_id" class="form-label">seller_id</label>
                            <input type="text" class="form-control" id="seller_id" value="{{$seller->id}}" name="seller_id">
                        </div>
                        <div class="mb-3">
                            <label for="mark" class="form-label">Mark</label>
                            <input type="text" class="form-control" id="mark" name="mark" required>
                        </div>
                        <div class="mb-3">
                            <label for="model" class="form-label">Model</label>
                            <input type="text" class="form-control" id="model" name="model" required>
                        </div>
                        <div class="mb-3">
                            <label for="miniDescription" class="form-label">miniDescription</label>
                            <input type="text" class="form-control" id="miniDescription" name="miniDescription">
                        </div>
                        <div class="mb-3">
                            <label for="registration" class="form-label">Registration</label>
                            <input type="date" class="form-control" id="registration" name="registration" style="height: 50px;" required>
                        </div>
                        <div class="mb-3">
                            <label for="mileage" class="form-label">Mileage</label>
                            <input type="number" class="form-control" id="mileage" name="mileage" required>
                        </div>
                        <div class="mb-3">
                            <label for="power" class="form-label">Power</label>
                            <input type="number" class="form-control" id="power" name="power" required>
                        </div>
                        <div class="mb-3">
                            <label for="engineSize" class="form-label">Engine Size</label>
                            <input type="number" class="form-control" id="engineSize" name="engineSize" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea rows='10' type="text" class="form-control" id="description" name="description" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="maxPrice" class="form-label">maxPrice</label>
                            <input type="text" class="form-control" id="maxPrice" name="maxPrice" value="10000" required>
                        </div>

                        <button type="submit" class="button red mb-3"> Créer </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection