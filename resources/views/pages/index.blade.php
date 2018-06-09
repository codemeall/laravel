@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>The Basic Laraval App</p>
        <p><a href="/login" class="btn btn-primary btn-lg">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
    </div>  
@endsection
