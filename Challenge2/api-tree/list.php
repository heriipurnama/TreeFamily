<?php
	// API list Data

	header("Content-Type:application/json");

	// include connection
	require_once('connection/connection.php');

	$sql="SELECT * FROM tb_keluarga ORDER BY id_keluarga ASC";
	$query = mysqli_query($conn, $sql);
	
	// get data from table
	$result = array();
	while($row = mysqli_fetch_array($query)){
		array_push($result,array(
			'idKeluarga' 	 => $row['id_keluarga'],
			'nama'			 => $row['nama'],
			'jenisKelamin'   => $row['jenis_kelamin']
		));
	}
	
	// output API json format
	echo json_encode(array(
		'result' => $result
	));

	mysqli_close($conn);
 ?>