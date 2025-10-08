@extends('layouts.app')

@section('title', 'Boniface Murigi — Building Modern Web Experiences')


@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero-section">
  <div class="container">
    <div class="hero-content" data-aos="fade-right">
      <h1>Hi, I'm <span class="highlight">Boniface Murigi</span></h1>
      <p class="tagline">Full Stack Web Developer & Creative Technologist</p>
      <p>
        I design and build fast, scalable, and visually engaging digital experiences — transforming ideas into elegant, high-performance web solutions that connect and inspire.
      </p>
      <div class="hero-buttons">
        <a href="{{ route('projects.index') }}" class="btn primary-btn">View My Work</a>
        <a href="#contact" class="btn secondary-btn">Get In Touch</a>
      </div>
    </div>
    <div class="hero-image" data-aos="fade-left">
      <img src="{{ Vite::asset('resources/images/image.jpeg') }}" alt="Boniface Murigi - Full Stack Developer">
    </div>
  </div>
</section>


    <!-- About Me Section -->
    <section id="about-me" class="section">
  <div class="container">
    <div class="section-header" data-aos="fade-up">
      <h2>About Me</h2>
      <div class="underline"></div>
    </div>
    <div class="about-content">
      <div class="about-text" data-aos="fade-right">
        <p>
          Hi! I’m a passionate Full Stack Developer who loves turning ideas into fully functional digital experiences. With a background in computer science, I enjoy creating applications that are not only visually appealing but also efficient and reliable under the hood.
        </p>
        <p>
          I work comfortably across the stack — from designing responsive, user-friendly interfaces to building powerful backend systems with frameworks like Laravel and Node.js. I’m all about writing clean, maintainable code that makes a difference for real people.
        </p>
        <p>
          What drives me most is learning and growth. Whether it’s exploring new technologies, improving existing projects, or collaborating on something innovative, I’m always eager to push boundaries and bring creative ideas to life through technology.
        </p>
      </div>
    </div>
  </div>
</section>


    <!-- Skills Section -->
    <section id="skills" class="section bg-light">
  <div class="container">
    <div class="section-header" data-aos="fade-up">
      <h2>My Skills</h2>
      <div class="underline"></div>
    </div>
    <div class="skills-container" data-aos="fade-up">

      <div class="skill-group">
        <h3>Frontend</h3>
        <div class="skills-grid">
          <div class="skill-card"><i class="fab fa-html5"></i><span>HTML5</span></div>
          <div class="skill-card"><i class="fab fa-css3-alt"></i><span>CSS3</span></div>
          <div class="skill-card"><i class="fab fa-js"></i><span>JavaScript</span></div>
          <div class="skill-card"><i class="fab fa-react"></i><span>React</span></div>
          <div class="skill-card"><i class="fab fa-bootstrap"></i><span>Bootstrap</span></div>
          <div class="skill-card"><i class="fab fa-vuejs"></i><span>Vue.js</span></div>
        </div>
      </div>

      <div class="skill-group">
        <h3>Backend</h3>
        <div class="skills-grid">
          <div class="skill-card"><i class="fab fa-node-js"></i><span>Node.js</span></div>
          <div class="skill-card"><i class="fas fa-code"></i><span>Django</span></div>
          <div class="skill-card"><i class="fab fa-laravel"></i><span>Laravel</span></div>
          <div class="skill-card"><i class="fas fa-database"></i><span>MySQL</span></div>
          <div class="skill-card"><i class="fas fa-server"></i><span>RESTful APIs</span></div>
        </div>
      </div>

      <div class="skill-group">
        <h3>Tools & DevOps</h3>
        <div class="skills-grid">
          <div class="skill-card"><i class="fab fa-git-alt"></i><span>Git</span></div>
          <div class="skill-card"><i class="fab fa-github"></i><span>GitHub</span></div>
          <div class="skill-card"><i class="fab fa-docker"></i><span>Docker</span></div>
          <div class="skill-card"><i class="fas fa-cloud"></i><span>Cloud Deployment</span></div>
        </div>
      </div>

      <div class="skill-group">
        <h3>Soft Skills</h3>
        <div class="skills-grid">
          <div class="skill-card"><i class="fas fa-users"></i><span>Teamwork</span></div>
          <div class="skill-card"><i class="fas fa-lightbulb"></i><span>Problem Solving</span></div>
          <div class="skill-card"><i class="fas fa-tasks"></i><span>Project Management</span></div>
          <div class="skill-card"><i class="fas fa-comments"></i><span>Communication</span></div>
        </div>
      </div>

    </div>
  </div>
</section>


    <!-- Education Section -->
    <section id="education" class="section">
  <div class="container">
    <div class="section-header" data-aos="fade-up">
      <h2>Education & Skills</h2>
      <div class="underline"></div>
    </div>
    <div class="education-timeline" data-aos="fade-up">
      <div class="timeline-item">
        <div class="timeline-icon"><i class="fas fa-graduation-cap"></i></div>
        <div class="timeline-content">
          <h3>Bachelor of Science in Computer Science</h3>
          <h4>Karatina University</h4>
          <p>Coursework and projects strengthened my ability to design, build, and maintain web systems.</p>
          <ul>
            <li>Frontend: HTML, CSS, JavaScript, Vue</li>
            <li>Backend: PHP, Laravel, MySQL</li>
            <li>Version control: Git, GitHub</li>
            <li>Problem solving and project management</li>
          </ul>
        </div>
      </div>
      <div class="timeline-item">
        <div class="timeline-icon"><i class="fas fa-laptop-code"></i></div>
        <div class="timeline-content">
          <h3>Technical Skills Overview</h3>
          <p>Hands-on experience from academic and personal projects:</p>
          <ul>
            <li>API development and system integration</li>
            <li>Responsive web design and UI optimization</li>
            <li>Database design and performance tuning</li>
            <li>Server deployment and email configuration</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="education-cta" data-aos="fade-up">
      <a href="{{ asset('curriculum_vitae.pdf') }}" download class="btn primary-btn">
        <i class="fas fa-download"></i> Download My CV
      </a>
    </div>
  </div>
</section>


    <!-- Interests Section -->
    <section id="interests" class="section bg-light">
  <div class="container">
    <div class="section-header" data-aos="fade-up">
      <h2>What I'm Into</h2>
      <div class="underline"></div>
    </div>
    <div class="interests-grid" data-aos="fade-up">
      <div class="interest-card">
        <i class="fas fa-code"></i>
        <h3>Web Development</h3>
        <p>Building scalable web applications and exploring modern frameworks like Laravel and Vue.</p>
      </div>
      <div class="interest-card">
        <i class="fas fa-lightbulb"></i>
        <h3>Tech Innovations</h3>
        <p>Following new trends in AI, cloud computing, and automation to stay ahead in the tech field.</p>
      </div>
      <div class="interest-card">
        <i class="fas fa-robot"></i>
        <h3>Artificial Intelligence</h3>
        <p>Interested in machine learning, data analysis, and building intelligent systems that solve real-world problems.</p>
      </div>
      <div class="interest-card">
        <i class="fas fa-network-wired"></i>
        <h3>Cybersecurity</h3>
        <p>Learning about network defense, ethical hacking, and secure coding practices to protect digital systems.</p>
      </div>
      <div class="interest-card">
        <i class="fas fa-database"></i>
        <h3>Data Management</h3>
        <p>Working with databases and learning how data drives decision-making in modern organizations.</p>
      </div>
    </div>
  </div>
</section>


    <!-- Contact Section -->
    <section id="contact" class="section bg-light">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2>Get In Touch</h2>
                <div class="underline"></div>
            </div>
            <div class="contact-container">
                <div class="contact-info" data-aos="fade-right">
                    <div class="contact-card">
                        <i class="fas fa-envelope"></i>
                        <h3>Email</h3>
                        <a href="mailto:njorogebonface002@gmail.com">njorogebonface002@gmail.com</a>
                    </div>
                    <div class="contact-card">
                        <i class="fas fa-phone"></i>
                        <h3>Phone</h3>
                        <a href="tel:+254794665960">+254794665960</a>
                    </div>
                    <div class="contact-card">
                        <i class="fas fa-map-marker-alt"></i>
                        <h3>Location</h3>
                        <p>Karatina, Nyeri, Kenya</p>
                    </div>
                </div>
                <form id="contact-form" 
      class="contact-form" 
      data-aos="fade-left"
      method="POST" 
      action="{{ route('contact.send') }}">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Your Name" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Your Email" required>
    </div>
    <div class="form-group">
        <label for="subject">Subject</label>
        <input type="text" id="subject" name="subject" placeholder="Subject">
    </div>
    <div class="form-group">
        <label for="message">Message</label>
        <textarea id="message" name="message" placeholder="Your Message" required></textarea>
    </div>
    <button type="submit" class="btn primary-btn">
        <i class="fas fa-paper-plane"></i> Send Message
    </button>
</form>
@vite(['resources/js/contact.js'])


<div id="form-status"></div>

            </div>
        </div>
    </section>
@endsection
