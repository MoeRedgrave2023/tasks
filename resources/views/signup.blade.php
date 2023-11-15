@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Signup</h2>
        <form method="POST" action="{{ url('/signup') }}">
            @csrf

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit">Signup</button>
        </form>
    </div>
@endsection
