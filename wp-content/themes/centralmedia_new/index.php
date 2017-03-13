<?php 
	//header
	get_header();

	//content-home
	if ( wp_is_mobile() ) {
		get_template_part('template-parts/content-home', 'mobile');
	}
	else {
		get_template_part('template-parts/content-home', 'desktop');
	}

	//footer
	get_footer();
?>
