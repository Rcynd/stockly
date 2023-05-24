@extends('admin.layout-admin.main')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tambah Produk</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card ">
            <!-- /.card-header -->
            <div class="card-body table-responsive p-3">
                <div class="">
                    <!-- form start -->
                    <form method="post" action="{{ asset('tambah-produk') }}" class="mb-5" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name_produk" class="form-label">Nama Produk</label>
                            <input type="text" name="name_produk" class="form-control" id="name_produk" placeholder="indomie" value="{{ old('name_produk') }}">
                            @error('name_produk')
                            <div class="text-danger">
                            {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="number" name="harga" class="form-control" id="harga" placeholder="2500" value="{{ old('harga') }}">
                            @error('harga')
                            <div class="text-danger">
                            {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="stock" class="form-label">Stock</label>
                            <input type="number" name="stock" class="form-control" id="stock" placeholder="20" value="{{ old('stock') }}">
                            @error('stock')
                            <div class="text-danger">
                            {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="ready">Ready</option>
                                <option value="pending">pending</option>
                                <option value="sold">sold</option>
                            </select>
                        </div>
                        <div class="mb-3">
                          <label for="foto" class="form-label">Kirim Foto :</label>
                          <img src="" alt="" class="img-preview img-fluid mb-3 col-sm-5" >
                          <input class="@error('foto') is-invalid @enderror form-control" type="file" id="foto" name="image" onchange="previewImage()" accept="image/*">
                          @error('foto')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                          @enderror
                      </div>
                      <!-- /.card-body -->
      
                      <div class="">
                        <a class="btn btn-primary float-end" href="{{ asset('produk-adm') }}aduan">Kembali</a>
                        <button type="submit" class="btn text-light float-right btn-danger">Submit</button>
                      </div>
                    </form>
                  </div>
                  <!-- /.card -->
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>

  <script>
    function previewImage() {
        const image = document.querySelector('#foto')
        const imgPreview = document.querySelector('.img-preview')
        
        imgPreview.style.display = 'block'

        const oFReader = new FileReader()
        oFReader.readAsDataURL(image.files[0])

        oFReader.onload = function (oFREvent) {
            imgPreview.src = oFREvent.target.result
        }
    }
</script>
@endsection