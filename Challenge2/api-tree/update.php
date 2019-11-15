<?php
	// include connection
	require_once('connection/connection.php');

	$idKeluarga			= $_REQUEST['idKeluarga'];
	$nama				= $_REQUEST['nama'];
	$jenisKelamin		= $_REQUEST['jenisKelamin'];

	// update content
	$sql	= "UPDATE tb_keluarga SET nama = '$nama', jenis_kelamin='$jenisKelamin'
               WHERE id_keluarga='$idKeluarga'";
	$query 	= mysqli_query($conn, $sql );

	// response
	if($query) {
	    echo json_encode(array( 'response'=>'success' ));
	} else {
	    echo json_encode(array( 'response'=>'failed' ));
	}
?>