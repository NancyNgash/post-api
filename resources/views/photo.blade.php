<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Photos</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <!-- Font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>

  <div class="container" style="margin-top: 50px;">

    <h3 class="text-center text-danger"><b>Photos</b> </h3>
    <table class="table">
      <thead>
        <tr>
          <th>Album ID</th>
          <th>ID</th>
          <th>Title</th>
          <th>Url</th>
          <th>ThumbnailUrl</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($photos as $photo)
        <tr>
          <td>{{ $photo['albumId']}}</td>
          <th>{{ $photo['id'] }}</th>
          <td>{{ $photo['title']}}</td>
          <th>{{ $photo['url'] }}</th>
          <td>{{ $photo['thumbnailUrl']}}</td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>




</body>

</html>