<html>
<head>
    <title>Add Teknisi</title>
</head>

<body>
    <a href="index_teknisi.php">Go to Home</a>
    <br/><br/>
<p>Formulir Teknisi Elektromedis</p>
    <form action="add_teknisi.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Id</td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr> 
                <td>Nama Teknisi</td>
                <td><input type="text" name="nama_teknisi"></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
             <tr> 
                <td>No Hp</td>
                <td><input type="text" name="no_hp"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php
// Commit 3: Menambahkan fitur tambah data teknisi

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $id= $_POST['id'];
        $nama_teknisi = $_POST['nama_teknisi'];
        $alamat= $_POST['alamat'];
        $no_hp = $_POST['no_hp'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO teknisi(id,nama_teknisi,alamat,no_hp) VALUES('$id','$nama_teknisi','$alamat','$no_hp')");

        // Show message when user added
        echo "User added successfully. <a href='index_teknisi.php'>View Teknisi</a>";
    }
    ?>
</body>
</html>