<?php
/* Template Name: Services Template */
 get_header();
 	if(have_posts()) :
 		while(have_posts()) :
 			the_post();
 			$page_banner = get_field('page_banner');
 			$services = get_field('services');
?>
<!--Content-->
<section id="page-title" class="section-head" style="background-image:url('<?php echo $page_banner['url']; ?>')">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h1 id="page-title-h1" class="animated fadeInUp"><?php the_title(); ?></h1 id="page-title-h1">
      </div>
    </div>
  </div>
</section>


<!--Content-->
<section id="content1" class="section">
  <div class="container">
	<?php
		if(empty($post->post_content)) :
	 ?>
	<div class="row">
		<div class="col-lg-12">
			<?php the_content(); ?>
		</div>
	</div>
	<?php
		endif;
		$counter = 0;
		$max = count($services);
		if($services) :
			foreach($services as $service) :
				$p_id = $service->ID;
				$p_title = $service->post_title;
				$p_preview = get_field('text_preview', $p_id);
				$permalink = get_permalink($p_id);
				$thumb_id = get_post_thumbnail_id($p_id);
				$thumb_url = wp_get_attachment_image_src($thumb_id,'', true);
				if($counter == 0 || $counter % 2 == 0) :
	 ?>
   <!--First Service Row-->
    <div class="row">
    <?php
    	endif;
    ?>
      <div class="col-sm-6 margin-60">
        <div class="row">
          <div class="col-sm-4 service-icons text-center">
            <img src="<?php hs_resize_image($thumb_url[0], 150, 150) ?>" class="img-responsive img-thumbnail" alt="">
          </div>

          <div class="col-sm-8 text-left">
            <h3>
              <a href="<?php echo $permalink; ?>">
                <?php echo $p_title; ?>
              </a>
            </h3>
            <p><?php echo $p_preview; ?> </p>
            <br>
            <a href="<?php echo $permalink;?>" class="btn-main">View Service</a>
          </div>
        </div>
      </div>
		<?php
				if($counter == $max - 1 || (($counter - 1) % 2 == 0)) :
					$counter++;
		?>
    </div>
    <?php
    			else :
    			$counter++;
    		endif;
    ?>
<?php
			endforeach;
		endif;
?>

  </div>
</section>
<?php
			endwhile;
		endif;
	get_footer();
?>
