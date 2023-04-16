@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h1 class="page-header text-center">Pictures</h1>
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
        <div style="margin-top:20px">
            @if(count($errors) > 0)
            @foreach($errors->all() as $error)
            <div class="alert alert-danger text-center">
                {{$error}}
            </div>
            @endforeach
            @endif

            @if(session('success'))
            <div class="alert alert-success text-center">
                {{session('success')}}
            </div>
            @endif
        </div>
    </div>
    <div class="col-8">
        <h2>Pictures Table</h2>
        <table class="table table-bordered taable-stiped">
            <thead>
                <th>Photo</th>
                <th>File Name</th>
                <th>File Location</th>
            </thead>
            <tbody>
                @if(count($pictures) > 0)
                @foreach($pictures as $picture)
                <tr>
                    <td><img src="storage/{{$picture->name}}" name="{{$picture->name}}" style="width:90px;height:90px;"></td>
                    <td>{{$picture->name}}</td>
                    <td><a href="{{$picture->location}}">{{$picture->location}}</a></td>
                </tr>
                @endforeach
                @else
                <td colspan="5" class="text-center">No Table Data</td>
                @endif
            </tbody>
        </table>

    </div>
</div>

@endsection
