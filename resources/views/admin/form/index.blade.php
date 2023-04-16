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

    <table>
        <caption>Formulaires</caption>
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Mark</th>
            <th scope="col">Mileage</th>
            <th scope="col">Year</th>
            <th scope="col">Fuel</th>
            <th scope="col">ZipCode</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Available</th>
            <th scope="col">Message</th>
        </tr>
        </thead>
        <tbody>

        @foreach($forms as $item)
            <tr>

                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->mark }}</td>
                <td>{{ $item->mileage }}</td>
                <td>{{ $item->year }}</td>
                <td>{{ $item->fuel }}</td>
                <td>{{ $item->zipCode }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->phone }}</td>
                <td>{{ $item->available }}</td>
                <td>{{ $item->message }}</td>
                <td>
                    <form action="{{ route('formulaire.destroy', $item->id) }}" method="post">
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
