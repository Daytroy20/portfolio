<nav>
    <div class="container">
        <div class="logo">
            <a href="{{ url('/') }}" class="logo-link">
                <span>Boniface<span class="highlight">Murigi</span></span>
            </a>
        </div>
        <ul class="links">
            <li><a href="{{ url('/') }}#hero" class="nav-link">Home</a></li>
            <li><a href="{{ url('/') }}#about-me" class="nav-link">About</a></li>
            <li><a href="{{ url('/') }}#education" class="nav-link">Education</a></li>
            <li><a href="{{ url('/') }}#skills" class="nav-link">Skills</a></li>
            <li><a href="{{ route('projects.index') }}" class="nav-link">Projects</a></li>
            <li><a href="{{ url('/') }}#contact" class="nav-link">Contact</a></li>
        </ul>
        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</nav>
