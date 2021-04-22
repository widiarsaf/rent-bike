@extends('layouts.admin')
@section('content')
<form method="post" action="{{ route('sepeda.store') }}" id="myForm" enctype="multipart/form-data">
@csrf
    <div class="form-group">
            <label for="kategori">Kategori</label>
            <select name="kategori" class="form-control">
                @foreach($kategori as $ktg)
                <option value="{{$ktg->id_kategori}}">{{$ktg->nama_kategori}}</option>
                @endforeach
            </select>
    </div>
    <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <input type="text" class="form-control" id="deskripsi" placeholder="Masukkan deskripsi" name="deskripsi">
    </div>
    <div class="form-group">
            <label for="image">Foto Unit</label>
            <input type="file" class="form-control" id="image" name="image">
    </div>
    <div class="form-group">
            <label for="status">Status</label>
            <input type="text" class="form-control" id="status" placeholder="Masukkan status" name="status">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
