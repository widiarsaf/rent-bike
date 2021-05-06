@extends('layouts.customer')
@section('content')

<body>
    <div class="container">
        <div class="col-lg-8 border p-3 main-section bg-white">
            <div class="row hedding m-0 pl-3 pt-0 pb-3">
                Product Detail Design Using Bootstrap 4.0
            </div>
            <div class="row m-0">
                <div class="col-lg-4 left-side-product-box pb-3">
                    <img src="{{asset('storage/'.$sepeda->foto_unit) }}" class="border p-3" width="200px">
                </div>
                <div class="col-lg-8">
                    <div class="right-side-pro-detail border p-3 m-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <span></span>
                                <p class="m-0 p-0">{{$sepeda->unit_code}}</p>
                            </div>
                            <div class="col-lg-12">
                                <p class="m-0 p-0 price-pro">{{$sepeda->kategori->nama_kategori}}</p>
                            </div>
                            <div class="col-lg-12 pt-2">
                                <h5>Deskripsi</h5>
                                <span>{{$sepeda->deskripsi}}</span>
                                <hr class="m-0 pt-2 mt-2">
                            </div>
                            <div class="col-lg-12">
                                <p class="tag-section"><strong>Status : {{$sepeda->status}}</strong>
                                </p>
                            </div>
                            @guest
                            @if(Route::has('login'))
                            <form>
                                <div class="col-lg-12 mt-3">
                                    <input type="hidden" value="{{$sepeda->id_sepeda}}" name="sepeda_id">
                                    {{-- <input type="hidden" value="{{ Auth::user()->id_pengguna }}"
                                    name="pengguna_id"> --}}
                                    <label for="Kategori">Paket</label>
                                    <select name="paket_id" id="paket_id" class="form-control">
                                        @foreach($paket as $pkt)
                                        <option value="{{$pkt->id_paket}}">{{$pkt->nama_paket}}</option>
                                        @endforeach
                                    </select>
                                    <a href="{{ route('login') }}" class="btn btn-danger w-100 mt-4">Add To Cart</a>
                                </div>
                            </form>
                            @endif
                            @else
                            <form action='{{route('cart.store')}}' method="POST">
                                @csrf
                                <div class="col-lg-12 mt-3">
                                    <input type="hidden" value="{{$sepeda->id_sepeda}}" name="sepeda_id">
                                    <input type="hidden" value="{{ Auth::user()->id_pengguna }}" name="pengguna_id">
                                    <label for="Kategori">Paket</label>
                                    <select name="paket_id" id="paket_id" class="form-control">
                                        @foreach($paket as $pkt)
                                        <option value="{{$pkt->id_paket}}">{{$pkt->nama_paket}}</option>
                                        @endforeach
                                    </select>
                                    <button class="btn btn-danger w-100 mt-4">Add To Cart</button>
                                </div>
                            </form>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>