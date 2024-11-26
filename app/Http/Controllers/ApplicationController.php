<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Schools;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ApplicationController extends Controller
{
    public function index(Request $request)
{
    // Start query with base filters
    $query = Student::with('selectedSchools', 'assignedSchool')
                    ->where('school_assigned_id', null);

    // Filter by date range
    if ($request->start_date && $request->end_date) {
        $query->whereBetween('created_at', [$request->start_date, $request->end_date]);
    }

    // Filter by school
    if ($request->has('school_assigned_id') && $request->school_assigned_id != '') {
        $query->where('school_assigned_id', $request->school_assigned_id);
    }

    // Retrieve filtered students
    $students = $query->get();
    $schools = Schools::all();

    return view('modules.dashboard.applications.index', compact('students', 'schools'));
}


public function all(Request $request)
{
    $query = Student::with('selectedSchools', 'assignedSchool')->where('school_assigned_id', '!=', null);

    // Filter by date range
    if ($request->start_date && $request->end_date) {
        $query->whereBetween('created_at', [$request->start_date, $request->end_date]);
    }

    // Filter by assigned school
    if ($request->has('school_assigned_id') && $request->school_assigned_id != '') {
        $query->where('school_assigned_id', $request->school_assigned_id);
    }

    $students = $query->get();
    $schools = Schools::all();

    return view('modules.dashboard.applications.all', compact('students', 'schools'));
}


    public function assignSchool(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'school_id' => 'required|exists:schools,id',
        ]);

        $student = Student::find($request->student_id);
        $student->school_assigned_id = $request->school_id;
        $student->save();

        // Send an email to the student
        Mail::to($student->email)->send(new \App\Mail\SchoolAssigned($student));

        return redirect()->route('applications.index')->with('success', 'School assigned and email sent successfully!');
    }
}
