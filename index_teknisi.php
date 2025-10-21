<style type="text/css">
    .header{
        background-color: orange;
    }
</style>
<?php

include_once("config.php");


$result = mysqli_query($mysqli, "SELECT * FROM teknisi ORDER BY id DESC");
?>

<html>
<head>    
    <title>Sim Rs</title>
</head>

<body>
    <b>Formulir Teknisi Elektromedis</b><br>
<a href="add_teknisi.php">Tambah Teknisi</a><br/><br/>

    <table width='80%' border=1>

    <tr class="header">
          <th>No</th> <th>ID</th> <th>Nama Teknisi</th> <th>Alamat</th> <th>No HP</th> <th>Aksi</th>
    </tr>
    <?php  
    $i=1;
    while($user_data = mysqli_fetch_array($result)) {  
        echo "<tr>";
        echo "<td>".$i."</td>";       
        echo "<td>".$user_data['id']."</td>";
        echo "<td>".$user_data['nama_teknisi']."</td>";
        echo "<td>".$user_data['alamat']."</td>";    
        echo "<td>".$user_data['no_hp']."</td>";    
        echo "<td><a href='edit_teknisi.php?id=$user_data[id]'>Edit</a> | <a href='delete_teknisi.php?id=$user_data[id]'>Delete</a></td></tr>"; 
        $i++;       
    }
    ?>
    </table>
</body>
</html>