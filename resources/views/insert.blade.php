<!doctype html>
<html lang="en">
  <head>
    <title>Form</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <form method="post" action="/store">
        @csrf
        <h1 class="text-center">Insert Data</h1>
        <div class="form-group mb-3">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="EnterName">
        </div>
        <div class="form-group mb-3">
            <label for="exampleInputEmail1">Email</label>
            <input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
          </div>
        <div class="form-group mb-3">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
        </div>
        <input type="submit" name="insert" value="Insert" class="btn btn-primary">
      </form>
    </div>
  </body>
</html>
