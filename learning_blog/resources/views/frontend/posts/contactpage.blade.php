@extends('layouts.app')
@section('content')

<div class="commet-area mt-4">
    @if(session('message'))
        <h6 class='alert alert-warning mb-3'>{{session('message')}}</h6>
    @endif
    <div class="card card-body">
        <h4 class="card-title">Cotact us</h4>
        <form action="{{url('contacts')}}" method="POST">
            @csrf
            <textarea name="issue" class="form-control"  rows="3" required></textarea>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>

        </form>
    </div>
</div>

@endsection