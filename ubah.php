<?php

require 'fungsional.php';
 
$ID = $_GET["id"];

$mhs = read("SELECT * FROM tbl_lsp WHERE id = $ID")[0];

if(isset($_POST["submit"])) {



if( ubah($_POST) > 0) {
    echo "
    <script>
        alert('data berhasil diubah!');
        document.location.href = 'tampildata.php';
    </script>
    ";
}else{
    echo "
    <script>
        alert('data tidak berhasil diubah!');
        document.location.href = 'tampildata.php';
    </script>
    ";
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Ubah dong</title>
</head>
<h1>Ubah Data</h1>

<form action="" method = "post">
<input type="hidden" name="id" value="<?= $mhs["id"]; ?>">

<ul>
    <li>
        <label for="nama">Nama : </label>
        <input type="text" name = "nama" ID ="nama" required value = "<?= $mhs["nama"]; ?>">
    </li>

    <li>
        <label for="email">Email : </label>
        <input type="text" name = "email" ID ="email" value = "<?= $mhs["email"]; ?>">
    </li>

    <li>
        <label for="username">Username : </label>
        <input type="text" name = "username" ID ="username" value = "<?= $mhs["username"]; ?>">
    </li>

    <li>
        <label for="password">Password : </label>
        <input type="text" name = "password" ID ="password" value = "<?= $mhs["password"]; ?>">
    </li>

    <li>
        <button type = "submit" name ="submit">ubah</button>
    </li>


</form>
</body>
</html>