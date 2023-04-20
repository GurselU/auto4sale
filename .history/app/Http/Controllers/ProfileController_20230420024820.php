<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\CarOrigin;
use App\Models\Categorie;
use App\Models\Chassi;
use App\Models\Contact;
use App\Models\EmissionClass;
use App\Models\Gearbox;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        $categories = Categorie::all();
        $chassis = Chassi::all();
        $contacts = Contact::all();
        $carOrigins = CarOrigin::all();
        $emissionClasses = EmissionClass::all();
        $gearboxes = Gearbox::all();
        $user = $request->user();
        // return view('profile.edit', [
        //     'user' => $request->user(),
        // ]);
        return view('profile.edit', compact('categories', 'chassis', 'contacts', 'user', 'carOrigins', 'emissionClasses', 'gearboxes'));
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->company = $request->company;
        $request->user()->vat = $request->vat;
        $request->user()->adres = $request->adres;
        $request->user()->zipCode = $request->zipCode;
        $request->user()->country = $request->country;
        $request->user()->phone = $request->phone;

        $request->user()->categories()->sync($request->tableIdCat);
        $request->user()->chassis()->sync($request->tableIdChassi);
        $request->user()->contacts()->sync($request->tableIdContact);
        $request->user()->carOrigins()->sync($request->tableIdOrigin);
        $request->user()->emissionClasses()->sync($request->tableIdClass);
        $request->user()->gearboxes()->sync($request->tableIdGearbox);

        $request->user()->maxYear = $request->maxYear;
        $request->user()->maxBudget = $request->maxBudget;

        $request->user()->updated_at = now();

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
