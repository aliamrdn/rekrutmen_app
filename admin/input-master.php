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
          <h1 class="h3 mb-2 text-gray-800">Master Calon Pekerja</h1>
          <p class="mb-4">Rekrutmen <sup>App</sup></p>
          <?php
        if(isset($_POST['simpan'])){
        $id_c_pekerja     = $_POST['id_c_pekerja'];
        $nama_pekerja   = $_POST['nama_pekerja'];
        $no_ktp  = $_POST['no_ktp'];
        $jenis_kelamin      = $_POST['jenis_kelamin'];
        $alamat           = $_POST['alamat'];
        $agama        = $_POST['agama'];
        $status_kawin        = $_POST['status_kawin'];
        $tgl_rekrut        = $_POST['date'];
        $tmpt_tgl_lahir = $_POST['tmpt_tgl_lahir'];
        $negara = $_POST['negara'];
        $pendidikan = $_POST['pendidikan'];
        $gol_darah = $_POST['gol_darah'];
        $no_telp = $_POST['no_telp'];
        $nm_ibu_kdg = $_POST['nm_ibu_kdg'];
        $nm_saudara_kdg = $_POST['nm_saudara_kdg'];
        $no_kontak_drt = $_POST['no_kontak_drt'];
        $no_npwp = $_POST['no_npwp'];
        $email = $_POST['email'];
        $ukr_baju = $_POST['ukr_baju'];
        $ukr_sepatu = $_POST['ukr_sepatu'];
        $tinggi_badan = $_POST['tinggi_badan'];
        $berat_badan = $_POST['berat_badan'];
        $rute_jemputan = $_POST['rute_jemputan'];
        $titik_jemput = $_POST['titik_jemput'];
        $nilai_test = $_POST['nilai_test'];
        $hasil_mcu = $_POST['hasil_mcu'];
        $hasil_pcr = $_POST['hasil_pcr'];


        $query = mysqli_query($koneksi, "INSERT INTO pekerja (id_c_pekerja,nama_pekerja,no_ktp,jenis_kelamin,alamat,agama,status_kawin,tgl_rekrut,tmpt_tgl_lahir,negara,pendidikan,gol_darah,no_telp,nm_ibu_kdg,nm_saudara_kdg,no_kontak_drt,no_npwp,email,ukr_seragam,ukr_sepatu,tinggi_badan,berat_badan,rute_jemputan,titik_jemput,nilai_test,hasil_mcu,hasil_pcr) VALUES ( '$id_c_pekerja','$nama_pekerja','$no_ktp','$jenis_kelamin','$alamat','$agama','$status_kawin','$tgl_rekrut','$tmpt_tgl_lahir','$negara','$pendidikan','$gol_darah','$no_telp','$nm_ibu_kdg','$nm_saudara_kdg','$no_kontak_drt','$no_npwp','$email','$ukr_baju','$ukr_sepatu','$tinggi_badan','$berat_badan','$rute_jemputan','$titik_jemput','$nilai_test','$hasil_mcu','$hasil_pcr')");
        // $maxid = mysqli_query($koneksi, "SELECT MAX(id_c_pekerja) FROM pekerja");
        if ($query)
        {
	       echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil disimpan.</div>';
			  }else{
				 echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal disimpan, silahkan coba lagi.</div>';
				}
            }
                ?>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Input Master Rekrutmen</h6>
              
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <form class="form-horizontal style-form" action="input-master.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                        
                        <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Id Calon Pekerja</label>
                              <div class="col-sm-6">
                                  <input name="id_c_pekerja" type="text" id="id_c_pekerja" class="form-control" placeholder="Id Calon Pekerja" autocomplete="off" autofocus="on" required />
                            </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama </label>
                              <div class="col-sm-6">
                                  <input name="nama_pekerja" type="text" id="nama_pekerja" class="form-control" placeholder="Nama Pekerja" autocomplete="off" required />
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">No KTP</label>
                              <div class="col-sm-6">
                                  <input name="no_ktp" type="number" id="no_ktp" class="form-control" placeholder="no ktp" autocomplete="off"  required/>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Jenis Kelamin</label>
                              <div class="col-sm-6">
                                  <!-- <input name="jenis_kelamin" type="text" id="jenis_kelamin" class="form-control" placeholder="jenis kelamin" autocomplete="off"  /> -->
                                   <select name="jenis_kelamin" id="jenis_kelamin" autocomplete="off" >
                                    <option value="" selected>--pilih--</option>
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                  </select>
                                </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Alamat</label>
                              <div class="col-sm-6">
                                  <input name="alamat" type="text" id="alamat" class="form-control" placeholder="alamat" autocomplete="off"  />
                              </div>
                          </div>
                          
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Agama</label>
                              <div class="col-sm-6">
                                  <input name="agama" type="text" id="agama" class="form-control" placeholder="agama" autocomplete="off"  />
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Status Kawin</label>
                              <div class="col-sm-6">
                                  <input name="status_kawin" type="text" id="status_kawin" class="form-control" placeholder="status kawin" autocomplete="off"  />
                              </div> 
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tanggal Rekrut</label>
                              <div class="col-sm-3">
                                  <input name="date" type="date" id="date" class="form-control" placeholder="Date" autocomplete="off" required/>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tempat Tanggal Lahir</label>
                              <div class="col-sm-6">
                                  <input name="tmpt_tgl_lahir" type="text" id="tmpt_tgl_lahir" class="form-control" placeholder="tempat, tgl lahir" autocomplete="off"  />
                              </div> 
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Negara</label>
                              <div class="col-sm-6">
                                  <input name="negara" type="text" id="negara" class="form-control" placeholder="negara" autocomplete="off"  />
                              </div> 
                          </div>

                          
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Pendidikan</label>
                              <div class="col-sm-6">
                                  <!-- <input name="pendidikan" type="text" id="pendidikan" class="form-control" placeholder="pendidikan" autocomplete="off"  /> -->
                                <select name="pendidikan" id="pendidikan" autocomplete="off" >
                                    <option value="" selected>--pilih--</option>
                                    <option value="SMK">SMK</option>
                                    <option value="SMA">SMA</option>
                                    <option value="D3">D3</option>
                                    <option value="S1">S1</option>
                                  </select>
                                </div> 
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Golongan Darah</label>
                              <div class="col-sm-6">
                                  <!-- <input name="gol_darah" type="text" id="gol_darah" class="form-control" placeholder="gol darah" autocomplete="off"  /> -->
                                 <select name="gol_darah" id="gol_darah" autocomplete="off" >
                                    <option value="" selected>--pilih--</option>
                                    <option value="O">O</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="AB">AB</option>
                                  </select>
                                </div> 
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">No. Telp</label>
                              <div class="col-sm-6">
                                  <input name="no_telp" type="number" id="no_telp" class="form-control" placeholder="no telp" autocomplete="off"  />
                              </div> 
                          </div>


                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Ibu Kandung</label>
                              <div class="col-sm-6">
                                  <input name="nm_ibu_kdg" type="text" id="nm_ibu_kdg" class="form-control" placeholder="Nama Ibu kandung" autocomplete="off"  />
                              </div> 
                          </div>


                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Saudara Kandung</label>
                              <div class="col-sm-6">
                                  <input name="nm_saudara_kdg" type="text" id="nm_saudara_kdg" class="form-control" placeholder="Nama saudara kandung" autocomplete="off"  />
                              </div> 
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">No Kontak Darurat</label>
                              <div class="col-sm-6">
                                  <input name="no_kontak_drt" type="number" id="no_kontak_drt" class="form-control" placeholder="No kontak darurat" autocomplete="off"  />
                              </div> 
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">No NPWP</label>
                              <div class="col-sm-6">
                                  <input name="no_npwp" type="text" id="no_npwp" class="form-control" placeholder="No NPWP" autocomplete="off"  />
                              </div> 
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">E-Mail</label>
                              <div class="col-sm-6">
                                  <input name="email" type="text" id="email" class="form-control" placeholder="E-mail" autocomplete="off"  />
                              </div> 
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Ukuran Seragam :</label>
                              <div class="col-sm-6">
                                  <!-- <input name="ukr_baju" type="text" id="ukr_baju" class="form-control" placeholder="Ukuran Baju" autocomplete="off"  /> -->
                                
                                  <select name="ukr_baju" id="ukr_baju" placeholder="Ukuran baju" autocomplete="off" >
                                    <option value="" selected>--pilih--</option>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                  </select>  
                                </div> 
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Ukuran Sepatu</label>
                              <div class="col-sm-6">
                                  <input name="ukr_sepatu" type="number" id="ukr_sepatu" class="form-control" placeholder="Ukuran sepatu" autocomplete="off"  />
                                </div> 
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tinggi Badan (Cm)</label>
                              <div class="col-sm-6">
                                  <input name="tinggi_badan" type="number" id="tinggi_badan" class="form-control" placeholder="Ukuran sepatu" autocomplete="off"  />
                              </div> 
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Berat Badan (Kg)</label>
                              <div class="col-sm-6">
                                  <input name="berat_badan" type="number" id="berat_badan" class="form-control" placeholder="Ukuran sepatu" autocomplete="off"  />
                              </div> 
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Rute Jemputan</label>
                              <div class="col-sm-6">
                                  <input name="rute_jemputan" type="text" id="rute_jemputan" class="form-control" placeholder="rute jemputan" autocomplete="off"  />
                              </div> 
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Titik Jemputan</label>
                              <div class="col-sm-6">
                                  <input name="titik_jemput" type="text" id="titik_jemput" class="form-control" placeholder="titik jemputan" autocomplete="off"  />
                              </div> 
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nilai Test</label>
                              <div class="col-sm-6">
                                  <input name="nilai_test" type="number" id="nilai_test" class="form-control" placeholder="nilai test" autocomplete="off"  />
                              </div> 
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Hasil MCU</label>
                              <div class="col-sm-6">
                                  <input name="hasil_mcu" type="text" id="hasil_mcu" class="form-control" placeholder="hasil mcu" autocomplete="off"  />
                              </div> 
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Hasil PCR</label>
                              <div class="col-sm-6">
                                  <input name="hasil_pcr" type="text" id="hasil_pcr" class="form-control" placeholder="hasil PCR" autocomplete="off"  />
                              </div> 
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-10">
                                  <input type="submit" name="simpan" value="Simpan" class="btn btn-sm btn-primary" />&nbsp;
	                              <a href="input-master.php" class="btn btn-sm btn-danger">Batal </a>
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
						url :"ajax-data-rack.php", // json datasource
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
