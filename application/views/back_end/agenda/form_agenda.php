<?php
    if($page == 'add')
    { ?>
        <!-- Content Start -->
        <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Tambah Agenda
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-cog" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form class="cmxform form-horizontal " method="POST" enctype="multipart/form-data" action="<?= site_url() ?>back_end/agenda/add">
                                    <div class="form-group ">
                                        <label for="agenda_id" class="control-label col-lg-3">Id Agenda</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="agenda_id" name="agenda_id" type="text" value="<?= $kode; ?>" readonly />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="agenda_nama" class="control-label col-lg-3">Nama Agenda</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="agenda_nama" name="agenda_nama" type="text" required/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="agenda_img" class="control-label col-lg-3">Foto</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="agenda_img" name="agenda_img" type="file" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="agenda_keterangan" class="control-label col-lg-3">Keterangan</label>
                                        <div class="col-lg-6">
                                            <textarea class="ckeditor" style="width: 400px; height: 100px;" name="agenda_keterangan" id="agenda_keterangan"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="agenda_tempat" class="control-label col-lg-3">Tempat</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="agenda_tempat" name="agenda_tempat" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="agenda_tanggal" class="control-label col-lg-3">Tanggal Dilaksanakan</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="agenda_tanggal" name="agenda_tanggal" type="date" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="agenda_jam" class="control-label col-lg-3">Jam</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="agenda_jam" name="agenda_jam" type="time" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-primary" type="submit">Save</button>
                                            <a href="<?= site_url() ?>back_end/agenda" class="btn btn-default" type="cancel">Cancel</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        <!-- Content End -->

    <?php }
                else
                {
                ?>
                <!-- Content Start -->
        <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Edit Agenda
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-cog" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form class="cmxform form-horizontal " method="POST" enctype="multipart/form-data" action="<?php echo site_url('back_end/agenda/edit/'.$row->agenda_id); ?>">
                                    <div class="form-group ">
                                        <label for="agenda_id" class="control-label col-lg-3">Id Agenda</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="agenda_id" name="agenda_id" type="text" value="<?= $row->agenda_id; ?>" readonly />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="agenda_nama" class="control-label col-lg-3">Nama Agenda</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="agenda_nama" name="agenda_nama" type="text" value="<?= $row->agenda_nama; ?>" required/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="agenda_keterangan" class="control-label col-lg-3">Keterangan</label>
                                        <div class="col-lg-6">
                                            <textarea class="ckeditor" style="width: 400px; height: 100px;" name="agenda_keterangan" id="agenda_keterangan"><?= $row->agenda_keterangan; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="agenda_tempat" class="control-label col-lg-3">Tempat</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="agenda_tempat" name="agenda_tempat" type="text" value="<?= $row->agenda_tempat; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="agenda_tanggal" class="control-label col-lg-3">Tanggal Dilaksanakan</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="agenda_tanggal" name="agenda_tanggal" type="date" value="<?= $row->agenda_tanggal; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="agenda_jam" class="control-label col-lg-3">Jam</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="agenda_jam" name="agenda_jam" type="time" value="<?= $row->agenda_jam; ?>" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-primary" name="edit" type="submit">Save</button>
                                            <a href="<?= site_url() ?>back_end/agenda" class="btn btn-default" type="cancel">Cancel</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        <!-- Content End -->
                <?php } ?>