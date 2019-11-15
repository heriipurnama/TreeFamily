<?php
// Create database connection using config file
include 'config/databases.php';

// Fetch all users data from database
// Perform queries
$result = mysqli_query($mysqli, "SELECT * FROM tb_keluarga");

?>
<html>
<head>    
    <title>Home Page</title>
</head>

<body>
<a href="views/addData.php">Tambah Data</a> | <a href="views/visualitation.php">Visualitation</a><br/><br/>
    <table width='80%' border=1>
    <tr>
        <th>Nama</th> <th>Jenis Kelamin</th> <th>Action</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['jenis_kelamin']."</td>"; 
        echo "<td><a href='views/editData.php?id=$user_data[id_keluarga]'>Edit</a> | <a href='views/deleteData.php?id=$user_data[id_keluarga]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>