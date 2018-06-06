<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

  <head>
  @include('meta')
  </head>

  <body id="page-top" style="background-color:grey;">
    @include('nav')
    <section>
        <div class="container">
            <div class="pb-2 mt-4 mb-2 border-bottom">
                <h1 class="mb-1">Submit to give a talk.</h1>
            </div>
            <form>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="name" class="form-control" id="name" placeholder="Jane Doe">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label for="title">Title of Talk</label>
                <input type="name" class="form-control" id="title" placeholder="Title of your talk">
            </div>
            <div class="form-group">
                <label for="abstract">A quick summary of your talk</label>
                <textarea class="form-control" id="abstract" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mb-2">Submit Talk</button>
            </form>
        </div>
    </section>
</body>
</html>