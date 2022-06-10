<?php
include 'koneksi.php';

$id = $_GET['id_buku'];
$sql = "select * FROM buku where id_buku='$id'";
$tampil = $conn->query($sql)->fetch_assoc();
?>
<form method="POST">
	<input type="text" value="<?=$tampil['id_buku']?>" name="id_buku" placeholder="ID">
	<input type="text" value="<?=$tampil['judul']?>" name="judul" placeholder="judul">
	<input type="text" value="<?=$tampil['penerbit']?>" name="penerbit" placeholder="penerbit">
	<input type="text" value="<?=$tampil['tahun_terbit']?>" name="tahun_terbit" placeholder="tahun_terbit">
    <input type="text" value="<?=$tampil['pengarang']?>" name="pengarang" placeholder="pengarang">
	<input type="submit" name="kirim">
</form>
<?php
include 'koneksi.php';
if(isset($_POST['kirim'])){
	$id_buku = $_POST['id_buku'];
	$judul = $_POST['judul'];
	$penerbit = $_POST['penerbit'];
	$tahun_terbit = $_POST['tahun_terbit'];
    $pengarang = $_POST['pengarang'];
		$sql = "update buku set
				id_buku = '$id',
				judul = '$judul',
				penerbit = '$penerbit',
				tahun_terbit='$tahun_terbit',
                pengarang = '$pengarang'
				where id_buku='$id_buku'
	"; 
	//exit($sql);
		$tambah = $conn->query($sql);
		echo '<script>window.location.href="index.php"</script>';
}


