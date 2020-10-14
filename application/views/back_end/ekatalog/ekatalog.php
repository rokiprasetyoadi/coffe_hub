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
                                    <th>Nama Petani</th>
                                    <th>Alamat</th>
                                    <th>Kelompok Tani</th>
                                    <th>No HP</th>
                                    <th>Nama Kopi</th>
                                    <th>Badan Usaha</th>
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
                                    <td><?php echo $data->catalog_nama_petani; ?></td>
                                    <td><?php echo $data->catalog_alamat; ?></td>
                                    <td><?php echo $data->catalog_kelompok_tani; ?></td>
                                    <td><?php echo $data->catalog_no_hp; ?></td>
                                    <td><?php echo $data->catalog_nama_kopi; ?></td>
                                    <td><?php echo $data->catalog_badan_usaha; ?></td>
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