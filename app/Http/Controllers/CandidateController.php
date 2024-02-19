<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Candidate;
use App\Models\competence;
use App\Models\cursuse;
use App\Models\experience;
use App\Models\Job;
use App\Models\language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CandidateController extends Controller
{
    public function index()
    {
        $candidates = Candidate::findOrFail(Auth::id());
        $cursus = cursuse::where('cv_id',Auth::id())->get();
        $language=language::where('cv_id',Auth::id())->get();
        $experience=experience::where('cv_id',Auth::id())->get();
        $competence=competence::where('cv_id',Auth::id())->get();

        return view('candidate', compact('candidates','cursus','language','experience','competence'));
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

        $candidates = Candidate::firstOrFail(Auth::id());
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
    
        $candidate = Candidate::firstOrFail($id);
    
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
