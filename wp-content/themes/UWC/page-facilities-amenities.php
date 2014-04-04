<?php
/* Template Name: Facilities and Amenities Template */
get_header();
  if(have_posts()) :
    while(have_posts()) :
      the_post();
      $page_banner = get_field('page_banner');
      $facilities_and_amenities = get_field('facilities_and_amenities');
?>
<!--Content-->
<section id="page-title" class="section-head" style="background-image:url('<?php echo $page_banner['url']; ?>')">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h1 id="page-title-h1" class="animated fadeInUp"><?php the_title(); ?></h1>
      </div>
    </div>
  </div>
</section>


<!--Work-->
<section id="content2" class="section">
  <div class="container text-center">
    <?php
      if(empty($post->post_content)) :
     ?>
    <div class="row">
      <div class="col-lg-12">
        <?php the_content(); ?>
      </div>
    </div>
    <?php endif;?>

    <?php
      if($facilities_and_amenities):
    ?>
      <div class="row margin-40">
    <?php
        foreach($facilities_and_amenities as $fa):
          $p_id         = $fa->ID;
          $p_title      = $fa->post_title;
          $p_permalink  = get_permalink($p_id);
          $thumb_id     = get_post_thumbnail_id($p_id);
          $thumb_url    = wp_get_attachment_image_src($thumb_id,'', true);
    ?>
      <!--Project Thumbnail One-->
    		<div class="col-sm-4">
    			<div class="thumbs">
      			<img src="<?php hs_resize_image($thumb_url[0], 360, 229) ?>" class="img-responsive img-thumbnail" alt="Image Size 430x280">
      			<a href="<?php echo $p_permalink;?>">
      				<span class="title">
      					<span><i class="fa fa-link fa-2x"></i></span>
      				</span>
      			</a>
    			</div>

    			<div class="project-title margin-30">
    		    <h4><?php echo $p_title;?></h4>
    		  </div>
    		</div>

    		<?php endforeach;?>
    		</div><!--End Row of Work-->
      </div>
    <?php endif; ?>
</section>
<?php
      endwhile; //Line 4
    endif; //Line 5
  get_footer();

?>
