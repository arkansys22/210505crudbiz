<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta content="crudbiz" name="author">
<meta NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
<title><?php echo $posts->paketharga_judul ?> - <?php echo $posts->paketharga_keyword ?> - <?php echo $identitas->slogan?></title>
<meta name="title" content="<?php echo $posts->paketharga_judul ?> - <?php echo $posts->paketharga_keyword ?> | <?php echo $identitas->nama_website?>">
<meta property="og:title" content="<?php echo $posts->paketharga_judul ?> - <?php echo $posts->paketharga_keyword ?> | <?php echo $identitas->nama_website?>">
<meta name="site_url" content="<?php echo base_url()?>paketharga/<?php echo $posts->paketharga_judul_seo ?>">
<meta name="description" content="<?php echo $posts->paketharga_meta_desk ?>">
<meta name="keywords" content="<?php echo $posts->paketharga_keyword ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link rel="alternate" href="<?php echo base_url()?>paketharga/<?php echo $posts->paketharga_judul_seo ?>" hreflang="id" />
<link href='<?php echo base_url()?>paketharga_/<?php echo $posts->paketharga_judul_seo ?>' rel='canonical'/>
<meta property="og:site_name" content="<?php echo $identitas->nama_website?>">
<meta property="og:description" content="<?php echo $posts->paketharga_meta_desk ?>">
<meta property="og:url" content="<?php echo base_url()?>klien/<?php echo $posts->paketharga_judul_seo ?>">
<meta property="og:image" content="<?php echo base_url()?>assets/frontend/paketharga/<?php echo $posts->paketharga_gambar ?>">
<meta property="og:image:url" content="<?php echo base_url()?>assets/frontend/paketharga/<?php echo $posts->paketharga_gambar ?>">
<meta property="og:type" content="article">
<link rel="shortcut icon" href="<?php echo base_url()?>assets/frontend/campur/<?php echo $identitas->favicon?>" type="image/x-icon">
<?php $this->load->view('fronts/analytics')?>
<?php $this->load->view('fronts/css')?>
</head>

<body>



<!-- START HEADER -->
<?php $this->load->view('fronts/header.php')?>
<!-- END HEADER -->

<section class="small_pb overflow_hide">
	<div class="container">
    	<div class="row align-items-center">
        	<div class="col-lg-6 col-md-12 mb-4 mb-lg-0 animation" data-animation="fadeInLeft" data-animation-delay="0.2s">
            <img <?php
                if(empty($posts->paketharga_gambar)) {
                  echo "";
                }else {
                  echo " <img src='".base_url()."assets/frontend/paketharga/".$posts->paketharga_gambar."'> ";}
                ?>
            </div>
            <div class="col-lg-6 col-md-12 animation" data-animation="fadeInRight" data-animation-delay="0.2s">
            	<h5><?php echo $posts->paketharga_judul ?></h5>
                <?php echo $posts->paketharga_desk ?>
                <ul class="list_none portfolio_info_box">
                    <li><span class="text-uppercase">Lama Pengerjaan</span>3 Hari</li>
                    <li><span class="text-uppercase">Harga</span>Rp. 500.000</li>
                    <li><span class="text-uppercase">Fitur Terbaik</span>Gratis domain & hosting, Gratis SSL, Email Profesional, Mobile Optimized, SEO Friendly, Support 24/7, Pengelolaan Website Mudah Untuk Pemula, Akses Cepat Dengan Wordpress Optimized.</li>
                    <li><span class="text-uppercase">Pilih Tampilan</span>Sesuaikan Dengan Kebutuhan</li>
                    <li><span class="text-uppercase">Bagikan </span>
                        <ul class="list_none social_icons border_social rounded_social">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-whatsapp"></i></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="small_pb">
    <div class="container-fluid">
    	<div class="row">
            <div class="col-sm-12" >
                <div class="heading_s4 text-center">
                	<span class="sub_title">Tampilan Webiste</span>
                    <h2>Bebas Pilih Dan Custom</h2>
                </div>
                <p><center>Memilih Tampilan Website Yang Tepat Dapat Mempermudah Konsumen Dalam Menentukan Produk Yang Anda Tawarkan</center></p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="cleafix small_divider"></div>
            </div>
        </div>
				<div class="row">
            <div class="col-md-12">
                <ul class="list_none carousel_slide4 owl-carousel owl-theme" data-margin="15" data-dots="false" data-autoplay="false" data-nav="true" data-loop="true">
									<?php  foreach ($posts_templates as $post_new){
										?>
										<a href="">
										<li>
											<?php
																								if(empty($post_new->templates_gambar)) {
																									echo "<img src='".base_url()."assets/frontend/campur/template_blank.jpg'>";
																								}else {
																									echo " <img src='".base_url()."assets/frontend/produk/".$post_new->templates_gambar."'> ";}
																								?>

                    </li>
										</a>
									<?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- START FOOTER SECTION -->
<?php $this->load->view('fronts/footer')?>
<!-- END FOOTER SECTION -->

<a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>

<!-- Latest jQuery -->
<script src="<?php echo base_url()?>assets/js/jquery-1.12.4.min.js"></script>
<!-- jquery-ui -->
<script src="<?php echo base_url()?>assets/js/jquery-ui.js"></script>
<!-- popper min js -->
<script src="<?php echo base_url()?>assets/js/popper.min.js"></script>
<!-- Latest compiled and minified Bootstrap -->
<script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- owl-carousel min js  -->
<script src="<?php echo base_url()?>assets/owlcarousel/js/owl.carousel.min.js"></script>
<!-- magnific-popup min js  -->
<script src="<?php echo base_url()?>assets/js/magnific-popup.min.js"></script>
<!-- waypoints min js  -->
<script src="<?php echo base_url()?>assets/js/waypoints.min.js"></script>
<!-- parallax js  -->
<script src="<?php echo base_url()?>assets/js/parallax.js"></script>
<!-- countdown js  -->
<script src="<?php echo base_url()?>assets/js/jquery.countdown.min.js"></script>
<!-- fit video  -->
<script src="<?php echo base_url()?>assets/js/jquery.fitvids.js"></script>
<!-- jquery.counterup.min js -->
<script src="<?php echo base_url()?>assets/js/jquery.counterup.min.js"></script>
<!-- isotope min js -->
<script src="<?php echo base_url()?>assets/js/isotope.min.js"></script>
<!-- elevatezoom js -->
<script src='<?php echo base_url()?>assets/js/jquery.elevatezoom.js'></script>
<!-- scripts js -->
<script src="<?php echo base_url()?>assets/js/scripts.js"></script>

</body>
</html>
