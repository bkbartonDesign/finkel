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
    
    <div id="practice" class="section section-practice bg-lg">
        <div class="section-contents">
          <div class="section-title t-dg">Practice Areas</div>
          <?php 
            if( have_rows('practice_area') ): 
              while( have_rows('practice_area') ): the_row(); 
                $title = get_sub_field('area_title');
                $tag = get_sub_field('area_tagline');
                $list = get_sub_field('area_list');
          ?>
            
            <div class="pa pa-bus-law bg-w">
              <div class="pa-title">
                <span class="pa-list-control">
                  <span class="icon"><i class="fa fa-chevron-up" aria-hidden="true"></i></span>
                  <span class="icon hidden"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                </span>
                <span class="pa-title-text">
                  <span class="pa-hed-type"><?php echo $title ?></span> 
                  <span class="pa-tag serif"><?php echo $tag ?></span>
                </span>  
              </div>
              <div class="pa-list hidden serif">
                <?php echo $list ?>
              </div>
            </div>
              <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
    
    <div id="professionals" class="section section-attorneys">
      <div class="section-contents">
        <div class="section-attorneys-title section-attorneys-title-hed">Attorneys</div>
        <?php 
            if( have_rows('professionals') ): 
              while( have_rows('professionals') ): the_row(); 
                $name = get_sub_field('attorney_name');
                $tag = get_sub_field('attorney_tag');
                $image = get_sub_field('attorney_image');
                $bio = get_sub_field('attorney_bio');

                if( !empty($image) ): ?>
                
                  <img class="section-attorneys-img" src="<?php echo $image; ?>" alt="" />
                
                <?php endif; ?>
        
                <div class="section-attorneys-title section-attorneys-title-dek">
                  <p> <?php echo $name;  ?> </p>
                  <?php if(!empty($tag)) :?>
                    <p> <?php echo $tag;  ?> </p>
                  <?php endif; ?>
                </div>
                <div class="section-attorneys-para">
                  <?php echo $bio; ?>
                </div>
              <?php endwhile; ?>
            <?php endif; ?>
      </div>
    </div>

    <div id="clients" class="section section-clients">
      <div class="section-contents">
        <?php 
            if( have_rows('clients') ): 
              while( have_rows('clients') ): the_row(); 
                $title = get_sub_field('section_title');
                $list = get_sub_field('section_list');
        ?>
        <div class="section-clients-group">
          <div class="clients-hed"><?php echo $title; ?></div>
          <div class="clients-dek"><?php echo $list; ?></div>
        </div>      
                
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>

   <div id="representativeMatters" class="section section-rep">
      <div class="section-contents">
        <div class="section-title">Representative Matters</div>
        <?php 
            if( have_rows('representative_matters') ): 
              while( have_rows('representative_matters') ): the_row(); 
                $title = get_sub_field('section_title');
                $list = get_sub_field('section_list');
        ?>
        <div class="list-title"> <?php echo $title; ?> </div>
        <div class="list serif"> <?php echo $list; ?> </div>
              <?php endwhile; ?>
            <?php endif; ?>  
          
      </div>
    </div>
    
   <div id="contact" class="section section-contact">
      <div class="section-contents">
        <div class="section-title">Contact</div>
          Finkel Associates LLC</br>
          68 3rd Street, Suite 122</br>
          Brooklyn, NY 11231</br>
          <a href="tel:1-718-840-7446">1(718) 840‐7446</a></br>
          <a href="mailto:Inquire@finkelassociates.com">inquire@finkelassociates.com</a> 
      </div>
    </div>
    
  
<?php get_sidebar(); ?>
<?php get_footer(); ?>
