<article>
  <header>
    <h1 class="article-title"><?php echo article_title(); ?></h1>
    <small><?php echo "Posted " . article_date() . " in <a href='". category_url() ."'>" . category_title() . "</a>"; ?></small>
  </header>
  <?php echo article_markdown(); ?>
  <p class="back-to-blog"><br/><a href="<?php echo base_url(); ?>blog">Back to blog.</a></p>
</article>