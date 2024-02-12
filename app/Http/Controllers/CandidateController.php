<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CandidateController extends Controller
{
    public function index()
    {
        return view('candidate');
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
}
