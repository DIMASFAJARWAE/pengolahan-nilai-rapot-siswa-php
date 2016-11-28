<?PHP 
	session_start();
	include_once "../koneksi.php";
	include "../library/inc.library.php";
	date_default_timezone_set("Asia/Jakarta");
	if(empty($_SESSION['siswa'])) {
		echo "<script> document.location='index.php?menu=materi' </script>";
	}
?>
<div class="col-md-9">
					<div class="panel panel-primary">
					<div class="panel-heading">
			<i class="fa fa-user-md fa-fw"></i>List Tugas Siswa
        </div>
        	<div class="panel-body">
        	<div class="table-responsive tooltip-demo">
				<table class="table table-hover table-bordered" id="dataTables">
					<thead>
						<tr>
							<th>No</th>
                            <th>Tanggal</th>
                            <th>Judul</th>
                            <th>Nama</th>
                            <th>Jurusan</th>
                            <th>Download</th>
						</tr>
					</thead>
					<tbody>
                <?php
	include('../koneksi.php');
	$sql = mysql_query ("SELECT materi.Tanggal, materi.Judul, guru.Nm_guru, materi.Kelas, materi.Url FROM materi, guru WHERE materi.Kd_guru = guru.Kd_guru");
			$no = 1; 
						while($t = mysql_fetch_array($sql)){ ?>
						<tr>
							<td><?php echo $no;?></td>
							<td><?php echo $t[0];?></td>
							<td><?php echo $t[1];?></td>
                            <td><?php echo $t[2];?></td>
							<td><?php echo $t[3]." ".$t[4];?></td>
							<td><a href="download_tgs.php?file=<?php echo $t[5];?>">Download</a></td>
                       	</tr>
						<?php $no ++; } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>                   