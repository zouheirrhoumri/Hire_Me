<?php

namespace App\Http\Controllers;

use App\Models\experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExperienceController extends Controller
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
        $validatedData = $request->validate([
            'position' => 'required|string',
            'company' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',
        ]);
        $cv = Auth::id();

        // Create a new experience instance
        $experience = new Experience();
        $experience->cv_id = $cv;
        $experience->position = $validatedData['position'];
        $experience->company = $validatedData['company'];
        $experience->start_year = $validatedData['start_date'];
        $experience->end_year = $validatedData['end_date'];
        
        // Associate the experience with the authenticated user
       

        // Save the experience to the database
        $experience->save();

        return  redirect()->route('candidate');
    }

    /**
     * Display the specified resource.
     */
    public function show(experience $experience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(experience $experience)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, experience $experience)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(experience $experience)
    {
        //
    }
}
