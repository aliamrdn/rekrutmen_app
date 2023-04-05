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
          <h1 class="h3 mb-2 text-gray-800">OJT</h1>
          <p class="mb-4">Rekrutmen <sup>App</sup></p>
          <?php
            $kd = $_GET['id'];
			$sql = mysqli_query($koneksi, "SELECT * FROM pekerja WHERE id_c_pekerja='$kd'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: master.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			if(isset($_POST['update'])){
            $id_c_pekerja     = $_POST['id_c_pekerja'];
                $ojt_status = $_POST['ojt_status'];

				
				$update = mysqli_query($koneksi, "UPDATE pekerja SET id_c_pekerja='$id_c_pekerja', ojt_status ='$ojt_status' WHERE id_c_pekerja='$id_c_pekerja'") or die(mysqli_error());
				if($update){
					echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil disimpan.</div>';
				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal disimpan, silahkan coba lagi.</div>';
				}
			}
			
			//if(isset($_GET['pesan']) == 'sukses'){
			//	echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil disimpan.</div>';
			//}
			?>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data OJT Rekrutmen</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <form class="form-horizontal style-form" action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
              <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Id Calon Pekerja</label>
                              <div class="col-sm-6">
                                  <input name="id_c_pekerja" type="text" id="id_c_pekerja" class="form-control" value="<?php echo $row['id_c_pekerja']; ?>"  placeholder="Tidak perlu di isi" autofocus="on" required readonly />
                            </div>
                          </div>
                          

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Status OJT : </label>
                              <div class="col-sm-6">
                                  <!-- <input name="jenis_kelamin" type="text" id="jenis_kelamin" class="form-control" value="<?php echo $row['ojt_status']; ?>" placeholder="ojt_status" autocomplete="off"  /> -->
                                  <select name="ojt_status" id="ojt_status" autocomplete="off" >
                                    <option value="" selected>--pilih--</option>
                                    <option value="0">stok</option>
                                    <option value="1">go ojt</option>
                                  </select>
                                </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-10">
                                  <input type="submit" name="update" value="Update" class="btn btn-sm btn-primary" />&nbsp;
	                              <a href="master.php" class="btn btn-sm btn-danger">Batal </a>
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
