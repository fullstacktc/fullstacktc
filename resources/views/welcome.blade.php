<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

  <head>
  @include('meta')
  </head>

  <body id="page-top">

    @include('nav')

    <header class="masthead">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-lg-7 my-auto">
            <div class="header-content mx-auto">
              <h1 class="mb-5">Tri-Cities only software organization built by developers, for developers.</h1>
            </div>
          </div>
          <div class="col-lg-5 my-auto">
            <div class="device-container">
              <div class="device-mockup iphone6_plus portrait white">
                <div class="device">
                  <div class="screen">
                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                    <img src="img/demo-screen-1.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="button">
                    <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section class="download bg-primary text-center" id="hosts">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <h2 class="section-heading">Your hosts!</h2>
            <div class="row">
              <div class="col">
                <img src="/img/akopov.png"><br>
                <h5><b>Michael Akopov</b><br>Software Developer - Founder/Host</h5>
                <span>Michael loves Software Development, bringing people together to grow and learn, long bike rides by the river, and chocolate chip cookies.</span>
              </div>
              <div class="col">
                <img src="/img/haro.png"><br>
                <h5><b>Kevin Haro</b><br>Software Developer/Co-Host</h5>
                <span>Kevin is a lovable and huggable guy that takes pride in making everyone feel welcome. He also enjoys warm cookies and riding bikes.</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="features" id="aboutus">
      <div class="container">
        <div class="section-heading text-center">
          <h2>The best topics. The best people.</h2>
          <p class="text-muted">We meet the first wednesday of every month at <a href="https://fusespc.com" target="_blank">Fuse</a>.</p>
          <hr>
        </div>
        <div class="row">
          <div class="col-lg-4 my-auto">
            <div class="device-container">
              <div class="device-mockup iphone6_plus portrait white">
                <div class="device">
                  <div class="screen">
                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                    <img src="img/demo-screen-1.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="button">
                    <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8 my-auto">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-screen-smartphone text-primary"></i>
                    <h3>Any Platform</h3>
                    <p class="text-muted">We cover any topic of software development, ranging from Servers to JavaScript.</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-camera text-primary"></i>
                    <h3>Live Stream</h3>
                    <p class="text-muted">All of our meetups are live streamed via the Fuse Facebook page.</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-present text-primary"></i>
                    <h3>Snacks</h3>
                    <p class="text-muted">We provide snacks!</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-lock-open text-primary"></i>
                    <h3>Open to everyone</h3>
                    <p class="text-muted">Anyone is welcome, any age range to any skill range.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="cta" id="giveatalk">
      <div class="cta-content">
        <div class="container">
          <h2>Give a talk.<br>Boost your career.</h2>
          <a href="/talk/submit" class="btn btn-outline btn-xl js-scroll-trigger">Submit a talk</a>
        </div>
      </div>
      <div class="overlay"></div>
    </section>

    <section class="contact bg-primary" id="contact">
      <div class="container">
        <h2>We
          <i class="fa fa-heart"></i>
          new friends!</h2>
        <ul class="list-inline list-social">
          <li class="list-inline-item social-twitter">
            <a href="https://twitter.com/fullstacktc" target="_blank">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="list-inline-item social-facebook">
            <a href="#">
              <i class="fa fa-facebook"></i>
            </a>
          </li>
          <li class="list-inline-item social-google-plus">
            <a href="mailto:makopov@gmail.com">
              <i class="fa fa-envelope"></i>
            </a>
          </li>
        </ul>
      </div>
    </section>

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
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/new-age.min.js"></script>

  </body>

</html>
