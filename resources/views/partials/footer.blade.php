<footer>
    <div class="containers">
        <div class="footer-content">
            <div class="footer-logo">
                <span>Boniface<span class="highlight">Murigi</span></span>
                <p>Web Developer & Designer</p>
            </div>
            <div class="footer-links">
                <a href="{{ url('/') }}#about-me">About</a>
                <a href="{{ url('/') }}#skills">Skills</a>
                <a href="{{ route('projects.index') }}">Projects</a>
                <a href="{{ url('/') }}#contact">Contact</a>
            </div>
            <div class="footer-social">
                <a href="live:.cid.fe8f031e214c566a" target="_blank"><i class="fab fa-skype"></i></a>
                <a href="#" target="_blank"><i class="fab fa-github"></i></a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} Boniface Murigi. All rights reserved.</p>
        </div>
    </div>
</footer>
