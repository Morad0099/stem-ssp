<?php

namespace App\Http\Controllers;

use App\Models\Schools;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AdmissionController extends Controller
{
    public function index()
    {
        $schools = Schools::all();

        return view('modules.website.index', compact('schools'));
    }

    public function apply(Request $request)
    {
        Log::info('Incoming Request Data:', $request->all());

        // Fix schools input if it contains improperly formatted data
        $schools = $request->input('schools');
        if (is_array($schools) && count($schools) === 1 && is_string($schools[0])) {
            // Decode the JSON string inside the array
            $schools = json_decode($schools[0], true);
        }

        // Manually replace the request value for validation
        $request->merge(['schools' => $schools]);

        // Validate request
        $request->validate([
            'index_number' => 'required|digits:10|unique:students,index_number',
            'date_of_birth' => 'required|date',
            'email' => 'required|email|unique:students,email',
            'schools' => 'required|array|size:2', // Validate as an array with exactly 2 items
            'schools.*' => 'exists:schools,id', // Validate each school ID exists in the schools table
        ]);

        // Create student
        $student = Student::create([
            'index_number' => $request->index_number,
            'date_of_birth' => $request->date_of_birth,
            'email' => $request->email,
        ]);

        // Attach selected schools
        foreach ($schools as $schoolId) {
            DB::table('student_school_selections')->insert([
                'student_id' => $student->id,
                'school_id' => $schoolId,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        return redirect()->route('index')->with('success', 'Application submitted successfully!');
    }




    public function assignSchool(Request $request, $studentId)
    {
        $request->validate([
            'school_id' => 'required|exists:schools,id',
        ]);

        $student = Student::findOrFail($studentId);
        if (!$student->selectedSchools()->where('id', $request->school_id)->exists()) {
            return response()->json(['error' => 'Invalid school assignment'], 400);
        }

        $student->update(['school_assigned_id' => $request->school_id]);

        return response()->json(['message' => 'School assigned successfully'], 200);
    }
}
