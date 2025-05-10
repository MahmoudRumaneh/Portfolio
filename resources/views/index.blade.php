<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Mahmoud Rumaneh</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <!-- Favicons -->

  <link href="{{asset ('imgs/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset ('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset ('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset ('vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset ('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset ('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  {{-- <link href="{{asset ('css/app.css')}}" rel="stylesheet"> --}}

</head>

<body class="index-page">

  <header id="header" class="header d-flex flex-column justify-content-center">

    <i class="header-toggle d-xl-none bi bi-list"></i>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="#" class="active"><i class="bi bi-house navicon"></i><span>Home</span></a></li>
        <li><a href="#about"><i class="bi bi-person navicon"></i><span>About</span></a></li>
        <li><a href="#projects"><i class="bi bi-images navicon"></i><span>Projects</span></a></li>
        <li><a href="#contact"><i class="bi bi-envelope navicon"></i><span>Contact</span></a></li>
      </ul>
    </nav>

  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

      <img src="{{asset ('imgs/background.jpg')}}" alt="">

      <div class="container" data-aos="zoom-out">
        <div class="row justify-content-center">
          <div class="col-lg-9">
            <h2>Mahmoud Rumaneh</h2>
            <p>I'm <span class="typed" data-typed-items="Web Developer, Software Engineer, IT Consultant">Web Developer</span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
            <div class="social-links">
              <a href="#"><i class="bi bi-twitter-x"></i></a>
              <a href="#"><i class="bi bi-facebook"></i></a>
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
            <div class="contact">
              <form class="php-email-form" onsubmit="openCV(event)">
                <div class="mt-4">
                  <button type="submit">Show CV</button>
                </div>
              </form>
            </div>
            
            <script>
              function openCV(event) {
                event.preventDefault();
                window.open('https://drive.google.com/file/d/1zjC2mPDYa7J5Y2jZwObpGMhkL0HmiTal/view?usp=drive_link', '_blank');
              }
            </script>            
            
          </div>
        </div>
      </div>

    </section>

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About</h2>
        <p>Full Stack Web Developer specializing in HTML, CSS, JavaScript, React, NextJS, Node.js, PHP Laravel, CRM, Java, MySQL, MongoDB, TailwindCSS, APIs, Docker, Postman, Power BI, and WordPress. English and Arabic Speaker </p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="{{asset ('imgs/profile.png')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 content">
            <h2>Full Stack Web Developer</h2>
            <p class="fst-italic py-3">
              Passionate Full-stack Web Developer with expertise crafting user-friendly websites. I would love to put my creative insights into something visual. Eager to learn and advance my skills
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Github:</strong> <a href="https://github.com/MahmoudRumaneh"><span>MahmoudRumaneh</span></a></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+962 78 6913394</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Amman, Jordan</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Major:</strong> <span>Computer Science</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <a href="#"><span>mahmoudrmn@gmail.com</span></a></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Situation:</strong> <span>Looking for full time job</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section>

    <!-- Projects Section -->
    <section id="projects" class="portfolio services section">

      <div class="container section-title" data-aos="fade-up">
        <h2>Projects</h2>
      </div>

      <div class="container ">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-web">Web</li>
            <li data-filter=".filter-mobile">Mobile</li>
            <li data-filter=".filter-other">Other</li>
          </ul><!-- End Portfolio Filters -->
          @foreach ($projects as $project)
            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{$project->type}}">
                <div class="item-cyan position-relative">
                  <!-- Wrap the entire item in a link to the project details page -->
                  <a href="{{ route('project.details', $project->id) }}" class="stretched-link">
                    <img src="{{ asset($project->image) }}" class="img-fluid" alt="{{$project->name}}">
                    <h3>{{$project->name}}</h3>
                  </a>
                </div>
              </div>
            </div>
          
          @endforeach
        </div>
      </div>



    </section>
    
    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <h5>Feel free to reach out! I'm actively seeking new opportunities and would love to hear from you. Whether you have 
          a question, a project in mind, or just want to say hello, my inbox is always open. I'll do my best to respond promptly!
        </h5>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Me</h3>
                <p>+962 78 6913394</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Me</h3>
                <p>
                  <a href="mailto:mahmoudrmn@gmail.com" style="text-decoration: none; color: inherit;">mahmoudrmn@gmail.com</a>
                </p>
              </div>
            </div>            
          </div>

          <div class="col-lg-8">
            <form action="/forms/contact" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              @csrf
              <div class="row gy-4">
                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>
                <div class="col-md-6">
                  <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                </div>
                <div class="col-md-12">
                  <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                </div>
                <div class="col-md-12">
                  <textarea name="message" class="form-control" rows="6" placeholder="Message" required></textarea>
                </div>
                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                  <button type="submit">Send Message</button>
                </div>
              </div>
            </form>
            
          </div>

        </div>

      </div>

    </section>

  </main>

  <footer id="footer" class="footer position-relative light-background">
      <div class="container d-flex align-items-center justify-content-between">
        <div>
          <span>Copyright</span> <strong class="px-1 sitename">Mahmoud Rumaneh</strong> <span>All Rights Reserved</span>
        </div>
        <div class="mt-2 social-links d-flex justify-content-center">
          <a href=""><i class="bi bi-github"></i></a>
          <a href=""><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset ('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset ('vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset ('vendor/aos/aos.js')}}"></script>
  <script src="{{asset ('vendor/typed.js/typed.umd.js')}}"></script>
  <script src="{{asset ('vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset ('vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset ('vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset ('vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset ('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset ('vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{asset ('js/app.js')}}"></script>

</body>

</html>