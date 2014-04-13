<?php
/**
* Template Name: Full Width
*/
get_header();
?>
            <?php /* The loop */ ?>
            <?php while ( have_posts() ) { the_post(); ?>
                <?php edit_post_link( __( 'Edit', ZEETEXTDOMAIN ), '<small class="edit-link pull-right ">', '</small><div class="clearfix"></div>' ); ?>
                <?php if ( has_post_thumbnail() && ! post_password_required() ) { ?>
                <div class="entry-thumbnail">
                    <?php the_post_thumbnail(); ?>
                </div>
                <?php } ?>
                    <?php the_content(); ?>
                    <?php zee_link_pages(); ?>
            <?php// comments_page(); ?>
            <?php } ?>
<?php get_footer();
