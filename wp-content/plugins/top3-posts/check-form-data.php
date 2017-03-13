<?php
	//Визначення по ID
	
	//перевірка форми для головної сторінки
	if ( $_POST['homepage_block'] ) {
		$homepage_block1_id = $_POST['homepage_block1_post_id'];
		$homepage_block2_id = $_POST['homepage_block2_post_id'];
		$homepage_block3_id = $_POST['homepage_block3_post_id'];

		//провіряємо чи були всі поля заповнені
		if ( !empty( $homepage_block1_id) && !empty( $homepage_block2_id ) && !empty( $homepage_block3_id ) ) {
			//змінні для перевірки чи оновлені усі поля
			$update_block1 = false;
			$update_block2 = false;
			$update_block3 = false;

			//якщо в базі існує запис з переданим ID, то оновлюємо значення змінної
			if ( get_post( $homepage_block1_id ) ) {
				update_option('homepage_block1_post_id', $homepage_block1_id );
				$update_block1 = true;
			}
			else {
				echo '<p> В поле Блок 1 для головної сторінки введено неіснуючий ID </p>';
			}
			
			//якщо в базі існує запис з переданим ID, то оновлюємо значення змінної
			if ( get_post( $homepage_block2_id ) ) {
				update_option('homepage_block2_post_id', $homepage_block2_id );
				$update_block2 = true;
			}
			else {
				echo '<p> В поле Блок 2 для головної сторінки введено неіснуючий ID </p>';
			}
			
			//якщо в базі існує запис з переданим ID, то оновлюємо значення змінної
			if ( get_post( $homepage_block3_id ) ) {
				update_option('homepage_block3_post_id', $homepage_block3_id );
				$update_block3 = true;
			}
			else {
				echo '<p> В поле Блок 3 для головної сторінки введено неіснуючий ID </p>';
			}
			
			//якщо оновлені усі значення полів, то виводимо повідомлення
			if ( $update_block1 && $update_block2 && $update_block3 ) {
				echo '<p> Налаштування для головної сторінки збережено </p>';
			}
		}
		//якщо не заповнене хоча б одне з полів
		else {
			echo '<p> Не всі поля для головної сторінки заповнені! </p>';
		}
	}


	//перевірка форми для архіву відео
	if ( $_POST['video_block'] ) {
		$video_block1_id = $_POST['video_block1_post_id'];
		$video_block2_id = $_POST['video_block2_post_id'];
		$video_block3_id = $_POST['video_block3_post_id'];

		//провіряємо чи були всі поля заповнені
		if ( !empty( $video_block1_id) && !empty( $video_block2_id ) && !empty( $video_block3_id ) ) {
			//змінні для перевірки чи оновлені усі поля
			$update_block1 = false;
			$update_block2 = false;
			$update_block3 = false;

			//якщо в базі існує запис з переданим ID, то оновлюємо значення змінної
			if ( get_post( $video_block1_id ) ) {
				update_option('video_block1_post_id', $video_block1_id );
				$update_block1 = true;
			}
			else {
				echo '<p> В поле Блок 1 для архіву відео введено неіснуючий ID </p>';
			}
			
			//якщо в базі існує запис з переданим ID, то оновлюємо значення змінної
			if ( get_post( $video_block2_id ) ) {
				update_option('video_block2_post_id', $video_block2_id );
				$update_block2 = true;
			}
			else {
				echo '<p> В поле Блок 2 для архіву відео введено неіснуючий ID </p>';
			}
			
			//якщо в базі існує запис з переданим ID, то оновлюємо значення змінної
			if ( get_post( $video_block3_id ) ) {
				update_option('video_block3_post_id', $video_block3_id );
				$update_block3 = true;
			}
			else {
				echo '<p> В поле Блок 3 для архіву відео введено неіснуючий ID </p>';
			}
			
			//якщо оновлені усі значення полів, то виводимо повідомлення
			if ( $update_block1 && $update_block2 && $update_block3 ) {
				echo '<p> Налаштування для архіву відео збережено </p>';
			}
		}
		//якщо не заповнене хоча б одне з полів
		else {
			echo '<p> Не всі поля для архіву відео заповнені! </p>';
		}
	}


	//перевірка форми для архіву статтей
	if ( $_POST['articles_block'] ) {
		$articles_block1_id = $_POST['articles_block1_post_id'];
		$articles_block2_id = $_POST['articles_block2_post_id'];
		$articles_block3_id = $_POST['articles_block3_post_id'];

		//провіряємо чи були всі поля заповнені
		if ( !empty( $articles_block1_id) && !empty( $articles_block2_id ) && !empty( $articles_block3_id ) ) {
			//змінні для перевірки чи оновлені усі поля
			$update_block1 = false;
			$update_block2 = false;
			$update_block3 = false;

			//якщо в базі існує запис з переданим ID, то оновлюємо значення змінної
			if ( get_post( $articles_block1_id ) ) {
				update_option('articles_block1_post_id', $articles_block1_id );
				$update_block1 = true;
			}
			else {
				echo '<p> В поле Блок 1 для архіву статтей введено неіснуючий ID </p>';
			}
			
			//якщо в базі існує запис з переданим ID, то оновлюємо значення змінної
			if ( get_post( $articles_block2_id ) ) {
				update_option('articles_block2_post_id', $articles_block2_id );
				$update_block2 = true;
			}
			else {
				echo '<p> В поле Блок 2 для архіву статтей введено неіснуючий ID </p>';
			}
			
			//якщо в базі існує запис з переданим ID, то оновлюємо значення змінної
			if ( get_post( $articles_block3_id ) ) {
				update_option('articles_block3_post_id', $articles_block3_id );
				$update_block3 = true;
			}
			else {
				echo '<p> В поле Блок 3 для архіву статтей введено неіснуючий ID </p>';
			}
			
			//якщо оновлені усі значення полів, то виводимо повідомлення
			if ( $update_block1 && $update_block2 && $update_block3 ) {
				echo '<p> Налаштування для архіву статтей збережено </p>';
			}
		}
		//якщо не заповнене хоча б одне з полів
		else {
			echo '<p> Не всі поля для архіву статтей заповнені! </p>';
		}
	}
	

	/* Визначення по заголовку
	$block1_title = $_POST['block1_post_title'];
	//$block1_title = str_replace('%"%', 'sdgsdgsf', $block1_title);
	//var_dump( $block1_title );

	$block1_id = get_page_by_title( $block1_title, OBJECT, array('news', 'articles', 'video', 'streams') );
	$block1_id = $block1_id->ID;

	$block2_title = $_POST['block2_post_title'];
	$block2_id = get_page_by_title( $block2_title, OBJECT, array('news', 'articles', 'video', 'streams') );
	$block2_id = $block2_id->ID;

	$block3_title = $_POST['block3_post_title'];
	$block3_id = get_page_by_title( $block3_title, OBJECT, array('news', 'articles', 'video', 'streams') );
	$block3_id = $block3_id->ID;
	
	if ( $block1_id != 0 && $block2_id != 0 && $block3_id != 0 ) {
		update_option('block1_post_id', $block1_id );
		update_option('block2_post_id', $block2_id );
		update_option('block3_post_id', $block3_id );
		echo '<p> Збережено </p>';
	}
	else {
		$block1_id = get_option('block1_post_id');
		$block2_id = get_option('block2_post_id');
		$block3_id = get_option('block3_post_id');
	}
	*/

	/* Визначення по url
	$block1_url = $_POST['block1_post_url'];
	$block1_id = url_to_postid( $block1_url );

	$block2_url = $_POST['block2_post_url'];
	$block2_id = url_to_postid( $block2_url );

	$block3_url = $_POST['block3_post_url'];
	$block3_id = url_to_postid( $block3_url );
	
	if ( $block1_id != 0 && $block2_id != 0 && $block3_id != 0 ) {
		update_option('block1_post_id', $block1_id );
		update_option('block2_post_id', $block2_id );
		update_option('block3_post_id', $block3_id );
		echo '<p> Збережено </p>';
	}
	*/
?>