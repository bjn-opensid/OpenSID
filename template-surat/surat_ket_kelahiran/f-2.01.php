<?php if (!defined('BASEPATH')) exit('No direct script access allowed');?>
<style type="text/css">
table.disdukcapil
{
	width: 100%;
	border: solid 1px #000000;
	/*border-collapse: collapse;*/
}
table.disdukcapil td
{
	padding: 1px 1px 1px 3px;
	margin: 0px;
}
table.disdukcapil td.padat
{
	padding: 0px;
	margin: 0px;
}
table.disdukcapil td.anggota
{
	border-left: solid 1px #000000;
	border-right: solid 1px #000000;
	border-top: dashed 1px #000000;
	border-bottom: dashed 1px #000000;
}
table.disdukcapil td.judul
{
	border-left: solid 1px #000000;
	border-right: solid 1px #000000;
	border-top: double 1px #000000;
	border-bottom: double 1px #000000;
}
table.disdukcapil td.bawah {border-bottom: solid 1px #000000;}
table.disdukcapil td.atas {border-top: solid 1px #000000;}
table.disdukcapil td.tengah_blank
{
	border-left: solid 1px #000000;
	border-right: solid 1px #000000;
}
table.disdukcapil td.pinggir_kiri {border-left: solid 1px #000000;}
table.disdukcapil td.pinggir_kanan {border-right: solid 1px #000000;}
table.disdukcapil td.kotak {border: solid 1px #000000;}
table.disdukcapil td.abu {background-color: lightgrey;}
table.disdukcapil td.kode {background-color: lightgrey;}
table.disdukcapil td.kode div
{
	margin: 0px 15px 0px 15px;
	border: solid 1px black;
	background-color: white;
	text-align: center;
}
table.disdukcapil td.pakai-padding
{
	padding-left: 20px;
	padding-right: 2px;
}
table.disdukcapil td.kiri { text-align: left; }
table.disdukcapil td.kanan { text-align: right; }
table.disdukcapil td.tengah { text-align: center; }

table#kop
{
	margin-top: -5px;
	margin-bottom: 0px;
	padding: 0px;
	border: 0px;
	border-collapse: collapse;
}
table#kop td {padding: 0px; margin: 0px;}
table#kop tr {padding: 0px; margin: 0px;}
table#kode
{
	padding: 2px 10px;
	border: solid 1px black;
	margin-top: 0px;
	margin-bottom: 0px;
	font-size: 11pt;
}
.kotak{
	border: solid 1px #000000;
	border-top: 1px solid black;
}
.pilih{
	background-color:grey;
}
</style>

<page orientation="portrait" format="210x330" style="font-size: 7pt">
	<table id="kop" class="disdukcapil">
		<col span="48" style="width: 2.0833%;">
		<tr>
			<td rowspan="4" colspan="5"></td>
			<td rowspan="4" colspan="5" class="tengah">
				<img src="./assets/images/logo-putih.jpg" width="55" height="66" alt="">
			</td>
			<td colspan="33" style="font-size: 15px;" class="tengah">PEMERINTAH KABUPATEN BOJONEGORO</td>
			<td colspan="5" rowspan="4"></td>
		</tr>
		<tr>
			<td colspan="33" style="font-size: 15px;" class="tengah">DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL</td>
		</tr>
		<tr>
			<td colspan="33" style="font-size: 13px;" class="tengah">JL. PATIMURA NO. 26A TELP./ FAX. 0353 881256</td>
		</tr>
		<tr>
			<td colspan="33" style="font-size: 15px;" class="tengah">BOJONEGORO</td>
		</tr>
		<tr><td colspan="48" style="border-bottom: 1px solid black;">&nbsp;</td></tr>
		<tr>
			<td colspan="7">&nbsp;</td>
			<td colspan="6" style="border-bottom: 1px solid black;">&nbsp;</td>
			<td colspan="21">&nbsp;</td>
			<td colspan="6" style="border-bottom: 1px solid black;">&nbsp;</td>
			<td colspan="1">&nbsp;</td>
			<td colspan="6" style="border-bottom: 1px solid black;">&nbsp;</td>
			<td colspan="1">&nbsp;</td>
		</tr>
		<tr style="font-size: 13px; margin-top: 5px;">
			<td colspan="6" class="tengah">NO DAFTAR : </td>
			<td colspan="1"style="border-right: 1px solid black;"></td>
			<td colspan="6" class="kotak padat" style="padding-top: 5px; padding-bottom: 5px;">&nbsp;</td>
			<td colspan="1"></td>
			<td colspan="20" style="border-right: 1px solid black; font-size:15px;" class="tengah"><u>PELAPORAN KELAHIRAN</u></td>
			<td colspan="6" class="kotak padat tengah" style="padding-top: 5px; padding-bottom: 5px;">UMUM</td>
			<td colspan="1" style="border-right: 1px solid black;"></td>
			<td colspan="6" class="kotak padat tengah" style="padding-top: 5px; padding-bottom: 5px;">TERLAMBAT</td>
			<td colspan="1"></td>
		</tr>
		<tr>
			<td colspan="14"></td>
			<td colspan="20" class="tengah">KEWARGANEGARAAN : WNA/WNI</td>
			<td colspan="14"></td>
		</tr>
		<tr>
			<td colspan="30">&nbsp;</td>
			<td colspan="18" style="border-bottom: 1px solid black;">&nbsp;</td>
		</tr>
		<tr style="font-size: 13px; margin-top: 5px;">
			<td colspan="6">ANAK / BAYI</td>
			<td colspan="18"></td>
			<td colspan="6" style="border-right: 1px solid black;" class="tengah">NO. REG :</td>
			<td colspan="18" class="kotak padat tengah" style="padding-top: 5px; padding-bottom: 5px;">&nbsp;</td>
		</tr>
	</table>
	<table class="disdukcapil" style="margin-top: 5px;">
		<col span="48" style="width: 2.0833%;">
		<tr>
			<td colspan=48></td>
		</tr>
		<tr>
			<td colspan="10">1. &nbsp;&nbsp;NIK </td>
			<td>:</td>
			<?php for ($i=0; $i<16; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['nik_bayi'][$i])): ?>
						<?= $input['nik_bayi'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan=21>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">2. &nbsp;&nbsp;Nama</td>
			<td>:</td>
			<td colspan="33"><?= $input['nama_bayi'] ?></td>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">3. &nbsp;&nbsp;Jenis Kelamin </td>
			<td>:</td>
				<td class="kotak padat tengah">
					<?= $input['sex'];?>
				</td>
			<td colspan=5>1. LAKI-LAKI </td>
			<td colspan=7>2. PEREMPUAN </td>
			<td colspan=4>&nbsp;</td>
		</tr>
		<tr>
			<td colspan=10>4. &nbsp;&nbsp;Tempat Dilahirkan </td>
			<td>:</td>
			<?php for ($i=0; $i<1; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['tempat_dilahirkan'][$i])): ?>
						<?= $input['tempat_dilahirkan'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan=4>1. RS/SB</td>
			 <td colspan=6>2. Puskesmas </td>
			<td colspan=6>3. Polindes</td>
			<td colspan=5>4. Rumah </td>
			<td colspan=7>5. Lainnya &nbsp; </td>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">5. &nbsp;&nbsp;Tempat Kelahiran </td>
			<td>:</td>
			<td colspan="23"><?= $input['tempatlahir']?></td>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">6. &nbsp;&nbsp;Hari, Jam Lahir</td>
			<td>:</td>
			<td colspan="3">Hari : </td>
			<td colspan="4"><?= $input['hari'];?></td>
			<td colspan="3">Jam : </td>
			<td colspan="4"><?= $input['waktu_lahir'];?></td>
			<td colspan="10">WIB</td>
			<td colspan="20">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">7. &nbsp;&nbsp;Tgl, Bln, Th Lahir </td>
			<td>:</td>
			<?php
					$tgl = date('dd',strtotime($input['tanggallahir']));
					$bln = date('mm',strtotime($input['tanggallahir']));
					$thn = date('Y',strtotime($input['tanggallahir']));
					?>
			<td colspan="33">Tgl. <?= $tgl[0].$tgl[1] ?>, Bln. <?= $bln[0].$bln[1] ?>, Th. <?= $thn ?></td>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan=10>8. &nbsp;&nbsp;Jenis Kelahiran </td>
			<td>:</td>
			<?php for ($i=0; $i<1; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['jenis_kelahiran'][$i])): ?>
						<?= $input['jenis_kelahiran'][$i];?>
					<?php else: ?>
						 &nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan=4>1. Tunggal</td>
			<td colspan=6>2. Kembar 2 </td>
			<td colspan=6>3. Kembar 3 </td>
			<td colspan=6>4. Kembar 4 </td>
			<td colspan=6>5. Lainnya...</td>
			<td colspan=7>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">9. &nbsp;&nbsp;Kelahiran Ke </td>
			<td>:</td>
			<?php for ($i=0; $i<9; $i++): ?>
				<td colspan="2" class="kotak padat tengah">
					<?php if (isset($input['kelahiran_anak_ke'])): ?>
						<?php 
							if($input['kelahiran_anak_ke']==($i+1)){
								echo "<del>".($i+1).".</del>";
							}else{
								echo ($i+1).".";
							}?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kotak tengah padat">
				<?php if($input['kelahiran_anak_ke']>=10): ?>
					<del><?= $input['kelahiran_anak_ke']; ?>.</del>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td colspan="10">10. Penolong Kelahiran </td>
			<td>:</td>
			<?php for ($i=0; $i<1; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['penolong_kelahiran'][$i])): ?>
						<?= $input['penolong_kelahiran'][$i];?>
					<?php else: ?>
						 &nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan=4>1. Dokter </td>
			<td colspan=6>2. Bidan/Perawat </td>
			<td colspan=6>3. Dukun </td>
			<td colspan=5>4. Lainnya </td>
			<td colspan=7>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">11. Berat Panjang Bayi</td>
			<td>:</td>
			<td colspan="3">Berat </td>
			<td colspan="3" class="tengah"><?= ($input['berat_lahir']/1000) ?></td>
			<td colspan="3"> Kg.</td>
			<td colspan="3">Panjang </td>
			<td colspan="3" class="tengah"><?= $input['panjang_lahir'] ?></td>
			<td colspan="3"> Cm.</td>
			<td colspan="21">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">12. &nbsp;&nbsp;Alamat</td>
			<td>:</td>
			<td colspan="23" class="kotak"><?= $input['alamat_bayi']?></td>
			<td colspan="3" class="tengah">RT:</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['rt_bayi'][$i])): ?>
						<?= $input['rt_bayi'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="3" class="tengah">RW:</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['rw_bayi'][$i])): ?>
						<?= $input['rw_bayi'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="11" >&nbsp;</td>
			<td colspan="7">a. Desa/Kelurahan</td>
			<td colspan="12" class="kotak"><?= $input['desabayi'];?></td>
			<td colspan="5">b. Kecamatan</td>
			<td colspan="12" class="kotak"><?= $input['kecbayi'];?></td>
			<td colspan="1">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="11" >&nbsp;</td>
			<td colspan="7">c. Kabupaten/Kota</td>
			<td colspan="12" class="kotak"><?= $input['kabbayi'];?></td>
			<td colspan="5">d. Propinsi</td>
			<td colspan="12" class="kotak"><?= $input['provinsibayi'];?></td>
			<td colspan="1">&nbsp;</td>
		</tr>
	</table>
	<table id="kop" class="disdukcapil" style="margin-top: 3px;">
		<col span="48" style="width: 2.0833%;">
		<tr style="font-size: 13px; margin-top: 5px;">
			<td colspan="6">IBU : </td>
			<td colspan="18"></td>
			<td colspan="24"></td>
		</tr>
	</table>
	<table class="disdukcapil" style="margin-top: 3px;">
		<col span="48" style="width: 2.0833%;">
		<tr>
			<td colspan=48></td>
		</tr>
		<tr>
			<td colspan="10">1. &nbsp;&nbsp;NIK</td>
			<td>:</td>
			<?php for ($i=0; $i<16; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['nik_ibu'][$i])): ?>
						<?= $input['nik_ibu'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">2. &nbsp;&nbsp;Nama</td>
			<td>:</td>
			<td colspan="33"><?= $input['nama_ibu'] ?></td>
			<td colspan=21>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">3. &nbsp;&nbsp;Tanggal Lahir / Umur</td>
			<td>:</td>
			<?php $tgl = date('dd',strtotime($input['tanggal_lahir_ibu']));
				$bln = date('mm',strtotime($input['tanggal_lahir_ibu']));
				$thn = date('Y',strtotime($input['tanggal_lahir_ibu']));
			?>
			<td colspan="4">Tgl :</td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($tgl[$j])): ?>
						<?= $tgl[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bln : </td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($bln[$j])): ?>
						<?= $bln[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Thn : </td>
			<?php for ($j=0; $j<4; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($thn[$j])): ?>
						<?= $thn[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="5" class="kanan">Umur : </td>
			<?php for ($j=0; $j<3; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['umur_ibu'][$j])): ?>
						<?= $input['umur_ibu'][$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">4. &nbsp;&nbsp;Pekerjaan</td>
			<td>:</td>
			<td colspan="21" class="kotak"><?= $input['pekerjaanibu']?></td>
			<td colspan="2">&nbsp;</td></tr>
		<tr>
			<td colspan="10">5. &nbsp;&nbsp;Alamat</td>
			<td>:</td>
			<td colspan="23" class="kotak"><?= $input['alamat_ibu']?></td>
			<td colspan="3" class="tengah">RT:</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['rt_ibu'][$i])): ?>
						<?= $input['rt_ibu'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="3" class="tengah">RW:</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['rw_ibu'][$i])): ?>
						<?= $input['rw_ibu'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="11" >&nbsp;</td>
			<td colspan="7">a. Desa/Kelurahan</td>
			<td colspan="12" class="kotak"><?= $input['desaibu'];?></td>
			<td colspan="5">b. Kecamatan</td>
			<td colspan="12" class="kotak"><?= $input['kecibu'];?></td>
			<td colspan="1">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="11" >&nbsp;</td>
			<td colspan="7">c. Kabupaten/Kota</td>
			<td colspan="12" class="kotak"><?= $input['kabibu'];?></td>
			<td colspan="5">d. Propinsi</td>
			<td colspan="12" class="kotak"><?= $input['provinsiibu'];?></td>
			<td colspan="1">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">6. &nbsp;&nbsp;Tgl. Perkawinan</td>
			<td>:</td>
			<?php if (!empty($input['tanggalperkawinan_ibu'])):
				$tgl = date('dd',strtotime($input['tanggalperkawinan_ibu']));
				$bln = date('mm',strtotime($input['tanggalperkawinan_ibu']));
				$thn = date('Y',strtotime($input['tanggalperkawinan_ibu']));
			else:
				$tgl = '-'; $bln = '-'; $thn = '-';
			endif;
			?>
			<td colspan="4">Tgl :</td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($tgl[$j])): ?>
						<?= $tgl[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bln : </td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($bln[$j])): ?>
						<?= $bln[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Thn : </td>
			<?php for ($j=0; $j<4; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($thn[$j])): ?>
						<?= $thn[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="12">&nbsp;</td>
		</tr>
		<td colspan="48"></td>
	</table>
	<table id="kop" class="disdukcapil" style="margin-top: 3px;">
		<col span="48" style="width: 2.0833%;">
		<tr style="font-size: 13px; margin-top: 5px;">
			<td colspan="6">AYAH : </td>
			<td colspan="18"></td>
			<td colspan="24"></td>
		</tr>
	</table>
	<table class="disdukcapil" style="margin-top: 3px;">
		<col span="48" style="width: 2.0833%;">
		<tr>
			<td colspan=48></td>
		</tr>
		<tr>
			<td colspan="10">1. &nbsp;&nbsp;NIK</td>
			<td>:</td>
			<?php for ($i=0; $i<16; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['nik_ayah'][$i])): ?>
						<?= $input['nik_ayah'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">2. &nbsp;&nbsp;Nama</td>
			<td>:</td>
			<td colspan="33"><?= $input['nama_ayah'] ?></td>
			<td colspan=21>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">3. &nbsp;Tanggal Lahir / Umur</td>
			<td>:</td>
				<?php $tgl = date('dd',strtotime($input['tanggal_lahir_ayah']));
					$bln = date('mm',strtotime($input['tanggal_lahir_ayah']));
					$thn = date('Y',strtotime($input['tanggal_lahir_ayah']));
				?>
			<td colspan="4">Tgl :</td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($tgl[$j])): ?>
						<?= $tgl[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bln : </td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($bln[$j])): ?>
						<?= $bln[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Thn : </td>
			<?php for ($j=0; $j<4; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($thn[$j])): ?>
						<?= $thn[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="5" class="kanan">Umur : </td>
			<?php for ($j=0; $j<3; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['umur_ayah'][$j])): ?>
						<?= $input['umur_ayah'][$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">4. &nbsp;&nbsp;Pekerjaan</td>
			<td>:</td>
			<td colspan="21" class="kotak"><?= $input['pekerjaanayah']?></td>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">5. &nbsp;&nbsp;Alamat</td>
			<td>:</td>
			<td colspan="23" class="kotak"><?= $input['alamat_ayah']?></td>
			<td colspan="3" class="tengah">RT:</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['rt_ayah'][$i])): ?>
						<?= $input['rt_ayah'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="3" class="tengah">RW:</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['rw_ayah'][$i])): ?>
						<?= $input['rw_ayah'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="11" >&nbsp;</td>
			<td colspan="7">a. Desa/Kelurahan</td>
			<td colspan="12" class="kotak"><?= $input['desaayah'];?></td>
			<td colspan="5">b. Kecamatan</td>
			<td colspan="12" class="kotak"><?= $input['kecayah'];?></td>
			<td colspan="1">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="11" >&nbsp;</td>
			<td colspan="7">c. Kabupaten/Kota</td>
			<td colspan="12" class="kotak"><?= $input['kabayah'];?></td>
			<td colspan="5">d. Propinsi</td>
			<td colspan="12" class="kotak"><?= $input['provinsiayah'];?></td>
			<td colspan="1">&nbsp;</td>
		</tr>
	</table>
	<table id="kop" class="disdukcapil" style="margin-top: 3px;">
		<col span="48" style="width: 2.0833%;">
		<tr style="font-size: 13px; margin-top: 5px;">
			<td colspan="6">PELAPOR : </td>
			<td colspan="18"></td>
			<td colspan="24"></td>
		</tr>
	</table>
	<table class="disdukcapil" style="margin-top: 3px;">
		<col span="48" style="width: 2.0833%;">
		<tr>
			<td colspan=48></td>
		</tr>
		<tr>
			<td colspan="10">1. &nbsp;&nbsp;NIK</td>
			<td>:</td>
			<?php for ($i=0; $i<16; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['nik_pelapor'][$i])): ?>
						<?= $input['nik_pelapor'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">2. &nbsp;&nbsp;Nama</td>
			<td>:</td>
			<td colspan="33"><?= $input['nama_pelapor'] ?></td>
			<td colspan=21>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">3. &nbsp;Tanggal Lahir / Umur</td>
			<td>:</td>
				<?php $tgl = date('dd',strtotime($input['tanggal_lahir_pelapor']));
					$bln = date('mm',strtotime($input['tanggal_lahir_pelapor']));
					$thn = date('Y',strtotime($input['tanggal_lahir_pelapor']));
				?>
			<td colspan="4">Tgl :</td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($tgl[$j])): ?>
						<?= $tgl[$j];?>
					<?php else: ?>
							&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bln : </td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($bln[$j])): ?>
						<?= $bln[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Thn : </td>
			<?php for ($j=0; $j<4; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($thn[$j])): ?>
						<?= $thn[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="5" class="kanan">Umur : </td>
			<?php for ($j=0; $j<3; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['umur_pelapor'][$j])): ?>
						<?= $input['umur_pelapor'][$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">4. &nbsp;&nbsp;Pekerjaan</td>
			<td>:</td>
			<td colspan="21" class="kotak"><?= $input['pekerjaanpelapor']?></td>
			<td colspan="3" class="tengah">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">5. &nbsp;&nbsp;Alamat</td>
			<td>:</td>
			<td colspan="23" class="kotak"><?= $input['alamat_pelapor']?></td>
			<td colspan="3" class="tengah">RT:</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['rt_pelapor'][$i])): ?>
						<?= $input['rt_pelapor'][$i];?>
						<?php else: ?> &nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="3" class="tengah">RW:</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['rw_pelapor'][$i])): ?>
						<?= $input['rw_pelapor'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="11">&nbsp;</td>
			<td colspan="7">a. Desa/Kelurahan</td>
			<td colspan="12" class="kotak"><?= $input['desapelapor'];?></td>
			<td colspan="5">b. Kecamatan</td>
			<td colspan="12" class="kotak"><?= $input['kecpelapor'];?></td>
			<td colspan="1">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="11" >&nbsp;</td>
			<td colspan="7">c. Kabupaten/Kota</td>
			<td colspan="12" class="kotak"><?= $input['kabpelapor'];?></td>
			<td colspan="5">d. Propinsi</td>
			<td colspan="12" class="kotak"><?= $input['provinsipelapor'];?></td>
			<td colspan="1">&nbsp;</td>
		</tr>
	</table>
	<table id="kop" class="disdukcapil" style="margin-top: 3px;">
		<col span="48" style="width: 2.0833%;">
		<tr style="font-size: 13px; margin-top: 5px;">
			<td colspan="6">SAKSI I : </td>
			<td colspan="18"></td>
			<td colspan="24"></td>
		</tr>
	</table>
	<table class="disdukcapil" style="margin-top: 3px;">
		<col span="48" style="width: 2.0833%;">
		<tr>
			<td colspan=48></td>
		</tr>
		<tr>
			<td colspan="10">1. &nbsp;&nbsp;NIK</td>
			<td>:</td>
			<?php for ($i=0; $i<16; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['nik_saksi1'][$i])): ?>
						<?= $input['nik_saksi1'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">2. &nbsp;&nbsp;Nama</td>
			<td>:</td>
			<td colspan="33"><?= $input['nama_saksi1'] ?></td>
			<td colspan=21>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">3. &nbsp;Tanggal Lahir / Umur</td>
			<td>:</td>
				<?php $tgl = date('dd',strtotime($input['tanggal_lahir_saksi1']));
					$bln = date('mm',strtotime($input['tanggal_lahir_saksi1']));
					$thn = date('Y',strtotime($input['tanggal_lahir_saksi1']));
				?>
			<td colspan="4">Tgl :</td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($tgl[$j])): ?>
						<?= $tgl[$j];?>
					<?php else: ?>
						 &nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bln : </td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($bln[$j])): ?>
						<?= $bln[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Thn : </td>
			<?php for ($j=0; $j<4; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($thn[$j])): ?>
						<?= $thn[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="5" class="kanan">Umur : </td>
			<?php for ($j=0; $j<3; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['umur_saksi1'][$j])): ?>
						<?= $input['umur_saksi1'][$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">4. &nbsp;&nbsp;Pekerjaan</td>
			<td>:</td>
			<td colspan="21" class="kotak"><?= $input['pekerjaansaksi1']?></td>
			<td colspan="3" class="tengah">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">5. &nbsp;&nbsp;Alamat</td>
			<td>:</td>
			<td colspan="23" class="kotak"><?= $input['alamat_saksi1']?></td>
			<td colspan="3" class="tengah">RT:</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['rt_saksi1'][$i])): ?>
						<?= $input['rt_saksi1'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="3" class="tengah">RW:</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['rw_saksi1'][$i])): ?>
						<?= $input['rw_saksi1'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="11" >&nbsp;</td>
			<td colspan="7">a. Desa/Kelurahan</td>
			<td colspan="12" class="kotak"><?= $input['desasaksi1'];?></td>
			<td colspan="5">b. Kecamatan</td>
			<td colspan="12" class="kotak"><?= $input['kecsaksi1'];?></td>
			<td colspan="1">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="11" >&nbsp;</td>
			<td colspan="7">c. Kabupaten/Kota</td>
			<td colspan="12" class="kotak"><?= $input['kabsaksi1'];?></td>
			<td colspan="5">d. Propinsi</td>
			<td colspan="12" class="kotak"><?= $input['provinsisaksi1'];?></td>
			<td colspan="1">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="48" style="padding-top:20px;padding-right:30px;text-align:right;">(.............................)</td>
		</tr>
	</table>
	<table id="kop" class="disdukcapil" style="margin-top: 3px;">
		<col span="48" style="width: 2.0833%;">
		<tr style="font-size: 13px; margin-top: 5px;">
			<td colspan="6">SAKSI II : </td>
			<td colspan="18"></td>
			<td colspan="24"></td>
		</tr>
	</table>
	<table class="disdukcapil" style="margin-top: 3px;">
		<col span="48" style="width: 2.0833%;">
		<tr>
			<td colspan=48></td>
		</tr>
		<tr>
			<td colspan="10">1. &nbsp;&nbsp;NIK</td>
			<td>:</td>
			<?php for ($i=0; $i<16; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['nik_saksi2'][$i])): ?>
						<?= $input['nik_saksi2'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">2. &nbsp;&nbsp;Nama </td>
			<td>:</td>
			<td colspan="33"><?= $input['nama_saksi2'] ?></td>
			<td colspan=21>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">3. &nbsp;Tanggal Lahir / Umur</td>
			<td>:</td>
				<?php $tgl = date('dd',strtotime($input['tanggal_lahir_saksi2']));
					$bln = date('mm',strtotime($input['tanggal_lahir_saksi2']));
					$thn = date('Y',strtotime($input['tanggal_lahir_saksi2']));
				?>
			<td colspan="4">Tgl :</td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($tgl[$j])): ?>
						<?= $tgl[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Bln : </td>
			<?php for ($j=0; $j<2; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($bln[$j])): ?>
						<?= $bln[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kanan">Thn : </td>
			<?php for ($j=0; $j<4; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($thn[$j])): ?>
						<?= $thn[$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="5" class="kanan">Umur : </td>
			<?php for ($j=0; $j<3; $j++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['umur_saksi2'][$j])): ?>
						<?= $input['umur_saksi2'][$j];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">5. &nbsp;&nbsp;Pekerjaan</td>
			<td>:</td>
			<td colspan="21" class="kotak"><?= $input['pekerjaansaksi2']?></td>
			<td colspan="3" class="tengah">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">6. &nbsp;&nbsp;Alamat</td>
			<td>:</td>
			<td colspan="23" class="kotak"><?= $input['alamat_saksi2']?></td>
			<td colspan="3" class="tengah">RT:</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['rt_saksi2'][$i])): ?>
						<?= $input['rt_saksi2'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="3" class="tengah">RW:</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($input['rw_saksi2'][$i])): ?>
						<?= $input['rw_saksi2'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="11" >&nbsp;</td>
			<td colspan="7">a. Desa/Kelurahan</td>
			<td colspan="12" class="kotak"><?= $input['desasaksi2'];?></td>
			<td colspan="5">b. Kecamatan</td>
			<td colspan="12" class="kotak"><?= $input['kecsaksi2'];?></td>
			<td colspan="1">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="11" >&nbsp;</td>
			<td colspan="7">c. Kabupaten/Kota</td>
			<td colspan="12" class="kotak"><?= $input['kabsaksi2'];?></td>
			<td colspan="5">d. Propinsi</td>
			<td colspan="12" class="kotak"><?= $input['provinsisaksi2'];?></td>
			<td colspan="1">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="48" style="padding-top:20px;padding-right:30px;text-align:right;">(.............................)</td>
		</tr>
	</table>
	<table id="kop" class="disdukcapil" style="margin-top: 5px;">
		<col span="48" style="width: 2.0833%;">
		<tr style="margin-top: 5px;">
			<td colspan="30"></td>
			<td colspan="18" style="text-align: right;">Bojonegoro, <?= tgl_indo(date('Y m d',time()));?></td>
		</tr>
	</table>
	<table style="margin-top: 3px; width: 100%;">
		<col span="48" style="width: 2.0833%;">
		<tr>
			<td colspan="8" class="kotak padat tengah" style="padding-bottom: 45px; text-align:center;margin-right:0px;margin-left:0px;">KOREKTOR</td>
			<td colspan="8" class="kotak padat tengah" style="padding-bottom: 45px; text-align:center;margin-right:0px;margin-left:0px;">REGISTER</td>
			<td colspan="8" class="kotak padat tengah" style="padding-bottom: 45px; text-align:center;margin-right:0px;margin-left:0px;">ENTRY</td>
			<td colspan="8" class="kotak padat tengah" style="padding-bottom: 45px; text-align:center;margin-right:0px;margin-left:0px;">CETAK</td>
			<td colspan="8" class="kotak padat tengah" style="padding-bottom: 45px; text-align:center;margin-right:0px;margin-left:0px;">KASI/KABID</td>
			<td colspan="8" class="kotak padat tengah" style="padding-bottom: 45px; text-align:center;margin-right:0px;margin-left:0px;">PELAPOR</td>
		</tr>
	</table>
</page>