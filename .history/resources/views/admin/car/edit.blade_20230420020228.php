@extends('main.layouts.app')

@section('content')
@include('admin.partials.smallheader')

<section class="register-form page-section-ptb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="section-title">
                    <h2>Données du vendeur</h2>
                    <div class="separator"></div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12">
                <div class="gray-form">
                    <form action="{{ route('seller.update', $seller->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="name" class="form-label">Nom prénom</label>
                            <input type="text" class="form-control" id="name" value="{{$seller->name}}" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Numéro de contact</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{$seller->phone}}" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{$seller->email}}" required>
                        </div>
                        <div class="mb-3">
                            <label for="adres" class="form-label">Rue et numéro</label>
                            <input type="text" class="form-control" id="adres" name="adres" value="{{$seller->adres}}">
                        </div>
                        <div class="mb-3">
                            <label for="zipCode" class="form-label">Code Postal</label>
                            <input type="text" class="form-control" id="zipCode" name="zipCode" value="{{$seller->zipCode}}" style="height: 50px;" required>
                        </div>
                        <div class="mb-3">
                            <label for="country" class="form-label">Pays</label>
                            <input type="text" class="form-control" id="country" name="country" value="{{$seller->country}}" required>
                        </div>
                        <button type="submit" class="button red mb-3"> Modifier </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="register-form page-section-ptb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="section-title">
                    <h2>Données du véhicule</h2>
                    <div class="separator"></div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12">
                <div class="gray-form">
                    <form action="{{ route('car.update', $car->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')


                        <div class="mb-3">
                            <label for="categorie">Categorie</label>
                            <select name="categorie" id="categorie">
                                @foreach($categories as $categorie)
                                <option value="{{$categorie->id}}" {{$categorie->id == $car->categorie_id ? 'selected': ''}}>{{$categorie->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="chassi">Chassi</label>
                            <select name="chassi" id="chassi">
                                @foreach($chassis as $chassi)
                                <option value="{{$chassi->id}}" {{$chassi->id == $car->chassi_id ? 'selected': ''}}>{{$chassi->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="origin">Origine de la marque du véhicule</label>
                            <select name="origin" id="origin">
                                @foreach($carOrigins as $origin)
                                <option value="{{$origin->id}}" {{$origin->id == $car->car_origin_id ? 'selected': ''}}>{{$origin->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="class">Classe d'émission</label>
                            <select name="class" id="class">
                                @foreach($emissionClasses as $class)
                                <option value="{{$class->id}}" {{$class->id == $car->emission_class_id ? 'selected': ''}}>{{$class->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="gearbox">Boite de vitesse</label>
                            <select name="gearbox" id="gearbox">
                                @foreach($gearboxes as $gearbox)
                                <option value="{{$gearbox->id}}" {{$gearbox->id == $car->gearbox_id ? 'selected': ''}}>{{$gearbox->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="seller_id" class="form-label">Vendeur</label>
                            <input type="text" class="form-control" id="seller_id" value="{{$seller->id}}" name="seller_id" required>
                        </div>
                        <div class="mb-3">
                            <label for="mark" class="form-label">Marque</label>
                            <input type="text" class="form-control" id="mark" name="mark" value="{{$car->mark}}" required>
                        </div>
                        <div class="mb-3">
                            <label for="model" class="form-label">Modèle</label>
                            <input type="text" class="form-control" id="model" name="model" value="{{$car->model}}" required>
                        </div>
                        <div class="mb-3">
                            <label for="miniDescription" class="form-label">Mini Description</label>
                            <input type="text" class="form-control" id="miniDescription" name="miniDescription" value="{{$car->miniDescription}}">
                        </div>
                        <div class="mb-3">
                            <label for="registration" class="form-label">1ère mise en circulation</label>
                            <input type="date" class="form-control" id="registration" name="registration" value="{{$car->registration}}" style="height: 50px;" required>
                        </div>
                        <div class="mb-3">
                            <label for="mileage" class="form-label">Kilométrage</label>
                            <input type="number" class="form-control" id="mileage" name="mileage" value="{{$car->mileage}}" required>
                        </div>
                        <div class="mb-3">
                            <label for="power" class="form-label">Puissance (ch)</label>
                            <input type="number" class="form-control" id="power" name="power" value="{{$car->power}}" required>
                        </div>
                        <div class="mb-3">
                            <label for="engineSize" class="form-label">Cylindrée</label>
                            <input type="number" class="form-control" id="engineSize" name="engineSize" value="{{$car->engineSize}}" required>
                        </div>
                        <div class="mb-3">
                            <label for="maxPrice" class="form-label">Valeur maximum (en euro)</label>
                            <input type="text" class="form-control" id="maxPrice" name="maxPrice" value="{{$car->maxPrice}}" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea rows='10' type="text" class="form-control" id="description" name="description" required>{{ $car->description }}</textarea>
                        </div>

                        <button type="submit" class="button red mb-3"> Modifier </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="register-form page-section-ptb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="section-title">
                    <h2>Les + du véhicule</h2>
                    <div class="separator"></div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12">
            @foreach($assets as $asset)
            <div class="flex justify-between p-1">
                <div class="p-1">{{$asset->description}}</div>
                <form action="{{ route('asset.destroy', $asset->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="rounded p-1 text-zinc-50 hover:text-zinc-200 hover:bg-red-900 bg-red-600" type="submit">Supprimer</button>
                </form>
            </div>
            @endforeach
                <div class="gray-form">
                    <form action="{{ route('asset.update', $car->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <div class="mb-3">
                                <input type="text" class="form-control" name="description">
                            </div>
                            <button type="submit" class="button red mb-3"> Ajouter + </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="mx-auto w-full lg:w-1/2 flex flex-wrap">

    <div class="w-full flex">
        <div class="w-1/2 font-bold border-solid border p-1 text-center border-black">Avantages</div>
        <div class="w-1/2 font-bold border-solid border p-1 text-center border-black">Inconvenients</div>
    </div>

    <div class="w-full flex">
        <div class="w-1/2 border-solid border border-black">
            @foreach($assets as $asset)
            <div class="flex justify-between p-1">
                <div class="p-1">{{$asset->description}}</div>
                <form action="{{ route('asset.destroy', $asset->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="rounded p-1 text-zinc-50 hover:text-zinc-200 hover:bg-red-900 bg-red-600" type="submit">Supprimer</button>
                </form>
            </div>
            @endforeach
        </div>
        <div class="w-1/2 border-solid border border-black">
            @foreach($drowbacks as $drowback)
            <div class="flex justify-between p-1">
                <div>{{$drowback->description}}</div>
                <form action="{{ route('drowback.destroy', $drowback->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="rounded p-1 text-zinc-50 hover:text-zinc-200 hover:bg-red-900 bg-red-600" type="submit">Supprimer</button>
                </form>
            </div>
            @endforeach
        </div>
    </div>



    <div class="w-full flex pt-2">
        <div class="w-1/2">
            <form action="{{ route('asset.update', $car->id) }}" method="POST" enctype="multipart/form-data" class="text-center">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <input type="text" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" name="description">
                    <button type="submit" class="inline-flex items-center rounded-full border border-transparent bg-blue-600 px-3 py-1 text-sm font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Ajouter
                    </button>
                </div>
            </form>
        </div>
        <div class="w-1/2">
            <form action="{{ route('drowback.update', $car->id) }}" method="POST" enctype="multipart/form-data" class="text-center">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <input type="text" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" name="description">
                    <button type="submit" class="inline-flex items-center rounded-full border border-transparent bg-blue-600 px-3 py-1 text-sm font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Ajouter
                    </button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection