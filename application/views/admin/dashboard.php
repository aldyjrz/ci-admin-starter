<?php
date_default_timezone_set("Asia/Jakarta");

$server = "localhost";
$username = "root";
$password = "";
$database = "db_customerA";
$base_url = "http://115.124.73.22:8091/android/api/customer/";

$con = mysqli_connect($server, $username, $password, $database); // or die("koneksi gagal");

if (isset($_GET['nik'])) {
  $kordinat = $_GET['nik'];
} else {
  $kordinat = 'all';
}
if (isset($_GET['gudang'])) {
  $gudang = $_GET['gudang'];
} else {
  $gudang = 'all';
} ?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header" style="margin-top: 50px;">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard Admin</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <main class="container">
        <div class="row">
          <div class="col-md-12">
            <br>
            <div id='app-loader' class="spinner-border text-info"></div>
                        <form action='' method="GET">
              <div class="card">
                <div class="card-header">Cari Lokasi Driver</div>

                <label class="col-md-12 col-form-label  ml-2 ">KODE GUDANG*</label>
                <div class='row'>
                  <div class="col-md-3  ml-2">
                    <select class="form-control  ml-2" name='gudang' id="gudang" value='<?= $gudang ?>'>
                      <option value="all">SHOW ALL</option>
                      <option value="KRW">KARAWANG</option>
                      <option value="SBY">SURABAYA</option>
                      <option value="BDG">BANDUNG</option>
                      <option value="SMG">SEMARANG</option>
                      <option value="MKS">MAKASSAR</option>
                      <option value="KLT">KLATEN</option>
                      <option value="MDN">MEDAN</option>
                    </select>
                  </div>
                  <div class="col-md-3">
                    <button class="btn btn-info mb-3"><i class='fas fa-sync'></i></button>
                  </div>
                </div>


                <label class="col-md-6 col-form-label ">Berdasarkan Nik Driver</label>
                <div class="col-md-6 mb-3">
                  <select class="form-control select2 mb-3" name='nik' id="nik">
                    <option value="all">SHOW ALL</option>


                  </select>


                </div>

              </div>
          </div>
          </form>

          <div class="container-fluid">
            <div class="card">
              <div class="card-header">
                <span>Driver Location</span>
              </div>
              <div id="map"></div>
            </div>
          </div>
      </main>


    </div>
</div>

</div>
<!-- /.row (main row) -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->