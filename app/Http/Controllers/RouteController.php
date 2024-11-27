<?php

namespace App\Http\Controllers;

use App\Models\Schools;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RouteController extends Controller
{
    public function dashboard()
{
    $user = Auth::user();

    // Common data for both Admin and Student
    $todayApplications = Student::whereDate('created_at', today())->count();
    $totalApplications = Student::count();
    $totalSchoolsApplied = Schools::whereHas('students')->count();
    $acceptedApplications = Student::whereNotNull('school_assigned_id')->count();

    // Check if the user is an admin
    if ($user->role == 'admin') {
        // Fetch recent applications (latest 5 for admin)
        $recentApplications = Student::with('selectedSchools')->latest()->take(5)->get();

        // Applications overview chart data
        $applicationsOverview = Student::selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->groupBy('date')
            ->orderBy('date')
            ->get()
            ->mapWithKeys(fn($item) => [$item->date => $item->count])
            ->toArray();

        // Applications by school chart data
        $applicationsBySchool = Schools::withCount('students')
            ->orderBy('students_count', 'desc')
            ->take(5)
            ->get()
            ->mapWithKeys(fn($school) => [$school->sch_name => $school->students_count])
            ->toArray();

        // Pass all data to the view for the admin
        return view('modules.dashboard.index.index', [
            'todayApplications' => $todayApplications,
            'totalApplications' => $totalApplications,
            'totalSchoolsApplied' => $totalSchoolsApplied,
            'acceptedApplications' => $acceptedApplications,
            'recentApplications' => $recentApplications,
            'applicationsOverview' => [
                'dates' => array_keys($applicationsOverview),
                'counts' => array_values($applicationsOverview),
            ],
            'applicationsBySchool' => [
                'names' => array_keys($applicationsBySchool),
                'counts' => array_values($applicationsBySchool),
            ],
        ]);
    } elseif ($user->role == 'student') {
        // If the user is a student, show their personal applications only
        $recentApplications = Student::with('selectedSchools')
            ->where('id', $user->id) // assuming the Student model has a `user_id` column
            ->latest()
            ->take(5)
            ->get();

        // No need to pass chart data for student
        return view('modules.dashboard.index.index', [
            'todayApplications' => $todayApplications,
            'totalApplications' => $totalApplications,
            'totalSchoolsApplied' => $totalSchoolsApplied,
            'acceptedApplications' => $acceptedApplications,
            'recentApplications' => $recentApplications,
            'applicationsOverview' => [],
            'applicationsBySchool' => [],
        ]);
    }

    // Fallback in case no valid role found
    return redirect()->route('home');
}

}
