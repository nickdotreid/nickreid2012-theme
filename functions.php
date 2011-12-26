<?php

add_action( 'widgets_init', 'nr_register_sidebars' );

function nr_register_sidebars(){
	register_sidebar(array(
	  'name' => 'Footer_Right_Sidebar',
	  'id' => 'footer-right-sidebar',
	  'description' => 'Widgets in this area will be shown on the right-hand side of the footer.',
	  'before_title' => '<h3>',
	  'after_title' => '</h3>'
	));
	register_sidebar(array(
	  'name' => 'Footer_Left_Sidebar',
	  'id' => 'footer-left-sidebar',
	  'description' => 'Widgets in this area will be shown on the left-hand side of the footer.',
	  'before_title' => '<h3>',
	  'after_title' => '</h3>'
	));
}

function nr12_head(){
	echo '<link rel="stylesheet" href="'.get_bloginfo('stylesheet_directory').'/css/full_styles.css" />';
}
add_action('roots_head',nr12_head);

function nr12_header(){
	echo '<div class="container">';
	echo '<a href="/" id="nickreid_logo" class="logo nickreid">Nick Reid</a>';
	echo '</div>';
}
add_action('roots_header_inside',nr12_header);


function nr12_footer(){
	echo '<div class="container">';
	echo '<ul class="sidebar left">';
	dynamic_sidebar( 'Footer_Left_Sidebar' );
	echo '</ul>';
	echo '<ul class="sidebar right">';
	dynamic_sidebar( 'Footer_Right_Sidebar' );
	echo '</ul>';
	echo '</div>';
}
add_action('roots_footer_inside',nr12_footer);

function nr12_top_content(){
	echo '<div id="top_content"><div id="top_content_inside" class="container">';
}
add_action('roots_header_before',nr12_top_content);

function nr12_top_content_bottom(){
	echo '</div></div>';
}
add_action('roots_footer_before',nr12_top_content_bottom);


function nr12_home_col_top(){
	if(is_front_page()){
		echo '<div class="col">';
	}
}
add_action('roots_header_before',nr12_home_col_top);

function nr12_home_col_bottom(){
	if(is_front_page()){
		echo '</div></div></div>';
	}
}
add_action('roots_main_after',nr12_home_col_bottom);

function nr12_register_front_page_widgets(){
	register_sidebar(array(
	  'name' => 'Front_Page_Widgets',
	  'id' => 'front_page_widgets',
	  'description' => 'Widgets to show on front page',
	  'before_title' => '<h2>',
	  'after_title' => '</h2>'
	));
}
add_action( 'widgets_init', 'nr12_register_front_page_widgets' );

function nr12_front_page_widgets(){
	if(is_front_page()){
		echo '<ul class="col">';
		dynamic_sidebar( 'Front_Page_Widgets' );
		echo '</ul>';
	}
}
add_action('roots_sidebar_before',nr12_front_page_widgets);

?>