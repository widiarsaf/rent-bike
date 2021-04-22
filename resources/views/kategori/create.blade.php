@extends('layouts.admin')
@section('content')
<form method="post" action="{{ route('kategori.store') }}" id="myForm">
@csrf
    <div class="form-group">
            <label for="nama_kategori">Nama Kategori</label>
            <input type="text" class="form-control" id="nama_kategori" placeholder="Masukkan nama" name="nama_kategori">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
