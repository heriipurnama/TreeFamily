<html>
<head>
    <title>Add Users</title>
</head>

<body>
    <a href="../index.php">Go to Home</a>
    <br/><br/>

    <form action="addData.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="nama" placeholder='nama...'></td>
            </tr>
            <tr> 
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="gender" value="L"> Laki-laki<br>
                    <input type="radio" name="gender" value="P"> Perempuan<br>
                </td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into tb_keluarga table.
    if(isset($_POST['Submit'])) {
        $name = $_POST['nama'];
        $gender = $_POST['gender'];

        // include database connection file
        include '../config/databases.php';

        // Insert tb_keluarga data into table
        $sql="INSERT INTO tb_keluarga(nama, jenis_kelamin) VALUES('$name','$gender')";
        $result = mysqli_query($mysqli,$sql);

        // Show message when data added
        echo "Data added successfully. <a href='../index.php'>View Data</a>";
    }
    ?>
</body>
</html>