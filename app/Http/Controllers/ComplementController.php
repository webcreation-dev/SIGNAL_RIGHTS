<?php

namespace App\Http\Controllers;

use App\Models\Complement;
use App\Models\Proofs;
use Illuminate\Http\Request;

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

            $path = $request->file('file_name')->store('uploads', 'public');
            $data['file_name'] = $path;
            Proofs::create([
                'denunciation_id' => $request->denunciation_id,
                'file_name' => $path,
            ]);

        }else {
            $data = $request->all();
            Complement::create($data);
        }


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
