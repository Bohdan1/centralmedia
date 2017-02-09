<?php get_header(); ?>
<div class="header-margin-tag">
	<div class="row">
		<div class="col l8"> 
		<div class="tag-name">освіта</div>
			<div class="tag-name-description">Матеріали за темою</div>
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
				<div class="tag-title"><a href="#" class="black-text" >Аваков каже, що ніхто не стежив за журналістами УП</a></div>
				<div class="tag-description"><a href="#" class="black-text" >Міністр внутрішніх справ Арсен Аваков заявив, що українські спецслужби та Нацполіція не стежили за працівниками "Української правди".</a></div>
				<div class="tag-date">6 ЛЮТОГО 2017, 16:02 — НОВИНИ</div>
			</div>
			<div class="tag-content">
				<div class="tag-title"><a href="#" class="black-text" >Данилюк: у меморандумі МВФ немає підвищення пенсійного віку</a></div>
				<div class="tag-description"><a href="#" class="black-text" >Меморандум співробітництва України з Міжнародним валютним фондом не передбачає підвищення пенсійного віку в рамках пенсійної реформи</a></div>
				<div class="tag-date">6 ЛЮТОГО 2017, 16:02 — СТАТТІ</div>
			</div>

		</div>
		<div class="col l4">
		<div class="block-with-line hide-on-small-only">
			<div class="big-sign-line">ТОП <span>СТАТТІ</span></div>
	<div class="block-line"></div>
	</div>
			<?php 
			$args = array(
				'post_type' => 'articles',
				'posts_per_page' => 4,
				'publish' => true,
				'orderby' => 'date',
				'order' => 'DESC'
			);
			$query = new WP_Query( $args );
			if( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post();
					echo '
						<div class="col l12 s12 m12">

							<div class="second-article-block" style="background-image: url(' . get_the_post_thumbnail_url() . ');">
								<div class="mask">
									<div class="view-count">
										<img class="count-width" src="' . get_stylesheet_directory_uri() . '/img/eye.svg">
										<span class="count-number">' . getPostViews( get_the_ID() ) . '</span>
									</div>
									<div class="main-article-content-box">
										<div class="title-tag">
											<a href="#" class="no-hover-blog">Родина</a>
										</div>
										<div class="box-title fix-mob-article ">
											<a href="' . get_the_permalink() .'">' . short_post_title(75) . '</a>
										</div>
										<div class="box-title-small fix-mob-article ">
											<a href="' . get_the_permalink() .'">';
												echo short_post_desc(90) . '
											</a>
										</div>
										<div class="box-title-time fix-mob-article">' . get_the_time('d.m.Y') . '</div>
									</div>
								</div>
							</div>
						</div>';
				}
			}

		?>
		</div>
	</div>
</div>

<?php get_template_part('content', 'footer') ?>

<?php get_footer(); ?>