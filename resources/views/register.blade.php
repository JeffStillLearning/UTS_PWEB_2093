@extends('layouts.app')

@section('title', 'Register')

@section('content')
<h1>Register</h1>

<form action="{{ route('register.submit') }}" method="POST" class="auth-form">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
    
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>
    
    <button type="submit">Register</button>
</form>
@endsection
