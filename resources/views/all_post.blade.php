<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <title>All Post!</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>All Post</h1>
          <table class="table table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Post Title</th>
                <th>Post Body</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($posts as $key=>$post)
                <tr>
                  <td>{{ $key+1 }}</td>
                  <td>{{ $post->title }}</td>
                  <td>{{ $post->body }}</td>
                  <td>
                    <a href="/delete-post/{{ $post->id}}">Delete</a>
                    <a href="/edit-post/{{ $post->id}}">Edit</a>
                  </td> 
                </tr>

              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  </body>
</html>