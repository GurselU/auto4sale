<?php

namespace App\Http\Controllers;

use App\Models\Drowback;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File as FacadesFile;

class DrowbackController extends Controller
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

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\drowback  $drowback
     * @return \Illuminate\Http\Response
     */
    public function show(drowback $drowback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\drowback  $drowback
     * @return \Illuminate\Http\Response
     */
    public function edit(drowback $drowback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\drowback  $drowback
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        Drowback::create([
            'description' => $request->description,
            'car_id' => $id
        ]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\drowback  $drowback
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $drowback = Drowback::find($id);
        $drowback->delete();
        return redirect()->back()->with("success", "Suppression effectué avec succès");
    }
}
