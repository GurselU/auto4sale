<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\MagicLinkMail;
use App\Models\MagicLink;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class MagicLinkController extends Controller
{
    public function sendMagicLink(Request $request)
    {
        $email = $request->email;
        $user = User::where('email', $email)->first();
        if (!$user) {
            return redirect()->back()->with('error', 'L\'utilisateur n\'existe pas.');
        }

        $magicLink = Str::random(60);

        MagicLink::create([
            'email' => $email,
            'token' => $magicLink
        ]);

        Mail::to($email)->send(new MagicLinkMail($magicLink));
        return redirect()->back()->with('success', 'Le lien de connexion a été envoyé à votre adresse e-mail.');
    }


    public function loginWithMagicLink($token)
    {

        $magicLink = MagicLink::where('token', $token)->first();

        if ($magicLink) {
            if (Carbon::parse($magicLink->created_at)->addMinutes(60)->isPast()) {
                $magicLink->delete();
                return redirect()->route('login')->with('error', 'Le lien magique a expiré.');
            }

            $user = User::where('email', $magicLink->email)->first();
            Auth::login($user);
            $magicLink->delete();
            return redirect()->route('car.index');
        }
        return redirect()->route('login')->with('error', 'Le lien de connexion est incorrect ou a expiré.');
    }

    public function loginForOffer($token, $car)
    {

        $magicLink = MagicLink::where('token', $token)->first();

        if ($magicLink) {
            if (Carbon::parse($magicLink->created_at)->addMinutes(60)->isPast()) {
                $magicLink->delete();
                return redirect()->route('login')->with('error', 'Le lien magique a expiré.');
            }

            $user = User::where('email', $magicLink->email)->first();
            Auth::login($user);
            // $magicLink->delete();
            return redirect()->route('offer.edit', $car);
        }
        return redirect()->route('login')->with('error', 'Le lien de connexion est incorrect ou a expiré.');
    }
}