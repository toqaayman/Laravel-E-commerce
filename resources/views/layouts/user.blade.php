<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--<link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">-->

    <!--font links-->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Aleo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


    <!-- CSS links -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/media.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" />
    <title>Fashion </title>
    {{ $style ?? '' }}


    <script src="{{ asset('js/user/utilities.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


    <style>
        a[href = "{{ url()->current() }}"]{
            border-bottom: 3px solid var(--site_col_1);
        }
    </style>
</head>
<body class="m-0">
@include('components.header')


<section style="margin-top: 1.5rem;" class="_container">
    <div class="card" style="width: 18rem; margin-left: 18rem; margin-bottom: 5rem">
        <img class="card-img-top" src="{{ asset('storage/avatar/admin.png') }}" alt="user">
        <div class="card-body">
            <div class="card-title">
                <h2 class="m-0">{{ auth()->user()->full_name }}</h2>
                <p class="m-0">{{ auth()->user()->email }}</p>
            </div>
            @if (auth()->user()->admin)
                <a style="color: blue; margin-top:1em ; text-decoration: none" class="btn btn-primary" href="{{ route('admin.dashboard') }}">Dashboard</a>
            @elseif (auth()->user()->moderator)
                <a style="color: blue; margin-top:1em ; text-decoration: none" class="btn btn-primary" href="{{ route('admin.dashboard') }}">Dashboard</a>
            @else
        @endif
        </div>
    </div>
    <main>
        <ul class="nav nav-tabs" style="margin-left: 5rem">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('user.profile') }}">
                    <div>Profile</div></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('user.orders.index') }}">
                    <div>Orders</div></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('user.ship_info') }}">
                    <div>Addresses</div></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('user.setting') }}">
                    <div>Settings</div></a>
            </li>
        </ul>
        <!-- main content -->
        <div style="margin-bottom: 1rem ; margin-top: 5rem ;margin-left: 5rem">

            {{ $slot }}

        </div>
    </main>
</section>
@include('components.footer')
<script src="js/jquery-3.5.1.min.js" ></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js" ></script>
<script src="https://kit.fontawesome.com/69d1653a9e.js" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
</body>
</html>
