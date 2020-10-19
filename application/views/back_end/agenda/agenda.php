<!-- Content Start -->
<div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Data Agenda
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
                                    <a class="btn btn-primary" href="<?= site_url() ?>back_end/agenda/add">
                                        Add New &nbsp;<i class="fa fa-plus"></i>
                                    </a>
                                </div>
                                <?= $this->session->flashdata('pesan'); ?>
                                <div class="btn-group pull-right">
                                    <a class="btn btn-info" href="<?= site_url() ?>back_end/agenda/print">
                                        Print &nbsp;<i class="fa fa-print"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="space15"></div>
                            <table class="table table-striped table-hover table-bordered" id="editable-sample">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Agenda</th>
                                    <th>Foto</th>
                                    <th>Tempat</th>
                                    <th>Tanggal | Jam</th>
                                    <th>Keterangan</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $i=1;
                                    foreach ($agenda as $data):?>
                                <tr class="">
                                    <td><?= $i++ ?></td>
                                    <td><?php echo $data->agenda_nama; ?></td>
                                    <td align="center"><a href="<?= base_url('assets/upload/agenda/'.$data->agenda_img) ?>" data-fancybox data-caption="Agenda"> <img style="height: 50px; width: 50px;" src="<?= base_url('assets/upload/agenda/'.$data->agenda_img) ?>"></a>&nbsp;&nbsp;&nbsp;
                                        <a class="edit_img" href="<?= site_url(); ?>back_end/agenda/edit_img/<?= $data->agenda_id ?>"><i class="fa fa-edit">Ganti</i></a>
                                    </td>
                                    <td><?php echo $data->agenda_tempat; ?></td>
                                    <td><?php echo $data->agenda_tanggal; ?>&nbsp;|&nbsp;<?php echo $data->agenda_jam; ?></td>
                                    <td style="width: 250px;"><?php echo substr($data->agenda_keterangan,0,100); ?>&nbsp;...</td>
                                    <td style="text-align: center;"><a class="edit" href="<?= site_url(); ?>back_end/agenda/edit/<?= $data->agenda_id ?>"><i class="fa fa-edit"></i></a></td>
                                    <td style="text-align: center;"><a class="delete" onclick="deleteConfirm('<?= site_url(); ?>back_end/agenda/delete/<?= $data->agenda_id ?>')" href="#!"><i class="fa fa-trash-o"></i></a></td>
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