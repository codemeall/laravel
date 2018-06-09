@extends('layouts.app')

@section('content')
    <div class="col-md-8 col-sm-8">
        <a href="/posts" class="btn btn-default">Go Back</a>       
        <hr> 
            <img style="width: 100%" src="/storage/cover_img/{{$post->cover_img}}">
        <h1>{{$post->title}}</h1>
        
        <div>
            {!! $post->body !!}
        </div>
        <hr>
        <small>Written on {{$post->created_at}}</small>
        <hr>
        @if(!Auth::guest() && Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
            {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right' ]) !!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    </div>
    <div class="col-md-4 col-sm-4">
    </div>
@endsection