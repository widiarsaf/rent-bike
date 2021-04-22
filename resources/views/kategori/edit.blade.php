@extends('layouts.admin')
@section('content')
<form method="post" action="{{ route('kategori.update', $kategori->id_kategori) }}" id="myForm">
@csrf   
@method('PUT')
    <div class="form-group">
            <label for="nama_kategori">Nama Kategori</label>
            <input type="text" class="form-control" id="nama_kategori" value="{{$kategori->nama_kategori}}" name="nama_kategori">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
