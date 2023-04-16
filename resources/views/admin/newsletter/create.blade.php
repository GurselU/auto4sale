@extends('admin.layouts.app')

@section('content')

<h1 class="text-center py-4">New car available</h1>
<div class="container">
    <form action="{{ route('car.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="mb-3">
            <label for="categorie">Categorie</label>
            <select name="categorie" id="categorie">
                @foreach($categories as $cat)
                <option value={{$cat->id}}>{{$cat->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="seller_id" class="block font-medium text-sm text-gray-700 dark:text-gray-300">seller_id</label>
            <input type="text" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" id="seller_id" value="{{$seller->id}}" name="seller_id">
        </div>
        <div class="mb-3">
            <label for="mark" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Mark</label>
            <input type="text" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" id="mark" name="mark">
        </div>
        <div class="mb-3">
            <label for="model" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Model</label>
            <input type="text" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" id="model" name="model">
        </div>
        <div class="mb-3">
            <label for="registration" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Registration</label>
            <input type="date" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" id="registration" name="registration">
        </div>
        <div class="mb-3">
            <label for="mileage" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Mileage</label>
            <input type="text" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" id="mileage" name="mileage">
        </div>
        <div class="mb-3">
            <label for="power" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Power</label>
            <input type="text" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" id="power" name="power">
        </div>
        <div class="mb-3">
            <label for="engineSize" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Engine Size</label>
            <input type="text" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" id="engineSize" name="engineSize">
        </div>
        <div class="mb-3">
            <label for="gearbox" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Gearbox</label>
            <select name="gearbox" id="gearbox">
                <option value='Manuel'>Manuel</option>
                <option value='Automatique'>Automatique</option>
                <option value='Semi-automatic'>Semi-automatique</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="fuel" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Fuel</label>
            <select name="fuel" id="fuel">
                <option value='Diesel'>Diesel</option>
                <option value='Essence'>Essence</option>
                <option value='Plug-in Hybrid Diesel'>Plug-in Hybrid Diesel</option>
                <option value='Plug-in Hybrid Essence'>Plug-in Hybrid Essence</option>
                <option value='Mild Hybrid'>Mild Hybrid</option>
                <option value='Electric'>Electric</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="emissionClass" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Emission Class</label>
            <input type="text" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" id="emissionClass" name="emissionClass">
        </div>
        <div class="mb-3">
            <label for="origin" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Origin</label>
            <input type="text" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" id="origin" name="origin">
        </div>
        <div class="mb-3">
            <label for="documents" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Documents</label>
            <input type="text" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" id="documents" name="documents">
        </div>
        <div class="mb-3">
            <label for="description" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Description</label>
            <input type="text" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" id="description" name="description">
        </div>

        <button type="submit" class="btn btn-success">Create</button>
        <button class="btn btn-danger"><a href="/admin/car">Back</a></button>
    </form>
</div>

@endsection
