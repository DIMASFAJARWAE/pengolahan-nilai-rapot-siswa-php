<section class="container">
    <div class="row">
        <ul class="portfolio-items col-3"> 
			<?php
                include 'koneksi.php';
                $galeri=mysql_query("select* from galeri");
                while ($g=mysql_fetch_array( $galeri)){
                $f=ltrim($g[2], "../../"); 
            ?>
            <li class="portfolio-item">
                <div class="item-main">
                    <div class="portfolio-image">
                        <img src="<?php echo $f?>" alt="<?php echo $g[1]?>" class="img-responsive" height="200px">
                        <div class="overlay">
                            <a class="preview btn btn-primary" title="<?php echo $g[1]?>" href="<?php echo $f?>">Lihat Gambar</a>
                        </div>
                    </div>
                    <h5><?php echo $g[1]?></h5>
                </div>
            </li>
            <?php 
                 }?>
        </ul>
    </div>
</section>