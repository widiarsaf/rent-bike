@extends('layouts.admin')
@section('content')
<div class="">
    <a class="btn btn-success" href="{{ route('paket.create') }}"> Masukkan Paket Baru</a>
</div>
<table>
<tr>
    <th>Id Paket</th>
    <th>Nama Paket</th>
    <th>Jam</th>
    <th>Harga</th>
</tr>
<tr>
    @foreach($paket as $pkt)
    <tr>
        <td>{{$pkt->id_paket}}</td>
        <td>{{$pkt->nama_paket}}</td>
        <td>{{$pkt->jam}}</td>
        <td>{{$pkt->harga}}</td>
        <td>
            <form action="{{ route('paket.destroy',['paket'=>$pkt->id_paket]) }}" method="POST">
                 <a class="btn btn-primary" href="{{ route('paket.edit',$pkt->id_paket) }}">Edit</a>
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
