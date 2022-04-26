@extends('app')
@section('content')
<p>WELCOME <b>{{ Auth::user()->name }}</b></p>
    @auth
    <a href="{{route('password')}}" class="btn btn-primary">Change Password</a>
    <a href="{{route('logout')}}" class="btn btn-danger">Logout</a>
    @endauth
    @guest
    <a href="{{route('login')}}" class="btn btn-primary">Login</a>
    <a href="{{route('register')}}" class="btn btn-info">Register</a>
    @endguest
@endsection