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
.tulisan{
	font-size: 13px;
	/* color: red; */
}
.tulisan-besar{
	font-size: 15px;
}
.tulisan-kop-utama{
	font-size: 20px;
}
.tulisan-kop-sub{
	font-size: 17px;
}
</style>

<page orientation="portrait" format="210x330" style="font-size: 7pt">
	<table id="kop" class="disdukcapil" style="padding-top: 20px;">
		<col span="48" style="width: 2.0833%;">
		<tr>
			<td rowspan="4" colspan="5"></td>
			<td rowspan="4" colspan="5" class="tengah">
				<img src="./assets/images/logo-putih.jpg" width="66" height="77" alt="">
			</td>
			<td colspan="33" class="tengah tulisan-kop-utama cross" style="background-image: linear-gradient(to bottom right, transparent calc(50% - 3px), black, transparent calc(50% + 3px));">PEMERINTAH KABUPATEN BOJONEGORO</td>
			<td colspan="5" rowspan="4"></td>
		</tr>
		<tr>
			<td colspan="33" class="tengah tulisan-kop-utama">DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL</td>
		</tr>
		<tr>
			<td colspan="33" class="tengah tulisan-kop-sub">JL. PATIMURA NO. 26A TELP./ FAX. 0353 881256</td>
		</tr>
		<tr>
			<td colspan="33" class="tengah tulisan-kop-utama">BOJONEGORO</td>
		</tr>
		<tr><td colspan="48" class="bawah"></td></tr>
		<tr>
			<td colspan="8" style="font-size: 6px;">&nbsp;</td>
			<td colspan="6" class="bawah"></td>
			<td colspan="20"></td>
			<td colspan="6" class="bawah"></td>
			<td colspan="1"></td>
			<td colspan="6" class="bawah"></td>
			<td colspan="1"></td>
		</tr>
		<tr>
			<td colspan="7" class="tengah tulisan-besar">NO DAFTAR : </td>
			<td colspan="1"style="border-right: 1px solid black;"></td>
			<td colspan="6" class="kotak padat" style="padding-top: 5px; padding-bottom: 5px;">&nbsp;</td>
			<td colspan="1"></td>
			<td colspan="19" style="border-right: 1px solid black;" class="tengah tulisan-kop-utama"><u>PELAPORAN KELAHIRAN</u></td>
			<td colspan="6" class="kotak padat tengah tulisan-besar" style="padding-top: 5px; padding-bottom: 5px;">UMUM</td>
			<td colspan="1" style="border-right: 1px solid black;"></td>
			<td colspan="6" class="kotak padat tengah tulisan-besar" style="padding-top: 5px; padding-bottom: 5px;">TERLAMBAT</td>
			<td colspan="1"></td>
		</tr>
		<tr>
			<td colspan="14"></td>
			<td colspan="20" class="tengah tulisan">KEWARGANEGARAAN : WNA/WNI</td>
			<td colspan="14"></td>
		</tr>
		<tr>
			<td colspan="30" style="font-size: 6px;">&nbsp;</td>
			<td colspan="18" style="border-bottom: 1px solid black;"></td>
		</tr>
		<tr style="margin-top: 5px;">
			<td colspan="6" class="tulisan" style="padding-top: 10px;">ANAK / BAYI</td>
			<td colspan="18"></td>
			<td colspan="6" style="border-right: 1px solid black;" class="tengah tulisan">NO. REG :</td>
			<td colspan="18" class="kotak padat tengah" style="padding-top: 5px; padding-bottom: 5px;">&nbsp;</td>
		</tr>
	</table>
	<table class="disdukcapil" style="margin-top: 5px;">
		<col span="48" style="width: 2.0833%;">
		<tr>
			<td colspan="10" class="tulisan">1. &nbsp;&nbsp;NIK </td>
			<td class="tulisan">:</td>
			<?php for ($i=0; $i<16; $i++): ?>
				<td colspan="2" class="kotak padat tengah tulisan">
					<?php if (isset($input['nik_bayi'][$i])): ?>
						<?= $input['nik_bayi'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="5">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10" class="tulisan">2. &nbsp;&nbsp;Nama</td>
			<td class="tulisan">:</td>
			<td colspan="33" class="tulisan"><u><?= $input['nama_bayi'] ?></u></td>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10" class="tulisan">3. &nbsp;&nbsp;Jenis Kelamin </td>
			<td class="tulisan">:</td>
			<?php 
				$list_jk = ["LAKI-LAKI","PEREMPUAN"];
				$no = 1;
				foreach($list_jk as $jk) :
			?>
				<td colspan="2" class="kotak padat tengah tulisan">
					<?php if($input['sex']==$no): ?>
						<b><del><?= $no ?>.</del></b>
					<?php else: ?>
						<?= $no ?>.
					<?php endif; ?>
				</td>
				<td colspan="7" class="tulisan"> <?= $jk ?></td>
			<?php
			$no++;
			endforeach; ?>
			<td colspan=2>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10" class="tulisan">4. &nbsp;&nbsp;Tempat Dilahirkan </td>
			<td class="tulisan">:</td>
			<?php 
				$list = ["RS/SB","Puskesmas","Polindes","Rumah","Lainnya......"];
				$no = 1;
				foreach($list as $val) :
			?>
				<td colspan="2" class="kotak padat tengah tulisan">
					<?php if($input['tempat_dilahirkan']==$no): ?>
						<b><del><?= $no ?>.</del></b>
					<?php else: ?>
						<?= $no ?>.
					<?php endif; ?>
				</td>
				<td colspan="5" class="tulisan"> <?= $val ?></td>
			<?php
			$no++;
			endforeach; ?>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10" class="tulisan">5. &nbsp;&nbsp;Tempat Kelahiran </td>
			<td class="tulisan">:</td>
			<td colspan="23" class="tulisan"><u><?= $input['tempatlahir']?></u></td>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10" class="tulisan">6. &nbsp;&nbsp;Hari, Jam Lahir</td>
			<td class="tulisan">:</td>
			<td colspan="3" class="tulisan">Hari : </td>
			<td colspan="4" class="tulisan"><u><?= $input['hari'];?></u></td>
			<td colspan="3" class="tulisan">Jam : </td>
			<td colspan="4" class="tulisan"><u><?= $input['waktu_lahir'];?></u></td>
			<td colspan="10" class="tulisan">WIB</td>
			<td colspan="20">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10" class="tulisan">7. &nbsp;&nbsp;Tgl, Bln, Th Lahir </td>
			<td class="tulisan">:</td>
			<?php
					$tgl = date('dd',strtotime($input['tanggallahir']));
					$bln = date('mm',strtotime($input['tanggallahir']));
					$thn = date('Y',strtotime($input['tanggallahir']));
					?>
			<td colspan="33" class="tulisan">
				Tgl. &nbsp;&nbsp;<u><?= $tgl[0].$tgl[1] ?></u>,&nbsp;&nbsp;
				Bln. &nbsp;&nbsp;<u><?= $bln[0].$bln[1] ?></u>,&nbsp;&nbsp;
				Th. &nbsp;&nbsp;<u><?= $thn ?></u></td>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10" class="tulisan">8. &nbsp;&nbsp;Jenis Kelahiran </td>
			<td class="tulisan">:</td>
			<?php 
				$list = ["Tunggal","Kembar 2","Kembar 3","Kembar 4","Lainnya......"];
				$no = 1;
				foreach($list as $val) :
			?>
				<td colspan="2" class="kotak padat tengah tulisan">
					<?php if($input['jenis_kelahiran']==$no): ?>
						<b><del><?= $no ?>.</del></b>
					<?php else: ?>
						<?= $no ?>.
					<?php endif; ?>
				</td>
				<td colspan="5" class="tulisan"> <?= $val ?></td>
			<?php
			$no++;
			endforeach; ?>
			<td colspan=1>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10" class="tulisan">9. &nbsp;&nbsp;Kelahiran Ke </td>
			<td class="tulisan">:</td>
			<?php for ($i=0; $i<9; $i++): ?>
				<td colspan="2" class="kotak padat tengah tulisan">
					<?php if (isset($input['kelahiran_anak_ke'])): ?>
						<?php 
							if($input['kelahiran_anak_ke']==($i+1)){
								echo '<b><del>&nbsp;'.($i+1).'.&nbsp;</del></b>';
							}else{
								echo ($i+1).".";
							}?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kotak tengah padat tulisan">
				<?php if($input['kelahiran_anak_ke']>=10): ?>
					<del style="font-weight: 900;"><?= $input['kelahiran_anak_ke']; ?>.</del>
				<?php else: ?>
					.....
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td colspan="10" class="tulisan">10. Penolong Kelahiran </td>
			<td class="tulisan">:</td>
			<?php 
				$list = ["Dokter","Bidan/Perawat","Dukun","Lainnya......"];
				$no = 1;
				foreach($list as $val) :
			?>
				<td colspan="2" class="kotak padat tengah tulisan">
					<?php if($input['penolong_kelahiran']==$no): ?>
						<b><del><?= $no ?>.</del></b>
					<?php else: ?>
						<?= $no ?>.
					<?php endif; ?>
				</td>
				<td colspan="7" class="tulisan"> <?= $val ?></td>
			<?php
			$no++;
			endforeach; ?>
			<td colspan=1>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10" class="tulisan">11. Berat Panjang Bayi</td>
			<td class="tulisan">:</td>
			<td colspan="3" class="tulisan">Berat </td>
			<td colspan="3" class="tulisan tengah"><u><?= ($input['berat_lahir']/1000) ?></u></td>
			<td colspan="3" class="tulisan">Kg.</td>
			<td colspan="3" class="tulisan">Panjang </td>
			<td colspan="3" class="tulisan tengah"><u><?= $input['panjang_lahir'] ?></u></td>
			<td colspan="3" class="tulisan">Cm.</td>
			<td colspan="21">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10" class="tulisan">12. &nbsp;&nbsp;Alamat</td>
			<td class="tulisan">:</td>
			<td colspan="4" class="tulisan">RT/RW</td>
			<td colspan="2" class="tulisan"><u><?= $input['rt_bayi'] ?></u></td>
			<td class="tulisan tengah"> / </td>
			<td colspan="2" class="tulisan"><u><?= $input['rw_bayi'] ?></u></td>
			<td colspan="3" class="kanan tulisan">Desa </td>
			<td colspan="9" class="tulisan"><u><?= $input['desabayi']; ?></u></td>
			<td colspan="3" class="kanan tulisan">Kec. </td>
			<td colspan="13" class="tulisan"><u><?= $input['kecbayi']; ?></u></td>
		</tr>
		<tr>
			<td colspan="11" >&nbsp;</td>
			<td class="tulisan" colspan="5">Kabupaten</td>
			<td class="tulisan" colspan="17"><u><?= $input['kabbayi'];?></u></td>
			<td class="tulisan" colspan="4">Propinsi</td>
			<td class="tulisan" colspan="10"><u><?= $input['provinsibayi'];?></u></td>
			<td colspan="1">&nbsp;</td>
		</tr>
		<td colspan="48"></td>
	</table>
	<table id="kop" class="disdukcapil" style="margin-top: 3px;">
		<col span="48" style="width: 2.0833%;">
		<tr style="margin-top: 5px;">
			<td colspan="6" class="tulisan">IBU : </td>
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
			<td colspan="10" class="tulisan">1. &nbsp;&nbsp;NIK</td>
			<td class="tulisan">:</td>
			<?php for ($i=0; $i<16; $i++): ?>
				<td colspan="2" class="kotak padat tengah tulisan">
					<?php if (isset($input['nik_ibu'][$i])): ?>
						<?= $input['nik_ibu'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="5">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10" class="tulisan">2. &nbsp;&nbsp;Nama</td>
			<td class="tulisan">:</td>
			<td colspan="33" class="tulisan"><u><?= $input['nama_ibu'] ?></u></td>
			<td colspan=21>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10" class="tulisan">3. &nbsp;&nbsp;Tgl. Lahir / Umur</td>
			<td class="tulisan">:</td>
			<?php $tgl = date('dd',strtotime($input['tanggal_lahir_ibu']));
				$bln = date('mm',strtotime($input['tanggal_lahir_ibu']));
				$thn = date('Y',strtotime($input['tanggal_lahir_ibu']));
			?>
			<td colspan="13" class="tulisan">
				Tgl. &nbsp;&nbsp;<u><?= $tgl[0].$tgl[1] ?></u>,&nbsp;&nbsp;
				Bln. &nbsp;&nbsp;<u><?= $bln[0].$bln[1] ?></u>,&nbsp;&nbsp;
				Th. &nbsp;&nbsp;<u><?= $thn ?></u></td>
			<td colspan="4">&nbsp;</td>
			<td colspan="4" class="tulisan kanan">Umur : </td>
			<td colspan="13" class="tulisan"><u><?= $input['umur_ibu'] ?></u></td>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10" class="tulisan">4. &nbsp;&nbsp;Pekerjaan</td>
			<td class="tulisan">:</td>
			<td colspan="21" class="tulisan"><u><?= $input['pekerjaanibu']?></u></td>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10" class="tulisan">5. &nbsp;&nbsp;Alamat</td>
			<td class="tulisan">:</td>
			<td colspan="4" class="tulisan">RT/RW</td>
			<td colspan="2" class="tulisan"><u><?= $input['rt_ibu'] ?></u></td>
			<td class="tulisan tengah"> / </td>
			<td colspan="2" class="tulisan"><u><?= $input['rw_ibu'] ?></u></td>
			<td colspan="3" class="kanan tulisan">Desa </td>
			<td colspan="9" class="tulisan"><u><?= $input['desaibu']; ?></u></td>
			<td colspan="3" class="kanan tulisan">Kec. </td>
			<td colspan="13" class="tulisan"><u><?= $input['kecibu']; ?></u></td>
		</tr>
		<tr>
			<td colspan="11" >&nbsp;</td>
			<td class="tulisan" colspan="5">Kabupaten</td>
			<td class="tulisan" colspan="17"><u><?= $input['kabibu'];?></u></td>
			<td class="tulisan" colspan="4">Propinsi</td>
			<td class="tulisan" colspan="10"><u><?= $input['provinsiibu'];?></u></td>
			<td colspan="1">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10" class="tulisan">6. &nbsp;&nbsp;Tgl. Perkawinan</td>
			<td class="tulisan">:</td>
			<?php if (!empty($input['tanggalperkawinan_ibu'])):
				$tgl = date('dd',strtotime($input['tanggalperkawinan_ibu']));
				$bln = date('mm',strtotime($input['tanggalperkawinan_ibu']));
				$thn = date('Y',strtotime($input['tanggalperkawinan_ibu']));
			else:
				$tgl = '-'; $bln = '-'; $thn = '-';
			endif;
			?>
			<td class="tulisan" colspan="4">Tanggal </td>
			<td colspan="4" class="tulisan">
				<u>
					<?php for ($j=0; $j<2; $j++): ?>
						<?php if (isset($tgl[$j])): ?>
							<?= $tgl[$j];?>
						<?php else: ?>
							&nbsp;
						<?php endif; ?>
					<?php endfor; ?>
				</u>
			</td>
			<td colspan="4" class="tulisan kanan">Bulan </td>
			<td colspan="4" class="tulisan">
				<u>
					<?php for ($j=0; $j<2; $j++): ?>
						<?php if (isset($bln[$j])): ?>
							<?= $bln[$j];?>
						<?php else: ?>
							&nbsp;
						<?php endif; ?>
					<?php endfor; ?>
				</u>
			</td>
			<td colspan="4" class="tulisan kanan">Thn : </td>
			<td colspan="8" class="tulisan">
				<u>
					<?php for ($j=0; $j<4; $j++): ?>
						<?php if (isset($thn[$j])): ?>
							<?= $thn[$j];?>
						<?php else: ?>
							&nbsp;
						<?php endif; ?>
					<?php endfor; ?>
				</u>
			</td>
			<td colspan="1">&nbsp;</td>
		</tr>
		<td colspan="48"></td>
	</table>
	<table id="kop" class="disdukcapil" style="margin-top: 3px;">
		<col span="48" style="width: 2.0833%;">
		<tr style="margin-top: 5px;">
			<td colspan="6" class="tulisan">AYAH : </td>
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
			<td colspan="10" class="tulisan">1. &nbsp;&nbsp;NIK</td>
			<td class="tulisan">:</td>
			<?php for ($i=0; $i<16; $i++): ?>
				<td colspan="2" class="tulisan kotak padat tengah">
					<?php if (isset($input['nik_ayah'][$i])): ?>
						<?= $input['nik_ayah'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="5">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10" class="tulisan">2. &nbsp;&nbsp;Nama</td>
			<td class="tulisan">:</td>
			<td colspan="33" class="tulisan"><u><?= $input['nama_ayah'] ?></u></td>
			<td colspan=21>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10" class="tulisan">3. &nbsp;&nbsp;Tgl. Lahir / Umur</td>
			<td class="tulisan">:</td>
			<?php $tgl = date('dd',strtotime($input['tanggal_lahir_ayah']));
				$bln = date('mm',strtotime($input['tanggal_lahir_ayah']));
				$thn = date('Y',strtotime($input['tanggal_lahir_ayah']));
			?>
			<td colspan="13" class="tulisan">
				Tgl. &nbsp;&nbsp;<u><?= $tgl[0].$tgl[1] ?></u>,&nbsp;&nbsp;
				Bln. &nbsp;&nbsp;<u><?= $bln[0].$bln[1] ?></u>,&nbsp;&nbsp;
				Th. &nbsp;&nbsp;<u><?= $thn ?></u></td>
			<td colspan="4">&nbsp;</td>
			<td colspan="4" class="tulisan kanan">Umur : </td>
			<td colspan="13" class="tulisan"><u><?= $input['umur_ayah'] ?></u></td>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10" class="tulisan">4. &nbsp;&nbsp;Pekerjaan</td>
			<td class="tulisan">:</td>
			<td colspan="21" class="tulisan"><u><?= $input['pekerjaanayah']?></u></td>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10" class="tulisan">5. &nbsp;&nbsp;Alamat</td>
			<td class="tulisan">:</td>
			<td colspan="4" class="tulisan">RT/RW</td>
			<td colspan="2" class="tulisan"><u><?= $input['rt_ayah'] ?></u></td>
			<td class="tulisan tengah"> / </td>
			<td colspan="2" class="tulisan"><u><?= $input['rw_ayah'] ?></u></td>
			<td colspan="3" class="kanan tulisan">Desa </td>
			<td colspan="9" class="tulisan"><u><?= $input['desaayah']; ?></u></td>
			<td colspan="3" class="kanan tulisan">Kec. </td>
			<td colspan="13" class="tulisan"><u><?= $input['kecayah']; ?></u></td>
		</tr>
		<tr>
			<td colspan="11" >&nbsp;</td>
			<td class="tulisan" colspan="5">Kabupaten</td>
			<td class="tulisan" colspan="17"><u><?= $input['kabayah'];?></u></td>
			<td class="tulisan" colspan="4">Propinsi</td>
			<td class="tulisan" colspan="10"><u><?= $input['provinsiayah'];?></u></td>
			<td colspan="1">&nbsp;</td>
		</tr>
		<td colspan="48"></td>
	</table>
	<table id="kop" class="disdukcapil" style="margin-top: 3px;">
		<col span="48" style="width: 2.0833%;">
		<tr style="margin-top: 5px;">
			<td colspan="6" class="tulisan">PELAPOR : </td>
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
			<td colspan="10" class="tulisan">1. &nbsp;&nbsp;NIK</td>
			<td class="tulisan">:</td>
			<?php for ($i=0; $i<16; $i++): ?>
				<td colspan="2" class="tulisan kotak padat tengah">
					<?php if (isset($input['nik_pelapor'][$i])): ?>
						<?= $input['nik_pelapor'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="5">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10" class="tulisan">2. &nbsp;&nbsp;Nama</td>
			<td class="tulisan">:</td>
			<td colspan="33" class="tulisan"><u><?= $input['nama_pelapor'] ?></u></td>
			<td colspan=4>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10" class="tulisan">3. &nbsp;&nbsp;Tgl. Lahir / Umur</td>
			<td class="tulisan">:</td>
			<?php $tgl = date('dd',strtotime($input['tanggal_lahir_pelapor']));
				$bln = date('mm',strtotime($input['tanggal_lahir_pelapor']));
				$thn = date('Y',strtotime($input['tanggal_lahir_pelapor']));
			?>
			<td colspan="13" class="tulisan">
				Tgl. &nbsp;&nbsp;<u><?= $tgl[0].$tgl[1] ?></u>,&nbsp;&nbsp;
				Bln. &nbsp;&nbsp;<u><?= $bln[0].$bln[1] ?></u>,&nbsp;&nbsp;
				Th. &nbsp;&nbsp;<u><?= $thn ?></u></td>
			<td colspan="4">&nbsp;</td>
			<td colspan="4" class="tulisan kanan">Umur : </td>
			<td colspan="13" class="tulisan"><u><?= $input['umur_pelapor'] ?></u></td>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10" class="tulisan">4. &nbsp;&nbsp;Pekerjaan</td>
			<td class="tulisan">:</td>
			<td colspan="21" class="tulisan"><u><?= $input['pekerjaanpelapor']?></u></td>
			<td colspan="3" class="tengah">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10" class="tulisan">5. &nbsp;&nbsp;Alamat</td>
			<td class="tulisan">:</td>
			<td colspan="4" class="tulisan">RT/RW</td>
			<td colspan="2" class="tulisan"><u><?= $input['rt_pelapor'] ?></u></td>
			<td class="tulisan tengah"> / </td>
			<td colspan="2" class="tulisan"><u><?= $input['rw_pelapor'] ?></u></td>
			<td colspan="3" class="kanan tulisan">Desa </td>
			<td colspan="9" class="tulisan"><u><?= $input['desapelapor']; ?></u></td>
			<td colspan="3" class="kanan tulisan">Kec. </td>
			<td colspan="13" class="tulisan"><u><?= $input['kecpelapor']; ?></u></td>
		</tr>
		<tr>
			<td colspan="11" >&nbsp;</td>
			<td class="tulisan" colspan="5">Kabupaten</td>
			<td class="tulisan" colspan="17"><u><?= $input['kabpelapor'];?></u></td>
			<td class="tulisan" colspan="4">Propinsi</td>
			<td class="tulisan" colspan="10"><u><?= $input['provinsipelapor'];?></u></td>
			<td colspan="1">&nbsp;</td>
		</tr>
		<td colspan="48"></td>
	</table>
	<table id="kop" class="disdukcapil" style="margin-top: 3px;">
		<col span="48" style="width: 2.0833%;">
		<tr style="margin-top: 5px;">
			<td colspan="24" class="tulisan">SAKSI I : </td>
			<td colspan="24" class="tulisan">SAKSI II : </td>
		</tr>
	</table>
	<table class="disdukcapil" style="margin-top: 3px;">
		<col span="48" style="width: 2.0833%;">
		<tr>
			<td colspan=48></td>
		</tr>
		<tr>
			<td colspan="9" class="tulisan">1. &nbsp;&nbsp;NIK</td>
			<td class="tulisan">:</td>
			<td colspan="14" class="tulisan"><u><?= $input['nik_saksi1'] ?></u></td>
			<td colspan="9" class="tulisan">1. &nbsp;&nbsp;NIK</td>
			<td class="tulisan">:</td>
			<td colspan="14" class="tulisan"><u><?= $input['nik_saksi1'] ?></u></td>
		</tr>
		<tr>
			<td colspan="9" class="tulisan">2. &nbsp;&nbsp;Nama</td>
			<td class="tulisan">:</td>
			<td class="tulisan" colspan="14"><u><?= $input['nama_saksi1'] ?></u></td>
			<td colspan="9" class="tulisan">2. &nbsp;&nbsp;Nama</td>
			<td class="tulisan">:</td>
			<td class="tulisan" colspan="14"><u><?= $input['nama_saksi2'] ?></u></td>
		</tr>
		<tr>
			<td colspan="9" class="tulisan">3. &nbsp;&nbsp;Tgl. Lahir / Umur</td>
			<td class="tulisan">:</td>
			<?php $tgl = date('dd',strtotime($input['tanggal_lahir_saksi1']));
				$bln = date('mm',strtotime($input['tanggal_lahir_saksi1']));
				$thn = date('Y',strtotime($input['tanggal_lahir_saksi1']));
			?>
			<td colspan="5" class="tulisan">
				<u><?= $tgl[0].$tgl[1]."-".$bln[0].$bln[1]."-".$thn ?></u>
			</td>
			<td colspan="4" class="tulisan kanan">Umur : </td>
			<td colspan="5" class="tulisan"><u><?= $input['umur_saksi1'] ?></u></td>
			<td colspan="9" class="tulisan">3. &nbsp;&nbsp;Tgl. Lahir / Umur</td>
			<td class="tulisan">:</td>
			<?php $tgl = date('dd',strtotime($input['tanggal_lahir_saksi2']));
				$bln = date('mm',strtotime($input['tanggal_lahir_saksi2']));
				$thn = date('Y',strtotime($input['tanggal_lahir_saksi2']));
			?>
			<td colspan="5" class="tulisan">
				<u><?= $tgl[0].$tgl[1]."-".$bln[0].$bln[1]."-".$thn ?></u>
			</td>
			<td colspan="4" class="tulisan kanan">Umur : </td>
			<td colspan="5" class="tulisan"><u><?= $input['umur_saksi2'] ?></u></td>
		</tr>
		<tr>
			<td colspan="9" class="tulisan">4. &nbsp;&nbsp;Pekerjaan</td>
			<td class="tulisan">:</td>
			<td colspan="14" class="tulisan"><u><?= $input['pekerjaansaksi1']?></u></td>
			<td colspan="9" class="tulisan">4. &nbsp;&nbsp;Pekerjaan</td>
			<td class="tulisan">:</td>
			<td colspan="14" class="tulisan"><u><?= $input['pekerjaansaksi2']?></u></td>
		</tr>
		<tr>
			<td colspan="9" class="tulisan">5. &nbsp;&nbsp;Alamat</td>
			<td class="tulisan">:</td>
			<td colspan="14" class="tulisan">RT/RW <u><?= $input['rt_saksi1'] ?>/<?= $input['rw_saksi1'] ?></u></td>
			<td colspan="9" class="tulisan">5. &nbsp;&nbsp;Alamat</td>
			<td class="tulisan">:</td>
			<td colspan="14" class="tulisan">RT/RW <u><?= $input['rt_saksi2'] ?>/<?= $input['rw_saksi2'] ?></u></td>
		</tr>
		<tr>
			<td colspan="6" class="tulisan">&nbsp;&nbsp;</td>
			<td colspan="18" class="tulisan">Desa <u><?= $input['desasaksi1'] ?></u> Kec. <u><?= $input['kecsaksi1'] ?></u></td>
			<td colspan="6" class="tulisan">&nbsp;&nbsp;</td>
			<td colspan="18" class="tulisan">Desa <u><?= $input['desasaksi2'] ?></u> Kec. <u><?= $input['kecsaksi2'] ?></u></td>
		</tr>
		<tr>
			<td colspan="6" class="tulisan">&nbsp;&nbsp;</td>
			<td colspan="18" class="tulisan">Kab. <u><?= $input['kabsaksi1'] ?></u> Pro. <u><?= $input['provinsisaksi1'] ?></u></td>
			<td colspan="6" class="tulisan">&nbsp;&nbsp;</td>
			<td colspan="18" class="tulisan">Kab. <u><?= $input['kabsaksi2'] ?></u> Pro. <u><?= $input['provinsisaksi2'] ?></u></td>
		</tr>
		<tr>
			<td colspan="24" class="tulisan" style="padding-top:30px;padding-right:30px;text-align:right;">(.............................)</td>
			<td colspan="24" class="tulisan" style="padding-top:30px;padding-right:30px;text-align:right;">(.............................)</td>
		</tr>
	</table>
	<table id="kop" class="disdukcapil" style="margin-top: 15px;">
		<col span="48" style="width: 2.0833%;">
		<tr style="margin-top: 5px;">
			<td colspan="30"></td>
			<td colspan="18" class="tulisan" style="text-align: right;">Bojonegoro, <?= tgl_indo(date('Y m d',time()));?></td>
		</tr>
	</table>
	<table style="margin-top: 3px; width: 100%;">
		<col span="48" style="width: 2.0833%;">
		<tr>
			<td colspan="8" class="kotak padat tengah tulisan" style="padding-bottom: 45px; text-align:center;margin-right:0px;margin-left:0px;">KOREKTOR</td>
			<td colspan="8" class="kotak padat tengah tulisan" style="padding-bottom: 45px; text-align:center;margin-right:0px;margin-left:0px;">REGISTER</td>
			<td colspan="8" class="kotak padat tengah tulisan" style="padding-bottom: 45px; text-align:center;margin-right:0px;margin-left:0px;">ENTRY</td>
			<td colspan="8" class="kotak padat tengah tulisan" style="padding-bottom: 45px; text-align:center;margin-right:0px;margin-left:0px;">CETAK</td>
			<td colspan="8" class="kotak padat tengah tulisan" style="padding-bottom: 45px; text-align:center;margin-right:0px;margin-left:0px;">KASI/KABID</td>
			<td colspan="8" class="kotak padat tengah tulisan" style="padding-bottom: 45px; text-align:center;margin-right:0px;margin-left:0px;">PELAPOR</td>
		</tr>
	</table>
</page>