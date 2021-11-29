<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Data Penduduk</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<?php if (is_file(LOKASI_LOGO_DESA . "favicon.ico")): ?>
		<link rel="shortcut icon" href="<?= base_url()?><?= LOKASI_LOGO_DESA?>favicon.ico" />
	<?php else: ?>
		<link rel="shortcut icon" href="<?= base_url()?>favicon.ico" />
	<?php endif; ?>
	<link href="<?= base_url()?>assets/css/report.css" rel="stylesheet" type="text/css">
	<!-- TODO: Pindahkan ke external css -->
	<style>
		.textx
		{
		  mso-number-format:"\@";
		}
		td,th
		{
			font-size:6.5pt;
		  mso-number-format:"\@";
		}
	</style>
	</head>
	<body>
		<div id="container">
			<!-- Print Body -->
			<div id="body">
				<div class="header" align="center">
					<label align="left"><?= get_identitas()?></label>
					<h3> DATA PENDUDUK </h3>
					<h3> <?= $_SESSION['judul_statistik']; ?></h3>
				</div>
				<br>
   		 	<table class="border thick">
					<thead>
						<tr class="border thick">
							<th>No</th>
							<th>No. KK</th>
							<th>Nama</th>
							<th>NIK</th>
							<th>Alamat</th>
							<th><?= ucwords($this->setting->sebutan_dusun)?></th>
							<th>RW</th>
							<th>RT</th>
							<th>Jenis Kelamin</th>
							<th>Tempat Lahir</th>
							<th>Tanggal Lahir</th>
							<th>Umur</th>
							<th>Agama</th>
							<th>Pendidikan (dlm KK)</th>
							<th>Pendidikan (Sedang Ditempuh)</th>
							<th>Pekerjaan</th>
							<th>Kawin</th>
							<th>Hub. Keluarga</th>
							<th>Kewarganegaraan</th>
							<th>Golongan Darah</th>
							<th>Akta Lahir</th>
							<th>Dokumen Pasport</th>
							<th>Tanggal Akhir Pasport</th>
							<th>NIK Ayah</th>
							<th>Nama Ayah</th>
							<th>NIK Ibu</th>
							<th>Nama Ibu</th>
							<th>Akta Perkawinan</th>
							<th>Tanggal Perkawinan</th>
							<th>Akta Perceraian</th>
							<th>Tanggal Perceraian</th>
							<th>Cacat</th>
							<th>Cara KB</th>
							<th>Status Hamil</th>
							<th>KTP EL</th>
							<th>Status Rekam</th>
							<th>Status Penduduk</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($main as $data): ?>
						<tr>
							<td><?= $data['no']?></td>
							<td><?= $privasi_nik ? sensor_nik_kk($data['no_kk']) : $data['no_kk']?></td>
							<td><?= strtoupper($data['nama'])?></td>
							<td><?= $privasi_nik ? sensor_nik_kk($data['nik']) : $data['nik']?></td>
							<td><?= strtoupper($data['alamat'])?></td>
							<td><?= strtoupper($data['dusun'])?></td>
							<td><?= $data['rw']?></td>
							<td><?= $data['rt']?></td>
							<td><?= $data['sex']?></td>
							<td><?= $data['tempatlahir']?></td>
							<td><?= tgl_indo($data['tanggallahir'])?></td>
							<td align="right"><?= $data['umur']?></td>
							<td><?= $data['agama']?></td>
							<td><?= $data['pendidikan']?></td>
							<td><?= $data['pendidikan_sedang']?></td>
							<td><?= $data['pekerjaan']?></td>
							<td><?= $data['kawin']?></td>
							<td><?= $data['hubungan']?></td>
							<td><?= $data['warganegara']?></td>
							<td><?= $data['gol_darah']?></td>
							<td><?= $data['akta_lahir']?></td>
							<td><?= $data['dokumen_pasport']?></td>
							<td><?= tgl_indo($data['tanggal_akhir_paspor']) ?></td>
							<td><?= $data['ayah_nik']?></td>
							<td><?= $data['nama_ayah']?></td>
							<td><?= $data['ibu_nik']?></td>
							<td><?= $data['nama_ibu']?></td>
							<td><?= $data['akta_perkawinan']?></td>
							<td><?= tgl_indo($data['tanggalperkawinan'])?></td>
							<td><?= $data['akta_perceraian']?></td>
							<td><?= tgl_indo($data['tanggalperceraian'])?></td>
							<td><?= $data['cacat']?></td>
							<td><?= $data['cara_kb']?></td>
							<td><?php if ($data['hamil']==1): ?>Hamil<?php else: ?>Tidak Hamil<?php endif; ?></td>
							<td><?= $data['ktp_el']?></td>
							<td><?= $data['status_rekam']?></td>
							<td><?php if ($data['status']==1): ?>Tetap<?php else: ?>Pendatang<?php endif; ?></td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
   		<label>Tanggal cetak : &nbsp; </label>
			 <?= tgl_indo(date("Y m d"))?>
		</div>
	</body>
</html>
