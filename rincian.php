<section class="container">
    <div class="row">
        <div class="col-md-3">
			<?php include 'menu-kiri.php';?>
        </div>
        <?php
        	include 'koneksi.php';
			$brt=mysql_query("select * from berita where kd_berita='$_GET[kd]'");
			$b=mysql_fetch_array($brt);
		?>
        <div class="col-md-9">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4><?php echo $b[1]?></h4>
                </div>
                <div class="panel-body">
                   <p><?php echo $b[3];?></p>
                   <a class="btn btn-primary" href="index.php" role="button">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</section>