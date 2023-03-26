<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class AnonymousLoginController extends Controller
{
    public function login(Request $request)
    {
        // Récupérer les données du formulaire
        $credentials = $request->only('code');

        // Vérifier le code secret
        $user = User::where('code', $credentials['code'])->first();
        if (!$user) {
            return redirect()->back()->withErrors(['code' => 'Code secret invalide']);
        }

        // Connexion de l'utilisateur
        Auth::login($user);

        // Redirection de l'utilisateur
        return redirect()->intended(RouteServiceProvider::HOME);
    }

}
