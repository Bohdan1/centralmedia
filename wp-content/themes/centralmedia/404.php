<?php get_header() ?>

<div style="width:900px; padding:30px 0 30px 0; margin:0 auto;">
	<img src="<?php bloginfo('template_url') ?>/img/404.jpg" style="width:37%">
	<div style="float:right; margin-top:50px;">
		<h3>404 Сторінка не знайдена!</h3>
		<h5>Спробуйте повернутися на <a href="<?php echo get_home_url(); ?>" style="color:#f61c0d;">головну</a></h5>
	</div>
	
</div>

<?php get_template_part('content', 'footer') ?>

<?php get_footer() ?>
