<?php 
	include 'koneksi.php';
	$p=mysql_query("select isi from profil where kd_profil='1'");
	$qu=mysql_fetch_array($p);
	$g=ltrim($qu[0],'../');
?>
<header>
    <div class="container">
        <h1>
        	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
            	<a href="index.php"><img src="<?php echo $g ?>" style="width:80%;" class="img-responsive"> </a>
                <br>
            </div>
            <div class="col-lg-10 col-xs-8">
            	<marquee><h2 class="text-canter">SMK DIPONEGORO DEPOK YOGYAKARTA</h2></marquee>
            </div>
        </h1>
    </div>
</header>