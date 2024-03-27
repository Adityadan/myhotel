
<html lang="en">
<head>
  <title>List Barang</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
{{-- @dd($barangs->toArray()) --}}
<div class="container">
  <h2>List Barang</h2>
   <table class="table">
    <thead>
      <tr>
        <th>ID Barang</th>
        <th>Nama Barang</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($barangs as $r )
          <tr>
            <td>{{$r->id}}</td>
            <td>{{$r->nama}}</td>
          </tr>

        @endforeach


    </tbody>
  </table>
</div>

</body>
</html>
