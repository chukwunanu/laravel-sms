@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registration Form') }}</div>
                @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
                @endif

                @if(session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
                @endif
                <div class="card-body">

                    <h3 class="text-center font-weight-bold">{{ $school->school_name }} Profile</h3>
                    <form>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">School UID</label>
                                <input type="text" class="form-control" value="{{ $school->schoolUId }}" disabled>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">School Name</label>
                                <input type="text" class="form-control" value="{{ $school->school_name }}" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" value="{{ $school->email }}" disabled>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Phone</label>
                                <input type="text" class="form-control" value="{{ $school->phone }}" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-control" value="{{ $school->address }}" disabled>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">City</label>
                                <input type="text" class="form-control" value="{{ $school->city }}" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">State</label>
                                <input type="text" class="form-control" value="{{ $school->state }}" disabled>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">P O Box</label>
                                <input type="text" class="form-control" value="{{ $school->po_box }}" disabled>
                            </div>
                        </div>
                        <div class="col-12">
                            <a href="{{ route('schools.index') }}" class="btn btn-secondary float-end">back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
