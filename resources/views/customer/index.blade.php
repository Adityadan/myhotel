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
                <th>Dibuat Pada</th>
                <th>Diubah Terakhir</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $d)
                <tr>
                    <td>{{ $d->name }}</td>
                    <td>{{ $d->created_at }}</td>
                    <td>{{ $d->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
