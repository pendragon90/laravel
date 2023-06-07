<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="blog">
            <h2>{{ $data->judul }}</h2>
            <p>{{ $data->konten }}</p>
            <a href="{{ url("blog") }}">kembali</a>
            </div> 
    </div>
</body>
</html>