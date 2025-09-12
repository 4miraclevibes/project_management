<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Contributor;
use Illuminate\Support\Facades\Auth;

class ContributorController extends Controller
{
    public function index(Project $project)
    {
        $contributors = $project->contributors;
        return view('pages.backend.projects.contributors.index', compact('contributors', 'project'));
    }

    public function create(Project $project)
    {
        return view('pages.backend.projects.contributors.create', compact('project'));
    }

    public function edit(Contributor $contributor)
    {
        return view('pages.backend.projects.contributors.edit', compact('contributor'));
    }

    public function store(Project $project, Request $request)
    {
        $request->validate([
            'role' => 'string|required',
        ]);

        // Cek apakah user sudah terdaftar sebagai contributor di project ini
        $existingContributor = $project->contributors()->where('user_id', Auth::user()->id)->first();

        if ($existingContributor) {
            return redirect()->route('projects.index')->with('error', 'User sudah terdaftar sebagai contributor di project ini.');
        }

        $project->contributors()->create([
            'role' => $request->role,
            'score' => $request->score ?? 0,
            'user_id' => Auth::user()->id,
        ]);
        return redirect()->route('projects.index')->with('success', 'Contributor created successfully.');
    }

    public function update(Project $project, Contributor $contributor, Request $request)
    {
        $request->validate([
            'status' => 'string|required',
            'score' => 'integer|nullable',
        ]);

        $contributor->update([
            'status' => $request->status,
            'score' => $request->score ?? 0,
        ]);
        return back()->with('success', 'Contributor updated successfully.');
    }
}
