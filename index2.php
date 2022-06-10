<?php
session_start();
//kalau belum login arahkan ke login.php sekalian dikasih pesan
if($_SESSION['userweb']!='login'){
    echo '<script>alert("Anda belum login, silahkan login");</script>';
    header ("location:login.php");
}
include 'koneksi.php';
$tampil = $conn->query("select * from `buku`");
?>
<table border='1'>
<a href="tambah.php">TAMBAH</a> <br> 
<a href="logout.php">LOGOUT</a> <br> <br>

<tr>
    <th>ID</th>
    <th>judul</th>
    <th>Penerbit</th>
    <th>Tahun terbit</th>
    <th>Pengarang</th>
    <th>Aksi</th>
</tr>
<?php foreach($tampil as $row) { ?>
<tr>
    <td><?=$row['id_buku']?></td>
    <td><?=$row['judul']?></td>
    <td><?=$row['penerbit']?></td>
    <td><?=$row['tahun_terbit']?></td>
    <td><?=$row['pengarang']?></td>
    <td><a onclick="return confirm('apakah kamu ingin mengahapus')" href="hapus.php?id_buku=<?=$row['id_buku'] ?>">delete</a>|
                <a href="edit.php?id_buku=<?=$row['id_buku'] ?>">Edit</a>
</tr>
<?php } ?>
</table>



