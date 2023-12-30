@extends('layouts.app')
 
@section('body')

    <div class="container">
        <h1 class="text-center mb-5" >PENDATAAN MAHASISWA UNIVERSITAS ANDALAS</h1>
    </div>
    <div class="container fluid carousel-contain mx-auto">
      <div class="container"></div>
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner  ">
              <div class="carousel-item active">
                <img src="image/unand1.jpg" class="d-block w-100" alt="unand1">
              </div>
              <div class="carousel-item">
                <img src="image/unand2.jpg" class="d-block w-100" alt="unand2">
              </div>
              <div class="carousel-item">
                <img src="image/unand6.jpg" class="d-block w-100 " alt="unand3">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
          
@endsection
