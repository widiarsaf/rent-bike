@extends('layouts.customer')
@section('content')
@if ($message = Session::get('success'))<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table>
    <tr>
        <th>User</th>
        <th>Sepeda</th>
        <th>Paket</th>
    </tr>
    @foreach ($cart as $crt)
    <tr>
        <td>{{$crt->pengguna_id}}</td>
        <td>{{$crt->sepeda_id}}</td>
        <td>{{$crt->paket_id}}</td>
    </tr>
    @endforeach
</table>
@endsection