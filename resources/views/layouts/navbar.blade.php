@yield('navbar')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  {{-- google font  --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">

  {{-- fontawesome icon  --}}
  <script src="https://kit.fontawesome.com/b5f1e7184e.js" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/b5f1e7184e.js" crossorigin="anonymous"></script>

  {{-- bootstrap Style  --}}
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  {{-- CSS Style  --}}
  <link rel="stylesheet" href="css/style.css">

  <title></title>
</head>

{{-- navbar start  --}}

<body>
  <header class="navbar-container">
    <section class="left-container">
     <div class="profile-picture-container">
      <img src="image/profile-picture.png" class="profile-picture">
      <div class="profile-name-tooltip">
        Hi, Moefaris
       </div>
      </div>
     <div class="search-box-container">
      <div class="search-icon-tooltip-container">
        <i class="fa-solid fa-magnifying-glass" ></i>
      </div>
     <input type="text" placeholder="Search anything here" class="search-box">
     </div>
    </section>

    <section class="right-container">
      <div class="navbar-text-container">
        Home
      </div>
      <div class="navbar-text-container">
        Contact Us
      </div>
      <div class="navbar-text-container">
        Reach Us
      </div>
      <div class="navbar-text-container">
        Community
      </div>
      <section class="icon-container">
        <i class="fa-solid fa-bars"></i>
      </section>
    </section>
  </header>
</body>
</html>

{{-- navbar ends  --}}