<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<style>
	.img-banner-link{
		width: 35%;
		height: auto;
		margin-bottom: 5px;
	}
	iframe{
		max-width: 100%;
	}
</style>
<div class="content_bottom_right">
	<div id="jam" style="margin:5px 0 5px 0; background:#37b91d;border:3px double #ffffff;padding:3px;width:auto;" align="center;"></div>
	<div class="single_bottom_rightbar">
		<h2><i class="fa fa-home"></i> Info Umum</h2>
		<div class="box-body text-center">
			<a href="http://sibantu.bojonegorokab.go.id" target="_blank">
				<img src="<?= base_url('assets/images/bantuansosial.jpg'); ?>" alt="Sim-Bantu" class="img-banner-link" title="Cek Bantuan Sosial">
			</a>
			<a href="http://pbb.bapendabojonegoro.id" target="_blank">
				<img src="<?= base_url('assets/images/pbb.jpg'); ?>" alt="Pembayaran PBB" class="img-banner-link" title="Pembayaran PBB">
			</a>
			<a href="http://lawancorona.bojonegorokab.go.id" target="_blank">
				<img src="<?= base_url('assets/images/corona.jpg'); ?>" alt="Lawan Corona" class="img-banner-link" title="Lawan Corona">
			</a>
			<a href="https://siapdesa.bojonegorokab.go.id/" target="_blank">
				<img src="<?= base_url('assets/images/siapdesa.jpg'); ?>" alt="SIAP Desa" class="img-banner-link" title="SIAP Desa">
			</a>
		</div>
	</div>
	<!-- Tampilkan Widget -->
	<?php
	if ($w_cos) :
		foreach ($w_cos as $data) :
			$widget = trim($data['isi']);
			if ($data["jenis_widget"] == 1) :
				include("$this->theme_folder/$this->theme/widgets/" . $widget);
			elseif ($data["jenis_widget"] == 2) :
				include($widget);
			else : ?>
				<div class="single_bottom_rightbar">
					<h2><i class="fa fa-folder"></i> <?= $data["judul"] ?></h2>
					<div class="box-body">
						<?= html_entity_decode($data['isi']) ?>
					</div>
				</div>
	<?php endif;
		endforeach;
	endif;
	?>