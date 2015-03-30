<!DOCTYPE html>
<html>
<head>
  <?php wp_head(); ?>
</head>

<body <?php body_class( 'container' ); ?>>
  <nav class="navbar navbar-default" style="margin-top: 20px;">
    <div class="navbar-header">
      <a href="<?php echo home_url( '/' ); ?>" class="navbar-brand"><?php echo TBF_THEME_NAME; ?></a>
    </div>
  </nav>

  <pre><strong>Theme Author</strong>: <?php echo TBF_THEME_AUTHOR; ?><br>
<strong>Theme Author URI</strong>: <?php echo TBF_THEME_AUTHOR_URI; ?><br>
<strong>Theme Name</strong>: <?php echo TBF_THEME_NAME; ?><br>
<strong>Theme URI</strong>: <?php echo TBF_THEME_URI; ?><br>
<strong>Theme Version</strong>: <?php echo TBF_THEME_VERSION; ?></pre>
