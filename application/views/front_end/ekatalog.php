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
                <?php foreach($katalogall as $k):?>
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="<?= base_url('assets/upload/e_catalog/'.$k->catalog_img) ?>" alt="">
                            <a href="#" class="prise"><?php echo $k->catalog_nama_kopi ?></a>
                        </div>
                        <div class="place_info">
                            <a href="destination_details.html"><h3><?php echo $k->catalog_nama_petani ?></h3></a>
                            <p><?php echo $k->catalog_deskripsi ?></p>
                            <div class="rating_days d-flex justify-content-between">
                                <span class="d-flex justify-content-center align-items-center">
                                     
                                     <a href="#"><?php echo $k->catalog_ketinggian ?>&nbsp;mdpl</a>
                                </span>
                                <div class="days">
                                    <i class="fa fa-chevron-circle-right"></i> 
                                    <a href="#"><?php echo $k->catalog_jenis_kopi ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
    
            </div>
        
        </div>
    </div>