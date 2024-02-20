<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\competence;
use App\Models\cursuse;
use App\Models\cv;
use App\Models\experience;
use App\Models\language;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\LaravelPdf\Facades\Pdf;

class PDFController extends Controller
{
    public function index()
    {
        $cv = User::where('id', Auth::id())->firstOrFail();
        $user = Auth::user();
        $utilisateur = Candidate::where('user_id', Auth::id())->first();
        $cursuses = cursuse::where('cv_id',Auth::id())->get();
        $languages=language::where('cv_id',Auth::id())->get();
        $experiences=experience::where('cv_id',Auth::id())->get();
        $competences=competence::where('cv_id',Auth::id())->get();
       
    
        return view('cv', compact('user', 'cursuses', 'languages', 'experiences', 'competences', 'utilisateur'));
    }
    
    // public function generatePDF()
    // {
        
       
    //     $cv = User::where('id', Auth::id())->firstOrFail();
    //     $user = Auth::user();
    //     $utilisateur = Candidate::where('user_id', Auth::id())->first();
    //     $cursuses = cursuse::where('cv_id',Auth::id())->get();
    //     $languages=language::where('cv_id',Auth::id())->get();
    //     $experiences=experience::where('cv_id',Auth::id())->get();
    //     $competences=competence::where('cv_id',Auth::id())->get();

    //     $data = [
    //         'user' => $user,
    //         'utilisateur' => $utilisateur,
    //         'cursuses' => $cursuses,
    //         'languages' => $languages,
    //         'experiences' => $experiences,
    //         'competences' => $competences
    //     ];
    
    //     // $data = compact('user', 'cursuses', 'languages', 'experiences', 'competences', 'candidate');
    //     return Pdf::view('cv', ['user' => $user, 'utilisateur' => $utilisateur, 'cursuses' => $cursuses, 'languages' => $languages, 'experiences' => $experiences, 'competences' => $competences])->format('a4')->download('cv.pdf');

       
    //     // $pdf = PDF::loadView('cv.cv', $data);
    
    //     // return $pdf->download('sample.pdf');
    // }

    public function generatePDF()
{
    $cv = User::where('id', Auth::id())->firstOrFail();
    $user = Auth::user();
    $utilisateur = Candidate::where('user_id', Auth::id())->first();
    $cursuses = cursuse::where('cv_id', Auth::id())->get();
    $languages = language::where('cv_id', Auth::id())->get();
    $experiences = experience::where('cv_id', Auth::id())->get();
    $competences = competence::where('cv_id', Auth::id())->get();

    $data = [
        'user' => $user,
        'utilisateur' => $utilisateur,
        'cursuses' => $cursuses,
        'languages' => $languages,
        'experiences' => $experiences,
        'competences' => $competences
    ];

    config(['browsershot.binary' => base_path('node_modules/puppeteer/.local-chromium/win64-884014/chrome-win/chrome.exe')]);

    return Pdf::view('cv', $data)->format('a4')->download('cv.pdf');
}

}
