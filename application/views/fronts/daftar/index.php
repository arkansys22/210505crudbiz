<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta content="crudbiz" name="author">
<meta NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
<title>Daftar Akun Baru - <?php echo $identitas->slogan?></title>
<meta name="title" content="Daftar Akun Baru | <?php echo $identitas->nama_website?>">
<meta property="og:title" content="Daftar Akun Baru | <?php echo $identitas->nama_website?>">
<meta name="site_url" content="<?php echo base_url()?>daftar">
<meta name="description" content="<?php echo $identitas->meta_deskripsi?>">
<meta name="keywords" content="<?php echo $identitas->meta_keyword?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link rel="alternate" href="<?php echo base_url()?>daftar" hreflang="id" />
<link href="<?php echo base_url()?>daftar" rel="canonical"/>
<meta property="og:site_name" content="<?php echo $identitas->nama_website?>">
<meta property="og:description" content="<?php echo $identitas->meta_deskripsi?>">
<meta property="og:url" content="<?php echo base_url()?>daftar">
<meta property="og:image" content="<?php echo base_url()?>assets/frontend/campur/<?php echo $identitas->logo?>">
<meta property="og:image:url" content="<?php echo base_url()?>assets/frontend/campur/<?php echo $identitas->logo?>">
<meta property="og:type" content="article">
<link rel="shortcut icon" href="<?php echo base_url()?>assets/frontend/campur/<?php echo $identitas->favicon?>" type="image/x-icon">
<?php $this->load->view('fronts/analytics')?>
<?php $this->load->view('fronts/css')?>
</head>

<body>



<!-- START HEADER -->
<?php $this->load->view('fronts/header')?>
<!-- END HEADER -->

<section class="login_register_wrap">
	<div class="container">
    	<div class="row">
        	<div class="col-12">
            	<div class="lr_form text-center">
                    <div class="heading_s3 heading_uppercase mb-3 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                        <h4>Daftar Akun</h4>
                    </div>
                    <span class="small text-uppercase text-danger animation" data-animation="fadeInUp" data-animation-delay="0.5s">Hanya 20 detik buat akun baru</span>

                    <form method="post" class="login animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                        <div class="form-group">
                            <input type="text" required="" class="form-control" name="name" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="text" required="" class="form-control" name="email" placeholder="Email Aktif">
                        </div>
                        <div class="form-group">
                            <input class="form-control" required="" type="password" name="password" Placeholder="Sandi Rahasia">
                        </div>
                        <div class="form-group">
                            <input class="form-control" required="" type="password" name="password" Placeholder="Ulangi Sandi Rahasia">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-default btn-block" name="Register">Daftar</button>
                        </div>
                        <div class="login_footer">
                            <label for="rememberme">
                                <span class="small">Dengan mengklik Daftar, Anda menyetujui Ketentuan dan Kebijakan Data kami.</span>
                            </label>
                        </div>

                    </form>
                </div>
                <div class="form-note text-center animation" data-animation="fadeInUp" data-animation-delay="0.9s">Sudah punya akun? <a href="login.html">Log in</a></div>
            </div>
        </div>
    </div>
</section>

<!-- START FOOTER SECTION -->
<?php $this->load->view('fronts/footer')?>
<!-- END FOOTER SECTION -->
<a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>
<div id="fb-root"></div>
           <script>(function(d, s, id) {
             var js, fjs = d.getElementsByTagName(s)[0];
             if (d.getElementById(id)) return;
             js = d.createElement(s); js.id = id;
             js.src = 'https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.10&appId=129429343801925';
             fjs.parentNode.insertBefore(js, fjs);
           }(document, 'script', 'facebook-jssdk'));</script>
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
