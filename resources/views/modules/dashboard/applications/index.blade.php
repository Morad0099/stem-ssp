@extends('layout.app')

@section('title', 'Manage Applications')

@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-light rounded p-4">
        <h6 class="mb-4">Manage Applications</h6>
        <div class="table-responsive">
            @if($students->isEmpty())
                <p class="text-center my-4">No student applications found.</p>
            @else
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Index Number</th>
                            <th>Name</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                            <th>Selected Schools</th>
                            <th>Assigned School</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $student)
                            <tr>
                                <td>{{ $student->index_number }}</td>
                                <td>{{ $student->first_name }} {{ $student->middle_name ?? null}} {{ $student->last_name }}</td>
                                <td>{{ $student->phone_number }}</td>
                                <td>{{ $student->email }}</td>
                                <td>
                                    @forelse($student->selectedSchools as $school)
                                        {{ $school->sch_name }}<br>
                                    @empty
                                        <span class="text-muted">No schools selected</span>
                                    @endforelse
                                </td>
                                <td>{{ $student->assignedSchool->sch_name ?? 'Not Assigned' }}</td>
                                <td>
                                    <form action="{{ route('applications.assign') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="student_id" value="{{ $student->id }}">
                                        <select name="school_id" class="form-control" required>
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
    </div>
</div>
@endsection
