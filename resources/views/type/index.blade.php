@extends('layouts.main')
@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <a class="btn btn-success" href="{{ route('type.create') }}">Tambah</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Dibuat Pada</th>
                <th>Diubah Terakhir</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($types as $type)
                <tr>
                    <td>{{ $type->name }}</td>
                    <td>{{ $type->created_at }}</td>
                    <td>{{ $type->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
