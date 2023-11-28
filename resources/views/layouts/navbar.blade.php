

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Metamorphosed</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- fontawesome -->
        <script src="https://kit.fontawesome.com/b5f1e7184e.js" crossorigin="anonymous"></script>

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="{{ URL::to('https://fonts.googleapis.com ') }}">
        <link rel="preconnect" href="{{ URL::to('https://fonts.gstatic.com') }}" crossorigin>
        <link href="{{ URL::to('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&family=Pacifico&display=swap') }}" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Open+Sans:ital,wght@0,300;0,400;0,500;1,600;1,700&family=Raleway:wght@100;400;500;600;700&family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="{{ URL::to('https://use.fontawesome.com/releases/v5.15.4/css/all.css') }}"/>
        <link href="{{ URL::to('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css') }}" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{ URL::to('lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ URL::to('lib/owlcarousel/assets/owl.carousel.min.css ') }}" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ URL::to('css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ URL::to('css/style.css') }}" rel="stylesheet">

    </head>
    <body>

    <!-- Spinner Start -->
    <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
      <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar start -->
  <main class="container-fluid fixed-top topbar-container">
    <div class="container">
        <nav class="navbar navbar-light navbar-expand-lg py-3">
            <a href="index.html" class="navbar-brand">
                <h1 class="logo-title"><i class="fa-solid fa-dove logo-icon"></i>Metamorphosed</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars text-primary"></span>
            </button>
            <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                <div class="navbar-nav ms-lg-auto mx-xl-auto">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link">Music</a>
                    <a href="activity.html" class="nav-item nav-link">Games</a>
                    <a href="event.html" class="nav-item nav-link">About</a>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                    <div class="search-flex">   
                        <input type="text" placeholder="Search anything here!" class="search-box">
                    <div class="icon-tooltip">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <div class="profile-container">
                        <img src="img/users.jpg" class="profile-picture">
                        <div class="hi-tooltip">
                          <p class="hi-text">Hi, Username!</p>
                        </div>
                    </div>
                    <button class="logout-button" >
                        <a href="/login"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
                        <div class="logout-tooltip">
                            <p class="logout-text">Logout?</p>
                        </div>
                    </button>
                    </div>
                </div>
            </div>
        </nav>
    </main>
    <!-- Topbar End -->
  
  
  <!-- Back to Top -->
  <a href="#" class="btn btn-primary border-3 border-light back-to-top"><i class="fa fa-arrow-up"></i></a>   
  
  <!-- JavaScript Libraries -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  
  <!-- Template Javascript -->
  <script src="js/main.js"></script>

  
        
    </body>
    </html>

    @yield('navbar')

   

    
    