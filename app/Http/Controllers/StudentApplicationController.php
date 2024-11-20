<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Support\Facades\Auth;

class StudentApplicationController extends Controller
{
    public function index()
{
    // Get the authenticated user
    $student = Auth::user();

    // Check if the student exists and the email matches
    $studentRecord = Student::where('email', $student->email)->first();

    // If the student record is not found, redirect to login or show an error
    if (!$studentRecord) {
        return redirect()->route('login')->with('error', 'Student not found.');
    }

    // Fetch selected schools and assigned school using the student's record
    $selectedSchools = $studentRecord->selectedSchools;
    $assignedSchool = $studentRecord->assignedSchool;

    // Return the data to the view
    return view('modules.students.applications', compact('selectedSchools', 'assignedSchool'));
}

}
