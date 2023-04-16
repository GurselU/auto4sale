@extends('admin.layouts.app')

@section('content')
@if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="rounded bg-red-500 p-3 mt-3 mx-20 text-white font-bold">{{ $error }}</div>
        @endforeach
    @endif
<h1 class="text-center py-4 text-gray-600 text-2xl">Edit Seller</h1>
<div class="container">
    <form action="{{ route('seller.update', $seller->id) }}" method="POST" enctype="multipart/form-data" class="text-center">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Name</label>
            <input type="text" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" value="{{ $seller->name }}" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="phone" class="block font-medium text-sm text-gray-700 dark:text-gray-300">phone</label>
            <input type="text" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" value="{{ $seller->phone }}" id="phone" name="phone">
        </div>
        <div class="mb-3">
            <label for="email" class="block font-medium text-sm text-gray-700 dark:text-gray-300">email</label>
            <input type="email" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" value="{{ $seller->email }}" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="adres" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Adres and Number</label>
            <input type="text" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" value="{{ $seller->adres }}" id="adres" name="adres">
        </div>
        <div class="mb-3">
            <label for="zipCode" class="block font-medium text-sm text-gray-700 dark:text-gray-300">ZIP Code</label>
            <input type="text" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" value="{{ $seller->zipCode }}" id="zipCode" name="zipCode">
        </div>
        <div class="mb-3">
            <label for="country" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Country</label>
            <input type="text" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" value="{{ $seller->country }}" id="country" name="country">
        </div>
        <button type="submit" class="inline-flex items-center rounded-full border border-transparent bg-blue-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Edit</button>
        <button class="inline-flex items-center rounded-full border border-transparent bg-red-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2"><a href="/admin/seller">Back</a></button>
    </form>
</div>

@endsection
