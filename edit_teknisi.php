<?php
// Commit 4: Menambahkan fitur edit data teknisi

// include database connection file
include_once("config.php");

// --- BAGIAN UPDATE DATA ---
if (isset($_POST['update'])) {   
    $id = $_POST['id'];
    $nama_teknisi = $_POST['nama_teknisi'];
    $alamat= $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    

    // validasi sederhana
    if (!empty($id)) {
        $result = mysqli_query($mysqli, "UPDATE teknisi SET id='$id', nama_teknisi='$nama_teknisi', alamat='$alamat', no_hp='$no_hp' WHERE id=$id");
        header("Location: index_teknisi.php");
        exit();
    } else {
        echo "<p style='color:red;'>Gagal update: ID tidak ditemukan.</p>";
    }
}

// --- BAGIAN TAMPILKAN DATA BERDASARKAN ID ---
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($mysqli, "SELECT * FROM teknisi WHERE id=$id");

    if ($result && mysqli_num_rows($result) > 0) {
        $user_data = mysqli_fetch_assoc($result);
        $id = $user_data['id'];
        $nama_teknisi = $user_data['nama_teknisi'];
        $alamat = $user_data['alamat'];
        $no_hp = $user_data['no_hp'];
       
    } else {
        echo "<p style='color:red;'>Data tidak ditemukan!</p>";
        exit();
    }
} else {
    echo "<p style='color:red;'>ID tidak ditemukan di URL!</p>";
    exit();
}
?>

<html>
<head>  
    <title>Edit Teknisi</title>
</head>

<body>
    <a href="index_teknisi.php">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit_teknisi.php">
        <table border="0">
         <tr> 
                <td>ID</td>
                <td><input type="text" name="id" value="<?php echo $id; ?>"></td>
            <tr> 
                <td>Nama Teknisi</td>
                <td><input type="text" name="nama_teknisi" value="<?php echo $nama_teknisi; ?>"></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $alamat; ?>"></td>
            </tr>
            <tr> 
                <td>No HP</td>
                <td><input type="text" name="no_hp" value="<?php echo $no_hp; ?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?php echo $id; ?>"></td>
                <td><input type="submit" name="update" value="Update"></td>
        </table>
    </form>
</body>
</html>
