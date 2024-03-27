
<html lang="en">
<head>
  <title>Jumlah Barang Per Kategori</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Jumlah Barang Per Kategori</h2>
   <table class="table">
    <thead>
      <tr>
          <th>ID Kategori</th>
        <th>Nama Kategori</th>
        <th>Jumlah Barang</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($barangPerKategori as $r )
          <tr>
            <td>{{$r->id}}</td>
            <td>{{$r->nama_kategori}}</td>
            <td>{{$r->jumlah_barang}}</td>
          </tr>

        @endforeach


    </tbody>
  </table>
</div>

</body>
</html>
