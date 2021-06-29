<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alatsi">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Almendra">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fjalla+One">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/Login-Form-Dark.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/smoothproducts.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Map-Clean.css')}}">
</head>

<body>


    @include('layout.nav')

    @yield('content')
    <footer class="page-footer dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-3" style="font-family: Alatsi, sans-serif;">
                    <h5 style="font-family: Alatsi, sans-serif;">Info Umum</h5>
                    <ul>
                        <li><a href="https://jombangkab.go.id/opd/humasprotokol/pages/daftar-penghargaan-kabupaten-jombang" style="font-family: Alatsi, sans-serif;">Prestasi dan Penghargaan</a></li>
                        <li><a href="https://kai.id/train_schedule" style="font-family: Alatsi, sans-serif;">Jadwal KA</a></li>
                        <li><a href="https://kubuku.id/download/perpusda-kab-jombang/" style="font-family: Alatsi, sans-serif;">Perpustakaan Digital</a></li>
                        <li><a href="https://siskaperbapo.com/harga/tabel" style="font-family: Alatsi, sans-serif;">Harga Sembako</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5 style="font-family: Alatsi, sans-serif;">Info Lain<br></h5>
                    <ul>
                        <li><a href="https://www.jombangkab.go.id/pages/nilai-tukar-petani" style="font-family: Alatsi, sans-serif;">Nilai Tukar Petani</a></li>
                        <li><a href="https://www.jombangkab.go.id/pages/kawasan-agropolitan" style="font-family: Alatsi, sans-serif;">Kawasan Agropolitan</a></li>
                        <li><a href="http://www.histats.com/viewstats/?act=2&amp;sid=2221146" style="font-family: Alatsi, sans-serif;">Statistik Pengunjung</a></li>
                        <li><a href="http://ukm-jombang.jombangkab.go.id/" style="font-family: Alatsi, sans-serif;">Etalase UMKM</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5 style="font-family: Alatsi, sans-serif;">Jaringan<br></h5>
                    <ul>
                        <li><a href="https://dekranasda.jombangkab.go.id/" style="font-family: Alatsi, sans-serif;">Dekranasda</a></li>
                        <li><a href="http://kpu-jombangkab.go.id/" style="font-family: Alatsi, sans-serif;">KPUD Jombang</a></li>
                        <li><a href="https://jombang.bawaslu.go.id/" style="font-family: Alatsi, sans-serif;">Bawaslu Jombang</a></li>
                        <li><a href="http://www.bankjatim.co.id/" style="font-family: Alatsi, sans-serif;">TKPKD. Kab. Jombang</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5 style="font-family: Alatsi, sans-serif;">Hubungi Kami</h5>
                    <p style="color: rgb(255,255,255);font-family: Alatsi, sans-serif;"><strong>Pemerintah Kabupaten Jombang</strong><br>Jl. Wachid Hasyim 137<br>Jombang - 61411.<br>Tel: 0321-861292<br>e-mail: diskominfo@jombangkab.go.id<br><br></p>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/chart.min.js')}}"></script>
    <script src="{{asset('assets/js/bs-init.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="{{asset('assets/js/smoothproducts.min.js')}}"></script>
    <script src="{{asset('assets/js/theme.js')}}"></script>

</body>

</html>