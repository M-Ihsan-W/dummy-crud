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
    <form action="/tambah" method="POST" enctype="multipart/form-data">
      @csrf
      <label for="nama"></label>
      <input type="text" name="nama" id="nama">
      <br>
      <br>
      <label for="email"></label>
      <input type="text" name="email" id="email">
      <br>
      <br>
      <label for="gambar"></label>
      <input type="file" name="gambar" id="gambar">
      <br>
      <br>
      <button type="submit">Input Gambar</button>
    </form>

    
  </div>

</body>
</html>