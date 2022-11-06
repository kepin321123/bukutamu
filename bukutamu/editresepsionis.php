<?php

session_start();
require 'function.php';


$id = $_GET["id"];
$data = query("SELECT * FROM resepsionis WHERE id_resepsionis = '$id'")[0];


if(isset($_POST["submit"])){
    if(editresepsionis($_POST) > 0){
    echo "
        <script type='text/javascript'>
            alert('Data resepsionis berhasil diubah');
            window.location = 'resepsionis.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data resepsionis gagal diubah');
            window.location = 'resepsionis.php';
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
    <!-- CSS only -->

</head>
<body>

<div class="main">
        <div class="box">
            
        <h3>Edit Data resepsionis</h3>

        <form action="" method="POST">
             <input type="hidden" name="id_resepsionis" value="<?= $data["id_resepsionis"];?>">

            <label for="username">Username</label> 
            <input type="text" name="username" id="username" value="<?= $data["username"];?>"><br>
            
            <label for="nama_lengkap">Nama Lengkap</label> 
            <input type="text" name="nama_lengkap" id="nama_lengkap" value="<?= $data["nama_lengkap"];?>"><br>

            <label for="kelas">kelas:</label> 
            <input type="text" name="kelas" id="kelas" value="<?= $data["kelas"];?>"><br>

            <label for="password">Password:</label> 
            <input type="password" name="password" id="password" value="<?= $data["password"];?>" ><br>

            <label for="roles">Roles:</label> 
            <select name="roles" class="form-control">
                <option value="Admin">Admin</option>
                <option value="Resepsionis">Resepsionis</option>
            </select><br/>
            <button type="submit" name="submit" class="btn btn-primary">Edit</button>

        </form>
        </div>
    </div>
    
</body>
</html>

