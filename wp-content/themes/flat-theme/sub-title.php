<?php

// Breadcrumbs
//require_once(get_template_directory(). '/lib/breadcrumbs.php');

global $post;

if ( is_singular( 'ai1ec_event' ) ) {

    $title = "Event";

    unset($sub_title);

} elseif ( is_single() ) {

    $title = zee_option('zee_blog_title');

    $sub_title = zee_option('zee_blog_subtitle');

} elseif ( is_category() ) {

    $title = __("Category", ZEETEXTDOMAIN) . " : " . single_cat_title("", false);

    $sub_title = zee_option('zee_blog_subtitle');

} elseif ( is_archive() ) {
    if (is_day()) {
        $title = __("Daily Archives", ZEETEXTDOMAIN) . " : " . get_the_date();

    } elseif (is_month()) {
        $title = __("Monthly Archives", ZEETEXTDOMAIN) . " : " . get_the_date("F Y");

    } elseif (is_year()) {
        $title = __("Yearly Archives", ZEETEXTDOMAIN) . " : " . get_the_date("Y");

    } else {
        $title = __("Blog Archives", ZEETEXTDOMAIN);

    }

    $sub_title = zee_option('zee_blog_subtitle');

} elseif ( is_tag() ) {
    $title = $return .= __("Tag", ZEETEXTDOMAIN) . " : " . single_tag_title("", false);
} elseif ( is_author() ) {
    $title = __("Author: ", ZEETEXTDOMAIN);
} elseif ( is_search() ) {
    $title = __("Search results for", ZEETEXTDOMAIN) . " : " . get_search_query();
} elseif ( is_tax( 'portfolios' ) ) {
    $title = __("Portfolio", ZEETEXTDOMAIN);
} elseif ( is_home() and !is_front_page() ) {

    $page = get_queried_object();

    if( is_null( $page ) ){
        $title = zee_option('zee_blog_title');
        $sub_title = zee_option('zee_blog_subtitle');
    } else {

     $ID = $page->ID;
     $title = $page->post_title;
     $sub_title = get_post_meta($ID, 'page_subtitle', true);
 }


} elseif ( (is_page()) && (!is_front_page()) ) {
    $page = get_queried_object();

    $ID = $page->ID;

    $title = $page->post_title;
    $sub_title = get_post_meta($ID, 'page_subtitle', true);

} elseif( is_front_page() ){

    unset($title);

}

if (isset($title))
{
	echo ('<section id="title" class="emerald">
    <div class="container">
    <div class="row">
    <div class="col-sm-8">
    <h1>'.$title.'</h1>
    <p>'.$sub_title.'</p>
    </div>
    <div class="col-sm-4">');
	get_search_form();
	echo '</div>
    </div>';
	print_subnav();
	echo '</div></section>';
}
