<section class="entry-content">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
<div class="section-blog-post-para">
    <?php the_content(); ?>
</div>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</section>