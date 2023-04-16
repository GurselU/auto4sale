@extends('main.layouts.app')

@section('content')
@include('main.partials.loader')
@include('admin.partials.header')

<div class="container">
    <h3 class="text-center p-3">Archive</h3>
    <table class="w-100">
        <thead>
            <tr>
                <th>#</th>
                <th>Marque</th>
                <th>Modèle</th>
                <th>1ère immatriculation</th>
                <th>Kilométrage</th>
                <th>Offres</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>

            @foreach($car as $item)
            <tr>

                <th>{{ $item->id }}</th>
                <td>{{ $item->mark }}</td>
                <td>{{ $item->model }}</td>
                <td>{{ $item->registration }}</td>
                <td>{{ $item->mileage }}</td>

                <td>
                    <a href="{{ route('realoffers', $item->id) }}">{{$item->offer()->count()}}
                        Offers</a>
                </td>
                <td>
                    <a href="{{ route('seller.edit', $item->seller_id) }}">Seller</a>
                </td>
                <td>
                    <a href="{{ route('offer.edit', $item->id) }}">Edit</a>
                </td>
                <td>
                    <a href="{{ route('archive.edit', $item->id) }}">Recup</a>
                </td>
                @if(Auth::user()->role_id == 1)
                <td>
                    <form action="{{ route('car.destroy', $item->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="bg-danger text-white" type="submit">Delete
                        </button>
                    </form>
                </td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('main.partials.backToTop')
@include('main.partials.footer')
@endsection