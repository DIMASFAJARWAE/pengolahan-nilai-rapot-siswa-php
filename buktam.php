
<?php define('IN_SCRIPT',true);
require('katakotor.php');?>
<section class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <form method="post" action="proses-buktam.php">
                        <div class="form-group">
                            <input type="text" class="form-control text-area" name="nama" placeholder="masukan nama">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="masukan email" required>
                        </div>
                        <div class="form-group">
                            <textarea type="text" class="form-control"	name="komentar" placeholder="saran " required></textarea>
                        </div>
                        <input type="submit" class="btn btn-danger" value="kirim">
                    </form>
                   </div>
  		       </div>
           	</div>
            <div class="col-sm-8 col-md-9">
            <div class="panel panel-primary text-justify">
                <div class="panel-heading">
                <h4>Berita Terbaru</h4>
                </div>
                <ul class="list-group">
                	<?php
						include 'koneksi.php';
                    	$mn=mysql_query("select nama,komentar from buku_tamu");
						while($m=mysql_fetch_array($mn)){
					?>
                	<li href="#" class="list-group-item">
						<h4 class="list-group-item-heading"><i class="fa fa-user">  <?php echo $m['0']?></i></h4>
                        <p class="list-group-item-text"><?php echo $m['1']?></p>
                    </li>
                    <?php } ?>
                </ul>
    		</div>
            </div>
  	    </div>
  </section>