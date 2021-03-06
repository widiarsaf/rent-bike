@extends('layouts.admin')
@section('content')
<div class="mb-3">
    <a class="btn btn-success" href="{{ route('kategori.create') }}"> Masukkan Kategori Baru</a>
</div>
<table class="table table-bordered" width="auto">
    <tr>
        <th>No.</th>
        <th>Nama Kategori</th>
        <th>Aksi</th>
    </tr>
    <tr>
        @foreach($kategori as $ktg)
    <tr>
        <td>{{$ktg->id_kategori}}</td>
        <td>{{$ktg->nama_kategori}}</td>
        <td>
            <form action="{{ route('kategori.destroy',['kategori'=>$ktg->id_kategori]) }}" method="POST">
                <a class="btn btn-primary" href="{{ route('kategori.edit',$ktg->id_kategori) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
    </tr>
</table>
@endsection