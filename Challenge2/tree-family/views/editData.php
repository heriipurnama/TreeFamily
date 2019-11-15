<?php
  // include database connection file
  include '../config/databases.php';

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id=$_POST['id'];
    $name=$_POST['name'];
    $gender=$_POST['gender'];

    // update data
    $sql = "UPDATE tb_keluarga SET nama='$name',jenis_kelamin='$gender' WHERE id_keluarga=$id";
    $result = mysqli_query($mysqli, $sql);
    
    // Redirect to homepage to display updated list
    header("Location: ../index.php");
}
?>
<?php
// Display selected data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$sql="SELECT * FROM tb_keluarga WHERE id_keluarga=$id";
$result = mysqli_query($mysqli, $sql);

while($data = mysqli_fetch_array($result))
{
    $nama = $data['nama'];
    $gender = $data['jenis_kelamin'];
}
?>
<html>
<head>  
    <title>Edit Data</title>
</head>

<body>
    <a href="../index.php">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="editData.php">
        <table border="0">
            <tr> 
                <td>Name</td>
                <td>
                    <input type="text" name="name" value=<?php echo $nama;?>>
                </td>
            </tr>
            <tr> 
                <td>jenis Kelamin</td>
                <td>
                    <input name="gender" type="radio" value="L"
                    <?php if($gender=='L'){echo 'checked';}?> > 
                    Laki-Laki  
                    <input type="radio" name="gender" value="P" 
                    <?php if($gender=='P'){echo 'checked';}?>>
                    Perempuan
                </td>
                </td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>