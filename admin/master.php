<?php include "session.php"; ?>
<!DOCTYPE html>
<html lang="en">

<?php include "head.php"; ?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
   <?php include "menu.php"; ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include "navbar.php"; ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Data Rekrutmen</h1>
          <p class="mb-4">Rekrutmen <sup>App</sup></p>
          <?php
             if(isset($_GET['aksi']) == 'delete'){
				$id = $_GET['id'];
				$cek = mysqli_query($koneksi, "SELECT * FROM pekerja WHERE id_c_pekerja='$id'");
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data tidak ditemukan.</div>';
				}else{
					$delete = mysqli_query($koneksi, "DELETE FROM pekerja WHERE id_c_pekerja='$id'");
					if($delete){
						echo '<div class="alert alert-primary alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data berhasil dihapus.</div>';
					}else{
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data gagal dihapus.</div>';
					}
				}
			}
			?>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Master Rekrutmen</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <a href="export.php" class="btn btn-sm btn-primary">Export Data </a><br/><br/>
              <table id="lookup" class="table table-bordered table-hover">  
	<thead bgcolor="eeeeee" align="center">
      <tr>
          <th>No</th>
        <th>Id Calon Pekerja</th>
        <th>nama pekerja</th>
        <th>no ktp</th>
        <th>jenis kelamin</th>
        <th>alamat</th>
        <th>agama</th>
        <th>status kawin</th>
        <th>tgl rekrutmen</th>
        <th>tempat tgl lahir</th>
        <th>negara</th>
        <th>pendidikan</th>
        <th>gol darah</th>
        <th>no telp</th>
        <th>nama ibu kandung</th>
        <th>nama saudara kandung</th>
        <th>no kontak darurat</th>
        <th>no npwp</th>
        <th>email</th>
        <th>ukuran Seragam</th>
        <th>ukuran sepatu</th>
        <th>tinggi badan (Cm)</th>
        <th>berat badan (Kg)</th>
        <th>rute jemputan</th>
        <th>titik jemput</th>
        <th>nilai test</th>
        <th>hasil mcu</th>
        <th>hasil pcr</th>

	   <th class="text-center"> Action </th> 
	  
      </tr>
    </thead>
    <tbody>
	 
					 
    </tbody>
  </table>  
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
  <?php include "footer.php"; ?>

  <script>
        $(document).ready(function() {
				var dataTable = $('#lookup').DataTable( {
					"processing": true,
					"serverSide": true,
					"ajax":{
						url :"ajax-data-master.php", // json datasource
						type: "post",  // method  , by default get
						error: function(){  // error handling
							$(".lookup-error").html("");
							$("#lookup").append('<tbody class="employee-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
							$("#lookup_processing").css("display","none");
							
						}
					}
				} );
			} );
        </script>
</body>

</html>
