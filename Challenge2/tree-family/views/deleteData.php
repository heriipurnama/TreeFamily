<?php
  // include database connection file
  include '../config/databases.php';

// Get id from URL to delete that user
$id = $_GET['id'];

// Delete data row from table based on given id
$sql = "DELETE FROM tb_keluarga WHERE id_keluarga=$id";
$result = mysqli_query($mysqli, $sql);

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:../index.php");
?>