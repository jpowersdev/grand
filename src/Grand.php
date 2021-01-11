<?php


namespace Grand;


class Grand {
	public static $dirname = 'views';

	public function __construct() {
		if ( !defined('ABSPATH') ) {
			return;
		}
		if ( class_exists('\WP') && !defined('TIMBER_LOADED') ) {
			$this->register_admin_pages();
		}
	}

	private function register_admin_pages(){
		echo plugin_dir_path( dirname( __FILE__ ) );
	}
}