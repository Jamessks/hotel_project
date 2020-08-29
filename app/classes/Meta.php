<?php

namespace App\classes;

class Meta {
	
	public $title;
	public $description;
	private static $currentURL;

	public function __construct()
	{
		self::getURIpath();
		$this->setTitle();
		$this->setDescription();
	}

	private function setTitle()
	{
		$defaultTitle = 'DS Hotels';
		switch(self::$currentURL){ //override default title, which is the file's name
			case 'Index':
			$this->title = 'Home - ' . $defaultTitle;
			break;

			case 'Contact':
			$this->title = 'Contact Us - ' . $defaultTitle;
			break;

			default: $this->title = self::$currentURL . ' - '. $defaultTitle;
		}
	}

	public function getTitle()
	{
		return $this->title;
	}

	private function setDescription()
	{
		$default = 'DS Hotels provides a wide selection of hotels located in Greece.
		Find your ideal hotel to stay at, by using our hotel search tool.';

		switch(self::$currentURL){
			case 'Index':
			$this->description = $default;
			break;

			case 'Contact':
			$this->description = $default . ' | Fill in your contact information and ask us anything.';
			break;

			default: $this->description = $default;
		}
	}

	public function getDescription()
	{
		return $this->description;
	}

	public static function getURIpath()
	{
		$url = $_SERVER['REQUEST_URI'];
		self::$currentURL = parse_url($url, PHP_URL_PATH);
		self::$currentURL = ucwords(trim(self::$currentURL,'/'));
		self::$currentURL = rtrim(self::$currentURL,'.php');
		return self::$currentURL;
	}
}
