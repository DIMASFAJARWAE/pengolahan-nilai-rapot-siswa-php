<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>SMK DIPONEGORO DEPOK SLEMAN YOGYAKARTA</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- PRETTYPHOTO STYLE CSS -->
    <link href="assets/css/prettyPhoto.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS --> 
    <link href="assets/css/style.css" rel="stylesheet" />
    
    <link href="assets/css/calendar.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href="assets/datepicker/css/datepicker.css" rel="stylesheet">
    

</head>
<body > 
	<?php
		error_reporting(0);
    	include 'header.php';
    	include 'slider.php';
		
		$v=$_GET['menu'];
		if($v =='profil'){
			require_once('profil.php');
		} else if($v =='galeri'){
			require_once('galeri.php');
		} else if($v =='kontak'){
			require_once('kontak.php');
		} else if($v =='daftar'){
			require_once('daftar.php');
		} else if($v =='rinci'){
			require_once('rincian.php');
		} else if($v =='buku_tamu'){
			require_once('buktam.php');
		} else if($v =='shoutbox'){
			require_once('shoutbox.php');
			
		} else {
			require_once('home.php');
		}
		
		
    	include 'footer.php';
	?>
    
    <!--/.FOOTER END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/plugins/bootstrap.js"></script>
    <!-- PRETTYPHOTO SCRIPTS  -->
    
	<script src="assets/plugins/jquery.prettyPhoto.js"></script>
  <!-- CUSTOM SCRIPTS  -->
  <script src="assets/js/calendar.js"></script>
    <script src="assets/js/custom.js"></script>
	<script src="assets/datepicker/js/bootstrap-datepicker.js"></script>
     
     <script >	
		//tanggal
		$(".input-group.date").datepicker({
			autoclose: true,
			todayHighlight: true,
		});
		
		$('.carousel').carousel({
			interval: 3600
		})
</body>
</html>
