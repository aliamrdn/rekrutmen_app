<?php 
include 'koneksi.php';

?>

<table border="1">
    <tr>
        <th>No</th>
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
    <?php 
    $sql = "SELECT id_c_pekerja,nama_pekerja,no_ktp,jenis_kelamin,alamat,agama,status_kawin,tgl_rekrut,tmpt_tgl_lahir,negara,pendidikan,gol_darah,no_telp,nm_ibu_kdg,nm_saudara_kdg,no_kontak_drt,no_npwp,email,ukr_seragam,ukr_sepatu,tinggi_badan,berat_badan,rute_jemputan,titik_jemput,nilai_test,hasil_mcu,hasil_pcr";
    $sql.=" FROM pekerja where ojt_status = '0'";
    $query=mysqli_query($conn, $sql) or die("ajax-data-master.php: get Part No");
    $no = 1;
    $data = array();
    while( $row=mysqli_fetch_array($query) ) {  
    ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row["id_c_pekerja"]; ?></td>
            <td><?php echo $row["nama_pekerja"]; ?></td>
            <td><?php echo $row["no_ktp"]; ?></td>
            <td><?php echo $row["jenis_kelamin"]; ?></td>
            <td><?php echo $row["alamat"]; ?></td>
            <td><?php echo $row["agama"]; ?></td>
            <td><?php echo $row["status_kawin"]; ?></td>
            <td><?php echo $row["tgl_rekrut"]; ?></td>
            <td><?php echo $row["tmpt_tgl_lahir"]; ?></td>
            <td><?php echo $row["negara"]; ?></td>
            <td><?php echo $row["pendidikan"]; ?></td>
            <td><?php echo $row["gol_darah"]; ?></td>
            <td><?php echo $row["no_telp"]; ?></td>
            <td><?php echo $row["nm_ibu_kdg"]; ?></td>
            <td><?php echo $row["nm_saudara_kdg"]; ?></td>
            <td><?php echo $row["no_kontak_drt"]; ?></td>
            <td><?php echo $row["no_npwp"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["ukr_seragam"]; ?></td>
            <td><?php echo $row["ukr_sepatu"]; ?></td>
            <td><?php echo $row["tinggi_badan"]; ?></td>
            <td><?php echo $row["berat_badan"]; ?></td>
            <td><?php echo $row["rute_jemputan"]; ?></td>
            <td><?php echo $row["titik_jemput"]; ?></td>
            <td><?php echo $row["nilai_test"]; ?></td>
            <td><?php echo $row["hasil_mcu"]; ?></td>
            <td><?php echo $row["hasil_pcr"]; ?></td>
        </tr>
        <?php    
                
            }
            ?>
</table>