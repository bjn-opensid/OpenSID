<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * File ini:
 *
 * View untuk modul Buku Administrasi Desa >  Administrasi Pembangunan > Buku Tanah Kas Desa
 *
 * donjo-app/views/bumindes/pembangunan/tanah_kas_desa/tanah_kas_desa_cetak.php
 *
 */

/**
 *
 * File ini bagian dari:
 *
 * OpenSID
 *
 * Sistem informasi desa sumber terbuka untuk memajukan desa
 *
 * Aplikasi dan source code ini dirilis berdasarkan lisensi GPL V3
 *
 * Hak Cipta 2009 - 2015 Combine Resource Institution (http://lumbungkomunitas.net/)
 * Hak Cipta 2016 - 2020 Perkumpulan Desa Digital Terbuka (https://opendesa.id)
 *
 * Dengan ini diberikan izin, secara gratis, kepada siapa pun yang mendapatkan salinan
 * dari perangkat lunak ini dan file dokumentasi terkait ("Aplikasi Ini"), untuk diperlakukan
 * tanpa batasan, termasuk hak untuk menggunakan, menyalin, mengubah dan/atau mendistribusikan,
 * asal tunduk pada syarat berikut:
 *
 * Pemberitahuan hak cipta di atas dan pemberitahuan izin ini harus disertakan dalam
 * setiap salinan atau bagian penting Aplikasi Ini. Barang siapa yang menghapus atau menghilangkan
 * pemberitahuan ini melanggar ketentuan lisensi Aplikasi Ini.
 *
 * PERANGKAT LUNAK INI DISEDIAKAN "SEBAGAIMANA ADANYA", TANPA JAMINAN APA PUN, BAIK TERSURAT MAUPUN
 * TERSIRAT. PENULIS ATAU PEMEGANG HAK CIPTA SAMA SEKALI TIDAK BERTANGGUNG JAWAB ATAS KLAIM, KERUSAKAN ATAU
 * KEWAJIBAN APAPUN ATAS PENGGUNAAN ATAU LAINNYA TERKAIT APLIKASI INI.
 *
 * @package	OpenSID
 * @author	Tim Pengembang OpenDesa
 * @copyright	Hak Cipta 2009 - 2015 Combine Resource Institution (http://lumbungkomunitas.net/)
 * @copyright	Hak Cipta 2016 - 2020 Perkumpulan Desa Digital Terbuka (https://opendesa.id)
 * @license	http://www.gnu.org/licenses/gpl.html	GPL V3
 * @link 	https://github.com/OpenSID/OpenSID
 */
?>

<table>
	<tbody>		
		<tr>
			<td class="text-center">
				<h4>BUKU TANAH KAS DESA</h4>
			</td>
		</tr>
		<tr>
			<td class="text-center">
				<h4>BUKU TANAH KAS DESA BULAN <?= strtoupper(getBulan($bulan)) ?> TAHUN <?= $tahun ?></h4>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>
				<table class="border thick">
					<thead>
						<tr class="border thick">
							<th rowspan="3">NOMOR URUT</th>
							<th rowspan="3">ASAL TANAH KAS DESA</th>
							<th rowspan="3">NOMOR SERTIFIKAT BUKU LETTER C / PERSIL</th>
							<th rowspan="3">LUAS (m)</th>
							<th rowspan="3">KELAS</th>
							<th colspan="6">PEROLEHAN TKD</th>
							<th colspan="5">JENIS TKD</th>
							<th colspan="2">PATOK TANDA BATAS</th>							
							<th colspan="2">PAPAN NAMA</th>														
							<th rowspan="3">LOKASI</th>
							<th rowspan="3">PERUNTUKAN</th>
							<th rowspan="3">MUTASI</th>
							<th rowspan="3">KET</th>										 
						</tr>					
						<tr class="border thick">	
							<th rowspan="2">ASLI MILIK DESA</th>						
							<th colspan="3">BANTUAN</th>						
							<th rowspan="2">LAIN - LAIN</th>						
							<th width="100" rowspan="2">TGL PEROLEHAN</th>						
							<th rowspan="2">SAWAH</th>						
							<th rowspan="2">TEGAL</th>						
							<th rowspan="2">KEBUN</th>						
							<th rowspan="2">TAMBAK / KOLAM</th>						
							<th rowspan="2">TANAH KERING / DARAT</th>						
							<th rowspan="2">ADA</th>						
							<th rowspan="2">TIDAK</th>						
							<th rowspan="2">ADA</th>						
							<th rowspan="2">TIDAK</th>						
						</tr>
						<tr class="border thick">				
							<th>PEMERINTAH</th>				
							<th>PROV</th>				
							<th>KAB/KOTA</th>												
						</tr>			
						<tr class="border thick">
							<th>1</th>
							<th>2</th>
							<th>3</th>
							<th>4</th>
							<th>5</th>
							<th>6</th>
							<th>7</th>
							<th>8</th>
							<th>9</th>
							<th>10</th>
							<th>11</th>
							<th>12</th>
							<th>13</th>
							<th>14</th>
							<th>15</th>
							<th>16</th>
							<th>17</th>
							<th>18</th>
							<th>19</th>
							<th>20</th>
							<th>21</th>
							<th>22</th>
							<th>23</th>
							<th>24</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$count = 1;
							foreach ($main as $data): 						
						?>
							<tr>
								<td class="text-left"><?= $count ?></td>
								<td><?= strtoupper($data['nama_pemilik_asal'])?></td>
								<td class="text-left"><?= $data['letter_c']."<br>".$data['persil']?></td>							
								<td><?= strtoupper($data['luas']) ?></td>
								<td><?= strtoupper($data['kelas']) ?></td>					
								<td class="text-center"><?php if(0!=$data['asli_milik_desa']){echo $data['asli_milik_desa'];}?></td>							
								<td class="text-center"><?php if(0!=$data['pemerintah']){echo $data['pemerintah'];}?></td>							
								<td class="text-center"><?php if(0!=$data['provinsi']){echo $data['provinsi'];}?></td>							
								<td class="text-center"><?php if(0!=$data['kabupaten_kota']){echo $data['kabupaten_kota'];}?></td>							
								<td class="text-center"><?php if(0!=$data['lain_lain']){echo $data['lain_lain'];}?></td>							
								<td><?= tgl_indo_out($data['tanggal_perolehan']) ?></td>
								<td class="text-center"><?php if(0!=$data['sawah']){echo $data['sawah'];}?></td>							
								<td class="text-center"><?php if(0!=$data['tegal']){echo $data['tegal'];}?></td>							
								<td class="text-center"><?php if(0!=$data['kebun']){echo $data['kebun'];}?></td>							
								<td class="text-center"><?php if(0!=$data['tambak_kolam']){echo $data['tambak_kolam'];}?></td>							
								<td class="text-center"><?php if(0!=$data['tanah_kering_darat']){echo $data['tanah_kering_darat'];}?></td>							
								<td class="text-center"><?php if(0!=$data['ada_patok']){echo $data['ada_patok'];}?></td>							
								<td class="text-center"><?php if(0!=$data['tidak_ada_patok']){echo $data['tidak_ada_patok'];}?></td>							
								<td class="text-center"><?php if(0!=$data['ada_papan_nama']){echo $data['ada_papan_nama'];}?></td>							
								<td class="text-center"><?php if(0!=$data['tidak_ada_papan_nama']){echo $data['tidak_ada_papan_nama'];}?></td>							
								<td><?= strtoupper($data['lokasi']) ?></td>
								<td><?php if($data['peruntukan']=='SEWA')
									{
										echo "SEWA";
									}else if($data['peruntukan']=='PINJAMPAKAI')
									{
										echo "PINJAM PAKAI";
									}else if($data['peruntukan']=='KERJASAMAPEMANFAATAN')
									{
										echo "KERJASAMA PEMANFAATAN";
									}else
									{
										echo "BANGUN GUNA SERAH ATAU BANGUN SERAH GUNA";
									} ?></td>
								<td><?= strtoupper($data['mutasi']) ?></td>
								<td><?= strtoupper($data['keterangan']) ?></td>								
							</tr>
						<?php
							$count++;
						 	endforeach; 
						?>
					</tbody>
				</table>
			</td>
		</tr>
	</tbody>
</table>