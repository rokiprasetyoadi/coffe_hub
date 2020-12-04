<!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>E-Katalog</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

<!-- Katalog  -->
    <div class="popular_places_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>E-Katalog</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel augue interdum neque iaculis consequat sed eu nisi. Pellentesque aliquam massa ac sem molestie maximus.</p>
                    </div>
                </div>
            </div>
            <div class="row">

                    <?php foreach ($data->result() as $k) :?>

                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <a href="<?php echo site_url('front_end/ekatalog/detail_ekatalog/'.$k->catalog_id) ?>">
                        <div class="thumb">
                            <img style="height: 300px;" src="<?= base_url('assets/upload/e_catalog/'.$k->catalog_img) ?>" alt="">
                            <a href="<?php echo site_url('front_end/ekatalog/detail_ekatalog/'.$k->catalog_id) ?>" class="prise"><?php echo $k->catalog_jenis_kopi ?></a>
                        </div>
                    </a>
                        <div class="place_info">
                            <a href="<?php echo site_url('front_end/ekatalog/detail_ekatalog/'.$k->catalog_id) ?>"><h3><?php echo $k->catalog_nama_kopi ?></h3></a>
                            <p style="height: 120px;"><?php echo substr($k->catalog_deskripsi,0,150); ?>&nbsp;...</p>
                            <div class="rating_days d-flex justify-content-between">
                                <span class="d-flex justify-content-center align-items-center">
                                     
                                     <a href="<?php echo site_url('front_end/ekatalog/detail_ekatalog/'.$k->catalog_id) ?>">Owner : <?php echo $k->catalog_nama_petani ?></a>
                                </span>
                                <div class="days">
                                    <i class="fa fa-chevron-circle-right"></i> 
                                    <a href="<?php echo site_url('front_end/ekatalog/detail_ekatalog/'.$k->catalog_id) ?>"><?php echo $k->catalog_ketinggian ?>&nbsp;mdpl</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>  
    
            </div>
        </div>

                <div class="col">
                    <!--Tampilkan pagination-->
                    <?php echo $pagination; ?>
                </div>
    </div>
    <!-- END Katalog  -->

    