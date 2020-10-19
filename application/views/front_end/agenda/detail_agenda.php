<?php foreach($detail_agenda as $row){?>

<?php } ?>

    <div class="whole-wrap">
		<div class="container box_1170">
			<div class="section-top-border">
				<h2 class="mb-30"><?php echo $row->agenda_nama; ?></h2>
				<div class="row">
					<div class="col-md-3">
						<img style="margin-top: 20px;" src="<?= base_url('assets/upload/agenda/'.$row->agenda_img) ?>" alt="" class="img-fluid">
					</div>
					<div class="col-md-9 mt-sm-20">
						<table class="table table-hover" style="margin-top: 20px; width: 50%;">
						  <tbody>
						    <tr>
						      <th scope="row">Tempat</th>
						      <td>:</td>
						      <td><?php echo $row->agenda_tempat; ?></td>
						    </tr>
						    <tr>
						      <th scope="row">Tanggal</th>
						      <td>:</td>
						      <td><?php echo $row->agenda_tanggal; ?></td>
						    </tr>
						    <tr>
						      <th scope="row">Jam</th>
						      <td>:</td>
						      <td><?php echo $row->agenda_jam; ?></td>
						    </tr>
						  </tbody>
						</table>
						<p><?php echo $row->agenda_keterangan; ?></p>

					</div>
				</div>
			</div>
		</div>
	</div>