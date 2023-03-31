<?php

namespace App\Http\Controllers;

use App\Mail\CollaborateurMail;
use App\Models\Email;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $emails = Email::all();
        return view('admin_emails', compact('emails'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $user = User::create([
            'name' => $request->name,
            'email' => $request->mail,
            'role' => $request->role,
            'password' => Hash::make("password"),
        ]);

        $data = $request->all();
        Email::create($data);

        $url = URL::signedRoute('login.collaborateur', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        try {
            Mail::to($user->email)->send(new CollaborateurMail($url));
        } catch (\Exception $e) {
            // Ne rien faire
        }



        $message = "Collaborateur ajouté avec succès.";
        session()->flash('message', $message);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Email $email)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Email $email)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Email $email)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Email $email)
    {
        //
    }
}
