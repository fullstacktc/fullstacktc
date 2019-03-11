@extends('main')

@section('content')
<header class="masthead">
    <div class="container h-100">
        <div class="h-100" style="padding-top:70px;">
            <main class="py-4"> 
                <div class="container rounded p-3 shadow" style="background-color:#ECF0F1;color:black; word-wrap: break-word">
                    <div class="pb-2 mt-4 mb-2 border-bottom">
                        <h1 class="mb-1">{{ $user->name }}</h1>
                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            @if ($user->bio !== null)
                                <h4>Bio</h4>
                                <div>{{ $user->bio }}</div>
                            @endif
                            <hr />
                            <div class="talks">
                                <h4>Talks</h4>
                                <div class="list-group">
                                    @foreach($user->talk_submissions as $talk)
                                    <a href="/talk/{{ $talk->id }}" class="list-group-item list-group-item-action">{{ $talk->title }}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 mx-auto text-center">
                            <img src="{{ $user->avatar }}" width="200" height="200" />
                            <hr />
                            @if ($user->email !== null)
                                <div>{{ $user->email }}</div>
                            @endif
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</header>

@endsection 