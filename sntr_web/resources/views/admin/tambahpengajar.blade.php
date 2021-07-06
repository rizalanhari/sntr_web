@extends('admin.layoutadmin')
@section('content')
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Form Tambah Pengajar</h3>
          </div>
          <!-- /.card-header -->
          @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif
          <!-- form start -->
          <form method="post" action="{{ route('admin.store.tambah.pengajar') }}">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="nama">Nama Pengajar</label>
                <input type="text" class="form-control" id="namapengajar" name="namapengajar" placeholder="Masukkan Nama pengajar">

                <div class="form-group">
                  <label for="Alamat">Alamat</label>
                  <input type="text" class="form-control" id="alamatpengajar" name="alamatpengajar" placeholder="Masukkan Alamat pengajar">

                  <div class="form-group">
                    <label for="No Telfon">No Telfon</label>
                    <input type="text" class="form-control" id="notelfon" name="notelfon" placeholder="Masukkan No Telepon">
                  </div>
                </div>

                <!-- select -->
                <div class="form-group">
                  <label>Pondok</label>
                  <select class="form-control" name='idpondok'>
                    @foreach($pondok as $item)
                    <option value="{{$item->idpondok}}">{{$item->nama}}</option>
                    @endforeach
                  </select>
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
          </form>
        </div>

      </div>
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

@endsection