@extends('layout.template')
@section('title','Data Pondok')
@section('content')

<main class="page landing-page" style="background: rgb(246,246,246);">
    <section style="margin-top: 30px;background: rgb(246,246,246);">
        <div class="container" style="padding: 30px;color: rgb(255,255,255);background: rgb(255,255,255);">
            <div>
                <h1 style="color: rgba(0,119,26,0.8509803921568627);font-family: Alatsi, sans-serif;text-align: center;">Grafik Jumlah data Pesantren</h1>
            </div>
            <div class="row" style="color: rgba(255,0,0,0);">
                <div class="col" style="margin: 5px;background: #ffffff;padding: 15px;">
                    <div data-toggle="tooltip" data-bss-tooltip="" style="text-align: center;" title="Data Pesantren"><canvas data-bss-chart="{&quot;type&quot;:&quot;bar&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Col1&quot;,&quot;Col2&quot;,&quot;Col3&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;Revenue&quot;,&quot;backgroundColor&quot;:&quot;#fe346e&quot;,&quot;borderColor&quot;:&quot;#ffffff&quot;,&quot;borderWidth&quot;:&quot;2&quot;,&quot;data&quot;:[&quot;500&quot;,&quot;1000&quot;,&quot;5000&quot;]}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:true,&quot;legend&quot;:{&quot;display&quot;:false,&quot;reverse&quot;:false},&quot;title&quot;:{&quot;position&quot;:&quot;top&quot;,&quot;display&quot;:false},&quot;scales&quot;:{&quot;xAxes&quot;:[{&quot;gridLines&quot;:{&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;drawOnChartArea&quot;:false}}],&quot;yAxes&quot;:[{&quot;gridLines&quot;:{&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;drawOnChartArea&quot;:true}}]}}}"></canvas></div>
                </div>
                <div class="col" style="margin: 5px;background: #ffffff;padding: 15px;">
                    <div style="text-align: center;"><canvas data-bss-chart="{&quot;type&quot;:&quot;doughnut&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Col1&quot;,&quot;Col2&quot;,&quot;Col3&quot;,&quot;Col4&quot;,&quot;Col5&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;Revenue&quot;,&quot;backgroundColor&quot;:[&quot;rgba(255,189,105,255)&quot;,&quot;#111d5e&quot;,&quot;rgba(254,52,110,255)&quot;],&quot;borderColor&quot;:[&quot;#ffffff&quot;,&quot;#ffffff&quot;,&quot;#ffffff&quot;],&quot;data&quot;:[&quot;500&quot;,&quot;1000&quot;,&quot;5000&quot;]}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:true,&quot;legend&quot;:{&quot;display&quot;:false},&quot;title&quot;:{&quot;position&quot;:&quot;top&quot;,&quot;display&quot;:false}}}"></canvas></div>
                </div>
            </div>
        </div>
    </section>
    <section class="clean-block clean-info dark" style="background: rgb(246, 246, 246);margin: 20px;" href="">
        <div class="container" style="background: #ffffff;">
            <div class="block-heading">
                <h1 style="color: rgba(0,119,26,0.8509803921568627);font-family: Alatsi, sans-serif;">Daftar Pondok</h1>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="font-family: Alatsi, sans-serif;">No</th>
                                <th style="font-family: Alatsi, sans-serif;"><strong>Nama Lembaga</strong><br></th>
                                <th style="font-family: Alatsi, sans-serif;">Alamat</th>
                                <th style="font-family: Alatsi, sans-serif;">Santri</th>
                                <th style="font-family: Alatsi, sans-serif;">Pengajar</th>
                                <th style="font-family: Alatsi, sans-serif;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pondok as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->nama}}</td>
                                <td>{{$item->alamat}}</td>
                                <td>{{$item->no_telp}}</td>
                                <td>{{$item->web}}</td>
                                <td><a class="btn bg-success" href="{{url('/detail/'.$item->idpondok)}}" style="color: rgb(255,255,255);background: rgba(0,119,26,0.8509803921568627);">Info</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection