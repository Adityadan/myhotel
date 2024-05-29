@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class="portlet">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-reorder"></i> Edit Transaksi
                    </div>
                    <div class="tools">
                        <a href="" class="collapse"></a>
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="" class="reload"></a>
                        <a href="" class="remove"></a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <form method="POST" action="{{ route('transaction.update',$data->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-body">
                            <div class="form-group">
                                <label for="customer_id">Customer</label>
                                <select class="form-control" name="customer_id" id="customer_id" required>
                                    <option value="" disabled selected>Pilih Customer</option>
                                    @foreach ($customers as $customer)
                                        <option value="{{ $customer->id }}" {{$customer->id == $data->customer_id ? 'selected' : ''}}>{{ $customer->name }}</option>
                                    @endforeach
                                </select>
                                <span class="help-block">Pilih Customer.</span>
                            </div>
                            <div class="form-group">
                                <label for="user_id">Kasir</label>
                                <select class="form-control" name="user_id" id="user_id" required>
                                    <option value="" disabled selected>Pilih Kasir</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}" {{ $user->id == $data->user_id ? 'selected' : ''}}>{{ $user->name }}</option>
                                    @endforeach
                                </select>
                                <span class="help-block">Pilih Kasir.</span>
                            </div>
                            <div class="form-group">
                                <label for="user_id">Produk</label>
                                <select class="form-control" name="product_id" id="product_id" required>
                                    <option value="" disabled selected>Pilih Produk</option>
                                    @foreach ($product as $p)
                                        <option value="{{ $p->id }}">{{ $p->name }}</option>
                                    @endforeach
                                </select>
                                <span class="help-block">Pilih Produk.</span>
                            </div>
                            <div class="form-body">
                                <div class="form-group">
                                    <label for="Nama">Jumlah</label>
                                    <input type="text" class="form-control" placeholder="Input Price" name="quantity"
                                        id="exampleInputType" aria-describedby="nameHelp" value="{{$data->price}}">
                                    <span class="help-block">
                                        Masukkan Jumlah Produk. </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="transaction_date">Tanggal Transaksi</label>
                                <input type="date" class="form-control" name="transaction_date" id="transaction_date"
                                    required>
                                <span class="help-block">Masukkan Tanggal Transaksi.</span>
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
