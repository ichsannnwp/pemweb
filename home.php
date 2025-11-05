<?php
include "config/koneksi.php";
$sql = "SELECT * FROM mahasiswa";
$result = mysqli_query($koneksi, $sql);
?>

<head>
    <title>Home</title>
    <link rel="stylesheet" href="home.css">
    <script>
    function konfirmasiHapus() {
    return confirm("Apakah anda yakin menghapus mahasiswa?");
  }
</script>
</head>
<body>
    <div class="navbar">
        <div id="nama">
            <h3>Speda</h3>
        </div>
        <div class="navbar-item">
            <h4>Home</h4>
        </div>
        <div class="navbar-item">
            <a href="tambah.php"><h4>Tambah Mahasiswa</h4></a>
        </div>
    </div>
    <h1>qerwerwerwerewrwer</h1>

    <div class="box">
        <div class="search">
            <h1>Daftar Mahasiswa</h1>
            <input type="text" id="cari" placeholder="Cari Mahasiswa" width="500px">
            <button id="button" style="width: 80px; height: 30px;">Search</button>

        </div>

        <table>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Action</th>
            </tr>
            <?php if(mysqli_num_rows($result) > 0) : ?>
                <?php
                    $i = 1;
                    while($data = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $i++?></td>
                <td><?= $data['nim']?></td>
                <td><?= $data['nama']?></td>
                <td><?= $data['gender']?></td>
                <td>
                    <div class="action"><a class="update" href="update.php?id=<?= $data['id']?>" style="margin-right: 10px;">Update</a>
                    <a class="delete" href="logic/delete.php?id=<?= $data['id']?>">Delete</a></div>
                </td>
            </tr>
                <?php endwhile ?>

            <?php else : ?>
            <tr>
                <td colspan= "5">tidak ada data</td>
            </tr>
            <?php endif; ?>
        </table>
    </div>


    
</body>