@extends('layouts.app')

@section ('title')

View Blogs

@endsection

@section('content')

<div class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
            
            <div class="blogs-heading">
                <h4 class="mb-0">Our Blogs</h4>
            </div>
            @forelse($posts as $postItem)
            
        <div class="card mb-3 mt-2" style="">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{url('/postimages/'.$postItem->image)}}" class="img-fluid rounded-start w-100 h-100" alt="..." >
              </div>
              <div class="col-md-8">
                <div class="card-body">
                   <a href="{{url('blogs/'.$postItem->slug)}}" class="text-decoration-none ">
                        <h3  style="color:black">{{$postItem->name}}</h3>
                    </a>
                    <p>
                        {{$postItem->meta_description}}<br>
                        {{$postItem->created_at->format('d-m-Y')}} <br>
                        Post By: {{$postItem->user->name}}
                    </p> 
                  
                </div>
              </div>
            </div>
          </div>
            @empty

            <div class="card card-shadow mt-4">
                <div class="card-body">
                    <h1>No post available</h1>
                </div>
            </div>

            @endforelse

            </div>
            <div class="col-md-3">
                <div class="blogs-heading text-center ">
                    <h4 class="">Advertisements</h4>
                </div>
                <div class="card mt-3 text-white">
                    <img src="{{ url('/images/jiji.jpg') }}" class="card-img" alt="...">
                    <div class="card-img-overlay">
                     
                    </div>
                  </div>
                <div class="card mt-3 text-white">
                    <img src="{{ url('/images/jumia.jpg') }}" class="card-img" alt="...">
                    <div class="card-img-overlay">
                      
                    </div>
                  </div>
                  <div class="card mt-3 text-white">
                    <img src="{{ url('/images/dstv.jpg') }}" class="card-img" alt="...">
                    <div class="card-img-overlay">
                     
                    </div>
                  </div>

                  <div class="card mt-3 text-white">
                    <img src="{{ url('/images/sportpesa.jpg') }}" class="card-img" alt="...">
                    <div class="card-img-overlay">
                     
                    </div>
                  </div>
                
                <div class="border p-2 my-2">
                    <h6 class="text-center">Book Slot for Advertisement</h6>
                </div>
            </div>

            
        </div>
    </div>
</div>
@endsection