<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stockly</title>
    <link rel="stylesheet" href="{{ asset('') }}asset/css/bootstrap.min.css">
    <style>
        body{
            background-color: rgb(255, 209, 209)
        }
        .tulisan{
            color: rgb(206, 135, 135);
        }
        .navbar-ln{
            background-color: rgb(228, 97, 97);
        }
        .slide-ln{
            background-color: rgb(206, 135, 135);
            height: 450px;
        }
        .login-link{
            text-decoration: none;
            color: white;
        }
        .login-link:hover{
            color: rgb(206, 135, 135);
        }
    </style>
</head>
<body>

    @include('layout-guest.navbar')
    <div class="mt-5">
        @yield('content')
    </div>
    @include('layout-guest.footer')

    <script src="{{ asset('') }}asset/js/bootstrap.min.js"></script>
</body>
</html>