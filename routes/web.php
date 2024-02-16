<?php

use App\Http\Controllers\CandidateController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\HomeController;
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


Route::get('/entrepriseProfile' , [EntrepriseController::class , 'index'])->name('entrepriseProfile');
Route::get('/entrepriseForm' , [EntrepriseController::class , 'form'])->name('entrepriseForm');
Route::post('/company',[EntrepriseController::class , 'create']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
