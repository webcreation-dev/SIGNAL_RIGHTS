<?php

namespace App\Http\Controllers;

use App\Mail\RaportMail;
use App\Models\Denunciations;
use App\Models\Email;
use App\Models\Rapport;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RapportController extends Controller
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
        $data = $request->all();
        $rapports = Rapport::create($data);

        $denunciation = Denunciations::find($request->denunciation_id);

        if($denunciation->email != null) {
            $mail = new RaportMail($rapports);
            try {
                Mail::to($denunciation->email)->send($mail);
            } catch (\Exception $e) {
                // Ne rien faire
            }

        }

        $message = "Rapport créée avec succès.";
        session()->flash('message', $message);

        return back();

    }

    /**
     * Display the specified resource.
     */
    public function show(Rapport $rapport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rapport $rapport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rapport $rapport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rapport $rapport)
    {
        //
    }
}
