<?php


namespace Grand;


class Admin {
	protected $page_title = 'Admin Page';
	protected $menu_title = 'Admin Page';
	protected $capability = 'administrator';
	protected $menu_slug = 'admin-page';
	protected $icon_url = 'dashicons-admin-generic ';

	public function with() {
		return [];
	}

	static function render() {
		echo __FILE__;
	}

	public function init() {
		\add_menu_page(
			$this->page_title,
			$this->menu_title,
			$this->capability,
			$this->menu_slug,
			'self::render',
			$this->icon_url
		);
	}
}