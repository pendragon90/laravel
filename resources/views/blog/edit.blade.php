<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>edit</h2>
    <form method="POST" action="{{ url("blog/$datas->id") }}">
        @csrf
        @method("PATCH")
    <label for="judul">Judul</label>
    <input type="text" name="judul" id="judul" value="{{ $datas->judul }}"><br>
    <label for="konten">konten</label>
    <input type="text" name="konten" id="konten" value="{{ $datas->konten }}">
    <button>kirim</button>
    </form>

    <h2>halaman hapus</h2>
            <form method="POST" action="{{ url("blog/$datas->id") }}">
                @csrf
                @method("DELETE")
                <button>hapus</button>
            </form>
</body>
</html>