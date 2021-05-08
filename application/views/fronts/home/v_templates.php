<section class="small_pb">
    <div class="container">
    	<div class="row">
            <div class="col-sm-12" >
                <div class="heading_s4 text-center">
                	<span class="sub_title">Model Template</span>
                    <h2>Model Template</h2>
                </div>
                <p><center>Pilihan template yang tepat dan bisa di kustom sesuai dengan karakter bisnis Anda</center></p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="cleafix small_divider"></div>
            </div>
        </div>
        <div class="row mb-3 mb-sm-5" >
            <div class="col-md-12 text-center">
                <ul class="list_none portfolio_filter filter_tab4">
                  <?php  foreach ($posts_templates_category as $post_new){
  									?>
                    <li><a href="#" data-filter=".<?php echo $post_new->templates_cat_judul_seo?>"><?php echo $post_new->templates_cat_judul?></a></li>

                  <?php }?>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="portfolio_container gutter_small work_col3 portfolio_gallery portfolio_style5" >
                	<li class="grid-sizer"></li>
                  <?php  foreach ($posts_templates as $post_new){
                    ?>
                    <li class="portfolio-item <?php echo $post_new->templates_cat_judul_seo?>">
                        <div class="portfolio_item">
                            <a href="#" class="image_link">
                              <?php
                                                        if(empty($post_new->templates_gambar)) {
                                                          echo "<img src='".base_url()."assets/frontend/campur/template_blank.jpg'>";
                                                        }else {
                                                          echo " <img src='".base_url()."assets/frontend/produk/".$post_new->templates_gambar."'> ";}
                                                        ?>
                            </a>
                                <div class="portfolio_content">
                                    <h5><a href="#"><?php echo $post_new->templates_judul?></a></h5>
                                    <p><?php echo $post_new->templates_desk?></p>
                              </div>
                        </div>
                    </li>
                  <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>
