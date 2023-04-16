@extends('main.layouts.app')

@section('content')
@include('admin.partials.header')
<div class="container">
    <h1 class="page-header text-center">Uploader les photos</h1>
    <div class="col-4">
        <div class="card">
            <div class="card-header">Upload Form</div>
            <div class="card-body">
                <form method="POST" action="{{route('picture.store')}}" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <input type="file" name="file[]" multiple><br><br>
                    <button type="submit" class="btn btn-primary">Upload</button>
                    <div class="mb-3 d-none">
                        <label for="car_id" class="block font-medium text-sm text-gray-700 dark:text-gray-300">car_id</label>
                        <input type="text" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" id="car_id" value="{{$car->id}}" name="car_id">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
