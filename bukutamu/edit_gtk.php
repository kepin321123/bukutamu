<?php

session_start();
require 'function.php';


$id = $_GET["id"];
$data = query("SELECT * FROM gtk WHERE id_gtk = '$id'")[0];


if(isset($_POST["submit"])){
    if(editguru($_POST) > 0){
    echo "
        <script type='text/javascript'>
            alert('Data guru berhasil diubah');
            window.location = 'guru.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data guru gagal diubah');
            window.location = 'guru.php';
        </script>
    ";
    }
    }   
 require 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="main">
        <div class="box">
            
        <h3>Edit Data guru</h3>

        <form action="" method="POST" enctype="multipart/form-data">
            
            <label for="nama_lengkap">Nama Lengkap</label> 
            <input type="text" name="nama_lengkap" id="nama_lengkap" value="<?= $data["nama_lengkap"];?>"><br><br>

            <label for="job">Job:</label> 
            <input type="text" name="job" id="job" value="<?= $data["job"];?>"><br><br>


            <label for="roles">Roles:</label> 
            <select name="roles" class="form-control" value="<?= $data["roles"];?>">
                <option value="kepala sekolah">Kepala sekolah</option>
                <option value="wakil kepala sekolah">Wakil kepala sekolah</option>
                <option value="guru">Guru</option>
            </select><br/>

            <label for="foto">foto:</label> 
            <input type="file" name="foto" id="foto" value="<?= $data["foto"];?>" ><br><br>

            <button type="submit" name="submit" class="btn btn-primary">Edit</button>

        </form>
        </div>
    </div>
    
</body>
</html>

