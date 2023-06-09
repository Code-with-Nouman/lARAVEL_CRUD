<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <a href="{{ url('/') }}" class="btn btn-primary my-3">Add Data</a>

        <table class=" mb-3 table table-bordered shadow text-center table-striped " >
            <thead>
              <tr>
                <th scope="col">S.no</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Delete</th>
                <th scope="col">Update</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post )
              <tr>

                <td>{{ $post->id }}</td>
                <td>{{ $post->name }}</td>
                <td>{{ $post->email }}</td>
                <td>{{ $post->password }}</td>
                <td><a href="delete/{{ $post->id }}" class="btn btn-danger">Delete</a></td>
                <td><a href="edit/{{ $post->id }}" class="btn btn-primary">Edit</a></td>
              </tr>
              @endforeach

            </tbody>
          </table>


    </div>


</body>
</html>
