<!-- Agenda -->
    <div class="recent_trip_area">
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
                <?php foreach ($data->result() as $ag) :?>

                <div class="col-lg-4 col-md-6">
                    <div class="single_trip">
                        <a href="<?php echo site_url('front_end/agenda/detail_agenda/'.$ag->agenda_id) ?>">
                        <div class="thumb">
                            <img style="height: 300px;" src="<?= base_url('assets/upload/agenda/'.$ag->agenda_img) ?>" alt="">
                        </div>
                    </a>
                        <div class="info" style="margin-bottom: 50px;">
                            <div class="date" style="float: right;">
                                <span><i class="fa fa-calendar">&nbsp;&nbsp;</i><?php echo $ag->agenda_tanggal ?></span>
                                <span><i class="fa fa-clock-o">&nbsp;&nbsp;</i><?php echo $ag->agenda_jam ?></span>
                            </div>
                            <a href="<?php echo site_url('front_end/agenda/detail_agenda/'.$ag->agenda_id) ?>">
                                <h3><?php echo $ag->agenda_nama ?></h3>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="row">
                <div class="col">
                    <!--Tampilkan pagination-->
                    <?php echo $pagination; ?>
                </div>
            </div>

    </div>
    <!-- END Agenda -->