<?php foreach($detail_ekatalog as $row){?>

<?php } ?>

    <div class="whole-wrap">
		<div class="container box_1170">
			<div class="section-top-border">
				<h2 class="mb-30"><?php echo $row->catalog_nama_kopi; ?></h2>
				<div class="row">
					<div class="col-md-3">
						<img src="<?= base_url('assets/upload/e_catalog/'.$row->catalog_img) ?>" alt="" class="img-fluid">
					</div>
					<div class="col-md-9 mt-sm-20">
						<p><?php echo $row->catalog_deskripsi; ?></p>

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
						      <th scope="row">Kelompok Tani</th>
						      <td>:</td>
						      <td><?php echo $row->catalog_kelompok_tani; ?></td>
						    </tr>
						    <tr>
						      <th scope="row">No HP</th>
						      <td>:</td>
						      <td><?php echo $row->catalog_no_hp; ?></td>
						    </tr>
						    <tr>
						      <th scope="row">Website</th>
						      <td>:</td>
						      <td><?php echo $row->catalog_website; ?></td>
						    </tr>
						    <tr>
						      <th scope="row">Sosial Media</th>
						      <td>:</td>
						      <td><?php echo $row->catalog_sosmed; ?></td>
						    </tr>
						    <tr>
						      <th scope="row">Badan Usaha</th>
						      <td>:</td>
						      <td><?php echo $row->catalog_badan_usaha; ?></td>
						    </tr>
						    <tr>
						      <th scope="row">Lokasi</th>
						      <td>:</td>
						      <td><?php echo $row->catalog_lokasi; ?></td>
						    </tr>
						    <tr>
						      <th scope="row">Ketinggian</th>
						      <td>:</td>
						      <td><?php echo $row->catalog_ketinggian; ?></td>
						    </tr>
						    <tr>
						      <th scope="row">Jenis Kopi</th>
						      <td>:</td>
						      <td><?php echo $row->catalog_jenis_kopi; ?></td>
						    </tr>
						    <tr>
						      <th scope="row">Kapasitas Produksi</th>
						      <td>:</td>
						      <td><?php echo $row->catalog_kap_produksi; ?></td>
						    </tr>
						    <tr>
						      <th scope="row">Sertifikat</th>
						      <td>:</td>
						      <td><?php echo $row->catalog_sertifikat; ?></td>
						    </tr>
						  </tbody>
						</table>

					</div>
				</div>
			</div>
		</div>
	</div>