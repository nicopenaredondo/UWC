<?php $upload_dir = wp_upload_dir(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php bloginfo('title') ?></title>
  <meta name="keywords" content="made with bootstrap, wrap bootstrap themes, bootstrap agency themes, creative bootstrap sites, Lava theme, responsive bootstrap theme, mobile website themes, bootstrap portfolio, theme armada">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">

  <?php wp_head();?>
  <link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/favicon.ico" type="image/x-icon">
  <link rel="icon" href="<?php bloginfo('template_directory');?>/favicon.ico" type="image/x-icon">
</head>

<body id="top" data-spy="scroll" data-target=".navbar" data-offset="200">
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand img-responsive" href="<?php echo get_bloginfo('url') ?>" id="logo">
          <img src="<?php echo $upload_dir['url'] .'/uwc-logo.png'; ?>" alt="logo">
        </a>
      </div>
      <div class="navbar-collapse collapse">
        <?php wp_nav_menu(array('menu_class'  => 'nav navbar-nav navbar-right')); ?>
      </div><!--/.navbar-collapse -->
    </div>
  </div>