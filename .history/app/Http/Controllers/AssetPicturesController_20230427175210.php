<?php

namespace App\Http\Controllers;

use App\Models\AssetPictures;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File as FacadesFile;

class AssetPicturesController extends Controller
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
        $file = $request->asset;

        $filename = $file->getClientOriginalName();
        // $file->storeAs('public/'.$request->car_id.'/', $filename);
        
        $picture = new AssetPictures();
        $picture->name = $filename;
        $picture->location = 'storage/'.$request->car_id.'/'.$filename;
        $picture->description = $request->description;
        $picture->car_id = $request->car_id;
        $picture->save();
    

    return redirect()->back()->with('success', 'File/s Uploaded Succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AssetPictures  $assetPictures
     * @return \Illuminate\Http\Response
     */
    public function show(AssetPictures $assetPictures)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AssetPictures  $assetPictures
     * @return \Illuminate\Http\Response
     */
    public function edit(AssetPictures $assetPictures)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AssetPictures  $assetPictures
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AssetPictures $assetPictures)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AssetPictures  $assetPictures
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $picture = AssetPictures::find($id);
        $picture->delete();
        if (FacadesFile::exists(public_path($picture->location))) {
            FacadesFile::delete(public_path($picture->location));
        }
        return redirect()->back()->with("success", "Suppression effectué avec succès");
    }
}
