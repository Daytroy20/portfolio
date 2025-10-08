@extends('layouts.app')

@section('content')
<section id="projects" class="section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <h2>My Projects</h2>
            <div class="underline"></div>
        </div>

        <div class="projects-grid">
            @foreach ($projects as $project)
                <div class="project-card" data-aos="fade-up">
                    <div class="project-img">
                        @if($project->image)
                            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}">
                        @endif
                    </div>
                    <div class="project-content">
                        <h3>{{ $project->title }}</h3>
                        <p>{{ $project->description }}</p>

                        @if($project->tags)
                        <div class="project-tags">
                            @foreach (json_decode($project->tags) as $tag)
                                <span>{{ $tag }}</span>
                            @endforeach
                        </div>
                        @endif

                        <div class="project-links">
                            @if ($project->github)
                                <a href="{{ $project->github }}" class="btn-small" target="_blank">
                                    <i class="fab fa-github"></i> View Code
                                </a>
                            @endif
                            @if ($project->demo)
                                <a href="{{ $project->demo }}" class="btn-small" target="_blank">
                                    <i class="fas fa-external-link-alt"></i> Live Demo
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
