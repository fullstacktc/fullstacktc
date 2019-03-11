<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

  <head>
  @include('meta')
  @include('analytics')
  </head>

  <body id="page-top">

    @include('nav')

    @yield('content')

    <footer>
      <div class="container">
        <p>&copy; Full Stack TC.</p>
        <ul class="list-inline">
          <li class="list-inline-item">
            <a href="#">Privacy</a>
          </li>
          <li class="list-inline-item">
            <a href="#">Terms</a>
          </li>
          <li class="list-inline-item">
            <a href="#">FAQ</a>
          </li>
        </ul>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="/js/new-age.min.js"></script>

  </body>

</html>
