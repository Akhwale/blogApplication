@extends('layouts.app')

@section('content')


<div class="yoh">
<!-- Slideshow container -->
<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <div class="numbertext bg-blue text-light">B</div>
      <img src="{{ url('/images/blog.jpg') }}" style="width:100%; height:500px">
      <div class="text bg-blue"><i class="fa-solid fa-blog"></i>Class-Blogs</div>
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext bg-warning text-light">L</div>
      <img src="{{ url('/images/news.jpg') }}" style="width:100% ;height:500px">
      <div class="text bg-warning"><i class="fa-solid fa-blog"></i>Class-Blogs</div>
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext bg-danger text-light">0</div>
      <img src="{{ url('/images/desk.jpg') }}" style="width:100%; height:500px">
      <div class="text bg-danger"><i class="fa-solid fa-blog"></i>Class-Blogs</div>
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext bg-dark text-light">G</div>
      <img src="{{ url('/images/blog2.jpg') }}" style="width:100%; height:500px">
      <div class="text bg-dark"><i class="fa-solid fa-blog"></i>Class-Blogs</div>
      
    </div>
    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>
  
  <!-- The dots/circles -->
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
  </div>
  
</div>


<div class="container text-center">
    
    <h1 class="bg-dark text-light pt-2 pb-3">| Be the First One to Get Informed! |</h1>
    

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   <h3> We are sincerly happy to have you {{ Auth::user()->name }} </h3>
                </div>

            </div>
        </div>
    </div>

    <p>ViewLatest Blogs</p>
    <a href="{{url('blogs')}}" class="btn btn-lg btn-success" style="width:300px">Blogs</a>
</div>


<script>
    let slideIndex = 0;
    showSlides();
    
    function showSlides() {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}    
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 2000);// Change image every 2 seconds
    }
    </script>

@endsection
