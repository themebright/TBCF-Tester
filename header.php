<!DOCTYPE html>
<html>
<head>
  <?php wp_head(); ?>
  <script>var tbcfMapStyles = [{"featureType":"landscape.man_made","elementType":"geometry","stylers":[{"color":"#f7f1df"}]},{"featureType":"landscape.natural","elementType":"geometry","stylers":[{"color":"#d0e3b4"}]},{"featureType":"landscape.natural.terrain","elementType":"geometry","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi.medical","elementType":"geometry","stylers":[{"color":"#fbd3da"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#bde6ab"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffe15f"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#efd151"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"color":"black"}]},{"featureType":"transit.station.airport","elementType":"geometry.fill","stylers":[{"color":"#cfb2db"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#a2daf2"}]}];</script>
</head>

<body <?php body_class( 'container' ); ?>>
  <nav class="navbar navbar-default" style="margin-top: 20px;">
    <div class="navbar-header">
      <a href="<?php echo home_url( '/' ); ?>" class="navbar-brand"><?php echo TBCF_THEME_NAME; ?></a>
    </div>
  </nav>

  <pre><strong>Theme Author</strong>: <?php echo TBCF_THEME_AUTHOR; ?><br>
<strong>Theme Author URI</strong>: <?php echo TBCF_THEME_AUTHOR_URI; ?><br>
<strong>Theme Name</strong>: <?php echo TBCF_THEME_NAME; ?><br>
<strong>Theme URI</strong>: <?php echo TBCF_THEME_URI; ?><br>
<strong>Theme Version</strong>: <?php echo TBCF_THEME_VERSION; ?></pre>
