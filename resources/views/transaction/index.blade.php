@extends('layouts.main')

@section('content')
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <a class="btn btn-success" href="{{ route('transaction.create') }}">Tambah</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer</th>
                    <th>Kasir</th>
                    <th>Tanggal Transaksi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $d)
                    <tr>
                        <td>{{ $d->id }}</td>
                        <td>{{ $d->customer->name }}</td>
                        <td>{{ $d->user->name }}</td>
                        <td>{{ $d->d_date }}</td>
                        <td>
                            <a class="btn btn-default" data-toggle="modal" href="#myModal"
                                onclick="getDetailData({{ $d->id }});">Lihat Rincian Pembelian</a>
                                <a class="btn btn-warning" href="{{ route('transaction.edit', $d->id) }}">Edit</a>
                            <form method="POST" action="{{ route('transaction.destroy', $d->id) }}">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="delete" class="btn btn-danger"
                                    onclick="return confirm('Are you sure to delete {{ $d->id }} - {{ $d->name }} ? ');">

                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-wide">
                <div class="modal-content" id="msg">
                    <!--loading animated gif can put here-->
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
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
