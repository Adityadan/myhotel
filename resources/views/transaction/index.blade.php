@extends('layouts.main')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer</th>
                    <th>Kasir</th>
                    <th>Tanggal Transaction</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $d)
                    <tr>
                        <td>{{ $d->id }}</td>
                        <td>{{ $d->customer->name }}</td>
                        <td>{{ $d->user->name }}</td>
                        <td>{{ $d->created_at }}</td>
                        <td><a class="btn btn-default" data-toggle="modal" href="#myModal"
                                onclick="getDetailData({{ $d->id }});">Lihat Rincian Pembelian</a></td>
                    </tr>
                @endforeach
        </table>

        <div class="modal fade" id="myModal" tabindex="-1" role="basic" aria-hidden="true">
            <div class="modal-dialog modal-wide">
                <div class="modal-content" id="msg">
                    <!--loading animated gif can put here-->
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        function getDetailData(id) {
            $.ajax({
                type: 'POST',
                url: '{{ route('transaction.showAjax') }}',
                data: '_token= <?php echo csrf_token(); ?> &id=' + id,
                success: function(data) {
                    $("#msg").html(data.msg);
                }
            });
        }
    </script>
@endsection
