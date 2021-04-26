@extends('layouts.admin')
@section('content')

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form method="post" action="{{ route('sepeda.store') }}" id="myForm" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="unit_code">Unit Code</label>
        <input type="text" class="form-control" id="unit_code" placeholder="Masukkan code unit" name="unit_code">
    </div>
    <div class="form-group">
        <label for="Kategori">Kategori</label>
        <select name="kategori_id" id="kategori_id" class="form-control">
            @foreach($kategori as $ktg)
            <option value="{{$ktg->id_kategori}}">{{$ktg->nama_kategori}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <textarea type="text" class="form-control" id="deskripsi" placeholder="Masukkan deskripsi"
            name="deskripsi"> </textarea>
    </div>
    <div class="form-group">
        <label for="foto_unit">Foto Unit</label>
        <input type="file" class="form-control" id="foto_unit" name="foto_unit">
    </div>
    <div class="form-group">
        <label for="status">Status</label>
        <select name="status" class="form-control">
            <option value="dipinjam">dipinjam</option>
            <option value="tersedia">tersedia</option>
        </select>

    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
