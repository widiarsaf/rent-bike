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
<form method="post" action="{{ route('sepeda.update', $sepeda->id_sepeda) }}" id="myForm" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="unit_code">Unit Code</label>
        <input type="text" class="form-control" id="unit_code" value="{{$sepeda->unit_code}}"
            placeholder="Masukkan code unit" name="unit_code">
    </div>
    <div class="form-group">
        <label for="kategori_id">Kategori</label>
        <select name="kategori_id" id="kategori_id" class="form-control">
            @foreach($kategori as $ktg)
            <option value="{{$ktg->id_kategori}}" {{$sepeda->kategori_id == $ktg->id_kategori ? 'selected' : ''}}>
                {{$ktg->nama_kategori}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <input type="text" class="form-control" id="deskripsi" value="{{$sepeda->deskripsi}}" name="deskripsi">
    </div>
    <div class="form-group">
        <label for="image">Foto Unit</label>
        <input type="file" name="foto_unit" class="form-control" id="foto_unit" value="{{ $sepeda->foto_unit }}"
            aria-describedby="image">
        <img src="{{asset('storage/'.$sepeda->foto_unit) }}">
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
