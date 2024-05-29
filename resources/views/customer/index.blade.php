@extends('layouts.main')
@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <a class="btn btn-success" href="{{ route('customer.create') }}">Tambah</a>
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
                <tr>
                    <td>{{ $d->name }}</td>
                    <td>{{ $d->address }}</td>
                    <td>{{ $d->created_at }}</td>
                    <td>{{ $d->updated_at }}</td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('customer.edit', $d->id) }}">Edit</a>
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
