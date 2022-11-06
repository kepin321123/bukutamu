<?php

require 'koneksi.php';



function query($query){
    global $conn;

    $rows = [];
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
    }

    return $rows;
}



function tambahresepsionis($data){
    global $conn;

    $username = ($data["username"]);
    $nama_lengkap = ($data["nama_lengkap"]);
    $kelas = ($data["kelas"]);
    $passwrod = ($data["password"]);
    $roles = ($data["roles"]);


    $query = "INSERT INTO resepsionis VALUES(NULL, '$username', '$nama_lengkap', '$kelas', '$passwrod', '$roles')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function editresepsionis($data){
    global $conn;

    
    $id= htmlspecialchars ($data["id_resepsionis"]);
    $username= htmlspecialchars ($data["username"]);
    $nama_lengkap = htmlspecialchars ($data["nama_lengkap"]);
    $kelas = htmlspecialchars ($data["kelas"]);
    $password = htmlspecialchars($data["password"]);
    $roles = htmlspecialchars ($data["roles"]);

    $query = "UPDATE resepsionis SET
    username = '$username',
    nama_lengkap = '$nama_lengkap',
    kelas = '$kelas',
    password = '$password',
    roles = '$roles' WHERE id_resepsionis = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapusresepsionis($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM resepsionis WHERE id_resepsionis = '$id'");
    return mysqli_affected_rows($conn);
}

function tambahguru($data){
    global $conn;

    $nama_lengkap = ($data["nama_lengkap"]);
    $job = ($data["job"]);
    $foto = $_FILES ["foto"]["name"];
    $files = $_FILES["foto"]["tmp_name"];
    $roles = ($data["roles"]);

    $query = "INSERT INTO gtk VALUES(NULL, '$nama_lengkap', '$job', '$roles', '$foto')";
    move_uploaded_file($files, "foto/".$foto);

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapusguru($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM gtk WHERE id_gtk = '$id'");
    return mysqli_affected_rows($conn);
}


function editguru($data){
    global $conn;

    
    $id= htmlspecialchars ($data["id_gtk"]);
    $nama_lengkap = htmlspecialchars ($data["nama_lengkap"]);
    $job = htmlspecialchars ($data["job"]);
    $foto = $_FILES ["foto"]["name"];
    $files = $_FILES["foto"]["tmp_name"];
    $roles = htmlspecialchars ($data["roles"]);


    if(empty($foto)){
        $query = "UPDATE gtk SET
        nama_lengkap = '$nama_lengkap',
        job = '$job',
        roles = '$roles' WHERE id_gtk = '$id'";

        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);

    }else{
        $query = "UPDATE gtk SET
        nama_lengkap = '$nama_lengkap',
        job = '$job',
        foto = '$foto',
        roles = '$roles' WHERE id_gtk = '$id'";

        move_uploaded_file($files, "foto/".$foto);

        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }


 
}





?>