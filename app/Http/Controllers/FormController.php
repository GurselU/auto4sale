<?php

namespace App\Http\Controllers;

use App\Mail\NewCarMail;
use App\Models\Form;
use App\Models\News;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */

     public function __construct()
     {
         $this->middleware(['auth','workerVerification'])->only(['index', 'show', 'delete']);
     }

    public function index(): View|Factory|Application
    {
        $forms = Form::all();
        return view('admin.carToBuy.index', compact('forms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        return view('admin.form.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {

        $validator = Validator::make($request->all(), [
            'mark' => ['required', 'string', 'max:255'],
            'mileage' => ['required', 'string', 'max:255'],
            'year' => ['required', 'string', 'max:255'],
            'fuel' => ['required', 'string', 'max:255'],
            'zipCode' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'available' => ['required_without:availabledate', 'nullable', 'max:255'],
            'availabledate' => ['required_without:available', 'nullable', 'max:255'],
        ]);

        if ($validator->fails()) {
            return redirect('/#errors')
                ->withErrors($validator->errors())
                ->withInput();
        }

        
        $form = new Form();
        $form->name = $request->name;
        $form->email = $request->email;
        $form->mark = $request->mark;
        $form->mileage = $request->mileage;
        $form->year = $request->year;
        $form->fuel = $request->fuel;
        $form->zipCode = $request->zipCode;
        $form->phone = $request->phone;
        $form->message = $request->message;
        if ($request->available == 'yes') {
            $form->available = 'yes';
        }else{
            $form->available = $request->availabledate;
        }

        $form->updated_at = now();

        $form->save();
        Mail::to('gursel_unlu@hotmail.com')->send(new NewCarMail($form));
        return redirect()->back()->with('success', 'Formulaire envoyé avec succès');
    }


    /**
     * Display the specified resource.
     *
     * @param Form $Form
     * @return Response
     */
    public function show($id)
    {
        // dd('test');
        $form = Form::find($id);
        if($form->called){
            $form->called = false;
        }else{
            $form->called = true;
        }

        $form->save();
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Form $Form
     * @return Response
     */
    public function edit(Form $Form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Form $Form
     * @return Response
     */
    public function update(Request $request, Form $Form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Form $Form
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $record = Form::findOrFail($id);
        // dd($record->email);
        News::create([
            'email' => $record->email,
        ]);
        $record->delete();
        return redirect()->back();
    }
}
