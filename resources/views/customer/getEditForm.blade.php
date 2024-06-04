<form method="POST" action="{{ route('customer.update', $data->id) }}">
    @csrf
    @method('PUT')
    <div class="form-body">
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" placeholder="Masukkan Nama" value="{{ $data->name }}" name="name"
                id="name" aria-describedby="nameHelp" required>
            <span class="help-block">Masukkan Nama Customer.</span>
        </div>
        <div class="form-group">
            <label for="address">Alamat</label>
            <input type="text" class="form-control" placeholder="Masukkan Alamat" name="address" id="address"
                value="{{ $data->address }}" aria-describedby="addressHelp" required>
            <span class="help-block">Masukkan Alamat Customer.</span>
        </div>
    </div>
    <div class="form-actions">
        <input type="submit" class="btn btn-success" value="Simpan" />
        <button type="button" class="btn btn-default">Batal</button>
    </div>
</form>
