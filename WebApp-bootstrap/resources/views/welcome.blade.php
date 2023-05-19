@extends('layout-guest.main')
@section('content')

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item">
        <div class="slide-ln"></div>

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Daftarkan akun</h1>
            <p>Temukan barang yang Anda perlukan dengan mudah di Stockly. <br> Daftarkan akun Anda sekarang dan nikmati kemudahannya!</p>
            <p><a class="btn btn-lg btn-danger" href="{{ asset('registrasi') }}">Daftar Sekarang</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="slide-ln"></div>

        <div class="container">
          <div class="carousel-caption">
            <h1>Lihat produk Tersedia</h1>
            <p>Stockly menyediakan ribuan produk sehari-hari dengan harga terjangkau. Jangan lewatkan kesempatan untuk melihat barang-barang berkualitas yang kami tawarkan!</p>
            <p><a class="btn btn-lg btn-danger" href="{{ asset('produk') }}">Lihat lebih</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item active">
        <div class="slide-ln"></div>

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Pesan produk</h1>
            <p>Jangan sampai kehabisan stok barang yang kamu butuhkan. <br> Pesan sekarang juga di Stockly dan nikmati kemudahan berbelanja online!</p>
            <p><a class="btn btn-lg btn-danger" href="{{ asset('pesan') }}">Pesan</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  @if (isset(auth()->user()->name))
  <h2 class="text-center tulisan mt-3">Selamat Datang {{ auth()->user()->name }}!</h2>
  @endif

  <h2 class="text-center tulisan mt-3">Promo Terbatas!</h2>

  <div class="container d-flex justify-content-center  col-lg-6">
      <div class="card">
        <div class="d-flex justify-content-center align-items-center">
            <img src="asset/image/indomie.jpg" class="me-3" width="30%" alt="...">
            <img src="asset/image/sarimie.jpg" width="30%" alt="...">
        </div>
        <div class="card-body">
          <p class="card-text text-center">Setiap pembelian 5 bungkus Indomie GRATIS 1 bungkus Sarimi</p>
        </div>
      </div>
  </div>


  <h2 class="text-center tulisan mt-3"> Produk Baru</h2>

  <div class="container-fluid mt-3 mb-3 d-flex justify-content-center flex-wrap">
    <div class="card m-1" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="asset/image/indomie.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title tulisan">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    <div class="card m-1" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="..." class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title tulisan">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    <div class="card m-1" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="..." class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    <div class="card m-1" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="..." class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
  </div>
  <p class="text-center">
      <a href="">Lihat Semua produk --></a>
  </p>

@endsection