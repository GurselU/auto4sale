@foreach($cars as $car)

<div class="py-4 px-3 my-4 mx-4 flex flex-wrap shadow-2xl rounded">
    @if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
    <div class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">{{ $car->id }}</div>
    @endif

    <div class="p-2 sm:pl-6 w-80 h-60 shadow-xl"><img class="h-full w-full" src="{{asset($pictures->where('car_id', $car->id)->first()->location ?? 'images/sellauto_logo.svg')}}"></div>

    <div>
        <div class="flex">
            <div class="whitespace-nowrap py-4 pl-4 pr-3 text-xl font-medium text-gray-900 sm:pl-6">{{ $car->mark }}</div>
            <div class="whitespace-nowrap py-4 pl-4 pr-3 text-xl font-medium text-gray-900 sm:pl-6">{{ $car->model }}</div>
        </div>
        <div class="flex">
            <div class="whitespace-nowrap px-2 py-3 text-sm text-gray-500">{{ $car->registration }}</div>
            <div class="whitespace-nowrap px-2 py-3 text-sm text-gray-500">{{ $car->mileage }}km</div>
            <div class="whitespace-nowrap px-2 py-3 text-sm text-gray-500">{{ $car->fuel }}</div>
        </div>
        <div class="flex">
            <div class="whitespace-nowrap px-2 py-3 text-sm text-gray-500">{{ $car->gearbox }}</div>
            <div class="whitespace-nowrap px-2 py-3 text-sm text-gray-500">{{ floor($car->power/1.26) }}kw/{{ $car->power }}ch</div>
            <div class="whitespace-nowrap px-2 py-3 text-sm text-gray-500">{{ $car->engineSize }}cm³</div>
            <div class="whitespace-nowrap px-2 py-3 text-sm text-gray-500">{{ $car->emissionClass }}</div>
        </div>
    </div>


    <div>
        @if($car->sold != null)
        <div class="whitespace-nowrap px-3 py-4 text-sm bg-green-500 text-zinc-100 rounded">Vendu pour {{$car->sold}}€</div>
        @endif
        <div class="whitespace-nowrap px-3 py-4 text-sm text-red-500">Il y a actuellement {{$car->offer()->count()}} offres pour ce véhicule</div>
        <div>
            @if(Auth::user()->role_id == 4 || Auth::user()->role_id == 5)
            <div class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">{{$allOffers->where('user_id', Auth::user()->id)->where('car_id', $car->id)->first() == null ? '' : 'Votre offre actuelle est de '}} {{$allOffers->where('user_id', Auth::user()->id)->where('car_id', $car->id)->first()->offre ?? 'Vous n\'avez pas fait d offre'}}{{$allOffers->where('user_id', Auth::user()->id)->where('car_id', $car->id)->first() == null ? '' : '€'}}</div>
            @endif
            @if(Auth::user()->role_id == 3)
            <div class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                <a class="rounded p-2 text-zinc-50 hover:text-zinc-200 hover:bg-orange-900 bg-orange-600" href="{{ route('offer.show', $car->id) }}">{{$allOffers->where('car_id', $car->id)->first() == null ? '' : 'La meilleure offre est de '}}{{$allOffers->where('car_id', $car->id)->first()->offre ?? 'Pas d\'offre'}}{{$allOffers->where('car_id', $car->id)->first() == null ? '' : '€'}}</a>
            </div>
            @endif
            @if(Auth::user()->role_id == 2 || Auth::user()->role_id == 1)
            <div class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                <a class="rounded p-2 text-zinc-50 hover:text-zinc-200 hover:bg-orange-900 bg-orange-600" href="{{ route('offer.show', $car->id) }}">{{$allOffers->where('car_id', $car->id)->first() == null ? '' : 'La meilleure offre est de '}}{{$allOffers->where('car_id', $car->id)->first()->smallOffer ?? 'Pas d\'offre'}}{{$allOffers->where('car_id', $car->id)->first() == null ? '' : '€'}}</a>
            </div>
            @endif
            <div class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                <a class="rounded p-2 text-zinc-50 hover:text-zinc-200 hover:bg-indigo-900 bg-indigo-600" href="{{ route('offer.edit', $car->id) }}">Plus de détails</a>
            </div>
        </div>
    </div>

    <div class="pl-24 flex flex-wrap">
        @if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2)

        <div class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
            <a class="rounded p-2 text-zinc-600 hover:text-zinc-200 hover:bg-zinc-500 bg-zinc-200" href="{{ route('seller.edit', $car->seller_id) }}">Vendeur</a>
        </div>
        <div class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
            <a class="rounded p-2 text-zinc-600 hover:text-zinc-200 hover:bg-zinc-500 bg-zinc-200" href="{{ route('picture.show', $car->id) }}">Photos</a>
        </div>
        <div class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
            <a class="rounded p-2 text-zinc-600 hover:text-zinc-200 hover:bg-zinc-500 bg-zinc-200" href="{{ route('car.edit', $car->id) }}">Modifier</a>
        </div>
        @if ($car->status != 'reserved')
        <div class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
            <a class="rounded p-2 text-zinc-600 hover:text-zinc-200 hover:bg-zinc-500 bg-zinc-200" href="{{ route('car.show', $car->id) }}">Disponible</a>
        </div>
        @else
        <div class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
            <a class="rounded p-2 text-zinc-600 hover:text-zinc-200 hover:bg-zinc-500 bg-zinc-200" href="{{ route('car.show', $car->id) }}">Réservé</a>
        </div>
        @endif
        <div class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
            <a class="rounded p-2 text-zinc-600 hover:text-zinc-200 hover:bg-zinc-500 bg-zinc-200" href="{{ route('newsletter.show', $car->id) }}">Envoyer</a>
        </div>
        <form action="{{ route('countdown.edit', $car->id) }}" method="POST" enctype="multipart/form-data" class="text-center">
            @csrf
            @method('GET')
            <div class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                <input type="number" class="w-20 h-6" name="timer">
                <button type="submit" class="rounded p-2 text-zinc-600 hover:text-zinc-200 hover:bg-zinc-500 bg-zinc-200">Start Timer</a>
            </div>
        </form>
        <form action="{{ route('offer.update', $car->id) }}" method="POST" enctype="multipart/form-data" class="text-center">
            @csrf
            @method('PUT')
            <div class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                <input type="number" class="w-20 h-6" name="sold">
                <button type="submit" class="rounded p-2 text-zinc-600 hover:text-zinc-200 hover:bg-zinc-500 bg-zinc-200">Sold</a>
            </div>
        </form>

        <div class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
            <a class="rounded p-2 text-zinc-600 hover:text-zinc-200 hover:bg-zinc-500 bg-zinc-200" href="{{ route('archive.edit', $car->id) }}">Archiver</a>
        </div>

        @endif

    </div>
    @if(Auth::user()->role_id == 1)
    <div class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6 w-full">
        <div class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
            <a class="rounded p-2 text-zinc-50 hover:text-zinc-200 hover:bg-yellow-600 bg-yellow-300" href="{{ route('realoffers', $car->id) }}">View</a>
        </div>
        <form action="{{ route('seller.destroy', $car->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button class="rounded p-2 text-zinc-50 hover:text-zinc-200 hover:bg-red-900 bg-red-600" type="submit">Supprimer</button>
        </form>
    </div>
    @endif
</div>
























<tr>






</tr>
@endforeach