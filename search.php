<?php theme_include('partials/header'); ?>

  <section class="content col-8-lg col-push-lg-4">
    <?php require 'includes/category_show.php'; ?>

    <h1 class="wrap">You searched for &ldquo;<?php echo search_term(); ?>&rdquo;.</h1>

    <?php require 'includes/search_loop.php' ?>

  </section>

<?php theme_include('partials/footer'); ?>