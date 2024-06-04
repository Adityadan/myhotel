@extends('layouts.main')
@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <a class="btn btn-success" href="{{ route('transaction.create') }}">Tambah</a>
    <a href="#modalCreate" data-toggle="modal" class="btn btn-info">+ New Transaction (with Modals)</a>

    <table class="table table-hover">
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
                <tr id="tr_{{ $d->id }}">
                    <td>{{ $d->id }}</td>
                    <td>{{ $d->customer->name }}</td>
                    <td>{{ $d->user->name }}</td>
                    <td>{{ $d->d_date }}</td>
                    <td>
                        <a class="btn btn-default" data-toggle="modal" href="#myModal"
                            onclick="getDetailData({{ $d->id }});">Lihat Rincian Pembelian</a>
                        <a class="btn btn-warning" href="{{ route('transaction.edit', $d->id) }}">Edit</a>
                        <a href="#modalEditA" class="btn btn-warning" data-toggle="modal"
                            onclick="getEditForm({{ $d->id }})">Edit Transaction A</a>
                        <a href="#" value="DeleteNoReload" class="btn btn-danger"
                            onclick="if(confirm('Are you sure to delete {{ $d->id }} - {{ $d->customer->name }} ? ')) deleteDataRemoveTR({{ $d->id }})">Delete
                            without Reload</a>

                        <form method="POST" action="{{ route('transaction.destroy', $d->id) }}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="delete" class="btn btn-danger"
                                onclick="return confirm('Are you sure to delete {{ $d->id }} - {{ $d->customer->name }} ? ');">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

{{-- MODAL CREATE --}}
<div class="modal fade" id="modalCreate" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Add New Transaction</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('transaction.store') }}">
                    @csrf
                    <div class="form-body">
                        <div class="form-group">
                            <label for="customer_id">Customer</label>
                            <select class="form-control" name="customer_id" id="customer_id" required>
                                <option value="" disabled selected>Pilih Customer</option>
                                @foreach ($customers as $customer)
                                    <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                                @endforeach
                            </select>
                            <span class="help-block">Pilih Customer.</span>
                        </div>
                        <div class="form-group">
                            <label for="user_id">Kasir</label>
                            <select class="form-control" name="user_id" id="user_id" required>
                                <option value="" disabled selected>Pilih Kasir</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                            <span class="help-block">Pilih Kasir.</span>
                        </div>
                        <div class="form-group">
                            <label for="user_id">Produk</label>
                            <select class="form-control" name="product_id" id="product_id" required>
                                <option value="" disabled selected>Pilih Produk</option>
                                @foreach ($product as $p)
                                    <option value="{{ $p->id }}">{{ $p->name }}</option>
                                @endforeach
                            </select>
                            <span class="help-block">Pilih Kasir.</span>
                        </div>
                        <div class="form-body">
                            <div class="form-group">
                                <label for="Nama">Jumlah</label>
                                <input type="text" class="form-control" placeholder="Input Price" name="quantity"
                                    id="exampleInputType" aria-describedby="nameHelp">
                                <span class="help-block">
                                    Masukkan Jumlah Produk. </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="transaction_date">Tanggal Transaksi</label>
                            <input type="date" class="form-control" name="transaction_date" id="transaction_date"
                                required>
                            <span class="help-block">Masukkan Tanggal Transaksi.</span>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- MODAL EDIT --}}
<div class="modal fade" id="modalEditA" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog modal-wide">
        <div class="modal-content">
            <div class="modal-body" id="modalContent">
                {{-- You can put animated loading image here... --}}
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalEditB" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog modal-wide">
        <div class="modal-content">
            <div class="modal-body" id="modalContentB">
                {{-- You can put animated loading image here... --}}
            </div>
        </div>
    </div>
</div>

@section('scripts')
    <script>
        function getEditForm(id) {
            $.ajax({
                type: 'POST',
                url: '{{ route('transaction.getEditForm') }}',
                data: {
                    '_token': '{{ csrf_token() }}',
                    'id': id
                },
                success: function(data) {
                    $('#modalContent').html(data.msg)
                }
            });
        }
    </script>
    <script>
        function deleteDataRemoveTR(type_id) {
            $.ajax({
                type: 'POST',
                url: '{{ route('transaction.deleteData') }}',
                data: {
                    '_token': '<?php echo csrf_token(); ?>',
                    'id': type_id
                },
                success: function(data) {
                    if (data.status == "oke") {
                        $('#tr_' + type_id).remove();
                    }
                }
            });
        }
    </script>
@endsection
