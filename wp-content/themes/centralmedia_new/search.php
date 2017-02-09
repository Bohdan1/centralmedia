<?php get_header(); ?>
	<div class="header-margin-tag">
<div class="tag-name">Ви шукали: "<?php the_search_query(); ?>"</div>
			<div class="tag-name-description"><?php
					global $wp_query;
					//echo 'За Вашим запитом знайдено ' . $wp_query->found_posts;
					$slovo = getNumEnding( $wp_query->found_posts, array('запис', 'записи', 'записів') );
					echo 'За Вашим запитом знайдено ' . $wp_query->found_posts . ' ' . $slovo;
				?></div>


				
			<div class="tag-content">
				<div class="tag-title"><a href="#" class="black-text" >Аваков каже, що ніхто не стежив за журналістами УП</a></div>
				<div class="tag-description"><a href="#" class="black-text" >Міністр внутрішніх справ Арсен Аваков заявив, що українські спецслужби та Нацполіція не стежили за працівниками "Української правди".</a></div>
				<div class="tag-date">6 ЛЮТОГО 2017, 16:02 — НОВИНИ</div>
			</div>
			<div class="tag-content">
				<div class="tag-title"><a href="#" class="black-text" >Данилюк: у меморандумі МВФ немає підвищення пенсійного віку</a></div>
				<div class="tag-description"><a href="#" class="black-text" >Меморандум співробітництва України з Міжнародним валютним фондом не передбачає підвищення пенсійного віку в рамках пенсійної реформи</a></div>
				<div class="tag-date">6 ЛЮТОГО 2017, 16:02 — СТАТТІ</div>
			</div>
			<div class="tag-content">
				<div class="tag-title"><a href="#" class="black-text" >Данилюк: у меморандумі МВФ немає підвищення пенсійного віку</a></div>
				<div class="tag-description"><a href="#" class="black-text" >Меморандум співробітництва України з Міжнародним валютним фондом не передбачає підвищення пенсійного віку в рамках пенсійної реформи</a></div>
				<div class="tag-date">6 ЛЮТОГО 2017, 16:02 — СТАТТІ</div>
			</div>
			<div class="tag-content">
				<div class="tag-title"><a href="#" class="black-text" >Данилюк: у меморандумі МВФ немає підвищення пенсійного віку</a></div>
				<div class="tag-description"><a href="#" class="black-text" >Меморандум співробітництва України з Міжнародним валютним фондом не передбачає підвищення пенсійного віку в рамках пенсійної реформи</a></div>
				<div class="tag-date">6 ЛЮТОГО 2017, 16:02 — СТАТТІ</div>
			</div>
			<div class="tag-content">
				<div class="tag-title"><a href="#" class="black-text" >Данилюк: у меморандумі МВФ немає підвищення пенсійного віку</a></div>
				<div class="tag-description"><a href="#" class="black-text" >Меморандум співробітництва України з Міжнародним валютним фондом не передбачає підвищення пенсійного віку в рамках пенсійної реформи</a></div>
				<div class="tag-date">6 ЛЮТОГО 2017, 16:02 — СТАТТІ</div>
			</div>

</div>

<?php get_footer(); ?>
