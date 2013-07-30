				<div class="span9">
					<div class="row-fluid">
						<div class="span12">
							<div class="kepalasidebar">
								Halaman
							</div>
							<div class="kontensisi">
								<div class="row-fluid">
									<div class="span12">
											<div class="kontensidebar">
											<div class="row-fluid kuning span12">
												<div class="row-fluid">
													<div class="form-inline">
														<a href="">Semua </a><label>&nbsp;&nbsp;|</label>
														<a href="">Tampil</a><label>&nbsp;&nbsp;|</label>
														<a href="">Draf </a>
													</div>
												</div>
												
												<div class="row-fluid">
													<div class="form-inline span7">
														<select class="span2">
															<option>Aksi</option>
															<option>Ubah</option>
															<option>Hapus</option>
														</select >
														<button class="btn btn-primary">Ok</button>
														&nbsp;
														&nbsp;
														<select class="span3">
															<option>Tanggal</option>
															<option>Feb</option>
															<option>Mar</option>
														</select>
														<select class="span3">
															<option>Kategori</option>
															<option>Par</option>
															<option>Eko</option>
														</select>
														<button class="btn btn-primary">Filter</button>
													</div>
													
													<div class="form-inline span5 pull-right">
														<form class="form-inline" action="<?php echo base_url(); ?>index.php/berita/cari" method="post">
															<input type="text" class="span10" placeholder="Cari" name="cari">
															<button type="submit" class="btn btn-primary">Cari</button>
														</form>
													</div>
												</div>
											</div>
												    <div>
														<a class="btn btn-primary" href=" <?php echo base_url(); ?>index.php/halaman/input " >Buat Halaman</a>
													</div><br>
														<div>
															<?php if($halaman != null) { ?>
																<table class="table table-hover table-bordered table-striped">
																	<thead>
																		<tr>
																			<th>
																				 <label class="checkbox">
																				<input type="checkbox">
																				</label>
																			</th>
																			<th>Judul</th>
																			<th>URL</th>
																			<th>Isi</th>
																			<th>Action</th>
																		</tr>
																	</thead>
																	<tbody>
																		<?php foreach($halaman as $data): ?>
																			<tr>
																				<td> 
																				<label class="checkbox">
																				<input type="checkbox">
																				</label>
																				</td>
																				<td><?php echo $data->hlm_judul; ?></td>
																				<td><?php echo $data->hlm_link_nama; ?></td>
																				<td><?php $isi = $data->hlm_isi; 
																						$isi = word_limiter($isi,5);
																						echo $isi;
																					?></td>
																				<td>
																				&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url(); ?>index.php/halaman/edit/<?php echo $data->hlm_id; ?>" role="button" data-toggle="modal"><i class="icon-pencil"></i></a>
																				<a href="#myModal<?php echo $data->hlm_id; ?>" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
																				</td>
																			</tr>
																			
																		<?php endforeach; ?>
																	</tbody>
																</table>
																<?php } else {
																	echo '<div class="alert alert-error">
																				Belum ada data halaman
																			</div>';
																} ?>
															<?php if($halaman != null) { ?>	
															<div>
																<?php pagination($page, $item_per_page, $total_item, $base_url)?>
															</div>
															<?php foreach($halaman as $data): ?>
																<div class="modal small hide fade" id="myModal<?php echo $data->hlm_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
																	<div class="modal-header">
																		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
																		<h3 id="myModalLabel">Konfirmasi Hapus</h3>
																	</div>
																	<div class="modal-body">
																		<p class="error-text">Apakah yakin dihapus?</p>
																	</div>
																	<div class="modal-footer">
																		<button class="btn" data-dismiss="modal" aria-hidden="true">Batal</button>
																		<a class="btn btn-primary"href="<?php echo base_url(); ?>index.php/halaman/hapus/<?php echo $data->hlm_id; ?>">Hapus</a>
																	</div>
																</div>
															<?php endforeach; ?>
														<?php } else {
																	echo '<div class="alert alert-error">
																				Belum ada data halaman
																			</div>';
																} ?>
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
	<br>
	