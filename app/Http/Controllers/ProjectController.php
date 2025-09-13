<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\CommentReply;
use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\StudyProgram;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('pages.backend.projects.index', compact('projects'));
    }

    public function create()
    {
        $studyPrograms = StudyProgram::all();
        return view('pages.backend.projects.create', compact('studyPrograms'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'estimate_time' => 'required|integer',
            'description' => 'required|string',
            'level' => 'required|string|max:255',
            'score' => 'nullable|integer',
            'study_program_id' => 'required|exists:study_programs,id',
        ]);

        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $data['start_date'] = date('Y-m-d');
        $data['score'] = $request->score ?? 0;
        $data['end_date'] = date('Y-m-d', strtotime('+' . $request->estimate_time . ' days'));
        $data['study_program_id'] = $request->study_program_id;
        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        Project::create($data);

        return redirect()->route('projects.index')->with('success', 'Project created successfully.');
    }

    public function show(Project $project)
    {
        return view('pages.backend.projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        $users = User::all();
        $studyPrograms = StudyProgram::all();
        return view('pages.backend.projects.edit', compact('project', 'users', 'studyPrograms'));
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'estimate_time' => 'required|string|max:255',
            'description' => 'required|string',
            'level' => 'required|string|max:255',
            'score' => 'nullable|integer',
            'study_program_id' => 'required|exists:study_programs,id',
        ]);

        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $data['start_date'] = $project->created_at;
        $data['end_date'] = date('Y-m-d', strtotime('+' . $request->estimate_time . ' days', strtotime($project->created_at)));
        $data['score'] = $request->score ?? 0;
        $data['study_program_id'] = $request->study_program_id;
        if ($request->hasFile('thumbnail')) {
            Storage::delete($project->thumbnail);
            $data['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        $project->update($data);

        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        if ($project->thumbnail) {
            Storage::delete($project->thumbnail);
        }
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }

    public function updateStatus(Request $request, Project $project)
    {
        $project->update(['status' => $request->status]);
        return redirect()->route('projects.index')->with('success', 'Project status updated successfully.');
    }

    public function commentStore(Request $request, Project $project)
    {
        $request->validate([
            'comment' => 'required|string',
        ]);

        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $data['project_id'] = $project->id;

        Comment::create($data);

        return redirect()->route('projects.show', $project->id)->with('success', 'Comment added successfully.');
    }

    public function commentReplyStore(Request $request, Comment $comment, CommentReply $commentReply)
    {
        $request->validate([
            'content' => 'required|string',
        ]);

        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $data['comment_id'] = $comment->id;

        CommentReply::create($data);

        return redirect()->route('projects.show', $comment->project->id)->with('success', 'Comment added successfully.');
    }
}
