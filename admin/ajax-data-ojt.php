<?php
/* Database connection start */
session_start();
include "koneksi.php";

/* Database connection end */


// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;


$columns = array( 
// datatable column index  => database column name

		0 => 'id_c_pekerja',
		1 => 'nama_pekerja',
		2 => 'no_ktp',
		3 => 'jenis_kelamin',
		4 => 'alamat',
		5 => 'agama',
		6 => 'status_kawin',
		7 => 'tgl_rekrut',
		8 => 'tmpt_tgl_lahir',
		9 => 'negara',
		10 => 'pendidikan',
		11 => 'gol_darah',
		12 => 'no_telp',
		13 => 'nm_ibu_kdg',
		14 => 'nm_saudara_kdg',
		15 => 'no_kontak_drt',
		16 => 'no_npwp',
		17 => 'email',
		18 => 'ukr_seragam',
		19 => 'ukr_sepatu',
		20 => 'tinggi_badan',
		21 => 'berat_badan',
		22 => 'rute_jemputan',
		23 => 'titik_jemput',
		24 => 'nilai_test',
		25 => 'hasil_mcu',
		26 => 'hasil_pcr'

);

// getting total number records without any search
$sql = "SELECT id_c_pekerja,nama_pekerja,no_ktp,jenis_kelamin,alamat,agama,status_kawin,tgl_rekrut,tmpt_tgl_lahir,negara,pendidikan,gol_darah,no_telp,nm_ibu_kdg,nm_saudara_kdg,no_kontak_drt,no_npwp,email,ukr_seragam,ukr_sepatu,tinggi_badan,berat_badan,rute_jemputan,titik_jemput,nilai_test,hasil_mcu,hasil_pcr";
$sql.=" FROM pekerja WHERE ojt_status='1'";
$query=mysqli_query($conn, $sql) or die("ajax-data-master.php: get Part No");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


if( !empty($requestData['search']['value']) ) {
	// if there is a search parameter
	$sql = "SELECT id_c_pekerja,nama_pekerja,no_ktp,jenis_kelamin,alamat,agama,status_kawin,tgl_rekrut,tmpt_tgl_lahir,negara,pendidikan,gol_darah,no_telp,nm_ibu_kdg,nm_saudara_kdg,no_kontak_drt,no_npwp,email,ukr_baju,ukr_celana,ukr_sepatu,tinggi_badan,berat_badan,rute_jemputan,titik_jemput,nilai_test,hasil_mcu,hasil_pcr";
	$sql.=" FROM pekerja";
	$sql.=" WHERE id_c_pekerja LIKE '".$requestData['search']['value']."%' ";    // $requestData['search']['value'] contains search parameter
	$sql.=" OR nama_pekerja LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR no_ktp LIKE '".$requestData['search']['value']."%' ";
    $sql.=" OR agama LIKE '".$requestData['search']['value']."%' ";
    $sql.=" OR status_kawin LIKE '".$requestData['search']['value']."%' ";
    $sql.=" OR pendidikan LIKE '".$requestData['search']['value']."%' ";
	$query=mysqli_query($conn, $sql) or die("ajax-data-master.php: get Part No");
	$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result without limit in the query 

	$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   "; // $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc , $requestData['start'] contains start row number ,$requestData['length'] contains limit length.
	$query=mysqli_query($conn, $sql) or die("ajax-data-master.php: get Part No"); // again run query with limit
	
} else {	

	$sql = "SELECT id_c_pekerja,nama_pekerja,no_ktp,jenis_kelamin,alamat,agama,status_kawin,tgl_rekrut,tmpt_tgl_lahir,negara,pendidikan,gol_darah,no_telp,nm_ibu_kdg,nm_saudara_kdg,no_kontak_drt,no_npwp,email,ukr_seragam,ukr_sepatu,tinggi_badan,berat_badan,rute_jemputan,titik_jemput,nilai_test,hasil_mcu,hasil_pcr";
	$sql.=" FROM pekerja WHERE ojt_status='1'";
	$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
	$query=mysqli_query($conn, $sql) or die("ajax-data-master.php: get Part No");   
	
}

$data = array();
$no = 1;
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 

	$nestedData[] = $no++;
	$nestedData[] = $row["id_c_pekerja"];
	$nestedData[] = $row["nama_pekerja"];
	$nestedData[] = $row["no_ktp"];
	$nestedData[] = $row["jenis_kelamin"];
	$nestedData[] = $row["alamat"];
	$nestedData[] = $row["agama"];
	$nestedData[] = $row["status_kawin"];
	$nestedData[] = date("d-m-Y", strtotime($row["tgl_rekrut"]));
	$nestedData[] = $row["tmpt_tgl_lahir"];
	$nestedData[] = $row["negara"];
	$nestedData[] = $row["pendidikan"];
	$nestedData[] = $row["gol_darah"];
	$nestedData[] = $row["no_telp"];
	$nestedData[] = $row["nm_ibu_kdg"];
	$nestedData[] = $row["nm_saudara_kdg"];
	$nestedData[] = $row["no_kontak_drt"];
	$nestedData[] = $row["no_npwp"];
	$nestedData[] = $row["email"];
	$nestedData[] = $row["ukr_seragam"];
	$nestedData[] = $row["ukr_sepatu"];
	$nestedData[] = $row["tinggi_badan"];
	$nestedData[] = $row["berat_badan"];
	$nestedData[] = $row["rute_jemputan"];
	$nestedData[] = $row["titik_jemput"];
	$nestedData[] = $row["nilai_test"];
	$nestedData[] = $row["hasil_mcu"];
	$nestedData[] = $row["hasil_pcr"];

	
	$data[] = $nestedData;
    
}



$json_data = array(
			"draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
			"recordsTotal"    => intval( $totalData ),  // total number of records
			"recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
			"data"            => $data   // total data array
			);

echo json_encode($json_data);  // send data as json format

?>
