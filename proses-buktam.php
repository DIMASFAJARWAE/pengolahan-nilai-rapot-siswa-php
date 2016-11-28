<?php

define('IN_SCRIPT',true);
include 'koneksi.php';
include("katakotor.php");

function filter_bad_words($text){
	global $settings, $lang;

	$file =$settings['filter_lang'];
	
	if (file_exists($file)){
		include_once($file);
	}

	foreach ($settings['badwords'] as $k => $v){
		$text = preg_replace("/\b$k\b/i",$v,$text);
	}
	
	return $text;
}

$nama = $_POST['nama'];
$email = $_POST['email'];
$kom = $_POST['komentar'];
$k = filter_bad_words("$kom");

$sql = mysql_query("insert into buku_tamu values ('','$nama','$email','$k')");
if($sql){
	echo "<script>window.location=('index.php?menu=buku_tamu');</script>";
}
?>