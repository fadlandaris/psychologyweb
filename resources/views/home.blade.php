@extends('layouts.navbar')
@section('navbar')

  <!-- Hero Start -->
  <main class="container-fluid hero-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="hero-header-inner animated zoomIn">   
            <h1 class="display-1 text-dark typing-demo"> Welcome To, </h1>
            <h1 class="display-1 mb-5 text-dark typing-demo">Metamorphosed !</h1>
              <div class="game-button-flex">
                <button class="readmore-button">READ MORE</button>
              <div class="game-button-hover">
                <button class="game-button">
                <i class="fa-solid fa-paw"></i>
                </button>
                <div class="game-tooltip">
                  Browse Activities!
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- Hero End -->
  
  
  <!-- About Start -->
    <main class="about-main-container wow zoomIn" data-wow-delay="0.1s">
    <div class="about-title wow zoomIn" data-wow-delay="0.2s">
        ABOUT METAMORPHOSED
    </div>
    <h1 class="about-title-large">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam asperiores quo optio sapiente explicabo laudantium.</h1>
    <p class="about-desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel ea dolor voluptas fugit architecto eum blanditiis unde! Voluptatum tempora est quo dignissimos ipsum, corrupti vero repellat aliquam sint soluta eligendi.</p>
    <section class="about-flex-container">
        <div class="child-flex">
            <i class="fa-solid fa-bullseye"></i>
            <p class="child-title">Lorem, ipsum.</p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur expedita optio id inventore quae nesciunt omnis, necessitatibus odit. Distinctio ipsam, molestias optio voluptatibus totam nulla nobis hic soluta nihil deleniti saepe accusamus inventore eligendi nam temporibus numquam. In minus incidunt ea, laudantium beatae eaque hic corporis quas, provident eligendi voluptatibus!</p>
        </div>
        <div class="child-flex">
            <i class="fa-solid fa-notes-medical"></i>
            <p class="child-title">Lorem, ipsum.</p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur expedita optio id inventore quae nesciunt omnis, necessitatibus odit. Distinctio ipsam, molestias optio voluptatibus totam nulla nobis hic soluta nihil deleniti saepe accusamus inventore eligendi nam temporibus numquam. In minus incidunt ea, laudantium beatae eaque hic corporis quas, provident eligendi voluptatibus!</p>
        </div>
        <div class="child-flex">
            <i class="fa-solid fa-heart-pulse"></i>
            <p class="child-title">Lorem, ipsum.</p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur expedita optio id inventore quae nesciunt omnis, necessitatibus odit. Distinctio ipsam, molestias optio voluptatibus totam nulla nobis hic soluta nihil deleniti saepe accusamus inventore eligendi nam temporibus numquam. In minus incidunt ea, laudantium beatae eaque hic corporis quas, provident eligendi voluptatibus!</p>
        </div>
    </section>
    </main>
  <!-- About End -->  
     
  <!-- Activities Start -->
   <main class="activities-container wow fadeIn" data-wow-delay="1s">
    <div class="activities-title wow zoomIn" data-wow-delay="0.2S">
       <p class="activities-medium">Metamorphosed <span class="activities-mini">Activites<span></p>
       <p class="activities-desc-medium">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique magni fugit autem odit repellat sed!</p>
    </div>
    <section class="activities-flex-container">
        <div class="child-flex-container">
            <div class="child-image-container">
                <img src="img/game-img.jpg" class="img-activities">
            </div>
            <div class="child-text-container">
                <div class="child-text-flex-container">
                    <p class="text-margin-right"><i class="fa-solid fa-puzzle-piece"></i>Game activities</p>
                    <p><i class="fa-solid fa-user"></i>User</p>
                </div>
                <p class="activities-title-flex">Play Minigames</p>
                <p class="activities-desc-flex">Many games, especially those that require strategic thinking, puzzles, or problem solving, can stimulate your brain. This can help improve cognitive skills.</p>
                <button class="more-details-flex-button">More Details</button>
            </div>
        </div>
        <div class="child-flex-container">
            <div class="child-image-flex-container">
                <img src="img/music-img.jpg" class="img-activities">
            </div>
            <div class="child-text-container">
                <div class="child-text-flex-container">
                    <p class="text-margin-right"><i class="fa-solid fa-headphones"></i>Music Activities</p>
                    <p><i class="fa-solid fa-user"></i>User</p>
                </div>
                <p class="activities-title-flex">Listening to Music</p>
                <p class="activities-desc-flex">Music has the ability to stimulate feelings. Listening to music that makes you happy or inspired can improve your mood and help overcome feelings of sadness or anxiety.</p>
                <button class="more-details-flex-button">More Details</button>
            </div>
        </div>
        <div class="child-flex-container">
            <div class="child-image-flex-container">
                <img src="img/chat-img.jpg" class="img-activities">
            </div>
            <div class="child-text-container">
                <div class="child-text-flex-container">
                    <p class="text-margin-right"><i class="fa-solid fa-comments"></i>Chat Activites</p>
                    <p><i class="fa-solid fa-users"></i>User and Admin</p>
                </div>
                <p class="activities-title-flex">Chat Service</p>
                <p class="activities-desc-flex">Confiding can help you release the emotional burden you feel. Talking to someone about your feelings can help reduce the stress and anxiety you may be experiencing.</p>
                <button class="more-details-flex-button">More Details</button>
            </div>
        </div>
    </section>
   </main>
  <!-- Activities Start -->
  
  
  <!-- Footer Start -->
	<main class="main-main-container wow fadeIn" data-wow-delay="0.1s">
		<main class="footer-container wow fadeIn">
    <section class="first-section">
					<a href="index.html" class="navbar-brand">
						<h1 class="logo-footer-title"><i class="fa-solid fa-dove logo-icon"></i>Metamorphosed</h1>
					</a>
					<p class="footer-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, quae.</p>
					<p class="footer-phone-number">+(555) 555-1234</p>
					<p class="footer-email"><i class="fa-solid fa-envelope"></i>exampleUsername@gmail.com</p>
    </section>
    <section class="second-section">
        <p class="footer-newsletter-link">Newsletter </p>
				<p class="social-desc">Stay Updated with us !</p>
				<div class="newsletter-container">
					<input type="text" placeholder="Type Your Email Here!" class="footer-email-container">
					<button class="footer-button-container"><i class="fa-solid fa-arrow-right" style="
					color:white
					"></i></button>
				</div>
    </section>
    <section class="third-section">
        <p class="footer-title-link">Blog</p>
				<a href="" class="link-text">WHMCS-Bridge</a>
				<a href="" class="link-text">Search Domain</a>
				<a href="" class="link-text">My Account</a>
				<a href="" class="link-text">Shopping Cart</a>
				<a href="" class="link-text">Our Shop</a>
    </section>
    <section class="fourth-section">
        <p class="footer-social-link">Our Social Media</p>
				<p class="social-desc">Let Us Be Social !</p>
				<i class="fa-brands fa-x-twitter social-icon"></i>
				<i class="fa-brands fa-instagram social-icon"></i>
				<i class="fa-brands fa-facebook social-icon"></i>
				<i class="fa-brands fa-linkedin social-icon"></i>
    </section>
  </main>
	<div class="footer-license">
		<div class="footer-line">
		</div>
		<p class="license-text"><i>copyright ©2023 All right reserved Metamorphosed</i></p>
		<p>Terms & Conditions / Privacy Policy</p>
	</div>
	</main>
  
  <!-- Footer End -->
  

  @endsection