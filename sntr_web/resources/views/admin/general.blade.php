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
            <h3 class="card-title">Form Tambah Pondok</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form method="post" action="{{ route('admin.tambah.pondok') }}">
            {!! csrf_field !!}}
            <div class="card-body">
              <div class="form-group">
                <label for="nama">Nama Pondok</label>
                <input type="text" class="form-control" id="namapondok" placeholder="Masukkan Nama Pondok">

                <div class="form-group">
                  <label for="Alamat">Alamat</label>
                  <input type="text" class="form-control" id="alamatpondok" placeholder="Masukkan Alamat Pondok">

                  <div class="form-group">
                    <label for="No Telfon">No Telfon</label>
                    <input type="text" class="form-control" id="notelfon" placeholder="Masukkan No Telepon">
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="Web">Web</label>
                        <input type="text" class="form-control" id="webpondok" placeholder="Masukkan Alamat Web Pondok">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="gambarpondok">Gambar Pondok</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="gambarpondok">
                            <label class="custom-file-label" for="gambarpondok">Choose file</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group">
                        <div class="col-md-12 text-center">
                          <!-- Trigger the modal with a button -->
                          <button type="button" class=" btn btn-info btn-md" data-toggle="modal" data-target="#myModal">Open Map Location</button>

                          <!-- Modal -->
                          <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-body">
                                  <div id="map"></div>
                                  <br>
                                  <text id="confirmPosition">Current Position</text>
                                  <br>
                                  <p><span id="onIdlePositionView"></span></p>

                                  <script>
                                    // Get element references
                                    var onClickPositionView = document.getElementById('onClickPositionView');
                                    var onIdlePositionView = document.getElementById('onIdlePositionView');

                                    // Initialize locationPicker plugin
                                    var lp = new locationPicker('map', {
                                      setCurrentPosition: true, // You can omit this, defaults to true
                                    }, {
                                      zoom: 15 // You can set any google map options here, zoom defaults to 15
                                    });

                                    // Listen to map idle event, listening to idle event more accurate than listening to ondrag event
                                    google.maps.event.addListener(lp.map, 'idle', function(event) {
                                      // Get current location and show it in HTML
                                      var location = lp.getMarkerPosition();
                                      onIdlePositionView.innerHTML = location.lat + ',' + location.lng;

                                      const input = document.querySelector('input.longitudepondok');
                                      input.value = location.lat;
                                    });
                                  </script>
                                  <input class="longitudepondok" type="hidden" id="longitude">
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
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