<hr>

<article <?php post_class( 'entry' ); ?>>
  <header class="entry__header">
    <?php the_title( sprintf( '<h1 class="entry__title"><a href="%s">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
  </header>

  <div class="entry__content">
    <?php the_content(); ?>

    <hr>

    <h4>Address</h4>
    <pre><?php var_dump( tbcf_location_address() ); ?></pre>

    <h4>Show directions link?</h4>
    <pre><?php var_dump( tbcf_location_show_directions_link() ); ?></pre>

    <h4>Directions URL</h4>
    <pre><?php var_dump( tbcf_location_directions_url() ); ?></pre>

    <h4>Phone</h4>
    <pre><?php var_dump( tbcf_location_phone() ); ?></pre>

    <h4>Email</h4>
    <pre><?php var_dump( tbcf_location_email() ); ?></pre>

    <h4>Times</h4>
    <pre><?php var_dump( tbcf_location_times() ); ?></pre>

    <h4>Map</h4>
    <pre><?php var_dump( tbcf_location_map() ); ?></pre>
  </div>
</article>
