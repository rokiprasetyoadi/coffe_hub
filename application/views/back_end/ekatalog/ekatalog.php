<!-- Content Start -->
<div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Data E-Katalog
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                        <div class="adv-table editable-table ">
                            <div class="clearfix">
                                <div class="btn-group">
                                    <a class="btn btn-primary" href="<?= site_url() ?>back_end/ekatalog/add">
                                        Add New &nbsp;<i class="fa fa-plus"></i>
                                    </a>
                                </div>
                                <?= $this->session->flashdata('pesan'); ?>
                                <div class="btn-group pull-right">
                                    <a class="btn btn-info" href="<?= site_url() ?>back_end/ekatalog/print">
                                        Print &nbsp;<i class="fa fa-print"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="space15"></div>
                            <table class="table table-striped table-hover table-bordered" id="editable-sample">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kopi</th>
                                    <th>Foto</th>
                                    <th>Nama Petani</th>
                                    <th>Alamat</th>
                                    <th>No HP</th>
                                    <th>Detail</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $i=1;
                                    foreach ($ekatalog as $data):?>
                                <tr class="">
                                    <td><?= $i++ ?></td>
                                    <td><?php echo $data->catalog_nama_kopi; ?></td>
                                    <td align="center"><a href="<?= base_url('assets/upload/e_catalog/'.$data->catalog_img) ?>" data-fancybox data-caption="Katalog"> <img style="height: 50px; width: 50px;" src="<?= base_url('assets/upload/e_catalog/'.$data->catalog_img) ?>"></a>&nbsp;&nbsp;&nbsp;
                                        <a class="edit_img" href="<?= site_url(); ?>back_end/ekatalog/edit_img/<?= $data->catalog_id ?>"><i class="fa fa-edit">Ganti</i></a>
                                    </td>
                                    <td><?php echo $data->catalog_nama_petani; ?></td>
                                    <td><?php echo $data->catalog_alamat; ?></td>
                                    <td><?php echo $data->catalog_no_hp; ?></td>
                                    <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalDetail<?= $data->catalog_id; ?>">Detail</button></td>
                                    <td style="text-align: center;"><a class="edit" href="<?= site_url(); ?>back_end/ekatalog/edit/<?= $data->catalog_id ?>"><i class="fa fa-edit"></i></a></td>
                                    <td style="text-align: center;"><a class="delete" onclick="deleteConfirm('<?= site_url(); ?>back_end/ekatalog/delete/<?= $data->catalog_id ?>')" href="#!"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                                <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>

<!-- Content End -->
<!-- Modal -->
<?php foreach($ekatalogModal as $i):?>
<div class="modal fade" id="modalDetail<?= $i['catalog_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"><b><?= $i['catalog_nama_kopi'] ?></b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered">
            <tr>
                <td>Kelompok Tani</td>
                <td><?= $i['catalog_kelompok_tani'] ?></td>
            </tr>
            <tr>
                <td>Website</td>
                <td><?= $i['catalog_website'] ?></td>
            </tr>
            <tr>
                <td>Sosial Media</td>
                <td><?= $i['catalog_sosmed'] ?></td>
            </tr>
            <tr>
                <td>Badan Usaha</td>
                <td><?= $i['catalog_badan_usaha'] ?></td>
            </tr>
            <tr>
                <td>Lokasi</td>
                <td><?= $i['catalog_lokasi'] ?></td>
            </tr>
            <tr>
                <td>Ketinggian</td>
                <td><?= $i['catalog_ketinggian'] ?></td>
            </tr>
            <tr>
                <td>Jenis Kopi</td>
                <td><?= $i['catalog_jenis_kopi'] ?></td>
            </tr>
            <tr>
                <td>Kapasitas Produksi</td>
                <td><?= $i['catalog_kap_produksi'] ?></td>
            </tr>
            <tr>
                <td>Sertifikat</td>
                <td><?= $i['catalog_sertifikat'] ?></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><?= $i['catalog_deskripsi'] ?></td>
            </tr>
        </table>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>