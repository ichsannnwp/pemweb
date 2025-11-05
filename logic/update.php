<?php
include "../config/koneksi.php";
$id = $_POST['id'] ?? '';
$nama = $_POST['nama'] ?? '';
$nim = $_POST['nim']?? '';
$gender = $_POST['gender'] ?? NULL;

$sql = "UPDATE mahasiswa SET nama='$nama=?', nim='$nim=?', gender='$gender=?' WHERE id=$id=?";
$result = mysqli_query($koneksi, $sql);

if($result){
    header("Location: ../home.php");
}else{
    echo "Error : Gagal";
}



?>