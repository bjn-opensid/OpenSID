<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<style type="text/css">
	<?php include(FCPATH . "/assets/css/lampiran-surat.css"); ?>
	
.kotak{
	border: solid 1px #000000;
	border-top: 1px solid black;
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

<page orientation="portrait" format="215x330" style="font-size: 7pt">

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
			<td colspan="19" style="border-right: 1px solid black;" class="tengah tulisan-kop-utama"><u>PELAPORAN KEMATIAN</u></td>
			<td colspan="6" class="kotak padat tengah tulisan-besar" style="padding-top: 5px; padding-bottom: 5px;">UMUM</td>
			<td colspan="1" style="border-right: 1px solid black;"></td>
			<td colspan="6" class="kotak padat tengah tulisan-besar" style="padding-top: 5px; padding-bottom: 5px;">TERLAMBAT</td>
			<td colspan="1"></td>
		</tr>
		<tr>
			<td colspan="15"></td>
			<td colspan="19" class="tengah tulisan">KEWARGANEGARAAN : WNA/WNI</td>
			<td colspan="14"></td>
		</tr>
		<tr>
			<td colspan="30" style="font-size: 6px;">&nbsp;</td>
			<td colspan="18" style="border-bottom: 1px solid black;"></td>
		</tr>
		<tr style="margin-top: 5px;">
			<td colspan="24" class="tulisan" style="padding-top: 10px;">DATA KEMATIAN</td>
			<td colspan="6" style="border-right: 1px solid black;" class="tengah tulisan">NO. REG :</td>
			<td colspan="18" class="kotak tulisan padat" style="padding-left: 5px;padding-top: 5px; padding-bottom: 5px;">3522-KM-</td>
		</tr>
	</table>
	<table class="disdukcapil" style="margin-top: 3px;">
		<col span="48" style="width: 2.0833%;">
		<tr>
			<td colspan=48></td>
		</tr>
		<tr>
			<td colspan="10" class="tulisan">1.&nbsp;&nbsp;&nbsp;&nbsp;NIK JENAZAH</td>
			<td class="tulisan">:</td>
			<?php for ($i=0; $i<16; $i++): ?>
				<td colspan="2" class="kotak tulisan padat tengah">
					<?php if (isset($individu['nik'][$i])): ?>
						<?= $individu['nik'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan=21>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10" class="tulisan">2.&nbsp;&nbsp;&nbsp;&nbsp;Nama Jenazah</td>
			<td class="tulisan">:</td>
			<td colspan="33" class="tulisan"><u><?= $individu['nama'] ?></u></td>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10" class="tulisan">3.&nbsp;&nbsp;&nbsp;&nbsp;Jenis Kelamin </td>
			<td class="tulisan">:</td>
			<?php 
				$list_jk = ["Laki-laki","Perempuan"];
				$no = 1;
				foreach($list_jk as $jk) :
			?>
				<td colspan="2" class="kotak padat tengah tulisan">
					<?php if($individu['sex_id']==$no): ?>
						<b><del><?= $no ?>.</del></b>
					<?php else: ?>
						<?= $no ?>.
					<?php endif; ?>
				</td>
				<td colspan="7" class="tulisan"><u><?= $jk ?></u></td>
			<?php
			$no++;
			endforeach; ?>
			<td colspan="4" class="tulisan">Pekerjaan</td>
			<td class="tulisan">:</td>
			<td colspan="24" class="tulisan"><u><?= $individu['pekerjaan'] ?></u></td>
		</tr>
		<tr>
			<td colspan="10" class="tulisan">4.&nbsp;&nbsp;&nbsp;&nbsp;Agama/Kepercayaan</td>
			<td class="tulisan">:</td>
			<?php 
				$list = ["Islam","Kristen","Katolik","Hindu","Budha","Lainnya"];
				$no = 1;
				foreach($list as $ls) :
			?>
				<td colspan="2" class="kotak padat tengah tulisan">
					<?php if($individu['agama_id']==$no): ?>
						<b><del><?= $no ?>.</del></b>
					<?php else: ?>
						<?= $no ?>.
					<?php endif; ?>
				</td>
				<td colspan="4" class="tulisan"><?= $ls ?></td>
			<?php
			$no++;
			endforeach; ?>
			<td colspan="1">&nbsp;</td>
		</tr>
		<tr>
			<?php $tgl = date('dd',strtotime($individu['tanggallahir']));
				$bln = date('mm',strtotime($individu['tanggallahir']));
				$thn = date('Y',strtotime($individu['tanggallahir']));
			?>
			<td colspan="10" class="tulisan">5.&nbsp;&nbsp;&nbsp;&nbsp;Tempat Kelahiran </td>
			<td class="tulisan">:</td>
			<td colspan="12" class="tulisan">Kabupaten <u><?= $individu['tempatlahir'] ?></u></td>
			<td colspan="19" class="tulisan">Tgl. <u><?= $tgl[0].$tgl[1] ?></u> Bln. <u><?= $bln[0].$bln[1] ?></u> Thn. <u><?= $thn ?></u></td>
		</tr>
		<tr>
			<td colspan="10" class="tulisan">6.&nbsp;&nbsp;&nbsp;&nbsp;Alamat</td>
			<td class="tulisan">:</td>
			<td colspan="4" class="tulisan">RT/RW</td>
			<td colspan="2" class="tulisan"><u><?= $individu['rt'] ?></u></td>
			<td class="tulisan tengah"> / </td>
			<td colspan="2" class="tulisan"><u><?= $individu['rw'] ?></u></td>
			<td colspan="3" class="kanan tulisan">Desa </td>
			<td colspan="9" class="tulisan"><u><?= $config['nama_desa']; ?></u></td>
			<td colspan="3" class="kanan tulisan">Kec. </td>
			<td colspan="13" class="tulisan"><u><?= $config['nama_kecamatan']; ?></u></td>
		</tr>
		<tr>
			<td colspan="11" >&nbsp;</td>
			<td class="tulisan" colspan="5">Kabupaten</td>
			<td class="tulisan" colspan="17"><u><?= $config['nama_kabupaten'];;?></u></td>
			<td class="tulisan" colspan="4">Propinsi</td>
			<td class="tulisan" colspan="10"><u><?= $config['nama_propinsi'];?></u></td>
			<td colspan="1">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10" class="tulisan">7.&nbsp;&nbsp;&nbsp;&nbsp;Tgl,Bln,Th Kematian </td>
			<td class="tulisan">:</td>
			<?php $tgl = date('dd',strtotime($input['tanggal_mati']));
				$bln = date('mm',strtotime($input['tanggal_mati']));
				$thn = date('Y',strtotime($input['tanggal_mati']));
			?>
			<td colspan="19" class="tulisan">Tgl. <u><?= $tgl[0].$tgl[1] ?></u> Bln. <u><?= $bln[0].$bln[1] ?></u> Thn. <u><?= $thn ?></u></td>
		</tr>
		<tr>
			<td colspan="10" class="tulisan">8.&nbsp;&nbsp;&nbsp;&nbsp;Tempat Kematian </td>
			<td class="tulisan">:</td>
			<td colspan="16" class="tulisan"><u><?= $input['tempat_mati'] ?></u></td>
		</tr>
		<tr>
			<td colspan="10" class="tulisan">9.&nbsp;&nbsp;&nbsp;&nbsp;Anak ke </td>
			<td class="tulisan">:</td>
			<?php for ($i=0; $i<9; $i++): ?>
				<td colspan="2" class="tulisan kotak padat tengah">
					<?php if (isset($input['anakke'])): ?>
						<?php 
							if($input['anakke']==($i+1)){
								echo "<del>".($i+1).".</del>";
							}else{
								echo ($i+1).".";
							}?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4" class="kotak tengah padat tulisan">
				<?php if($input['anakke']>=10): ?>
					<del><?= $input['anakke']; ?>.</del>
				<?php else: ?>
					.....
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td colspan="10" class="tulisan">10.&nbsp;&nbsp;&nbsp;Hari Jam Mati </td>
			<td class="tulisan">:</td>
			<td colspan="3" class="tulisan">Hari :</td>
			<td colspan="4" class="tulisan"><?= $input['hari']; ?></td>
			<td colspan="3" class="tulisan">Jam :</td>
			<td colspan="4" class="tulisan"><?= $input['jam']; ?></td>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10" class="tulisan">11.&nbsp;&nbsp;&nbsp;Sebab Kematian </td>
			<td class="tulisan">:</td>
			<?php 
				$list = ["Sakit biasa / tua","Wabah Penyakit","Kecelakaan"];
				$no = 1;
				foreach($list as $ls) :
			?>
				<td colspan="2" class="kotak padat tengah tulisan">
					<?php if($input['sebab']==$no): ?>
						<b><del><?= $no ?>.</del></b>
					<?php else: ?>
						<?= $no ?>.
					<?php endif; ?>
				</td>
				<td colspan="8" class="tulisan"><?= $ls ?></td>
			<?php
			$no++;
			endforeach; ?>
		</tr>
		<tr>
			<td colspan="11"></td>
			<?php 
				$list = ["Kriminalitas","Bunuh Diri","Lainnya"];
				foreach($list as $ls) :
			?>
				<td colspan="2" class="kotak padat tengah tulisan">
					<?php if($input['sebab']==$no): ?>
						<b><del><?= $no ?>.</del></b>
					<?php else: ?>
						<?= $no ?>.
					<?php endif; ?>
				</td>
				<td colspan="5" class="tulisan"><?= $ls ?></td>
			<?php
			$no++;
			endforeach; ?>
		</tr>
		<tr>
			<td colspan="10" class="tulisan">12.&nbsp;&nbsp;&nbsp;Yang menerangkan </td>
			<td class="tulisan">:</td>
			<?php 
				$list = ["Dokter","Tenaga Kesehatan","Kepolisian","Lainnya"];
				$no = 1;
				foreach($list as $ls) :
			?>
				<td colspan="2" class="kotak padat tengah tulisan">
					<?php if($input['penolong_mati']==$no): ?>
						<b><del><?= $no ?>.</del></b>
					<?php else: ?>
						<?= $no ?>.
					<?php endif; ?>
				</td>
				<td colspan="8" class="tulisan"><?= $ls ?></td>
			<?php
			$no++;
			endforeach; ?>
		</tr>
		<tr>
			<td colspan="10" class="tulisan">13.&nbsp;&nbsp;&nbsp;Keturunan</td>
			<td class="tulisan">:</td>
			<td colspan="2" class="kotak padat tengah tulisan">1.</td>
			<td colspan="4" class="tulisan">Eropa </td>
			<td colspan="2" class="kotak padat tengah tulisan">2.</td>
			<td colspan="11" class="tulisan">Cina/Timur Asing Lainnya </td>
			<td colspan="2" class="kotak padat tengah tulisan">3.</td>
			<td colspan="6" class="tulisan">Indonesia</td>
			<td colspan=5>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="11"></td>
			<td colspan="2" class="kotak padat tengah tulisan">4.</td>
			<td colspan="5" class="tulisan">Indonesia</td>
			<td colspan="2" class="kotak padat tengah tulisan">5.</td>
			<td colspan="5" class="tulisan">Lainnya</td>
			<td colspan=5>&nbsp;</td>
		</tr>
	</table>
	<table class="disdukcapil" style="margin-top: 3px;">
		<col span="48" style="width: 2.0833%;">
		<tr>
			<td colspan=48></td>
		</tr>
		<tr>
			<td colspan="10" class="tulisan">1.&nbsp;&nbsp;&nbsp;&nbsp;IBU / NIK</td>
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
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10" class="tulisan">2.&nbsp;&nbsp;&nbsp;&nbsp;IBU Nama </td>
			<td class="tulisan">:</td>
			<td colspan="33" class="tulisan"><u><?= $input['nama_ibu'] ?></u></td>
			<td colspan=4>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10" class="tulisan">3.&nbsp;&nbsp;&nbsp;&nbsp;Tgl. lahir / Umur</td>
			<td class="tulisan">:</td>
			<?php if (!empty($input['tanggal_lahir_ibu'])) {
				$tgl = date('dd',strtotime($input['tanggal_lahir_ibu']));
				$bln = date('mm',strtotime($input['tanggal_lahir_ibu']));
				$thn = date('Y',strtotime($input['tanggal_lahir_ibu']));
				}
				else
				{ unset($tgl); unset($bln); unset($thn); }
			?>
			<td colspan="19" class="tulisan">Tgl. <u><?= $tgl[0].$tgl[1] ?></u> Bln. <u><?= $bln[0].$bln[1] ?></u> Thn. <u><?= $thn ?></u></td>
			<td colspan="5" class="kanan tulisan">Umur : </td>
			<td colspan="2" class="tulisan"><u><?= $input['umur_ibu'] ?></u></td>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10" class="tulisan">4.&nbsp;&nbsp;&nbsp;&nbsp;Pekerjaan</td>
			<td class="tulisan">:</td>
			<td colspan="21" class="tulisan"><u><?= $input['pekerjaanibu']?></u></td>
			<td colspan="3" class="tengah">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10" class="tulisan">5.&nbsp;&nbsp;&nbsp;&nbsp;Alamat</td>
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
			<td colspan="19" class="tulisan">Tgl. <u><?= $tgl[0].$tgl[1] ?></u> Bln. <u><?= $bln[0].$bln[1] ?></u> Thn. <u><?= $thn ?></u></td>
			<td colspan="12">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="48" class="bawah"></td>
		</tr>
		<tr>
			<td colspan="10" class="tulisan">1.&nbsp;&nbsp;&nbsp;&nbsp;AYAH / NIK</td>
			<td class="tulisan">:</td>
			<?php for ($i=0; $i<16; $i++): ?>
				<td colspan="2" class="kotak padat tengah tulisan">
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
			<td colspan="10" class="tulisan">2.&nbsp;&nbsp;&nbsp;&nbsp;AYAH Nama </td>
			<td class="tulisan">:</td>
			<td colspan="33" class="tulisan"><u><?= $input['nama_ayah'] ?></u></td>
			<td colspan=4>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10" class="tulisan">3.&nbsp;&nbsp;&nbsp;&nbsp;Tgl. Lahir / Umur</td>
			<td class="tulisan">:</td>
			<?php if (!empty($input['tanggal_lahir_ayah'])):
				$tgl = date('dd',strtotime($input['tanggal_lahir_ayah']));
				$bln = date('mm',strtotime($input['tanggal_lahir_ayah']));
				$thn = date('Y',strtotime($input['tanggal_lahir_ayah']));
			else:
				unset($tgl); unset($bln); unset($thn);
			endif;
			?>
			<td colspan="19" class="tulisan">Tgl. <u><?= $tgl[0].$tgl[1] ?></u> Bln. <u><?= $bln[0].$bln[1] ?></u> Thn. <u><?= $thn ?></u></td>
			<td colspan="5" class="kanan tulisan">Umur : </td>
			<td colspan="2" class="tulisan"><u><?= $input['umur_ayah'] ?></u></td>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10" class="tulisan">4.&nbsp;&nbsp;&nbsp;&nbsp;Pekerjaan</td>
			<td class="tulisan">:</td>
			<td colspan="21" class="tulisan"><u><?= $input['pekerjaanayah']?></u></td>
			<td colspan="3" class="tengah">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10" class="tulisan">5.&nbsp;&nbsp;&nbsp;&nbsp;Alamat</td>
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
		<tr>
			<td colspan="48" class="bawah"></td>
		</tr>
		<tr>
			<td colspan="10" class="tulisan">1.&nbsp;&nbsp;&nbsp;&nbsp;PELAPOR / NIK</td>
			<td class="tulisan">:</td>
			<?php for ($i=0; $i<16; $i++): ?>
				<td colspan="2" class="kotak padat tengah tulisan">
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
			<td colspan="10" class="tulisan">2.&nbsp;&nbsp;&nbsp;&nbsp;PELAPOR Nama</td>
			<td class="tulisan">:</td>
			<td colspan="33" class="tulisan"><u><?= $input['nama_pelapor'] ?></u></td>
			<td colspan=4>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10" class="tulisan">3.&nbsp;&nbsp;&nbsp;&nbsp;Tgl. lahir / Umur </td>
			<td class="tulisan">:</td>
				<?php $tgl = date('dd',strtotime($input['tanggal_lahir_pelapor']));
					$bln = date('mm',strtotime($input['tanggal_lahir_pelapor']));
					$thn = date('Y',strtotime($input['tanggal_lahir_pelapor']));
				?>
				<td colspan="19" class="tulisan">Tgl. <u><?= $tgl[0].$tgl[1] ?></u> Bln. <u><?= $bln[0].$bln[1] ?></u> Thn. <u><?= $thn ?></u></td>
				<td colspan="5" class="kanan tulisan">Umur : </td>
				<td colspan="2" class="tulisan"><u><?= $input['umur_pelapor'] ?></u></td>
				<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10" class="tulisan">4.&nbsp;&nbsp;&nbsp;&nbsp;Pekerjaan</td>
			<td class="tulisan">:</td>
			<td colspan="21" class="tulisan"><u><?= $input['pekerjaanpelapor']?></u></td>
			<td colspan="3" class="tengah">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10" class="tulisan">5.&nbsp;&nbsp;&nbsp;&nbsp;Alamat</td>
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
		<tr>
			<td colspan="48" class="bawah"></td>
		</tr>
		<tr>
			<td colspan="9" class="tulisan">1.&nbsp;&nbsp;&nbsp;&nbsp;SAKSI I /NIK</td>
			<td class="tulisan">:</td>
			<td colspan="14" class="tulisan"><u><?= $input['nik_saksi1'] ?></u></td>
			<td colspan="9" class="tulisan">1.&nbsp;&nbsp;&nbsp;&nbsp;SAKSI II /NIK</td>
			<td class="tulisan">:</td>
			<td colspan="14" class="tulisan"><u><?= $input['nik_saksi2'] ?></u></td>
		</tr>
		<tr>
			<td colspan="9" class="tulisan">2.&nbsp;&nbsp;&nbsp;&nbsp;Nama </td>
			<td class="tulisan">:</td>
			<td colspan="14" class="tulisan"><u><?= $input['nama_saksi1'] ?></u></td>
			<td colspan="9" class="tulisan">2.&nbsp;&nbsp;&nbsp;&nbsp;Nama </td>
			<td class="tulisan">:</td>
			<td colspan="14" class="tulisan"><u><?= $input['nama_saksi2'] ?></u></td>
		</tr>
		<tr>
			<td colspan="9" class="tulisan">3.&nbsp;&nbsp;&nbsp;&nbsp;Tgl. lahir / Umur </td>
			<td class="tulisan">:</td>
				<?php
					$tgl = date('dd',strtotime($input['tanggal_lahir_saksi1']));
					$bln = date('mm',strtotime($input['tanggal_lahir_saksi1']));
					$thn = date('Y',strtotime($input['tanggal_lahir_saksi1']));
				?>
			<td colspan="5" class="tulisan"><u><?= $tgl[0].$tgl[1] ?>-<?= $bln[0].$bln[1] ?>-<?= $thn ?></u></td>
			<td colspan="9" class="tulisan">Umur : <u><?= $input['umur_saksi1'] ?></u></td>
			<td colspan="9" class="tulisan">3.&nbsp;&nbsp;&nbsp;&nbsp;Tgl. lahir / Umur </td>
			<td class="tulisan">:</td>
				<?php
					$tgl = date('dd',strtotime($input['tanggal_lahir_saksi2']));
					$bln = date('mm',strtotime($input['tanggal_lahir_saksi2']));
					$thn = date('Y',strtotime($input['tanggal_lahir_saksi2']));
				?>
			<td colspan="5" class="tulisan"><u><?= $tgl[0].$tgl[1] ?>-<?= $bln[0].$bln[1] ?>-<?= $thn ?></u></td>
			<td colspan="9" class="tulisan">Umur : <u><?= $input['umur_saksi2'] ?></u></td>
		</tr>
		<tr>
			<td colspan="9" class="tulisan">4.&nbsp;&nbsp;&nbsp;&nbsp;Pekerjaan</td>
			<td class="tulisan">:</td>
			<td colspan="14" class="tulisan"><u><?= $input['pekerjaansaksi1']?></u></td>
			<td colspan="9" class="tulisan">4.&nbsp;&nbsp;&nbsp;&nbsp;Pekerjaan</td>
			<td class="tulisan">:</td>
			<td colspan="14" class="tulisan"><u><?= $input['pekerjaansaksi2']?></u></td>
		</tr>
		<tr>
			<td colspan="9" class="tulisan">5.&nbsp;&nbsp;&nbsp;&nbsp;Alamat</td>
			<td class="tulisan">:</td>
			<td colspan="14" class="tulisan">RT/RW <u><?= $input['rt_saksi1'] ?>/<?= $input['rw_saksi1'] ?></u></td>
			<td colspan="9" class="tulisan">5.&nbsp;&nbsp;&nbsp;&nbsp;Alamat</td>
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
