<?php include "session.php"; ?>
<?php 
 $n_DATE = date("Y-m-d");
          $bulan = date("m");
          $CREATE_DATE = date("Y");
?>
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
          $cek_k = mysqli_query($koneksi, "SELECT COUNT(ojt_status) FROM pekerja");
          $row_k = mysqli_fetch_array($cek_k);
          $data_k = ceil($row_k[0]);
          
          $cek_l = mysqli_query($koneksi, "SELECT COUNT(ojt_status) FROM pekerja WHERE ojt_status = '0' ");
          $row_l = mysqli_fetch_array($cek_l);
          $data_l = ceil($row_l[0]);

          $cek_p = mysqli_query($koneksi, "SELECT COUNT(ojt_status) FROM pekerja WHERE ojt_status = '1' ");
          $row_p = mysqli_fetch_array($cek_p);
          $data_p = ceil($row_p[0]);
          
        ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">
         <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Report Pekerja</h1>
          <p class="mb-4">Rekrutmen <sup>App</sup></p>
          <!-- <a href="404.php" class="btn btn-lg btn-success" style="height: 100px; width 150px; margin-right:20px; margin-top: 10px;" ><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Transaksi Masuk&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>  -->
          
          <a href="#" class="btn btn-lg btn-danger" style="height: 100px; width 150px; margin-right:20px; margin-top: 10px;" ><br/>Total Data Pekerja <br>
          <?php echo $data_k; ?></a>  

          <a href="#" class="btn btn-lg btn-primary" style="height: 100px; width 150px; margin-right:20px; margin-top: 10px;" ><br/>Stok Pekerja <br>
          <?php echo $data_l; ?></a> 

          <a href="#" class="btn btn-lg btn-warning" style="height: 100px; width 150px; margin-right:20px; margin-top: 10px;" ><br/>OJT Pekerja <br>
          <?php echo $data_p; ?></a>  

          
          <!-- <a href="input-transaksi-keluar.php" class="btn btn-lg btn-danger" style="height: 100px; width 150px; margin-right:20px; margin-top: 10px;" ><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Transaksi Keluar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>  -->
          
          <br/><br/>
          <!-- DataTales Example -->


        </div>
        <!-- /.container-fluid -->

        </div>

              <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Report Pekerja</h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <a href="export_all.php" class="btn btn-sm btn-primary">Export Data </a><br/><br/>
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

              <th>Status Pekerja</th>

              </tr>
              </thead>
              <tbody>


              </tbody>
              </table>  
                </div>
              </div>
              </div>


    <?php include "footer.php"; ?>
  </body>
      <!-- End of Main Content -->

      <!-- Footer -->
  

    <script>
        $(document).ready(function() {
        var dataTable = $('#lookup').DataTable( {
          "processing": true,
          "serverSide": true,
          "ajax":{
            url :"ajax-data-report.php", // json datasource
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
