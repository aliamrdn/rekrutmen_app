<?php
/* Database connection start */
session_start();
include "koneksi.php";

/* Database connection end */


// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;


$columns = array( 
// datatable column index  => database column name
	0 => 'id',
    1 => 'tgl_data', 
    2 => 'qty_x2', 
	3 => 'jenis_kelamin',
    4 => 'n_k',
    5 => 'k1',
    6 => 'k2',
    7 => 'jmlh'
);

// getting total number records without any search
$sql = "SELECT id, tgl_data, qty_x2, jenis_kelamin, n_k, k1,k2,jmlh";
$sql.=" FROM transaksi";
$query=mysqli_query($conn, $sql) or die("ajax-data-transaksi.php: get id");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


if( !empty($requestData['search']['value']) ) {
	// if there is a search parameter
	$sql = "SELECT id, tgl_data, qty_x2, jenis_kelamin, n_k, k1,k2,jmlh";
	$sql.=" FROM transaksi";
	$sql.=" WHERE id LIKE '".$requestData['search']['value']."%' ";    // $requestData['search']['value'] contains search parameter
	$sql.=" OR n_k LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR k1 LIKE '".$requestData['search']['value']."%' ";
    $sql.=" OR jenis_kelamin LIKE '".$requestData['search']['value']."%' ";
    $sql.=" OR k2 LIKE '".$requestData['search']['value']."%' ";
	$query=mysqli_query($conn, $sql) or die("ajax-data-transaksi.php: get id");
	$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result without limit in the query 

	$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   "; // $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc , $requestData['start'] contains start row number ,$requestData['length'] contains limit length.
	$query=mysqli_query($conn, $sql) or die("ajax-data-transaksi.php: get id"); // again run query with limit
	
} else {	

	$sql = "SELECT id, tgl_data, qty_x2, jenis_kelamin, n_k,k1,k2,jmlh";
	$sql.=" FROM transaksi";
	$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
	$query=mysqli_query($conn, $sql) or die("ajax-data-transaksi.php: get id");   
	
}

$data = array();
$no = 1;
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 

	$nestedData[] = $no++;
    $nestedData[] = $row["tgl_data"];
    $nestedData[] = $row["jenis_kelamin"];
    $nestedData[] = $row["n_k"];
    $nestedData[] = $row["k1"];
    $nestedData[] = $row["k2"];
    $nestedData[] = $row["jmlh"];
    $nestedData[] = $row["qty_x2"];
	if($_SESSION['level'] == "admin"){
	$nestedData[] = '<td><center>
	                 <a href="transaksi.php?aksi=delete&id='.$row['id'].'"  data-toggle="tooltip" title="Delete" onclick="return confirm(\'Anda yakin akan menghapus data '.$row['id'].'?\')" class="btn btn-sm btn-danger"> <i class="fa fa-trash"> </i> </a>
	                 </center></td>';
	} else if($_SESSION['level'] == "user"){
		$nestedData[] = '<td><center></center></td>';
	}		
	
	$data[] = $nestedData;
    
}
/**<a href="detail-incoming.php?id='.$row['id'].'"  data-toggle="tooltip" title="Detail" class="btn btn-sm btn-warning"> <i class="fa fa-search"></i> </a>
   <a href="edit-transaksi.php?id='.$row['id'].'"  data-toggle="tooltip" title="Edit" class="btn btn-sm btn-primary"> <i class="fa fa-edit"></i> </a>
				     
 */



$json_data = array(
			"draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
			"recordsTotal"    => intval( $totalData ),  // total number of records
			"recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
			"data"            => $data   // total data array
			);

echo json_encode($json_data);  // send data as json format

?>
