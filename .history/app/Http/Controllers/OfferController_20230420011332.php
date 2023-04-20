<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\AssetPictures;
use App\Models\Car;
use App\Models\Categorie;
use App\Models\Chassi;
use App\Models\Countdown;
use App\Models\Drowback;
use App\Models\DrowbackPictures;
use App\Models\EmissionClass;
use App\Models\Gearbox;
use App\Models\Offer;
use App\Models\Picture;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $car = Car::find($id);
        $buyers = User::all();
        $allOffers = Offer::orderBy('offre', 'desc')->get();
        $offersForThisCar = $allOffers->where('car_id', '=', $id);

        return view('admin.offer.index', compact("car", "buyers", "offersForThisCar"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'offer' => ['required', 'string', 'max:255'],
        ]);

        $oldOffer = Offer::where('user_id', $request->user()->id)->where('car_id', $request->car_id)->first();
        $offer = new Offer();
        $offer->offre = $request->offer;
        $offer->user_id = $request->user()->id;
        $offer->car_id = $request->car_id;



        if ($request->offer <= 3000) {
            $offer->smallOffer = $request->offer - 300;
        } elseif ($request->offer <= 10000) {
            $offer->smallOffer = $request->offer * 0.9;
        } else {
            $j = 0;
            for ($i = 10000; $i < $request->offer; $i += 1000) {
                $j += 50;
                $offer->smallOffer = $request->offer * 0.9 + $j;
            }
        }

        if (Countdown::where('car_id', $request->car_id)->count() > 0) {
            $timerEnMilliseconds = Countdown::where('car_id', $request->car_id)->first()->timer * 60000;
            $startEnMilliseconds = Countdown::where('car_id', $request->car_id)->first()->created_at->valueOf();
            $nowEnMilliseconds = Carbon::now()->valueOf();

            if (($timerEnMilliseconds + $startEnMilliseconds) < $nowEnMilliseconds) {
                return redirect()->back()->with("error", "Temps dépassé, il n'est plus possible d insérer une offre");
            } else {
                if ($oldOffer != null) {
                    if ($request->offer <= $oldOffer->offre) {
                        return redirect()->back()->with("error", "Votre nouvelle offre doit être supérieur à votre offre actuelle");
                    } else {
                        $oldOffer->delete();

                        $offer->updated_at = now();
                        $offer->save();

                        return redirect()->back()->with("success", "Offre enregistrer avec succès");
                    }
                } else {

                    $offer->updated_at = now();
                    $offer->save();

                    return redirect()->back()->with("success", "Offre enregistrer avec succès");
                }
            }
        } else {
            if ($oldOffer != null) {
                if ($request->offer <= $oldOffer->offre) {
                    return redirect()->back()->with("error", "Votre nouvelle offre doit être supérieur à votre offre actuelle");
                } else {
                    $oldOffer->delete();

                    $offer->updated_at = now();
                    $offer->save();

                    return redirect()->back()->with("success", "Offre enregistrer avec succès");
                }
            } else {

                $offer->updated_at = now();
                $offer->save();

                return redirect()->back()->with("success", "Offre enregistrer avec succès");
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::find($id);
        $buyers = User::all();
        $allOffers = Offer::orderBy('offre', 'desc')->get();
        $offersForThisCar = $allOffers->where('car_id', '=', $id);

        return view('admin.offer.index', compact("car", "buyers", "offersForThisCar"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::find($id);
        $categorie = Categorie::find($car->categorie_id);
        $chassi = Chassi::find($car->chassi_id);
        $gearbox = Gearbox::find($car->gearbox_id);
        $emissionClass = EmissionClass::find($car->emission_class_id);
        $offers = Offer::where('car_id', $id);
        $images = Picture::all();
        $pictures = $images->where('car_id', $id);
        $allAssets = Asset::all();
        $allDrowbacks = Drowback::all();
        $assets = $allAssets->where('car_id', $id);
        $drowbacks = $allDrowbacks->where('car_id', $id);
        $allAssetPictures = AssetPictures::all();
        $allDrowbackPictures = DrowbackPictures::all();
        $assetPictures = $allAssetPictures->where('car_id', $id);
        $drowbackPictures = $allDrowbackPictures->where('car_id', $id);


        if (Countdown::where('car_id', $id)->first() == null) {
            $timer = 0;
            $start = 0;
            $time = 'open';
        } else {
            $timer = Countdown::where('car_id', $id)->first()->timer;
            $start = Countdown::where('car_id', $id)->first()->created_at->valueOf();
            $nowEnMilliseconds = Carbon::now()->valueOf();
            if ($timer * 60000 + $start > $nowEnMilliseconds) {
                $time = 'ok';
            } else {
                $time = 'nok';
            }
        }
        return view("admin.offer.create", compact('car', 'offers', 'timer', 'start', 'pictures', 'assets', 'drowbacks', 'assetPictures', 'drowbackPictures', 'time', 'categorie', 'chassi', "emissionClass", "gearbox"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $offer = Offer::find($id);
        $offer->delete();
        return redirect()->back()->with("success", "Suppression effectué avec succès");
    }

    public function realoffers($id)
    {
        $car = Car::find($id);
        $buyers = User::all();
        $allOffers = Offer::orderBy('offre', 'desc')->get();
        $offersForThisCar = $allOffers->where('car_id', '=', $id);

        return view('admin.offer.real', compact("car", "buyers", "offersForThisCar"));
    }
}
