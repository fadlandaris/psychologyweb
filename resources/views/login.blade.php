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

     <main class="body-main-container">
      <section class="img-wallpaper">
        <img src="img/img-wallpaper3.svg" class="login-wallpaper">
        <div class="license-container">
          <p class="license-text-container">Copyright ©2023 All right reserved Metamorphosed</p>
        </div>
      </section>
      <section class="login-container">
        <h1 class="login-title"><i class="fa-solid fa-dove"></i>Metamorphosed</h1>
        <p class="login-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, aperiam?</p>
        <div class="login-input-container">
          <input type="text" placeholder="Your Username" class="input-container">
          <div class="login-icon-tooltip">
            <i class="fa-solid fa-user"></i>
          </div>
        </div>
        <div class="login-input-container">
          <input type="text" placeholder="Password" class="input-container">
          <div class="login-icon-tooltip">
            <i class="fa-solid fa-eye"></i>
          </div>
        </div>
        <section class="forgot-link-container">
          <p><a class="forgot-link" href="">forgot password?</a></p>
        </section>
        <div class="login-button-container">
          <button class="login-button">
            <a href="/home">Welcome Back!</a>
          </button>
        </div>
        <p class="dont-have-acc"> 
          dont have an account? <a href="" class="register-link">click here!</a>
        </p>
      </section>
     </main>
      
    </body>
    </html>