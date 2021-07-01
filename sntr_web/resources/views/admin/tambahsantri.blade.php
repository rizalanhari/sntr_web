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
            <h3 class="card-title">Form Tambah Santri</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form method="post" action="{{ route('admin.store.tambah.santri') }}">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="nama">Nama Santri</label>
                <input type="text" class="form-control" id="namasantri" name="test" placeholder="Masukkan Nama santri">

                <div class="form-group">
                  <label for="Alamat">Alamat</label>
                  <input type="text" class="form-control" id="alamatsantri" name="alamatsantri" placeholder="Masukkan Alamat santri">

                  <div class="form-group">
                    <label for="No Telfon">No Telfon</label>
                    <input type="text" class="form-control" id="notelfon" name="notelfon" placeholder="Masukkan No Telepon">
                  </div>
                </div>

                <label for="nama">Nama Ayah Santri</label>
                <input type="text" class="form-control" id="namaayahsantri" name="test" placeholder="Masukkan NamaAayah Santri">

                <label for="nama">Nama Ibu Santri</label>
                <input type="text" class="form-control" id="namaibusantri" name="test" placeholder="Masukkan Nama Ibu Santri">

                <div class="form-group">
                  <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                  <select class="form-control" id="jeniskelamin" name="jeniskelamin">
                    <option>Laki-Laki</option>
                    <option>Perempuan</option>
                  </select>
                </div>
                <!-- /.card-body -->

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