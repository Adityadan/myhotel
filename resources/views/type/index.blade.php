@extends('layouts.main')
@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <a class="btn btn-success" href="{{ route('type.create') }}">Tambah</a>
    <a href="#modalCreate" data-toggle="modal" class="btn btn-info">+ New Type(with Modals)</a>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Dibuat Pada</th>
                <th>Diubah Terakhir</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($types as $type)
                <tr>
                    {{-- <td>{{ $type->name }}</td> --}}
                <tr id="tr_{{ $type->id }}">
                    <td id="td_name_{{ $type->id }}">{{ $type->name }}</td>
                    <td>{{ $type->created_at }}</td>
                    <td>{{ $type->updated_at }}</td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('type.edit', $type->id) }}">Edit</a>
                        <a href="#modalEditA" class="btn btn-warning" data-toggle="modal"
                            onclick="getEditForm({{ $type->id }})">Edit Type A</a>
                        <a href="#modalEditB" class="btn btn-info" data-toggle="modal"
                            onclick="getEditFormB({{ $type->id }})">Edit Type B</a>
                        <a href="#" value="DeleteNoReload" class="btn btn-danger"
                            onclick="if(confirm('Are you sure to delete {{ $type->id }} - {{ $type->name }} ? ')) deleteDataRemoveTR({{ $type->id }})">Delete
                            without Reload</a>


                        <form method="POST" action="{{ route('type.destroy', $type->id) }}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="delete" class="btn btn-danger"
                                onclick="return confirm('Are you sure to delete {{ $type->id }} - {{ $type->name }} ? ');">

                        </form>
                    </td>
                    </td>
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
                <h4 class="modal-title">Add New Type</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('type.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputType">Name of Type</label>
                        <input type="text" class="form-control" id="exampleInputType" name="type_name"
                            aria-describedby="nameHelp" placeholder="Enter Name of Type...">
                        <small id="nameHelp" class="form-text text-muted">Please write down the name of
                            type here.</small>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </form>
                {{-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> --}}
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
        function getEditForm(type_id) {
            $.ajax({
                type: 'POST',
                url: '{{ route('type.getEditForm') }}',
                data: {
                    '_token': '{{ csrf_token() }}',
                    'id': type_id
                },
                success: function(data) {
                    $('#modalContent').html(data.msg)
                }
            });
        }
    </script>
    <script>
        function getEditFormB(type_id) {
            $.ajax({
                type: 'POST',
                url: '{{ route('type.getEditFormB') }}',
                data: {
                    '_token': '<?php echo csrf_token(); ?>',
                    'id': type_id
                },
                success: function(data) {
                    $('#modalContentB').html(data.msg)
                }
            });
        }
    </script>
    <script>
        function saveDataUpdateTD(type_id) {
            var eName = $('#eName').val();
            console.log(eName); //debug->print to browser console
            $.ajax({
                type: 'POST',
                url: '{{ route('type.saveDataTD') }}',
                data: {
                    '_token': '<?php echo csrf_token(); ?>',
                    'id': type_id,
                    'name': eName
                },
                success: function(data) {
                    if (data.status == "oke") {
                        $('#td_name_' + type_id).html(eName);
                        $('#modalEditB').modal('hide');
                    }
                }
            })
        }
    </script>
    <script>
        function deleteDataRemoveTR(type_id) {
            $.ajax({
                type: 'POST',
                url: '{{ route('type.deleteData') }}',
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
