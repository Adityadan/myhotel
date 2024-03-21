<html lang="en">

<head>
    <title>Available Room</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Average Price of Products by Hotel Type</h1>
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Hotel Name</th>
                                    <th>Hotel Type</th>
                                    <th>Average Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rs as $r)
                                    <tr>
                                        <td>{{ $r->name }}</td>
                                        <td>{{ $r->type }}</td>
                                        <td>Rp.{{ number_format($r->avg_price, 2) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
