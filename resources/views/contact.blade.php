@extends('layouts.app') 

@section('content')
    <div class="container">
        <h1 class="mb-4">Contact Us</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <p class="mb-3">{{ $usersWithMessagesCount }} users have sent a message.</p>

        <form action="{{ route('contact.submit') }}" method="post">
            @csrf

            <input type="hidden" name="user_id" value="{{ Auth::id() }}">

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" value="{{ old('name') }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" value="{{ old('email') }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="message">Message:</label>
                <textarea name="message" class="form-control" rows="5" required>{{ old('message') }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('home') }}" class="btn btn-secondary">Go Back</a>
        </form>
    </div>
@endsection
