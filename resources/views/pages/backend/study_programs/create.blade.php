@extends('layouts.backend.main')

@section('content')
<div class="container">
    <h1>Create Konsentrasi</h1>
    <form action="{{ route('study_programs.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="col-md-6">
                <label for="code" class="form-label">Kode</label>
                <input type="text" class="form-control" id="code" name="code" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="department_id" class="form-label">Departemen</label>
                <select class="form-control" id="department_id" name="department_id" required>
                    @foreach($departments as $department)
                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Buat</button>
    </form>
</div>
@endsection
