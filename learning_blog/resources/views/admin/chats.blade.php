@extends('layouts.master')

@section('content')

@section('title','View Chats')

<table class="table table-bordered">
    <thead>
        <tr>
            <th>#Chat-ID</th>
            <th>#User-ID</th>
            <th>Message</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach($allchats as $chat)
        <tr>
            <td>{{$chat->id}}</td>
            <td>{{$chat->user_id}}</td>
            <td>{{$chat->issue}}</td>

        </tr>
        @endforeach
    </tbody>
</table>


@endsection