<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('jobForm');

    }

    public function jobPost(Request $request){
         // Validate the form data
         $validatedData = $request->validate([
            'titre' => 'required|string',
            'description' => 'required|string',
            'compétences_requises' => 'required|string',
            'type_contrat' => 'required|string',
            'emplacement' => 'required|string',
        ]);
    
        if (auth()->user()->entreprise) {
            // Create a new Offre instance and fill it with the validated data
            $offre = new Job();
            $offre->entreprise_id = auth()->user()->entreprise->id;
            $offre->titre = $validatedData['titre'];
            $offre->description = $validatedData['description'];
            $offre->compétences_requises = $validatedData['compétences_requises'];
            $offre->type_contrat = $validatedData['type_contrat'];
            $offre->emplacement = $validatedData['emplacement'];
    
            // Save the offre
            $offre->save();
    
            // Redirect back with success message
            return redirect('entrepriseProfile');
        } else {
            // Redirect back with error message if the user is not associated with an entreprise
            return redirect()->back()->with('error', 'User is not associated with an entreprise.');
        }
    
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        // $jobs = Job::findOrFail(auth()->user()->entreprise->id);
        // return view('entrepriseProfile' , ['jobs' => $jobs]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
    }
}
