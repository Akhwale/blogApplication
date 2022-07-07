@extends('layouts.app')

@section ('title', "$post->name")

@section ('meta_title', "$post->meta_title")

@section ('meta_description', "$post->meta_description")

@section ('meta_keyword', "$post->meta_keyword")

@section('content')

<div class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
            
            <div class="blogs-heading">
                <h4 class="mb-0 text-center ">{!! $post->name !!}</h4>
            </div>
            
            <div class="card card-shadow mt-4">
                <img src=" {{url('/postimages/'.$post->image)}}" class="mt-0" style="width:100%; height:450px" >
                
  
                <div class="card-body">
                {!! $post->description !!}
                </div>
                
            </div>

            </div>
            <div class="col-md-4 pb-1">
                <div class="blogs-heading text-center ">
                    <h4 class="">Advertisements</h4>
                </div>
                <div class="card mt-3 text-white">
                    <img src="{{ url('/images/jumia.jpg') }}" class="card-img" alt="...">
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
                <div class="card mt-3">
                    <div class="card-header">
                        <h4>Suggested Posts</h4>
                    </div>
                    <div class="card-body">
                        @foreach($latest_post as $latest_post_item)

                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                              <div class="col-md-4">
                                <img src=" {{url('/postimages/'.$latest_post_item->image)}}" class="img-fluid rounded-start w-100 h-100" alt="..." >
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                    <a href="{{url('blogs/'.$latest_post_item->slug)}}" class="text-decoration-none">
                                        <h6>{{$latest_post_item->name}}</h6>
                                    </a>
                                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                              </div>
                            </div>
                          </div>

                            
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection