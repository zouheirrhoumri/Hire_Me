<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function index(){
        return view('candidate');
    }
    public function setting(){
        return view('profileSetting');
    }
    public function info(Request $request){

        $request->validate([

        ]);

    }
}