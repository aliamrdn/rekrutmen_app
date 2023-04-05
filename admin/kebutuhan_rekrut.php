<?php include "session.php"; ?>
<!DOCTYPE html>
<html lang="en">

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  .shadowbox{
  box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
}

.card-lienar{
  background: rgb(14,227,250);
background: linear-gradient(90deg, rgba(14,227,250,1) 0%, rgba(24,77,148,1) 35%, rgba(0,0,91,1) 100%);

}
.vertical-menu {
  width: 200px;
}

.vertical-menu a {
  background-color: #eee;
  color: black;
  display: block;
  padding: 12px;
  text-decoration: none;
}

.vertical-menu a:hover {
  background-color: #ccc;
}

.vertical-menu a.active {
  background-color: #04AA6D;
  color: white;
}

.buttonload {
  background-color: #04AA6D; /* Green background */
  border: none; /* Remove borders */
  color: white; /* White text */
  padding: 12px 16px; /* Some padding */
  font-size: 16px /* Set a font size */
}

.btn-group button {
  background-color: #04AA6D; /* Green background */
  border: 1px solid green; /* Green border */
  color: white; /* White text */
  padding: 10px 24px; /* Some padding */
  cursor: pointer; /* Pointer/hand icon */
  width: 50%; /* Set a width if needed */
  display: block; /* Make the buttons appear below each other */
}

.btn-group button:not(:last-child) {
  border-bottom: none; /* Prevent double borders */
}

/* Add a background color on hover */
.btn-group button:hover {
  background-color: #3e8e41;
}
</style>

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
        $n_DATE = date("Y-m-d");
          $bulan = date("m");
          $CREATE_DATE = date("Y");


          $cek_thn = mysqli_query($koneksi, "SELECT SUM(qty_x2) FROM transaksi WHERE tgl_data like '%".$CREATE_DATE."%' ");
          $row_l = mysqli_fetch_array($cek_thn);
          $data_thn = ceil($row_l[0]);

          $cek_thn = mysqli_query($koneksi, "SELECT SUM(qty_x2) FROM transaksi WHERE tgl_data like '%".$CREATE_DATE."%' ");
          $row_l = mysqli_fetch_array($cek_thn);
          $data_thn = ceil($row_l[0]);

          $cek_thnl = mysqli_query($koneksi, "SELECT SUM(qty_x2) FROM transaksi WHERE tgl_data like '%".$CREATE_DATE."%' and jenis_kelamin = 'L' ");
          $row_ll = mysqli_fetch_array($cek_thnl);
          $data_thnl = ceil($row_ll[0]);

          $cek_thnp = mysqli_query($koneksi, "SELECT SUM(qty_x2) FROM transaksi WHERE tgl_data like '%".$CREATE_DATE."%' and jenis_kelamin = 'P' ");
          $row_lp = mysqli_fetch_array($cek_thnp);
          $data_thnp = ceil($row_lp[0]);

          
          $cek_thn1 = mysqli_query($koneksi, "SELECT SUM(qty_x2) FROM transaksi WHERE tgl_data like '%2023%' ");
          $row_l1 = mysqli_fetch_array($cek_thn1);
          $data_thn1 = ceil($row_l1[0]);


          $bulan_1 = mysqli_query($koneksi, "SELECT SUM(qty_x2) FROM transaksi WHERE tgl_data like '%".$CREATE_DATE."-01-%' and jenis_kelamin = 'L'");
          $row_b1 = mysqli_fetch_array($bulan_1);
          $data_b1 = ceil($row_b1[0]);
          $bulan_1 = mysqli_query($koneksi, "SELECT SUM(qty_x2) FROM transaksi WHERE tgl_data like '%".$CREATE_DATE."-01-%' and jenis_kelamin = 'P'");
          $row_b1P = mysqli_fetch_array($bulan_1);
          $data_b1P = ceil($row_b1P[0]);

          $bulan_2 = mysqli_query($koneksi, "SELECT SUM(qty_x2) FROM transaksi WHERE tgl_data like '%".$CREATE_DATE."-02-%' and jenis_kelamin = 'L'");
          $row_b2 = mysqli_fetch_array($bulan_2);
          $data_b2 = ceil($row_b2[0]);
          $bulan_2p = mysqli_query($koneksi, "SELECT SUM(qty_x2) FROM transaksi WHERE tgl_data like '%".$CREATE_DATE."-02-%' and jenis_kelamin = 'P'");
          $row_b2p = mysqli_fetch_array($bulan_2p);
          $data_b2p = ceil($row_b2p[0]);
          
          $bulan_3 = mysqli_query($koneksi, "SELECT SUM(qty_x2) FROM transaksi WHERE tgl_data like '%".$CREATE_DATE."-03-%' and jenis_kelamin = 'L'");
          $row_b3 = mysqli_fetch_array($bulan_3);
          $data_b3 = ceil($row_b3[0]);
          $bulan_3p = mysqli_query($koneksi, "SELECT SUM(qty_x2) FROM transaksi WHERE tgl_data like '%".$CREATE_DATE."-03-%' and jenis_kelamin = 'P'");
          $row_b3p = mysqli_fetch_array($bulan_3p);
          $data_b3p = ceil($row_b3p[0]);

          $bulan_4 = mysqli_query($koneksi, "SELECT SUM(qty_x2) FROM transaksi WHERE tgl_data like '%".$CREATE_DATE."-04-%' and jenis_kelamin = 'L'");
          $row_b4 = mysqli_fetch_array($bulan_4);
          $data_b4 = ceil($row_b4[0]);
          $bulan_4P = mysqli_query($koneksi, "SELECT SUM(qty_x2) FROM transaksi WHERE tgl_data like '%".$CREATE_DATE."-04-%' and jenis_kelamin = 'P'");
          $row_b4P = mysqli_fetch_array($bulan_4);
          $data_b4P = ceil($row_b4P[0]);

          $bulan_5 = mysqli_query($koneksi, "SELECT SUM(qty_x2) FROM transaksi WHERE tgl_data like '%".$CREATE_DATE."-05-%' and jenis_kelamin = 'L'");
          $row_b5 = mysqli_fetch_array($bulan_5);
          $data_b5 = ceil($row_b5[0]);
          $bulan_5P = mysqli_query($koneksi, "SELECT SUM(qty_x2) FROM transaksi WHERE tgl_data like '%".$CREATE_DATE."-05-%' and jenis_kelamin = 'P'");
          $row_b5P = mysqli_fetch_array($bulan_5P);
          $data_b5P = ceil($row_b5P[0]);

          $bulan_6 = mysqli_query($koneksi, "SELECT SUM(qty_x2) FROM transaksi WHERE tgl_data like '%".$CREATE_DATE."-06-%' and jenis_kelamin = 'L'");
          $row_b6 = mysqli_fetch_array($bulan_6);
          $data_b6 = ceil($row_b6[0]);
          $bulan_6P = mysqli_query($koneksi, "SELECT SUM(qty_x2) FROM transaksi WHERE tgl_data like '%".$CREATE_DATE."-06-%' and jenis_kelamin = 'P'");
          $row_b6P = mysqli_fetch_array($bulan_6P);
          $data_b6P = ceil($row_b6P[0]);

          $bulan_7 = mysqli_query($koneksi, "SELECT SUM(qty_x2) FROM transaksi WHERE tgl_data like '%".$CREATE_DATE."-07-%' and jenis_kelamin = 'L'");
          $row_b7 = mysqli_fetch_array($bulan_7);
          $data_b7 = ceil($row_b7[0]);
          $bulan_7p = mysqli_query($koneksi, "SELECT SUM(qty_x2) FROM transaksi WHERE tgl_data like '%".$CREATE_DATE."-07-%' and jenis_kelamin = 'p'");
          $row_b7p = mysqli_fetch_array($bulan_7p);
          $data_b7p = ceil($row_b7[0]);

          $bulan_8 = mysqli_query($koneksi, "SELECT SUM(qty_x2) FROM transaksi WHERE tgl_data like '%".$CREATE_DATE."-08-%' and jenis_kelamin = 'L'");
          $row_b8 = mysqli_fetch_array($bulan_8);
          $data_b8 = ceil($row_b8[0]);
          $bulan_8p = mysqli_query($koneksi, "SELECT SUM(qty_x2) FROM transaksi WHERE tgl_data like '%".$CREATE_DATE."-08-%' and jenis_kelamin = 'P'");
          $row_b8p = mysqli_fetch_array($bulan_8p);
          $data_b8p = ceil($row_b8[0]);

          $bulan_9 = mysqli_query($koneksi, "SELECT SUM(qty_x2) FROM transaksi WHERE tgl_data like '%".$CREATE_DATE."-09-%' and jenis_kelamin = 'L'");
          $row_b9 = mysqli_fetch_array($bulan_9);
          $data_b9 = ceil($row_b9[0]);
          $bulan_9p = mysqli_query($koneksi, "SELECT SUM(qty_x2) FROM transaksi WHERE tgl_data like '%".$CREATE_DATE."-09-%' and jenis_kelamin = 'L'");
          $row_b9p = mysqli_fetch_array($bulan_9p);
          $data_b9p = ceil($row_b9p[0]);

          $bulan_10 = mysqli_query($koneksi, "SELECT SUM(qty_x2) FROM transaksi WHERE tgl_data like '%".$CREATE_DATE."-10-%' and jenis_kelamin = 'L'");
          $row_b10 = mysqli_fetch_array($bulan_10);
          $data_b10 = ceil($row_b10[0]);
          $bulan_10p = mysqli_query($koneksi, "SELECT SUM(qty_x2) FROM transaksi WHERE tgl_data like '%".$CREATE_DATE."-10-%' and jenis_kelamin = 'P'");
          $row_b10p = mysqli_fetch_array($bulan_10p);
          $data_b10p = ceil($row_b10p[0]);

          $bulan_11 = mysqli_query($koneksi, "SELECT SUM(qty_x2) FROM transaksi WHERE tgl_data like '%".$CREATE_DATE."-11-%' and jenis_kelamin = 'L'");
          $row_b11 = mysqli_fetch_array($bulan_11);
          $data_b11 = ceil($row_b11[0]);
          $bulan_11p = mysqli_query($koneksi, "SELECT SUM(qty_x2) FROM transaksi WHERE tgl_data like '%".$CREATE_DATE."-11-%' and jenis_kelamin = 'P'");
          $row_b11p = mysqli_fetch_array($bulan_11p);
          $data_b11p = ceil($row_b11p[0]);

          $bulan_12 = mysqli_query($koneksi, "SELECT SUM(qty_x2) FROM transaksi WHERE tgl_data like '%".$CREATE_DATE."-12-%' and jenis_kelamin = 'L'");
          $row_b12 = mysqli_fetch_array($bulan_12);
          $data_b12 = ceil($row_b12[0]);
          $bulan_12p = mysqli_query($koneksi, "SELECT SUM(qty_x2) FROM transaksi WHERE tgl_data like '%".$CREATE_DATE."-12-%' and jenis_kelamin = 'P'");
          $row_b12p = mysqli_fetch_array($bulan_12);
          $data_b12p = ceil($row_b12p[0]);
          // $cek_p = mysqli_query($koneksi, "SELECT COUNT(jenis_kelamin) FROM pekerja WHERE jenis_kelamin = 'P'");
          // $row_p = mysqli_fetch_array($cek_p);
          // $data_p = ceil($row_p[0]);
          
          // $cek_sma = mysqli_query($koneksi, "SELECT COUNT(pendidikan) FROM pekerja WHERE pendidikan = 'SMA'");
          // $row_sma = mysqli_fetch_array($cek_sma);
          // $data_sma = ceil($row_sma[0]);

          
          $b1 = mysqli_query($koneksi, "SELECT SUM(qty_x2) FROM transaksi WHERE tgl_data like '%".$CREATE_DATE."-01-%'");
          $r1 = mysqli_fetch_array($b1);
          $d1 = ceil($r1[0]);
          
          $b2 = mysqli_query($koneksi, "SELECT SUM(qty_x2) FROM transaksi WHERE tgl_data like '%".$CREATE_DATE."-02-%'");
          $r2 = mysqli_fetch_array($b2);
          $d2= ceil($r2[0]);
          
          
          $b3 = mysqli_query($koneksi, "SELECT SUM(qty_x2) FROM transaksi WHERE tgl_data like '%".$CREATE_DATE."-03-%'");
          $r3 = mysqli_fetch_array($b3);
          $d3= ceil($r3[0]);
          

          $b4 = mysqli_query($koneksi, "SELECT SUM(qty_x2) FROM transaksi WHERE tgl_data like '%".$CREATE_DATE."-04-%'");
          $r4 = mysqli_fetch_array($b4);
          $d4= ceil($r4[0]);
          

          $b5 = mysqli_query($koneksi, "SELECT SUM(qty_x2) FROM transaksi WHERE tgl_data like '%".$CREATE_DATE."-05-%'");
          $r5 = mysqli_fetch_array($b5);
          $d5= ceil($r5[0]);
          

          $b6 = mysqli_query($koneksi, "SELECT SUM(qty_x2) FROM transaksi WHERE tgl_data like '%".$CREATE_DATE."-06-%'");
          $r6 = mysqli_fetch_array($b6);
          $d6= ceil($r6[0]);
          
          $b7 = mysqli_query($koneksi, "SELECT SUM(qty_x2) FROM transaksi WHERE tgl_data like '%".$CREATE_DATE."-07-%'");
          $r7 = mysqli_fetch_array($b7);
          $d7= ceil($r7[0]);
        

          $b8 = mysqli_query($koneksi, "SELECT SUM(qty_x2) FROM transaksi WHERE tgl_data like '%".$CREATE_DATE."-08-%'");
          $r8 = mysqli_fetch_array($b8);
          $d8= ceil($r8[0]);
         
          $b9 = mysqli_query($koneksi, "SELECT SUM(qty_x2) FROM transaksi WHERE tgl_data like '%".$CREATE_DATE."-09-%'");
          $r9 = mysqli_fetch_array($b9);
          $d9= ceil($r9[0]);
         
          $b10 = mysqli_query($koneksi, "SELECT SUM(qty_x2) FROM transaksi WHERE tgl_data like '%".$CREATE_DATE."-10-%'");
          $r10 = mysqli_fetch_array($b10);
          $d10 = ceil($r10[0]);
          
          $b11 = mysqli_query($koneksi, "SELECT SUM(qty_x2) FROM transaksi WHERE tgl_data like '%".$CREATE_DATE."-11-%'");
          $r11 = mysqli_fetch_array($b11);
          $d11 = ceil($r11[0]);
          
          $b12 = mysqli_query($koneksi, "SELECT SUM(qty_x2) FROM transaksi WHERE tgl_data like '%".$CREATE_DATE."-12-%'");
          $r12 = mysqli_fetch_array($b12);
          $d12 = ceil($r12[0]);
         
        ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          
        
          <div class="container-fluid">
        
          <h1 class="h3 mb-2 text-gray-800">Report Kebutuhan</h1>
          <p class="mb-4">Akumulasi Tahun</p>
          <!-- <?php if ($n_DATE == $n_DATE){ ?>
          <a href="#" class="btn btn-lg btn-primary" style="height: 100px; width 150px; margin-right:20px; margin-top: 10px;" ><br/> Tahun <?php echo $CREATE_DATE; ?><br>
          <?php echo $data_thn; ?> </br> L : <?php echo $data_thnl; ?> P : <?php echo $data_thnp; ?>  </a> 
          <a href="#" class="btn btn-lg btn-success" style="height: 100px; width 150px; margin-right:20px; margin-top: 10px;" ><br/> Pekerja Laki-Laki<br>
          <?php echo $data_thnl; ?> </a> <a href="#" class="btn btn-lg btn-success" style="height: 100px; width 150px; margin-right:20px; margin-top: 10px;" ><br/> Pekerja Perempuan <br>
          <?php echo $data_thnp; ?> 
          </a> 
          <?php }else{ ?>
            <a href="#" class="btn btn-lg btn-primary" style="height: 100px; width 150px; margin-right:20px; margin-top: 10px;" ><br/> Tahun 2023<br>
            <?php echo $data_thn1; ?> </a>
         <?php } ?> -->

          </div>
          <div class="container-fluid">
          
          <div class="vertical-menu">
            <a href="#" class="active">Tahun <?php echo $CREATE_DATE; ?></a>
            <a > Laki-Laki : <?php echo $data_thnl; ?></a>
            <a > Perempuan : <?php echo $data_thnp; ?></a>
          </div>
          </div>

          </br>
          <div class="container-fluid">
          <p class="mb-4">Akumulasi Bulan</p>
          
          <a href="#" class="btn btn-lg btn-info" style="height: 100px; width 200px; margin-right:20px; margin-top: 10px;" >januari:
          <?php echo $d1; ?> <br>L : <?php echo $data_b1; ?> </br> P : <?php echo $data_b1P; ?> </a>
        
          <a href="#" class="btn btn-lg btn-info" style="height: 100px; width 150px; margin-right:20px; margin-top: 10px;" >februari:
          <?php echo $d2; ?> <br>L : <?php echo $data_b2; ?> </br> P : <?php echo $data_b2p; ?> </a> 
          
          <a href="#" class="btn btn-lg btn-info" style="height: 100px; width 150px; margin-right:20px; margin-top: 10px;" >maret:
          <?php echo $d3; ?> <br>L : <?php echo $data_b3; ?> </br> P : <?php echo $data_b3p; ?> </a> 

          <a href="#" class="btn btn-lg btn-info" style="height: 100px; width 150px; margin-right:20px; margin-top: 10px;" >april:
          <?php echo $d4; ?> <br>L : <?php echo $data_b4; ?> </br> P : <?php echo $data_b4P; ?> </a> 
          
          <a href="#" class="btn btn-lg btn-info" style="height: 100px; width 150px; margin-right:20px; margin-top: 10px;" >mei:
          <?php echo $d5; ?> <br>L : <?php echo $data_b5; ?> </br> P : <?php echo $data_b5P; ?> </a> 
          
          <a href="#" class="btn btn-lg btn-info" style="height: 100px; width 150px; margin-right:20px; margin-top: 10px;" >juni:
          <?php echo $d6; ?> <br>L : <?php echo $data_b6; ?> </br> P : <?php echo $data_b6P; ?> </a> 

          <a href="#" class="btn btn-lg btn-info" style="height: 100px; width 150px; margin-right:20px; margin-top: 10px;" >juli:
          <?php echo $d7; ?> <br>L : <?php echo $data_b7; ?> </br> P : <?php echo $data_b7p; ?> </a> 

          <a href="#" class="btn btn-lg btn-info" style="height: 100px; width 150px; margin-right:20px; margin-top: 10px;" >agustus:
          <?php echo $d8; ?> <br>L : <?php echo $data_b8; ?> </br> P : <?php echo $data_b8p; ?> </a> 

          <a href="#" class="btn btn-lg btn-info" style="height: 100px; width 150px; margin-right:20px; margin-top: 10px;" >september:
          <?php echo $d9; ?> <br>L : <?php echo $data_b9; ?> </br> P : <?php echo $data_b9p; ?> </a> 

          <a href="#" class="btn btn-lg btn-info" style="height: 100px; width 150px; margin-right:20px; margin-top: 10px;" >oktober:
          <?php echo $d10; ?> <br>L : <?php echo $data_b10; ?> </br> P : <?php echo $data_b10p; ?> </a> 

          <a href="#" class="btn btn-lg btn-info" style="height: 100px; width 150px; margin-right:20px; margin-top: 10px;" >november:
          <?php echo $d11; ?> <br>L : <?php echo $data_b11; ?> </br> P : <?php echo $data_b11p; ?> </a>

          <a href="#" class="btn btn-lg btn-info" style="height: 100px; width 150px; margin-right:20px; margin-top: 10px;" >desember:
          <?php echo $d12; ?> <br>L : <?php echo $data_b12; ?> </br> P : <?php echo $data_b12p; ?> </a> 


        </div>
          <!-- <a href="input-transaksi-keluar.php" class="btn btn-lg btn-danger" style="height: 100px; width 150px; margin-right:20px; margin-top: 10px;" ><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Transaksi Keluar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>  -->
          
          <br/><br/>
          <!-- DataTales Example -->


        
        <!-- /.container-fluid -->
        
      </br>
      
        
      </div>


        </div>
        <!-- /.container-fluid -->
 <?php include "footer.php"; ?>
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
 

  <script>
        $(document).ready(function() {
				var dataTable = $('#lookup').DataTable( {
					"processing": true,
					"serverSide": true,
					"ajax":{
						url :"ajax-data-transaksi-ex.php", // json datasource
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
