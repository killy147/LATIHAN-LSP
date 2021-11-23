<?php

$conn = mysqli_connect('localhost', 'root','', 'db_latihanlsp');

function read($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    return $rows;
}

function tambah($data) {
    global $conn;
    $Nama = htmlspecialchars($data["nama"]);
    $Email = htmlspecialchars($data["email"]);
    $Username =strtolower(stripslashes(htmlspecialchars($data["username"])));
    $Password =mysqli_real_escape_string ($conn, htmlspecialchars($data["password"])) ;

    $result = mysqli_query($conn, " SELECT username FROM tbl_user WHERE username ='$Username'");

    if (mysqli_fetch_assoc($result)){
        echo" <script>
                alert ('username sudah terdaftar !');
                document.location.href ='tampildata.php';
              </script>";

        exit;        
    }

    $Password = password_hash($Password, PASSWORD_DEFAULT);


    $query = "INSERT INTO tbl_lsp
    VALUES
    ('', '$Nama', '$Email', '$Username', '$Password')
    ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;
    $Nama = htmlspecialchars($data["nama" ]);
    $Email = htmlspecialchars($data["email"]);
    $Username = htmlspecialchars($data[ "username" ]);
    $Password = htmlspecialchars($data["password"]);
    $query =
    "UPDATE tbl_lsp SET
    nama = '$Nama',
    email = '$Email',
    username = '$Username',
    password = '$Password'
    WHERE id = $ID
    ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($ID) {
    global $conn;
    mysqli_query($conn, "DELETE FROM tbl_lsp WHERE id = $ID");
    return mysqli_affected_rows($conn);
}

?>