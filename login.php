<?php
session_start();


if (isset ($_SESSION["login"])){

    header("Location: tampildata.php");
    exit; 
}


require 'fungsional.php';

if(isset($_POST["login"])){


    $Username = $_POST["username"];
    $Password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM tbl_lsp WHERE username = '$Username'");


    if(mysqli_num_rows($result)===1){


        $row = mysqli_fetch_assoc($result);
        if (password_verify($Password, $row["password"])){

            //set section
            $_SESSION["login"] = true;



            header("Location:tampildata.php");
            exit;
        }
    }

    $error = true;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Halaman Login</title>
</head>
<body>

    <h1>Halaman Login</h1>

    <?php if (isset ($error)) : ?>
        <p style ="color:red; font-style : italic;">Username/Password Salah !</p>

    <?php endif; ?>    



    <form action="" method="post">

    <ul>
        <li>
            <label for="username"> Username : </label>
            <input type="text" name= "username" id="username">
        </li>
            
        <li>
            <label for="password"> Password : </label>
            <input type="text" name= "password" id="password">
        </li>

        <li>
                <button name= "login">Login</button>
            </li>

    </ul>


    </form>

    <p>Gaada akun kah ?</p>

    <button><a href="tambah.php">Register</a></button>

</body>
</html>