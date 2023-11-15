@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <a href="{{ route('contact') }}" class="btn btn-primary">Contact Us</a>
        
        <p class="mt-3">{{ $usersWithMessagesCount }} users have sent a message.</p>
    </div>
@endsection
