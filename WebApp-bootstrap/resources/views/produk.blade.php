@extends('layout-guest.main')
@section('content')

<h1 class="tulisan p-4 text-center">Produk</h1>
<div class="d-flex justify-content-center mb-3">
    <form class="d-flex col-lg-6">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
</div>
<div class="container d-flex justify-content-around align-items-center flex-wrap mb-5">
    <div class="card" style="width:14rem;">
        <img src="asset/image/indomie.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">indomie</h5>
          <p class="card-text"> harga : <b> Rp.2,500</b> <br> Stock : 200</p>
          <a href="#" class="btn btn-danger">Pesan</a>
        </div>
    </div>
    <div class="card" style="width:14rem;">
        <img src="asset/image/indomie.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">indomie</h5>
          <p class="card-text"> harga : <b> Rp.2,500</b> <br> Stock : 200</p>
          <a href="#" class="btn btn-danger">Pesan</a>
        </div>
    </div>
    <div class="card" style="width:14rem;">
        <img src="asset/image/indomie.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">indomie</h5>
          <p class="card-text"> harga : <b> Rp.2,500</b> <br> Stock : 200</p>
          <a href="#" class="btn btn-danger">Pesan</a>
        </div>
    </div>
    <div class="card" style="width:14rem;">
        <img src="asset/image/indomie.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">indomie</h5>
          <p class="card-text"> harga : <b> Rp.2,500</b> <br> Stock : 200</p>
          <a href="#" class="btn btn-danger">Pesan</a>
        </div>
    </div>
</div>
    
@endsection