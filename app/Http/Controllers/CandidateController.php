<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CandidateController extends Controller
{
    public function index()
    {
        $candidates = Candidate::findOrFail(Auth::id());

        return view('candidate', compact('candidates'));
    }
    public function setting()
    {
        return view('profileSetting');
    }
    public function info(Request $request)
    {

        $data = $request->validate([
            'titre' => 'required',
            'poste_actuel' => 'required',
            'industrie' => 'required',
            'adresse' => 'required',
            'telephone' => 'required',
            'autre_contact' => 'required',
            'cv' => '',
            'a_propos' => 'required',
            'user_id' => 'nullable' // Remove the parentheses from nullable
        ]);

        $data['user_id'] = Auth::id(); // Set the user_id after validation

        Candidate::create($data);

        return view('candidate');
    }

    public function edit()
    {

        $candidates = Candidate::findOrFail(Auth::id());
        return view('edit', ['candidates' => $candidates]);
    }
    
    public function update($id, Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'poste_actuel' => 'required',
            'industrie' => 'required',
            'adresse' => 'required',
            'telephone' => 'required',
            'autre_contact' => 'required',
            'a_propos' => 'required',
            'user_id' => 'nullable' 
        ]);
    
        $candidate = Candidate::findOrFail($id);
    
        $candidate->titre = $request->titre;
        $candidate->poste_actuel = $request->poste_actuel; // Fix typo here
        $candidate->industrie = $request->industrie;
        $candidate->adresse = $request->adresse;
        $candidate->autre_contact = $request->autre_contact;
        $candidate->telephone = $request->telephone;
        $candidate->a_propos = $request->a_propos;
        $candidate->save();
    
        return redirect('candidate');
    }
    
}
