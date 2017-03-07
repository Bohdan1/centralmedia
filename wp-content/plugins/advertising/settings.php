
<?php
	if( wp_verify_nonce( $_POST['fileup_nonce'], 'block1_advertising_img' ) ) {
		if ( ! function_exists( 'wp_handle_upload' ) )
			require_once( ABSPATH . 'wp-admin/includes/file.php' );
		
		$file = &$_FILES['block1_advertising_img'];
		$overrides = array( 'test_form' => false );

		$movefile = wp_handle_upload( $file, $overrides );

		if ( $movefile['url'] ) {
			update_option( 'block1_advertising_img', $movefile['url'] );
		}
		if ( $_POST['block1_advertising_url'] ) {
			update_option( 'block1_advertising_url', $_POST['block1_advertising_url'] );
		}

		if ( $movefile ) {
			echo "<h3>Файл успішно завантажений.</h3>";
			//print_r( $movefile );
		}
		else {
			echo "<h3>Файл не завантажено</h3>";
		}
	}
?>

<h1> Налаштування реклами </h1>

<form enctype="multipart/form-data" action="" method="POST">
	<!--
		<div>Блок реклами: 2180x320 px</div>
	-->
	<?php wp_nonce_field( 'block1_advertising_img', 'fileup_nonce' ); ?>
	<div><input name="block1_advertising_img" type="file" /></div>
	<div style="margin-bottom:10px">
		Посилання: <input name="block1_advertising_url" type="text" value="<?php echo get_option( 'block1_advertising_url'); ?>"/>
		<input type="submit" value="Зберегти" class="button-primary" />
	</div>
</form>
<img src="<?php echo get_option('block1_advertising_img'); ?>" style="max-width:100%; max-height:320px;">


