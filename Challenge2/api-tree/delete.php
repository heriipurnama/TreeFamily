<?php
	// include connection
	require_once('connection/connection.php');

	$idKeluarga	= $_REQUEST['idKeluarga'];

	$sql	= "DELETE FROM tb_keluarga WHERE id_keluarga='$idKeluarga'";
	$query  = mysqli_query($conn, $sql);

	//response
	if($query) {
	    echo json_encode(array( 'response'=>'success' ));
	} else {
	    echo json_encode(array( 'response'=>'failed' ));
	}
?>