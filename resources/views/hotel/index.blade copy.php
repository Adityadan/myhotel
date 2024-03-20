
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>HOTEL</h2>
   <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Address</th>
        <th>City</th>
        <th>Foto</th>
        <td>Room</td>
      </tr>
    </thead>
    <tbody>

        @foreach ($rs as $r )
          <tr>
            <td>{{$r->name}}</td>
            <td>{{$r->address}}</td>
            <td>{{$r->city}}</td>
            <td><img height="50px" src="{{ asset('images/'.$r->image) }}" /></td>
            <td>
                @foreach($r->products as $p)
                - {{$p->name}} ({{$p->price}})<br>
                @endforeach
            </td>
        </tr>

        @endforeach


    </tbody>
  </table>
  <br>

  <div class="row">
    @foreach ($rs as $r )
    <div class="col-sm-3"
    style="border:1px solid #999;padding:10px;margin:10px;text-align:center;
            border-radius:10px">
        <img height="100px" src="{{ asset('images/'.$r->image) }}" />
        <br>{{$r->name}}
        <br>{{$r->address}}, {{$r->city}}
    </div>
    @endforeach
  </div>

</div>

</body>
</html>
