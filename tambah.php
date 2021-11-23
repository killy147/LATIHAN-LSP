<?php

require 'fungsional.php';
//koneksi
//cek apakah tombol submit sudah ditekan apa belum
 if( isset($_POST["submit"])) {
//cek apakah data berhasil ditambahkan/tidak
if( tambah($_POST) > 0) {
echo "
<script>
alert('data berhasil ditambahkan!');
document.location.href = 'tampildata.php';
</script>
";
}else{
echo "
<script>
alert('data tidak berhasil ditambahkan!');
document.location.href = 'tampildata.php';
</script>
";
}
}
?>

<html lang="en">
<head>
<title>Tambah Data</title>
</head>
<body>

<h1>Tambah Data</h1>

<form action="" method = "post">

<ul>

    <li>
        <label for="nama">Nama : </label>
        <input type="text" name = "nama" ID ="nama" required>
    </li>

    <li>
        <label for="email">Email : </label>
        <input type="text" name ="email" ID ="email" required>
    </li>

    <li>
        <label for="username">Username : </label>
        <input type="text" name = "username" ID ="username" required>
    <li>
        <label for="password">Password : </label>
        <input type="password" name ="password" ID ="password" required>
    </li>
    <li>
<button type = "submit" name ="submit">Tambah</button>
</li>
</ul>
</form>
</body>
</html>