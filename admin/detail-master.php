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
          <h1 class="h3 mb-2 text-gray-800">Data Pekerja</h1>
          <p class="mb-4">Rekrutmen <sup>App</sup></p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Cetak </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <?php include "../phpqrcode/qrlib.php"; ?>
              <?php
            $no = 1;
            $query = mysqli_query($koneksi, "SELECT * FROM pekerja WHERE id_c_pekerja='$_GET[id]'");
            $data  = mysqli_fetch_array($query);
            ?>
            <div class="text-right">
                  <!-- <a href="javascript:printDiv('print-area-2');" class="btn btn-sm btn-danger" >Cetak  <i class="fa fa-print"></i></a> -->
              
                </div>
                 <div class="print-area table-responsif" id="print-area-2">
                <table border="1">
                <tr>
                  <th>No</th>

                  <th>Barcode</th>

                  <th>id calon pekerja</th>

                  <th>Nama</th>

                  <th>no ktp</th>

                  <th>jenis kelamin</th>

                  <th>alamat</th>

                  <th>agama</th>

                  <th>status kawin</th>

                  <th>tgl rekrut</th>

                  <th>tmpt tgl lahir</th>

                  <th>negara</th>

                  <th>pendidikan</th>

                  <th>gol darah</th>

                  <th>no telp</th>

                  <th>nm ibu kdg</th>

                  <th>nm saudara kdg</th>

                  <th>no kontak drt</th>

                  <th>no npwp</th>

                  <th>email</th>

                  <th>ukr seragam</th>

                  <th>ukr sepatu</th>

                  <th>tinggi badan</th>

                  <th>berat badan</th>

                  <th>rute jemputan</th>

                  <th>titik jemput</th>

                  <th>nilai test</th>

                  <th>hasil mcu</th>

                  <th>hasil pcr</th>

                </tr>
  

                      <td><?php echo $no++; ?></td>                    
                      <td><?php QRcode::png("$_GET[id]", "../png/$_GET[id].png", "L", 2, 2); ?><?php echo "<img src='../png/$_GET[id].png' /><br/>" ?>
                      </td>
                      
  
                      <td><?php echo $data['id_c_pekerja']; ?></td>
                     

                     
                      <td><?php echo $data['nama_pekerja']; ?></td>
                     
                     
                     <td><?php echo $data['no_ktp']; ?></td>
                    
                      
                     <td><?php echo $data['jenis_kelamin']; ?></td>
                    
                      
                     <td><?php echo $data['alamat']; ?></td>
                    
                      
                     <td><?php echo $data['agama']; ?></td>
                    
                    
                  <td><?php echo $data["status_kawin"]; ?></td>
                  
                    
                  <td><?php echo $data["tgl_rekrut"]; ?></td>
                  
                    
                  <td><?php echo $data["tmpt_tgl_lahir"]; ?></td>
                  
                    
                  <td><?php echo $data["negara"]; ?></td>
                  
                    
                  <td><?php echo $data["pendidikan"]; ?></td>
                  
                    
                  <td><?php echo $data["gol_darah"]; ?></td>
                  
                    
                  <td><?php echo $data["no_telp"]; ?></td>
                  
                    
                  <td><?php echo $data["nm_ibu_kdg"]; ?></td>
                  
                    
                  <td><?php echo $data["nm_saudara_kdg"]; ?></td>
                  
                    
                  <td><?php echo $data["no_kontak_drt"]; ?></td>
                  
                    
                  <td><?php echo $data["no_npwp"]; ?></td>
                  
                    
                  <td><?php echo $data["email"]; ?></td>
                  
                    
                  <td><?php echo $data["ukr_seragam"]; ?></td>
                  
                    
                  <td><?php echo $data["ukr_sepatu"]; ?></td>
                  
                    
                  <td><?php echo $data["tinggi_badan"]; ?></td>
                  
                    
                  <td><?php echo $data["berat_badan"]; ?></td>
                  
                    
                  <td><?php echo $data["rute_jemputan"]; ?></td>
                  
                    
                  <td><?php echo $data["titik_jemput"]; ?></td>
                  
                    
                  <td><?php echo $data["nilai_test"]; ?></td>
                  
                    
                  <td><?php echo $data["hasil_mcu"]; ?></td>
                  
                    
                  <td><?php echo $data["hasil_pcr"]; ?></td>
                  
                   
                    </table>

  </div>
   <iframe id="printing-frame" name="print_frame" src="about:blank" style="display:none;"></iframe>
   
    <div class="text-left">
                  <a href="javascript:printDiv('print-area-2');" class="btn btn-sm btn-danger" >Cetak  <i class="fa fa-print"></i></a>
              
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
  <?php include "footer.php"; ?>
  <script type="text/javascript">
     
     function printDiv(elementId) {
    var a = document.getElementById('print-area-2').value;
    var b = document.getElementById(elementId).innerHTML;
    window.frames["print_frame"].document.title = document.title;
    window.frames["print_frame"].document.body.innerHTML = '<style>' + a + '</style>' + b;
    window.frames["print_frame"].window.focus();
    window.frames["print_frame"].window.print();
}
</script>
</body>

</html>
