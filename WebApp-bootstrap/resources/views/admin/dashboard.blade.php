@extends('admin.layout-admin.main')
@section('content')

@if (session()->has('sukses'))
<div class="alert alert-danger col-lg-12 text-center" role="alert">
  {{ session('sukses') }}
</div>
@endif

<div class="container">
    <h1 class="text-center">Dashboard</h1>

</div>
    
@endsection