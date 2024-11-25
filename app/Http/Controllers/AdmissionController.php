<?php

namespace App\Http\Controllers;

use App\Models\Schools;
use App\Models\Student;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class AdmissionController extends Controller
{
    public function index()
    {
        $schools = Schools::all();

        return view('modules.website.index', compact('schools'));
    }

    public function apply(Request $request)
    {
        // Log::info('Incoming Request Data:', $request->all());

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
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone_number' => 'required|digits:10',
            'index_number' => 'required|digits:10|unique:students,index_number',
            'date_of_birth' => 'required|date_format:m/d/Y', // Validate the input format
            'email' => 'required|email|unique:students,email|unique:users,email',
            'schools' => 'required|array|size:2',
            'schools.*' => 'exists:schools,id',
        ]);

        $dateOfBirth = Carbon::createFromFormat('m/d/Y', $request->date_of_birth)->format('Y-m-d');


        // Extract name from email
        // $name = ucfirst(explode('@', $request->email)[0]);

        // Generate a random password
        $password = Str::random(8);

        // Create student
        $student = Student::create([
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number,
            'index_number' => $request->index_number,
            'date_of_birth' => $dateOfBirth,
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

        // Create a user account for login
        User::create([
            'name' => $request->first_name,
            'email' => $request->email,
            'password' => $password,
            'role' => 'student', // Assign the role as 'student'
        ]);

        // Send login credentials via email
        Mail::send('emails.credentials', [
            'name' => $request->first_name,
            'email' => $request->email,
            'password' => $password,
            'loginUrl' => route('login'),
        ], function ($message) use ($request) {
            $message->to($request->email)->subject('Your Login Credentials');
        });

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
