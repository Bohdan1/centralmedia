<style>
	.top3-post-title {
		background-color: transparent;
		border: none;
		border-bottom: 1px solid #9e9e9e;
		border-radius: 0;
		outline: none;
		height: 2em;
		width: 10%;
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

<?php
	include 'check-form-data.php';
?>

<h1> Налаштування Топ-3 публікацій </h1>

<h2> Блок для головної сторінки: </h2>
<?php
	$homepage_block1_id = get_option('homepage_block1_post_id');
	$homepage_block2_id = get_option('homepage_block2_post_id');
	$homepage_block3_id = get_option('homepage_block3_post_id');
?>
<form method="POST" action="">
	<input type="hidden" name="homepage_block" value="true">
	<p>
		<label for="homepage_block_1">Блок 1: </label>
		<input type="text" name="homepage_block1_post_id" value="<?php echo $homepage_block1_id; ?>" id="homepage_block_1" class="top3-post-title">
		<?php echo '<img data-u="image" class="top3-post-img" src="' . get_the_post_thumbnail_url( $homepage_block1_id, 'thumbnail' ) . '" />'; ?>
		<span><?php echo get_the_title( $homepage_block1_id ); ?></span>
	</p>
	<p>
		<label for="homepage_block_2">Блок 2: </label>
		<input type="text" name="homepage_block2_post_id" value="<?php echo $homepage_block2_id; ?>" id="homepage_block_2" class="top3-post-title">
		<?php echo '<img data-u="image" class="top3-post-img" src="' . get_the_post_thumbnail_url( $homepage_block2_id, 'thumbnail' ) . '" />'; ?>
		<span><?php echo get_the_title( $homepage_block2_id ); ?></span>
	</p>
	<p>
		<label for="homepage_block_3">Блок 3: </label>
		<input type="text" name="homepage_block3_post_id" value="<?php echo $homepage_block3_id; ?>" id="homepage_block_3" class="top3-post-title">
		<?php echo '<img data-u="image" class="top3-post-img" src="' . get_the_post_thumbnail_url( $homepage_block3_id, 'thumbnail' ) . '" />'; ?>
		<span><?php echo get_the_title( $homepage_block3_id ); ?></span>
	</p>
	<p>
		<input type="submit" value="Зберегти" class="button-primary">
	</p>
</form>
<hr>


<h2> Блок для архіву відео: </h2>
<?php
	$video_block1_id = get_option('video_block1_post_id');
	$video_block2_id = get_option('video_block2_post_id');
	$video_block3_id = get_option('video_block3_post_id');
?>
<form method="POST" action="">
	<input type="hidden" name="video_block" value="true">
	<p>
		<label for="video_block_1">Блок 1: </label>
		<input type="text" name="video_block1_post_id" value="<?php echo $video_block1_id; ?>" id="video_block_1" class="top3-post-title">
		<?php echo '<img data-u="image" class="top3-post-img" src="' . get_the_post_thumbnail_url( $video_block1_id, 'thumbnail' ) . '" />'; ?>
		<span><?php echo get_the_title( $video_block1_id ); ?></span>
	</p>
	<p>
		<label for="video_block_2">Блок 2: </label>
		<input type="text" name="video_block2_post_id" value="<?php echo $video_block2_id; ?>" id="video_block_2" class="top3-post-title">
		<?php echo '<img data-u="image" class="top3-post-img" src="' . get_the_post_thumbnail_url( $video_block2_id, 'thumbnail' ) . '" />'; ?>
		<span><?php echo get_the_title( $video_block2_id ); ?></span>
	</p>
	<p>
		<label for="video_block_3">Блок 3: </label>
		<input type="text" name="video_block3_post_id" value="<?php echo $video_block3_id; ?>" id="video_block_3" class="top3-post-title">
		<?php echo '<img data-u="image" class="top3-post-img" src="' . get_the_post_thumbnail_url( $video_block3_id, 'thumbnail' ) . '" />'; ?>
		<span><?php echo get_the_title( $video_block3_id ); ?></span>
	</p>
	<p>
		<input type="submit" value="Зберегти" class="button-primary">
	</p>
</form>
<hr>


<h2> Блок для архіву статтей: </h2>
<?php
	$articles_block1_id = get_option('articles_block1_post_id');
	$articles_block2_id = get_option('articles_block2_post_id');
	$articles_block3_id = get_option('articles_block3_post_id');
?>
<form method="POST" action="">
	<input type="hidden" name="articles_block" value="true">
	<p>
		<label for="articles_block_1">Блок 1: </label>
		<input type="text" name="articles_block1_post_id" value="<?php echo $articles_block1_id; ?>" id="articles_block_1" class="top3-post-title">
		<?php echo '<img data-u="image" class="top3-post-img" src="' . get_the_post_thumbnail_url( $articles_block1_id, 'thumbnail' ) . '" />'; ?>
		<span><?php echo get_the_title( $articles_block1_id ); ?></span>
	</p>
	<p>
		<label for="articles_block_2">Блок 2: </label>
		<input type="text" name="articles_block2_post_id" value="<?php echo $articles_block2_id; ?>" id="articles_block_2" class="top3-post-title">
		<?php echo '<img data-u="image" class="top3-post-img" src="' . get_the_post_thumbnail_url( $articles_block2_id, 'thumbnail' ) . '" />'; ?>
		<span><?php echo get_the_title( $articles_block2_id ); ?></span>
	</p>
	<p>
		<label for="articles_block_3">Блок 3: </label>
		<input type="text" name="articles_block3_post_id" value="<?php echo $articles_block3_id; ?>" id="articles_block_3" class="top3-post-title">
		<?php echo '<img data-u="image" class="top3-post-img" src="' . get_the_post_thumbnail_url( $articles_block3_id, 'thumbnail' ) . '" />'; ?>
		<span><?php echo get_the_title( $articles_block3_id ); ?></span>
	</p>
	<p>
		<input type="submit" value="Зберегти" class="button-primary">
	</p>
</form>
<hr>
