@extends('main.layouts.app')

@section('content')
@include('admin.partials.smallheader')

<section class="register-form page-section-ptb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="section-title">
                    <h2>Modification Données véhicule</h2>
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
                                @foreach($categories as $cat)
                                <option value="{{$cat->id}}" {{$cat->id == $car->categorie_id ? 'selected': ''}}>{{$cat->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="chassi">Chassi</label>
                            <select name="chassi" id="chassi">
                                @foreach($chassis as $chassi)
                                <option value="{{$chassi->id}}" {{$cat->id == $car->categorie_id ? 'selected': ''}}>{{$chassi->name}}</option>
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
                            <input type="text" class="form-control" id="maxPrice" name="maxPrice"  value="{{$car->maxPrice}}" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea rows='10' type="text" class="form-control" id="description" name="description" value="{{$car->description}}" required></textarea>
                        </div>

                        <button type="submit" class="button red mb-3"> Modifier </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>



<div class="p-6">
    <h1 class="py-4 text-2xl text-gray-600">Donées du vendeur</h1>

    <div class="bg-yellow-50">
        <form action="{{ route('seller.update', $seller->id) }}" method="POST" enctype="multipart/form-data" class="text-center">
            @csrf
            @method('PUT')
            <div class="mb-3 flex">
                <label for="name" class="block font-medium text-sm text-gray-700">Name</label>
                <input type="text" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" value="{{ $seller->name }}" id="name" name="name">
            </div>
            <div class="mb-3 flex">
                <label for="phone" class="block font-medium text-sm text-gray-700">phone</label>
                <input type="text" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" value="{{ $seller->phone }}" id="phone" name="phone">
            </div>
            <div class="mb-3 flex">
                <label for="email" class="block font-medium text-sm text-gray-700">email</label>
                <input type="email" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" value="{{ $seller->email }}" id="email" name="email">
            </div>
            <div class="mb-3 flex">
                <label for="adres" class="block font-medium text-sm text-gray-700">Adres and Number</label>
                <input type="text" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" value="{{ $seller->adres }}" id="adres" name="adres">
            </div>
            <div class="mb-3 flex">
                <label for="zipCode" class="block font-medium text-sm text-gray-700">ZIP Code</label>
                <input type="text" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" value="{{ $seller->zipCode }}" id="zipCode" name="zipCode">
            </div>
            <div class="mb-3 flex">
                <label for="country" class="block font-medium text-sm text-gray-700">Country</label>
                <input type="text" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" value="{{ $seller->country }}" id="country" name="country">
            </div>
            <button type="submit" class="inline-flex items-center rounded-full border border-transparent bg-blue-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Edit</button>
            <button class="inline-flex items-center rounded-full border border-transparent bg-red-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2"><a href="/admin/seller">Back</a></button>
        </form>
    </div>

    <form action="{{ route('car.update', $car->id) }}" method="POST" enctype="multipart/form-data" class="text-center bg-red-50">
        @csrf
        @method('PUT')

        <div class="mb-3 hidden">
            <label for="seller" class="block font-medium text-sm text-gray-700">Vendeur</label>
            <input type="text" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" id="seller" name="seller" value="{{ $car->seller_id }}">
        </div>
        <div class="mb-3">
            <label for="categorie" class="block text-sm font-medium text-gray-700">Catégorie</label>
            <select name="categorie" id="categorie" class="mt-1 rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                @foreach($categories as $cat)
                <option value={{$cat->id}} {{$cat->id == $car->categorie_id ? 'selected': ''}}>{{$cat->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="chassi" class="block text-sm font-medium text-gray-700">Chassi</label>
            <select name="chassi" id="chassi" class="mt-1 rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                @foreach($chassis as $chassi)
                <option value={{$chassi->id}} {{$chassi->id == $car->chassi_id ? 'selected': ''}}>{{$chassi->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="mark" class="block font-medium text-sm text-gray-700">Marque</label>
            <input type="text" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" value="{{ $car->mark }}" id="mark" name="mark">
        </div>
        <div class="mb-3">
            <label for="model" class="block font-medium text-sm text-gray-700">Modèle</label>
            <input type="text" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" value="{{ $car->model }}" id="model" name="model">
        </div>
        <div class="mb-3">
            <label for="miniDescription" class="block font-medium text-sm text-gray-700">Mini Description</label>
            <textarea type="text" rows='3' class="w-full lg:w-1/4 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" id="miniDescription" name="miniDescription">{{ $car->miniDescription }}</textarea>
        </div>
        <div class="mb-3">
            <label for="registration" class="block font-medium text-sm text-gray-700">Année</label>
            <input type="date" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" value="{{ $car->registration }}" id="registration" name="registration">
        </div>
        <div class="mb-3">
            <label for="mileage" class="block font-medium text-sm text-gray-700">Kilométrage</label>
            <input type="number" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" value="{{ $car->mileage }}" id="mileage" name="mileage">
        </div>
        <div class="mb-3">
            <label for="power" class="block font-medium text-sm text-gray-700">Puissance</label>
            <input type="number" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" value="{{ $car->power }}" id="power" name="power">
        </div>
        <div class="mb-3">
            <label for="engineSize" class="block font-medium text-sm text-gray-700">Cylindré</label>
            <input type="number" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" value="{{ $car->engineSize }}" id="engineSize" name="engineSize">
        </div>
        <div class="mb-3">
            <label for="gearbox" class="block font-medium text-sm text-gray-700">Transmission</label>
            <select name="gearbox" id="gearbox">
                <option value='Manuel' {{$car->gearbox == 'Manuel' ? 'selected': ''}}>Manuelle</option>
                <option value='Automatique' {{$car->gearbox == 'Automatique' ? 'selected': ''}}>Automatique</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="fuel" class="block font-medium text-sm text-gray-700">Carburant</label>
            <select name="fuel" id="fuel">
                <option value='Diesel' {{$car->fuel == 'Diesel' ? 'selected': ''}}>Diesel</option>
                <option value='Essence' {{$car->fuel == 'Essence' ? 'selected': ''}}>Essence</option>
                <option value='Plug-in Hybrid Diesel' {{$car->fuel == 'Plug-in Hybrid Diesel' ? 'selected': ''}}>Plug-in Hybrid Diesel</option>
                <option value='Plug-in Hybrid Essence' {{$car->fuel == 'Plug-in Hybrid Essence' ? 'selected': ''}}>Plug-in Hybrid Essence</option>
                <option value='Mild Hybrid' {{$car->fuel == 'Mild Hybrid' ? 'selected': ''}}>Mild Hybrid</option>
                <option value='Electric' {{$car->fuel == 'Electric' ? 'selected': ''}}>Electric</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="emissionClass" class="block font-medium text-sm text-gray-700">Classe d'émission</label>
            <input type="text" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" value="{{ $car->emissionClass }}" id="emissionClass" name="emissionClass">
        </div>
        <div class="mb-3">
            <label for="maxPrice" class="block font-medium text-sm text-gray-700">Valeur maximum</label>
            <input type="text" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" value="{{ $car->maxPrice }}" id="maxPrice" name="maxPrice">
        </div>
        <div class="mb-3">
            <label for="lastPrice" class="block font-medium text-sm text-gray-700">Prix fixe</label>
            <input type="text" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" value="{{ $car->lastPrice }}" id="lastPrice" name="lastPrice">
        </div>

        <div class="mb-3">
            <label for="description" class="block font-medium text-sm text-gray-700">Description</label>
            <textarea type="text" rows='10' class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" id="description" name="description">{{ $car->description }}</textarea>
        </div>
        <button type="submit" class="inline-flex items-center rounded-full border border-transparent bg-blue-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
            Enregistrer
        </button>
        <a href="/admin/car" class="inline-flex items-center rounded-full border border-transparent bg-yellow-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
            Retour</a>
    </form>
</div>


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