<!--mini statistics start-->
<!--
<div class="row">
    <div class="col-md-3">
        <a href="<?= site_url() ?>admin/customers">
        <div class="mini-stat clearfix">
            <span class="mini-stat-icon orange"><i class="fa fa-users"></i></span>
            <div class="mini-stat-info">
                <span></span>
                Customers Aktif
            </div>
        </a>
        </div>
    </div>
    <div class="col-md-3">
        <a href="<?= site_url() ?>admin/barang">
        <div class="mini-stat clearfix">
            <span class="mini-stat-icon tar"><i class="fa fa-tag"></i></span>
            <div class="mini-stat-info">
                <span></span>
                Barang
            </div>
        </a>
        </div>
    </div>
    <div class="col-md-3">
        <a href="<?= site_url() ?>admin/penjualan">
        <div class="mini-stat clearfix">
            <span class="mini-stat-icon pink"><i class="fa fa-shopping-cart"></i></span>
            <div class="mini-stat-info">
                <span></span>
                Transaksi
            </div>
        </a>
        </div>
    </div>
    <div class="col-md-3">
        <a href="<?= site_url() ?>admin/pengiriman_barang">
        <div class="mini-stat clearfix">
            <span class="mini-stat-icon green"><i class="fa fa-truck"></i></span>
            <div class="mini-stat-info">
                <span></span>
                Pengiriman Barang
            </div>
        </a>
        </div>
    </div>
</div>
-->
<!--mini statistics end-->


<?php

function belajar($url){
     // inisialisasi CURL
     $data = curl_init();
     // setting CURL
     curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($data, CURLOPT_URL, $url);
     // menjalankan CURL untuk membaca isi file
     $hasil = curl_exec($data);
     curl_close($data);
     return $hasil;
}

$mengambil =  belajar('https://markets.businessinsider.com/commodities/coffee-price');

$pecah = explode('<tbody class="table__tbody">', $mengambil);

$pecahLagi = explode('</tbody>', $pecah[1]);


echo '<div class="row">
            <div class="col-sm-6" style="float: left;">
                <section class="panel">
                    <header class="panel-heading">
                        Harga Kopi Hari Ini!!
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                        <div class="adv-table editable-table ">
                            <div class="space15"></div>
                            <table class="table table-striped table-hover table-bordered" id="editable-sample">';
echo "<tr><td>Conversion</td><td></td><td>Coffee Price</td><td>Price</td></tr>";
echo $pecahLagi[0];
echo "</table>";
echo "<label>Source : www.markets.businessinsider.com</label>";
?>