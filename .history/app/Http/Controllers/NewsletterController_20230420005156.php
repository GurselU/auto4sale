<?php

namespace App\Http\Controllers;

use App\Mail\CarMail;
use App\Mail\MagicLinkMail;
use App\Mail\MagicLinkOffer;
use App\Models\Car;
use App\Models\MagicLink;
use App\Models\Newsletter;
use App\Models\Picture;
use App\Models\Timer;
use App\Models\User;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class NewsletterController extends Controller
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
     * @param  \App\Models\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        // Debut Nexme
        $basic  = new \Vonage\Client\Credentials\Basic("be3f6806", "Fd57QAGV00m8aVqT");
        $client = new \Vonage\Client($basic);
        // Fin Nexmo

        $car = Car::find($id);

        $today = Carbon::now();
        $registration = Carbon::parse($car->registration);
        $todayDate = new DateTime($today);
        $registrationDate = new DateTime($registration);
        $difference = $todayDate->diff($registrationDate);
        $vehicleAge = $difference->format('%a') / 365;

        // $magicLink ='';

        // return view('admin.emails.newCar', compact('car', 'magicLink'));

dd()
        $buyersBySms = User::whereHas('categories', function ($query) use ($car) {
            $query
                ->where('categorie', $car->categorie->categorie);
        })->whereHas('chassis', function ($query) use ($car) {
            $query
                ->where('chassi', $car->chassi->chassi);
        })->whereHas('gearboxes', function ($query) use ($car) {
            $query
                ->where('gearbox', $car->gearbox->gearbox);
        })->whereHas('emissionClasses', function ($query) use ($car) {
            $query
                ->where('emission_class', $car->emissionClass->class);
        })->whereHas('carOrigins', function ($query) use ($car) {
            $query
                ->where('origin', $car->carOrigin->origin);
        })->whereHas('contacts', function ($query) {
            $query
                ->where('contact', 'sms');
        })->where('maxYear', '>', $vehicleAge)
            ->where('maxBudget', '>', $car->maxPrice)
            ->get();


        $buyersByEmail = User::whereHas('categories', function ($query) use ($car) {
            $query
                ->where('categorie', $car->categorie->categorie);
        })->whereHas('chassis', function ($query) use ($car) {
            $query
                ->where('chassi', $car->chassi->chassi);
        })->whereHas('contacts', function ($query) {
            $query
                ->where('contact', 'email');
        })->where('maxYear', '>', $vehicleAge)
            ->where('maxBudget', '>', $car->maxPrice)
            ->get();

        dd($buyersBySms);


        // foreach ($buyersByEmail as $buyer) {

        //     $magicLink = Str::random(60);
        //     MagicLink::create([
        //         'email' => $buyer->email,
        //         'token' => $magicLink
        //     ]);
        //     Mail::to($buyer->email)->send(new MagicLinkOffer($magicLink, $car));
        // }

        // foreach ($buyersBySms as $buyer) {

        //     $magicLink = Str::random(8);
        //     MagicLink::create([
        //         'email' => $buyer->email,
        //         'token' => $magicLink
        //     ]);

        //     $client->sms()->send(
        //         new \Vonage\SMS\Message\SMS($buyer->phone, 'Webappfix', $car->mark . ' ' . $car->model . ' disponible sur Sellauto. Cliquez sur le lien pour faire votre offre ' . route('login.for.offer', [$magicLink, $car->id]))
        //     );
        // }

        return redirect('admin/car');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Newsletter $newsletter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newsletter $newsletter)
    {
        //
    }
}
