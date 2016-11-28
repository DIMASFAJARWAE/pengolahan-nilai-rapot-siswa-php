<?PHP 
	include "koneksi.php";
    if(isset($_POST['add']))
    {
       $kode = addslashes ($_POST['kd']);
       $nama = addslashes ($_POST['nm_siswa']);
	   $alamat = addslashes ($_POST['alamat']);
	   $kec = addslashes ($_POST['kec']);
	   $kab = addslashes ($_POST['kab']);
       $prov = addslashes ($_POST['prov']);
	   $agama = addslashes ($_POST['agama']);
	   $saudara = addslashes($_POST['saudara']);
	   $jk = addslashes ($_POST['jk']);
	   $kegemaran = addslashes ($_POST['kegemaran']);
	   $ttl = addslashes ($_POST['ttl']);
	   $beasiswa = addslashes ($_POST['beasiswa']);
	   $nma = addslashes($_POST['nama_ayah']);
	   $pek = addslashes ($_POST['kerja_ayah']);
	   $peng = addslashes ($_POST['penghasilan']);
	   $ibu = addslashes ($_POST['nama_ibu']);
	   $alm = addslashes ($_POST['alamat']);
	   $tel = addslashes ($_POST['tel']);
	   $pend = addslashes ($_POST['pend_ortu']);
	   $id = addslashes ($_POST['id_ortu']);
	   
	   
    $sql = "INSERT INTO calon_siswa VALUES('$kode','$nama', '$alamat', '$kec', '$kab', '$prov', '$agama', '$jml_saudara', '$jk','$ttl','$kegemaran', '$beasiswa')";
	
	$qu = "INSERT INTO ortu values('$id','$nma','$pek,'$ibu','$alm','$tel','$pend')";
	   
    $myQry	= mysql_query($sql) or die ("Gagal query ".mysql_error());
		if($myQry){
			mysql_query("INSERT INTO ortu values('$id','$nma','$pek,'$ibu','$peng''$alm','$tel','$pend')");
			
		echo "<script> alert('data berhasil disimpan'); window.location='index.php?menu=daftar'; </script>";
		}
		exit;
	}
    else
    {
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
                        <label class="control-label">1. IDENTITAS SISWA</label>
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
                                <option value="Katolik">Katolik</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                            </select>
                        </div>
                    </div>       	
                    <div class="form-group">
                        <label class="col-md-3 control-label">Saudara</label>
                        <div class="col-md-6">
                        	<input name="saudara" class="form-control" type="email" id="emp_salary" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Jenis kelamin</label>
                        <div class="col-md-6">
                            <select class="form-control" id="emp_salary" name="kelamin">
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
                        <label class="col-md-3 control-label">Telephone/HP</label>
                        <div class="col-md-6">
                        	<input name="telp" class="form-control" type="text" id="emp_salary" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Beasiswa</label>
                        <div class="col-md-6">
                        	<select class="form-control" id="emp_salary" name="beasiswa">
                                <option value="L">Sudah Pernah</option>
                                <option value="P">Belum Pernah</option>
                            </select>
                        </div>
                    </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label">2. IDENTITAS ORANG TUA</label>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Nama Ayah</label>
                            <div class="col-md-6">
                                <input name="alamat" class="form-control" type="text" id="emp_salary" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Pekerjaan Ayah</label>
                            <div class="col-md-6">
                                <input name="alamat" class="form-control" type="text" id="emp_salary" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Nama Ibu</label>
                            <div class="col-md-6">
                                <input name="alamat" class="form-control" type="text" id="emp_salary" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Alamat Ortu</label>
                            <div class="col-md-6">
                                <input name="alamat" class="form-control" type="text" id="emp_salary" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Telp</label>
                            <div class="col-md-6">
                                <input name="alamat" class="form-control" type="text" id="emp_salary" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Pendidikan ortu</label>
                            <div class="col-md-6">
                                <input name="alamat" class="form-control" type="text" id="emp_salary" required>
                            </div>
                        </div>
                        
                        <br><br>
                        <div class="form-group">
                            <label class="control-label">3. NILAI CALON SISWA</label>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">No. Ijazah</label>
                            <div class="col-md-6">
                                <input name="alamat" class="form-control" type="text" id="emp_salary" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Asal Sekolah</label>
                            <div class="col-md-6">
                                <input name="alamat" class="form-control" type="text" id="emp_salary" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Jumlah Mapel STTB</label>
                            <div class="col-md-6">
                                <input name="alamat" class="form-control" type="text" id="emp_salary" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Tahun STTB</label>
                            <div class="col-md-6">
                                <input name="alamat" class="form-control" type="text" id="emp_salary" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Jumlah Nilai STTB</label>
                            <div class="col-md-6">
                                <input name="alamat" class="form-control" type="text" id="emp_salary" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Jumlah Mapel UAN</label>
                            <div class="col-md-6">
                                <input name="alamat" class="form-control" type="text" id="emp_salary" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Jumlah Nilai UAN</label>
                            <div class="col-md-6">
                                <input name="alamat" class="form-control" type="text" id="emp_salary" required>
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
<?php
    }
    ?>