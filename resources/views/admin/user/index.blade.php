@extends('main.layouts.app')

@section('content')
@include('main.partials.loader')
@include('admin.partials.header')

<div class="container">
    <h3 class="text-center p-3">Utilisateurs</h3>
    <table class="w-100">
        <thead>
            <tr>
                <th>#</th>
                <th>Société</th>
                <th>Role</th>
                <th>Email</th>
                <th>Adresse</th>
                <th>Code Postale</th>
                <th>GSM</th>
                <th>Budget Maximum</th>
                <th>Age Maximum</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>

            @foreach($users as $item)
            <tr>
                <th class="p-2 {{$item->role_id == 6 ? 'bg-warning': ''}} {{$item->role_id == 7 ? 'bg-danger': ''}} {{$item->role_id == 4 ? 'bg-success': ''}} {{$item->role_id == 1 ? 'bg-primary': ''}} {{$item->role_id == 2 ? 'bg-emphasis': ''}}">{{ $item->id }}</th>
                <td>{{ $item->company }}</td>
                @foreach($roles as $role)
                @if($role->id == $item->role_id)
                <td>{{ $role->role }}</td>
                @endif
                @endforeach
                <td>{{ $item->email }}</td>
                <td>{{ $item->adres }}</td>
                <td>{{ $item->zipCode }}</td>
                <td>{{ $item->phone }}</td>
                <td>{{ $item->maxBudget }}€</td>
                <td>{{ $item->maxYear }}</td>
                <td class="p-2">
                    <a class="bg-warning p-2 text-white" href="{{ route('user.edit', $item->id) }}">Edit</a>
                </td>
                @if(Auth::user()->role_id == 1)
                <td>
                    <form action="{{ route('user.destroy', $item->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="bg-danger text-white" type="submit">Supprimer</button>
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