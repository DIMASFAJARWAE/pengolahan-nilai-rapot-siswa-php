<section class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4>Visi Misi Sekolah</h4>
                </div>
                <div class="panel-body">
				<?php 
				include 'koneksi.php';
				$p=mysql_query("select isi from profil where kd_profil='2'");
				$que=mysql_fetch_array($p);
				echo $que [0];
				?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4>Struktur Organisasi </h4>
                </div>
                <div class="panel-body">
               	<?php 
				include 'koneksi.php';
				$p=mysql_query("select isi from profil where kd_profil='3'");
				$qu=mysql_fetch_array($p);
				echo $qu [0];
				?>
                
                </div>
            </div>
        </div>
    </div>
</section>