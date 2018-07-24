@extends('main')

@section('content')
<div class="pb-2 mt-4 mb-2 border-bottom">
    <h1 class="mb-1">Past Talks.</h1>
</div>

@foreach ($talks as $talk)
    <div class="container rounded p-3 shadow" style="background-color:#ECF0F1;color:black; word-wrap: break-word">
        <h3>{{ $talk->title }}</h3>
        <div><a href="{{ $talk->video_url }}">Watch the video recording</a></div>
        <div><b>Presenter:</b> {{ $talk->user->name }}</div>
        <div><b>Date Given:</b> {{ $talk->date_given }}</div>
        <div><b>Abstract:</b> {{ $talk->abstract }}</div>
    </div>
    <br>
@endforeach
@endsection