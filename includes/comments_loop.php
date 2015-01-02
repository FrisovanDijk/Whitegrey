<?php if(comments_open()): ?>
<div class="comments-title"><h1>Comments (<?php echo total_comments() ?>)</h1></div>

<?php // According to HTML5 syntax: http://www.w3.org/TR/2013/CR-html5-20130806/sections.html#the-article-element ?>
  <section class="comments">
    <?php if(has_comments()): ?>
      <?php $i = 0; while(comments()): $i++; ?>
        <article class="comment-item">
          <footer>
            <p>Posted by: <span class="comment-name"><?php echo comment_name(); ?></span>
            <br /><span class="comment-time"><?php echo relative_time(comment_time()); ?></span></p>
          </footer>
          <p><?php echo comment_text(); ?></p>
        </article>
      <?php endwhile; ?>
    <?php endif; ?>

  <p class="back-to-blog"><br/><a href="javascript:history.back()">Back to blog.</a></p>
  </section>

    <form class="commentform" method="post" action="<?php echo comment_form_url(); ?>#comment">
      <?php echo comment_form_notifications(); ?>
      Leave a comment!

      <p class="name">
        <?php echo comment_form_input_name('placeholder="Your name"'); ?>
        <label for="name" class="hidden-sm">Name</label>
      </p>

      <p class="email">
        <?php echo comment_form_input_email('placeholder="Your email (won’t be published)"'); ?>
        <label for="name" class="hidden-sm">E-mail</label>
      </p>

      <p class="textarea">
        <?php echo comment_form_input_text('placeholder="Your comment"'); ?>
      </p>

      <p class="submit">
        <?php echo comment_form_button(); ?>
      </p>

    </form>

<?php endif; ?>