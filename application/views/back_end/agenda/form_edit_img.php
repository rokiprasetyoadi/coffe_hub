<!-- Content Start -->
        <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Edit Foto Agenda
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-cog" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form class="cmxform form-horizontal " method="POST" enctype="multipart/form-data" action="<?php echo site_url('back_end/agenda/edit_img/'.$row->agenda_id); ?>">
                                    <div class="form-group ">
                                        <label for="agenda_id" class="control-label col-lg-3">Id Agenda</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="agenda_id" name="agenda_id" type="text" value="<?= $row->agenda_id; ?>" readonly />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="agenda_nama" class="control-label col-lg-3">Nama Agenda</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="agenda_nama" name="agenda_nama" type="text" value="<?= $row->agenda_nama; ?>" readonly />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="agenda_img" class="control-label col-lg-3">Foto</label>
                                        <div class="col-lg-1">
                                            <a href="<?= base_url('assets/upload/agenda/'.$row->agenda_img) ?>" data-fancybox data-caption="Foto Agenda"> <img style="height: 75px; width: 75px;" src="<?= base_url('assets/upload/agenda/'.$row->agenda_img) ?>"></a>
                                        </div>
                                        <div class="col-lg-5">
                                            <input class="form-control " id="agenda_img" name="agenda_img" type="file" value="<?= $row->agenda_img; ?>" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-primary" name="edit1" type="submit">Save</button>
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