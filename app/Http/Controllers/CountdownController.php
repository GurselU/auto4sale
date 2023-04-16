<?php

namespace App\Http\Controllers;

use App\Models\Countdown;
use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class CountdownController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Countdown  $countdown
     * @return \Illuminate\Http\Response
     */
    public function show(Countdown $countdown)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Countdown  $countdown
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        if (Countdown::where('car_id', $id)->count() > 0) {
            $toDelete = Countdown::where('car_id', $id)->first();
            $toDelete->delete();
        }

        Countdown::create([
            'timer' => $request->timer,
            'car_id' => $id
        ]);

        return redirect()->back()->with('success', 'Timer vient d etre declencher');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Countdown  $countdown
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Countdown $countdown)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Countdown  $countdown
     * @return \Illuminate\Http\Response
     */
    public function destroy(Countdown $countdown)
    {
        //
    }
}
