<?php

namespace App\Http\Controllers;

use App\Models\Denunciations;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAnonymousRequest;
use App\Models\Complement;
use App\Models\Proofs;
use App\Models\Rapport;
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
        $denunciation = Denunciations::byUser(Auth::user()->id)->get();

        $rapports = Rapport::byDenunciation($denunciation[0]->id)->get();
        $proofs = Proofs::byDenunciation($denunciation[0]->id)->get();
        $complements = Complement::byDenunciation($denunciation[0]->id)->get();

        return view('user-dashboard', compact('denunciation', 'rapports', 'proofs', 'complements'));
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
            'role' => 'user'
        ]);

        $data = $request->all();
        $data = array_merge($data, ['user_id' => $user->id, 'status' => 'sent']);

        $denunciation = Denunciations::create($data);

        $path = $request->file('file_name')->store('uploads', 'public');
        $data['file_name'] = $path;
        Proofs::create([
            'denunciation_id' => $denunciation->id,
            'file_name' => $path,
        ]);

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
        $denunciation = $denunciations->get();
        return view('edit-denonciation', compact('denunciation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Denunciations $denunciations)
    {

        $denunciation = $denunciations->get();

        $denunciation[0]->first_name = $request->first_name;
        $denunciation[0]->last_name = $request->last_name;
        $denunciation[0]->email = $request->email;
        $denunciation[0]->phone = $request->phone;
        $denunciation[0]->place_personal = $request->place_personal;
        $denunciation[0]->accord = ($request->accord == 'on') ? 'oui' : 'non';
        $denunciation[0]->save();

        return redirect(route('denunciations.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Denunciations $denunciations)
    {
        //
    }

    public function getAdminDashboard() {
        $denunciations = Denunciations::all();
        Denunciations::where('status', '=', 'sent')->update(['status' => 'viewed']);
        return view('admin-dashboard', compact('denunciations'));
    }

    public function manageDenunciations(Request $request) {

        $denunciation_id = $request->denunciation_id;

        $denunciation = Denunciations::find($denunciation_id);
        if ($denunciation->status == 'viewed') {
            $denunciation->status = 'seen';
            $denunciation->save();
        }

        $rapports = Rapport::byDenunciation($denunciation_id)->get();
        $proofs = Proofs::byDenunciation($denunciation_id)->get();
        $complements = Complement::byDenunciation($denunciation_id)->get();

        return view('gestion_denunciations', compact('denunciation', 'rapports', 'proofs', 'complements'));
    }

    public function editStatus(Request $request)
    {
        $denunciation = Denunciations::find($request->denunciation_id);


        $denunciation->status = $request->status;
        $denunciation->level = $request->level;
        $denunciation->save();

        return back();
    }

    public function cancelDenunciation(Request $request)
    {
        $denunciation = Denunciations::find($request->denunciation_id);


        $denunciation->status = 'cancel';
        $denunciation->observations = $request->observations;
        $denunciation->save();

        return back();
    }

    public function getDenunciationByStatus($status) {

        $denunciations = Denunciations::byStatus($status)->get();
        return view('admin-dashboard', compact('denunciations'));
    }
}
