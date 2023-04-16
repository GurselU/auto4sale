@extends('admin.layouts.app')

@section('content')

    <style>
        .carousel {
            width: 50vw;
            height: 50vh;
        }

        .carousel > ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .slide {
            position: absolute;
            inset: 0;
            transition: 200ms opacity ease-in-out;
            transition-delay: 200ms;
        }

        .slide > img {
            display: block;
            height: 100%;
            object-position: center;
        }

        .slide[data-active] {
            opacity: 1;
            z-index: 1;
            transition-delay: 0ms;
        }

        .carousel-button {
            position: absolute;
            z-index: 2;
            border: none;
            font-size: 4rem;
            top: 50%;
            transform: translateY(-50%);
            color: rgba(255, 255, 255, .5);
            cursor: pointer;
            border-radius: .25rem;
            padding: 0 .5rem;
            background: rgba(0, 0, 0, .1) none;
        }

        .carousel-button:hover,
        .carousel-button:focus {
            background-color: rgba(0, 0, 0, .2);
            outline: none;
            box-shadow: none;
        }

        .carousel-button:focus {
            outline: 1px solid black;
        }

        .carousel-button.prev {
            left: 1rem;
        }

        .carousel-button.next {
            right: 1rem;
        }
    </style>

    <div class="bg-white w-full mx-auto">

        <section aria-label="Gallery" class="mx-auto relative lg:w-1/2 mt-5">
            <div class="carousel md:relative" data-carousel>
                <button class="carousel-button prev" data-carousel-button="prev">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-16 h-16">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/>
                    </svg>
                </button>
                <button class="carousel-button next" data-carousel-button="next">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-16 h-16">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
                    </svg>
                </button>
                <ul data-slides>
                    @foreach($pictures as $picture)
                        <li class="slide bg-black">
                            <img src="{{asset($picture->location)}}"
                                 class="absolute block md:h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                 alt="...">
                        </li>
                    @endforeach
                </ul>

            </div>
            <div class="md:float-right isolate md:inline-flex rounded-md shadow-sm mt-2 hidden">
                <button type="button"
                        class="relative items-center rounded-l-md bg-slate-100 px-3 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-10">
                    Gallerie
                </button>
                <button type="button"
                        class="relative -ml-px items-center bg-slate-100 px-3 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-10">
                    Avantages
                </button>
                <button type="button"
                        class="relative -ml-px items-center rounded-r-md bg-slate-100 px-3 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-10">
                    Inconvénients
                </button>
            </div>

        </section>

        <div class="inline-flex items-center rounded-md shadow-sm mt-2 md:hidden">
            <button type="button"
                    class="relative inline-flex items-center rounded-l-md bg-slate-100 px-3 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-10">
                Gallerie
            </button>
            <button type="button"
                    class="relative -ml-px inline-flex items-center bg-slate-100 px-3 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-10">
                Avantages
            </button>
            <button type="button"
                    class="relative -ml-px inline-flex items-center rounded-r-md bg-slate-100 px-3 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-10">
                Inconvénients
            </button>
        </div>

        <div class="w-full p-2">
            <div class="mx-auto lg:w-1/2">
                <div>
                    <h1 class="my-2 text-2xl tracking-tight text-gray-900">{{$car->mark}} {{$car->model}}</h1>
                </div>
                <p class="text-base mb-2">{{$car->miniDescription}}</p>
                <div class="flex flex-wrap border-gray-200 border border-solid">
                    <div class="p-2 w-1/2 lg:w-1/4">
                        <span class="flex"><img class="text-gray-400 w-6 h-6 mr-2" src="{{asset('images/calendar.svg')}}" alt="">
                        <div class="text-gray-400">Année</div></span>
                        <div class="text-gray-600">{{$car->registration}}</div>
                    </div>
                    <div class="p-2 w-1/2 lg:w-1/4">
                        <span class="flex"><img class="text-gray-400 w-6 h-6 mr-2" src="{{asset('images/speedometer.svg')}}" alt="">
                            <div class="text-gray-400">Kilométrage</div></span>
                        <div class="text-gray-600">{{$car->mileage}}km</div>
                    </div>
                    <div class="p-2 w-1/2 lg:w-1/4">
                        <span class="flex"><img class="text-gray-400 w-6 h-6 mr-2" src="{{asset('images/gearshift.svg')}}" alt="">
                            <div class="text-gray-400">Transmission</div></span>
                        <div class="text-gray-600">{{$car->gearbox}}</div>
                    </div>
                    <div class="p-2 w-1/2 lg:w-1/4">
                        <span class="flex"><img class="text-gray-400 w-6 h-6 mr-2" src="{{asset('images/power.svg')}}" alt="">
                            <div class="text-gray-400">Puissance</div></span>
                        <div class="text-gray-600">{{ floor($car->power/1.26) }}kw/{{ $car->power }}ch</div>
                    </div>
                    <div class="p-2 w-1/2 lg:w-1/4">
                        <span class="flex"><img class="text-gray-400 w-6 h-6 mr-2" src="{{asset('images/engine-motor.svg')}}" alt="">
                            <div class="text-gray-400">Moteur</div></span>
                        <div class="text-gray-600">{{$car->engineSize}}cm³</div>
                    </div>
                    <div class="p-2 w-1/2 lg:w-1/4">
                        <span class="flex"><img class="text-gray-400 w-6 h-6 mr-2" src="{{asset('images/fuel.svg')}}" alt="">
                            <div class="text-gray-400">Carburant</div></span>
                        <div class="text-gray-600">{{$car->fuel}}</div>
                    </div>
                    <div class="p-2 w-1/2 lg:w-1/4">
                        <span class="flex"><img class="text-gray-400 w-6 h-6 mr-2" src="{{asset('images/global-warming.svg')}}" alt="">
                            <div class="text-gray-400">Classe d'émission</div></span>
                        <div class="text-gray-600">{{$car->emissionClass}}</div>
                    </div>
                </div>
            </div>


            <div class="my-4 mx-auto lg:w-1/2 flex flex-wrap lg:flex-nowrap">
                @if($car->sold != null)
                    <div class="p-3 bg-green-500 text-zinc-100 rounded font-bold">
                        Vendu pour <span class=text-xl>{{$car->sold}}</span>€
                    </div>
                @elseif($car->lastPrice != null)
                    <div class="p-3 text-red-500 font-bold">
                        Client à fixer un prix fixe pour ce véhicule. Merci de nous contacter directement au
                        +32491767728 si vous souhaitez acheter ce véhicule pour le prix de <span
                            class=text-xl>{{$car->lastPrice}}</span>€.
                    </div>

                @elseif($timer == 'ok')
                    <div class="lg:w-1/2">
                        <p class="text-xl tracking-tight text-red-400 mb-2">Il y a actuellement {{$offers->count()}}
                            Offres pour
                            ce véhicule</p>
                        <div class="p-6 border-2 border-solid border-black">
                            <p class="text-center">Le chronomètre n'a pas encore commencer</p>
                            <div class="text-2xl text-center"></div>
                        </div>
                    </div>

                    <div class="lg:w-1/2">
                        <form action="{{ route('offer.store') }}" method="POST" enctype="multipart/form-data"
                              class="text-center">
                            @csrf
                            @method('POST')

                            <p class="text-2xl tracking-tight text-gray-900">Votre offre actuelle est de :
                                <span
                                    class="text-2xl font-bold tracking-tight text-gray-900">{{$offers->where('user_id', Auth::user()->id)->where('car_id', $car->id)->first()->offre ?? 'Vous n\'avez pas fait d\'offre'}}{{$offers->where('user_id', Auth::user()->id)->where('car_id', $car->id)->first() == null ? '' : '€'}}</span>
                            </p>
                            @if (session()->has('erreur'))
                                <div class="rounded bg-red-500 p-3 mt-3 mx-20 text-white font-bold">
                                    {{ session()->get('erreur') }}
                                </div>
                            @endif
                            @if (session()->has('success'))
                                <div class="rounded bg-green-500 p-3 mt-3 mx-20 text-white font-bold">
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                            <div class="mb-3 hidden">
                                <label for="car_id" class="block font-medium text-sm text-gray-700 dark:text-gray-600">car_id</label>
                                <input type="text"
                                       class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                                       id="car_id" value="{{$car->id}}" name="car_id">
                            </div>


                            <div class="my-10">

                                <label for="offer"
                                       class="block font-medium text-sm text-gray-700 dark:text-gray-600 mb-5">Faites
                                    votre offre</label>
                                <input type="text"
                                       class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                                       value="{{ old('offer') }}" id="offer" name="offer">
                            </div>

                            <button type="submit"
                                    class="inline-flex items-center rounded-full border border-transparent bg-green-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                                Soumettre
                            </button>

                        </form>
                    </div>
                @else

                    <div class="lg:w-1/2">
                        <p class="text-xl tracking-tight text-red-400 mb-2">Il y a actuellement {{$offers->count()}}
                            Offres pour
                            ce véhicule</p>
                        <div class="p-6 border-2 border-solid border-black">
                            <p class="text-center">La vente se termine dans :</p>
                            <div class="text-2xl text-center" id="timer"></div>
                        </div>


                    </div>

                    @if($time == 'ok')
                        <div class="lg:w-1/2">
                            <form action="{{ route('offer.store') }}" method="POST" enctype="multipart/form-data"
                                  class="text-center">
                                @csrf
                                @method('POST')

                                <p class="text-2xl tracking-tight text-gray-900">Votre offre actuelle est de :
                                    <span
                                        class="text-2xl font-bold tracking-tight text-gray-900">{{$offers->where('user_id', Auth::user()->id)->where('car_id', $car->id)->first()->offre ?? 'Vous n\'avez pas fait d\'offre'}}{{$offers->where('user_id', Auth::user()->id)->where('car_id', $car->id)->first() == null ? '' : '€'}}</span>
                                </p>
                                @if (session()->has('erreur'))
                                    <div class="rounded bg-red-500 p-3 mt-3 mx-20 text-white font-bold">
                                        {{ session()->get('erreur') }}
                                    </div>
                                @endif
                                @if (session()->has('success'))
                                    <div class="rounded bg-green-500 p-3 mt-3 mx-20 text-white font-bold">
                                        {{ session()->get('success') }}
                                    </div>
                                @endif
                                <div class="mb-3 hidden">
                                    <label for="car_id"
                                           class="block font-medium text-sm text-gray-700 dark:text-gray-600">car_id</label>
                                    <input type="text"
                                           class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                                           id="car_id" value="{{$car->id}}" name="car_id">
                                </div>


                                <div class="my-10">

                                    <label for="offer"
                                           class="block font-medium text-sm text-gray-700 dark:text-gray-600 mb-5">Faites
                                        votre offre</label>
                                    <input type="text"
                                           class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                                           value="{{ old('offer') }}" id="offer" name="offer">
                                </div>

                                <button type="submit"
                                        class="inline-flex items-center rounded-full border border-transparent bg-green-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                                    Soumettre
                                </button>

                            </form>
                        </div>
                    @endif
                    <!-- Reviews -->

                @endif


            </div>


            <div class="my-4 mx-auto lg:w-1/2">
                <div class="text-gray-400">Détails</div>
                <textarea rows='10' class="text-gray-600 w-full border-none" readonly>{{$car->description}}</textarea>
            </div>
        </div>

        <div class="mx-auto w-full lg:w-1/2 flex flex-wrap">

    <div class="w-full flex">
        <div class="w-1/2 font-bold border-solid border p-1 text-center border-black">Avantages</div>
        <div class="w-1/2 font-bold border-solid border p-1 text-center border-black">Inconvenients</div>
    </div>

    <div class="w-full flex">
        <div class="w-1/2 border-solid border border-black">
            @foreach($assets as $asset)
            <div class="flex justify-between p-1">
                <div class="p-1">{{$asset->description}}</div>

            </div>
            @endforeach
        </div>
        <div class="w-1/2 border-solid border border-black">
            @foreach($drowbacks as $drowback)
            <div class="flex justify-between p-1">
                <div>{{$drowback->description}}</div>

            </div>
            @endforeach
        </div>
    </div>


</div>
    </div>

    <script>
        const countdownMilliseconds = <?php echo json_encode($timer); ?> *
        60000;
        const startTime = <?php echo json_encode($start); ?>;
        const countDown = (startTime + countdownMilliseconds - Date.now()) / 1000;

        const countDiv = document.getElementById("timer");

        let remainingSeconds = countDown;
        let countDownInterval = setInterval(function () {
            const days = Math.floor(remainingSeconds / 86400);
            const hours = Math.floor(remainingSeconds / 3600) - (24 * days);
            const minutes = Math.floor(remainingSeconds / 60) - (Math.floor(remainingSeconds / 3600) * 60);
            const seconds = remainingSeconds % 60;
            const formattedDays = String(days.toFixed(0)).padStart(1, "0");
            const formattedHours = String(hours.toFixed(0)).padStart(1, "0");
            const formattedMinutes = String(minutes.toFixed(0)).padStart(2, "0");
            const formattedSeconds = String(seconds.toFixed(0)).padStart(2, "0");
            countDiv.innerHTML = `${formattedDays} jours ${formattedHours}:${formattedMinutes}:${formattedSeconds}`;
            remainingSeconds--;
            if (remainingSeconds < 0) {
                clearInterval(countDownInterval);
                countDiv.innerHTML = "Time Out";
            }
        }, 1000);

        const carousel = document.querySelector("[data-carousel]");
        const slides = carousel.querySelector("[data-slides]");

        let startX;
        let startY;

        slides.addEventListener("touchstart", (event) => {
            startX = event.touches[0].clientX;
            startY = event.touches[0].clientY;
        });

        slides.addEventListener("touchmove", (event) => {
            const endX = event.touches[0].clientX;
            const endY = event.touches[0].clientY;

            const diffX = startX - endX;
            const diffY = startY - endY;

            if (Math.abs(diffX) > Math.abs(diffY)) {
                event.preventDefault();
            }
        });

        slides.addEventListener("touchend", (event) => {
            const endX = event.changedTouches[0].clientX;
            const endY = event.changedTouches[0].clientY;

            const diffX = startX - endX;
            const diffY = startY - endY;

            if (Math.abs(diffX) > Math.abs(diffY)) {
                const offset = diffX > 0 ? 1 : -1;
                const activeSlide = slides.querySelector("[data-active]");
                let newIndex = [...slides.children].indexOf(activeSlide) + offset;
                if (newIndex < 0) newIndex = slides.children.length - 1;
                if (newIndex >= slides.children.length) newIndex = 0;
                slides.children[newIndex].dataset.active = true;
                delete activeSlide.dataset.active;
            }
        });

        const buttons = document.querySelectorAll("[data-carousel-button]");

        buttons.forEach(button => {
            button.addEventListener("click", () => {
                const offset = button.dataset.carouselButton === "next" ? 1 : -1;
                const activeSlide = slides.querySelector("[data-active]");
                let newIndex = [...slides.children].indexOf(activeSlide) + offset;
                if (newIndex < 0) newIndex = slides.children.length - 1;
                if (newIndex >= slides.children.length) newIndex = 0;
                slides.children[newIndex].dataset.active = true;
                delete activeSlide.dataset.active;
            });
        });


    </script>

@endsection
