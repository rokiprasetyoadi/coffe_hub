<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Agenda</h3>
							<p class="panel-subtitle">Data Kegiatan Coffee - HUB</p>
						</div>
						<div class="panel-body">
							<div class="row">
								
								<div class="panel-body">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>No</th>
												<th>Nama Agenda</th>
												<th>Foto</th>
												<th>Keterangan</th>
												<th>Tanggal</th>
											</tr>
										</thead>
										<tbody>
											<?php 
											$i=1;
											foreach ($agenda as $data):?>
											<tr>
												<td><?= $i++ ?></td>
												<td><?php echo $data->agenda_nama; ?></td>
												<td><?php echo $data->agenda_img; ?></td>
												<td><?php echo $data->agenda_keterangan; ?></td>
												<td><?php echo $data->agenda_tanggal; ?></td>
											</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>

							</div>
						</div>
					</div>
<!-- END OVERVIEW -->