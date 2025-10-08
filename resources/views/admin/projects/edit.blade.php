@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Edit Project</h1>

    <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $project->title) }}" required>
        </div>

        <div class="mb-3">
            <label for="description">Description</label>
            <textarea name="description" class="form-control">{{ old('description', $project->description) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="image">Image</label>
            @if($project->image)
                <img src="{{ asset('storage/' . $project->image) }}" width="150" class="mb-2">
            @endif
            <input type="file" name="image" class="form-control">
        </div>

        <div class="mb-3">
            <label for="tags">Technologies (Tags)</label>
            <input type="text" name="tags" class="form-control" 
                   value="{{ old('tags', $project->tags ? implode(',', json_decode($project->tags)) : '') }}" 
                   placeholder="e.g. Laravel, Vue, Tailwind">
            <small class="form-text text-muted">Separate multiple technologies with commas.</small>
        </div>

        <div class="mb-3">
            <label for="github">GitHub URL</label>
            <input type="url" name="github" class="form-control" value="{{ old('github', $project->github) }}">
        </div>

        <div class="mb-3">
            <label for="demo">Live Demo URL</label>
            <input type="url" name="demo" class="form-control" value="{{ old('demo', $project->demo) }}">
        </div>

        <button class="btn btn-success">Update Project</button>
        <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
