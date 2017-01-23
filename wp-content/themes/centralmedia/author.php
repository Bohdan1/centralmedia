<?php get_header(); ?>

<div class="row content">
	<div class="col l9 s12 m6 all-blogs">
<!-- 	<?php 
		if ( have_posts() ) :
			while ( have_posts() ) : the_post(); // Start the Loop.
				$author_id = get_the_author_meta('ID');
	?>
				<div class="col l12 m12 s12">
					<img src="<?php echo get_wp_user_avatar_src( $author_id ); ?>" alt="user" width="5%" class="blogger-crop-photo top10-blogger-photo-pos-single">
					<div class="top10-blogger-name-single">
						<div><?php echo get_the_author_meta('first_name'); ?></div>
						<div><?php echo get_the_author_meta('last_name'); ?></div>
					</div>
				</div>
				<div class="single-blogs-sign "><?php the_title(); ?></div>
				<div class="text-blog-single">
					<?php the_content(); ?>
				</div>
	<?php
			endwhile; // End the loop.
			echo '<div class="clear"></div>';
			the_posts_pagination( $pagination_args );
			wp_reset_postdata();
		else :
			// If no content, include the "No posts found" template.
			echo '<div> Блогів не знайдено </div>';
		endif;
	?> -->
	<div class="col l12 m12 s12">
					<a href="#"><img src="http://centralmedia/wp-content/uploads/2017/01/ava1.jpg" alt="user" width="10%" class="blogger-crop-photo top10-blogger-photo-pos-single"></a>
					<div class="top10-blogger-name-single">
						<div><a href="#">Ім'я Прізвище</a></div>
						<div class="about-author">
							(нар. 29 вересня 1976, с. Двірківщина, Яготинський район, Київська область) — український футболіст, виступав за київське «Динамо», «Мілан» та лондонське «Челсі». Заслужений майстер спорту України з 2003 року. Нагороджений найвищою державною відзнакою — «Герой України».
						</div>
					</div>
				</div>

	<div class="col l12 m12 s12">
		<div class="one-user-blog-name"><a href="#">Компроміс з окупантами неможливий. Росія має зменшувати амбіції.</a></div>

		<div class="one-user-blog-text">Віктору Пінчуку ніяк не вдається нав’язати суспільству дискусію про компроміси ціною втрати частини території України.

		Спочатку сотні блогерів фальшиво обурювалися відсутністю реакції з боку влади, ніби не помічаючи, що Президент підтвердив свою незмінну позицію перед найбільшою телевізійною аудиторією в країні.</div>
	</div>
	<div class="col l12 m12 s12">
		<div class="one-user-blog-name"><a href="#">Компроміс з окупантами неможливий. Росія має зменшувати амбіції.</a></div>

		<div class="one-user-blog-text">Віктору Пінчуку ніяк не вдається нав’язати суспільству дискусію про компроміси ціною втрати частини території України.

		Спочатку сотні блогерів фальшиво обурювалися відсутністю реакції з боку влади, ніби не помічаючи, що Президент підтвердив свою незмінну позицію перед найбільшою телевізійною аудиторією в країні.</div>
	</div>
	<div class="col l12 m12 s12">
		<div class="one-user-blog-name"><a href="#">Компроміс з окупантами неможливий. Росія має зменшувати амбіції.</a></div>

		<div class="one-user-blog-text">Віктору Пінчуку ніяк не вдається нав’язати суспільству дискусію про компроміси ціною втрати частини території України.

		Спочатку сотні блогерів фальшиво обурювалися відсутністю реакції з боку влади, ніби не помічаючи, що Президент підтвердив свою незмінну позицію перед найбільшою телевізійною аудиторією в країні.</div>
	</div>
	<div class="col l12 m12 s12">
		<div class="one-user-blog-name"><a href="#">Компроміс з окупантами неможливий. Росія має зменшувати амбіції.</a></div>

		<div class="one-user-blog-text">Віктору Пінчуку ніяк не вдається нав’язати суспільству дискусію про компроміси ціною втрати частини території України.

		Спочатку сотні блогерів фальшиво обурювалися відсутністю реакції з боку влади, ніби не помічаючи, що Президент підтвердив свою незмінну позицію перед найбільшою телевізійною аудиторією в країні.</div>
	</div>
	<div class="col l12 m12 s12">
		<div class="one-user-blog-name"><a href="#">Компроміс з окупантами неможливий. Росія має зменшувати амбіції.</a></div>

		<div class="one-user-blog-text">Віктору Пінчуку ніяк не вдається нав’язати суспільству дискусію про компроміси ціною втрати частини території України.

		Спочатку сотні блогерів фальшиво обурювалися відсутністю реакції з боку влади, ніби не помічаючи, що Президент підтвердив свою незмінну позицію перед найбільшою телевізійною аудиторією в країні.</div>
	</div>
	<div class="col l12 m12 s12">
		<div class="one-user-blog-name"><a href="#">Компроміс з окупантами неможливий. Росія має зменшувати амбіції.</a></div>

		<div class="one-user-blog-text">Віктору Пінчуку ніяк не вдається нав’язати суспільству дискусію про компроміси ціною втрати частини території України.

		Спочатку сотні блогерів фальшиво обурювалися відсутністю реакції з боку влади, ніби не помічаючи, що Президент підтвердив свою незмінну позицію перед найбільшою телевізійною аудиторією в країні.</div>
	</div>

	</div>

	

	<div class="col l3 s12 m6">
		<div class="top10-same-blogger-states">Дивіться також:</div>
		
		<?php 
			 $args = array(
                'post_type' => 'blogs',
                'numberposts' => 10,
                'publish' => true,
                'orderby' => 'date',
                'order' => 'DESC'
            );
            $myposts = get_posts( $args );

            foreach( $myposts as $post ){
            	setup_postdata($post);
        ?>

        <div class="top10-same-blogger-states-list">
			<div class="top10-same-blogger-states-list-name ">
				<a href="<?php the_permalink(); ?>" class="hover-link">
					<?php the_title(); ?>
				</a>
			</div><br>
			<div class="top10-same-blogger-states-list-text">
				
					<?php
						short_desc_post(100);		// display short content (100 symbols)
					?>
				
			</div>
		</div>
        <?php
    		} /* end foreach */
			wp_reset_postdata();
		?>
	</div>
</div>
<br>

<?php get_template_part('content', 'footer') ?>

<?php get_footer(); ?>