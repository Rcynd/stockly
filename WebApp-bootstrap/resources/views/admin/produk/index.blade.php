@extends('admin.layout-admin.main')
@section('content')

@if (session()->has('sukses'))
<div class="alert alert-success col-lg-12 text-center" role="alert">
  {{ session('sukses') }}
</div>
@endif

<div class="container">
    <h1 class="text-center">Halaman list Produk</h1>
</div>
<div class="d-flex justify-content-center">
    <a href="{{ asset('tambah-produk') }}" class="btn btn-danger">Tambah Produk</a>
</div>
<main class="container mt-3 mb-3 d-flex justify-content-center">
    <div class="container-fluid">
        <h3 class="text-center">
            Makanan
        </h3>
        @foreach ($produks as $produk)
        <div class="card m-1 mb-2" style="max-width: 540px;">
            <div class="row g-0 align-items-center">
                <div class="col-md-4">
                    <img src="{{ asset('') }}storage/{{ $produk->image }}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-6 d-flex justify-content-between flex-wrap">
                    <div class="card-body">
                        <h5 class="card-title tulisan m-0 p-0">{{ $produk->name_produk }}</h5>
                        <p class="card-text">harga = Rp.{{ number_format($produk->harga) }} <br> stock = {{ $produk->stock }} <br> status = {{ $produk->stock }}</p>
                        <p class="card-text m-0 p-0"><small class="text-muted m-0 p-0">Last updated {{ $produk->created_at->diffForHumans() }}</small></p>
                    </div>
                </div>
                <div class="tombol col-md-2 float-start">
                    <a href="" class="btn btn-primary mt-2 ms-1 float-end">detail</a>
                    <a href="" class="btn btn-warning mt-2 ms-1 float-end">edit</a>
                    <a href="" class="btn btn-danger mt-2 float-end">hapus</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="container-fluid">
        <h3 class="text-center">
            Minuman
        </h3>
        <div class="card m-1" style="max-width: 540px;">
            <div class="row g-0 align-items-center">
                <div class="col-md-4">
                    <img src="asset/image/indomie.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-6 d-flex justify-content-between flex-wrap">
                    <div class="card-body">
                        <h5 class="card-title tulisan m-0 p-0">Indomie</h5>
                        <p class="card-text">harga = Rp.2,500 <br> stock = 25 <br> status = hold</p>
                        <p class="card-text m-0 p-0"><small class="text-muted m-0 p-0">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="tombol col-md-2 ">
                    <a href="" class="btn btn-primary mt-2 ms-1 float-end">detail</a>
                    <a href="" class="btn btn-warning mt-2 ms-1 float-end">edit</a>
                    <a href="" class="btn btn-danger mt-2 float-end">hapus</a>
                </div>
            </div>
        </div>
    </div>
</main>
    
@endsection