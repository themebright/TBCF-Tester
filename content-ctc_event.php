<hr>

<article <?php post_class( 'entry' ); ?>>
  <header class="entry__header">
    <?php the_title( sprintf( '<h1 class="entry__title"><a href="%s">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
  </header>

  <div class="entry__content">
    <?php the_content(); ?>

    <hr>

    <h4>Date</h4>
    <pre><?php var_dump( tbcf_event_date() ); ?></pre>

    <h4>Time</h4>
    <pre><?php var_dump( tbcf_event_time() ); ?></pre>

    <h4>Hide time?</h4>
    <pre><?php var_dump( tbcf_event_hide_time_range() ); ?></pre>

    <h4>Time Description</h4>
    <pre><?php var_dump( tbcf_event_time_description() ); ?></pre>

    <h4>Venue</h4>
    <pre><?php var_dump( tbcf_event_venue() ); ?></pre>

    <h4>Address</h4>
    <pre><?php var_dump( tbcf_event_address() ); ?></pre>

    <h4>Show directions link?</h4>
    <pre><?php var_dump( tbcf_event_show_directions_link() ); ?></pre>

    <h4>Directions URL</h4>
    <pre><?php var_dump( tbcf_event_directions_url() ); ?></pre>

    <h4>Map</h4>
    <pre><?php var_dump( tbcf_event_map() ); ?></pre>

    <h4>Categories</h4>
    <pre><?php var_dump( tbcf_event_categories() ); ?></pre>
  </div>
</article>
