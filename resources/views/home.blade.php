@extends('layouts.navbar')
@section('navbar')

  {{-- main image start  --}}
  <main class="image-large-container">
    <img src="image/main-img.jpg" class="main-image">
  <div class="transparent-background">
  </div>
    <div class="content-background">
      <div class="text-content">
        <div class="text-title">
          <p class="text-titles">Welcome to,</p>
          <p class="text-titles">Metamorphosed!</p>
          </div>
          <div class="text-desc">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam et corporis cum odio adipisci consequatur repudiandae veritatis reprehenderit, odit, tenetur nam earum fugit numquam aliquid obcaecati quas asperiores deleniti officiis.</p>
          </div>
          <div class="button-text">
          <button class="read-button">
            Read More
          </button>
          <div class="play-container">
            <button class="play-button">
              <i class="fa-solid fa-puzzle-piece"></i>
            </button>
            <div class="play-tooltip">
              Let's Play The Game!
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    {{-- main image ends  --}}
   

    {{-- details content start --}}
    <main class="main-details-container">
      <div class="flex-details-container">
        <section class="left-details-container">
          <div class="icon-details-tooltip">
           <i class="fa-solid fa-stethoscope"></i>
          </div>
          <span class="title-details">
           Metamorphosed
          </span>
          <p class="desc-details"> 
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis pariatur itaque labore adipisci consequatur non
          </p>
        </section>

        <section class="left-details-container">
          <div class="icon-details-tooltip">
           <i class="fa-solid fa-stethoscope"></i>
          </div>
          <span class="title-details">
           Metamorphosed
          </span>
          <p class="desc-details"> 
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis pariatur itaque labore adipisci consequatur non
          </p>
        </section>

       <section class="left-details-container">
          <div class="icon-details-tooltip">
           <i class="fa-solid fa-stethoscope"></i>
          </div>
          <span class="title-details">
           Metamorphosed
          </span>
          <p class="desc-details"> 
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis pariatur itaque labore adipisci consequatur non
          </p>
        </section>

      </div>
    </main>
@endsection