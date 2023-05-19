@extends('layout-guest.main')
@section('content')
    <h1 class="text-center p-4 tulisan">Stockly</h1>
    <p class="text-center">Stockly merupakan sebuah platform yang memungkinkan toko SRC cucunnurasiah untuk menjual produk atau sembako secara online. <br> Melalui Stockly, pelanggan dapat membeli berbagai jenis barang kebutuhan sehari-hari dengan mudah dan cepat.</p>

    <h2 class="text-center mt-3 tulisan">SRC CUCUN NURASIAH</h2>
    <div class="container-fluid mb-5">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-4">
                <div class="card rounded" >
                    <img src="{{ asset('') }}asset/image/srccucun.jpg" class="card-img-top " alt="...">
                    <div class="card-body">
                      <p class="card-text">SRC CUCUN NURASIAH adalah sebuah toko yang menyediakan berbagai macam kebutuhan sehari-hari, seperti makanan, minuman, sembako dan perangkat sekolah. Toko ini juga menyediakan layanan pengisian pulsa dan kuota.</p>
                    </div>
                  </div>
            </div>
            <div class="col-lg-7 bg-light rounded">
                <h3 class="text-center tulisan">Penjaga Toko</h3>
                <div class="card  mb-2" >
                    <div class="row g-0">
                      <div class="col-md-2 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('') }}asset/image/cucun1.jpg" class="img-fluid" alt="...">
                      </div>
                      <div class="col-md-10">
                        <div class="card-body">
                          <h5 class="card-title">Cucun Nurasiah</h5>
                          <p class="card-text">Status : Owner <br></p>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="card  mb-2" >
                    <div class="row g-0">
                      <div class="col-lg-2 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('') }}asset/image/suherman1.jpg" class="img-fluid" alt="...">
                      </div>
                      <div class="col-lg-10">
                        <div class="card-body">
                          <h5 class="card-title">Suherman</h5>
                          <p class="card-text">Status : Owner <br></p>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="card  mb-2" >
                    <div class="row g-0">
                      <div class="col-lg-2 d-flex justify-content-center align-items-center">
                        <div class="img bg-dark d-flex justify-content-center align-items-center" style="width:100%;">
                            <h1 class="text-light text-center">No Image</h1>
                        </div>
                      </div>
                      <div class="col-md-10">
                        <div class="card-body">
                          <h5 class="card-title">Ari Nurmansyah Putra</h5>
                          <p class="card-text">Status : penjaga toko <br></p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>

    <h5 class="text-center mt-3 tulisan">masukan, saran atau kritik untuk website atau toko atau pertanyaan <br> dapat dikirimkan melalui form berikut, sekedar menyapapun boleh kok ;)</h5>
    <div class="container mb-5">
        <form action="" method="post" >
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukkan nama">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">alamat Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Masukan</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-danger">Kirim</button>
        </form>
    </div>
@endsection