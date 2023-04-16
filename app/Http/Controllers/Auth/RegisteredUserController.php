<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\CarOrigin;
use App\Models\Categorie;
use App\Models\Chassi;
use App\Models\Contact;
use App\Models\EmissionClass;
use App\Models\Gearbox;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\Rules\Exists;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $categories = Categorie::all();
        $chassis = Chassi::all();
        $contacts = Contact::all();
        $carOrigins = CarOrigin::all();
        $emissionClasses = EmissionClass::all();
        $gearboxes = Gearbox::all();
        return view('auth.register', compact('categories', 'chassis', 'contacts', 'carOrigins', 'emissionClasses', 'gearboxes'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $emailExist = User::where('email', '=', $request->email)->count();
        if ($emailExist > 0) {
            return redirect()->back()->with('error', 'Il existe déjà un compte avec cette adresse email');
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->company = $request->company;
        $user->vat = $request->vat;
        $user->adres = $request->adres;
        $user->zipCode = $request->zipCode;
        $user->country = $request->country;
        $user->phone = $request->phone;
        $user->maxYear = $request->maxYear;
        $user->maxBudget = $request->maxBudget;

        $user->created_at = now();
        $user->save();

        $user->categories()->sync($request->tableIdCat);
        $user->chassis()->sync($request->tableIdChassi);
        $user->contacts()->sync($request->tableIdContact);
        $user->carOrigins()->sync($request->tableIdOrigin);
        $user->emissionClasses()->sync($request->tableIdClass);
        $user->gearboxes()->sync($request->tableIdGearbox);

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
