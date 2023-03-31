<?php

namespace App\Http\Controllers;

use App\Mail\ComplementMail;
use App\Models\Complement;
use App\Models\Denunciations;
use App\Models\Email;
use App\Models\Proofs;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ComplementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->type == 'proof') {

            $files = $request->file('file_name');
            foreach ($files as $file) {

                $request->validate([
                    'file_name.*' => 'max:2048',
                ]);

                $path = $file->store('uploads', 'public');
                Proofs::create([
                    'denunciation_id' => $request->denunciation_id,
                    'file_name' => $path,
                ]);
            }

        }else {
            $data = $request->all();
            $complement = Complement::create($data);

            $mail = new ComplementMail($complement);
            $admin = User::where('role', 'admin')->first();
            $emails = Email::pluck('mail')->toArray();

            try {
                Mail::to($admin->email)
                    ->cc($emails)
                    ->send($mail);
            } catch (\Exception $e) {
                // Ne rien faire
            }

        }

        $message = "Information ajouté avec succès.";
        session()->flash('message', $message);


        return redirect(route('denunciations.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Complement $complement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Complement $complement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Complement $complement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Complement $complement)
    {
        //
    }
}
