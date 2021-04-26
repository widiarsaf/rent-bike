@extends('layouts.admin')
@section('content')
<a class="mt-2" href="{{ route('kategori.index') }}" style="color: rgb(160, 157, 157); font-size: 15px"><i
        class="fas fa-chevron-left"></i> Back</a>
<h3 class="mt-3"><b>Masukkan Kategori Sepeda</b></h3>
<form method="post" class="mt-4 mb-4" action="{{ route('kategori.store') }}" id="myForm" style=" width: 500px;">
    @csrf
    <div>
        <div class="form-group">
            <label for="nama_kategori">Nama Kategori</label>
            <input type="text" class="form-control" id="nama_kategori" placeholder="Masukkan nama" name="nama_kategori">
        </div>
    </div>
    <div style="align-items: center">
        <button type="submit" class="btn" style="background-color: #FCDC6A"><b>Submit</b></button>
    </div>
</form>

@endsection