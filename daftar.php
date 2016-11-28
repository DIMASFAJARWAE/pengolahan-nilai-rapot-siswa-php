<?PHP
		
	//MEMBUAT KODE ACAK angka&huruf
	function acak($panjang){
		$karakter='ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
		$string = '';
		for ($i=0; $i<$panjang; $i++){
			$pos = rand(0, strlen($karakter)-1);
			$string.=$karakter{$pos};
		}
		return($string);
	}
	
	//kode acak angka
	function kda($panjang){
		$angka='1234567890';
		$string_a = '';
		for ($j=0; $j<$panjang; $j++){
			$pos_a = rand(0, strlen($angka)-1);
			$string_a.=$angka{$pos_a};
		}
		return($string_a);
	}
    ?> 
<div class="container">
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <i class="fa fa-user-md fa-fw "></i> Pendaftaran Siswa Baru
			</div>
            <div class="panel-body">
                <form class="form-horizontal" method="post" action="<?php $_PHP_SELF ?>">
                <div class="col-lg-6">
                	
                    <div class="form-group">
                        <label class="control-label">1. PILIH JURUSAN</label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Pilih Jurusan</label>
                        <div class="col-md-6">
                            <select class="form-control" id="emp_salary" name="jurusan">
                                <option value="TBS">Tata Busana</option>
                                <option value="TSM">Teknik Otomotif Sepeda Motor</option>
                            </select>
                        </div>
                    </div>       	
                    <br>
                    <div class="form-group">
                        <label class="control-label">2. IDENTITAS SISWA</label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Nama</label>
                        <div class="col-md-6">
                        	<input name="nama" class="form-control" type="text" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Alamat</label>
                        <div class="col-md-6">
                        	<input name="alamat" class="form-control" type="text" id="emp_salary" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Kecamatan</label>
                        <div class="col-md-6">
                        	<input name="kec" class="form-control" type="text" id="emp_salary" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Kabupaten</label>
                        <div class="col-md-6">
                        	<input name="kab" class="form-control" type="text" id="emp_salary" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">prov</label>
                        <div class="col-md-6">
                        	<input name="prov" class="form-control" type="text" id="emp_salary" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Agama</label>
                        <div class="col-md-6">
                            <select class="form-control" id="emp_salary" name="agama">
                                <option value="Islam">Islam</option>
                                <option value="kristen">kristen</option>
                                <option value="hindu">hindu</option>
                                <option value="khatolik">Khatolik</option>
                                <option value="Budha">Budha</option>
                            </select>
                        </div>
                    </div>       	
                    <div class="form-group">
                        <label class="col-md-3 control-label">Saudara</label>
                        <div class="col-md-6">
                        	<input name="jml_saudara" class="form-control" type="text" id="emp_salary" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Jenis kelamin</label>
                        <div class="col-md-6">
                            <select class="form-control" id="emp_salary" name="jk">
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                    </div>       	
                    <div class="form-group">
                        <label class="col-md-3 control-label">Kegemaran</label>
                        <div class="col-md-6">
                        	<textarea name="kegemaran" cols="3" rows="5" class="form-control"> </textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Tempat tgl Lahir</label>
                        <div class="col-md-6">
                        	<input name="ttl" class="form-control" type="text" id="emp_salary" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Beasiswa</label>
                        <div class="col-md-6">
                        	<select class="form-control" id="emp_salary" name="beasiswa">
                                <option value="Belum Pernah">Sudah Pernah</option>
                                <option value="Sudah Pernah">Belum Pernah</option>
                            </select>
                        </div>
                    </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label">3. IDENTITAS ORANG TUA</label>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Nama Ayah</label>
                            <div class="col-md-6">
                                <input name="nama_ayah" class="form-control" type="text" id="emp_salary" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Pekerjaan Ayah</label>
                            <div class="col-md-6">
                                <input name="kerja_ayah" class="form-control" type="text" id="emp_salary" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Nama Ibu</label>
                            <div class="col-md-6">
                                <input name="nama_ibu" class="form-control" type="text" id="emp_salary" required>
                            </div>
                        </div>
                       <div class="form-group">
                        <label class="col-md-4 control-label">Penghasilan</label>
                        <div class="col-md-6">
                        	<select class="form-control" id="emp_salary" name="penghasilan">
                                <option value="<500.000">kurang dari 500.000</option>
                                <option value="1.000.000">1.000.000</option>
                                <option value=">1.000.000">lebih dari 1.000.000</option>
                            </select>
                        </div>
                    </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Alamat Ortu</label>
                            <div class="col-md-6">
                                <input name="alamat ortu" class="form-control" type="text" id="emp_salary" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Telp</label>
                            <div class="col-md-6">
                                <input name="tel" class="form-control" type="text" id="emp_salary" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Pendidikan Terakhir</label>
                            <div class="col-md-6">
                                <select class="form-control" id="emp_salary" name="pend_ortu">
                                    <option value="TIDAK ADA">TIdak Ada</option>
                                    <option value="SD">SD</option>
                                    <option value="SMP"> SMP </option>
                                    <option value="SMA/SMK">SMK/SMA</option>
                                     <option value="Perguruan tinggi">Pergururan Tinggi</option>
                                </select>
                            </div>
                        </div>
                        
                        <br><br>
                        <div class="form-group">
                            <label class="control-label">4. NILAI CALON SISWA</label>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">No. Ijazah</label>
                            <div class="col-md-6">
                                <input name="no_ijazah" class="form-control" type="text" id="emp_salary" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Asal Sekolah</label>
                            <div class="col-md-6">
                                <input name="asal_sekolah" class="form-control" type="text" id="emp_salary" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Jumlah Mapel STTB</label>
                            <div class="col-md-6">
                                <input name="jml_mapel_STTB" class="form-control" type="text" id="emp_salary" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Tahun STTB</label>
                            <div class="col-md-6">
                                <input name="tahun_STTB" class="form-control" type="text" id="emp_salary" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Jumlah Nilai STTB</label>
                            <div class="col-md-6">
                                <input name="jml_nilai_STTB" class="form-control" type="text" id="emp_salary" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Jumlah Mapel UAN</label>
                            <div class="col-md-6">
                                <input name="jml_mapel_UAN" class="form-control" type="text" id="emp_salary" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Jumlah Nilai UAN</label>
                            <div class="col-md-6">
                                <input name="jml_nilai_UAN" class="form-control" type="text" id="emp_salary" required>
                            </div>
                        </div>
                    </div>
                   	<div class="col-lg-10">
                    	<input name="add" type="submit" id="add" class="btn btn-primary pull-right"  value="Datar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<?PHP 
	include "koneksi.php";
    if(isset($_POST['add']))
    {
       $nama = addslashes ($_POST['nama']);
	   $alamat = addslashes ($_POST['alamat']);
	   $kec = addslashes ($_POST['kec']);
	   $kab = addslashes ($_POST['kab']);
       $prov = addslashes ($_POST['prov']);
	   $agama = addslashes ($_POST['agama']);
	   $sd = addslashes($_POST['jml_saudara']);
	   $jk = addslashes ($_POST['jk']);
	   $kegemaran = addslashes ($_POST['kegemaran']);
	   $ttl = addslashes ($_POST['ttl']);
	   $beasiswa = addslashes ($_POST['beasiswa']);

	   $nma = addslashes($_POST['nama_ayah']);
	   $pek = addslashes ($_POST['kerja_ayah']);
	   $ibu = addslashes ($_POST['nama_ibu']);
	   $peng = addslashes ($_POST['penghasilan']);
	   $alm = addslashes ($_POST['alamat_ortu']);
	   $tel = addslashes ($_POST['tel']);
	   $pend = addslashes ($_POST['pend_ortu']);
	   
	   $msstb= addslashes($_POST['jml_mapel_STTB']);
	   $tsstb= addslashes($_POST['tahun_STTB']);
	   $nsstb= addslashes($_POST['jml_nilai_STTB']);
	   $muan= addslashes($_POST['jml_mapel_UAN']);
	   $nUAN= addslashes($_POST['jml_nilai_UAN']);
	   
	   $now=gmdate("Y-m-d");
	   $asal_sek= addslashes($_POST['asal_sekolah']);
	   $no_ij= addslashes($_POST['no_ijazah']);
	   $jurusan= addslashes($_POST['jurusan']);
	   
	  
	   	if($jurusan=='TBS'){
	   		$kd_cs=kda(3);
			$kd_daftar = "P2";
		   	$kd_nilai  = "U2";
	   	} else {
		   	$kd_cs=kda(7);
		   	$kd_daftar = "P1";
		   	$kd_nilai  = "U1";
		}
	   	
		$beda=acak(3);
		$kd_ortu = kda(5);
	   
		$input_siswa = mysql_query("INSERT INTO calon_siswa VALUES('$kd_cs', '$nama', '$alamat', '$kec', '$kab', '$prov', '$agama', '$sd','$jk','$ttl', '$kegemaran', '$beasiswa', '$kd_ortu')") or die ("Gagal query calon siswa ".mysql_error());
		
		$input_nilai = mysql_query("INSERT INTO nilai_un values('$kd_nilai$beda', '$msstb', '$tsstb', '$nsstb', '$muan', '$nUAN', '$kd_daftar$beda')") or die ("Gagal query input nilai ".mysql_error());
		
		$input_daftar = mysql_query("INSERT INTO pendaftaran values('$kd_daftar$beda', '$now', '$asal_sek', '$no_ij', '$kd_cs', '$jurusan')") or die ("Gagal query input daftar ".mysql_error());
		
		$input_ortu = mysql_query("INSERT INTO ortu values('$kd_ortu', '$nma', '$pek', '$ibu','$peng', '$alm', '$tel', '$pend')") or die ("Gagal query input ortu ".mysql_error());
	
		if($input_siswa && $input_nilai && $input_daftar && $input_ortu){
			echo "<script> alert('data berhasil mendaftar'); window.location='laporan-pendaftaran.php?kode=$kd_daftar$beda'; </script>";
		}
	}
?>