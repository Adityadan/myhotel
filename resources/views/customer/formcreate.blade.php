@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class="portlet">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-reorder"></i> Tambah Customer
                    </div>
                    <div class="tools">
                        <a href="" class="collapse"></a>
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="" class="reload"></a>
                        <a href="" class="remove"></a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <form method="POST" action="{{ route('customer.store') }}">
                        @csrf
                        <div class="form-body">
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" placeholder="Masukkan Nama" name="name" id="name" aria-describedby="nameHelp" required>
                                <span class="help-block">Masukkan Nama Customer.</span>
                            </div>
                            <div class="form-group">
                                <label for="address">Alamat</label>
                                <input type="text" class="form-control" placeholder="Masukkan Alamat" name="address" id="address" aria-describedby="addressHelp" required>
                                <span class="help-block">Masukkan Alamat Customer.</span>
                            </div>
                        </div>
                        <div class="form-actions">
                            <input type="submit" class="btn btn-success" value="Simpan" />
                            <button type="button" class="btn btn-default">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END SAMPLE FORM PORTLET-->
        </div>
    </div>
@endsection
