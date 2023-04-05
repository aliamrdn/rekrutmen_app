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
          <h1 class="h3 mb-2 text-gray-800">Kebutuhan Rekrutmen (Data PKWT)</h1>
          <p class="mb-4">Rekrutmen <sup>App</sup></p>
          <?php
                if(isset($_POST['simpan'])){

                $tanggal        = $_POST['date'];
                $n_k         = $_POST['n_k'];
                $pkwt1         = $_POST['pkwt1']*0.1;
                $pkwt2         = $_POST['pkwt2'];
                $ttl_kbthn         = $_POST['n_k']+$_POST['pkwt1']+$_POST['pkwt2'];
                $ttl_kbthnx2    = $ttl_kbthn*2;
                $jenis_kelamin      = $_POST['jenis_kelamin'];

                    $insert = mysqli_query($koneksi, "INSERT INTO transaksi(tgl_data,n_k,k1,k2,jenis_kelamin,qty_x2,jmlh)
                     VALUES('$tanggal', '$n_k', '$pkwt1', '$pkwt2','$jenis_kelamin','$ttl_kbthnx2','$ttl_kbthn')") or die(mysqli_error($koneksi));

                     if($insert){
                          echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil disimpan.</div>';
				       }else{
					      echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal disimpan, silahkan coba lagi.</div>';
                       }
                }

                ?>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Input Kebutuhan Rekrutmen</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <form class="form-horizontal style-form" action="input-transaksi-keluar.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                          
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tanggal : </label>
                              <div class="col-sm-3">
                                  <input name="date" type="date" id="date" class="form-control" placeholder="Date" autocomplete="off" required/>
                              </div>
                          </div>

                          <!-- <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Jumlah Kebutuhan</label>
                              <div class="col-sm-2">
                                  <input name="qty" type="number" id="qty" class="form-control" placeholder="jumlah kebutuhan" autocomplete="off" required="required" />
                              </div>
                          </div> -->

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Jenis Kelamin</label>
                              <div class="col-sm-2">
                                  <select name="jenis_kelamin" id="jenis_kelamin" autocomplete="off" >
                                    <option value="" selected>--pilih--</option>
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                  </select>
                                </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">NEW :</label>
                              <div class="col-sm-2">
                                  <input name="n_k" type="number" id="n_k" class="form-control" placeholder="jumlah kebutuhan" autocomplete="off" required="required" />
                              </div>
                          </div>
                          
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">PKWT 1 :</label>
                              <div class="col-sm-2">
                                  <input name="pkwt1" type="number" id="pkwt1" class="form-control" placeholder="jumlah kebutuhan" autocomplete="off" required="required" />
                              </div>
                          </div>
                          
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">PKWT 2 :</label>
                              <div class="col-sm-2">
                                  <input name="pkwt2" type="number" id="pkwt2" class="form-control" placeholder="jumlah kebutuhan" autocomplete="off" required="required" />
                              </div>
                          </div>


                          <!-- <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Jenis Kebutuhan</label>
                              <div class="col-sm-2">
                                  <select name="jenis_kebutuhan" id="jenis_kebutuhan" autocomplete="off" >
                                    <option value="" selected>--pilih--</option>
                                    <option value="NEW">NEW</option>
                                    <option value="K1">K1</option>
                                    <option value="K2">K2</option>
                                  </select>
                                </div>
                          </div> -->
                          
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-10">
                                  <input type="submit" name="simpan" value="Simpan" class="btn btn-sm btn-primary" />&nbsp;
	                              <a href="transaksi.php" class="btn btn-sm btn-danger">Batal </a>
                              </div>
                          </div>
                      </form>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
  <?php include "footer.php"; ?>
<!-- Modal -->

        <script type="text/javascript">

        </script>
</body>

</html>
