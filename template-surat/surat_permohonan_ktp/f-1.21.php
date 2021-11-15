<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');?>
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
	table.disdukcapil td.kanan { text-align: right; }
	table.disdukcapil td.tengah { text-align: center; }
</style>
<?php 
	function tanggggggggu(){
		$tanggal = date('Y-m-d');
		$bulan = array (
			1 =>   'Januari',
			'Februari',
			'Maret',
			'April',
			'Mei',
			'Juni',
			'Juli',
			'Agustus',
			'September',
			'Oktober',
			'November',
			'Desember'
		);
		$pecahkan = explode('-', $tanggal);	 
		return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
	}
?>
<page orientation="portrait" format="210x330" style="font-size: 8pt">
	<table align="right" style="padding: 5px 20px; border: solid 1px black;">
		<tr><td><strong style="font-size: 14pt;">F-1.21</strong></td></tr>
	</table>
	<p style="text-align: center; margin-top: 40px;">
			<strong style="font-size: 12pt;">FORMULIR PERMOHOHAN KARTU TANDA PENDUDUK (KTP) WARGA NEGARA INDONESIA</strong>
	</p>
	<table class="disdukcapil" style="margin-top: 0px;">
		<col span="48" style="width: 2.0833%;">
		<tr>
			<td class="kotak" colspan=48>
				<strong>Perhatian:</strong><br>
				1. Harap diisi dengan huruf cetak dan menggunakan tinta hitam<br>
				2. Setelah formulir ini diisi dan ditandatangani, harap diserahkan kembali ke Kantor Desa/Kelurahan
			</td>
		</tr>
		<tr><td colspan="48">&nbsp;</td></tr>
		<tr>
			<td colspan="13" class="left"><strong>PEMERINTAH PROPINSI</strong></td>
			<td>:</td>
			<?php for ($i=0; $i<2; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($config['kode_propinsi'][$i])): ?>
						<?= $config['kode_propinsi'][$i]; ?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan=3>&nbsp;</td>
			<td colspan="17" class="kotak"><?= $config['nama_propinsi'];?></td>
			<td colspan=12>&nbsp;</td>
		</tr>

		<tr>
			<td colspan="13" class="left"><strong>PEMERINTAH KABUPATEN/KOTA</strong></td>
			<td>:</td>
			<?php for ($i=0; $i<2; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($config['kode_kabupaten'][$i])): ?>
						<?= substr($config['kode_kabupaten'], 2, 4)[$i]; ?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan=3>&nbsp;</td>
			<td colspan="17" class="kotak"><?= $config['nama_kabupaten'];?></td>
			<td colspan=12>&nbsp;</td>
		</tr>

		 <tr>
			<td colspan="13" class=" left"><strong>KECAMATAN</strong></td>
			<td>:</td>
			<?php for ($i=0; $i<2; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($config['kode_kecamatan'][$i])): ?>
						<?= substr($config['kode_kecamatan'], 4, 6)[$i]; ?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan=3>&nbsp;</td>
			<td colspan="17" class="kotak"><?= $config['nama_kecamatan'];?></td>
			<td colspan=12>&nbsp;</td>
		</tr>

		<tr>
			<td colspan="13" class="left"><strong>KELURAHAN/DESA</strong></td>
			<td>:</td>
			<?php for ($i=0; $i<4; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($config['kode_desa'][$i])): ?>
						<?= substr($config['kode_desa'], 6, 10)[$i]; ?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td>&nbsp;</td>
			<td colspan="17" class="kotak"><?= $config['nama_desa'];?></td>
			<td colspan=12>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="8" class="left"><strong><u>PERMOHONAN KTP</u></strong></td>
			<td>&nbsp;</td>
			<td class="kotak"><strong><?php if($input['alasan_permohonan_id']==1) echo "V"; else echo"X"; ?></strong></td>
			<td colspan="8" class="kotak" style="text-align: center;">A. Baru</td>
			<td>&nbsp;</td>
			<td class="kotak"><strong><?php if($input['alasan_permohonan_id']==2) echo "V"; else echo"X"; ?></strong></td>
			<td colspan="8" class="kotak" style="text-align: center;">B. Perpanjangan</td>
			<td>&nbsp;</td>
			<td class="kotak"><strong><?php if($input['alasan_permohonan_id']==3) echo "V"; else echo"X"; ?></strong></td>
			<td colspan="8" class="kotak" style="text-align: center;">C. Penggantian</td>
		</tr>
		<tr><td colspan=48 class="bawah">&nbsp;</td></tr>
		<tr><td colspan=48>&nbsp;</td></tr>
		<tr>
			<td colspan="10" class="kotak">1. Nama Lengkap</td>
			<td>:</td>
			<?php for ($i=0; $i<33; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($individu['nama'][$i])): ?>
						<?= $individu['nama'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td colspan=10 class="kotak">2. No. KK</td>
			<td>:</td>
			<?php for ($i=0; $i<16; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($individu['no_kk'][$i])): ?>
						<?= $individu['no_kk'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
		</tr>
		<tr>
			<td colspan="10" class="kotak">3. NIK</td>
			<td>:</td>
			<?php for ($i=0; $i<16; $i++): ?>
				<td class="kotak padat tengah">
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
			<td colspan="10" class="kotak">4. Alamat</td>
			<td>:</td>
			<td colspan="23" class="kotak"><?= $individu['alamat']?></td>
			<td colspan="3" class="tengah">RT:</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($individu['rt'][$i])): ?>
						<?= $individu['rt'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="3" class="tengah">RW:</td>
			<?php for ($i=0; $i<3; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($individu['rw'][$i])): ?>
						<?= $individu['rw'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="11" >&nbsp;</td>
			<td colspan="7" class="left">a. Desa/Kelurahan</td>
			<td colspan="12" class="kotak"><?= $config['nama_desa'];?></td>
			<td colspan="5" class="left">b. Kecamatan</td>
			<td colspan="12" class="kotak"><?= $config['nama_kecamatan'];?></td>
			<td colspan="1">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="11" >&nbsp;</td>
			<td colspan="7" class="left">c. Kabupaten/Kota</td>
			<td colspan="12" class="kotak"><?= $config['nama_kabupaten'];?></td>
			<td colspan="5" class="left">d. Propinsi</td>
			<td colspan="12" class="kotak"><?= $config['nama_propinsi'];?></td>
			<td colspan="1">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="11">&nbsp;</td>
			<td colspan="7" class="left">Kode Pos</td>
			<?php for ($i=0; $i<5; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($config['kode_pos'][$i])): ?>
						<?= $config['kode_pos'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="7">&nbsp;</td>
			<td colspan="5" class="left">Telepon</td>
			<?php for ($i=0; $i<8; $i++): ?>
				<td class="kotak padat tengah">
					<?php if (isset($individu['telepon_kk'][$i])): ?>
						<?= $individu['telepon_kk'][$i];?>
					<?php else: ?>
						&nbsp;
					<?php endif; ?>
				</td>
			<?php endfor; ?>
			<td colspan="5">&nbsp;</td>
		</tr>
		<tr><td colspan="48" class="atas">&nbsp;</td></tr>
		<tr>
			<td colspan="8" class="kotak" style="text-align: center;">Pas Photo (2x3)</td>
			<td colspan="8" class="kotak" style="text-align: center;">Cap Jempol</td>
			<td colspan="8" class="kotak" style="text-align: center;">Specimen Tanda Tangan</td>
			<td colspan="11"></td>
			<td colspan="12" style="text-align: center">
				<?= $data['config']['nama_desa']; ?>, <?= tanggggggggu(); ?>
			</td>
		</tr>
		<tr>
			<td colspan="8" rowspan="2" class="kotak" style="text-align: center;"></td>
			<td colspan="8" rowspan="2" class="kotak" style="text-align: center;"></td>
			<td colspan="8" class="kotak" style="text-align: center;"><br><br><br><br><br><br><br><br><br></td>
			<td colspan="11"></td>
			<td colspan="12" style="text-align: center;">
				<strong>Pemohon</strong><br><br><br><br><br><br>
				<strong>(<?= padded_string_center(strtoupper($individu['nama']),30)?>)</strong>
			</td>
		</tr>
		<tr>
			<td colspan="8" style="font-size: 8px;">Ket: Cap Jempol/Tanda Tangan</td>
		</tr>
		<tr><td colspan="48">&nbsp;</td></tr>
		<tr><td colspan="48">&nbsp;</td></tr>
		<tr><td colspan="48">&nbsp;</td></tr>
		<tr>
			<td colspan="10">&nbsp;</td>
			<td colspan="4">&nbsp;</td>
			<td colspan="16" style="text-align: center;">Mengetahui</td>
			<td colspan="15">&nbsp;</td>
		</tr>
		<tr><td colspan="48">&nbsp;</td></tr>
		<tr>
			<td colspan="10">&nbsp;</td>
			<td>&nbsp;</td>
			<td colspan="12" style="text-align: center;">Camat</td>
			<td>&nbsp;</td>
			<td colspan="13" style="text-align: center;"><?= $this->penandatangan_lampiran($data);?></td>
			<td colspan="22">&nbsp;</td>
		</tr>
		<tr><td colspan="48">&nbsp;</td></tr>
		<tr><td colspan="48">&nbsp;</td></tr>
		<tr><td colspan="48">&nbsp;</td></tr>
		<tr>
			<td colspan="10">&nbsp;</td>
			<td>&nbsp;</td>
			<td colspan="12" style="text-align: center;"><?= str_pad(".",50,".",STR_PAD_LEFT);?></td>
			<td>&nbsp;</td>
			<td colspan="13" style="text-align: center;"><strong>(<?= padded_string_center(strtoupper($kepala_desa['pamong_nama']),30)?>)</strong></td>
			<td colspan="9">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="10">&nbsp;</td>
			<td>&nbsp;</td>
			<td colspan="12" style="text-align: center;"><?= "NIP&nbsp;&nbsp;:&nbsp;".str_pad("",40*6,"&nbsp;",STR_PAD_LEFT)?></td>
			<td>&nbsp;</td>
			<td colspan="13" style="text-align: center;"><?= "NIP&nbsp;&nbsp;:&nbsp;".$kepala_desa['pamong_nip']?></td>
			<td colspan="22">&nbsp;</td>
		</tr>
		<tr><td colspan="48">&nbsp;</td></tr>
		<tr><td colspan="48">&nbsp;</td></tr>
		<tr><td colspan="48">&nbsp;</td></tr>
		<tr><td colspan="48">&nbsp;</td></tr>
		<tr>
			<?php for ($i=0; $i<48; $i++): ?>
				<td>&nbsp;</td>
			<?php endfor; ?>
		</tr>
	</table>
</page>
