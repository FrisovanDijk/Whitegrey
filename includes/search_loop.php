<?php if(has_search_results()): ?>
  <ul class="items">
    <?php $i = 0; while(search_results()): $i++; ?>
      <article>
        <header>
          <h1>
            <a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
          </h1>
          <small><?php echo article_date(); ?></small>
        </header>
        <p><?php echo article_description(); ?></p>
      </article>
    <?php endwhile; ?>
  </ul>



  <?php if(has_pagination()): ?>
    <nav class="pagination">
      <div class="wrap">
        <?php echo search_prev(); ?>
        <?php echo search_next(); ?>
      </div>
    </nav>
  <?php endif; ?>

<?php else: ?>
  <p class="wrap">Unfortunately, there's no results for &ldquo;<?php echo search_term(); ?>&rdquo;. Did you spell everything correctly?</p>
<?php endif; ?>