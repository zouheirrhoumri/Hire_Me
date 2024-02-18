<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Entreprise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entreprises = Entreprise::findOrFail(auth()->user()->entreprise->id);
        return view('entrepriseProfile' , ['entreprises' => $entreprises]);
    }
    public function form()
    {
        return view('entrepriseForm');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $data = $request->validate([
            'nom' => 'required',
            'slogan' => 'required',
            'industrie' => 'required',
            'description' => 'required',
        ]);

        $data['user_id'] = Auth::id(); // Set the user_id after validation
        Entreprise::create($data);

        return view('entrepriseProfile');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Entreprise $entreprise)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Entreprise $entreprise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Entreprise $entreprise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Entreprise $entreprise)
    {
        //
    }
}
