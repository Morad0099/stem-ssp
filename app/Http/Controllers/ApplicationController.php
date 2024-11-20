<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Schools;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ApplicationController extends Controller
{
    public function index()
    {
        $students = Student::with('selectedSchools', 'assignedSchool')->where('school_assigned_id', null)->get();
        $schools = Schools::all();

        return view('modules.dashboard.applications.index', compact('students', 'schools'));
    }

    public function all()
    {
        $students = Student::with('selectedSchools', 'assignedSchool')->where('school_assigned_id', '!=', null)->get();
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
