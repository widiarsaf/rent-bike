@extends('layouts.admin')
@section('content')
<div class="">
    <a class="btn btn-success" href="{{ route('sepeda.create') }}"> Masukkan Sepeda Baru</a>
</div>

<div class="mt-4 mb-3">
    <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" style="width: 30rem; height: 3rem;" type="search"
                placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar" style="background-color: #FCDC6A !important; width: 60px;">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered" width="auto">
    <tr>
        <th>Unit Code</th>
        <th>Kategori</th>
        <th>Deskripsi</th>
        <th>Foto Unit</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>
    <tr>
        @foreach($sepeda as $spd)
    <tr>
        <td>{{$spd->unit_code}}</td>
        <td>{{$spd->kategori->nama_kategori}}</td>
        <td>{{$spd->deskripsi}}</td>
        <td><img width=" 80px" src="{{asset('storage/'.$spd->foto_unit) }}"></td>
        <td>{{$spd->status}}</td>
        <td>
            <form action="{{ route('sepeda.destroy',['sepeda'=>$spd->id_sepeda]) }}" method="POST">
                <a class="btn btn-primary" href="{{ route('sepeda.edit',$spd->id_sepeda) }}">Edit</a>
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
