<?php
/* Template Name: News Template */
get_header();
  if(have_posts()) :
    while(have_posts()) :
      the_post();
      $page_banner = get_field('page_banner');
      $news = get_field('news');
?>
<!--Content-->
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
    <?php
      if($news):
    ?>
    <div class="row">
      <div class="col-sm-8">

        <?php
          foreach($news as $n):
          $p_id         = $n->ID;
          $p_title      = $n->post_title;
          $p_date       = $n->post_date_gmt;
          $p_preview    = get_field('text_preview', $p_id);
          $p_permalink  = get_permalink($p_id);
          $thumb_id     = get_post_thumbnail_id($p_id);
          $thumb_url    = wp_get_attachment_image_src($thumb_id,'', true);
        ?>
          <!--Blog Post-->
          <article class="blog-post margin-60">
            <div class="date-container"><?php echo date('F',strtotime($p_date));?> <span class="day"><?php echo date('j',strtotime($p_date));?></span></div>
            <img src="<?php hs_resize_image($thumb_url[0], 700, 350) ?>" class="img-responsive" alt="Title">
            <h3><?php echo $p_title ?></h3>
            <p><?php echo $p_preview;?></p>
            <br>
            <a class="btn-main" href="<?php echo $p_permalink;?>"><i class="fa fa-chevron-right"></i> More</a>
          </article>
        <?php endforeach;?>

      </div>
      <?php get_sidebar();?>

    </div><!--End Row-->
  <?php else:?>
  <h2>There are no news posted</h2>
  <?php endif;?>
  </div>
</section>
<?php
      endwhile; //Line 4
    endif; //Line 5
  get_footer();

?>
