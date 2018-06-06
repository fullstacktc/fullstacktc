<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="/#page-top">Full Stack Tri-Cities</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            @if (Route::has('login'))
                @auth
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{ url('/home') }}">Admin Home</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{ route('register') }}">Register</a>
                </li>
                @endauth
            @endif
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/#newsletter">Newsletter</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/#aboutus">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/#giveatalk">Give a Talk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>