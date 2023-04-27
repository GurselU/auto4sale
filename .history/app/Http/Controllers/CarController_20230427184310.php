<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Car;
use App\Models\CarOrigin;
use App\Models\Categorie;
use App\Models\Chassi;
use App\Models\Drowback;
use App\Models\EmissionClass;
use App\Models\Gearbox;
use App\Models\Offer;
use App\Models\Picture;
use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File as FacadesFile;


class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware(['auth', 'buyerVerification']);
        $this->middleware(['auth', 'adminVerification'])->only(['create', 'edit']);
    }

    public function index()
    {

        $pictures = Picture::all();
        $cars = Car::where('archived', 'no')->get();
        $emissionClasses = EmissionClass::all();
        $gearboxes = Gearbox::all();


        $allOffers = Offer::orderBy('offre', 'desc')->get();
        return view('admin.car.index', compact("cars", "allOffers", "pictures", "emissionClasses", "gearboxes"));
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

        $car = new Car();
        $car->seller_id = $request->seller_id;
        $car->categorie_id = $request->categorie;
        $car->chassi_id = $request->chassi;
        $car->gearbox_id = $request->gearbox;
        $car->car_origin_id = $request->origin;
        $car->emission_class_id = $request->class;
        $car->mark = $request->mark;
        $car->model = $request->model;
        $car->registration = $request->registration;
        $car->mileage = $request->mileage;
        $car->power = $request->power;
        $car->engineSize = $request->engineSize;
        $car->miniDescription = $request->miniDescription;
        $car->description = $request->description;
        $car->maxPrice = $request->maxPrice;
        $car->price = $request->price;


        $car->updated_at = now();

        $car->save();
        return redirect('admin/car');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::find($id);
        if ($car->status == 'available') {
            $car->status = 'reserved';
            $car->save();
            return redirect()->back()->with("success", "car reserved");
        } elseif ($car->status == 'reserved') {
            $car->status = 'sold';
            $car->save();
            return redirect()->back()->with("success", "car sold");
        } elseif ($car->status == 'sold') {
            $car->status = 'available';
            $car->save();
            return redirect()->back()->with("success", "car available");
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $categories = Categorie::all();
        $chassis = Chassi::all();
        $carOrigins = CarOrigin::all();
        $emissionClasses = EmissionClass::all();
        $gearboxes = Gearbox::all();
        $car = Car::find($id);
        $seller = Seller::find($car->seller_id);
        $allAssets = Asset::all();
        $allDrowbacks = Drowback::all();
        $assets = $allAssets->where('car_id', $id);
        $drowbacks = $allDrowbacks->where('car_id', $id);


        return view("admin.car.edit", compact('car', 'seller', 'assets', 'drowbacks', 'categories', 'chassis', "carOrigins", "emissionClasses", "gearboxes"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $car = Car::find($id);
        $car->seller_id = $request->seller_id;
        $car->categorie_id = $request->categorie;
        $car->chassi_id = $request->chassi;
        $car->gearbox_id = $request->gearbox;
        $car->car_origin_id = $request->origin;
        $car->emission_class_id = $request->class;
        $car->mark = $request->mark;
        $car->model = $request->model;
        $car->registration = $request->registration;
        $car->mileage = $request->mileage;
        $car->power = $request->power;
        $car->engineSize = $request->engineSize;
        $car->miniDescription = $request->miniDescription;
        $car->description = $request->description;
        $car->maxPrice = $request->maxPrice;
        $car->oldPrice = $car->price;
        $car->price = $request->price;



        $car->updated_at = now();

        $car->save();
        return redirect()->back()->with("success", "Car edited with success");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::find($id);
        if (FacadesFile::exists(public_path('carImages/'.$car->id))) {
            FacadesFile::delete(public_path('carImages/'.$car->id));
        }
        $car->delete();
        return redirect()->back()->with("success", "Suppression effectué avec succès");
    }
}