<?php 
/*
Template Name: Join Page
*/
function print_pricing_items() {
	global $post; ?>
	<div class="title col-xs-9 col-sm-8"><?php the_title(); ?></div>
	<div class="price col-xs-3 col-sm-2"><?=get_post_meta(get_the_ID(), 'pricing_price', true)?></div>
	<br style="clear: both;" class="visible-xs" />
	<div class="paypal_button col-xs-12 col-sm-2">
		<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<input type="hidden" name="currency_code" value="USD">
			<input type="hidden" name="no_note" value="0">
			<input type="hidden" name="cn" value="Comments, suggestions?">
			<input type="hidden" name="no_shipping" value="2">
			<input type="hidden" name="add" value="1">
			<input type="hidden" name="cmd" value="_cart">
			<input type="hidden" name="business" value="treasurer@mnastro.org">
			<input type="hidden" name="item_name" value="<?php the_title(); ?>">
			<input type="hidden" name="amount" value="<?=get_post_meta(get_the_ID(), 'pricing_price', true)?>">
			<input type="hidden" name="return" value="<?=$this_page_url?>">
			<input type="hidden" name="cancel_return" value="<?=$this_page_url?>">
			<input type="image" src="<?=get_template_directory_uri()?>/add_to_cart.png" border="0" name="I2" alt="Make payments with PayPal - it's fast, free and secure!">
		</form>
	</div>
	<br style="clear: both;" />
	<div class="content_row col-xs-12"><?php the_content(); ?></div>
	<?php
}
get_header(); ?>
<section id="page">
    <div class="container">
        <div id="content" class="site-content" role="main">
            <?php /* The loop */ ?>
            <?php while ( have_posts() ) { the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php edit_post_link( __( 'Edit', ZEETEXTDOMAIN ), '<small class="edit-link pull-right ">', '</small><div class="clearfix"></div>' ); ?>
                <?php if ( has_post_thumbnail() && ! post_password_required() ) { ?>
                <div class="entry-thumbnail">
                    <?php the_post_thumbnail(); ?>
                </div>
                <?php } ?>
                <div class="entry-content">
		<?php 
		the_content();
		$this_page_url = get_permalink();
		?>
		<div class="pricing-table membership-level">
			<div class="header-title col-xs-12"><?=get_term_by('slug', 'membership-level', 'cat_pricing')->name?></div>
		<?php
			$query = new WP_Query( array(
				'post_type' => 'zee_pricing',
				'orderby' => 'meta_value',
				'order' => 'ASC',
				'meta_key' => 'pricing_price',
				'tax_query' => array( array (
					'taxonomy' => 'cat_pricing',
					'field' => 'slug',
					'terms' => 'membership-level'
				))
			));
			while ($query->have_posts()) : $query->the_post(); ?>
				<?php print_pricing_items(); ?>
			<?php endwhile; ?>
		</div>

		<div class="pricing-table option">
			<div class="header-title col-xs-12"><?=get_term_by('slug', 'option', 'cat_pricing')->name?></div>
		<?php
			$query = new WP_Query( array(
				'post_type' => 'zee_pricing',
				'orderby' => 'meta_value',
				'order' => 'ASC',
				'meta_key' => 'pricing_price',
				'tax_query' => array( array (
					'taxonomy' => 'cat_pricing',
					'field' => 'slug',
					'terms' => 'option'
				))
			));
			while ($query->have_posts()) : $query->the_post(); ?>
				<?php print_pricing_items(); ?>
			<?php endwhile; ?>
				<div class="title col-xs-9 col-sm-8">Additional donation to the MAS General Fund to cover operating costs*</div>
				<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
				<input type="hidden" name="cn" value="Comments, suggestions?">
				<input type="hidden" name="no_note" value="0">
				<input type="hidden" name="no_shipping" value="2">
				<input type="hidden" name="item_name" value="MAS Donation">
				<input type="hidden" name="business" value="treasurer@mnastro.org">
				<input type="hidden" name="cmd" value="_cart">
				<input type="hidden" name="add" value="1">
				<input type="hidden" name="currency_code" value="USD">
				<input type="hidden" name="return" value="http://www.mnastro.org/membership/">
				<input type="hidden" name="rm" value="2">
				<input type="hidden" name="cancel_return" value="http://www.mnastro.org/membership/cancel.htm">

				<div class="price col-xs-3 col-sm-2">
					$<input type="text" size="6" name="amount" value="0.00" />
				</div>
				<br style="clear: both;" class="visible-xs" />
				<div class="paypal_button col-xs-12 col-sm-2">
					<input type="image" src="<?=get_template_directory_uri()?>/add_to_cart.png" border="0" name="I2" alt="Make payments with PayPal - it's fast, free and secure!">
				</div>
				<br style="clear: both;" />
				<div class="col-xs-12">
					* The MAS is a 501(c)(3) non-profit organization.  Tax implications of your donation may depend on individual circumstances. Please consult with a tax advisor.
				</div>
				</form>
				<br style="clear: both;" />
				<div class="col-xs-12 col-sm-10"></div>
				<div class="paypal_button col-xs-12 col-sm-2">
					<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<input type="hidden" name="business" value="treasurer@mnastro.org">
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="display" value="1">
						<input type="submit" src="https://www.paypal.com/en_US/i/btn/view_cart.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!" width="130" height="32" value="View Cart">
					</form>
				</div>
				</div>
		</div>
		
            </article>
            <?php } ?>
        </div><!--/#content-->
    </div>
</section><!--/#page-->
<?php get_footer();
