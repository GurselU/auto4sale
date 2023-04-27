<?php

namespace App\Http\Controllers;

use App\Models\DrowbackPictures;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File as FacadesFile;

class DrowbackPicturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->drowback;

        $filename = $file->getClientOriginalName();
        // $file->storeAs('public/' . $request->car_id . '/', $filename);
        $file->move('carImages/'. $request->car_id. '/drowbacks', $filename);
        $picture = new DrowbackPictures();
        $picture->name = $filename;
        $picture->location = 'carImages/'. $request->car_id. '/drowbacks' . '/' . $filename;
        $picture->description = $request->descriptionDrowback;
        $picture->car_id = $request->car_id;
        $picture->save();


        return redirect()->back()->with('success', 'File/s Uploaded Succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DrowbackPictures  $drowbackPictures
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::find($id);
        $allDrowbacks = DrowbackPictures::all();
        $drowbackPictures = $allDrowbacks->where('car_id', $id);

        return view('admin.picture.drowback', compact('car', 'drowbackPictures'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DrowbackPictures  $drowbackPictures
     * @return \Illuminate\Http\Response
     */
    public function edit(DrowbackPictures $drowbackPictures)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DrowbackPictures  $drowbackPictures
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DrowbackPictures $drowbackPictures)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DrowbackPictures  $drowbackPictures
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $picture = DrowbackPictures::find($id);
        $picture->delete();
        if (FacadesFile::exists(public_path($picture->location))) {
            FacadesFile::delete(public_path($picture->location));
        }
        return redirect()->back()->with("success", "Suppression effectué avec succès");
    }
}
