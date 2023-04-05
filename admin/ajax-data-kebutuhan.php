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
	2 => 'qty_x2'
);

// getting total number records without any search
$sql = "SELECT id, tgl_data,qty_x2";
$sql.=" FROM transaksi";
$query=mysqli_query($conn, $sql) or die("ajax-data-kebutuhan.php: get id");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


if( !empty($requestData['search']['value']) ) {
	// if there is a search parameter
	$sql = "SELECT id, tgl_data,qty_x2";
	$sql.=" FROM transaksi";
	$sql.=" WHERE tgl_data LIKE '".$requestData['search']['value']."%' ";    // $requestData['search']['value'] contains search parameter
	
	$query=mysqli_query($conn, $sql) or die("ajax-data-kebutuhan.php: get id");
	$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result without limit in the query 

	$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   "; // $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc , $requestData['start'] contains start row number ,$requestData['length'] contains limit length.
	$query=mysqli_query($conn, $sql) or die("ajax-data-kebutuhan.php: get id"); // again run query with limit
	
} else {	

	$sql = "SELECT id, tgl_data,qty_x2";
	$sql.=" FROM transaksi";
	$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
	$query=mysqli_query($conn, $sql) or die("ajax-data-kebutuhan.php: get id");   
	
}

$data = array();
$no = $_POST['start'];
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$no++;
	$nestedData[] = $no;
	$nestedData=array(); 
	$nestedData[] = $no;
    $nestedData[] = $row["tgl_data"];
    $nestedData[] = $row["qty_x2"];
	
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
