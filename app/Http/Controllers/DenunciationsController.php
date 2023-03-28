<?php

namespace App\Http\Controllers;

use App\Models\Denunciations;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAnonymousRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;

class DenunciationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $denunciations = Denunciations::all();
        return view('admin-dashboard', compact('denunciations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('requests');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = User::create([
            'secret_code' => $request->secret_code,
            'generate_code' => rand(10000, 99999),
        ]);

        $data = $request->all();
        $data = array_merge($data, ['user_id' => $user->id]);

        $path = $request->file('file_name')->store('uploads', 'public');
        $data['file_name'] = $path;

        Denunciations::create($data);

        event(new Registered($user));
        Auth::login($user);
        return redirect(RouteServiceProvider::HOME);
    }

    /**
     * Display the specified resource.
     */
    public function show(Denunciations $denunciations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Denunciations $denunciations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Denunciations $denunciations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Denunciations $denunciations)
    {
        //
    }
}
