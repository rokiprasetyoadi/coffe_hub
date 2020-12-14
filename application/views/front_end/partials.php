<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>COFFEE - HUB</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/back_end/images/Faviconn.png') ?>">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="<?php echo base_url('assets/front_end/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/front_end/css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/front_end/css/magnific-popup.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/front_end/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/front_end/css/nice-select.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/front_end/css/gijgo.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/front_end/css/animate.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/front_end/css/slick.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/front_end/css/slicknav.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/front_end/css/jquery-ui.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/back_end/font-awesome/css/font-awesome.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/front_end/css/owl.theme.default.min.css') ?>">
    <!--
    <link rel="stylesheet" href="<?php echo base_url('assets/front_end/css/themify-icons.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/front_end/css/flaticon.css') ?>">
    -->

    <link rel="stylesheet" href="<?php echo base_url('assets/front_end/css/style.css') ?>">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->

    <link rel="stylesheet" href="<?php echo base_url('assets/back_end/fancybox/jquery.fancybox.min.css') ?>" />
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="<?php echo base_url('home') ?>">
                                        <img style="width: 170px; margin-left: 20px;" src="<?php echo base_url('assets/front_end/img/coffee_hub2.png') ?>" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a class="active" href="<?php echo base_url('home') ?>">home</a></li>
                                            <li><a class="" href="<?php echo base_url('agenda') ?>">Agenda</a></l/li>
                                                <li><a class="" href="<?php echo base_url('ekatalog') ?>">E-Katalog</a></l/li>
                                            <!--<li><a href="#">pages <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                        <li><a href="destination_details.html">Destinations details</a></li>
                                                        <li><a href="elements.html">elements</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">blog</a></li>
                                                    <li><a href="single-blog.html">single-blog</a></li>
                                                </ul>
                                            </li>-->
                                            <li><a href="<?php echo base_url('hubungi_kami') ?>">Hubungi Kami</a></li>
                                            <li><a href="<?php echo base_url('tentang_kami') ?>">Tentang Kami</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                                <div class="social_wrap d-flex align-items-center justify-content-end">
                                    <!--<div class="number">
                                        <p> <i class="fa fa-phone"></i> 10(256)-928 256</p>
                                    </div>-->
                                    <div class="social_links d-none d-xl-block">
                                        <ul>
                                            <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                                            <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                            <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                            <li><a href="#"> <i class="fa fa-youtube-play"></i> </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!--
                            <?php if ($this->session->userdata('status') == "SignIn_DoNe") {
                                ?>

                                <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                                <div class="main-menu  d-none d-lg-block" style="float: right;">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="#"><?php echo $this->session->userdata('member_nama') ?></a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Profile</a></li>
                                                    <li><a href="<?php echo base_url('front_end/member/signout') ?>">Sign Out</a></li>
                                                </ul>

                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>

                                <?php
                            }else{ ?>

                            <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                                <div class="social_wrap d-flex align-items-center justify-content-end">
                                    <div class="social_links d-none d-xl-block">
                                        <ul>
                                            <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                                            <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                            <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                            <li><a href="#"> <i class="fa fa-youtube-play"></i> </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <?php
                            }
                            ?>
                        -->

                            

                            <!--
                            <div class="seach_icon">
                                <a data-toggle="modal" data-target="#exampleModalCenter" href="#">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

<?= $contents; ?>

    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img style="height: 120px; padding: 15px; background-color: white; border-radius: 20px; border-color: white;" src="<?php echo base_url('assets/front_end/img/coffee_hub.png') ?>" alt="">
                                </a>
                            </div>
                            <p style="color: white;">Jl. PB. Sudirman 90, Jember 68118<br>
                                Telp : (0331) 757130, 757132<br>
                                Fax : (0331) - 757131<br>
                                E-Mail : iccri@iccri.net
                            </p>
                        </div>
                    </div>

                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title" style="color: #F16A2A;">
                                Butuh Bantuan ?
                            </h3>
                            <ul class="links">
                                <li><a href="<?php echo base_url('hubungi_kami') ?>">Hubungi Kami</a></li>
                                <li><a href="<?php echo base_url('tentang_kami') ?>">Tentang Kami</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title" style="text-align: center; color: #F16A2A;">
                                Sosial Media
                            </h3>
                            <ul class="links double_links" style="text-align: center;">
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">Instagram</a></li>
                                <li><a href="#">Twitter</a></li>
                                <li><a href="#">Youtube</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title" style="color: #F16A2A;">
                                Coffe-HUB
                            </h3>
                            <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel augue interdum neque iaculis consequat sed eu nisi. Pellentesque aliquam massa ac sem molestie maximus.</p>-->
                            <div class="instagram_feed">
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="<?php echo base_url('assets/front_end/img/instagram/1.png') ?>" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="<?php echo base_url('assets/front_end/img/instagram/2.png') ?>" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="<?php echo base_url('assets/front_end/img/instagram/3.png') ?>" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="<?php echo base_url('assets/front_end/img/instagram/4.png') ?>" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="<?php echo base_url('assets/front_end/img/instagram/5.png') ?>" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="<?php echo base_url('assets/front_end/img/instagram/6.png') ?>" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text" hidden>
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


  <!-- Modal -->
  <div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="serch_form">
            <input type="text" placeholder="Search" >
            <button type="submit">search</button>
        </div>
      </div>
    </div>
  </div>
    <!-- link that opens popup -->
     
    <script src="<?php echo base_url('assets/front_end/js/jquery.min.js') ?>"></script>
    <!--
    <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>

    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script> -->

    <!-- JS here -->
    <script src="<?php echo base_url('assets/front_end/js/vendor/modernizr-3.5.0.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/front_end/js/vendor/jquery-1.12.4.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/front_end/js/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/front_end/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/front_end/js/owl.carousel.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/front_end/js/isotope.pkgd.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/front_end/js/ajax-form.js') ?>"></script>
    <script src="<?php echo base_url('assets/front_end/js/waypoints.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/front_end/js/jquery.counterup.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/front_end/js/imagesloaded.pkgd.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/front_end/js/scrollIt.js') ?>"></script>
    <script src="<?php echo base_url('assets/front_end/js/jquery.scrollUp.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/front_end/js/wow.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/front_end/js/nice-select.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/front_end/js/jquery.slicknav.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/front_end/js/jquery.magnific-popup.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/front_end/js/plugins.js') ?>"></script>
    <script src="<?php echo base_url('assets/front_end/js/gijgo.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/front_end/js/slick.min.js') ?>"></script>
   

    
    <!--contact js-->
    <script src="<?php echo base_url('assets/front_end/js/contact.js') ?>"></script>
    <script src="<?php echo base_url('assets/front_end/js/jquery.ajaxchimp.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/front_end/js/jquery.form.js') ?>"></script>
    <script src="<?php echo base_url('assets/front_end/js/jquery.validate.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/front_end/js/mail-script.js') ?>"></script>

    <script src="<?php echo base_url('assets/back_end/fancybox/jquery.fancybox.min.js') ?>"></script>


    <script src="<?php echo base_url('assets/front_end/js/main.js') ?>"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }

        });
    </script>
</body>

</html>