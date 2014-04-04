<?php
/*
Single Post Template: Single Facility and Amenity Post Template
*/
get_header();
$id 					= get_the_id();
$current_post = get_post($id);
$thumb_id 		= get_post_thumbnail_id($id);
$thumb_url 		= wp_get_attachment_image_src($thumb_id,'', true);
$page_banner 	= get_field('page_banner',get_page_by_path($id));
$slideshow    = get_field('image_slideshow');
//check if the post have a banner if not get the parent page banner
if($page_banner === false) { $page_banner = get_field('page_banner',get_page_by_path('facilities_amenities')); }
?>
<section id="page-title" class="section-head" style="background-image:url('<?php echo $page_banner['url']; ?>')">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h1 id="page-title-h1" class="animated fadeInUp"><?php the_title();?></h1>
      </div>
    </div>
  </div>
</section>
<!--Content-->
    <section id="content2" class="section">
      <div class="container">
        <div class="row">

          <!--Column One-->
          <div class="col-sm-6">

            <!--Blog Post-->
            <article class="blog-post margin-60">
              <!-- <h3><?php echo $current_post->post_title;?></h3> -->
            	<p><?php echo $current_post->post_content;?></p>
            </article>

          </div><!--End Column One-->

          <div class="col-sm-6 text-center">
          	<a href="<?php echo $thumb_url[0];?>" class="lightbox">
              <img src="<?php echo $thumb_url[0];?>"  alt="Title" class="img-thumbnail ">
            </a>
          	<?php if(!empty($slideshow)):?>
            <div class="row">
              <?php foreach($slideshow as $image):?>
                <div class="col-sm-4" style="margin-top:10px;">
                  <a href="<?php echo $image['image']['url'];?>" class="lightbox">
                    <img src="<?php echo $image['image']['url'];?>"  alt="Title" class="img-thumbnail">
                  </a>
                </div>
              <?php endforeach;?>
            </div>
            <?php endif;?>
            <h5><a class="more" href="<?php echo get_permalink( get_page_by_path( 'services' ) ) ?>"><i class="fa fa-chevron-circle-left"></i> Back to Facilities and Amenities index page</a></h5>
          </div>

        </div><!--End Row-->



      </div>
    </section>

<?php get_footer();?>