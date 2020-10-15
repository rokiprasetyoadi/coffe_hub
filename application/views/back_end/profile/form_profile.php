<!-- Content Start -->
        <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Edit Profile
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-cog" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form class="cmxform form-horizontal " method="POST" enctype="multipart/form-data" action="<?php echo site_url('back_end/profile/edit/'.$row->admin_id); ?>">
                                    <div class="form-group" hidden>
                                        <label for="admin_id" class="control-label col-lg-3">Id Admin</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="admin_id" name="admin_id" type="text" value="<?= $row->admin_id; ?>" readonly />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="admin_nama" class="control-label col-lg-3">Nama Admin</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="admin_nama" name="admin_nama" type="text" value="<?= $row->admin_nama; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="admin_alamat" class="control-label col-lg-3">Alamat</label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control " id="admin_alamat" name="admin_alamat" type="text"><?= $row->admin_alamat; ?></textarea>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="admin_email" class="control-label col-lg-3">E-mail</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="admin_email" name="admin_email" type="email" value="<?= $row->admin_email; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="admin_telp" class="control-label col-lg-3">Telpon</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="admin_telp" name="admin_telp" type="number" value="<?= $row->admin_telp; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="admin_username" class="control-label col-lg-3">Username</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="admin_username" name="admin_username" type="text" value="<?= $row->admin_username; ?>" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-primary" name="edit" type="submit">Save</button>
                                            <a href="<?= site_url() ?>back_end/profile" class="btn btn-default" type="cancel">Cancel</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        <!-- Content End -->