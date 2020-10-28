<?php
    if($page == 'add')
    { ?>
        <!-- Content Start -->
        <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Tambah E-Katalog
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-cog" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form class="cmxform form-horizontal " method="POST" enctype="multipart/form-data" action="<?= site_url() ?>back_end/ekatalog/add">
                                    <div class="form-group ">
                                        <label for="catalog_id" class="control-label col-lg-3">Id Katalog</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="catalog_id" name="catalog_id" type="text" value="<?= $kode; ?>" readonly />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="catalog_nama_petani" class="control-label col-lg-3">Nama Petani</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="catalog_nama_petani" name="catalog_nama_petani" type="text" required/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="catalog_alamat" class="control-label col-lg-3">Alamat</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="catalog_alamat" name="catalog_alamat" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="catalog_kelompok_tani" class="control-label col-lg-3">Kelompok Tani</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="catalog_kelompok_tani" name="catalog_kelompok_tani" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="catalog_no_hp" class="control-label col-lg-3">No HP</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="catalog_no_hp" name="catalog_no_hp" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="catalog_website" class="control-label col-lg-3">Website</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="catalog_website" name="catalog_website" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="catalog_sosmed" class="control-label col-lg-3">Sosial Media</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="catalog_sosmed" name="catalog_sosmed" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="catalog_nama_kopi" class="control-label col-lg-3">Nama Kopi</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="catalog_nama_kopi" name="catalog_nama_kopi" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="catalog_badan_usaha" class="control-label col-lg-3">Badan Usaha</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="catalog_badan_usaha" name="catalog_badan_usaha" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="catalog_lokasi" class="control-label col-lg-3">Lokasi</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="catalog_lokasi" name="catalog_lokasi" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="catalog_ketinggian" class="control-label col-lg-3">Ketinggian</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="catalog_ketinggian" name="catalog_ketinggian" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="catalog_jenis_kopi" class="control-label col-lg-3">Jenis Kopi</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="catalog_jenis_kopi" name="catalog_jenis_kopi" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="catalog_kap_produksi" class="control-label col-lg-3">Kapasitas Produksi</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="catalog_kap_produksi" name="catalog_kap_produksi" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="catalog_sertifikat" class="control-label col-lg-3">Sertifikat</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="catalog_sertifikat" name="catalog_sertifikat" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="catalog_deskripsi" class="control-label col-lg-3">Deskripsi</label>
                                        <div class="col-lg-6">
                                            <textarea style="width: 400px; height: 100px;" name="catalog_deskripsi" id="catalog_deskripsi"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="catalog_img" class="control-label col-lg-3">Foto</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="catalog_img" name="catalog_img" type="file" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="catalog_video" class="control-label col-lg-3">Video (Link Youtube)</label>
                                        <div class="col-lg-6">
                                            <textarea style="width: 400px; height: 100px;" name="catalog_video" id="catalog_video"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-primary" type="submit">Save</button>
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

    <?php }
                else
                {
                ?>
                <!-- Content Start -->
        <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Edit E-Katalog
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-cog" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form class="cmxform form-horizontal " method="POST" enctype="multipart/form-data" action="<?php echo site_url('back_end/ekatalog/edit/'.$row->catalog_id); ?>">
                                    <div class="form-group ">
                                        <label for="catalog_id" class="control-label col-lg-3">Id Katalog</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="catalog_id" name="catalog_id" type="text" value="<?= $row->catalog_id; ?>" readonly />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="catalog_nama_petani" class="control-label col-lg-3">Nama Petani</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="catalog_nama_petani" name="catalog_nama_petani" type="text" value="<?= $row->catalog_nama_petani; ?>" required/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="catalog_alamat" class="control-label col-lg-3">Alamat</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="catalog_alamat" name="catalog_alamat" type="text" value="<?= $row->catalog_alamat; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="catalog_kelompok_tani" class="control-label col-lg-3">Kelompok Tani</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="catalog_kelompok_tani" name="catalog_kelompok_tani" type="text" value="<?= $row->catalog_kelompok_tani; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="catalog_no_hp" class="control-label col-lg-3">No HP</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="catalog_no_hp" name="catalog_no_hp" type="text" value="<?= $row->catalog_no_hp; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="catalog_website" class="control-label col-lg-3">Website</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="catalog_website" name="catalog_website" type="text" value="<?= $row->catalog_website; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="catalog_sosmed" class="control-label col-lg-3">Sosial Media</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="catalog_sosmed" name="catalog_sosmed" type="text" value="<?= $row->catalog_sosmed; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="catalog_nama_kopi" class="control-label col-lg-3">Nama Kopi</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="catalog_nama_kopi" name="catalog_nama_kopi" type="text" value="<?= $row->catalog_nama_kopi; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="catalog_badan_usaha" class="control-label col-lg-3">Badan Usaha</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="catalog_badan_usaha" name="catalog_badan_usaha" type="text" value="<?= $row->catalog_badan_usaha; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="catalog_lokasi" class="control-label col-lg-3">Lokasi</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="catalog_lokasi" name="catalog_lokasi" type="text" value="<?= $row->catalog_lokasi; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="catalog_ketinggian" class="control-label col-lg-3">Ketinggian</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="catalog_ketinggian" name="catalog_ketinggian" type="text" value="<?= $row->catalog_ketinggian; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="catalog_jenis_kopi" class="control-label col-lg-3">Jenis Kopi</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="catalog_jenis_kopi" name="catalog_jenis_kopi" type="text" value="<?= $row->catalog_jenis_kopi; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="catalog_kap_produksi" class="control-label col-lg-3">Kapasitas Produksi</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="catalog_kap_produksi" name="catalog_kap_produksi" type="text" value="<?= $row->catalog_kap_produksi; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="catalog_sertifikat" class="control-label col-lg-3">Sertifikat</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="catalog_sertifikat" name="catalog_sertifikat" type="text" value="<?= $row->catalog_sertifikat; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="catalog_deskripsi" class="control-label col-lg-3">Deskripsi</label>
                                        <div class="col-lg-6">
                                            <textarea style="width: 400px; height: 100px;" name="catalog_deskripsi" id="catalog_deskripsi"><?= $row->catalog_deskripsi; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="catalog_video" class="control-label col-lg-3">Video (Link Youtube)</label>
                                        <div class="col-lg-6">
                                            <textarea style="width: 400px; height: 100px;" name="catalog_video" id="catalog_video"><?= $row->catalog_video; ?></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-primary" name="edit" type="submit">Save</button>
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
                <?php } ?>