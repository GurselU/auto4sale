@extends('admin.layouts.app')

@section('content')

@if (session()->has('success'))
<div class="alert alert-success">
    {{ session()->get('success') }}
</div>
@endif
@if (session()->has('erreur'))
<div class="alert alert-danger">
    {{ session()->get('erreur') }}
</div>
@endif

<a class="btn btn-success" href="{{ route('buyer.create') }}">Create</a>
<table>
    <caption>Marchands</caption>
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Company Name</th>
            <th scope="col">Email</th>
            <th scope="col">VAT</th>
            <th scope="col">Adres</th>
            <th scope="col">Zip Code</th>
            <th scope="col">Country</th>
            <th scope="col">Mobile Phone</th>
            @foreach($categories as $item)
            <th scope="col">{{$item->categorie}}</th>
            @endforeach
            <th scope="col">Min Budget</th>
            <th scope="col">Max Budget</th>
            <th scope="col">Year Minimum</th>
            <th scope="col">Age Maximum</th>
        </tr>
    </thead>
    <tbody>

        @foreach($buyers as $item)
        <tr>

            <th scope="row">{{ $item->id }}</th>
            <td>{{ $item->company }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->vat }}</td>
            <td>{{ $item->adres }}</td>
            <td>{{ $item->zipCode }}</td>
            <td>{{ $item->country }}</td>
            <td>{{ $item->phone }}</td>
            @foreach($categories as $cat)
            @if($item->categories->where('categorie', '=', $cat->categorie)->count() == 1)
            <td>yes</td>
            @else
            <td>no</td>
            @endif
            @endforeach
            <td>{{ $item->minBudget }}</td>
            <td>{{ $item->maxBudget }}</td>
            <td>{{ $item->minYear }}</td>
            <td>{{ $item->maxYear }}</td>
            <td>
                <a class="btn btn-warning" href="{{ route('buyer.edit', $item->id) }}">Edit</a>
            </td>
            <td>
                <form action="{{ route('buyer.destroy', $item->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Deleted</button>
                </form>
            </td>


        </tr>
        @endforeach
    </tbody>
</table>

@endsection
