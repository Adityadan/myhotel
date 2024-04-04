
@extends('layouts.main')
@section('content')
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
@endsection
