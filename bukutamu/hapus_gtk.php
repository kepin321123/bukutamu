<?php

require 'function.php';



$id = $_GET["id"];

if(hapusguru($id) > 0){
    echo "
        <script type='text/javascript'>
            alert('Data guru berhasil dihapus');
            window.location = 'guru.php';
        </script>
    ";
}else{
    echo "
        <script type='text/javascript'>
            alert(Data guru gagal dihapus');
            window.location = 'guru.php';
        </script
    ";
}

?>