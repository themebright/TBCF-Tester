<hr>

<article <?php post_class( 'entry' ); ?>>
  <header class="entry__header">
    <?php the_title( sprintf( '<h1 class="entry__title"><a href="%s">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
  </header>

  <div class="entry__content">
    <?php the_content(); ?>
  </div>
</article>
