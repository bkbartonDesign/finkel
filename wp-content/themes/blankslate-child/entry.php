<article id="post-<?php the_ID(); ?>" <?php post_class("section-contents"); ?>>
    <section class="section-blog-post">
            <?php if ( !is_search() ) get_template_part( 'entry', 'meta' ); ?>
        
            <a  href="<?php the_permalink(); ?>" 
                title="<?php the_title_attribute(); ?>" 
                rel="bookmark"
                class="section-blog-post-title">
                    <?php the_title(); ?>
            </a>
            
            <?php edit_post_link(); ?>
            <?php get_template_part( 'entry', ( is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
            <?php if ( !is_search() ) get_template_part( 'entry-footer' ); ?>
    </section>    
</article>