@extends('layouts.admin')
@section('content')
<form method="post" action="{{ route('paket.store') }}" id="myForm">
@csrf
    <div class="form-group">
            <label for="nama_paket">Nama Paket</label>
            <input type="text" class="form-control" id="nama_paket" placeholder="Masukkan nama" name="nama_paket">
    </div>
    <div class="form-group">
            <label for="jam">Jam</label>
            <input type="text" class="form-control" id="jam" placeholder="Masukkan jam" name="jam">
    </div>
    <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" id="harga" placeholder="Masukkan harga" name="harga">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
