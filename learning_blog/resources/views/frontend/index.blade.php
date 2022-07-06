@extends('layouts.app')

@section ('title', 'Best blogs')

@section ('meta_title', 'Best IT blogs')

@section ('meta_description', 'How to program')

@section ('meta_keyword', 'Best PHP programers and programs')

@section('content')
<div class="container text-center">
    
    <h1 class="pb-4 pt-2">| Catch Up with the Latest As It Happens |</h1>
    <div class="row pt-5 mx-0 justify-content-between">
        <div class="col-sm-6 ">
          <div class="card  " style="marging-right:500px" >
            <div class="card-body">
              <h5 class="card-title">Im new here!<br><i class="fa-solid fa-hand-sparkles"></i></h5>
              <p class="card-text">Easily Sign Up with your emailaddress and get to choose a User Name</p>
              <a href="{{ url('/register') }}" class="btn btn-danger"style="width:150px">Register</a>
            </div>
          </div>
        </div>
        
        <div class="col-sm-6 ">
          <div class=" card ">
            <div class="card-body">
              <h5 class="card-title">Already Signed Up!<br><i class="fa-solid fa-hand-peace"></i></h5>
              <p class="card-text">Login and catch up with the mot trending topics so far</p>
              <a href="{{ url('/login') }}" class="btn btn-success"style="width:150px">Login</a>
            </div>
          </div>
        </div>
      </div>
   
      <h1 class="mt-3 mb-1 ms-1 pb-3 pt-5  text-center text-dark" ><i class="fa-solid fa-blog"></i>Class-Blogs</h1>
      
</div>
@endsection