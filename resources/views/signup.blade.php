@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header"><h2>Signup</h2></div>

                    <div class="card-body">
                        <form method="POST" action="{{ url('/signup') }}">
                            @csrf

                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" name="name" id="name" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Sign up</button>
                        </form>
                    </div>
                </div>
                <p class="mt-3">Already have an account? <a href="{{ url('/login') }}">Login Instead?</a></p>
            </div>
        </div>
    </div>
@endsection
