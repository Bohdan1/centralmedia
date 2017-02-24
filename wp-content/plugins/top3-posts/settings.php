<style>
	.top3-post-title {
		background-color: transparent;
		border: none;
		border-bottom: 1px solid #9e9e9e;
		border-radius: 0;
		outline: none;
		height: 2em;
		width: 40%;
		font-size: 1.2em;
		padding-left: 10px;
		box-shadow: none;
		box-sizing: content-box;
		transition: all 0.3s;
	}
	.top3-post-img {
		height:50px;
	}
</style>

<h1> Налаштування <?= TOP3_PLUGIN_NAME ?> </h1>

<?php
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

<form method="POST" action="">
	<p>
		<label for="block_1">Блок 1: </label>
		<input type="text" name="block1_post_title" value="<?php echo get_the_title( $block1_id ); ?>" id="block_1" class="top3-post-title">
		<?php echo '<img data-u="image" class="top3-post-img" src="' . get_the_post_thumbnail_url( $block1_id, 'thumbnail' ) . '" />'; ?>
	</p>
	<p>
		<label for="block_2">Блок 2: </label>
		<input type="text" name="block2_post_title" value="<?php echo get_the_title( $block2_id ); ?>" id="block_2" class="top3-post-title">
		<?php echo '<img data-u="image" class="top3-post-img" src="' . get_the_post_thumbnail_url( $block2_id, 'thumbnail' ) . '" />'; ?>
	</p>
	<p>
		<label for="block_3">Блок 3: </label>
		<input type="text" name="block3_post_title" value="<?php echo get_the_title( $block3_id ); ?>" id="block_3" class="top3-post-title">
		<?php echo '<img data-u="image" class="top3-post-img" src="' . get_the_post_thumbnail_url( $block3_id, 'thumbnail' ) . '" />'; ?>
	</p>
	<p>
		<input type="submit" value="Зберегти" class="button-primary">
	</p>
</form>
