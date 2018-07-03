@extends('main')

@section('content')
<div class="pb-2 mt-4 mb-2 border-bottom">
    <h1 class="mb-1">Submit to give a talk.</h1>
</div>
<form method="post" action="{{ url('/talksubmission') }}">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" id="name" required placeholder="Jane Doe">
    </div>
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" required placeholder="name@example.com">
    </div>
    <div class="form-group">
        <label for="title">Title of Talk</label>
        <input type="text" class="form-control" id="title" name="title" required placeholder="Title of your talk">
    </div>
    <div class="form-group">
        <label for="abstract">A quick summary of your talk</label>
        <textarea class="form-control" id="abstract" name="abstract" rows="3" required></textarea>
    </div>
    <button type="submit" value="Submit Talk" class="btn btn-primary mb-2">Submit Talk</button>
</form>
@endsection