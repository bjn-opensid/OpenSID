<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');
	if ($individu)
	{
		$ahliwaris = $this->get_data_surat($input['nik']);
		$array_replace = array(
	    "[nama]"      		=> $ahliwaris['nama'],
	    "[no_ktp]"      		=> $ahliwaris['nik'],
	    "[ttl]"  				=> $ahliwaris['tempatlahir']." / ".tgl_indo_dari_str($ahliwaris['tanggallahir']),
	    "[usia]"  		 		=> $ahliwaris['umur'],
	    "[warga_negara]"  	=> $ahliwaris['warganegara'],
	    "[agama]"  			=> $ahliwaris['agama'],
	    "[sex]"	  				=> $ahliwaris['sex'],
	    "[pekerjaan]"  		=> $ahliwaris['pekerjaan'],
	    "[alamat]"  			=> trim($ahliwaris['alamat'].' RT '.$ahliwaris['rt'].' RW '.$ahliwaris['rw'].' Dusun '.$ahliwaris['dusun']),
	    "[nama_des]"       	=> $config['nama_desa'],
	    "[nama_kec]"        => $config['nama_kecamatan'],
	    "[nama_kab]"        => $config['nama_kabupaten']
		);
		$buffer = str_replace(array_keys($array_replace), array_values($array_replace), $buffer);
	}
	if ($input['id_pewaris'])
	{
		$pewaris = $this->get_data_surat($input['id_pewaris']);
		$array_replace = array(
	    "[nama_pewaris]"      		=> $pewaris['nama'],
	    "[nik_pewaris]"       		=> $pewaris['nik'],
	    "[ttl_pewaris]"  			=> $pewaris['tempatlahir']." / ".tgl_indo_dari_str($pewaris['tanggallahir']),
	    "[usia_pewaris]"  		 	=> $pewaris['umur'],
	    "[warga_negara_pewaris]"  => $pewaris['warganegara'],
	    "[agama_pewaris]"  			=> $pewaris['agama'],
	    "[jk_pewaris]"	  			=> $pewaris['sex'],
	    "[pekerjaan_pewaris]"  	=> $pewaris['pekerjaan'],
	    "[alamat_pewaris]"  		=> trim($pewaris['alamat'].' RT '.$pewaris['rt'].' RW '.$pewaris['rw'].' Dusun '.$pewaris['dusun']),
	    "[desapewaris]"       		=> $config['nama_desa'],
	    "[kecpewaris]"        		=> $config['nama_kecamatan'],
	    "[kabpewaris]"        		=> $config['nama_kabupaten']
		);
		$buffer = str_replace(array_keys($array_replace), array_values($array_replace), $buffer);
	}
	?>