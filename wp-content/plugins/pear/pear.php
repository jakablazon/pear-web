<?php

/*
Plugin Name: Pear Subscription Form
Description: Frontpage subscription form
Author: PovioLabs
Version: 1.0.0
*/

$config = array(
	'psf_db_version'   => '1.0',
	'psf_db_tablename' => 'psf',
);

class PearSubscriptionForm {
	var $psf_db_version;
	var $psf_db_tablename;

	function __constructor( $config ) {
		$this->psf_db_version   = $config['psf_db_version'];
		$this->psf_db_tablename = $config['psf_db_tablename'];
	}

	static function psf_install() {
		global $wpdb;

		$table_name      = $wpdb->prefix . 'psf';
		$charset_collate = $wpdb->get_charset_collate();

		$sql = "CREATE TABLE $table_name (
			`ID` INT NOT NULL AUTO_INCREMENT ,
			`Name` VARCHAR(255) NOT NULL ,
			`Email` VARCHAR(255) NOT NULL ,
			`Age` TINYINT NOT NULL ,
			PRIMARY KEY (`ID`),
		  	UNIQUE KEY `Email` (`Email`)) $charset_collate;";

		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		dbDelta( $sql );

		add_option( 'psf_db_version', '1.0' );
	}

	static function form() {
		ob_start(); ?>
		<div class="mid-section text-center">
			<div class="pear-logo"></div>
			<h1>Creating matches, the smart way</h1>
			<p>COMING SOON</p>
			<div class="row join-form-container">
				<div class="col-xs-12 col-sm-4">
					<input id="name" class="input-boxed" type="text" placeholder="Name" required/>
				</div>
				<div class="col-xs-12 col-sm-4">
					<input id="email" class="input-boxed" type="text" placeholder="Email" required/>
				</div>
				<div class="col-xs-12 col-sm-4 select-container" style="z-index:10">
					<select id="age" class="select-age-home">
						<option></option>
					</select>
				</div>
				<input type="text" name="surname" style="display:none;">
				<?php echo wp_nonce_field( 'psf_form_submit', 'psf_nonce', true, false ); ?>
			</div>
			<div id="psf-submit" class="button green shadow text-uppercase button-join mt40">
				<span class="join-text">Join now</span>
				<img class="loader inactive" src="<?php echo get_template_directory_uri(); ?>/dist/images/loader.svg" />
			</div>
			<p class="mt24 we-promise">We promise to keep our emails to a minimum.</p>
			<p class="mt0 mb32">Join our community to be among our beta testers or know when Pear will be available
				in your city</p>
		</div>
		<?php
		return $html = ob_get_clean();
	}

}

new PearSubscriptionForm( $config );

register_activation_hook( __FILE__, array( 'PearSubscriptionForm', 'psf_install' ) );
add_shortcode( 'PearSubForm', array( 'PearSubscriptionForm', 'form' ) );
