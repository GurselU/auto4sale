<?php

namespace App\Http\Controllers;

use App\Models\CarOrigin;
use App\Models\Categorie;
use App\Models\Chassi;
use App\Models\Contact;
use App\Models\EmissionClass;
use App\Models\Gearbox;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $categories = Categorie::all();
        $chassis = Chassi::all();
        $roles = Role::all();

        return view('admin.user.index', compact("users", "categories", "chassis", "roles"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        $chassis = Chassi::all();
        return view("admin.user.create", compact('categories', "chassis"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'company' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],

        ]);

        $user = new User();
        $user->name = $request->name;
        $user->password = $request->password;
        $user->company = $request->company;
        $user->email = $request->email;
        $user->vat = $request->vat;
        $user->adres = $request->adres;
        $user->zipCode = $request->zipCode;
        $user->country = $request->country;
        $user->phone = $request->phone;

        $user->maxYear = $request->maxYear;
        $user->maxBudget = $request->maxBudget;


        $user->updated_at = now();

        $user->save();
        $user->categories()->sync($request->tableIdCat);
        $user->chassis()->sync($request->tableIdChassi);
        return redirect()->route("user.index")->with("success", "Banner créer avec succès");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $user = User::find($id);
        // $categories = Categorie::all();
        // $chassis = Chassi::all();
        // $contacts = Contact::all();
        // $roles = Role::all();
        // return view('admin.user.edit', compact("user", "categories", "chassis", "contacts", "roles"));

        $categories = Categorie::all();
        $chassis = Chassi::all();
        $contacts = Contact::all();
        $carOrigins = CarOrigin::all();
        $emissionClasses = EmissionClass::all();
        $gearboxes = Gearbox::all();
        $user = User::find($id);
        return view('profile.edit', compact('categories', 'chassis', 'contacts', 'user', 'carOrigins', 'emissionClasses', 'gearboxes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'company' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'zipCode' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
        ]);
        $user = User::find($id);


        $user->name = $request->name;
        $user->password = $request->password;
        $user->email = $request->email;
        $user->company = $request->company;
        $user->vat = $request->vat;
        $user->adres = $request->adres;
        $user->zipCode = $request->zipCode;
        $user->country = $request->country;
        $user->phone = $request->phone;
        $user->role_id = $request->role_id;

        $user->categories()->sync($request->tableIdCat);
        $user->chassis()->sync($request->tableIdChassi);
        $user->contacts()->sync($request->tableIdContact);

        $user->maxYear = $request->maxYear;
        $user->maxBudget = $request->maxBudget;

        $user->updated_at = now();
        $user->save();
        return redirect()->route("user.index")->with("success", "Modification effectué avec succès");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with("success", "Suppression effectué avec succès");
    }
}