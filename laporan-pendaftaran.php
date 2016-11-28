<?php
	require('assets/plugins/plugins/fpdf.php');
	include 'koneksi.php';
	$kd_daftar=$_GET['kode'];

	$que = mysql_query("select pendaftaran.tanggal,pendaftaran.kd_pendaftaran,calon_siswa.nama, calon_siswa.alamat,calon_siswa.kec,calon_siswa.kab,calon_siswa.prov, calon_siswa.agama,calon_siswa.jml_saudara,calon_siswa.jk,calon_siswa.ttl,calon_siswa.kegemaran, calon_siswa.beasiswa, ortu.nama_ayah,ortu.kerja_ayah,ortu.nama_ibu,ortu.penghasilan,ortu.alamat_ortu,ortu.pend_ortu,ortu.telp, nilai_un.jml_mapel_STTB, nilai_un.tahun_STTB, nilai_un.jml_nilai_STTB,nilai_un.jml_mapel_UAN, nilai_un.Jml_nilai_UAN , pendaftaran.jurusan, pendaftaran.asal_sekolah from pendaftaran,calon_siswa,nilai_un,ortu where calon_siswa.id_calon_siswa=pendaftaran.id_calon_siswa and
pendaftaran.kd_pendaftaran=nilai_un.kd_pendaftaran and ortu.id_ortu=calon_siswa.id_ortu
and pendaftaran.kd_pendaftaran='$kd_daftar'") or die (mysql_error());
	//Variabel untuk iterasi
	$i = 0;
	$now=gmdate("d M Y");
	//Mengambil nilai dari query database
	while($data=mysql_fetch_row($que))
	{
		$cell[$i][0] = $data[0];
		$cell[$i][1] = $data[1];
		$cell[$i][2] = $data[2];
		$cell[$i][3] = $data[3];
		$cell[$i][4] = $data[4];
		$cell[$i][5] = $data[5];
		$cell[$i][6] = $data[6];
		$cell[$i][7] = $data[7];
		$cell[$i][8] = $data[8];
		$cell[$i][9] = $data[9];
		$cell[$i][10] = $data[10];
		$cell[$i][11] = $data[11];
		$cell[$i][12] = $data[12];
		$cell[$i][13] = $data[13];
		$cell[$i][14] = $data[14];
		$cell[$i][15] = $data[15];
		$cell[$i][16] = $data[16];
		$cell[$i][17] = $data[17];
		$cell[$i][18] = $data[18];
		$cell[$i][19] = $data[19];
		$cell[$i][20] = $data[20];
		$cell[$i][21] = $data[21];
		$cell[$i][22] = $data[22];
		$cell[$i][23] = $data[23];
		$cell[$i][24] = $data[24];
		$cell[$i][25] = $data[25];
		$cell[$i][26] = $data[26];
		$i++;
	}
	//memulai pengaturan outpur PDF
	class PDF extends FPDF
	{
		//untuk pengaturan header halaman 
		function Header()
			{
				$this->Image('assets/img/LOGO.png',2,1,2,2);
				//Pengaturan Font Header
				$this->SetFont('Times','B','16');
				//Pengaturan warna background Header
				$this->SetFillColor(255,255,255);
				//Pengaturan warna text
				$this->SetTextColor(0,0,0);
				//Pengaturan tulisan di halaman
				$this->SetLeftMargin(4.3);
				$this->SetFont('Times','',16);
				$this->MultiCell(28,0.5,'SMK DIPONEGORO DEPOK YOGYAKARTA',0,'L');
				$this->SetFont('Times','',12);
				$this->MultiCell(28,0.5,'Jl.  Komplek Pondok Pesantren Diponegoro Sembego',0,'L');
				$this->SetFont('Times','',10);
				$this->MultiCell(28,0.5,'RT:01 /RW :38 sleman,Yogyakarta, 55282',0,'L');
				$this->MultiCell(28,0.5,'Tlp:(0274) 589545,',0,'L');
				$this->SetLeftMargin(2);
				
				//garis bawah kop
				$this->Line(2,3.1,19,3.1);
				$this->SetLineWidth(0.1);
				$this->Line(2,3.2,19,3.2);
				$this->SetLineWidth(0);
				$this->Ln();
				$this->Ln();
			}
			
			function Footer(){
				//atur 1.5 cm dr bawah
				$this->SetY(-2);
				//Arial italic 9
				$this->SetFont('Times','',10);
				//kata halaman
				$this->SetLeftMargin(0);
				$this->Ln();
				$this->MultiCell(12,1,'*Serahkan Bukti Pendaftaran Pada Petugas di SMK Diponegoro Yogyakarta',0,'C');
			}
		}
		//pengaturan ukuran kertas P = Portrait
		$pdf = new PDF('P','cm','A4');
		$pdf->AliasNbPages();
		$pdf->Open();
		$pdf->AddPage();
		
	for($j=0;$j<$i;$j++)
		{	
			//Ln() = untuk pindaah baris
			$pdf->SetFont('Times','B','16');
			$pdf->MultiCell(19,0,'Bukti Pendaftaran',0,'C');
			
			$pdf->SetFont('Times','',14);
			$pdf->Cell(14, 0.5, "", 0, 'L');
			$pdf->MultiCell(13, 0.5,"  ".$cell[$j][0], 0, 'L');
			//tabel siswa
			$pdf->Ln(1);
			//menampilkan data dari hasil query database
			$pdf->Cell(5, 0.5, "KODE", 0, 'L');
			$pdf->MultiCell(13, 0.5,":  ".$cell[$j][1], 0, 'L');
			$pdf->Ln(0);
			$pdf->Cell(5, 0.5, "Pilihan Jurusan", 0, 'L');
			$pdf->MultiCell(6, 0.5,":  ".$cell[$j][25], 0, 'L');
			$pdf->Ln();
			$pdf->Cell(5, 0.5, "Nama", 0, 'L');
			$pdf->MultiCell(13, 0.5,":  ".$cell[$j][2], 0, 'L');
			$pdf->Ln(0.1);
			$pdf->Cell(5, 0.5, "Alamat", 0, 'L');
			$pdf->MultiCell(13, 0.5,":  ". $cell[$j][3].", Kec. ".$cell[$j][4].",
			 Kab. ".$cell[$j][5].", Prov. ".$cell[$j][6], 0, 'L');
			$pdf->Ln(0.1);
			$pdf->Cell(5, 0.5, "Agama", 0, 'L');
			$pdf->MultiCell(13, 0.5,":  ".$cell[$j][7], 0, 'L');
			$pdf->Ln(0.1);
			$pdf->Cell(5, 0.5, "Saudara", 0, 'L');
			$pdf->MultiCell(13, 0.5,":  ".$cell[$j][8], 0, 'L');
			$pdf->Ln(0.1);
			$pdf->Cell(5, 0.5, "JK", 0, 'L');
			$pdf->MultiCell(13, 0.5,":  ".$cell[$j][9], 0, 'L');
			$pdf->Ln(0.1);
			$pdf->Cell(5, 0.5, "Tempat tgl lahir", 0, 'L');
			$pdf->MultiCell(13, 0.5,":  ".$cell[$j][10], 0, 'L');
			$pdf->Ln(0.1);
			$pdf->Cell(5, 0.5, "Hobi", 0, 'L');
			$pdf->MultiCell(13, 0.5,":  ".$cell[$j][11], 0, 'L');
			$pdf->Ln(0.1);
			$pdf->Cell(5, 0.5, "Asal Sekolah", 0, 'L');
			$pdf->MultiCell(13, 0.5,":  ".$cell[$j][26], 0, 'L');
			$pdf->Ln(0.1);
			$pdf->Cell(5, 0.5, "Beasiswa", 0, 'L');
			$pdf->MultiCell(13, 0.5,":  ".$cell[$j][12], 0, 'L');
			$pdf->Ln();
			$pdf->Cell(5, 0.5, "Nama Ayah", 0, 'L');
			$pdf->MultiCell(13, 0.5,":  ".$cell[$j][13], 0, 'L');
			$pdf->Ln(0.1);
			$pdf->Cell(5, 0.5, "Nama Ibu", 0, 'L');
			$pdf->MultiCell(13, 0.5,":  ".$cell[$j][15], 0, 'L');
			$pdf->Ln(0.1);
			$pdf->Cell(5, 0.5, "Penghasilan", 0, 'L');
			$pdf->MultiCell(13, 0.5,":  ".$cell[$j][16], 0, 'L');
			$pdf->Ln(0.1);
			$pdf->Cell(5, 0.5, "Pekerjaan", 0, 'L');
			$pdf->MultiCell(13, 0.5,":  ".$cell[$j][14], 0, 'L');
			$pdf->Ln(0.1);
			$pdf->Cell(5, 0.5, "Alamat", 0, 'L');
			$pdf->MultiCell(13, 0.5,":  ".$cell[$j][17], 0, 'L');
			$pdf->Ln(0,2);
			$pdf->Cell(5, 0.5, "Pendidikan Terakhir", 0, 'L');
			$pdf->MultiCell(13, 0.5,":  ".$cell[$j][18], 0, 'L');
			$pdf->Ln(0.1);
			$pdf->Cell(5, 0.5, "No. Telp./HP", 0, 'L');
			$pdf->MultiCell(13, 0.5,":  ".$cell[$j][19], 0, 'L');
			$pdf->Ln();
			$pdf->Cell(5, 0.5, "Jumlah Mapel STTB", 0, 'L');
			$pdf->MultiCell(13, 0.5,":  ".$cell[$j][20], 0, 'L');
			$pdf->Ln(0.2);
			$pdf->Cell(5, 0.5, "Tahun STTB", 0, 'L');
			$pdf->MultiCell(13, 0.5,":  ".$cell[$j][21], 0, 'L');
			$pdf->Ln(0.2);
			$pdf->Cell(5, 0.5, "Jumlah Nilai STTB", 0, 'L');
			$pdf->MultiCell(13, 0.5,":  ".$cell[$j][22], 0, 'L');
			$pdf->Ln(0.2);
			$pdf->Cell(5, 0.5, "Jumlah Mapel UAN", 0, 'L');
			$pdf->MultiCell(13, 0.5,":  ".$cell[$j][23], 0, 'L');
			$pdf->Ln(0.2);
			$pdf->Cell(5, 0.5, "Jumlah Nilai UAN", 0, 'L');
			$pdf->MultiCell(6, 0.5,":  ".$cell[$j][24], 0, 'L');

		}
			$pdf->Ln(1);
			$pdf->Cell(5, 0.5, "Peryataan:", 0, 'L');
			$pdf->Ln(1);
			$pdf->Cell(5, 0.5, "Dengan ini saya menyatakan bahwa data yang saya isikan dalam formulir ini adalah Benar.", 0, 'L');
			$pdf->Ln();
			$pdf->Cell(5, 0.5, "Apabila kemudian hari ternyata data tersebut tidak benar/palsu, maka saya bersedia ditindak", 0, 'L');
			$pdf->Ln();
			$pdf->Cell(5, 0.5, "sesuai dengan aturan/hukum yang berlaku.", 0, 'L');
			$pdf->Ln(1.5);
			$pdf->Cell(10, 0.5, "", 0, 'L');
			$pdf->MultiCell(6, 0.5,"Depok,  ......................... ", 0, 'C');
			$pdf->Ln(1);
			$pdf->Cell(10, 0.5, "", 0, 'L');
			$pdf->MultiCell(6, 0.5,"(.........................................)", 0, 'C');
	//menampilkan output berupa halaman PDF
	$pdf->Output();
?>