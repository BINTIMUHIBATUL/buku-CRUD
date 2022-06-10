<form method="POST">
    <input type="text" name="id_buku"placeholder="ID"> <br>
    <input type="text" name="judul" placeholder="Judul"> <br>
    <input type="text" name="penerbit" placeholder="Penerbit"> <br>
    <input type="text" name="tahun_terbit" placeholder="Tahun terbit"> <br>
    <input type="text" name="pengarang" placeholder="Pengarang"> <br>
    <input type="submit" name="kirim"> <br>
</form>
<?php
include 'koneksi.php';
if (isset($_POST['kirim'])) {
    $id_buku      = $_POST['id_buku']; 
    $judul        = $_POST['judul']; 
    $penerbit     = $_POST['penerbit']; 
    $tahun_terbit = $_POST['tahun_terbit']; 
    $pengarang    = $_POST['pengarang']; 
    $sql ="insert into buku(id_buku,judul,penerbit,tahun_terbit,pengarang) values('$id_buku','$judul','$penerbit','$tahun_terbit','$pengarang');";
    $tambah = $conn->query($sql);
    echo '<script>window.location.href="index.php"</script>';
}
