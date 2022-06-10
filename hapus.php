<?php
include 'koneksi.php';
$id = $_GET['id_buku'];
$sql = "delete  from buku where id_buku='$id'";

$hapus = $conn->query($sql);
echo '<script>window.location.href="index.php"</script>';
