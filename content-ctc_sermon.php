<hr>

<article <?php post_class( 'entry' ); ?>>
  <header class="entry__header">
    <?php the_title( sprintf( '<h1 class="entry__title"><a href="%s">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
  </header>

  <div class="entry__content">
    <?php the_content(); ?>

    <hr>

    <h4>Has full text?</h4>
    <pre><?php var_dump( tbcf_sermon_has_full_text() ); ?></pre>

    <h4>Video</h4>
    <pre><?php var_dump( tbcf_sermon_video() ); ?></pre>

    <h4>Audio</h4>
    <pre><?php var_dump( tbcf_sermon_audio() ); ?></pre>

    <h4>PDF</h4>
    <pre><?php var_dump( tbcf_sermon_pdf() ); ?></pre>

    <h4>Topics</h4>
    <pre><?php var_dump( tbcf_sermon_topics() ); ?></pre>

    <h4>Books</h4>
    <pre><?php var_dump( tbcf_sermon_books() ); ?></pre>

    <h4>Series</h4>
    <pre><?php var_dump( tbcf_sermon_series() ); ?></pre>

    <h4>Speakers</h4>
    <pre><?php var_dump( tbcf_sermon_speakers() ); ?></pre>

    <h4>Tags</h4>
    <pre><?php var_dump( tbcf_sermon_tags() ); ?></pre>
  </div>
</article>
