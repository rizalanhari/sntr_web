@extends('layout.template')
@section('content')
<main class="page landing-page" style="background: rgb(246,246,246);">
    <section style="margin-top: 30px;background: rgb(246,246,246);">
        <div class="container" style="padding: 30px;color: rgb(255,255,255);background: rgb(255,255,255);">
            <div>
                <h1 style="color: rgba(0,119,26,0.8509803921568627);font-family: Alatsi, sans-serif;text-align: center;">Detail</h1>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr></tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="width: 300px;">Nama Pondok</td>
                            <td>PP 01</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>Jombang gaes</td>
                        </tr>
                        <tr>
                            <td>Jumlah Pengajar</td>
                            <td>4993</td>
                        </tr>
                        <tr>
                            <td>Jumlah Santri</td>
                            <td>29939</td>
                        </tr>
                        <tr>
                            <td>No Telpon</td>
                            <td>0821232745</td>
                        </tr>
                        <tr>
                            <td>Web</td>
                            <td><a href="https://youtu.be/KHTemEpkwyI?list=RDKHTemEpkwyI"><span style="text-decoration: underline;">https://youtu.be/KHTemEpkwyI?list=RDKHTemEpkwyI</span></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="clean-block clean-info dark" style="background: rgb(246, 246, 246);margin: 20px;" href="">
        <div class="container" style="background: #ffffff;">
            <div class="block-heading" style="margin: 10px;padding-top: 30px;">
                <h1 style="color: rgba(0,119,26,0.8509803921568627);font-family: Alatsi, sans-serif;">Peta Lokasi</h1>
            </div><iframe allowfullscreen="" frameborder="0" loading="lazy" src="https://www.google.com/maps/embed/v1/search?key=AIzaSyCzrvQf-SSra0U-lJffe0mKYvO3qe5s-rs&amp;q=-7.556501120884609%2C+112.22641499724992&amp;zoom=17" width="100%" height="400"></iframe>
        </div>
    </section>
</main>
@endsection