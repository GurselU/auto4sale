@extends('main.layouts.app')
@section('content')
@include('admin.partials.header')
@include('main.partials.loader')

<!--=================================
car-details  -->

<section class="car-details page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h3>{{$car->mark}} {{$car->model}} </h3>
                <p>{{$car->miniDescription}}</p>
            </div>
            <div class="col-md-3 pb-3">
                <div class="car-price text-lg-end">
                    <strong>Il y a actuellement {{$offers->count()}}
                        Offres pour
                        ce véhicule</strong>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="slider-slick" id="carouselPicture">
                    <div class="slider slider-for detail-big-car-gallery">
                        @foreach($pictures as $picture)
                        <img class="img-fluid" src="{{asset($picture->location)}}" alt="">
                        @endforeach
                    </div>
                    <div class="slider slider-nav">
                        @foreach($pictures as $picture)
                        <img class="img-fluid" src="{{asset($picture->location)}}" alt="">
                        @endforeach
                    </div>
                </div>

                <div class="slider-slick" id="carouselAsset">
                    <div class="slider slider-for detail-big-car-gallery">
                        @foreach($assetPictures as $picture)
                        <img class="img-fluid" src="{{asset($picture->location)}}" alt="">
                        @endforeach
                    </div>
                    <div class="slider slider-nav">
                        @foreach($assetPictures as $picture)
                        <img class="img-fluid" src="{{asset($picture->location)}}" alt="">
                        @endforeach
                    </div>
                </div>

                <div class="slider-slick" id="carouselDrowback">
                    <div class="slider slider-for detail-big-car-gallery">
                        @foreach($drowbackPictures as $picture)
                        <img class="img-fluid" src="{{asset($picture->location)}}" alt="">
                        @endforeach
                    </div>
                    <div class="slider slider-nav">
                        @foreach($drowbackPictures as $picture)
                        <img class="img-fluid" src="{{asset($picture->location)}}" alt="">
                        @endforeach
                    </div>
                </div>

                <div id="tabs">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item icon-diamond" role="presentation">
                            <button class="nav-link active" id="general-information-tab" data-bs-toggle="tab" data-bs-target="#general-information" type="button" role="tab" aria-controls="general-information" aria-selected="true">Information Général</button>
                        </li>
                        <li class="nav-item icon-list" role="presentation">
                            <button class="nav-link" id="features-options-tab" data-bs-toggle="tab" data-bs-target="#features-options" type="button" role="tab" aria-controls="features-options" aria-selected="false">Points Forts</button>
                        </li>
                        <li class="nav-item icon-equalizer" role="presentation">
                            <button class="nav-link " id="vehicle-overview-tab" data-bs-toggle="tab" data-bs-target="#vehicle-overview" type="button" role="tab" aria-controls="vehicle-overview" aria-selected="false">Imperfections</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="general-information" role="tabpanel" aria-labelledby="general-information-tab">
                            <h6>Description</h6>
                            <div>{{$car->description}}</div>
                        </div>

                        <div class="tab-pane fade" id="features-options" role="tabpanel" aria-labelledby="features-options-tab">
                            <h6>Visible sur photos</h6>
                            @foreach($assetPictures as $picture)
                            <li><i class="fa fa-camera"></i> {{$picture->description}}</li>
                            @endforeach
                            <h6 class="pt-5">Autres points forts</h6>
                            @foreach($assets as $asset)
                            <li><i class="fa fa-check"></i> {{$asset->description}}</li>
                            @endforeach
                        </div>

                        <div class="tab-pane fade" id="vehicle-overview" role="tabpanel" aria-labelledby="vehicle-overview-tab">
                            <h6>Visible sur photos</h6>
                            @foreach($drowbackPictures as $picture)
                            <li><i class="fa fa-camera"></i> {{$picture->description}}</li>
                            @endforeach
                            <h6 class="pt-5">Autres imperfections</h6>
                            @foreach($drowbacks as $drowback)
                            <li><i class="fa fa-close"></i> {{$drowback->description}}</li>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="car-details-sidebar">
                    <div class="details-block details-weight">
                        <h5>DESCRIPTION</h5>
                        <ul>
                            <li> <span>Marque</span> <strong class="text-end">{{$car->mark}}</strong></li>
                            <li> <span>Modèle</span> <strong class="text-end">{{$car->model}}</strong></li>
                            <li> <span>1ère immatriculation </span> <strong class="text-end">{{$car->registration}}</strong></li>
                            <li> <span>Kilométrage</span> <strong class="text-end">{{$car->mileage}}km</strong></li>
                            <li> <span>Transmission</span> <strong class="text-end">{{$gearbox->name}}</strong></li>
                            <li> <span>Carburant</span> <strong class="text-end">{{$emissionClass->name}}</strong></li>
                            <li> <span>Puissance</span> <strong class="text-end">{{ floor($car->power/1.26) }}kw/{{ $car->power }}ch</strong></li>
                            <li> <span>Cylindrée</span> <strong class="text-end">{{$car->engineSize}}cm³</strong></li>
                            <li> <span>Etat</span> <strong class="text-end">{{$categorie->name}}</strong></li>
                            <li> <span>Catégorie</span> <strong class="text-end">{{$chassi->name}}</strong></li>
                        </ul>
                    </div>
                    @if($timer != 0)
                    <div class="border">
                        <div class="py-5">
                            <p class="text-center">La vente se termine dans :</p>
                            <div class="fs-4 text-center" id="timer"></div>
                        </div>
                    </div>
                    @endif
                    @if($car->status == )
                    <p class="text-danger pt-3">{{$offers->where('user_id', Auth::user()->id)->where('car_id', $car->id)->first() != null ? 'Votre offre actuelle est de : ' : ''}}{{$offers->where('user_id', Auth::user()->id)->where('car_id', $car->id)->first()->offre ?? 'Vous n\'avez pas fait d\'offre'}}{{$offers->where('user_id', Auth::user()->id)->where('car_id', $car->id)->first() == null ? '' : '€'}}</p>
                    <div class="details-form contact-2 details-weight">
                        <form class="gray-form" action="{{ route('offer.store') }}" method="POST" enctype="multipart/form-data" id="send_enquiry_form">
                            @csrf
                            @method('POST')
                            <h5>Faites votre offre</h5>
                            <div id="send_enquiry_notice" class="form-notice" style="display:none;"></div>
                            <input type="hidden" name="action" value="send_enquiry" />
                            @if (session()->has('error'))
                            <div class="bg-danger text-white px-2">
                                {{ session()->get('error') }}
                            </div>
                            @endif
                            @if (session()->has('success'))
                            <div class="bg-success text-white px-2">
                                {{ session()->get('success') }}
                            </div>
                            @endif
                            <div class="mb-3">
                                <label class="form-label">Offre*</label>
                                <input type="text" class="form-control" placeholder="Offre" name="offer" id="send_enquiry_name">
                            </div>

                            <input value="{{$car->id}}" name="car_id" hidden></input>
                            <div>
                                <button type="submit" class="button red bg-success" id="send_enquiry_submit" href="javascript:void(0)">Soumettre <i class="fa fa-spinner fa-spin fa-fw btn-loader" style="display: none;"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="details-phone details-weight">
                        <div class="feature-box-3 grey-border">
                            <div class="icon">
                                <i class="fa fa-headphones"></i>
                            </div>
                            <div class="content">
                                <h4>+32 491 76 77 28 </h4>
                                <p>Appelez nous pour plus d'informations. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--=================================
car-details -->

@include('main.partials.backToTop')
@include('main.partials.footer')

<script>
    const countdownMilliseconds = <?php echo json_encode($timer); ?> * 60000;
    if (countdownMilliseconds != 0) {
        const startTime = <?php echo json_encode($start); ?>;
        const countDown = (startTime + countdownMilliseconds - Date.now()) / 1000;

        const countDiv = document.getElementById("timer");

        let remainingSeconds = countDown;
        let countDownInterval = setInterval(function() {
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
    }

    // Caroussel offer create

    setTimeout(() => {
        document.getElementById("carouselAsset").hidden = true;
        document.getElementById("carouselDrowback").hidden = true;
    }, "2000");


    document.getElementById("general-information-tab").addEventListener(
        "click",
        () => {
            document.getElementById("carouselPicture").hidden = false;
            document.getElementById("carouselAsset").hidden = true;
            document.getElementById("carouselDrowback").hidden = true;
        });
    document.getElementById("features-options-tab").addEventListener(
        "click",
        () => {
            document.getElementById("carouselPicture").hidden = true;
            document.getElementById("carouselAsset").hidden = false;
            document.getElementById("carouselDrowback").hidden = true;
        });
    document.getElementById("vehicle-overview-tab").addEventListener(
        "click",
        () => {
            document.getElementById("carouselPicture").hidden = true;
            document.getElementById("carouselAsset").hidden = true;
            document.getElementById("carouselDrowback").hidden = false;
        });

    // Caroussel offer create
</script>
@endsection