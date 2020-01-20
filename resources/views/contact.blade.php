@extends('layouts.app')

@section('content')
<h1>contact us!</h1>

<form method="post" action={{ route('contact-form-submit') }}>
    @csrf

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
    </div>

    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp"
            placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group">
        <label for="subject">Subject</label>
        <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter subject">
    </div>

    <div class="form-group">
        <label for="message">Message</label>
        <input type="text" class="form-control" id="message" name="message" placeholder="Enter message">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
