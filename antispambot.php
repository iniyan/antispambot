<?php
/*
Plugin Name: AntiSpambot
Plugin URI: http://iniyan.in/plugins/antispambot
Description: Protect your email address from spam bots. In other words "fool the bots". With the "nospam" short code, you can use antispambot function on text widgets too.  
Version: 1.0.1
Author: iniyan
Author URI: http://iniyan.in
License: GPL2
*/

/** Adding Shortcode **/
function iniyan_antispambot( $atts, $content = null ) {
	return '<a href=mailto:' . antispambot( $content ) . '>' . antispambot( $content, 0 ) . '</a>';
}
add_shortcode( 'nospam', 'iniyan_antispambot');

/** Enable shortcode on Text widgets **/
	add_filter( 'widget_text', 'shortcode_unautop');
	add_filter('widget_text', 'do_shortcode');

/* Enable shortcode on  Excerpts */
	
	add_filter( 'the_excerpt', 'shortcode_unautop');
	add_filter( 'the_excerpt', 'do_shortcode');
	
/* Enable shortcodes in Category, Tag, and Taxonomy Descriptions */
	
	add_filter( 'term_description', 'shortcode_unautop');
	add_filter( 'term_description', 'do_shortcode' );
