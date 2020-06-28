<?php

function dd($var)
{
	die(print_r($var));
}

function getURIpath()
{
	$url = $_SERVER['REQUEST_URI'];
	return $url = parse_url($url, PHP_URL_PATH);
}

function currentPageTitle()
{
	$title = ucwords(trim(getURIpath(),'/.php'));
	$sitename = ' - DS Hotels';
	switch($title){
		case 'Index':
			$title =  'Home' . $sitename;
			break;
			case 'Contact':
				$title =  'Contact Us' . $sitename;
				break;
				default: $title .= $sitename;
	}
	return $title;
}
