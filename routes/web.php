<?php

use App\Http\Controllers\CandidateController;
use App\Http\Controllers\CompetenceController;
use App\Http\Controllers\CvController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', [HomeController::class,'index']);
Route::get('/candidate', [CandidateController::class, 'index'])->name('candidate');
Route::get('/profileSetting', [CandidateController::class, 'setting']);
Route::post('/info', [CandidateController::class, 'info']);
Route::get('/edit', [CandidateController::class, 'edit'])->name('candidate.edit');
Route::put('/update-data/{id}', [CandidateController::class, 'update']);


Route::get('/dashboard', [JobController::class,'show']);
Route::get('/jobForm', [JobController::class,'index']);
Route::post('/jobPost', [JobController::class,'jobPost']);


Route::get('/entrepriseProfile' , [EntrepriseController::class , 'index'])->name('entrepriseProfile');
Route::get('/entrepriseForm' , [EntrepriseController::class , 'form'])->name('entrepriseForm');
Route::post('/company',[EntrepriseController::class , 'create']);



Route::get('/cv_form', [CvController::class, 'index']);


Route::get('/cvform', [CvController::class, 'index'])->name('formCv');
    Route::post('/store', [CvController::class, 'store'])->name('cv.store');
    Route::get('/cv/cursus', [CvController::class, 'getUserCursus'])->name('getUserCursus');
    Route::delete('/cursus/{id}', [CvController::class, 'destroy'])->name('cursus.destroy');


    Route::get('/user/experiences', [ExperienceController::class, 'getUserExperience'])->name('getUserExperience');
    Route::post('/experience', [ExperienceController::class, 'store'])->name('experience.store');
    Route::delete('/experience/{id}', [ExperienceController::class, 'destroy'])->name('experience.destroy');



Route::post('/language', [LanguageController::class, 'store'])->name('language.store');
Route::get('/user/language', [LanguageController::class, 'getUserLanguage'])->name('getUserLanguage');
Route::delete('/language/{id}', [LanguageController::class, 'deleteLanguage'])->name('language.destroy');

Route::post('/competence', [CompetenceController::class, 'store'])->name('competence.store');
Route::get('/user/competence', [CompetenceController::class, 'getUserCompetence'])->name('getUserCompetence');
Route::delete('/competence/{id}', [CompetenceController::class, 'destroy'])->name('competence.destroy');


Route::get('/generate-pdf', [PDFController::class, 'generatePDF'])->name('generate.pdf');
Route::get('/cv', [PDFController::class, 'index'])->name('cv');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


});

require __DIR__.'/auth.php';
