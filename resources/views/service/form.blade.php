@extends('layouts.app')

@section('content')


<form method="post" action="{{ route('service.save') }}">
    @csrf

    <label for="is this good enough?">is this good enough?</label>
    <input type="text" name="question1" required>

    <label for="Do you want me to work on the way it looks now?">Do you want me to work on the way it looks now?</label>
    <input type="text" name="question2" required>

    

    <button type="submit">Submit</button>

    <p>
    <a href="{{ route('home') }}">go back home</a>
    </p>
</form>
@endsection