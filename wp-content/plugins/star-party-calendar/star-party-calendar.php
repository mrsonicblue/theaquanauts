<?php
/**
 * Plugin Name: Star Party Calendar
 * Plugin URI: http://example.com
 * Description: To The Moon!
 * Version: 1.0
 * Author: Benny
 * Author URI: http://example.com
 * License: None
 */

function spc_starparty( $atts ){

	 
	// the query
	$the_query = new WP_Query( 'category_name=starparty' ); ?>

	<?php if ( $the_query->have_posts() ) : ?>

	  <!-- pagination here -->

	  <!-- the loop -->
	  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<h2><?php the_title(); ?></h2>
	  <?php endwhile; ?>
	  <!-- end of the loop -->

	  <!-- pagination here -->

	  <?php wp_reset_postdata(); ?>

	<?php else:  ?>
	  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>

	<?php return 'aklsdjaskldjalksdj lkasdjkl asjd'; 
}
add_shortcode('starparty', 'spc_starparty');

?>
