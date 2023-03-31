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
        $credentials = $request->only('secret_code', 'generate_code');

        // Vérifier le code secret
        $user = User::where('secret_code', $credentials['secret_code'])
                        ->where('generate_code', $credentials['generate_code'])
                        ->first();
        if (!$user) {
            return redirect()->back()->withErrors(['code' => 'Code secret invalide']);
        }

        // Connexion de l'utilisateur
        Auth::login($user);

        // Redirection de l'utilisateur
        $message = "Bienvenue sur AMNESTY-BENIN.";
        session()->flash('message', $message);

        return redirect(route('denunciations.index'));
    }

    public function getLoginForm()
    {
        return view('auth.anonymous_login');
    }

}
