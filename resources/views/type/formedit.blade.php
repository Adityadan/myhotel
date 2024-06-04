@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-6 ">
            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class="portlet">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-reorder"></i> Edit Tipe
                    </div>
                    <div class="tools">
                        <a href="" class="collapse"></a>
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="" class="reload"></a>
                        <a href="" class="remove"></a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <form method="POST" action="{{ route('type.update', $data->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-body">
                            <div class="form-group">
                                <label for="Nama">Nama</label>
                                <input type="text" class="form-control" value="{{ $data->name }}"
                                    placeholder="Masukkan Nama Tipe" name="type_name" id="exampleInputType"
                                    aria-describedby="nameHelp">
                                <span class="help-block">
                                    Masukkan Nama Tipe Hotel. </span>
                            </div>
                        </div>
                        <div class="form-actions">
                            <input type="submit" class="btn btn-success" value="Simpan" />
                            <button type="button" class="btn btn-default">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


