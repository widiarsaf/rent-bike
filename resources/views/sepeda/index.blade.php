@extends('layouts.admin')
@section('content')
<div class="">
    <a class="btn btn-success" href="{{ route('sepeda.create') }}"> Masukkan Sepeda Baru</a>
</div>
<table>
<tr>
    <th>Id Sepeda</th>
    <th>Kategori</th>
    <th>Deskripsi</th>
    <th>Foto Unit</th>
    <th>Status</th>
</tr>
<tr>
    @foreach($sepeda as $spd)
    <tr>
        <td>{{$spd->id_sepeda}}</td>
        <td>{{$spd->kategori->nama_kategori}}</td>
        <td>{{$spd->deskripsi}}</td>
        <td><img src="{{asset('storage/'.$spd->foto_unit) }}"></td>
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
