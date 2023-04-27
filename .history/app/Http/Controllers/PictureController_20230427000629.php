<?php

namespace App\Http\Controllers;

use App\Models\AssetPictures;
use App\Models\Car;
use App\Models\DrowbackPictures;
use App\Models\Picture;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File as FacadesFile;

class PictureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $pictures = Picture::all();
        $nbrPictures = Picture::count();
        return view('admin.picture.create', compact('pictures', 'nbrPictures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pictures = Picture::all();
        $nbrPictures = Picture::count();
        return view('admin.picture.create', compact('pictures', 'nbrPictures'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => 'Please select file to upload',
        ];

        $this->validate($request, [
            'file' => 'required',
        ], $messages);

        foreach ($request->file as $file) {

            $filename = $file->getClientOriginalName();
            $file->storeAs('public/'.$request->car_id.'/', $filename);
            $picture = new Picture;
            $picture->name = $filename;
            $picture->location = 'carImages/'.$request->car_id.'/'.$filename;
            $picture->car_id = $request->car_id;
            $picture->save();
            $file->move(public_path('carImages/'.$request->car_id.'/'), $filename);
            if (FacadesFile::exists(public_path($picture->location))) {
                FacadesFile::delete(public_path($picture->location));
            }
        }

        return redirect()->back()->with('success', 'File/s Uploaded Succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::find($id);
        $images = Picture::all();
        $allAssets = AssetPictures::all();
        $allDrowbacks = DrowbackPictures::all();
        $pictures = $images->where('car_id', '=', $id);
        $assetPictures = $allAssets->where('car_id', $id);
        $drowbackPictures = $allDrowbacks->where('car_id', $id);

        return view('admin.picture.general', compact('pictures', 'car', 'assetPictures', 'drowbackPictures'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $picture = Picture::find($id);
        $picture->delete();
        if (FacadesFile::exists(public_path($picture->location))) {
            FacadesFile::delete(public_path($picture->location));
        }
        return redirect()->back()->with("success", "Suppression effectué avec succès");
    }


    public function asset($id)
    {
        $car = Car::find($id);
        $allAssets = AssetPictures::all();
        $assetPictures = $allAssets->where('car_id', $id);

        return view('admin.picture.asset', compact('car', 'assetPictures'));
    }

    public function drowback($id)
    {
        $car = Car::find($id);
        $allDrowbacks = DrowbackPictures::all();
        $drowbackPictures = $allDrowbacks->where('car_id', $id);

        return view('admin.picture.drowback', compact('car', 'drowbackPictures'));
    }
}
