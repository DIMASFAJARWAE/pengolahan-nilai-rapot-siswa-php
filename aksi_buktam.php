<?php
include 'koneksi.php';
$nama = $_POST['Nama'];
$email = $_POST['email'];
$kom = $_POST['komentar'];

$sql = mysql_query("insert into buku_tamu values ('','$nama','$email','$kom')");
	if($sql){
			echo "<meta http-equiv='refresh' content='0; url=index.php'>";
	}
?>