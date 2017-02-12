<div class="five-block-with-line hide-on-med-and-down">
	<div class="big-sign-line">НОВИНИ <span></span></div>
	<div class="block-line"></div>
	<div class="small-sign-line">ОПИТУВАННЯ<img class="line-img-five" src="<?php bloginfo('template_url') ?>/img/medical-result.svg"></div>
</div>

<div class="five-block-with-line hide-on-large-only">
	<div class="big-sign-line">НОВИНИ <span>ПАРТНЕРІВ</span></div>
	<div class="block-line"></div>
</div>

<div class="row">
	<div class="col l6 s12 m6 devider">
		<div class="main-news-content-footer">
			<?php
                //show latest news
                get_template_part('template-parts/latest', 'news');
            ?>
		</div>
	</div>
	<div class="five-block-with-line hide-on-large-only">
		<div class="small-sign-line">ОПИТУВАННЯ<img class="line-img-five" src="<?php bloginfo('template_url') ?>/img/medical-result.svg"></div>
		<div class="block-line"></div>

	</div>
	<div class="col l6 s12 m6 ">
		<?php
        	//show polls
        	get_template_part('template-parts/polls');
    	?>
	</div>
</div>