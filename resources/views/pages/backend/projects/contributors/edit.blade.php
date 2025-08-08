@extends('layouts.backend.main')

@section('content')
<div class="container mt-3">
    <h1>Edit Contributor</h1>
    <form action="{{ route('contributors.update', $contributor->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="score" class="form-label">Score</label>
                <input type="number" class="form-control" id="score" name="score" required>
            </div>
            <div class="col-md-6">
                <label for="status" class="form-label">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="cancelled" {{ $contributor->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                    <option value="active" {{ $contributor->status == 'active' ? 'selected' : '' }}>Active</option>
                    <option value="inactive" {{ $contributor->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                    <option value="fired" {{ $contributor->status == 'fired' ? 'selected' : '' }}>Fired</option>
                    <option value="completed" {{ $contributor->status == 'completed' ? 'selected' : '' }}>Completed</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
