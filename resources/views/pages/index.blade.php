@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>This is the Laravel application from the "Laravel From Scratch" youtube series.</p>
        <p><a href="/login" class="btn btn-primary btn-lg">Login</a> <a href="/signup" class="btn btn-success btn-lg">SignUp</a></p>
    </div>
@endsection

