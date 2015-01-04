<article>
  <header>
    <h1 class="article-title"><?php echo article_title(); ?></h1>
    <small>Posted <?php echo article_date(); ?> in <a href="../category/<?php echo strtolower( str_replace( " ", "-", article_category() ) ); ?>"><?php echo article_category(); ?></a></small>
  </header>
  <?php echo article_markdown(); ?>
  <p class="back-to-blog"><br/><a href="javascript:history.back()">Back to blog.</a></p>
</article>