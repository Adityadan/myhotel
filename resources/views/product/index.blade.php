@extends('layouts.main')

@section('content')
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <a class="btn btn-success" href="{{ route('products.create') }}">Tambah</a>
        <a href="#modalCreate" data-toggle="modal" class="btn btn-info">+ New Transaction (with Modals)</a>


        <h2>List Product</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID Product</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Available Room</th>
                    <th>ID Hotel</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rs as $barang)
                <tr id="tr_{{ $barang->id }}">

                        <td>{{ $barang->id }}</td>
                        <td>{{ $barang->name }}</td>
                        <td>{{ $barang->price }}</td>
                        <td>{{ $barang->available_room }}</td>
                        <td>{{ $barang->hotel_id }}</td>
                        <td>
                            {{-- <img src="{{ asset('images/' . $barang->image) }}" alt="Hotel Image"
                                style="max-width: 100px; max-height: 100px;"> --}}
                                <td>
                                    @if($rs->filenames)
                                       @foreach ($rs->filenames as $filename)
                                          <img src="{{asset('product/'.$rs->id.'/'.$filename)}}"/><br>
                                       @endforeach
                                    @endif
                                    <a href="{{ url('product/uploadPhoto/'.$rs->id) }}">
                                       <button class='btn btn-xs btn-default'>upload</button></a>
                                 </td>

                        </td>
                        <td>
                            <a class="btn btn-warning" href="{{ route('products.edit', $barang->id) }}">Edit</a>
                            <a href="#modalEditA" class="btn btn-warning" data-toggle="modal"
                                onclick="getEditForm({{ $barang->id }})">Edit Transaction A</a>
                            <a href="#" value="DeleteNoReload" class="btn btn-danger"
                                onclick="if(confirm('Are you sure to delete {{ $barang->id }} - {{ $barang->name }} ? ')) deleteDataRemoveTR({{ $barang->id }})">Delete
                                without Reload</a>
                            <form method="POST" action="{{ route('products.destroy', $barang->id) }}">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="delete" class="btn btn-danger"
                                    onclick="return confirm('Are you sure to delete {{ $barang->id }} - {{ $barang->name }} ? ');">

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
{{-- MODAL CREATE --}}
<div class="modal fade" id="modalCreate" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Add New Transaction</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('products.store') }}">
                    @csrf
                    <div class="form-body">
                        <div class="form-group">
                            <label for="Nama">Name</label>
                            <input type="text" class="form-control" placeholder="Input Name Product" name="name"
                                id="exampleInputType" aria-describedby="nameHelp">
                            <span class="help-block">
                                Masukkan Nama Tipe Hotel. </span>
                        </div>
                    </div>
                    <div class="form-body">
                        <div class="form-group">
                            <label for="Nama">Price</label>
                            <input type="text" class="form-control" placeholder="Input Price" name="price"
                                id="exampleInputType" aria-describedby="nameHelp">
                            <span class="help-block">
                                Masukkan Nama Tipe Hotel. </span>
                        </div>
                    </div>
                    <div class="form-body">
                        <div class="form-group">
                            <label for="Nama">Available Room</label>
                            <input type="text" class="form-control" placeholder="input available room"
                                name="available_room" id="exampleInputType" aria-describedby="nameHelp">
                            <span class="help-block">
                                Masukkan Nama Tipe Hotel. </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="user_id">Hotels</label>
                        <select class="form-control" name="hotel_id" required>
                            <option value="" disabled selected>Choose Hotels</option>
                            @foreach ($hotels as $h)
                                <option value="{{ $h->id }}">{{ $h->name }}</option>
                            @endforeach
                        </select>
                        <span class="help-block">Choose Hotels.</span>
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
        function getDetailData(id) {
            $.ajax({
                type: 'POST',
                url: '{{ route('products.showAjax') }}',
                data: '_token= <?php echo csrf_token(); ?> &id=' + id,
                success: function(data) {
                    $("#msg").html(data.msg);
                }
            });
        }
    </script>
    <script>
        function getEditForm(id) {
            $.ajax({
                type: 'POST',
                url: '{{ route('products.getEditForm') }}',
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
                url: '{{ route('products.deleteData') }}',
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
