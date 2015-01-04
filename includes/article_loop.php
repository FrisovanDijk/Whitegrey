<article>
  <header>
    <h1 class="article-title"><?php echo article_title(); ?></h1>
    <small><?php echo "Posted " . article_date(); ?></small>
  </header>
  <?php echo article_markdown(); ?>
  <p class="back-to-blog"><br/><a href="javascript:history.back()">Back to blog.</a></p>
</article>
