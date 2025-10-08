@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Add New Project</h1>

    <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}">
        </div>

        <div class="mb-3">
            <label for="description">Description</label>
            <textarea name="description" class="form-control">{{ old('description') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control">
        </div>

        <div class="mb-3">
            <label for="tags" class="form-label">Technologies (Tags)</label>
            <input type="text" name="tags" id="tags" class="form-control" 
                   value="{{ old('tags', isset($project) ? implode(',', json_decode($project->tags)) : '') }}" 
                   placeholder="e.g. Laravel, Vue, Tailwind">
            <small class="form-text text-muted">Separate multiple technologies with commas.</small>
        </div>

        <div class="form-group">
            <label for="github">GitHub URL</label>
            <input type="url" name="github" id="github" class="form-control" value="{{ old('github', $project->github ?? '') }}">
        </div>

        <div class="form-group">
            <label for="demo">Live Demo URL</label>
            <input type="url" name="demo" id="demo" class="form-control" value="{{ old('demo', $project->demo ?? '') }}">
        </div>

        <button class="btn btn-success">Save Project</button>
        <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
