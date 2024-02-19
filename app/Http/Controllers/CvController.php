<?php

namespace App\Http\Controllers;

use App\Models\cursuse;
use App\Models\cv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CvController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cv_form');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'degree' => 'required|string',
            'institution' => 'required|string',
            'start_year' => 'required|integer',
            'end_year' => 'nullable|integer',
        ]);

        // Find the cv for the authenticated user
        // $cv = Cv::where('user_id', auth()->id())->firstOrFail();
           $cv = Auth::id();
        // Create a new cursus instance
        $cursus = new cursuse();
        $cursus->cv_id = $cv; // Assign the cv_id from the found cv
        $cursus->degree = $validatedData['degree'];
        $cursus->institution = $validatedData['institution'];
        $cursus->start_year = $validatedData['start_year'];
        $cursus->end_year = $validatedData['end_year'];

        // Save the cursus to the database
        $cursus->save();

        // Optionally, you can redirect the user after saving
        return redirect()->route('candidate');
    }
    public function getUserCursus()
{
    $cvId = Cv::where('user_id', auth()->id())->pluck('id')->first();

    // Fetch cursus for the authenticated user using the cv_id
    $cursus = cursuse::where('cv_id', $cvId)->get();

    return response()->json($cursus);

}
public function destroy($id)
{
   
    // Find the cursus entry by its ID
    $cursus = Cursuse::findOrFail($id);

    // Delete the cursus entry
    $cursus->delete();

    // Optionally, you can return a response indicating success
    return response()->json(['message' => 'Cursus deleted successfully'], 200);
}
}
