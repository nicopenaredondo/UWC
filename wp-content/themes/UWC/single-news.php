<?php
/*
Single Post Template: Single News Post Template
*/
get_header();
$id 					= get_the_id();
$current_post = get_post($id);
$thumb_id 		= get_post_thumbnail_id($id);
$thumb_url 		= wp_get_attachment_image_src($thumb_id,'', true);
$page_banner 	= get_field('page_banner',get_page_by_path($id));
//check if the post have a banner if not get the parent page banner
if($page_banner === false) { $page_banner = get_field('page_banner',get_page_by_path('news')); }
?>

<section id="page-title" class="section-head" style="background-image:url('<?php echo $page_banner['url']; ?>')">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h1 id="page-title-h1" class="animated fadeInUp"><?php echo $current_post->post_title; ?></h1>
      </div>
    </div>
  </div>
</section>

<!--Content-->
<section id="content2" class="section">
  <div class="container">
    <div class="row">

      <!--Column One-->
      <div class="col-sm-8">

        <!--Blog Post-->
        <article class="blog-post margin-60">
          <div class="date-container"><?php echo date('F',strtotime($current_post->post_date));?> <span class="day"><?php echo date('j',strtotime($current_post->post_date));?></span></div>
          <img src="<?php hs_resize_image($thumb_url[0], 700, 350) ?>" class="img-responsive" alt="Title">
          <h3><?php echo $current_post->post_title; ?></h3>
          <p><?php echo $current_post->post_content;?></p>
          <br>
				</article>


      </div><!--End Column One-->

      <!--Side Bar-->
      <?php get_sidebar();?>

    </div><!--End Row-->

  </div>
</section>

<?php get_footer(); ?>

