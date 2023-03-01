<?php defined( 'ABSPATH' ) or die; ?>
<div class="wrap sendthisfile-button">
<?php settings_errors(); ?>
<div class="">
	<img style="width:100%;max-width:300px" src="<?php esc_attr_e( SENDTHISFILE_BUTTON_LOGO_URL ) ;?>">
</div>
<h1><?php _e( 'SendThisFile Button - Options', 'sendthisfile-button' ); ?></h1>
	<div>
		<span class="shortcode-definition" style="padding: 10px; border: 2px dashed #c5c9d4; color: #c5c9d4; display: inline-block; font-size: 20px; font-weight: bold">
			[SendThisFile buttonid="buttonid" button_label="button_label"]
		</span>
	</div>
	<form method="POST" action="options.php">
		<?php settings_fields( SENDTHISFILE_BUTTON_OPTSGROUP_NAME ); ?>
		<?php do_settings_sections( SENDTHISFILE_BUTTON_OPTSGROUP_NAME ); ?>
		<table class="form-table">
			<tr class="sendthisfile-button-tr">
				<th><?php _e( 'Default/fallback Button Id', 'sendthisfile-button' ); ?></th>
				<td>
					<input type="text" name="<?php echo SENDTHISFILE_BUTTON_OPTIONS_NAME . '[buttonid]'; ?>" value="<?php esc_attr_e( $this->get_option( 'buttonid' ) ); ?>" class="regular-text"/>
				</td>
			</tr>
			<tr class="sendthisfile-button-tr">
				<th><?php _e( 'Default/fallback Button Label', 'sendthisfile-button' ); ?></th>
				<td>
					<input type="text" name="<?php echo SENDTHISFILE_BUTTON_OPTIONS_NAME . '[button_label]'; ?>" value="<?php esc_attr_e( $this->get_option( 'button_label' ) ); ?>" class="regular-text"/>
				</td>
			</tr>
		</table>
		<p><?php _e( 'If "buttonid" or "button_label" parameters are not specified in shortcode, then fallback values will be used.', 'sendthisfile-button' ); ?></p>
		<?php submit_button(); ?>
	</form>
</div>