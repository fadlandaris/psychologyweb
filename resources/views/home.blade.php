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
  
  
  <!-- Events Start -->
  <main class="">
   
  </main>
  <!-- Events End -->
  
  
  <!-- Sermon Start -->
  <div class="container-fluid sermon py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
            <p class="fs-5 text-uppercase text-primary">Sermons</p>
            <h1 class="display-3">Join The Islamic Community</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-6 col-xl-4">
                <div class="sermon-item wow fadeIn" data-wow-delay="0.1s">
                    <div class="overflow-hidden p-4 pb-0">
                        <img src="img/sermon-1.jpg" class="img-fluid w-100" alt="">
                    </div>
                    <div class="p-4">
                        <div class="sermon-meta d-flex justify-content-between pb-2">
                            <div class="">
                                <small><i class="fa fa-calendar me-2 text-muted"></i><a href="" class="text-muted me-2">13 Nov 2023</small></a>
                                <small><i class="fas fa-user me-2 text-muted"></i><a href="" class="text-muted">Admin</small></a>
                            </div>
                            <div class="">
                                <a href="" class="me-1"><i class="fas fa-video text-muted"></i></a>
                                <a href="" class="me-1"><i class="fas fa-headphones text-muted"></i></a>
                                <a href="" class="me-1"><i class="fas fa-file-alt text-muted"></i></a>
                                <a href="" class=""><i class="fas fa-image text-muted"></i></a>
                            </div>
                        </div>
                        <a href="" class="d-inline-block h4 lh-sm mb-3">How to get closer to Allah</a>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                        aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
           <div class="col-lg-6 col-xl-4">
                <div class="sermon-item wow fadeIn" data-wow-delay="0.3s">
                    <div class="overflow-hidden p-4 pb-0">
                        <img src="img/sermon-2.jpg" class="img-fluid w-100" alt="">
                    </div>
                    <div class="p-4">
                        <div class="sermon-meta d-flex justify-content-between pb-2">
                            <div class="">
                                <small><i class="fa fa-calendar me-2 text-muted"></i><a href="" class="text-muted me-2">13 Nov 2023</small></a>
                                <small><i class="fas fa-user me-2 text-muted"></i><a href="" class="text-muted">Admin</small></a>
                            </div>
                            <div class="">
                                <a href="" class="me-1"><i class="fas fa-video text-muted"></i></a>
                                <a href="" class="me-1"><i class="fas fa-headphones text-muted"></i></a>
                                <a href="" class="me-1"><i class="fas fa-file-alt text-muted"></i></a>
                                <a href="" class=""><i class="fas fa-image text-muted"></i></a>
                            </div>
                        </div>
                        <a href="" class="d-inline-block h4 lh-sm mb-3">Importance of Hajj in Islam</a>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                        aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
           <div class="col-lg-6 col-xl-4">
                <div class="sermon-item wow fadeIn" data-wow-delay="0.5s">
                    <div class="overflow-hidden p-4 pb-0">
                        <img src="img/sermon-3.jpg" class="img-fluid w-100" alt="">
                    </div>
                    <div class="p-4">
                        <div class="sermon-meta d-flex justify-content-between pb-2">
                            <div class="">
                                <small><i class="fa fa-calendar me-2 text-muted"></i><a href="" class="text-muted me-2">13 Nov 2023</small></a>
                                <small><i class="fas fa-user me-2 text-muted"></i><a href="" class="text-muted">Admin</small></a>
                            </div>
                            <div class="">
                                <a href="" class="me-1"><i class="fas fa-video text-muted"></i></a>
                                <a href="" class="me-1"><i class="fas fa-headphones text-muted"></i></a>
                                <a href="" class="me-1"><i class="fas fa-file-alt text-muted"></i></a>
                                <a href="" class=""><i class="fas fa-image text-muted"></i></a>
                            </div>
                        </div>
                        <a href="" class="d-inline-block h4 lh-sm mb-3">Importance of “Piller” of Islam</a>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                        aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  <!-- Sermon End -->
  
  
  <!-- Blog Start -->
  <div class="container-fluid py-5">
    <div class="container py-5">
        <h1 class="display-3 mb-5 wow fadeIn" data-wow-delay="0.1s">Latest From <span class="text-primary">Our Blog</span></h1>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-6 col-xl-4">
                <div class="blog-item wow fadeIn" data-wow-delay="0.1s">
                    <div class="blog-img position-relative overflow-hidden">
                        <img src="img/blog-1.jpg" class="img-fluid w-100" alt="">
                        <div class="bg-primary d-inline px-3 py-2 text-center text-white position-absolute top-0 end-0">01 Jan 2045</div>
                    </div>
                    <div class="p-4">
                        <div class="blog-meta d-flex justify-content-between pb-2">
                            <div class="">
                                <small><i class="fas fa-user me-2 text-muted"></i><a href="" class="text-muted me-2">By Admin</small></a>
                                <small><i class="fa fa-comment-alt me-2 text-muted"></i><a href="" class="text-muted me-2">12 Comments</small></a>
                            </div>
                            <div class="">
                                <a href=""><i class="fas fa-bookmark text-muted"></i></a>
                            </div>
                        </div>
                        <a href="" class="d-inline-block h4 lh-sm mb-3">Importance of “Piller” of Islam</a>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                        aliquip ex ea commodo consequat.</p>
                        <a href="#" class="btn btn-primary px-3">More Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="blog-item wow fadeIn" data-wow-delay="0.3s">
                    <div class="blog-img position-relative overflow-hidden">
                        <img src="img/blog-2.jpg" class="img-fluid w-100" alt="">
                        <div class="bg-primary d-inline px-3 py-2 text-center text-white position-absolute top-0 end-0">01 Jan 2045</div>
                    </div>
                    <div class="p-4">
                        <div class="blog-meta d-flex justify-content-between pb-2">
                            <div class="">
                                <small><i class="fas fa-user me-2 text-muted"></i><a href="" class="text-muted me-2">By Admin</small></a>
                                <small><i class="fa fa-comment-alt me-2 text-muted"></i><a href="" class="text-muted me-2">12 Comments</small></a>
                            </div>
                            <div class="">
                                <a href=""><i class="fas fa-bookmark text-muted"></i></a>
                            </div>
                        </div>
                        <a href="" class="d-inline-block h4 lh-sm mb-3">How to get closer to Allah</a>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                        aliquip ex ea commodo consequat.</p>
                        <a href="#" class="btn btn-primary px-3">More Details</a>
                    </div>
                </div>
            </div>
           <div class="col-lg-6 col-xl-4">
                <div class="blog-item wow fadeIn" data-wow-delay="0.5s">
                    <div class="blog-img position-relative overflow-hidden">
                        <img src="img/blog-3.jpg" class="img-fluid w-100" alt="">
                        <div class="bg-primary d-inline px-3 py-2 text-center text-white position-absolute top-0 end-0">01 Jan 2045</div>
                    </div>
                    <div class="p-4">
                        <div class="blog-meta d-flex justify-content-between pb-2">
                            <div class="">
                                <small><i class="fas fa-user me-2 text-muted"></i><a href="" class="text-muted me-2">By Admin</small></a>
                                <small><i class="fa fa-comment-alt me-2 text-muted"></i><a href="" class="text-muted me-2">12 Comments</small></a>
                            </div>
                            <div class="">
                                <a href=""><i class="fas fa-bookmark text-muted"></i></a>
                            </div>
                        </div>
                        <a href="" class="d-inline-block h4 lh-sm mb-3">Importance of Hajj in Islam</a>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                        aliquip ex ea commodo consequat.</p>
                        <a href="#" class="btn btn-primary px-3">More Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  <!-- Blog End -->
  
  
  <!-- Team Start -->
  <div class="container-fluid team py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
            <p class="fs-5 text-uppercase text-primary">Our Team</p>
            <h1 class="display-3">Meet Our Organizer</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-xl-5">
                <div class="team-img wow zoomIn" data-wow-delay="0.1s">
                    <img src="img/team-1.jpg" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-lg-8 col-xl-7">
                <div class="team-item wow fadeIn" data-wow-delay="0.1s">
                    <h1>Anamul Hasan</h1>
                    <h5 class="fw-normal fst-italic text-primary mb-4">President</h5>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. aliquip ex ea commodo consequat.</p>
                    <div class="team-icon d-flex pb-4 mb-4 border-bottom border-primary">
                        <a class="btn btn-primary btn-lg-square me-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-primary btn-lg-square me-2" href=""><i class="fab fa-twitter"></i></a>
                        <a href="#" class="btn btn-primary btn-lg-square me-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="btn btn-primary btn-lg-square"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="team-item wow zoomIn" data-wow-delay="0.2s">
                            <img src="img/team-2.jpg" class="img-fluid w-100" alt="">
                            <div class="team-content text-dark text-center py-3">
                                <div class="team-content-inner">
                                    <h5 class="mb-0">Mustafa Kamal</h5>
                                    <p class="text-dark">Imam</p>
                                    <div class="team-icon d-flex align-items-center justify-content-center">
                                        <a class="btn btn-primary btn-sm-square me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-primary btn-sm-square me-2" href=""><i class="fab fa-twitter"></i></a>
                                        <a href="#" class="btn btn-primary btn-sm-square me-2"><i class="fab fa-instagram"></i></a>
                                        <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="team-item wow zoomIn" data-wow-delay="0.4s">
                            <img src="img/team-3.jpg" class="img-fluid w-100" alt="">
                            <div class="team-content text-dark text-center py-3">
                                <div class="team-content-inner">
                                    <h5 class="mb-0">Nahiyan Momen</h5>
                                    <p class="text-dark">Teacher</p>
                                    <div class="team-icon d-flex align-items-center justify-content-center">
                                        <a class="btn btn-primary btn-sm-square me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-primary btn-sm-square me-2" href=""><i class="fab fa-twitter"></i></a>
                                        <a href="#" class="btn btn-primary btn-sm-square me-2"><i class="fab fa-instagram"></i></a>
                                        <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="team-item wow zoomIn" data-wow-delay="0.6s">
                            <img src="img/team-4.jpg" class="img-fluid w-100" alt="">
                            <div class="team-content text-dark text-center py-3">
                                <div class="team-content-inner">
                                    <h5 class="mb-0">Asfaque Ali</h5>
                                    <p class="text-dark">Volunteer</p>
                                    <div class="team-icon d-flex align-items-center justify-content-center">
                                        <a class="btn btn-primary btn-sm-square me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-primary btn-sm-square me-2" href=""><i class="fab fa-twitter"></i></a>
                                        <a href="#" class="btn btn-primary btn-sm-square me-2"><i class="fab fa-instagram"></i></a>
                                        <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  <!-- Team End -->
  
  
  <!-- Testiminial Start -->
  <div class="container-fluid testimonial py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
            <p class="fs-5 text-uppercase text-primary">Testimonial</p>
            <h1 class="display-3">What People Say About Islam</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.1s">
            <div class="testimonial-item">
                <div class="d-flex mb-3">
                    <div class="position-relative">
                        <img src="img/testimonial-1.jpg" class="img-fluid" alt="">
                        <div class="btn-md-square bg-primary rounded-circle position-absolute" style="top: 25px; left: -25px;">
                            <i class="fa fa-quote-left text-dark"></i>
                        </div>
                    </div>
                    <div class="ps-3 my-auto ">
                        <h5 class="mb-0">Full Name</h5>
                        <p class="m-0">Profession</p>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="d-flex">
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                    </div>
                    <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do tempor ut labore et dolore magna aliqua. Ut enim ad minim quis.</p>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="d-flex mb-3">
                    <div class="position-relative">
                        <img src="img/testimonial-2.jpg" class="img-fluid" alt="">
                        <div class="btn-md-square bg-primary rounded-circle position-absolute" style="top: 25px; left: -25px;">
                            <i class="fa fa-quote-left text-dark"></i>
                        </div>
                    </div>
                    <div class="ps-3 my-auto ">
                        <h5 class="mb-0">Full Name</h5>
                        <p class="m-0">Profession</p>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="d-flex">
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                    </div>
                    <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do tempor ut labore et dolore magna aliqua. Ut enim ad minim quis.</p>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="d-flex mb-3">
                    <div class="position-relative">
                        <img src="img/testimonial-3.jpg" class="img-fluid" alt="">
                        <div class="btn-md-square bg-primary rounded-circle position-absolute" style="top: 25px; left: -25px;">
                            <i class="fa fa-quote-left text-dark"></i>
                        </div>
                    </div>
                    <div class="ps-3 my-auto ">
                        <h5 class="mb-0">Full Name</h5>
                        <p class="m-0">Profession</p>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="d-flex">
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                    </div>
                    <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do tempor ut labore et dolore magna aliqua. Ut enim ad minim quis.</p>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="d-flex mb-3">
                    <div class="position-relative">
                        <img src="img/testimonial-4.jpg" class="img-fluid" alt="">
                        <div class="btn-md-square bg-primary rounded-circle position-absolute" style="top: 25px; left: -25px;">
                            <i class="fa fa-quote-left text-dark"></i>
                        </div>
                    </div>
                    <div class="ps-3 my-auto ">
                        <h5 class="mb-0">Full Name</h5>
                        <p class="m-0">Profession</p>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="d-flex">
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                    </div>
                    <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do tempor ut labore et dolore magna aliqua. Ut enim ad minim quis.</p>
                </div>
            </div>
        </div>
    </div>
  </div>
  <!-- Testiminial End -->
  
  
  <!-- Footer Start -->
  <div class="container-fluid footer pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row py-5">
            <div class="col-lg-7">
                <h1 class="text-light mb-0">Subscribe our newsletter</h1>
                <p class="text-secondary">Get the latest news and other tips</p>
            </div>
            <div class="col-lg-5">
                <div class="position-relative mx-auto">
                    <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                    <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Subcribe</button>
                </div>
            </div>
            <div class="col-12">
                <div class="border-top border-secondary"></div>
            </div>
        </div>
        <div class="row g-4 footer-inner">
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item mt-5">
                    <h4 class="text-light mb-4">THE<span class="text-primary">Mosque</span></h4>
                    <p class="mb-4 text-secondary">Nostrud exertation ullamco labor nisi aliquip ex ea commodo consequat duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
                    <a href="" class="btn btn-primary py-2 px-4">Donate Now</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item mt-5">
                    <h4 class="text-light mb-4">Our Mosque</h4>
                    <div class="d-flex flex-column">
                        <h6 class="text-secondary mb-0">Our Address</h6>
                        <div class="d-flex align-items-center border-bottom py-4">
                            <span class="flex-shrink-0 btn-square bg-primary me-3 p-4"><i class="fa fa-map-marker-alt text-dark"></i></span>
                            <a href="" class="text-body">123 Street, New York, USA</a>
                        </div>
                        <h6 class="text-secondary mt-4 mb-0">Our Mobile</h6>
                        <div class="d-flex align-items-center py-4">
                            <span class="flex-shrink-0 btn-square bg-primary me-3 p-4"><i class="fa fa-phone-alt text-dark"></i></span>
                            <a href="" class="text-body">+012 345 67890</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item mt-5">
                    <h4 class="text-light mb-4">Explore Link</h4>
                    <div class="d-flex flex-column align-items-start">
                        <a class="text-body mb-2" href=""><i class="fa fa-check text-primary me-2"></i>Home</a>
                        <a class="text-body mb-2" href=""><i class="fa fa-check text-primary me-2"></i>About Us</a>
                        <a class="text-body mb-2" href=""><i class="fa fa-check text-primary me-2"></i>Our Features</a>
                        <a class="text-body mb-2" href=""><i class="fa fa-check text-primary me-2"></i>Contact us</a>
                        <a class="text-body mb-2" href=""><i class="fa fa-check text-primary me-2"></i>Our Blog</a>
                        <a class="text-body mb-2" href=""><i class="fa fa-check text-primary me-2"></i>Our Events</a>
                        <a class="text-body mb-2" href=""><i class="fa fa-check text-primary me-2"></i>Donations</a>
                        <a class="text-body mb-2" href=""><i class="fa fa-check text-primary me-2"></i>Sermons</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item mt-5">
                    <h4 class="text-light mb-4">Latest Post</h4>
                    <div class="d-flex border-bottom border-secondary py-4">
                        <img src="img/blog-mini-1.jpg" class="img-fluid flex-shrink-0" alt="">
                        <div class="ps-3">
                            <p class="mb-0 text-muted">01 Jan 2045</p>
                            <a href="" class="text-body">Lorem ipsum dolor sit amet elit eros vel</a>
                        </div>
                    </div>
                    <div class="d-flex py-4">
                        <img src="img/blog-mini-2.jpg" class="img-fluid flex-shrink-0" alt="">
                        <div class="ps-3">
                            <p class="mb-0 text-muted">01 Jan 2045</p>
                            <a href="" class="text-body">Lorem ipsum dolor sit amet elit eros vel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-4">
        <div class="border-top border-secondary pb-4"></div>
        <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.
            </div>
            <div class="col-md-6 text-center text-md-end">
                <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
            </div>
        </div>
    </div>
  </div>
  <!-- Footer End -->

  @endsection