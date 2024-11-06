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
      <td>{{ $movie->published_year }}</td>
      <td>
        @if ($movie->is_showing)
          上映中
        @else
          上映予定
        @endif
      </td>
      <td>{{ $movie->description }}</td>
      <td>{{ $movie->created_at }}</td>
      <td>{{ $movie->updated_at }}</td>
    </tr>
    @endforeach
  </table>
</body>
</html>
