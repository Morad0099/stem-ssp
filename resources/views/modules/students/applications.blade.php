@extends('layout.app')

@section('title', 'Your Application')

@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row">
        <div class="col-12">
            <div class="bg-light rounded p-4 text-center">
                <h3>Hello, {{ auth()->user()->name }}!</h3>
                <p>Here are the details of your application:</p>
            </div>
        </div>
    </div>

    <!-- Selected Schools -->
    <div class="row mt-4">
        <div class="col-12">
            <div class="bg-light rounded p-4">
                <h5>Your Selected Schools</h5>
                @if($selectedSchools->isEmpty())
                    <p>You have not selected any schools yet.</p>
                @else
                    <ul>
                        @foreach ($selectedSchools as $school)
                            <li>{{ $school->sch_name }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>

    <!-- Assigned School -->
    <div class="row mt-4">
        <div class="col-12">
            <div class="bg-light rounded p-4">
                <h5>Your Assigned School</h5>
                @if($assignedSchool)
                    <p>You have been assigned to: <strong>{{ $assignedSchool->sch_name }}</strong></p>
                @else
                    <p>You have not been assigned a school yet.</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
