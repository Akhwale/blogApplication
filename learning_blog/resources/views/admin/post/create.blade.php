@extends('layouts.master')

@section('content')

@section('title','Add Post')

<div class="container-fluid px-4">
    
    <div class="card mt-4">

        @if ($errors->any())
        <div class="alert alert-danger">
            @foreach (@errors->all() as $error)
                <div>{{$error}}</div>
            @endforeach
        </div>
        @endif

        <div class="card-header">
            <h4>Add post
                <a href="{{url('admin/dashboard')}}" class="btn btn-danger float-end">Back</a>
            </h4>
        </div>
        <div class="card-body">
            <form action="{{url('admin/add-post')}}" method="POST" enctype='multipart/form-data'>
                @csrf


                <div class="mb-3">
                    <label for="">Post Name</label>
                    <input type="text" name="name" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label for="">Slug</label>
                    <input type="text" name="slug" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label for="">Description</label>
                    <textarea name="description" id="mysummernote" class="form-control" rows="4"></textarea>
                </div>
                <div class="mb-3">
                    <label for="">Image</label>
                    <input type="file" name="image" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label for="">Youtube I frame link</label>
                    <input type="text" name="yt_frame" class="form-control"/>
                </div>
                <h4>SEO Tags</h4>
                <div class="mb-3">
                    <label for="">Meta Title</label>
                    <input type="text" name="meta_title" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label for="">Meta Description</label>
                    <textarea name="meta_description" class="form-control" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="">Meta Keyword</label>
                    <textarea name="meta_keyword" class="form-control" rows="3"></textarea>
                </div>
                <h4>Status</h4>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="">Status</label>
                            <input type="checkbox" name="status" />
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary float-end">Save Post</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection