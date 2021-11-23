<?php
require 'fungsional.php';

$ID = $_GET["id"];
if( hapus($ID) > 0) {
    echo "
    <script>
        alert('data berhasil dihapus!');
        document.location.href = 'tampildata.php';
    </script>
    ";
}else{
    echo "
    <script>
        alert('data tidak berhasil dihapus!');
        document.location.href = 'tampildata.php';
    </script>
    ";
}
?>