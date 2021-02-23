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
}
$gudang = $_GET['gudang'];
?>

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

            <form action='http://127.0.0.1/admin-ia/admin/dashboard/' method="GET">
              <div class="card">
                <div class="card-header">Cari Lokasi Driver</div>
                <label class="col-md-6 col-form-label">Input NIK Driver</label>
                <div class="col-md-3">
                  <input type='text' id='nik_driver' class='form-control' ></input>

                  <button class="btn btn-info mt-3">TRACK DRIVER</button>
                </div>
                <hr>
                <label class="col-md-6 col-form-label">KODE GUDANG*</label>
                <div class="col-md-6">
                  <select class="form-control" name='gudang' id="gudang" value='<?=$gudang ?>'> 
                  <option value="all">SHOW ALL</option>
                    <option value="KRW">KARAWANG</option>
                    <option value="SBY">SURABAYA</option>
                    <option value="BDG">BANDUNG</option>
                    <option value="SMG">SEMARANG</option>
                    <option value="MKS">MAKASSAR</option>
                    <option value="KLT">KLATEN</option>
                    <option value="MDN">MEDAN</option>

                   
                  </select>

                  <button class="btn btn-info mb-3 mt-3">CARI LOKASI</button>
                </div>
                <label class="col-md-6 col-form-label">Berdasarkan Nik Driver</label>
                <div class="col-md-6">
                  <select class="form-control" name='nik' id="nik">
                    <option value="all" selected>SHOW ALL</option>

                    <?php
                 
                    $log = mysqli_query($con, "select * from tbl_log  where parameter like '%$gudang%'  group by parameter order by id ASC LIMIT 1000");

                    while ($data = mysqli_fetch_assoc($log)) {
                      $pisah = explode("&", $data['parameter']);

                      $gd = $pisah[0];

                      $nik_driver = $pisah[1];

                    ?>

                      <option value="<?php echo $nik_driver ?>"> <?php echo $nik_driver ?> - <?php echo $gd ?></option>

                    <?php } ?>

                  </select>

                  <button class="btn btn-info mb-3 mt-3">CARI LOKASI</button>
                </div>
                
              </div>
          </div>
          </form>
          <span id="error"></span>
        </div>
    </div>
    <div class="card">
      <div class="card-header">
        <span>Driver Location</span>
      </div>
      <div id="map"></div>
    </div>
    </main>



</div>
<!-- /.row (main row) -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
 