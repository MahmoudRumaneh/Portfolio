<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Mahmoud Rumaneh</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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
  <link href="{{asset ('css/app.css')}}" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.2/dist/tailwind.min.css" rel="stylesheet">

</head>

<body class="index-page">


  <main class="main">
      @if($project)
        <section class="mx-10">
            <div class="item-cyan position-relative">
              <!-- Wrap the entire item in a link to the project details page -->
                <img src="{{ asset($project->image) }}" class="img-fluid" alt="{{$project->name}}">
                <h3>{{$project->name}}</h3>
                <h3>Overview: </h3>
                <p>{{$project->description}}</p>
                <h3>Problem Satement: </h3>
                <p>{{$project->problem}}</p>
                <h3>Features and Functionality: </h3>
                <ul>
                    @foreach(explode(',', $project->features) as $feature)
                        <li>{{ trim($feature) }}</li>
                    @endforeach
                </ul> 
                <h3>Technical Details: </h3>
                <ul>
                  <li><b>Frontend: </b><span>{{$project->frontend}}.</span></li>
                  <li><b>Backend: </b><span>{{$project->backend}}.</span></li>
                  <li><b>Database: </b><span>{{$project->database}}.</span></li>
                </ul>
            </div>
        </section>
      @endif
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