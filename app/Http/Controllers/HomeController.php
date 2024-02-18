<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index()
    {
        if(Auth::id()){
            $role = Auth()->user()->role;
            if($role == 'user'){
                $jobs = Job::all();
                return view('dashboard' , ['jobs' => $jobs]);
                return view('dashboard' , compact('jobs'));
            }
            elseif(Auth::id()){
                $role = Auth()->user()->role;
                if($role == 'entreprise'){
                    return view('dashboardEntreprise');
                }
            }
            elseif(Auth::id()){
                $role = Auth()->user()->role;
                if($role == 'admin'){
                    return view('dashboardAdmin');
                }
            }
        }

    }
}
