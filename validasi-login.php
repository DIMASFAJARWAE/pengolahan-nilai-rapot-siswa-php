<?php
	include "koneksi.php";
	function anti_injection($data){
		$filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
		return $filter;
	}

	$u = anti_injection($_POST['username']);
	$p = anti_injection(md5($_POST['password']));

	$result = mysql_query("SELECT * FROM user WHERE username = '$u' AND password = '$p'") or die(mysql_error());
		
		if(mysql_num_rows($result) == 0){
			echo '<script>alert("Akun tidak ditemukan"); document.location="index.php";</script>';
		} else {
			$row = mysql_fetch_array($result);
			if($row[3]=='0'){
				$_SESSION['administrator']=$row[0];
				echo '<script>alert("Anda Berhasil Login Sebagai Admin"); document.location="admin/index.php";</script>';
			} else if($row[3]=='2'){
				$_SESSION['guru']=$row[0];
				echo '<script>alert("Anda Berhasil Login Sebagai Guru"); document.location="guru/index.php";</script>';
			} else{
				$_SESSION['siswa']=$row[0];
				echo '<script>alert("Anda Berhasil Login Sebagai Siswa"); document.location="siswa/index.php";</script>';
			}
		}
?>