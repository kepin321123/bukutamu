<?php


require 'function.php';





if(isset($_POST["submit"])){
    if(tambahresepsionis($_POST) > 0){
    echo "
        <script type='text/javascript'>
            alert('Data resepsionis berhasil ditambahkan');
            window.location = 'resepsionis.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data resepsionis gagal ditambahkan');
            window.location = 'resepsionis.php';
        </script>
    ";
    }
    }   




    require 'navbar.php';

?>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<div class="main">
        <div class="box">
            
        <h3>Tambah Data User</h3>

        <form action="" method="POST">
            <label for="username">Username:</label> 
            <input type="text" name="username" id="username" class="form-control"><br/>

            <label for="nama_lengkap">Nama Lengkap:</label> 
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control"><br/>

            <label for="kelas">kelas:</label> 
            <input type="text" name="kelas" id="kelas" class="form-control"><br/>

            <label for="password">Password:</label> 
            <input type="password" name="password" id="password" class="form-control"><br/>

            <label for="roles">Roles:</label> 
            <select name="roles" class="form-control">
                <option value="Admin">Admin</option>
                <option value="Resepsionis">Resepsionis</option>
            </select><br/>
            <button type="submit" name="submit" class="btn btn-info">Tambah</button>

        </form>
        </div>
    </div>