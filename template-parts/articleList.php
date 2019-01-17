<article class="articleList-item fadeIn">
  <a class="articleList-wrap" href="<?php the_permalink(); ?>">
    <div class="articleList-image"><?php the_post_thumbnail( 'large' ); ?></div>
    <div class="articleList-noImage"></div>
  </a>
  <a class="articleList-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  <div class="articleList-read">
    <span><?php echo the_time('Y.m.d'); ?></span>
    <span><?php the_category(' &bull; '); ?></span>
    <span><?php the_meta(); ?></span>
  </span>
</article>
