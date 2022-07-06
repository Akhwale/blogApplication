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
            
            <div class="card card-shadow mt-4">
                <div class="card-body">
                    <a href="{{url('blogs/'.$postItem->slug)}}" class="text-decoration-none">
                        <h2 class="post-heading">{{$postItem->name}}</h2>
                    </a>
                    <h6>
                        Posted On:{{$postItem->created_at->format('d-m-Y')}}
                        <span class="ms-3">Posted by:{{$postItem->user->name}}</span> 
                    </h6>  
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
                <div class="border p-2">
                    <h4>For Adverts</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection