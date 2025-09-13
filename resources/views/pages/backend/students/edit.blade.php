@extends('layouts.backend.main')

@section('content')
<div class="container">
    <h1>Edit Student</h1>
    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $student->user->name }}" disabled>
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $student->user->email }}" disabled>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="department_id" class="form-label">Department</label>
                <select class="form-control" id="department_id" name="department_id" required>
                    @foreach($departments as $department)
                        <option value="{{ $department->id }}" {{ $student->department_id == $department->id ? 'selected' : '' }}>{{ $department->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim" value="{{ $student->nim }}" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ $student->phone }}" required>
            </div>
            <div class="col-md-6">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ $student->address }}" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="profile_picture" class="form-label">Profile Picture</label>
                <input type="file" class="form-control" id="profile_picture" name="profile_picture">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
