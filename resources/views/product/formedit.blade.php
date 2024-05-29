@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-6 ">
            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class="portlet">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-reorder"></i> Tambah Product
                    </div>
                    <div class="tools">
                        <a href="" class="collapse"></a>
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="" class="reload"></a>
                        <a href="" class="remove"></a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <form method="POST" action="{{ route('products.update',$data->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-body">
                            <div class="form-group">
                                <label for="Nama">Name</label>
                                <input type="text" class="form-control" placeholder="Input Name Product" name="name"
                                    id="exampleInputType" aria-describedby="nameHelp" value="{{ $data->name }}">
                                <span class="help-block">
                                    Masukkan Nama Tipe Hotel. </span>
                            </div>
                        </div>
                        <div class="form-body">
                            <div class="form-group">
                                <label for="Nama">Price</label>
                                <input type="text" class="form-control" placeholder="Input Price" name="price"
                                    id="exampleInputType" aria-describedby="nameHelp" value="{{ $data->price }}">
                                <span class="help-block">
                                    Masukkan Nama Tipe Hotel. </span>
                            </div>
                        </div>
                        <div class="form-body">
                            <div class="form-group">
                                <label for="Nama">Available Room</label>
                                <input type="text" class="form-control" placeholder="input available room"
                                    name="available_room" id="exampleInputType" aria-describedby="nameHelp"
                                    value="{{ $data->available_room }}">
                                <span class="help-block">
                                    Masukkan Nama Tipe Hotel. </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="user_id">Hotels</label>
                            <select class="form-control" name="hotel_id" required>
                                <option value="" disabled selected>Choose Hotels</option>
                                @foreach ($hotels as $hotel)
                                    <option value="{{ $hotel->id }}"
                                        {{ $hotel->id == $data->hotel_id ? 'selected' : '' }}>{{ $hotel->name }}</option>
                                @endforeach
                            </select>
                            <span class="help-block">Choose Hotels.</span>
                        </div>
                        <div class="form-actions">
                            <input type="submit" class="btn btn-success" value="Simpan" />
                            <button type="button" class="btn btn-default">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        @endsection
