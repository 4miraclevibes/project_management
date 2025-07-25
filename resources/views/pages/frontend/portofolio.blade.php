@extends('layouts.frontend.main')

@section('content')
<div class="row">
    @foreach ($projects as $project)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <span class="badge bg-primary mb-2">SMKN 2 GUGUAK</span>
                    <span class="badge bg-success mb-2 text-end"><a href="{{ route('project', $project->id) }}" class="text-white text-decoration-none">Lihat Proyek</a></span>
                    <h5 class="card-title text-truncate">{{ $project->name }}</h5>
                    <img src="{{ Storage::url($project->thumbnail) }}" class="img-fluid mb-3 card p-1" alt="Project Image" style="max-height: 200px; min-width: max-content;">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('assets/img/avatars/1.png') }}" class="rounded-circle me-2" alt="Avatar" width="30" height="30">
                            <img src="{{ asset('assets/img/avatars/1.png') }}" class="rounded-circle me-2" alt="Avatar" width="30" height="30">
                            <img src="{{ asset('assets/img/avatars/1.png') }}" class="rounded-circle me-2" alt="Avatar" width="30" height="30">
                        </div>
                        <small class="text-muted">{{ date('d F Y', strtotime($project->created_at)) }}</small>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
