<?php
include('../../conf/config.php');
$id = $_GET['id'];
$nama = $_GET['nama'];
$nim = $_GET['nim'];
$semester = $_GET['semester'];
$query = mysqli_query($koneksi,"UPDATE tb_mahasiswa SET nama='$nama',nim='$nim',semester='$semester' WHERE id='$id'");
header('Location: ../index.php?page=data-mahasiswa');

?>