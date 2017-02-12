<h1> Налаштування <?= TOP3_PLUGIN_NAME ?> </h1>

<?php 
	if ( isset($_POST['block1_post_id']) && isset($_POST['block2_post_id']) && isset($_POST['block3_post_id']) ) {
		update_option('block1_post_id', $_POST['block1_post_id']);
		update_option('block2_post_id', $_POST['block2_post_id']);
		update_option('block3_post_id', $_POST['block3_post_id']);
		echo '<p> Збережено </p>';
	}
	$posts_id = array();
	/*
	if ( get_option('block1_post_id') && get_option('block2_post_id') && get_option('block3_post_id') ) {
		$posts_id[] = get_option('block1_post_id');
		$posts_id[] = get_option('block2_post_id');
		$posts_id[] = get_option('block3_post_id');
	}
	*/
?>

<form method="POST" action="">
	<p>
		<label for="block_1">Блок 1: </label>
		<input type="text" name="block1_post_id" value="<?php echo get_option('block1_post_id'); ?>" id="block_1">
	</p>
	<p>
		<label for="block_2">Блок 2: </label>
		<input type="text" name="block2_post_id" value="<?php echo get_option('block2_post_id'); ?>" id="block_2">
	</p>
	<p>
		<label for="block_3">Блок 3: </label>
		<input type="text" name="block3_post_id" value="<?php echo get_option('block3_post_id'); ?>" id="block_3">
	</p>
	<p>
		<input type="submit" value="Зберегти" class="button-primary">
	</p>
</form>
