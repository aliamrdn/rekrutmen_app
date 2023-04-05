<?php 
include 'koneksi.php';

?>

<table border="1">
    <tr>
        <th>No</th>
        
        <th>id</th>
        <th>tanggal</th>
        <th>jenis kelamin</th>
        <th>new </th>
        <th>pkwt 1</th>
        <th>pkwt 2</th>
        <th>jumlah</th>
        <th>jumlah x2</th>

    </tr>
    <?php 
    $sql = "SELECT id, tgl_data, qty_x2, jenis_kelamin, n_k, k1,k2,jmlh";
    $sql.=" FROM transaksi";
    $query=mysqli_query($conn, $sql) or die("ajax-data-transaksi.php: get id");
    $no = 1;
    $data = array();
    while( $row=mysqli_fetch_array($query) ) {  
    ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row["id"];?></td>
            <td><?php echo $row["tgl_data"];?></td>
            <td><?php echo $row["jenis_kelamin"];?></td>
            <td><?php echo $row["n_k"];?></td>
            <td><?php echo $row["k1"];?></td>
            <td><?php echo $row["k2"];?></td>
            <td><?php echo $row["jmlh"];?></td>
            <td><?php echo $row["qty_x2"];?></td>
                   
        </tr>
        <?php    
                
            }
            ?>
</table>