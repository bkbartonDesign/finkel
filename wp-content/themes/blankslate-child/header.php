<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
<?php wp_head(); ?>
</head>
<body>
    <div class="hdr-space"></div>
    <div class="hdr">
      <img class="hdr-logo" src="<?php echo finkelImage("logo.png"); ?>">  
      <div class="hdr-nav">
        <?php 
          $url = "";
          if(!is_front_page()) {
            $url = esc_url( home_url( '/' ) );
          }
        ?>
        <a href="<?php echo $url; ?>#about" class="hdr-nav-link">About</a>
        <a href="<?php echo $url; ?>#attorneys" class="hdr-nav-link">Attorneys</a>
        <a href="<?php echo $url; ?>#practice" class="hdr-nav-link">Areas of Practice</a>
        <a href="<?php echo $url; ?>#contact" class="hdr-nav-link">Contact</a>
        <a href="<?php esc_url(home_url('/')); ?>/sample-page/home/" class="hdr-nav-link">Blog</a>
      </div>
      <img class="hdr-hb" src="<?php echo finkelImage("hb.png") ?>">
    </div>    
