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
        <?php
          $cek_k = mysqli_query($koneksi, "SELECT COUNT(id_c_pekerja) FROM pekerja where ojt_status = '1'");
          $row_k = mysqli_fetch_array($cek_k);
          $data_k = ceil($row_k[0]);
          
          $cek_laki = mysqli_query($koneksi, "SELECT COUNT(jenis_kelamin) FROM pekerja WHERE jenis_kelamin = 'L' AND ojt_status = '1'");
          $row_l = mysqli_fetch_array($cek_laki);
          $data_laki = ceil($row_l[0]);

          $cek_p = mysqli_query($koneksi, "SELECT COUNT(jenis_kelamin) FROM pekerja WHERE jenis_kelamin = 'P' AND ojt_status = '1'");
          $row_p = mysqli_fetch_array($cek_p);
          $data_p = ceil($row_p[0]);
          
          $cek_sma = mysqli_query($koneksi, "SELECT COUNT(pendidikan) FROM pekerja WHERE pendidikan = 'SMA' AND ojt_status = '1'");
          $row_sma = mysqli_fetch_array($cek_sma);
          $data_sma = ceil($row_sma[0]);

          $cek_smk = mysqli_query($koneksi, "SELECT COUNT(pendidikan) FROM pekerja WHERE pendidikan = 'SMK' AND ojt_status = '1'");
          $row_smk = mysqli_fetch_array($cek_smk);
          $data_smk = ceil($row_smk[0]);

          $cek_d3 = mysqli_query($koneksi, "SELECT COUNT(pendidikan) FROM pekerja WHERE pendidikan = 'D3' AND ojt_status = '1'");
          $row_d3 = mysqli_fetch_array($cek_d3);
          $data_d3 = ceil($row_d3[0]);

          $cek_s1 = mysqli_query($koneksi, "SELECT COUNT(pendidikan) FROM pekerja WHERE pendidikan = 'S1' AND ojt_status = '1'");
          $row_s1 = mysqli_fetch_array($cek_s1);
          $data_s1 = ceil($row_s1[0]);

          //ukuran seragam

          $cek_s = mysqli_query($koneksi, "SELECT COUNT(ukr_seragam) FROM pekerja WHERE ukr_seragam = 'S' AND ojt_status = '1'");
          $row_s = mysqli_fetch_array($cek_s);
          $data_s = ceil($row_s[0]);

          $cek_m = mysqli_query($koneksi, "SELECT COUNT(ukr_seragam) FROM pekerja WHERE ukr_seragam = 'M' AND ojt_status = '1'");
          $row_m = mysqli_fetch_array($cek_m);
          $data_m = ceil($row_m[0]);

          $cek_l = mysqli_query($koneksi, "SELECT COUNT(ukr_seragam) FROM pekerja WHERE ukr_seragam = 'L' AND ojt_status = '1'");
          $row_lu = mysqli_fetch_array($cek_l);
          $data_l = ceil($row_lu[0]);

          $cek_xl = mysqli_query($koneksi, "SELECT COUNT(ukr_seragam) FROM pekerja WHERE ukr_seragam = 'XL' AND ojt_status = '1'");
          $row_xl = mysqli_fetch_array($cek_xl);
          $data_xl = ceil($row_xl[0]);
          
        ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">
         <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Report OJT</h1>
          <p class="mb-4">Rekrutmen <sup>App</sup></p>
          <!-- <a href="404.php" class="btn btn-lg btn-success" style="height: 100px; width 150px; margin-right:20px; margin-top: 10px;" ><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Transaksi Masuk&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>  -->
          
          <a href="#" class="btn btn-lg btn-primary" style="height: 100px; width 150px; margin-right:20px; margin-top: 10px;" ><br/>Kandidat Pekerja Laki-Laki <br>
          <?php echo $data_laki; ?></a> 

          <a href="#" class="btn btn-lg btn-primary" style="height: 100px; width 150px; margin-right:20px; margin-top: 10px;" ><br/>Kandidat Pekerja Perempuan <br>
          <?php echo $data_p; ?></a>  

          <a href="#" class="btn btn-lg btn-primary" style="height: 100px; width 150px; margin-right:20px; margin-top: 10px;" ><br/>Total Kandidat Pekerja<br>
          <?php echo $data_k; ?></a> 
          
          <!-- <a href="input-transaksi-keluar.php" class="btn btn-lg btn-danger" style="height: 100px; width 150px; margin-right:20px; margin-top: 10px;" ><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Transaksi Keluar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>  -->
          
          <br/><br/>
          <!-- DataTales Example -->


        </div>
        <!-- /.container-fluid -->
        <div class="container-fluid">
          <a href="#" class="btn btn-lg btn-success" style="height: 100px; width 150px; margin-right:20px; margin-top: 10px;" ><br/>Kandidat Pekerja Lulusan SMA <br>
          <?php echo $data_sma; ?></a> 

          <a href="#" class="btn btn-lg btn-info" style="height: 100px; width 150px; margin-right:20px; margin-top: 10px;" ><br/>Kandidat Pekerja Lulusan SMK <br>
          <?php echo $data_smk; ?></a> 

          <a href="#" class="btn btn-lg btn-warning" style="height: 100px; width 150px; margin-right:20px; margin-top: 10px;" ><br/>Kandidat Pekerja Lulusan D3 <br>
          <?php echo $data_d3; ?></a> 

          <a href="#" class="btn btn-lg btn-danger" style="height: 100px; width 150px; margin-right:20px; margin-top: 10px;" ><br/>Kandidat Pekerja Lulusan S1 <br>
          <?php echo $data_s1; ?></a> 

        </div>

      </br>
      
      <div class="container-fluid">
        <p class="mb-4">Data Ukuran Seragam </p>
          <a href="#" class="btn btn-lg btn-success" style="height: 100px; width 150px; margin-right:20px; margin-top: 10px;" ><br/> Seragam (S) <br>
          <?php echo $data_s; ?></a> 

          <a href="#" class="btn btn-lg btn-success" style="height: 100px; width 150px; margin-right:20px; margin-top: 10px;" ><br/> Seragam (M) <br>
          <?php echo $data_m; ?></a> 

          <a href="#" class="btn btn-lg btn-success" style="height: 100px; width 150px; margin-right:20px; margin-top: 10px;" ><br/> Seragam (L)<br>
          <?php echo $data_l; ?></a> 

          <a href="#" class="btn btn-lg btn-success" style="height: 100px; width 150px; margin-right:20px; margin-top: 10px;" ><br/> Seragam (XL) <br>
          <?php echo $data_xl; ?></a> 

      </div>
        
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
						url :"ajax-data-user.php", // json datasource
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
