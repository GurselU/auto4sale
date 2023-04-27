<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarOrigin;
use App\Models\Categorie;
use App\Models\Chassi;
use App\Models\EmissionClass;
use App\Models\Gearbox;
use App\Models\Seller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seller = Seller::all();
        return view('admin.seller.index', compact("seller"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.seller.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categories = Categorie::all();
        $chassis = Chassi::all();
        $carOrigins = CarOrigin::all();
        $emissionClasses = EmissionClass::all();
        $gearboxes = Gearbox::all();

        $seller = new Seller();
        $seller->name = $request->name;
        $seller->phone = $request->phone;
        $seller->email = $request->email;
        $seller->adres = $request->adres;
        $seller->zipCode = $request->zipCode;
        $seller->country = $request->country;


        $seller->updated_at = now();

        $seller->save();
        return view("admin.car.create", compact('seller', 'categories', 'chassis', "carOrigins", "emissionClasses", "gearboxes"))->with("success", "Info vendeur ok");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function show(Seller $seller)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $seller = Seller::find($id);
        return view('admin.seller.edit', compact("seller"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $seller = Seller::find($id);

        $seller->name = $request->name;
        $seller->phone = $request->phone;
        $seller->email = $request->email;
        $seller->adres = $request->adres;
        $seller->zipCode = $request->zipCode;
        $seller->country = $request->country;

        $seller->updated_at = now();
        $seller->save();
        return redirect()->back()->with("success", "Modification effectué avec succès");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $seller = Seller::find(Car::find($id)->seller_id);
        if (FacadesFile::exists(public_path('carImages/'.$car->id))) {
            dd('exist');
            // FacadesFile::delete(public_path('carImages/'.$car->id));
        }
        $seller->delete();
        return redirect()->back()->with("success", "Suppression effectué avec succès");
    }
}
