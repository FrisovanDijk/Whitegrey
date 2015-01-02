<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8"/>
  <title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>

  <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="<?php echo theme_url('/assets/css/grid.css'); ?>" type="text/css"/>
  <link rel="stylesheet" href="<?php echo theme_url('/assets/css/style.css'); ?>" type="text/css"/>

  <link rel="shortcut icon" href="<?php echo theme_url('img/favicon.png'); ?>">

  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <meta name="generator" content="Anchor CMS">

  <?php $description = substr(article_description(), 0, strpos(wordwrap(article_description(), 120), "\n")); ?>
  <meta name="description" content="<?php echo $description . '...' ?>"/>

  <meta property="og:title" content="<?php echo site_name(); ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo e(current_url()); ?>">
  <meta property="og:site_name" content="<?php echo site_name(); ?>">
  <meta property="og:description" content="<?php echo site_description(); ?>">

  <?php if(customised()): ?>
    <!-- Custom CSS -->
    <style><?php echo article_css(); ?></style>
    <!--  Custom JS -->
    <script><?php echo article_js(); ?></script>
  <?php endif; ?>
</head>

<body>

<div class="container-fluid">
  <div class="col-4-lg sidebar">
    <?php if(has_menu_items()) : ?>
      <nav>
        <ul class="menu">
        <?php while(menu_items()) : ?>
          <li <?php echo (menu_active() ? 'class="active"' : ''); ?>>
            <a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>"><?php echo menu_name(); ?></a>
          </li>
        <?php endwhile; ?>
        </ul>
      </nav>
    <?php endif; ?>

      <div class="row">
        <a href="">
          <img src="<?php echo theme_url('assets/img/logo.png');?>" alt="Logo Friso van Dijk" class="logo">
        </a>
      </div>

      <?php echo site_meta('sidebar'); ?>
    <div class="footer">Theme by <a href="http://www.frisovandijk.com" target="_blank">Friso van Dijk</a></div>
  </div> <!-- close sidebar -->