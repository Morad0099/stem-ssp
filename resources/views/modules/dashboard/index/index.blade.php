@extends('layout.app')

@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid pt-4 px-4">
        <!-- Conditional Rendering for Student -->
        @if(auth()->user()->role == 'student')
        <div class="row">
            <div class="col-12">
                <div class="bg-light rounded p-4 text-center">
                    <h3>Hello, {{ auth()->user()->name }}!</h3>
                    <p class="lead">Welcome to your student dashboard.</p>
                    <p>To check the status of your application, please visit the <strong>Application Module</strong> in the sidebar.</p>
                </div>
            </div>
        </div>
        @endif

        <!-- Conditional Rendering for Admin -->
        @if(auth()->user()->role == 'admin')
        <!-- Overview Stats -->
        <div class="row g-4">
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-users fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Today's Applications</p>
                        <h6 class="mb-0">{{ $todayApplications }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-list fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Total Applications</p>
                        <h6 class="mb-0">{{ $totalApplications }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-school fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Schools Applied</p>
                        <h6 class="mb-0">{{ $totalSchoolsApplied }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-check fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Accepted Applications</p>
                        <h6 class="mb-0">{{ $acceptedApplications }}</h6>
                    </div>
                </div>
            </div>
        </div>

        <!-- Applications Overview Chart -->
        <div class="row g-4 mt-4">
            <div class="col-lg-8">
                <div class="bg-light text-center rounded p-4">
                    <h6>Applications Overview</h6>
                    <canvas id="applications-overview-chart"></canvas>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-light text-center rounded p-4">
                    <h6>Applications by School</h6>
                    <canvas id="applications-by-school-chart"></canvas>
                </div>
            </div>
        </div>

        <!-- Recent Applications -->
        <div class="row g-4 mt-4">
            <div class="col-12">
                <div class="bg-light rounded p-4">
                    <h6>Recent Applications</h6>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Index Number</th>
                                    <th>Date of Birth</th>
                                    <th>Selected Schools</th>
                                    <th>Assigned School</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($recentApplications as $application)
                                    <tr>
                                        <td>{{ $application->index_number }}</td>
                                        <td>{{ $application->date_of_birth }}</td>
                                        <td>
                                            @foreach ($application->selectedSchools as $school)
                                                <span class="badge bg-primary">{{ $school->sch_name }}</span>
                                            @endforeach
                                        </td>
                                        <td>{{ $application->assignedSchool->sch_name ?? 'Not Assigned' }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>

    <!-- Admin-Only Charts (Conditionally Rendered) -->
    @if(auth()->user()->role == 'admin')
    <script>
        // Applications Overview Chart
        const overviewCtx = document.getElementById('applications-overview-chart').getContext('2d');
        new Chart(overviewCtx, {
            type: 'line',
            data: {
                labels: @json($applicationsOverview['dates']),
                datasets: [{
                    label: 'Applications',
                    data: @json($applicationsOverview['counts']),
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            }
        });

        // Applications by School Chart
        const schoolCtx = document.getElementById('applications-by-school-chart').getContext('2d');
        new Chart(schoolCtx, {
            type: 'bar',
            data: {
                labels: @json($applicationsBySchool['names']),
                datasets: [{
                    label: 'Applications',
                    data: @json($applicationsBySchool['counts']),
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            }
        });
    </script>
    @endif
@endsection
