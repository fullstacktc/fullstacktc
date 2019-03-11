@extends('main')

@section('content')
<header class="masthead">
    <div class="container h-100">
        <div class="h-100" style="padding-top:70px;">
            <main class="py-4">  
                <div class="pb-2 mt-4 mb-2 border-bottom">
                    <h1 class="mb-1">Past Talks.</h1>
                </div>

                @foreach ($talks as $talk)
                    <div class="container rounded p-3 shadow" style="background-color:#ECF0F1;color:black; word-wrap: break-word">
                        <h3>{{ $talk->title }}</h3>
                        @if ($talk->video_url !== '')
                            <div><a target="_blank" href="{{ $talk->video_url }}">Watch the video recording</a></div>
                        @endif
                        @if ($talk->notes !== '')
                            <div><a target="_blank" href="{{ $talk->notes }}">Read the meetup notes</a></div>
                        @endif
                        @if ($talk->user !== null)
                            <div><b>Presenter:</b> <a href="/user/{{ $talk->user->username }}">{{ $talk->user->name }}</a></div>
                        @else
                            <div><b>Presenter:</b> {{ $talk->name }}</div>
                        @endif
                        <div><b>Date Given:</b> {{ $talk->date_given }}</div>
                        <div><b>Abstract:</b> {{ $talk->abstract }}</div>
                    </div>
                    <br>
                @endforeach
            </main>
        </div>
    </div>
</header>
@endsection 