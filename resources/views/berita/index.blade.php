<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <a href="{{ route('berita.create') }}">Tambah Berita</a>
    |
    <a href="{{ route('komentar.create') }}">Tambah Komentar</a>
    <h2>List Berita:</h2>
    <ol>
        @foreach($beritas as $berita)
        <b>
            <li>Berita : {{ $berita->nama }}</li>
        </b>
        <ul>
            @foreach($berita->komentar as $b)
            <li><i>Komentar</i>: {{ $b->komenan }}</li>
            @endforeach
        </ul>
        @endforeach
    </ol>
</body>
</html>
