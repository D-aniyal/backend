@extends('layout.app')

@section('content')
<style>
h3{
    color: azure;
}
    </style>
<br>
<br>
<br>
<br>
<br>
<br>
<h3>Games</h3>
<br>
<br>
<br>
<br>
<br>
<br>
@if(count($posts) > 1)
@foreach($posts as $post)
    <div class="well">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Written on {{$post->created_at}}</small>
            
        
    </div>
@endforeach

@else
<p>No posts found</p>
@endif

@endsection
