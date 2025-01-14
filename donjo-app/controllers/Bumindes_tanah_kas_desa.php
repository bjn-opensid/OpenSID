<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
 * File ini:
 *
 * Controller untuk Modul Bumindes Tanah Kas Desa
 *
 * donjo-app/controllers/Bumindes_tanah_kas_desa.php
 *
 */

/*
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

 * Pemberitahuan hak cipta di atas dan pemberitahuan izin ini harus disertakan dalam
 * setiap salinan atau bagian penting Aplikasi Ini. Barang siapa yang menghapus atau menghilangkan
 * pemberitahuan ini melanggar ketentuan lisensi Aplikasi Ini.

 * PERANGKAT LUNAK INI DISEDIAKAN "SEBAGAIMANA ADANYA", TANPA JAMINAN APA PUN, BAIK TERSURAT MAUPUN
 * TERSIRAT. PENULIS ATAU PEMEGANG HAK CIPTA SAMA SEKALI TIDAK BERTANGGUNG JAWAB ATAS KLAIM, KERUSAKAN ATAU
 * KEWAJIBAN APAPUN ATAS PENGGUNAAN ATAU LAINNYA TERKAIT APLIKASI INI.
 *
 * @package OpenSID
 * @author  Tim Pengembang OpenDesa
 * @copyright Hak Cipta 2009 - 2015 Combine Resource Institution (http://lumbungkomunitas.net/)
 * @copyright Hak Cipta 2016 - 2020 Perkumpulan Desa Digital Terbuka (https://opendesa.id)
 * @license http://www.gnu.org/licenses/gpl.html  GPL V3
 * @link  https://github.com/OpenSID/OpenSID
 */

class Bumindes_tanah_kas_desa extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->library('session');
		$this->load->model(['header_model', 'tanah_kas_desa_model', 'pamong_model', 'data_persil_model']);
		$this->controller = 'bumindes_tanah_kas_desa';
		$this->modul_ini = 301;
		$this->sub_modul_ini = 305;
	}

	public function index()
	{
		if ($this->input->is_ajax_request())
		{
			$start = $this->input->post('start');
			$length = $this->input->post('length');
			$search = $this->input->post('search[value]');
			$order = $this->tanah_kas_desa_model::ORDER_ABLE[$this->input->post('order[0][column]')];
			$dir = $this->input->post('order[0][dir]');

			return $this->output
				->set_content_type('application/json')
				->set_output(json_encode([
					'draw'            => $this->input->post('draw'),
					'recordsTotal'    => $this->tanah_kas_desa_model->get_data()->count_all_results(),
					'recordsFiltered' => $this->tanah_kas_desa_model->get_data($search)->count_all_results(),
					'data'            => $this->tanah_kas_desa_model->get_data($search)->order_by($order, $dir)->limit($length, $start)->get()->result(),
				]));
		}

		$sub = "<li class=\"active\">Buku Tanah Kas Desa";
		$data = [
			'selected_nav' => 'tanah_kas',
			'main_content' => "bumindes/pembangunan/tanah_kas_desa/content_tanah_kas_desa",
			'subtitle' => $sub,
		];

		$this->set_minsidebar(1);
		$this->render('bumindes/pembangunan/main', $data);
	}

	public function clear()
	{
		$this->session->filter_tahun = date('Y');
		$this->session->filter_bulan = date('m');

		redirect("bumindes_tanah_kas_desa");
	}

	public function view_tanah_kas_desa($id)
	{
		$sub = "<li class=\"active\"> <a href=" .site_url('bumindes_tanah_kas_desa'). ">Buku Tanah Kas Desa</a>
				<li class=\"active\"></li>Rincian Data</li>";
		$view_data = $this->tanah_kas_desa_model->view_tanah_kas_desa_by_id($id);
		$data = [
			'main' 		   => $view_data,
			'main_content' => "bumindes/pembangunan/tanah_kas_desa/form_tanah_kas_desa",
			'subtitle'	   => $sub,
			'selected_nav' => 'tanah_kas',
			'view_mark'	   => 1,
			'asal_tanah'   => $view_data->nama_pemilik_asal
		];

		$this->set_minsidebar(1);
		$this->render('bumindes/pembangunan/main', $data);
	}

	public function form($id = '')
	{
		if ($id)
		{
			$sub = "<li class=\"active\"> <a href=" .site_url('bumindes_tanah_kas_desa'). ">Buku Tanah Kas Desa</a>
				<li class=\"active\"></li>Ubah Data</li>";
			$view_data = $this->tanah_kas_desa_model->view_tanah_kas_desa_by_id($id);
			$data = [
				'main' 		   => $view_data,
				'main_content' => "bumindes/pembangunan/tanah_kas_desa/form_tanah_kas_desa",
				'letterc'	   => $this->tanah_kas_desa_model->list_letter_c(),
				'persil'	   => $this->data_persil_model->list_persil(),
				'subtitle'	   => $sub,
				'selected_nav' => 'tanah_kas',
				'view_mark'	   => 2,
				'asal_tanah'   => $view_data->nama_pemilik_asal,
				'form_action'  => site_url("bumindes_tanah_kas_desa/update_tanah_kas_desa/$id"),
			];
		}
		else
		{
			$sub = "<li class=\"active\"> <a href=" .site_url('bumindes_tanah_kas_desa'). ">Buku Tanah Kas Desa</a>
				<li class=\"active\"></li>Isi Data</li>";
			$data = [
				'main' 		   => NULL,
				'main_content' => "bumindes/pembangunan/tanah_kas_desa/form_tanah_kas_desa",
				'letterc'	   => $this->tanah_kas_desa_model->list_letter_c(),
				'persil'	   => $this->data_persil_model->list_persil(),
				'subtitle'	   => $sub,
				'selected_nav' => 'tanah_kas',
				'view_mark'	   => 0,
				'form_action'  => site_url("bumindes_tanah_kas_desa/add_tanah_kas_desa"),
			];

		}

		$this->set_minsidebar(1);
		$this->render('bumindes/pembangunan/main', $data);
	}

	public function add_tanah_kas_desa()
	{
		$this->tanah_kas_desa_model->add_tanah_kas_desa();
		if ($this->session->success == -1)
		{
			$this->session->dari_internal = true;
			redirect("bumindes_tanah_kas_desa/form");
		}
		else
		{
			redirect("bumindes_tanah_kas_desa/clear");
		}
	}

	public function update_tanah_kas_desa($id)
	{
		$this->tanah_kas_desa_model->update_tanah_kas_desa();
		if ($this->session->success == -1)
		{
			$this->session->dari_internal = true;
			redirect("bumindes_tanah_kas_desa/form/$id");
		}
		else
		{
			redirect("bumindes_tanah_kas_desa/clear");
		}
	}

	public function delete_tanah_kas_desa($id)
	{
		$this->redirect_hak_akses('h', 'bumindes_tanah_kas_desa');
		$this->tanah_kas_desa_model->delete_tanah_kas_desa($id);
		redirect('bumindes_tanah_kas_desa');
	}

	public function cetak_tanah_kas_desa($tgl= '', $aksi = '')
	{
		$data = [
			'aksi' => $aksi,
			'config' => $this->header['desa'],
			'pamong_ketahui' => $this->pamong_model->get_ttd(),
			'pamong_ttd' => $this->pamong_model->get_ub(),
			'main' => $this->tanah_kas_desa_model->cetak_tanah_kas_desa(),
			'bulan' => $this->session->filter_bulan,
			'tahun' => $this->session->filter_tahun,
			'tgl_cetak' => $tgl,
			'file' => "Buku Tanah Kas Desa",
			'isi' => "bumindes/pembangunan/tanah_kas_desa/tanah_kas_desa_cetak",
			'letak_ttd' => ['1', '1', '20'],
		];
		$this->load->view('global/format_cetak', $data);
	}
}
