<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('admin.dashboard', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image',
            'github' => 'nullable|url',
            'demo' => 'nullable|url',
            'tags' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('projects', 'public');
        }

        // Convert comma-separated tags to JSON
        $data['tags'] = $request->tags ? json_encode(array_map('trim', explode(',', $request->tags))) : null;

        Project::create($data);

        return redirect()->route('admin.dashboard')->with('success', 'Project added!');
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image',
            'github' => 'nullable|url',
            'demo' => 'nullable|url',
            'tags' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('projects', 'public');
        }

        // Convert comma-separated tags to JSON
        $data['tags'] = $request->tags ? json_encode(array_map('trim', explode(',', $request->tags))) : null;

        $project->update($data);

        return redirect()->route('admin.dashboard')->with('success', 'Project updated!');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->back()->with('success', 'Project deleted!');
    }
}
