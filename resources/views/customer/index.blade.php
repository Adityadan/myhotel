@extends('layouts.main')
@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <a class="btn btn-success" href="{{ route('customer.create') }}">Tambah</a>
    <a href="#modalCreate" data-toggle="modal" class="btn btn-info">+ New Transaction (with Modals)</a>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Dibuat Pada</th>
                <th>Diubah Terakhir</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $d)
                <tr id="tr_{{ $d->id }}">
                    <td>{{ $d->name }}</td>
                    <td>{{ $d->address }}</td>
                    <td>{{ $d->created_at }}</td>
                    <td>{{ $d->updated_at }}</td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('customer.edit', $d->id) }}">Edit</a>
                        <a href="#modalEditA" class="btn btn-warning" data-toggle="modal"
                            onclick="getEditForm({{ $d->id }})">Edit Type A</a>
                        <a href="#" value="DeleteNoReload" class="btn btn-danger"
                            onclick="if(confirm('Are you sure to delete {{ $d->id }} - {{ $d->name }} ? ')) deleteDataRemoveTR({{ $d->id }})">Delete
                            without Reload</a>
                        <form method="POST" action="{{ route('customer.destroy', $d->id) }}">
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
                <form method="POST" action="{{ route('customer.store') }}">
                    @csrf
                    <div class="form-body">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" placeholder="Masukkan Nama" name="name"
                                id="name" aria-describedby="nameHelp" required>
                            <span class="help-block">Masukkan Nama Customer.</span>
                        </div>
                        <div class="form-group">
                            <label for="address">Alamat</label>
                            <input type="text" class="form-control" placeholder="Masukkan Alamat" name="address"
                                id="address" aria-describedby="addressHelp" required>
                            <span class="help-block">Masukkan Alamat Customer.</span>
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
                url: '{{ route('customer.getEditForm') }}',
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
                url: '{{ route('customer.deleteData') }}',
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
