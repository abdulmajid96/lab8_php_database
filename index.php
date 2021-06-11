<?php
include("koneksi.php");

// query untuk menampilkan data
$sql = 'SELECT * FROM data_barang';
$result = mysqli_query($conn, $sql);

?>
<?php require('header.php'); ?>

    <div class="container">
        <h1>Data Barang</h1>
        <a href="tambah.php"><button type="button" style="margin-bottom:1%; margin-top:0%; color: blue;">+ Tambah Barang</button></a>
        <div class="main">
            <table border="1" cellpadding="6" cellspacing="0">
                <tr>
                    <th>Gambar</th>
                    <th>Nama Barang</th>
                    <th>Katagori</th>
                    <th>Harga Jual</th>
                    <th>Harga Beli</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
                <?php if($result): ?>
                <?php while($row = mysqli_fetch_array($result)): ?>
                <tr>
                    <td><img src="gambar/<?= $row['gambar'];?>" alt="<?=
                    $row['nama'];?>"></td>
                    <td><?= $row['nama'];?></td>
                    <td><?= $row['kategori'];?></td>
                    <td><?= $row['harga_beli'];?></td>
                    <td><?= $row['harga_jual'];?></td>
                    <td><?= $row['stok'];?></td>
                    <td><a href="ubah.php?id=<?php echo $row['id_barang']?>"><button type="button" style="color: green;" title="Edit">Ubah</button></a>
                        <a href="hapus.php?id=<?php echo $row['id_barang']; ?>" onclick="deleted()"><button type="button" style="color: red;" title="Delete">Hapus</button></a></td>
                </tr>
                <?php endwhile; else: ?>
                <tr>
                    <td colspan="7">Belum ada data</td>
                </tr>
                <?php endif; ?>
            </table>
        </div>
    </div>
    
<?php require('footer.php'); ?>