<div class="category-menu">
  <?php while(categories()): ?>
    <?php echo "<a href='". category_url() ."'>" . category_title() . "</a><span class='cat-separator'>|</span>"; ?>
  <?php endwhile; ?>
</div>

  <div class="search">
    <form id="search" action="<?php echo search_url(); ?>" method="post">
      <label for="term">Search:</label>
      <input type="search" id="term" name="term" placeholder="Type and hit enter&hellip;" value="<?php echo search_term(); ?>">
    </form>
  </div>
