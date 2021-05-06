@extends('layouts.customer')
@section('content')
<div class="container">
    <div class=" row">
        @foreach($sepeda as $spd)
        <div class="col-md-3 mt-2">
            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions"> <img src="{{asset('storage/'.$spd->foto_unit) }}"
                            class="card-img img-fluid" width="40px"> </div>
                </div>
                <div class="card-body bg-light text-center">
                    <div class="mb-2">
                        <h6 class="font-weight-semibold mb-2"> <a href="#" class="text-default mb-2"
                                data-abc="true">{{$spd->unit_code}}</a> </h6> <a href="#" class="text-muted"
                            data-abc="true">{{$spd->kategori->nama_kategori}}</a>
                        <p>
                            Status : {{$spd->status}}
                        </p>
                    </div>
                    <button type="button" class="btn bg-cart"><i class="fa fa-cart-plus mr-2"></i><a
                            href="{{ route('sepeda.detail',$spd->id_sepeda) }}">Add to cart</a></button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
