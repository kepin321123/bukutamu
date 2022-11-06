<?php 
session_start();
 require 'function.php';

$guru = query("SELECT * FROM gtk");

?>

<?php require 'navbar.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>data guru JP 1</h2>

    <a href="tambahguru.php" class="tambah btn btn-primary btn-lg">tambah data</a>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">nama_lengkap</th>
      <th scope="col">job</th>
      <th scope="col">roles</th>
      <th scope="col">foto</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
    <?php foreach($guru as $data) :?>
    <tr>
        <td><?= $i; ?></td>
        <td><?= $data["nama_lengkap"];?></td>
        <td><?= $data["job"];?></td>
        <td><?= $data["roles"];?></td>
        <td><img src="foto/<?= $data["foto"];?>" width="80px"></td>
        <td>
          <a href="edit_gtk.php?id=<?= $data["id_gtk"]; ?>" class="edit btn btn-success">edit</a>
          <a href="hapus_gtk.php?id=<?= $data["id_gtk"]; ?>" class="hapus btn btn-danger">hapus</a>
        </td>
    </tr>
    <?php $i++?>
    <?php endforeach;?>
  </tbody>
</table>
</body>
</html>