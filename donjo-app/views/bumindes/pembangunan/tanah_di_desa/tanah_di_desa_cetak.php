<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * File ini:
 *
 * View untuk modul Buku Administrasi Desa >  Administrasi Pembangunan > Buku Tanah Desa
 *
 * donjo-app/views/bumindes/pembangunan/tanah_di_desa/tanah_di_desa_cetak.php
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
				<h4>BUKU TANAH DI DESA</h4>
			</td>
		</tr>
		<tr>
			<td class="text-center">
				<h4>BUKU TANAH DESA BULAN <?= strtoupper(getBulan($bulan)) ?> TAHUN <?= $tahun ?></h4>
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
							<th rowspan="3">NNOMOR URUT</th>
							<th rowspan="3">NAMA PERORANGAN / BADAN HUKUM</th>
							<th rowspan="3">JML (M<sup>2</sup>)</th>
							<th colspan="8">STATUS HAK TANAH (M<sup>2</sup>)</th>
							<th colspan="14">PENGGUNAAN TANAH (M<sup>2</sup>)</th>
							<th rowspan="3">KET</th>
						</tr>					
						<tr class="border thick">					
							<th colspan="5">SUDAH <br> BERSERTIFIKAT</th>
							<th colspan="3">BELUM <br> BERSERTIFIKAT</th>
							<th colspan="5">NON PERTANIAN</th>						
							<th colspan="9">PERTANIAN</th>

						</tr>	
						<tr class="border thick">						
							<th>HM</th>						
							<th>HGB</th>						
							<th>HP</th>						
							<th>HGU</th>						
							<th>HPL</th>						
							<th>MA</th>						
							<th>VI</th>						
							<th>TN</th>	
							<th>PERUMAHAN</th>						
							<th>PERDAGANGAN DAN JASA</th>					
							<th>PERKANTORAN</th>					
							<th>INDUSTRI</th>					
							<th>FASILITAS UMUM</th>					
							<th>SAWAH</th>					
							<th>TEGALAN</th>					
							<th>PERKEBUNAN</th>					
							<th>PETERNAKAN / PERIKANAN</th>					
							<th>HUTAN BELUKAR</th>					
							<th>HUTAN LEBAT / LINDUNG</th>					
							<th>MUTASI TANAH DI DESA</th>					
							<th>TANAH KOSONG</th>					
							<th>LAIN - LAIN</th>							
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
							<th>25</th>							
							<th>26</th>							
						</tr>
					</thead>
					<tbody>
						<?php 
							$count = 1;
							foreach ($main as $data): 						
						?>
							<tr>
								<td class="text-left"><?= $count ?></td>
								<td><?= strtoupper(($data['nama_pemilik_asal'])? $data['nama_pemilik_asal'] : $data['nama'])?></td>														
								<td><?= $data['luas'] ?></td>
								<td class="text-center"><?php if(0!=$data['hak_milik']){echo $data['hak_milik'];}?></td>
								<td class="text-center"><?php if(0!=$data['hak_guna_bangunan']){echo $data['hak_guna_bangunan'];}?></td>
								<td class="text-center"><?php if(0!=$data['hak_pakai']){echo $data['hak_pakai'];}?></td>
								<td class="text-center"><?php if(0!=$data['hak_guna_usaha']){echo $data['hak_guna_usaha'];}?></td>
								<td class="text-center"><?php if(0!=$data['hak_pengelolaan']){echo $data['hak_pengelolaan'];}?></td>
								<td class="text-center"><?php if(0!=$data['hak_milik_adat']){echo $data['hak_milik_adat'];}?></td>
								<td class="text-center"><?php if(0!=$data['hak_verponding']){echo $data['hak_verponding'];}?></td>
								<td class="text-center"><?php if(0!=$data['tanah_negara']){echo $data['tanah_negara'];}?></td>
								<td class="text-center"><?php if(0!=$data['perumahan']){echo $data['perumahan'];}?></td>
								<td class="text-center"><?php if(0!=$data['perdagangan_jasa']){echo $data['perdagangan_jasa'];}?></td>
								<td class="text-center"><?php if(0!=$data['perkantoran']){echo $data['perkantoran'];}?></td>
								<td class="text-center"><?php if(0!=$data['industri']){echo $data['industri'];}?></td>
								<td class="text-center"><?php if(0!=$data['fasilitas_umum']){echo $data['fasilitas_umum'];}?></td>
								<td class="text-center"><?php if(0!=$data['sawah']){echo $data['sawah'];}?></td>
								<td class="text-center"><?php if(0!=$data['tegalan']){echo $data['tegalan'];}?></td>
								<td class="text-center"><?php if(0!=$data['perkebunan']){echo $data['perkebunan'];}?></td>
								<td class="text-center"><?php if(0!=$data['peternakan_perikanan']){echo $data['peternakan_perikanan'];}?></td>
								<td class="text-center"><?php if(0!=$data['hutan_belukar']){echo $data['hutan_belukar'];}?></td>
								<td class="text-center"><?php if(0!=$data['hutan_lebat_lindung']){echo $data['hutan_lebat_lindung'];}?></td>
								<td><?= strtoupper($data['mutasi']) ?></td>
								<td class="text-center"><?php if(0!=$data['tanah_kosong']){echo $data['tanah_kosong'];}?></td>
								<td class="text-center"><?php if(0!=$data['lain']){echo $data['lain'];}?></td>
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