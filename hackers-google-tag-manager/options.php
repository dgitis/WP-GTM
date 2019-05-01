<div class="wrap">
<h2>Google Tag Manager</h2>

<form method="post" action="options.php">
<?php wp_nonce_field('update-options'); ?>
<?php settings_fields('googletagmanager'); 


?>
<table class="form-table">

<tr valign="top">
	<th scope="row">Google Tag ID:</th>
	<td><input type="text" name="tag_id" value="<?php echo get_option('tag_id'); ?>" /></td>
</tr>
<tr valign="top">
	<th scope="row">Placement Method:</th>
	<td>
	<?php $placement_method = get_option('placement_method'); ?>
	<input type="radio" name="placement_method" id="standard" value="standard" <?php checked( $placement_method == 'standard' ); ?> />
	<label for="standard">Standard</label><br/>
	<input type="radio" name="placement_method" id="wp5" value="wp5" <?php checked( $placement_method == 'wp5' ); ?> />
	<label for="wp5">Wordpress 5.0</label>
	</td>
</tr>

</table>

<input type="hidden" name="action" value="update" />

<p class="submit">
<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
</p>

</form>
</div>
