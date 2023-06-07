<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ url('blog') }}">
        @csrf
    <label for="judul">Judul</label>
    <input type="text" name="judul" id="judul"><br>
    <label for="konten">konten</label>
    <input type="text" name="konten" id="konten">
    <button>kirim</button>
    </form>
</body>
</html>