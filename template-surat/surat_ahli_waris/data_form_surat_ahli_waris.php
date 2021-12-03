<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

	if (!$this->input->post('pewaris')) unset($_SESSION['id_pewaris']);
	if ($_POST['id_pewaris'] != '' AND $_POST['id_pewaris'] !='*')
	{
		$data['pewaris']=$this->surat_model->get_penduduk($_POST['id_pewaris']);
		$_SESSION['id_pewaris'] = $_POST['id_pewaris'];
	}
	elseif ($_POST['id_pewaris'] !='*' AND isset($_SESSION['id_pewaris']))
	{
		$data['pewaris']=$this->surat_model->get_penduduk($_SESSION['id_pewaris']);
	}
	else
	{
		unset($data['pewaris']);
		unset($_SESSION['id_pewaris']);
	}
?>