<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>
<body>

<div class="container">
    @foreach($movies as $movie)
    <div class="card">
        <h2>
            {{ $movie['title'] }}
        </h2>
        <h4>
            {{ $movie['original_title'] }}
        </h4>
        <h6>
            {{ $movie['nationality']}}
        </h6>
        <h6>
        {{ $movie['date']}}
        </h6>
        <p>
        {{ $movie['voote']}}
        </p>
    </div>
    @endforeach
</div>

</body>
</html>