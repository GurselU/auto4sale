<?php

namespace App\Http\Controllers;

use App\Models\NewsletterEmail;
use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterEmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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
        $newsMail = NewsletterEmail::all();
        $newsMail = $newsMail->where('email', $request->email)->count();
        if ($newsMail < 1) {
            NewsletterEmail::create([
                'email' => $request->email,
            ]);
            return redirect()->back()->with('success', 'adresse email enregistrer');
        }else{
            return redirect()->back()->with('success', 'adresse email était déjà enregistrer');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NewsletterEmail  $newsletterEmail
     * @return \Illuminate\Http\Response
     */
    public function show(NewsletterEmail $newsletterEmail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NewsletterEmail  $newsletterEmail
     * @return \Illuminate\Http\Response
     */
    public function edit(NewsletterEmail $newsletterEmail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NewsletterEmail  $newsletterEmail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewsletterEmail $newsletterEmail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewsletterEmail  $newsletterEmail
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsletterEmail $newsletterEmail)
    {
        //
    }
}
