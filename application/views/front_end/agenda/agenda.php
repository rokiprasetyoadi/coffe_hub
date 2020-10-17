<!-- popular_destination_area_start  -->
    <div class="popular_destination_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>Agenda</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel augue interdum neque iaculis consequat sed eu nisi. Pellentesque aliquam massa ac sem molestie maximus.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach($agendall as $ag):?>
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                        <div class="thumb">
                            <img src="<?= base_url('assets/upload/agenda/'.$ag->agenda_img) ?>" alt="">
                        </div>
                        <div class="content">
                            <p class="d-flex align-items-center"><?php echo $ag->agenda_nama ?><a href="<?php echo site_url('front_end/agenda/detail_agenda/'.$ag->agenda_id) ?>"><?php echo $ag->agenda_tanggal ?>&nbsp;&nbsp;<?php echo $ag->agenda_jam ?></a> </p>
                            <p style="font-size: 90%;"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?php echo $ag->agenda_tempat ?></p>
                            
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                
            </div>
        </div>
    </div>
    <!-- popular_destination_area_end  -->