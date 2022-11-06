<?php
session_start();
require 'function.php';


$resepsionis = query("SELECT * FROM resepsionis");


?>

<?php 
    require 'navbar.php'; ?>

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


 <div class="resepsionis">
    <h2 class="h2-data">data resepsionis</h2>

    <a href="tambahdata.php" class="tambah btn btn-primary btn-lg">tambah data</a>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">username</th>
      <th scope="col">nama_lengkap</th>
      <th scope="col">kelas</th>
      <th scope="col">password</th>
      <th scope="col">roles</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
    <?php foreach($resepsionis as $data) :?>
    <tr>
        <td><?= $i; ?></td>
        <td><?= $data["username"];?></td>
        <td><?= $data["nama_lengkap"];?></td>
        <td><?= $data["kelas"];?></td>
        <td><?= $data["password"];?></td>
        <td><?= $data["roles"];?></td>
        <td>
            <a href="editresepsionis.php?id=<?= $data["id_resepsionis"];?>" class="edit btn btn-success">edit</a>
            <a href="hapusresepsionis.php?id=<?= $data["id_resepsionis"];?>" class="hapus btn btn-danger">hapus</a>
        </td>
    </tr>
    <?php $i++?>
    <?php endforeach;?>
  </tbody>
</table>

 </div>
  
</body>
</html>


