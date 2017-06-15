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
    <?php 
      $url = "";
      $is_blog = false;
      if(!is_front_page()) {
        $url = esc_url( home_url( '/' ) );
        $is_blog = true;
      }
    ?>
    <div class="hdr-space"></div>
    <div class="hdr">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <img class="hdr-logo" src="<?php echo finkelImage("finkelLogo.png"); ?>" alt="Finkel Associates LLC">  
      </a>
      <div class="hdr-nav">
        
        <a href="<?php echo $url; ?>#about" class="hdr-nav-link">About the Firm</a>
        <a href="<?php echo $url; ?>#practice" class="hdr-nav-link">Practice Areas</a>
        <a href="<?php echo $url; ?>#professionals" class="hdr-nav-link">Professionals</a>
        <a href="<?php echo $url; ?>#clients" class="hdr-nav-link">Clients &amp; Industries</a>
        <a href="<?php echo $url; ?>#representativeMatters" class="hdr-nav-link">Representative Matters</a>
        <a href="<?php echo $url; ?>#contact" class="hdr-nav-link">Contact</a>

      </div>
      <img class="hdr-hb" src="<?php echo finkelImage("hb.png") ?>">
    </div>    
