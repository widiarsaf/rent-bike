@extends('layouts.admin')
@section('content')
<a class="mt-2" href="{{ route('kategori.index') }}" style="color: rgb(160, 157, 157); font-size: 15px"><i
        class="fas fa-chevron-left"></i> Back</a>
<h3 class="mt-3"><b>Masukkan Kategori Sepeda</b></h3>
<form method="post" class="mt-4 mb-4" width="500px" action="{{ route('kategori.update', $kategori->id_kategori) }}"
    id="myForm">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="nama_kategori">Nama Kategori</label>
        <input type="text" class="form-control" id="nama_kategori" value="{{$kategori->nama_kategori}}"
            name="nama_kategori">
    </div>
    <button type="submit" class="btn" style="background-color: #FCDC6A"><b>Submit</b></button>
</form>
@endsection