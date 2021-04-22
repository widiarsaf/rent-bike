@extends('layouts.admin')
@section('content')
<form method="post" action="{{ route('sepeda.update', $sepeda->id_sepeda) }}" id="myForm" enctype="multipart/form-data">
@csrf   
@method('PUT')
    <div class="form-group">
            <label for="kategori_id">Kategori</label>
            <select name="id_kategori" class="form-control">
                @foreach($kategori as $ktg)
                <option value="{{$ktg->id_kategori}}">{{$ktg->nama_kategori}}</option>
                @endforeach
            </select>
    </div>
    <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <input type="text" class="form-control" id="deskripsi" value="{{$sepeda->deskripsi}}" name="deskripsi">
    </div>
    <div class="form-group">
            <label for="image">Foto Unit</label>
            <input type="file" name="image" class="form-control" id="image" value="{{ $sepeda->foto_unit }}" aria-describedby="image">
            <img src="{{asset('storage/'.$sepeda->foto_unit) }}">
    </div>
    <div class="form-group">
            <label for="status">Status</label>
            <input type="text" class="form-control" id="status" value="{{$sepeda->status}}" name="harga">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
