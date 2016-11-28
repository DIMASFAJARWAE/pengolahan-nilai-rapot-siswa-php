<section class="container">
    <div class="row">
        <div class="col-md-3">
			<?php include 'menu-kiri.php';?>
		</div>

        <div class="col-sm-6 col-md-9">
    <?php	
			
		$dataPerPage=4; //jml data perhalaman
						
		if (isset($_GET['page'])) {
			$noPage = $_GET['page'];
		} else $noPage = 1;
	
		//perhitungan offSet						
		$offSet = ($noPage - 1) * $dataPerPage;
		
		$result = mysql_query('SELECT * FROM berita ORDER BY tanggal DESC limit '.$offSet.','.$dataPerPage);
		
		while($row = mysql_fetch_array($result)) { 
		$isi_psn=htmlentities(strip_tags($row['konten']));
		$isi=substr($isi_psn,0,500);
		$isi=substr($isi_psn,0,strrpos($isi," "));
			 ?> 
        
        	<div class="col-md-12">
            <div class="panel panel-primary text-justify">
                <div class="panel panel-heading">
                    <h4><?php echo $row['judul']?></h4>
                    </div>
                    <div class="panel-body">
                    <p><?php echo $isi." ..."?></p>
                    <p><a class="btn btn-info" href="index.php?menu=rinci&kd=<?php echo $row['kd_berita']?>" role="button">Selengkapnya</a></p>
                    </div>
            </div>
            </div>
	<?php }?>
    
    <div class="col-lg-12" align="center">
        <ul class="pagination list-unstyled">
        <?php
            $hasil = mysql_query("SELECT COUNT(*) AS jmlData FROM berita ");
            $data = mysql_fetch_array($hasil);
            $jmlData = $data['jmlData']; 
            //Menentukan jumlah halaman yang muncul berdasarkan jumlah semua data
            $jmlPage = ceil($jmlData/$dataPerPage);
            
            //PAGINATION 
			if ($noPage > 1) echo "<li><a href='".$_SERVER['PHP_SELF']."?".($noPage-1)."'>Prev</a></li>";
			for ($page = 1; $page <= $jmlPage; $page++){
			$showPage = $page;
			if ((($page >= $noPage - 2) && ($page <= $noPage + 2)) || ($page == 1) || ($page == $jmlPage)){
				//if (($showPage == 1) && ($page !=2)) echo "<li class=\"disabled\"><span> ... </span></li>";
				//if (($showPage !== ($jmlPage - 1)) && ($page == $jmlPage)) echo "<li class=\"disabled\"><span> ... </span></li>";
				if ($page == $noPage) echo "<li class=\"disabled\"><span><b>".$page."</b></span></li>";
				else echo "<li><a href='".$_SERVER['PHP_SELF']."?page=".$page."'>".$page."</a></li>";
				}}
			if ($noPage < $jmlPage) echo "<li><a href='".$_SERVER['PHP_SELF']."?page=".($noPage+1)."'>Next</a></li>";
        ?>
        </ul>
    </div>
        
    </div>
    </div>
</section>