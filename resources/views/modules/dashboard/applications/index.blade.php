@extends('layout.app')

@section('title', 'Manage Applications')

@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-light rounded p-4">
        <h6 class="mb-4">Manage Applications</h6>

        <!-- Filters and Export Button -->
        <div class="row align-items-center mb-4">
            <!-- Filters Section -->
            <div class="col-md-9">
                <form method="GET" action="{{ route('applications.index') }}" class="d-flex align-items-center gap-2">
                    <!-- Start Date Filter -->
                    <div class="form-group me-2">
                        <label for="start_date">Start Date</label>
                        <input type="date" name="start_date" class="form-control" placeholder="Start Date" value="{{ request('start_date') }}">
                    </div>
                    <!-- End Date Filter -->
                    <div class="form-group me-2">
                        <label for="start_date">End Date</label>
                        <input type="date" name="end_date" class="form-control" placeholder="End Date" value="{{ request('end_date') }}">
                    </div>
                    <!-- Class Filter -->
                    <div class="form-group me-2">
                        {{-- <label for="class_id">Class</label> --}}
                        <select name="class_id" class="form-control">
                            <option value="">Select Class</option>
                            @foreach ($classes as $class)
                                <option value="{{ $class->id }}" {{ request('class_id') == $class->id ? 'selected' : '' }}>
                                    {{ $class->class_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Filter</button>
                    <a href="{{ route('applications.index') }}" class="btn btn-secondary">Clear Filters</a>
                </form>
            </div>
            <!-- Export Button Section -->
            <div class="col-md-3 text-end">
                <a href="{{ route('students.export') }}" class="btn btn-success">Export to Excel</a>
            </div>
        </div>

        <!-- Table Section -->
        <form method="POST" action="{{ route('applications.mass-assign') }}">
            @csrf
            <div class="table-responsive">
                @if($students->isEmpty())
                    <p class="text-center my-4">No student applications found.</p>
                @else
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>
                                    <input type="checkbox" id="select-all" />
                                </th>
                                <th>Index Number</th>
                                <th>Name</th>
                                <th>Phone Number</th>
                                <th>Email</th>
                                <th>Selected School</th>
                                <th>Selected Class</th>
                                <th>Assigned School</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($students as $student)
                                <tr>
                                    <td>
                                        <input type="checkbox" name="student_ids[]" value="{{ $student->id }}" class="student-checkbox">
                                    </td>
                                    <td>{{ $student->index_number }}</td>
                                    <td>{{ $student->first_name }} {{ $student->middle_name ?? '' }} {{ $student->last_name }}</td>
                                    <td>{{ $student->phone_number }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>
                                        @forelse($student->selectedSchools as $school)
                                            {{ $school->sch_name }}<br>
                                        @empty
                                            <span class="text-muted">No schools selected</span>
                                        @endforelse
                                    </td>
                                    <td>
                                        @if($student->class)
                                            {{ $student->class->class_name }}
                                        @else
                                            <span class="text-muted">No class assigned</span>
                                        @endif
                                    </td>
                                    <td>{{ $student->assignedSchool->sch_name ?? 'Not Assigned' }}</td>
                                    <td>
                                        <form action="{{ route('applications.assign') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="student_id" value="{{ $student->id }}">
                                            <select name="school_id" class="form-control" >
                                                <option value="">Select School</option>
                                                @foreach($student->selectedSchools as $school)
                                                    <option value="{{ $school->id }}">{{ $school->sch_name }}</option>
                                                @endforeach
                                            </select>
                                            <button type="submit" class="btn btn-primary btn-sm mt-2">Assign</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>

            <!-- Mass Assignment Section -->
            @if(!$students->isEmpty())
                <div class="row mt-3">
                    <div class="col-md-4">
                        <select name="school_id" class="form-control" required>
                            <option value="">Select School for Mass Assignment</option>
                            @foreach($schools as $school)
                                <option value="{{ $school->id }}">{{ $school->sch_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-success">Assign Selected Students</button>
                    </div>
                </div>
            @endif
        </form>
    </div>
</div>

<script>
    document.getElementById('select-all').addEventListener('click', function () {
        const checkboxes = document.querySelectorAll('.student-checkbox');
        checkboxes.forEach(checkbox => checkbox.checked = this.checked);
    });
</script>
@endsection
