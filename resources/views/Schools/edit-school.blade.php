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

                    <h3 class="text-center font-weight-bold">Edit {{ $school->school_name }} Profile</h3>

                    <form action="{{ route('schools.update', $school->id) }}" method="POST" class="row g-3">
                        @csrf
                        @method('put')
                        <div class="col-12">
                            <label for="school_name" class="form-label">Name Of School</label>
                            <input type="text" name="school_name" class="form-control" id="school_name" placeholder=" Plateau International School" value="{{ $school->school_name }}">
                            <div>
                                @error('school_name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" name="address" class="form-control" id="address" placeholder="1234 Main St" value="{{ $school->address }}">
                            <div>
                                @error('address')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="city" class="form-label">City</label>
                            <input type="text" name="city" class="form-control" id="city" placeholder="Jos North" value="{{ $school->city }}">
                            <div>
                                @error('city')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="state" class="form-label">State</label>
                            <input type="text" name="state" class="form-control" id="state" placeholder="Plateau" value="{{ $school->state }}">
                            <div>
                                @error('state')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-2">
                            <label for="po_box" class="form-label">P O Box</label>
                            <input type="text" name="po_box" class="form-control" id="po_box" placeholder="P.O. Box 123" value="{{ $school->po_box }}">
                            <div>
                                @error('po_box')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="example@school.com" value="{{ $school->email }}">
                            <div>
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="text" name="phone" class="form-control" id="phone" value="{{ $school->phone }}">
                            <div>
                                @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="principal_name" class="form-label">Principal Name</label>
                            <input type="text" name="principal_name" class="form-control" id="principal_name" placeholder=" John Doe" value="{{ $school->principal_name }}">
                            <div>
                                @error('principal_name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="vice_principal_name" class="form-label">Vice Principal Name</label>
                            <input type="text" name="vice_principal_name" class="form-control" id="vice_principal_name" placeholder=" Jane Doe" value="{{ $school->vice_principal_name }}">
                            <div>
                                @error('vice_principal_name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12 d-flex justify-content-end gap-2">
                            <a href="{{ route('schools.index') }}" class="btn btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
