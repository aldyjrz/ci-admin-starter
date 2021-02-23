<!DOCTYPE html>
<html>

<head>
  <title>
    <?= $page_title; ?>
  </title>
  <link href='<?php echo base_url("assets/uploads/images/aa"); ?>' rel='shortcut icon' type='image/x-icon' />
  <!-- meta -->
  <?php require_once('_meta.php'); ?>
  <link rel="stylesheet" href="<?= base_url() ?>assets/modules/datatables/DataTables-1.10.16/css/dataTables.foundation.min.css">

  <!-- css -->
  <?php require_once('_css.php'); ?>


</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!--navbar-->
    <?php require_once('_nav.php'); ?>
    <?php require_once('_sidebar.php'); ?>


    <?= $view ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  <?php require_once('_footer.php'); ?>

  <!-- jQuery -->
  <script src="<?= base_url() ?>plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?= base_url() ?>plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url() ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>plugins/jquery-knob/jquery.knob.min.js"></script>
  <script src="<?= base_url() ?>assets/modules/datatables/DataTables-1.10.16/js/jquery.dataTables.min.js"></script>

  <!-- daterangepicker -->
  <script src="<?= base_url() ?>plugins/moment/moment.min.js"></script>
  <script src="<?= base_url() ?>plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="<?= base_url() ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="<?= base_url() ?>plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="<?= base_url() ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url() ?>dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url() ?>dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->


  <script src="<?= base_url() ?>assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>




  <script src="<?= base_url() ?>plugins/jquery/jquery-max.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9cC9fl_RsrvMZj5v_Sa4W5iSj8C7QZ2Y&callback=init"> </script>

  <script>
    (async () => {
      let drivers = await getDrivers();
      drivers.forEach(function(driver) {
        addMarker(driver.lat, driver.lngs, driver.nama);
      })
    })()

    var markers = [];
    var map;

    //inisialisasi awal google maps
    function init() {
      var lastLocation = new google.maps.LatLng(-6.22574, 106.83);
      map = new google.maps.Map(document.getElementById('map'), {
        zoom: 10,
        center: lastLocation
      });
    }

    function getDrivers(nik) {
      return $.ajax({
        url: `<?=base_url()?>api/Api/driver`,
        dataType: "json",
        method: "get",
        data: {
          nik: nik
        }
      })
    }

    $("#nik").on("change", function(e) {
      let nik = $(this).val();
      updateMarker(nik);
   

    })
     $('#gudang').val('<?PHP echo $_GET['gudang'] ?>').prop('selected', true);
     $('#nik').val('<?PHP echo $_GET['nik'] ?>').prop('selected', true);

    async function updateMarker(nik) {
      clearMarkers();
      let drivers = await getDrivers(nik);
      drivers.forEach(function(driver) {
        addMarker(driver.lat, driver.lngs, driver.nama);
      })
    }

    function addMarker(lat, lng, info) {
      var coords = new google.maps.LatLng(lat, lng);

      let marker = new google.maps.Marker({
        position: coords,
        title: info,
        icon: {
          path: google.maps.SymbolPath.CIRCLE,
          scale: 10,
          fillOpacity: 1,
          strokeWeight: 2,
          fillColor: '#5384ED',
          strokeColor: '#ffffff',
        }
      });

      //tambah listener marker onClico k
      google.maps.event.addListener(marker, 'click', function() {
        var infowindow;

        //cek info windows ada apa  kalo ada dikosongin dulu
        if (infowindow) {
          infowindow.setMap(null);
          infowindow = null;
          infowindow.close();
        }

        //init infowindow content
        infowindow = new google.maps.InfoWindow({
          content: "<span>DRIVER:" + info + "</span></span>",
          position: coords,
          map: map
        });
      });
      marker.setMap(map);
      markers.push(marker);
    }

    // Sets the map on all markers in the array.
    function setMapOnAll(map) {
      for (let i = 0; i < markers.length; i++) {
        markers[i].setMap(map);
      }
    }

    // Removes the markers from the map, but keeps them in the array.
    function clearMarkers() {
      setMapOnAll(null);
    }
  </script>
</body>


</html>