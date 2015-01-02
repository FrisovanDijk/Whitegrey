<?php if(has_posts()) : while(posts()) : ?>
  <article>
    <header>
      <h1>
        <a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
      </h1>
      <small><?php echo article_date(); ?></small>
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