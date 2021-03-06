@extends('main')

@section('content')
<header class="masthead">
  <div class="container h-100">
    <div class="h-100" style="padding-top:70px;">
      <main class="py-4"> 
        <div class="container rounded p-3 shadow" style="background-color:#ECF0F1;color:black; word-wrap: break-word">
            @php
              $count = 0 
            @endphp
            @foreach ($users as $user)
            @if($count % 4 == 0)
            @if($count !== 0)
            </div>
            <br><br>
            @endif
            <div class="row">
            @endif
            <div class="col card" style="width: 18rem;">
                <a href="/user/{{ $user->username }}">
                <div class="mx-auto text-center">
                    <img class="card-img-top" alt="{{ $user->name }}" src="{{ $user->avatar }}" />
                    <div class="card-body">
                        <p class="card-text"><div>{{ $user->name }}</div></p>
                    </div>
                </div> 
                </a>
            </div>
            
            @php
              $count += 1 
            @endphp
            @endforeach
        </div>
      </main>
    </div>
  </div>
</header>

@endsection 