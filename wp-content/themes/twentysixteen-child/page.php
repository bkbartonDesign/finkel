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

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="finkel-home">
    		<?php if(get_field('intro')) : ?> 
                <section class="intro" id="intro">
                    <div class="section-content">
                        <?php echo get_field('intro'); ?>
                    </div>    
                </section>
            <?php endif ?>
    		<?php if(get_field('attorney_name')): ?>
                <section class="attorneys" id="attorneys">
                    <div class="section-content">
                        
                        <div class="section-title san-serif bold white-txt">
                            Attorneys
                        </div>
                        
                        <?php 
        
                            $image = get_field('attorney_image');
                            
                            if( !empty($image) ): ?>
                                
                                <div class="attorney-image">
                            	    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                </div>
                                
                        <?php endif; ?>
                        

                        <div class="attorney-title san-serif bold white-txt">
                            <?php echo get_field('attorney_name'); ?>
                        </div>
                        
                        <div class="attorney-bio">
                            <?php echo get_field('attorney_bio'); ?>
                        </div>
                    </div>
                </section>
            <?php endif ?>        
    		<?php if(get_field('areas_of_practice')):?>
                <section class="practice" id="practice">
                    <div class="section-content">
                        <?php echo get_field('areas_of_practice'); ?>
                    </div>    
                </section>
            <?php endif ?>
        </div>
	</main><!-- .site-main -->
	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
