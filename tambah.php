<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Mahasiswa</title>
    <link rel="stylesheet" href="tambah.css">
</head>
<body>
    <div class="navbar">
        <div id="nama">
            <h3>Speda</h3>
        </div>
        <div class="navbar-item">
           <a href="home.php"><h4>Home</h4></a>
        </div>
        <div class="navbar-item">
            <h4>Tambah Mahasiswa</h4>
        </div>
    </div>
    
    <div class="boxt-1">
        <h1>Tambah Mahasiswa</h1>
        <form action="logic/create.php" method="post">
            <div class="form-nim">
            <h4>NIM</h4>
                <input type="text" id="cari" name="nim" width="500px" placeholder="Masukkan NIM Mahasiswa">
            </div>
            <div class="form-nama">
            <h4>Nama</h4>
                <input type="text" id="cari" name="nama"  width="500px" placeholder="Masukkan Nama Mahasiswa">
            </div>
            <div class="form-kelamin">
                <h4>Jenis Kelamin</h4>
                <label>
                    <div class="radio">
                    <input type="radio" name="gender" value="laki-laki" style="width: 50px;">laki-laki
                    </div>
                <label>
                    <div class="radio">
                    <input type="radio" name="gender" value="perempuan" style="width: 50px;">perempuan
                    </div>
                </label>
            </div>
            <button id="button">Submit</button>
        </form>
    </div>
</body>
</html>