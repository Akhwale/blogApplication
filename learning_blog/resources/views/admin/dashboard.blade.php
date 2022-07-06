@extends('layouts.master')

@section('content')

@section('title','Class Blog')

  
 <!---Dasboard content-->

 <div class=" col d-block " >
    <h1 class="mt-1 mb-1 ms-1 pb-2 bg-dark text-warning " >Dashboard</h1>
    <div class="bg-dark ">
    <div class=" ms-1 mt-1 bg-dark text-light position-relative "  >
      
     <div class="d-flex p-4 justify-content-between ">
     
       <div class="card bg-success" style="width: 16rem;">
         <div class="card-body text-center">
           <h4 class="card-title text-center fw-bold text-dark">Number of Blogs Posted</h4>
           <p class="card-text ">Check out the number of blogs you've covered so far. Review to find out what needs to be changed!</p>
           <h1 class="card-text text-dark"> {{ $totalusers }} </h1>
           <a href="{{url('admin/posts')}}" class="btn btn-warning text-light"  >View Posts</a>
         </div>
       </div>

       <div class="card bg-primary" style="width: 16rem;">
        <div class="card-body text-center">
          <h4 class="card-title text-center fw-bold text-white"> Registered Users on Board</h4>
          <p class="card-text text-dark">Have a closer look at people closely following your blog feeds. You can give a few users the rights to make blogs too! </p>
          <h1 class="card-text text-dark"> {{ $totalusers }} </h1>
          <a href="{{url('admin/users')}}" class="btn btn-warning text-light"  >View Users</a>
        </div>
      </div>
       
       
       <div class="card bg-danger" style="width: 30rem;">
        <div class="card-body text-center">
          <h4 class="card-title fw-bold text-dark">Be the first one to get Informed as it happens</h4>
          <p class="card-text ">
            Best lifestyle blogs<br>
            Health and fitness blog<br>
            Best fashion blogs<br>
            Best travel blog <br>
            Technlogy and gaming blog <br>
            Matters relationship blog examples <br>
            </p>
          <a href="{{url('blogs')}}" class="btn btn-warning text-light">Blog Page</a>
        </div>
      </div>
     </div>
     </div>

     <h1 class="mt-1 mb-1 ms-1 pb-3 pt-3 bg-dark text-center text-light" ><i class="fa-solid fa-blog"></i>Class-Blogs</h1>

    </div>

 </div>
 
@endsection