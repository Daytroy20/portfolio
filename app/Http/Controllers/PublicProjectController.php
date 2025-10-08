<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class PublicProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('projects', compact('projects'));
    }

    public function show(Project $project)
    {
        return view('index.show', compact('project'));
    }
}
