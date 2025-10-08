@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Admin Dashboard</h1>
    <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">Add New Project</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Technologies</th>
                <th>GitHub</th>
                <th>Live Demo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
            <tr>
                <td>{{ $project->title }}</td>
                <td>{{ $project->description }}</td>
                <td>
                    @if($project->image)
                        <img src="{{ asset('storage/' . $project->image) }}" width="100">
                    @endif
                </td>
                <td>
                    @if($project->tags)
                        @foreach(json_decode($project->tags) as $tag)
                            <span class="badge bg-secondary">{{ $tag }}</span>
                        @endforeach
                    @endif
                </td>
                <td>
                    @if($project->github)
                        <a href="{{ $project->github }}" target="_blank" class="btn btn-sm btn-dark">GitHub</a>
                    @endif
                </td>
                <td>
                    @if($project->demo)
                        <a href="{{ $project->demo }}" target="_blank" class="btn btn-sm btn-success">Live Demo</a>
                    @endif
                </td>
                <td>
                    <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Delete project?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
