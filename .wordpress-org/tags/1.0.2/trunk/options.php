<?php defined( 'ABSPATH' ) or die; ?>
<div class="wrap sendthisfile-button">
<?php settings_errors(); ?>
<div class="">
	<img style="width:100%;max-width:300px" src="<?php esc_attr_e( SENDTHISFILE_BUTTON_LOGO_URL ) ;?>">
</div>
<h1><?php _e( 'SendThisFile Button', 'sendthisfile-button' ); ?></h1>
<h2 style="margin-top: 40px;"><?php _e( 'Example usage', 'sendthisfile-button' ); ?></h2>
	<div>
		<span class="shortcode-definition" style="padding: 10px; border: 2px dashed #c5c9d4; color: #c5c9d4; display: inline-block; font-size: 12px; font-weight: bold">
			[sendthisfile buttonid="buttonid" button_label="button_label"]
		</span>
	</div>
<h2 style="margin-top: 40px;"><?php _e( 'Instructions', 'sendthisfile-button' ); ?></h2>
	<div>
		For instructions on how to obtain a "buttonid", please see the <a href="https://github.com/sendthisfile/wordpress-plugin#getting-started" target="_blank">Getting Started</a> guide.
	</div>
<h2 style="margin-top: 40px;"><?php _e( 'Settings', 'sendthisfile-button' ); ?></h2>	
	<form method="POST" action="options.php">
		<?php settings_fields( SENDTHISFILE_BUTTON_OPTSGROUP_NAME ); ?>
		<?php do_settings_sections( SENDTHISFILE_BUTTON_OPTSGROUP_NAME ); ?>
		<table class="form-table">
			<tr class="sendthisfile-button-tr">
				<th><?php _e( 'Default Buttonid', 'sendthisfile-button' ); ?></th>
				<td>
					<input type="text" name="<?php echo SENDTHISFILE_BUTTON_OPTIONS_NAME . '[buttonid]'; ?>" value="<?php esc_attr_e( $this->get_option( 'buttonid' ) ); ?>" class="regular-text"/>
				</td>
			</tr>
			<tr class="sendthisfile-button-tr">
				<th><?php _e( 'Default Button Label', 'sendthisfile-button' ); ?></th>
				<td>
					<input type="text" name="<?php echo SENDTHISFILE_BUTTON_OPTIONS_NAME . '[button_label]'; ?>" value="<?php esc_attr_e( $this->get_option( 'button_label' ) ); ?>" class="regular-text"/>
				</td>
			</tr>
		</table>
		<p><?php _e( 'If "buttonid" or "button_label" parameters are not specified in the shortcode, then default values will be used.', 'sendthisfile-button' ); ?></p>
		<?php submit_button(); ?>
	</form>
</div>