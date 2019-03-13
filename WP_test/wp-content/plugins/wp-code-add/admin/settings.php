<?php
$page = 'wp-code-add/settings.php';

add_action( 'admin_menu', 'settings_page' );

function settings_page() {
	add_menu_page( 'Code Add Page', 'Code Add Page', 'manage_options', 'wp-code-add/settings.php', 'code_add_admin_page', 'dashicons-tickets', 6  );
}
 
function code_add_admin_page(){
	global $page;
	?><div class="wrap">
		<h2>Дополнительные параметры сайта</h2>
		<form method="post" enctype="multipart/form-data" action="options.php">
			<?php 
			settings_fields('settings_page');
			do_settings_sections($page);
			?>
			<p class="submit">  
				<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />  
			</p>
		</form>
	</div><?php
}
 
function option_settings() {
	global $page;

	register_setting( 'settings_page', 'settings_page');
	
	add_settings_section( 'section_head', 'Section Head', '', $page );
 
	$field_params = array(
		'type'      => 'textarea', 
		'id'        => 'after_head',
		'desc'      => 'Add code after opened tag Head',
	);
	add_settings_field( 'after_head_field', 'after HEAD', 'option_display_settings', $page, 'section_head', $field_params );

	$field_params = array(
		'type'      => 'textarea', 
		'id'        => 'before_head_end',
		'desc'      => 'Add code before closed tag Head',
	);
	add_settings_field( 'before_head_end_field', 'before HEAD end', 'option_display_settings', $page, 'section_head', $field_params );
 

	add_settings_section( 'section_body', 'Section Body', '', $page );

	$field_params = array(
		'type'      => 'textarea',
		'id'        => 'after_body',
		'desc'      => 'Add code after opened tag Body',
	);
	add_settings_field( 'after_body_field', 'after BODY', 'option_display_settings', $page, 'section_body', $field_params );

	$field_params = array(
		'type'      => 'textarea',
		'id'        => 'before_body_end',
		'desc'      => 'Add code before closed tag Body',
	);
	add_settings_field( 'before_body_end_field', 'before BODY end', 'option_display_settings', $page, 'section_body', $field_params );
}
add_action( 'admin_init', 'option_settings' );
 
function option_display_settings($args) {
	extract( $args );
 
	$option_name = 'settings_page';
 
	$o = get_option( $option_name );

	$o[$id] = esc_attr( stripslashes($o[$id]) );
	echo "<textarea class='code large-text' cols='50' rows='10' type='text' id='$id' name=" . $option_name . "[$id]'>$o[$id]</textarea>";  
	echo ($desc != '') ? "<br /><span class='description'>$desc</span>" : ""; 

}