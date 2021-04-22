@extends('layouts.admin')
@section('content')
<form method="post" action="{{ route('paket.update', $paket->id_paket) }}" id="myForm">
@csrf   
@method('PUT')
    <div class="form-group">
            <label for="nama_paket">Nama Paket</label>
            <input type="text" class="form-control" id="nama_paket" value="{{$paket->nama_paket}}" name="nama_paket">
    </div>
    <div class="form-group">
            <label for="jam">Jam</label>
            <input type="text" class="form-control" id="jam" value="{{$paket->jam}}" name="jam">
    </div>
    <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" id="harga" value="{{$paket->harga}}" name="harga">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
