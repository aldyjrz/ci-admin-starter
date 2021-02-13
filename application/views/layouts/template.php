<!DOCTYPE html>
<html>

<head>
	<title>
<?= $page_title; ?>
</title>
  	<link href='<?php echo base_url("assets/uploads/images/$favicon"); ?>' rel='shortcut icon' type='image/x-icon' />
	<!-- meta -->
	<?php require_once('_meta.php') ;?>
  <link rel="stylesheet" href="<?=base_url()?>assets/modules/datatables/DataTables-1.10.16/css/dataTables.foundation.min.css">

	<!-- css -->
	<?php require_once('_css.php') ;?>
  
 
</head>
 
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<!--navbar-->
<?php require_once('_nav.php') ;?>
<?php require_once('_sidebar.php') ;?>


<?=$view?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php require_once('_footer.php') ;?>

<!-- jQuery -->
<script src="<?=base_url()?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?=base_url()?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?=base_url()?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script src="<?=base_url()?>plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="<?=base_url()?>assets/modules/datatables/DataTables-1.10.16/js/jquery.dataTables.min.js"></script>

<!-- daterangepicker -->
<script src="<?=base_url()?>plugins/moment/moment.min.js"></script>
<script src="<?=base_url()?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?=base_url()?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?=base_url()?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?=base_url()?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url()?>dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->


<script src="<?=base_url()?>assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>

 
<script>
      $(document).ready(function() {
        $('#datatable').DataTable({
          "autoResize":false
        } );
      });
    </script>
</body>
</html>
