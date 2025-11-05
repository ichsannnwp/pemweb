<?php
include "../config/koneksi.php";
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$gender = $_POST['gender'] ?? NULL;

if ($gender === null) {
    die("Error: Mohon pilih Jenis Kelamin."); 
}

$sql = "INSERT INTO mahasiswa (nim,nama, gender) VALUES (?, ?, ?)";
$stmt = $koneksi->prepare($sql);
$stmt->bind_param("sss", $nim, $nama, $gender);

if($stmt->execute()){
    header("location: ../home.php");
}else{
    echo "Error: $stmt->error";
}
$stmt->close();
$koneksi->close();
exit;

?>