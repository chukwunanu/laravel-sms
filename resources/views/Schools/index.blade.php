@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Schools') }}</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    <a href="{{ route('schools.create') }}" class="btn btn-primary mb-3">Add New School</a>

                    <table class="table table-bordered overflow-x-auto">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>School Name</th>
                                <th>Address</th>
                                <th>City</th>
                                <th>State</th>
                                <th>P.O Box</th>
                                <th>Email Address</th>
                                <th>Phone Number</th>
                                <th>Principal Name</th>
                                <th>Vice Principal Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($schools as $school)
                                <tr>
                                    <td>{{ $school->schoolUId }}</td>
                                    <td>{{ $school->school_name }}</td>
                                    <td>{{ $school->address }}</td>
                                    <td>{{ $school->city }}</td>
                                    <td>{{ $school->state }}</td>
                                    <td>{{ $school->po_box }}</td>
                                    <td>{{ $school->email }}</td>
                                    <td>{{ $school->phone }}</td>
                                    <td>{{ $school->principal_name }}</td>
                                    <td>{{ $school->vice_principal_name }}</td>
                                    <td class="d-flex gap-2">
                                        <a href="{{ route('schools.show', $school->id) }}" class="btn btn-sm btn-info">View</a>
                                        <a href="{{ route('schools.edit', $school->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                        <form action="{{ route('schools.destroy', $school->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $schools->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
