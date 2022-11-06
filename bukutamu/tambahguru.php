<?php


require 'function.php';





if(isset($_POST["submit"])){
    if(tambahguru($_POST) > 0){
    echo "
        <script type='text/javascript'>
            alert('Data guru berhasil ditambahkan');
            window.location = 'guru.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data guru gagal ditambahkan');
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
</head>
<body>

<div class="main">
        <div class="box">
            
        <h3>Tambah Data guru</h3>

        <form action="" method="POST" enctype="multipart/form-data">

            <label for="nama_lengkap">Nama Lengkap:</label> 
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control"><br/>

            <label for="job">job:</label> 
            <input type="text" name="job" id="job" class="form-control"><br/>

            <label for="password">Password:</label> 
            <input type="password" name="password" id="password" class="form-control"><br/>

            <label for="roles">Roles:</label> 
            <select name="roles" class="form-control">
                <option value="kepala sekolah">kepala sekolah</option>
                <option value="wakil kepala sekolah">wakil kepala sekolah</option>
                <option value="guru">guru</option>
            </select><br/>

            <label for="foto">foto</label>
            <input type="file" name="foto" id="foto" class="form-control"><br>
            
            <button type="submit" name="submit" class="btn btn-info">Tambah</button>

        </form>
        </div>
    </div>
    
</body>
</html>