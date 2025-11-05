<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Mahasiswa</title>
    <link rel="stylesheet" href="update.css">
</head>
<body>
    <?php
    require "config/koneksi.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM mahasiswa WHERE id='$id'";
    $result = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_assoc($result);
    ?>
    <div class="navbar">
        <div id="nama">
            <h3>Speda</h3>
        </div>
        <div class="navbar-item">
           <a href="home.php"><h4>Home</h4></a>
        </div>
        <div class="navbar-item">
            <h4>Update Mahasiswa</h4>
        </div>
    </div>
    
    <div class="boxt-1">
        <h1>Update Mahasiswa</h1>
        <form action="logic/update.php" method="post">
            <div class="form-nim">
            <h4>NIM</h4>
                <input type="text" id="cari" width="500px" placeholder="Masukkan NIM Mahasiswa" value="<?= $data['nim']?>">
            </div>
            <div class="form-nama">
            <h4>nama</h4>
                <input type="text" id="cari" width="500px" placeholder="Masukkan Nama Mahasiswa" value="<?= $data['nama']?>">
            </div>
            <div class="form-kelamin">
                <h4>Jenis Kelamin</h4>
                <label>
                    <div class="radio">
                    <input type="radio" name="gender" style="width: 50px;" value="laki-laki" <?= ($data['gender'] == 'Laki-laki') ? 'checked' : ''; ?>>laki-laki
                    </div>
                <label>
                    <div class="radio">
                    <input type="radio" name="gender"  style="width: 50px;" value="perempuan" <?= ($data['gender'] == 'Perempuan') ? 'checked' : ''; ?>>perempuan
                    </div>
                </label>
            </div>
            <button id="button">Update</button>
        </form>
    </div>
</body>
</html>