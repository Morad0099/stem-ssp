@extends('layout.app')

@section('title', 'User Management')

@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-light rounded p-4">
        <h6 class="mb-4">User Management</h6>
        <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Add User</a>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ ucfirst($user->role) }}</td>
                            <td>
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">No users found.</td>
                        </tr>
                    @endforelse
                </tbody>
                
            </table>
        </div>
    </div>
</div>
@endsection
