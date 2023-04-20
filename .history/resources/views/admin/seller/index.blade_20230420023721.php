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

    <a class="m-2 inline-flex items-center rounded border border-transparent bg-green-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2" href="{{ route('seller.create') }}">Create</a>
    <h3 class="text-center text-2xl text-gray-600">Sellers</h3>

    <div class="m-5 flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">


                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50 text-left">
                        <tr>
                            <th class="text-center" scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Adres</th>
                            <th scope="col">Zip Code</th>
                            <th scope="col">Country</th>
                            <th scope="col">Date</th>
                            <th scope="col">Action</th>
                            <th scope="col">&nbsp;</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($seller as $item)
                            <tr>

                                <th scope="row">{{ $item->id }}</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->adres }}</td>
                                <td>{{ $item->zipCode }}</td>
                                <td>{{ $item->country }}</td>
                                <td>{{ $item->firstDate }}</td>
                                <td>
                                    <a class="inline-flex items-center px-4 py-2 bg-yellow-600 border" href="{{ route('seller.edit', $item->id) }}">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ route('seller.destroy', $item->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="inline-flex items-center px-4 py-2" type="submit">Delete</button>
                                    </form>
                                </td>


                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

@endsection
