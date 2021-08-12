<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Latihan Crud</title>
</head>
<body>
  <style>
    *, *::before, *::after {
      box-sizing: border-box;
      padding: 0;
      margin: 0;
    }

    .container {
      padding: 100px;
    }
  </style>
  
  <div class="container">
  <h1>Tambah Blog</h1>
  <br>
  @foreach ($data as $item)
  <p>{{ $item->nama }}</p>
  <p>{{ $item->email }}</p>
  <img src="{{ asset('img/'. $item->gambar) }}" alt="" width="200">
  <a href="edit/{{ $item->id }}">Edit</a>
  <a href="hapus/{{ $item->id }}">Hapus</a>
  <br>
  @endforeach
  </div>

</body>
</html>