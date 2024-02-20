@extends('layouts.layout')
@section('title')
    Login
@endsection

@section('fields')
<form action="{{route('loginPost')}}" method="post">
    @csrf
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

    
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Login</button>
</form>

@endsection

@section('form-name')
<h2>Login Form</h2>
    
@endsection