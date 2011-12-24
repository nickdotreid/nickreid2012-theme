<?php

function nr12_header(){
	echo '<div class="container">';
	echo '<a href="/" id="nickreid_logo" class="logo nickreid">Nick Reid</a>';
	echo '</div>';
}
add_action('roots_header_inside',nr12_header);


function nr12_footer(){
	/*
	echo '<div class="container">';
	echo '</div>';
	*/
}
add_action('roots_footer_inside',nr12_footer);


?>