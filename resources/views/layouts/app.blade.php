<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'SIMPAD Kabupaten Bogor') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sistem Informasi Keuangan Daerah">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        body {
            display: flex;
            min-height: 100vh;
            margin: 0;
            flex-direction: column;
        }

        .navbar {
            background-color: #00A8A8;
            color: #fff;
            padding: 10px 20px;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1050;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar .user-info {
            display: flex;
            align-items: center;
        }

        .navbar .dropdown-menu {
            background-color: #FFFBE6;
        }

        .sidebar {
            width: 250px;
            background-color: #FFFBE6;
            color: black;
            position: fixed;
            top: 0; /* Offset for navbar height */
            bottom: 0;
            left: 0;
            padding: 20px;
            overflow-y: auto;
            border-top-right-radius: 80px;
        }

        .sidebar a {
            color: black;
            text-decoration: none;
            display: block;
            padding: 10px 15px;
            margin-bottom: 5px;
            border-radius: 5px;
            transition: background-color 0.2s;
        }

        .sidebar a:hover {
            background-color: #007979;
        }

        .sidebar .dropdown-menu a {
            padding-left: 30px;
        }

        .content {
            margin-left: 250px;
            margin-top: 70px; /* Offset for navbar height */
            padding: 20px;
            flex-grow: 1;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    

    <!-- Sidebar -->
    <div class="sidebar">
        <img src="{{ asset('assets/img/logo-header.png') }}" alt="logo-header" style="height: 45px; margin-bottom: 20px;">
        @if (Auth::user())
        <a href="{{ url('/admin/dashboard') }}">Executive Summary</a>
        <a href="{{ url('/b-tax') }}">B-TAX</a>
        <div class="dropdown">
            <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">Pendaftaran</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ url('/pendaftaran/subjek-pajak') }}">Subjek Pajak</a></li>
                <li><a class="dropdown-item" href="{{ url('/pendaftaran/objek-pajak') }}">Objek Pajak</a></li>
                <li><a class="dropdown-item" href="{{ url('/pendaftaran/ektentifikasi') }}">Ektentifikasi</a></li>
                <li><a class="dropdown-item" href="{{ url('/pendaftaran/laporan') }}">Laporan</a></li>
            </ul>
        </div>
        <div class="dropdown">
            <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">Pendataan</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ url('/pendataan/option1') }}">Option 1</a></li>
                <li><a class="dropdown-item" href="{{ url('/pendataan/option2') }}">Option 2</a></li>
            </ul>
        </div>
        <div class="dropdown">
            <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">Penerimaan</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ url('/penerimaan/option1') }}">Option 1</a></li>
                <li><a class="dropdown-item" href="{{ url('/penerimaan/option2') }}">Option 2</a></li>
            </ul>
        </div>
        <div class="dropdown">
            <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">Penagihan</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ url('/penagihan/option1') }}">Option 1</a></li>
                <li><a class="dropdown-item" href="{{ url('/penagihan/option2') }}">Option 2</a></li>
            </ul>
        </div>
            <a href="{{ url('/pelayanan') }}">Pelayanan</a>
            <a href="{{ url('/referensi') }}">Referensi</a>
        </div>
        @endif
    </div>

    <!-- Main Content -->
    <div class="content">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="text-center py-3 bg-light">
        <p class="text-muted">
            <strong>
                <a href="{{ config('app.url') }}">&copy; {{ config('app.name') }} {{ date('Y') }}</a>
            </strong>
            | Page rendered in {{ round(microtime(true) - LARAVEL_START, 4) }} seconds
        </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
