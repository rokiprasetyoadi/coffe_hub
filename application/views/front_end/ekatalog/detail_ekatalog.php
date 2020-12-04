<!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Detail E-Katalog</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

<?php foreach($detail_ekatalog as $row){?>

<?php } ?>

    <div class="whole-wrap">
		<div class="container box_1170">
			<div class="section-top-border">
				<h2 class="mb-30"><?php echo $row->catalog_nama_kopi; ?></h2>
				<div class="row">
					<div class="col-md-3">

						<a href="<?= base_url('assets/upload/e_catalog/'.$row->catalog_img) ?>" data-fancybox data-caption="<?php echo $row->catalog_nama_kopi; ?>"><img style="margin-top: 20px; margin-bottom: 20px;" src="<?= base_url('assets/upload/e_catalog/'.$row->catalog_img) ?>" alt="" class="img-fluid"></a>

						<div style="text-align: center;">
						<a href="<?php echo $row->catalog_sosmed; ?>"><i class="fa fa-heart"></i>&nbsp;&nbsp;&nbsp;Sosial Media</a><br>
						<a href="<?php echo $row->catalog_website; ?>"><i class="fa fa-globe"></i>&nbsp;&nbsp;&nbsp;Website</a>
						</div>
					</div>
					<div class="col-md-9 mt-sm-20">
						<table class="table table-hover" style="margin-top: 20px; width: 50%;">
						  <tbody>
						    <tr>
						      <th scope="row">Nama Petani</th>
						      <td>:</td>
						      <td><?php echo $row->catalog_nama_petani; ?></td>
						    </tr>
						    <tr>
						      <th scope="row">Alamat</th>
						      <td>:</td>
						      <td><?php echo $row->catalog_alamat; ?></td>
						    </tr>
						    <tr>
						      <th scope="row">No HP</th>
						      <td>:</td>
						      <td><a href="https://wa.me/+62<?php echo $row->catalog_no_hp; ?>"><?php echo $row->catalog_no_hp; ?></a></td>
						    </tr>
						    <tr>
						      <th scope="row">Kelompok Tani</th>
						      <td>:</td>
						      <td><?php echo $row->catalog_kelompok_tani; ?></td>
						    </tr>
						    <tr>
						      <th scope="row">Badan Usaha</th>
						      <td>:</td>
						      <td><?php echo $row->catalog_badan_usaha; ?></td>
						    </tr>
						  </tbody>
						</table>
						<p style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row->catalog_deskripsi; ?></p>


				<div class="section-top-border" style="margin-top: 10px;">
				<h3 class="mb-30">Informasi Kopi</h3>
				<div class="row">
					<img style="height: 100px; margin-right: 20px; margin-top: 50px;" src="<?= base_url('assets/front_end/img/cofee_logo.png') ?>" alt="" class="img-fluid">
					<div class="col-lg-8">
						<blockquote class="generic-blockquote">
							<ul class="unordered-list">
								<li><b>Jenis Kopi : </b> <?php echo $row->catalog_jenis_kopi; ?></li>
								<li><b>Lokasi : </b> <td><?php echo $row->catalog_lokasi; ?></td></li>
								<li><b>Ketinggian : </b> <td><?php echo $row->catalog_ketinggian; ?></td></li>
								<li><b>Sertifikat : </b> <?php echo $row->catalog_sertifikat; ?></li>
								<li><b>Kapasitas Produksi : </b> <?php echo $row->catalog_kap_produksi; ?></li>
							</ul>
						</blockquote>
					</div>
				</div>
			</div>
			<div style="float: right;">
				<b>Last Update : </b>&nbsp;&nbsp; <?php $date = date_create ($row->catalog_last_update); echo date_format ($date, "d F Y | H:i"); ?>&nbsp;WIB
			</div>




					</div>
				</div>

	

			</div>
		</div>
	</div>

	<div class="video_area video_bg overlay" style="margin-bottom: 1px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="video_wrap text-center">
                        <h3><?php echo $row->catalog_nama_kopi; ?> Video</h3>
                        <div class="video_icon">
                            <a class="popup-video video_play_button" href="<?php echo $row->catalog_video; ?>">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>