@extends('back.layouts.app')

@section('content')

    <div class="container">

        <form action="{{ route('form.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <div class="mb-3">
                <label for="name" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Nom Prénom</label>
                <input type="text" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="mark" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Marque et Modèle</label>
                <input type="text" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" id="mark" name="mark">
            </div>
            <div class="mb-3">
                <label for="mileage" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Kilomètrage</label>
                <input type="text" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" id="mileage" name="mileage">
            </div>
            <div class="mb-3">
                <label for="year" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Année de mise en circulation</label>
                <input type="text" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" id="year" name="year">
            </div>
            <div class="mb-3">
                <label for="fuel" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Carburant</label>
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
                <label for="zipCode" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Code Postal</label>
                <input type="text" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" id="zipCode" name="zipCode">
            </div>
            <div class="mb-3">
                <label for="email" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Email</label>
                <input type="email" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="phone" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Phone</label>
                <input type="text" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" id="phone" name="phone">
            </div>
            <div>
                <input type="checkbox" id="categ" name="available">
                <label for="categ">Libre immédiatement?</label>
            </div>
            <div class="mb-3">
                <label for="message" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Votre message</label>
                <input type="text" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" id="message" name="message">
            </div>
            <button type="submit" class="btn btn-success">Create</button>
        </form>
    </div>

@endsection
