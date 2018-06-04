<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Full Stack Tri-Cities</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="device-mockups/device-mockups.min.css">

    <!-- Custom styles for this template -->
    <link href="css/new-age.min.css" rel="stylesheet">
  </head>

  <body id="page-top">
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
</body>
</html>