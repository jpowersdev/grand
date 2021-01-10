<?php


namespace Grand;


class Grand {
	public $template_dir;

	public function __construct(string $template_dir){
		$this->template_dir = $template_dir;

		$this->register_admin_pages();
	}

	private function register_admin_pages(){
		echo __FILE__;
	}
}