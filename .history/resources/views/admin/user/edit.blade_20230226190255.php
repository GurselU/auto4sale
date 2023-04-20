@extends('admin.layouts.app')

@section('content')

<h1 class="text-center py-4">Edit user</h1>
<div class="container">
    <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="role_id">Role</label>
            <select name="role_id" id="role_id">
                @foreach($roles as $role)
                <option value={{$role->id}} {{$role->id == $user->role_id ? 'selected': ''}}>{{$role->role}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Your Name</label>
            <input type="text" class="form-control" value="{{ $user->name }}" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="company" class="form-label">Company Name</label>
            <input type="text" class="form-control" value="{{ $user->company }}" id="company" name="company">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" value="{{ $user->email }}" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">password</label>
            <input type="password" class="form-control" value="{{ $user->password }}" id="password" name="password">
        </div>
        <div class="mb-3">
            <label for="vat" class="form-label">VAT</label>
            <input type="text" class="form-control" value="{{ $user->vat }}" id="vat" name="vat">
        </div>
        <div class="mb-3">
            <label for="adres" class="form-label">Adres and Number</label>
            <input type="text" class="form-control" value="{{ $user->adres }}" id="adres" name="adres">
        </div>
        <div class="mb-3">
            <label for="zipCode" class="form-label">ZIP Code</label>
            <input type="text" class="form-control" value="{{ $user->zipCode }}" id="zipCode" name="zipCode">
        </div>
        <div class="mb-3">
            <label for="country" class="form-label">Country</label>
            <input type="text" class="form-control" value="{{ $user->country }}" id="country" name="country">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" value="{{ $user->phone }}" id="phone" name="phone">
        </div>
        <div class="mb-3">
            <label for="maxBudget" class="form-label">Maximum Budget</label>
            <input type="text" class="form-control" value="{{ $user->maxBudget }}" id="maxBudget" name="maxBudget">
        </div>
        <div class="mb-3">
            <label for="maxYear" class="form-label">Maximum Year</label>
            <input type="text" class="form-control" value="{{ $user->maxYear }}" id="maxYear" name="maxYear">
        </div>
        <div>
            <div>Please select categories</div>
            @foreach($categories as $cat)
            <div>
                @if($user->categories->where('categorie', '=', $cat->categorie)->count() == 1)
                <input type="checkbox" id='categ' name='tableIdCat[]' checked value={{ $cat->id }}>
                <label for='categ'>{{$cat->name}}</label>
                @else
                <input type="checkbox" id='categ' name='tableIdCat[]' value={{ $cat->id }}>
                <label for='categ'>{{$cat->name}}</label>
                @endif
            </div>
            @endforeach
        </div>
        <div>
            <div>Please select chassis</div>
            @foreach($chassis as $chassi)
            <div>
                @if($user->chassis->where('chassi', '=', $chassi->chassi)->count() == 1)
                <input type="checkbox" id='chassi' name='tableIdChassi[]' checked value={{ $chassi->id }}>
                <label for='chassi'>{{$chassi->name}}</label>
                @else
                <input type="checkbox" id='chassi' name='tableIdChassi[]' value={{ $chassi->id }}>
                <label for='chassi'>{{$chassi->name}}</label>
                @endif
            </div>
            @endforeach
        </div>
        <div>
            <div>Contact</div>
            @foreach($contacts as $contact)
            <div>
                @if($user->contacts->where('contact', '=', $contact->contact)->count() == 1)
                <input type="checkbox" id='contact' name='tableIdContact[]' checked value={{ $contact->id }}>
                <label for='contact'>{{$contact->name}}</label>
                @else
                <input type="checkbox" id='contact' name='tableIdContact[]' value={{ $contact->id }}>
                <label for='contact'>{{$contact->name}}</label>
                @endif
            </div>
            @endforeach
        </div>
        <button type="submit" class="btn btn-warning">Edit</button>
        <button class="btn btn-danger"><a href="/admin/user">Back</a></button>
    </form>
</div>

@endsection
