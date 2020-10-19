<!-- Content Start -->
        <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Edit Foto Katalog
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-cog" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form class="cmxform form-horizontal " method="POST" enctype="multipart/form-data" action="<?php echo site_url('back_end/ekatalog/edit_img/'.$row->catalog_id); ?>">
                                    <div class="form-group ">
                                        <label for="catalog_id" class="control-label col-lg-3">Id Katalog</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="catalog_id" name="catalog_id" type="text" value="<?= $row->catalog_id; ?>" readonly />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="catalog_nama_kopi" class="control-label col-lg-3">Nama Kopi</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="catalog_nama_kopi" name="catalog_nama_kopi" type="text" value="<?= $row->catalog_nama_kopi; ?>" readonly/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="catalog_img" class="control-label col-lg-3">Foto</label>
                                        <div class="col-lg-1">
                                            <a href="<?= base_url('assets/upload/e_catalog/'.$row->catalog_img) ?>" data-fancybox data-caption="Foto Katalog"> <img style="height: 75px; width: 75px;" src="<?= base_url('assets/upload/e_catalog/'.$row->catalog_img) ?>"></a>
                                        </div>
                                        <div class="col-lg-5">
                                            <input class="form-control " id="catalog_img" name="catalog_img" type="file" value="<?= $row->catalog_img; ?>" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-primary" name="edit1" type="submit">Save</button>
                                            <a href="<?= site_url() ?>back_end/ekatalog" class="btn btn-default" type="cancel">Cancel</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        <!-- Content End -->