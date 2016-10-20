<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
    <div class="section section-splash">
      <div class="section-contents">
        <div class="section-splash-overlay"></div>
        <div class="section-splash-hed">Finkel Associates strives to<br class="dt-break"><span class="dt-break"> </span>help you grow your business.</div>
        <img class="section-splash-continue" src="<?php echo finkelImage("scrolldown.png"); ?>">
        <!--<img class="section-splash-continue" src="images/scrolldown.png">-->
      </div>
    </div>


    <div id="about" class="section section-about">
      <div class="section-contents">
        <?php echo get_field("intro"); ?>
      </div>
    </div>
    
    <div id="attorneys" class="section section-attorneys">
      <div class="section-contents">
        <div class="section-attorneys-title section-attorneys-title-hed">Attorneys</div>
        <?php 

            $image = get_field("attorney_image");
            
            if( !empty($image) ): ?>
                
            <img class="section-attorneys-img" src="<?php echo $image["url"]; ?>" alt="<?php echo $image["alt"]; ?>" />
                
                
        <?php endif; ?>
        
        <div class="section-attorneys-title section-attorneys-title-dek">
          <?php echo get_field("attorney_name"); ?>
        </div>
        <div class="section-attorneys-para">
          <?php echo get_field("attorney_bio"); ?>
        </div>
      </div>
    </div>
  
    <div id="practice" class="section section-practice">
        <div class="section-contents">
          <?php if(get_field("areas_of_expertise")):?>
            <?php
              $field_name = "areas_of_expertise";
              $field = get_field_object($field_name);
            ?>
            <div class="section-practice-group">
                <div class="practice-hed"><?php echo $field['label']; ?></div>
                <div class="practice-dek"><?php echo get_field("areas_of_expertise"); ?></div>
            </div>
          <?php endif ?>
          
          <?php if(get_field("industries")):?>
            <?php
              $field_name = "industries";
              $field = get_field_object($field_name);
            ?>
            <div class="section-practice-group">
                <div class="practice-hed"><?php echo $field['label']; ?></div>
                <div class="practice-dek"><?php echo get_field("industries"); ?></div>
            </div>
          <?php endif ?>
          
        </div>
    </div>

   
    <div id="contact" class="section section-contact">
        <div class="section-contents">
            <div class="section-contact-hed">Contact</div>
            <?php echo do_shortcode("[wpforms id='120']"); ?>
        </div>
    </div>
    
  
<?php get_sidebar(); ?>
<?php get_footer(); ?>
