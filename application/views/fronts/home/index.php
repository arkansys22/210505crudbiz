<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta content="crudbiz" name="author">
<meta NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
<title><?php echo $identitas->nama_website?> - <?php echo $identitas->slogan?></title>
<meta name="title" content="<?php echo $identitas->nama_website?> - <?php echo $identitas->slogan?>">
<meta property="og:title" content="<?php echo $identitas->nama_website?> - <?php echo $identitas->slogan?>">
<meta name="site_url" content="<?php echo base_url()?>">
<meta name="description" content="<?php echo $identitas->meta_deskripsi?>">
<meta name="keywords" content="<?php echo $identitas->meta_keyword?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link rel="alternate" href="<?php echo base_url()?>" hreflang="id" />
<link href='<?php echo base_url()?>' rel='canonical'/>
<meta property="og:site_name" content="<?php echo $identitas->nama_website?>">
<meta property="og:description" content="<?php echo $identitas->meta_deskripsi?>">
<meta property="og:url" content="<?php echo base_url()?>">
<meta property="og:image" content="<?php echo base_url()?>assets/frontend/campur/<?php echo $identitas->logo?>">
<meta property="og:image:url" content="<?php echo base_url()?>assets/frontend/campur/<?php echo $identitas->logo?>">
<meta property="og:type" content="article">
<link rel="shortcut icon" href="<?php echo base_url()?>assets/frontend/campur/<?php echo $identitas->favicon?>" type="image/x-icon">
<?php $this->load->view('fronts/analytics')?>
<?php $this->load->view('fronts/css')?>
</head>
<body>

<!-- LOADER -->
<!-- END LOADER -->

<!-- START HEADER -->

<!-- START SECTION HEADER -->
<?php $this->load->view('fronts/header.php')?>
<!-- END SECTION HEADER -->
<!-- START HEADER -->

<!-- START SECTION BANNER -->
<?php $this->load->view('fronts/home/v_slider')?>
<!-- END SECTION BANNER -->



<!-- START SECTION ABOUT US -->
<?php $this->load->view('fronts/home/v_about')?>
<!-- END SECTION ABOUT US -->

<!-- START SECTION FEATURE -->
<?php $this->load->view('fronts/home/v_linibisnis')?>
<!-- END SECTION FEATURE -->

<!-- START SECTION PORTFOLIO -->
<?php $this->load->view('fronts/home/v_portfolio')?>
<!-- END SECTION PORTFOLIO -->

<!-- START SECTION FEATURE -->
<?php $this->load->view('fronts/home/v_counter')?>
<!-- END SECTION FEATURE -->

<!-- START SECTION COUNTER -->
<!-- END SECTION COUNTER -->

<!-- START SECTION SERVICE -->
<?php $this->load->view('fronts/home/v_service')?>
<!-- END SECTION SERVICE -->

<!-- START SECTION TEAM -->
<!-- END SECTION TEAM -->

<!-- START SECTION CALL TO ACTION -->
<section class="cta_section_small bg_blue px-0">
	<div class="container">
    	<div class="row align-items-center animation" data-animation="fadeInUp" data-animation-delay="0.2s">
        	<div class="col-md-8 text_white">
                <h2 class="">Untuk Informasi Lebih Lanjut</h2>

            </div>
            <div class="col-md-4 text-md-right">
            	<a href="#" class="btn btn-outline-white">Hubungi Kami</a>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION CALL TO ACTION -->

<!-- START SECTION TESTIMONIAL -->
<?php $this->load->view('fronts/home/v_testi')?>
<!-- END SECTION TESTIMONIAL -->

<!-- START SECTION BLOG -->
<?php $this->load->view('fronts/home/v_blog')?>
<!-- END SECTION BLOG -->

<!-- START SECTION CLIENT LOGO -->
<?php $this->load->view('fronts/home/v_logo')?>
<!-- START SECTION CLIENT LOGO -->

<!-- START SECTION SUBCRIBE -->
<?php $this->load->view('fronts/home/v_subcribe')?>
<!-- END SECTION SUBCRIBE -->

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
