<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practice</title>
</head>
<body>
  <h1>映画一覧</h1>
  <table>
    @foreach ($movies as $movie)
    <tr>
      <td>{{ $movie->id }}</td>
      <td>{{ $movie->title }}</td>
      <td>{{ $movie->image_url }}</td>
      <td><img src="{{ $movie->image_url }}" alt="画像" style="max-width: 100px;"></td>
      <td>{{ $movie->created_at }}</td>
      <td>{{ $movie->updated_at }}</td>
    </tr>
    @endforeach
  </table>
</body>
</html>
