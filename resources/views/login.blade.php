@extends('layouts.app')

@section('title', 'Login')

@section('content')
<h1>Login</h1>

@if (session('message'))
    <div class="alert-success">
        {{ session('message') }}
    </div>
@endif

<form action="{{ route('login.submit') }}" method="POST" class="auth-form">
    @csrf
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
    
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>
    
    <button type="submit">Login</button>
</form>
@endsection
