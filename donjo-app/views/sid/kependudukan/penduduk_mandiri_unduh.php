<?php
  header("Content-type: application/octet-stream");
  header("Content-Disposition: attachment; filename=Penduduk_mandiri_".date('Y-m-d').".xls");
  header("Pragma: no-cache");
  header("Expires: 0");

?>
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
					<h3> DATA PENDUDUK LAYANAN MANDIRI </h3>
				</div>
				<br>
   		 	<table class="border thick">
					<thead>
						<tr class="border thick">
							<th>No</th>
							<th>Nama</th>
							<th>NIK</th>
							<th>PIN</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; foreach ($main as $data): ?>
						<tr>
							<td class="text-center"><?= $no?></td>
							<td><?= $data['nama']?></td>
							<td><?= $data['nik']?></td>
							<td><?= $data['pin']?></td>
						</tr>
						<?php $no++; endforeach; ?>
					</tbody>
				</table>
			</div>
   		<label>Tanggal cetak : &nbsp; </label>
			 <?= tgl_indo(date("Y m d"))?>
		</div>
	</body>
</html>