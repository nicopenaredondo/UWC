<?php
/* Template Name: Contact Template */
get_header();
if(have_posts()) :
    while(have_posts()) :
      the_post();
      $page_banner = get_field('page_banner');
      $text_banner = get_field('text_banner');
?>
<!--Content-->
<section id="page-title" class="section-head" style="background-image:url('<?php echo $page_banner['url']; ?>')">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h1 id="page-title-h1" class="animated fadeInUp"><?php echo $text_banner; ?></h1>
      </div>
    </div>
  </div>
</section>

<!--Content-->
<section id="content2" class="section">
  <div class="container">
    <div class="row">
      <?php echo the_content();?>
    </div><!--End Row-->
  </div><!--End Container-->
</section>
<?php
      endwhile; //Line 4
    endif; //Line 5
  get_footer();

?>
