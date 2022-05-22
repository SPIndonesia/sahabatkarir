<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        {{-- {{ $judul }} --}}
    </title>

    <!-- --------------- css --------------- -->
    @foreach ($css as $style)
    <link rel="stylesheet" href="assets/css/{{ $style }}.css">
    @endforeach
</head>

<body>
    <header>
        <div class="sahabat-karir-logo">
            <img src="assets/img/icon/logo-sk.png" alt="sahabat karir">
            <h1>Sahabat Karir</h1>
        </div>

        <div class="profil-admin">
            <i class="fa-solid fa-bell"></i>

            <div class="info-admin">
                <div class="foto-admin">
                    <img src="" alt="">
                </div>

                <div class="nama-admin">
                    <h4>Nama Admin</h4>
                    <p>Admin Bengkulu</p>
                </div>
            </div>
        </div>
    </header>

    <section class="sec-beranda">
        <nav class="navigasi-beranda">
            <ul>
                <li class="nav" data-target="beranda">
                    <i class="fa-solid fa-house-user"></i>
                    <h2>Dashboard</h2>
                </li>

                <li class="nav" data-target="dataPeserta">
                    <i class="fa-solid fa-people-group"></i>
                    <h2>Data Peserta</h2>
                </li>

                <li class="nav" data-target="kategori">
                    <i class="fa-solid fa-layer-group"></i>
                    <h2>Kategori</h2>
                </li>

                <li class="nav" data-target="pembayaran">
                    <i class="fa-solid fa-money-check-dollar"></i>
                    <h2>Pembayaran</h2>
                </li>
            </ul>
        </nav>

        @yield('content')

    </section>

    <!-- --------------- js --------------- -->
    <script src="https://kit.fontawesome.com/02db274a60.js" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script src="assets/js/template.js"></script>

    @foreach ($js as $script)
    <script src="assets/js/{{ $script }}.js"></script>
    @endforeach
</body>

</html>
