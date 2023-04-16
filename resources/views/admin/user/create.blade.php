@extends('admin.layouts.app')

@section('content')

<h1 class="text-center py-4">Create Banner</h1>
<div class="container">
    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="mb-3">
            <label for="name" class="form-label">Your Name</label>
            <input type="text" class="form-control" value="{{ old('name') }}" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="company" class="form-label">Company Name</label>
            <input type="text" class="form-control" value="{{ old('company') }}" id="company" name="company">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" value="{{ old('email') }}" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">password</label>
            <input type="password" class="form-control" value="{{ old('password') }}" id="password" name="password">
        </div>
        <div class="mb-3">
            <label for="vat" class="form-label">VAT</label>
            <input type="text" class="form-control" value="{{ old('vat') }}" id="vat" name="vat">
        </div>
        <div class="mb-3">
            <label for="adres" class="form-label">Adres and Number</label>
            <input type="text" class="form-control" value="{{ old('adres') }}" id="adres" name="adres">
        </div>
        <div class="mb-3">
            <label for="zipCode" class="form-label">ZIP Code</label>
            <input type="text" class="form-control" value="{{ old('zipCode') }}" id="zipCode" name="zipCode">
        </div>
        <div class="mb-3">
            <label for="country" class="form-label">Country</label>
            <input type="text" class="form-control" value="{{ old('country') }}" id="country" name="country">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" value="{{ old('phone') }}" id="phone" name="phone">
        </div>
        <div class="mb-3">
            <label for="maxBudget" class="form-label">Maximum Budget</label>
            <input type="text" class="form-control" value="{{ old('maxBudget') }}" id="maxBudget" name="maxBudget">
        </div>
        <div class="mb-3">
            <label for="maxYear" class="form-label">Maximum Year</label>
            <input type="text" class="form-control" value="{{ old('maxYear') }}" id="maxYear" name="maxYear">
        </div>
        <div>Please select categories</div>
        <div>
            @foreach($categories as $cat)
            <div>
                <input type="checkbox" id="categ" name="tableIdCat[]" value={{ $cat->id }}>
                <label for="categ">{{$cat->name}}</label>
            </div>
            @endforeach
        </div>
        <div>Please select chassis style</div>
        <div>
            @foreach($chassis as $chassi)
            <div>
                <input type="checkbox" id="chassi" name="tableIdChassi[]" value={{ $chassi->id }}>
                <label for="chassi">{{$chassi->name}}</label>
            </div>
            @endforeach
        </div>
        <button type="submit" class="btn btn-success">Create</button>
        <button class="btn btn-danger"><a href="/admin/user">Back</a></button>
    </form>
</div>

@endsection
