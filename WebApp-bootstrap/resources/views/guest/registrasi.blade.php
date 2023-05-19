@extends('guest.layout.main')
@section('content')
    <div class="">
        <div class="row justify-content-center p-0 m-0 ">
            <header class="d-flex justify-content-center bg-danger col-lg-7 shadow-sm p-3 text-light mb-3">
                <h2>Registrasi Akun</h2>
            </header>
            <main class="col-lg-7">
                <article >
                    <form action="{{ asset('registrasi') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Rian Muhammad Afriansyah">
                        @error('name')
                        <div class="text-danger">
                        {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Alamat Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                        @error('email')
                        <div class="text-danger">
                        {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="no_telp" class="form-label">No.Telepon</label>
                        <input type="text" name="no_telp" class="form-control" id="no_telp" placeholder="0896xxxxxx33">
                        @error('no_telp')
                        <div class="text-danger">
                        {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="">
                        @error('password')
                        <div class="text-danger">
                        {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-danger">Register</button>
                    </form>
                </article>
            </main>
            <footer class="mt-3 text-center bg-danger text-light p-1 col-lg-7">
                <p>Sudah punya akun? silahkan untuk <a href="{{ asset('login') }}">Login di sini</a></p>
            </footer>
        </div>    
    </div>
@endsection