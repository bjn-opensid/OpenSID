										<div class="tab-pane <?php if ($act_tab==7): ?>active<?php endif ?>">
											<div class="row">
												<div class="col-md-12">
													<div class="box-header with-border">
														<h3 class="box-title"><strong>Sinkron Database Ke Kecamatan
                                                        <?php if($kecamatan) : ?>
                                                            <?= $kecamatan['kecamatan'] ?>
                                                         <?php else : ?>
                                                            <b class="text-red">
                                                                Tidak Ditemukan
                                                            </b>
                                                        <?php endif; ?>
                                                         </strong></h3>
													</div>
													<div class="box-body">
														<div class="row">
															<div class="col-sm-12">
                                                                    <p>Proses ini untuk mengirim data <b>Penduduk</b> SID ke database OpenDK Kecamatan
                                                                    <?php if($kecamatan) : ?>
                                                                     <?= $kecamatan['kecamatan'] ?>.
                                                                    (<a href="<?= $kecamatan['url']; ?>"><?= $kecamatan['url']; ?></a>)
                                                                    <?php else : ?>
                                                                        <b class="text-red">
                                                                            Tidak Ditemukan
                                                                        </b>
                                                                        <p class="text-red">
                                                                            Periksa Kembali Kode Kecamatan Anda
                                                                        </p>
                                                                    <?php endif; ?>
                                                                    </p>
                                                                    <p class="text-muted text-red well well-sm no-shadow" style="margin-top: 10px;">
                                                                        <small>
                                                                            <strong>
                                                                            <i class="fa fa-info-circle text-red"></i> Sebelum melakukan sinkron ini pastikan :<br>
                                                                            &nbsp; <i class="fa fa-check text-red"></i> Kode desa sudah benar 10 digit, cth: (3522072001). <br>
                                                                            &nbsp; <i class="fa fa-check text-red"></i> Kode kecamatan sudah benar 6 digit, cth: (352207). <br>
                                                                            &nbsp; <i class="fa fa-check text-red"></i> Data yang akan di sinkron sudah sesuai. <br>
                                                                            <i class="fa fa-info-circle text-red"></i> Apabila sudah melakukan sinkron dan ada perubahan data, proses sinkron selanjutnya akan otomatis menimpa data sebelumnya.
                                                                            </strong>
                                                                        </small>
                                                                    </p>
                                                                    <?php if ($_SESSION['username'] == 'administrator'): ?>
                                                                        <p>Apabila sesudah melakukan sinkron ini, masih ditemukan masalah, laporkan di :</P>
                                                                        <ul>
                                                                            <li> <a href="https://github.com/OpenSID/OpenSID/issues">https://github.com/OpenSID/OpenSID/issues</a></li>
                                                                            <li> <a href="https://www.facebook.com/groups/OpenSID/">https://www.facebook.com/groups/OpenSID/</a></li>
                                                                        </ul>
                                                                    <?php endif ?>
                                                                    <?php if($kecamatan) : ?>
                                                                <form action="<?= $form_action?>" method="post" enctype="multipart/form-data" id="excell" class="form-horizontal">
                                                                    <table class="table table-bordered" >
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="padding-top:20px;padding-bottom:10px;">
                                                                                    <div class="form-group">
                                                                                        <div class="col-sm-8 col-lg-4">
                                                                                            <a href="#" class="btn btn-block btn-primary btn-sm ajax"  title="sinkron Penduduk" onclick="document.getElementById('excell').submit();" data-toggle="modal" data-target="#loading"> <i class="fa fa-spin fa-refresh"></i> sinkron Data Penduduk</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="ajax-content"></div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </form>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <form action="<?= $form_action_bantuan?>" method="post" enctype="multipart/form-data" id="bantuan" class="form-horizontal">
                                                                    <p>Proses ini untuk mengirim data <b>Bantuan</b> SID ke database OpenDK Kecamatan <?= $desa['nama_kecamatan'] ?>.</p>
                                                                    
                                                                    <?php if ($_SESSION['username'] == 'administrator'): ?>
                                                                        <p>Apabila sesudah melakukan sinkron ini, masih ditemukan masalah, laporkan di :</P>
                                                                        <ul>
                                                                            <li> <a href="https://github.com/OpenSID/OpenSID/issues">https://github.com/OpenSID/OpenSID/issues</a></li>
                                                                            <li> <a href="https://www.facebook.com/groups/OpenSID/">https://www.facebook.com/groups/OpenSID/</a></li>
                                                                        </ul>
                                                                    <?php endif ?>
                                                                    <table class="table table-bordered" >
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="padding-top:20px;padding-bottom:10px;">
                                                                                    <div class="form-group">
                                                                                        <div class="col-sm-8 col-lg-4">
                                                                                            <a href="#" class="btn btn-block btn-success btn-sm ajax"  title="sinkron Bantuan" onclick="document.getElementById('bantuan').submit();" data-toggle="modal" data-target="#loading"> <i class="fa fa-spin fa-refresh"></i> sinkron Data Bantuan</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="ajax-content"></div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </form>
                                                                <?php endif; ?>
															</div>
														</div>
													</div>
													<div class='modal fade' id='loading' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
														<div class='modal-dialog'>
															<div class='modal-content'>
																<div class='modal-header btn-warning'>
																	<h4 class='modal-title' id='myModalLabel'>Proses Sinkron ......</h4>
																</div>
																<div class='modal-body'>
																	Harap tunggu sampai proses sinkron selesai. Proses ini biasa memakan waktu beberapa menit.
																	<div class='text-center'>
																		<img src='<?= base_url()?>assets/images/background/loading.gif'>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<?php unset($_SESSION['sukses']);?>
												<?php unset($_SESSION['baris']);?>
												<?php unset($_SESSION['gagal']);?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
