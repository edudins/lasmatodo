@extends('home.layout')

@section('title', 'dudonart')

@section('home.content')
    <section id="welcome-section">
        <h1 id="welcome-title">Hello, my name is <em>Edgars</em>.</h1>
        <div id="scroll-container">
            <div id="scroll-text">
                <p id="welcome-subtitle">I am currently adding new <em>projects</em> to my homepage.</p><br>
            </div>
        </div>
    </section>
    <section id="projects">
        <h2 class="work-title">&emsp;Some of my projects:&emsp;</h2>
        <div class="line-break"></div>
        <div class="projects-container">
            <!-- You cannot vertically center text within a paragraph and giving a paragraph a height is a bad idea. -->
            <a href="/tasks" class="project-tile" target="_blank">
                <img src="img/screen5.png" alt="Project Image" class="project-image">
                <div class="project-title">
                    <p>
                        <span class="hover-snippet">{ </span>lasmatodo<span class="hover-snippet"> }</span>
                    </p>
                </div>
            </a>
            <a href="/bubble-fix/bubble.html" class="project-tile" target="_blank">
                <img src="img/screen1.png" alt="Project Image" class="project-image">
                <div class="project-title">
                    <p>
                        <span class="hover-snippet">{ </span>bubble-fix<span class="hover-snippet"> }</span>
                    </p>
                </div>
            </a>
            <a href="https://codepen.io/dudonart/full/GRoLqWe" class="project-tile" target="_blank">
                <img src="img/screen2.png" alt="Project Image" class="project-image">
                <div class="project-title">
                    <p>
                        <span class="hover-snippet">{ </span>submission-form<span class="hover-snippet"> }</span>
                    </p>
                </div>
            </a>
            <a href="https://codepen.io/dudonart/full/bGEJeRN" class="project-tile" target="_blank">
                <img src="img/screen3.png" alt="Project Image" class="project-image">
                <div class="project-title">
                    <p>
                        <span class="hover-snippet">{ </span>product-landing-page<span class="hover-snippet"> }</span>
                    </p>
                </div>
            </a>
            <a href="https://codepen.io/dudonart/full/MWKNaaR" class="project-tile" target="_blank">
                <img src="img/screen4.png" alt="Project Image" class="project-image">
                <div class="project-title">
                    <p>
                        <span class="hover-snippet">{ </span>technical-documentation-page<span class="hover-snippet">
                            }</span>
                    </p>
                </div>
            </a>
        </div>
        <div class="profile-link-button-container">
            <a href="https://codepen.io/dudonart" id="profile-link" target="_blank"><span class="hover-snippet">&lt;
                </span>More <span class="hover-snippet">/&gt;</span></a>
        </div>
    </section>
    <section id="contact-details">
        <h2 id="contact-title">Let us have a chat!</h2>
        <img src="img/profile.png" alt="my portrait" id="my-portrait">
        <div class="contact-options">
            <a href="mailto:edgars@dudins.lv" class="contact-contact">
                <em class="fas fa-envelope"></em> email
            </a>
            <a href="https://www.facebook.com/edgars.dudins" class="contact-contact" target="_blank" rel="noopener noreferrer">
                <em class="fab fa-facebook-square"></em> facebook
            </a>
            <a href="https://github.com/edudins" class="contact-contact" target="_blank" rel="noopener noreferrer">
                <em class="fab fa-github"></em> github
            </a>
            <a href="https://www.linkedin.com/in/edgars-dudins-42a98217/" class="contact-contact" target="_blank" rel="noopener noreferrer">
                <em class="fab fa-linkedin"></em> linkedin
            </a>
        </div>
        <p id="contact-footnote"><em>...tea or coffee?</em></p>
    </section>
@endsection
