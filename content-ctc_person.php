<hr>

<article <?php post_class( 'entry' ); ?>>
  <header class="entry__header">
    <?php the_title( sprintf( '<h1 class="entry__title"><a href="%s">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
  </header>

  <div class="entry__content">
    <?php the_content(); ?>

    <hr>

    <h4>Position</h4>
    <pre><?php var_dump( tbcf_person_position() ); ?></pre>

    <h4>Phone</h4>
    <pre><?php var_dump( tbcf_person_phone() ); ?></pre>

    <h4>Email</h4>
    <pre><?php var_dump( tbcf_person_email() ); ?></pre>

    <h4>URLs</h4>
    <pre><?php var_dump( tbcf_person_urls() ); ?></pre>

    <h4>Groups</h4>
    <pre><?php var_dump( tbcf_person_groups() ); ?></pre>
  </div>
</article>
