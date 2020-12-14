<!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_3">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Detail Agenda</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

<?php foreach($detail_agenda as $row){?>

	<?php 
	$agenda_jam = (explode(':', $row->agenda_jam));
	?>

<?php } ?>

    <div class="whole-wrap">
		<div class="container box_1170">
			<div class="section-top-border">
				<h2 class="mb-30"><?php echo $row->agenda_nama; ?></h2>
				<div class="row">
					<div class="col-md-3">
						<a href="<?= base_url('assets/upload/agenda/'.$row->agenda_img) ?>" data-fancybox data-caption="<?php echo $row->agenda_nama; ?>"><img style="margin-top: 20px; margin-bottom: 20px;" src="<?= base_url('assets/upload/agenda/'.$row->agenda_img) ?>" alt="" class="img-fluid"></a>
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
						      <td><?php $date = date_create ($row->agenda_tanggal); echo date_format ($date, "d F Y"); ?></td>
						    </tr>
						    <tr>
						      <th scope="row">Jam</th>
						      <td>:</td>
						      <td><?php echo $row->agenda_jam[0] ?><?php echo $row->agenda_jam[1] ?>:<?php echo $row->agenda_jam[3] ?><?php echo $row->agenda_jam[4] ?>&nbsp;WIB</td>
						    </tr>
						  </tbody>
						</table>
						<?php echo htmlspecialchars_decode(htmlspecialchars_decode($row->agenda_keterangan))
						?>

					</div>
				</div>
			</div>
		</div>
	</div>