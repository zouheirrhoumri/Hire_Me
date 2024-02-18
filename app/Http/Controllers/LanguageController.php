<?php

namespace App\Http\Controllers;

use App\Models\cv;
use App\Models\language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LanguageController extends Controller
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
            'language' => 'required|string|max:255',
            'proficiency' => 'required|string|in:Beginner,Intermediate,Advanced,Fluent',
        ]);
       
        $cv = Auth::id();

        // Create a new language instance
        $language = new Language();
        $language->cv_id = $cv; // Assuming you have the user_id column in your languages table
        $language->language = $validatedData['language'];
        $language->proficiency = $validatedData['proficiency'];
        $language->save();
        return  redirect()->route('candidate');
    }

    /**
     * Display the specified resource.
     */
    public function show(language $language)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(language $language)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, language $language)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(language $language)
    {
        //
    }
}
