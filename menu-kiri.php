            <div class="panel panel-primary">
                <div class="panel-heading">
                <h4>Berita Terbaru</h4>
                </div>
                <ul class="list-group">
                	<?php
						include 'koneksi.php';
                    	$mn=mysql_query("select kd_berita, judul from berita order by tanggal limit 6");
						while($m=mysql_fetch_array($mn)){
					?>
                	<a href="index.php?menu=rinci&kd=<?php echo $m['0']?>" class="list-group-item"><?php echo $m[1]?></a>
                    <?php }?>
                </ul>
     		</div>
            
            
            <div class="panel panel-primary">
                <div class="panel-body">
				<?php include "koneksi.php";?>
					<script language="JavaScript" type="text/javascript">
                      function addSmiley(textToAdd){
                      document.formshout.pesan.value += textToAdd;
                      document.formshout.pesan.focus();
                    }
                    </script>
				<?php
				$qshoutbox=mysql_num_rows(mysql_query("select * from shoutbox"));
				if ($qshoutbox > 0){
				  echo "<img src='shoutbox.jpg' /><br /><br />";
				  echo "<iframe src='shoutbox.php' width=230 height=250 border=1 solid></iframe><br /><br />";
				  echo "<form class=\"form-horizontal\" name=formshout action=simpanshoutbox.php method=POST>
							<div class=\"form-group\">
								<label class=\"col-md-2 control-label\">judul</label>
								<div class=\"col-md-10\">
									<input name=\"nama\" class=\"shout form-control\" type=\"text\" id=\"emp_salary\">
								</div>
							</div>
							<div class=\"form-group\">
								<label class=\"col-md-2 control-label\">web</label>
								<div class=\"col-md-10\">
									<input name=\"website\" class=\"shout form-control\" type=\"text\" id=\"emp_salary\">
								</div>
							</div>
							<div class=\"form-group\">
								<label class=\"col-md-2 control-label\">Pesan</label>
								<div class=\"col-md-10\">
									<textarea class=\"shout form-control\" name='pesan'></textarea>
								</div>
							</div>
							<div class=\"form-group container\">
						";
				?>
                    <a onClick="addSmiley(':-)')"><img src='smiley/1.gif'></a> 
                    <a onClick="addSmiley(':-(')"><img src='smiley/2.gif'></a>
                    <a onClick="addSmiley(';-)')"><img src='smiley/3.gif'></a>
                    <a onClick="addSmiley(';-D')"><img src='smiley/4.gif'></a>
                    <a onClick="addSmiley(';;-)')"><img src='smiley/5.gif'></a>
                    <a onClick="addSmiley('<:D>')"><img src='smiley/6.gif'></a>
				<?php
  				echo "</div>
					  <div class=\"form-group container\">
					    <input class='shout btn btn-primary btn-xs' type=submit name=submit value=Kirim>
					  	<input class='shout btn btn-primary btn-xs' type=reset name=reset value=Reset>
					  </div>
        		</form><br />";
		}
?>

            	</div>
            </div>
            
            <div class="panel panel-primary">
                <div class="panel-heading">
                <h4>Kalender</h4>
                </div>
				<div class="panel-body">
                    <h2 class="time"></h2>
                    <h3 class="month"></h3>
                    <table id="calendar" class="calendar text-center">
                    	<thead>
                    	</thead>
                    	<tbody>
                    	</tbody>
                	</table><br>
                	<input type="button" name="last" id="last" value="Previous" class="spasi btn btn-xs btn-info">
                	<input type="button" name="current" id="current" value="Current" class="btn btn-xs btn-info">
                	<input type="button" name="next" id="next" value="Next" class="btn btn-xs btn-info">   
            	</div>
     		</div>
            