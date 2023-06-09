@extends('guest.layout.main')
@section('content')
    <div class="">
        <div class="row justify-content-center p-0 m-0 ">
            <header class="d-flex justify-content-center bg-danger shadow-sm p-3 text-light mb-3">
                <h2>Halaman Login</h2>
            </header>
            @if (session()->has('loginError'))
            <div class="alert alert-danger col-lg-7 text-center" role="alert">
              {{ session('loginError') }}
            </div>
            @endif
            @if (session()->has('sukses'))
            <div class="alert alert-success col-lg-7 text-center" role="alert">
              {{ session('sukses') }}
            </div>
            @endif
            <main class="col-lg-7">
                <article >
                    <form action="{{ asset('login') }}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Alamat Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="">
                    </div>
                    <button type="submit" class="btn btn-danger float-start">Login</button>
                    <a href="{{ asset('/') }}" type="submit" class="btn btn-primary float-end">Back</a>
                    </form>
                </article>
            </main>
            <footer class="mt-3 fixed-bottom text-center bg-danger text-light p-1">
                <p>Belum punya akun? silahkan untuk <a href="{{ asset('registrasi') }}">Registrasi di sini</a></p>
            </footer>
        </div>    
    </div>
@endsection