<?php
/* Template Name:  Home Template */
 get_header();
  if(have_posts()) :
    while(have_posts()) :
      the_post();
      $slideshow                      = get_field('slider');
      $featured_services              = get_field('featured_services');
      $featured_amenities_facilities  = get_field('featured_amenities_facilities');
?>



<!-- Carousel
Change your images in the main.css file.
================================================== -->
<div id="header" class="carousel slide animated fadeIn" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <?php for($count = 0;$count < count($slideshow); $count++):?>
      <?php if($count == 0):?>
        <li data-target="#header" data-slide-to="<?php echo $count;?>" class="active"></li>
      <?php else:?>
        <li data-target="#header" data-slide-to="<?php echo $count;?>"></li>
      <?php endif;?>
    <?php endfor;?>
  </ol>

  <div class="carousel-inner">
    <?php for($count = 0;$count < count($slideshow); $count++):?>
      <?php if($count == 0):?>
        <div class="item slide-container active" style="background-image:url('<?php echo $slideshow[$count]['image']['url']; ?>')">
      <?php else:?>
        <div class="item slide-container" style="background-image:url('<?php echo $slideshow[$count]['image']['url']; ?>')">
      <?php endif;?>
      <div class="container animated fadeInUp">
        <div class="carousel-caption">
          <h1><?php echo $slideshow[$count]['title'];?></h1>
          <p class="lead margin-40"><em><?php echo $slideshow[$count]['sub_title'];?></em></p>
          <!-- <a class="btn-main" href="#"><i class="icon-chevron-right"></i> More</a> -->
        </div>
      </div>
      </div>
    <?php endfor;?>
  </div>
  <a class="left carousel-control hidden-xs" href="#header" data-slide="prev"><i class="fa fa-angle-left"></i></a>
  <a class="right carousel-control hidden-xs" href="#header" data-slide="next"><i class="fa fa-angle-right"></i></a>
</div><!-- /.carousel -->

<!--Services-->
<section id="services" class="section">
  <div class="container">
    <div class="row text-center">

    <?php foreach($featured_services as $service):
      $s_id       = $service->ID;
      $s_title    = $service->post_title;
      $s_preview  = get_field('text_preview',$s_id);
      $permalink  = get_permalink($s_id);
      $thumb_id   = get_post_thumbnail_id($s_id);
      $thumb_url  = wp_get_attachment_image_src($thumb_id,'', true);
    ?>
      <div class="col-sm-4 service margin-30">
        <a href="<?php echo $permalink;?>">
          <img src="<?php hs_resize_image($thumb_url[0], 360, 220) ?>" class="img-thumbnail" alt="">
          <h3><?php echo $s_title ?></h3>
          <p><?php echo $s_preview;?></p>
        </a>
      </div>
    <?php endforeach;?>

    </div>
    <div class="row">
      <div class="col-sm-12 text-center">
        <a class="btn-main" href="<?php echo get_permalink( get_page_by_path( 'services' ) ) ?>"><i class="icon-chevron-right"></i>View All Services</a>
      </div>
    </div>
  </div>
</section>

<!--Latest Work-->
<section id="latest-work" class="section">
  <div class="container text-center">
    <div class="row">
      <div class="col-sm-12 margin-40">
        <h3>Facilities & Amenities</h3>
      </div>
    </div>

    <div class="row margin-40">
      <?php foreach($featured_amenities_facilities as $fa):
      $fa_id       = $fa->ID;
      $fa_title    = $fa->post_title;
      $permalink  = get_permalink($fa_id);
      $thumb_id   = get_post_thumbnail_id($fa_id);
      $thumb_url  = wp_get_attachment_image_src($thumb_id,'', true);
    ?>
  		<div class="col-sm-4">
  			<div class="thumbs">
    			<img src="<?php hs_resize_image($thumb_url[0], 360, 220) ?>" class="img-thumbnail" alt="">
    			<a href="<?php echo $permalink;?>">
    				<span class="title">
    					<span><i class="fa fa-link fa-2x"></i></span>
    				</span>
    			</a>
  			</div>

  			<div class="project-title margin-30">
  		    <h4><?php echo $fa_title;?></h4>
  		  </div>
  		</div>
    <?php endforeach;?>

    </div><!--End Row of Work-->

  	<div class="row">
      <div class="col-sm-12 text-center">
        <a class="btn-main" href="<?php echo get_permalink( get_page_by_path( 'facilities_amenities' ) ) ?>"><i class="icon-chevron-right"></i>View All Facilities and Amenities</a>
      </div>
    </div>

  </div>
</section>

<?php
      endwhile;
    endif;
  get_footer();
?>
