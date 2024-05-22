@extends('layouts.main')

@section('content')
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <a class="btn btn-success" href="{{ route('products.create') }}">Tambah</a>

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
                </tr>
            </thead>
            <tbody>
                @foreach ($rs as $barang)
                    <tr>
                        <td>{{ $barang->id }}</td>
                        <td>{{ $barang->name }}</td>
                        <td>{{ $barang->price }}</td>
                        <td>{{ $barang->available_room }}</td>
                        <td>{{ $barang->hotel_id }}</td>
                        <td>
                            <img src="{{ asset('images/' . $barang->image) }}" alt="Hotel Image"
                                style="max-width: 100px; max-height: 100px;">
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
                url: '{{ route('products.showAjax') }}',
                data: '_token= <?php echo csrf_token(); ?> &id=' + id,
                success: function(data) {
                    $("#msg").html(data.msg);
                }
            });
        }
    </script>
@endsection
