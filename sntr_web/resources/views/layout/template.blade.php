<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fjalla+One">
    <link rel="stylesheet" href="{{asset('assets/fonts/ionicons.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/Login-Form-Dark.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/smoothproducts.css')}}">
</head>

<body>


    @include('layout.nav')

    @yield('content')
    <footer class="page-footer dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5>Info Umum</h5>
                    <ul>
                        <li><a href="https://jombangkab.go.id/opd/humasprotokol/pages/daftar-penghargaan-kabupaten-jombang">Prestasi dan Penghargaan</a></li>
                        <li><a href="https://kai.id/train_schedule">Jadwal KA</a></li>
                        <li><a href="https://kubuku.id/download/perpusda-kab-jombang/">Perpustakaan Digital</a></li>
                        <li><a href="https://siskaperbapo.com/harga/tabel">Harga Sembako</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Info Lain<br></h5>
                    <ul>
                        <li><a href="#">Nilai Tukar Petani</a></li>
                        <li><a href="#">Kawasan Agropolitan</a></li>
                        <li><a href="#">Statistik Pengunjung</a></li>
                        <li><a href="#">Etalase UMKM</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Jaringan<br></h5>
                    <ul>
                        <li><a href="#">Dekranasda</a></li>
                        <li><a href="#">KPUD Jombang</a></li>
                        <li><a href="#">Bawaslu Jombang</a></li>
                        <li><a href="#">TKPKD. Kab. Jombang</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Hubungi Kami</h5>
                    <p style="color: rgb(255,255,255);"><strong>Pemerintah Kabupaten Jombang</strong><br>Jl. Wachid Hasyim 137<br>Jombang - 61411.<br>Tel: 0321-861292<br>e-mail: diskominfo@jombangkab.go.id<br><br></p>
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