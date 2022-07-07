@extends('layouts.app')
@section('content')

<!-- Slideshow container -->
<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
    <div class="numbertext bg-blue text-light fw-bold" style="font-size:80px; margin-left:30px;margin-top:20px; opacity:0.7">Frustrated?</div>
      <img src="{{ url('/images/service4.jpg') }}" style="width:100%; height:500px">
      <div class="text bg-blue"><i class="fa-solid fa-blog"></i>Class-Blogs</div>
    </div>
  
    <div class="mySlides fade">
    <div class="numbertext bg-blue text-light fw-bold" style="font-size:80px; margin-left:30px;margin-top:20px; opacity:0.7">Worry Not!</div>
      <img src="{{ url('/images/service1.jpg') }}" style="width:100% ;height:500px">
      <div class="text bg-blue"><i class="fa-solid fa-blog"></i>Class-Blogs</div>
    </div>
  
    <div class="mySlides fade">
        <div class="numbertext bg-blue text-light fw-bold" style="font-size:80px; margin-left:30px;margin-top:20px; opacity:0.7">We are Here!</div>
      <img src="{{ url('/images/service2.jpg') }}" style="width:100%; height:500px">
      <div class="text bg-blue"><i class="fa-solid fa-blog"></i>Class-Blogs</div>
    </div>
  
    <div class="mySlides fade">
        <div class="numbertext bg-blue text-light fw-bold" style="font-size:80px; margin-left:30px;margin-top:20px; opacity:0.7">To serve you</div>
      <img src="{{ url('/images/service5.jpg') }}" style="width:100%; height:500px">
      <div class="text bg-blue"><i class="fa-solid fa-blog"></i>Class-Blogs</div>
      
    </div>

    <div class="mySlides fade">
        <div class="numbertext bg-blue text-light fw-bold" style="font-size:80px; margin-left:30px;margin-top:20px; opacity:0.7">Everyday</div>
        <img src="{{ url('/images/service3.jpg') }}" style="width:100%; height:500px">
        <div class="text bg-blue"><i class="fa-solid fa-blog"></i>Class-Blogs</div>
        
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
    <span class="dot" onclick="currentSlide(5)"></span>
  </div>
  


<div class="bg-dark text-light text-center">
    <h1 class="pt-3 pb-2"> Reach Out to us, We are always Happy to help</h1>
</div>

<h2 class="text-center fw-bold font-family-sans-serif text-dark pt-5 pb-5"> <i class="fa-solid fa-blog"></i>Class-Blogs</h2>

<div class="container pb-5">
    <div class="row pt-5 mx-0 justify-content-between">
        <div class="col-sm-6 ">
            <div class="card text-end" >
                <div class="card-body">
                    <h3>Find us</h3>
            <p>
            P.O. Box 52428 - 00200<br>
            Nairobi - Kenya<br>
            Haile Selassie Avenue<br>
            Tel: +254(020) 2219929, 3341639, 3343672<br>
            General inquiries: info@tukenya.ac.ke<br>
            Feedback/Compalints/Suggestions : customercare@tukenya.ac.ke<br>
            Official Communication: vc@tukenya.ac.ke</p>   
                </div>
              </div>
        </div>


        
            <div class="col-md-4 col-lg-6">
                <div class="commet-area ">
                    @if(session('message'))
                        <h6 class='alert alert-warning mb-3'>{{session('message')}}</h6>
                     @endif
                    <div class="card card-body bg-dark ">
                        <h4 class="card-heading fw-bold text-center text-light bg-dark"><i class="fa-solid fa-envelope"></i> Contact us</h4>
                        <form action="{{url('contacts')}}" method="POST">
                            @csrf
                            <textarea name="issue" class="form-control"  rows="5" required></textarea>
                            <button type="submit" class="btn btn-primary mt-3">Send <i class="fa-solid fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
                </div>
        </div>
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