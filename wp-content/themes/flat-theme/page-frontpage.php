<?php
/**
* Template Name: Frontpage
*/
get_header();
$args = array( 'post_type'=>'zee_slider', 'orderby' => 'menu_order','order' => 'ASC' );
$sliders = get_posts( $args );
$total_sliders = count($sliders);
?>
<section id="main-slider" style="margin: 0; padding: 0;">
    <div class="carousel slide wet-asphalt">
        <ol class="carousel-indicators">

            <?php for($i = 0; $i<$total_sliders; $i++){ ?>
            <li data-target="#main-slider" data-slide-to="<?php echo $i ?>" class="<?php echo ($i==0)?'active':'' ?>"></li>
            <?php } ?>

        </ol>
        <div class="carousel-inner">
            <?php foreach ($sliders as $key => $slider) { 

                $full_img           =   wp_get_attachment_image_src( get_post_thumbnail_id( $slider->ID ), 'full');

                $slider_position    =   get_post_meta($slider->ID, 'slider_position', true );

                $boxed              =   (get_post_meta($slider->ID, 'slider_boxed', true )=='yes') ? 'boxed' : '';

                $has_button         =   (get_post_meta($slider->ID, 'slider_button_text', true )=='') ? false : true;

                $button             =   get_post_meta($slider->ID, 'slider_button_text', true );

                $button_url         =   get_post_meta($slider->ID, 'slider_button_url', true );

                $video_url          =   get_post_meta($slider->ID, 'slider_video_link', true );

                $video_type         =   get_post_meta($slider->ID, 'slider_video_type', true );

                $bg_image_url       =   get_post_meta($slider->ID, 'slider_background_image', true );

                $background_image   =   'background-image: url('.wp_get_attachment_url($bg_image_url).')';

								$bottom_right_content =  get_post_meta($slider->ID, 'wpcf-bottom-right-content', true );

                $columns            =   false;



                if( !empty($image_url) or !empty($video_url) ){

                    $columns        =   true;
                }


                if( $video_type=='youtube' ) {

                    $embed_code = '<iframe width="640" height="480" src="//www.youtube.com/embed/' . get_video_ID( $video_url ) . '?rel=0" frameborder="0" allowfullscreen></iframe>';

                } elseif( $video_type=='vimeo' ) {
                    $embed_code = '<iframe src="//player.vimeo.com/video/' . get_video_ID( $video_url ) . '?title=0&amp;byline=0&amp;portrait=0&amp;color=a22c2f" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>';
                }

                if( $full_img ){

                    $embed_code     = '<img src="' . $full_img[0] . '" alt="">';
                    $columns        =   true;
                }


                ?>

                <div class="item <?php echo ($key==0) ? 'active' : '' ?>" style="<?php echo ( $bg_image_url ) ? $background_image : '' ?>">
											<div class="col-xl-2 col-lg-3 col-md-4 col-sm-5 col-xs-12 carousel-content-left">
														<h2 class="<?php echo $boxed ?> animation animated-item-1">
																<?php echo $slider->post_title ?>
														</h2>

														<p class="<?php echo $boxed ?> animation animated-item-2">
																<?php echo do_shortcode( $slider->post_content ) ?>
														</p>
														
														<?php if( $has_button ){ ?>
														<br>
														<a class="btn btn-md animation animated-item-3" href="<?php echo $button_url ?>"><?php echo $button ?></a>
														<?php } ?>
											</div>
											<div class="col-xl-4 col-lg-6 col-md-7 col-sm-6 col-xs-12 carousel-content-bottom">
														<h2 class="<?php echo $boxed ?> animation animated-item-1">
																<?php echo $bottom_right_content;  ?>
														</h2>
														<?php if( $has_button ){ ?>
														<br>
														<a class="btn btn-md animation animated-item-3" href="<?php echo $button_url ?>"><?php echo $button ?></a>
														<?php } ?>
											</div>
                </div><!--/.item-->
                <?php } // endforeach ?>

            </div><!--/.carousel-inner-->
				<!--<div class="upcoming_events">
					<div class="title">Upcoming Events</div>
					<?php
					$query = new WP_Query(array(
						'post_type' => 'ai1ec_event',
						'posts_per_page' => 3
					));
					while ($query->have_posts()): $query->the_post(); ?>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						<br />
						<?php
					endwhile; ?>
				</div>-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="icon-angle-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="icon-angle-right"></i>
        </a>
    </section>
	
	<!--<section class="mas-grey" style="margin:3px 0px;">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 text-center">
					<div class="mas-social-front">
						<div><a href="https://twitter.com/MNAstronomy"><img src="<?php echo get_template_directory_uri() ?>/assets/images/twitter.png"/> <span>Twitter</span></a></div>
						<div><a href="https://www.facebook.com/MinnesotaAstronomicalSociety"><img src="<?php echo get_template_directory_uri() ?>/assets/images/facebook.png"/> <span>Facebook</span></a></div>
					</div>
				</div>
				<div class="col-sm-4"><div style="margin-top:40px;"><?php echo get_search_form(); ?></div></div>
				<div class="col-sm-4 text-center">
					<div class="mas-merch">
						<div><a href="#"><span>Merchandise</span> <img src="<?php echo get_template_directory_uri() ?>/assets/images/merch.png"/></a></div>
					</div>
				</div>
			</div>
		</div>
	</section>-->

    <?php the_post(); ?>
<section id="page">
    <div class="container">
        <div id="content" class="site-content" role="main">
            <?php /* The loop */ ?>
						<?php the_content(); 
						$query = new WP_Query( array( 
							'post-type' => 'post',
							'category' => 'uncategorized'
						));?>
						<h1>News</h1>
            <?php while ( $query->have_posts() ) { $query->the_post();  ?>
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<div class="entry-content">
										<a href="<?php the_permalink(); ?>"><h2 class="entry-title"><?php the_title(); ?></h2></a>
										<?php the_excerpt(); ?>
									</div>
									<br style="clear: both" />
							</article>
            <?php } ?>
        </div><!--/#content-->
    </div>
</section><!--/#page-->
    <?php //the_content(); ?>

    <?php
    get_footer();
