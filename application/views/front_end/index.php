
    <!-- where_togo_area_start  -->
    <!--
    <div class="where_togo_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="form_area">
                        <h3>Where you want to go?</h3>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="search_wrap">
                        <form class="search_form" action="#">
                            <div class="input_field">
                                <input type="text" placeholder="Where to go?">
                            </div>
                            <div class="input_field">
                                <input id="datepicker" placeholder="Date">
                            </div>
                            <div class="input_field">
                                <select>
                                    <option data-display="Travel type">Travel type</option>
                                    <option value="1">Some option</option>
                                    <option value="2">Another option</option>
                                </select>
                            </div>
                            <div class="search_btn">
                                <button class="boxed-btn4 " type="submit" >Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
-->

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
                <?php foreach($katalog6 as $k):?>
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="more_place_btn text-center">
                        <a class="boxed-btn4" href="<?php echo base_url('front_end/EKatalog') ?>">Tampilkan Semua</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Katalog  -->
    

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
                <?php foreach($agenda6 as $ag):?>
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
            <div class="col-lg-12">
                <div class="more_place_btn text-center">
                    <a class="boxed-btn4" href="<?php echo base_url('front_end/agenda') ?>">Tampilkan Semua</a>
                </div>
            </div>
        </div>
    </div>
    <!-- END Agenda -->


    <!-- newletter_area_start  -->
    <!--
    <div class="newletter_area overlay">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-10">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="newsletter_text">
                                <h4>Subscribe Our Newsletter</h4>
                                <p>Subscribe newsletter to get offers and about
                                    new places to discover.</p>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="mail_form">
                                <div class="row no-gutters">
                                    <div class="col-lg-9 col-md-8">
                                        <div class="newsletter_field">
                                            <input type="email" placeholder="Your mail" >
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4">
                                        <div class="newsletter_btn">
                                            <button class="boxed-btn4 " type="submit" >Subscribe</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
-->
    <!-- newletter_area_end  -->




    <div class="video_area video_bg overlay" style="margin-bottom: 1px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="video_wrap text-center">
                        <h3>Enjoy Video</h3>
                        <div class="video_icon">
                            <a class="popup-video video_play_button" href="https://www.youtube.com/watch?v=f59dDEk57i0">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--
    <div class="travel_variation_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="<?php echo base_url('assets/front_end/img/svg_icon/1.svg') ?>" alt="">
                        </div>
                        <h3>Comfortable Journey</h3>
                        <p>A wonderful serenity has taken to the possession of my entire soul.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="<?php echo base_url('assets/front_end/img/svg_icon/2.svg') ?>" alt="">
                        </div>
                        <h3>Luxuries Hotel</h3>
                        <p>A wonderful serenity has taken to the possession of my entire soul.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="<?php echo base_url('assets/front_end/img/svg_icon/3.svg') ?>" alt="">
                        </div>
                        <h3>Travel Guide</h3>
                        <p>A wonderful serenity has taken to the possession of my entire soul.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
-->

    <!-- testimonial_area  -->
    <!--
    <div class="testimonial_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <div class="author_thumb">
                                            <img src="<?php echo base_url('assets/front_end/img/testmonial/author.png') ?>" alt="">
                                        </div>
                                        <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering.</p>
                                        <div class="testmonial_author">
                                            <h3>- Micky Mouse</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <div class="author_thumb">
                                            <img src="<?php echo base_url('assets/front_end/img/testmonial/author.png') ?>" alt="">
                                        </div>
                                        <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering.</p>
                                        <div class="testmonial_author">
                                            <h3>- Tom Mouse</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <div class="author_thumb">
                                            <img src="<?php echo base_url('assets/front_end/img/testmonial/author.png ') ?>" alt="">
                                        </div>
                                        <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering.</p>
                                        <div class="testmonial_author">
                                            <h3>- Jerry Mouse</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
-->
    <!-- /testimonial_area  -->