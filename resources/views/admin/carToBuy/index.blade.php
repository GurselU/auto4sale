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
                <th>Nom</th>
                <th>Marque</th>
                <th>Kilométrage</th>
                <th>Année</th>
                <th>Carburant</th>
                <th>Code postale</th>
                <th>GSM</th>
                <th>Disponible</th>
                <th>Message</th>
                <th>Contacter ?</th>
                <th></th>
            </tr>
        </thead>
        <tbody>

            @foreach($forms as $item)
            <tr>

                <th>{{ $item->id }}</th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->mark }}</td>
                <td>{{ $item->mileage }}</td>
                <td>{{ $item->year }}</td>
                <td>{{ $item->fuel }}</td>
                <td>{{ $item->zipCode }}</td>
                <td>{{ $item->phone }}</td>
                <td>{{ $item->available }}</td>
                <td>{{ $item->message }}</td>
                @if ($item->called)
                <td class="p-2">
                    <a class="bg-primary p-2" href="{{ route('form.show', $item->id) }}">Contacted</a>
                </td>
                @else
                <td class="p-2">
                    <a class="bg-warning p-2" href="{{ route('form.show', $item->id) }}">Not Contacted</a>
                </td>
                @endif
                @if(Auth::user()->role_id == 1)
                <td>
                    <form action="{{ route('form.destroy', $item->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="bg-danger text-white" type="submit">Supprimer
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