<?php 

/*
	Plugin Name: NSC Cooke Banner Plugin
	Description: Setting up configurable fields for the cookie banner.
	Author: Frank Biemans
	Version: 1.0.0
*/

	class NSC_Footer_Settings_Plugin {

		public function __construct() {
			add_action( 'admin_menu', array( $this, 'create_plugin_settings_page' ) );
			add_action( 'admin_init', array( $this, 'setup_sections' ) );
			add_action( 'admin_init', array( $this, 'setup_fields' ) );
		}

		public function create_plugin_settings_page() {
			$page_title = __('Footer Texts');
			$menu_title = __('Footer Texts');
			$capability = 'manage_options';
			$slug = 'nsc_footer_settings';
			$callback = array( $this, 'plugin_settings_page_content' );
			$icon = 'dashicons-welcome-widgets-menus';
			$position = 105;

			add_submenu_page('nsc-plugin', $page_title, $menu_title, $capability, $slug, $callback);
			//add_menu_page( $page_title, $menu_title, $capability, $slug, $callback, $icon, $position );
		}


		public function plugin_settings_page_content() { ?>
		<div class="wrap">
			<h2><?php _e('Footer Texts'); ?></h2>
			<form method="post" action="options.php">
				<?php
				settings_fields( 'nsc_footer_settings' );
				do_settings_sections( 'nsc_footer_settings' );
				submit_button();
				?>
			</form>

		</div> <?php
	}


	public function setup_sections() {
		add_settings_section( 'footer_settings', false, array( $this, 'section_callback' ), 'nsc_footer_settings' );
	}

	public function section_callback( $arguments ) {
		switch( $arguments['id'] ){
			case 'footer_settings':
			echo __('');
			break;
		}
	}

	public function setup_fields() {
		$fields = array(
			array(
				'uid' => 'footer_title',
				'label' => __('Title'),
				'section' => 'footer_settings',
				'type' => 'textarea',
				'placeholder' => 'Hoi!',
				'helper' => false,
				'supplemental' => false,
				'default' => get_option('footer_title')
				),
			array(
				'uid' => 'footer_contact',
				'label' => __('Contact Information'),
				'section' => 'footer_settings',
				'type' => 'textarea',
				'placeholder' => '',
				'helper' => false,
				'supplemental' => false,
				'default' => get_option('footer_contact')
				),
			array(
				'uid' => 'footer_form',
				'label' => __('Contact Form Shortcode'),
				'section' => 'footer_settings',
				'type' => 'text',
				'placeholder' => '[contact-form-7 id=20]',
				'helper' => false,
				'supplemental' => false,
				'default' => get_option('footer_form')
				)
			);

		foreach( $fields as $field ){
			add_settings_field( $field['uid'], $field['label'], array( $this, 'field_callback' ), 'nsc_footer_settings', $field['section'], $field );
			register_setting( 'nsc_footer_settings', $field['uid'] );
		}

	}

	public function field_callback( $arguments ) {
		$value = get_option( $arguments['uid'] );
		if( ! $value ) {
			$value = $arguments['default'];
		}

		switch( $arguments['type'] ){
			case 'text':
			printf( '<input name="%1$s" id="%1$s" type="%2$s" placeholder="%3$s" value="%4$s" />', $arguments['uid'], $arguments['type'], $arguments['placeholder'], $value );
			break;
			case 'textarea': // If it is a textarea
			printf( '<textarea name="%1$s" id="%1$s" placeholder="%2$s" rows="5" cols="50">%3$s</textarea>', $arguments['uid'], $arguments['placeholder'], $value );
			break;
			case 'select': // If it is a select dropdown
			if( ! empty ( $arguments['options'] ) && is_array( $arguments['options'] ) ){
				$options_markup = '';
				foreach( $arguments['options'] as $key => $label ){
					$options_markup .= sprintf( '<option value="%s" %s>%s</option>', $key, selected( $value, $key, false ), $label );
				}
				printf( '<select name="%1$s" id="%1$s">%2$s</select>', $arguments['uid'], $options_markup );
			}
			break;
		}

		if( $helper = $arguments['helper'] ){
			printf( '<span class="helper"> %s</span>', $helper );
		}

		if( $supplimental = $arguments['supplemental'] ){
			printf( '<p class="description">%s</p>', $supplimental );
		}
	}


}

new NSC_Footer_Settings_Plugin();