@extends('layouts.layout')
@section('title')
    Register
@endsection

@section('fields')
<form action="{{route('registerPost')}}" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required>

        <button type="submit">Register</button>
</form>

@endsection

@section('form-name')
<h2>Registration Form</h2>
    
@endsection