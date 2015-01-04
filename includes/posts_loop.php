<?php if(has_posts()) : while(posts()) : ?>
  <article>
    <header>
      <h1>
        <a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
      </h1>
      <small>Posted <?php echo article_date(); ?> in <a href="../category/<?php echo strtolower( str_replace( " ", "-", article_category() ) ); ?>"><?php echo article_category(); ?></a></small>
    </header>
    <p><?php echo article_description(); ?></p>
  </article>
<?php endwhile; endif; ?>

<?php if(has_pagination()) : ?>
  <nav class="pagination">
    <?php echo posts_prev(); ?>
    <?php echo posts_next(); ?>
  </nav>
<?php endif; ?>