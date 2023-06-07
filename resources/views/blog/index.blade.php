<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .blog {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="{{ url('blog/create') }}">buat</a>
        @foreach ($datas as $data)
           <div class="blog">
            <h2>{{ $data->judul }}</h2>
            <p>{{ $data->konten }}</p>
            <a href="{{ url("blog/$data->id") }}">selengkapnya</a>
            <a href="{{ url("blog/$data->id/edit") }}">edit</a>
            </div> 
        @endforeach
    </div>
</body>
</html>