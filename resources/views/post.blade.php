<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="/app.css">
  <title>My First Post</title>
</head>
<body>
  
  <article>

    <h1>{{ $post->title }}</h1>
    {!! $post->body !!}

  </article>

  <a href="/" style="background-color: rgb(205, 200, 200); padding: 15px 20px; border-radius: 10px; display: inline-block; font-size: 18px">Go Home</a>

</body>
</html>