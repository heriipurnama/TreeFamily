<?php
	// include connection
	require_once('connection/connection.php');

	$nama				= $_REQUEST['nama'];
	$jenisKelamin		= $_REQUEST['jenisKelamin'];
	
	// insert data
	$sql =  "INSERT INTO tb_keluarga ( nama, jenis_kelamin) 
			 VALUES ('$nama', '$jenisKelamin') ";
	$query = mysqli_query($conn, $sql);

	// response
	if($query) {
	    echo json_encode(array( 'response'=>'success' ));
	} else {
	    echo json_encode(array( 'response'=>'failed' ));
	}
?>