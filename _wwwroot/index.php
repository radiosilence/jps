<?php
if(str_replace('www.',null,$_SERVER['HTTP_HOST']) == 'jonathan-sharp.co.uk')
     die("Site Under Construction");
/** 
 * Das index, ja?
 */

require('core_path.php');
require(CORE_PATH . '/core.php');

import('core.routing');

$router = new \Core\Router;
$router->route($_GET['route']);
/**
$pages = array (
	"home" => array( 
		"title" 	=> "Home",
		"template" 	=> "standard_page",
		"page" 		=> "home"
	),
	"quotes" => array(
		"title" 	=> "Quotes",
		"template" 	=> "standard_page",
		"page" 		=> "quotes"
	),
	"contact" => array(
		"title" 	=> "Contact",
		"template" 	=> "standard_page",
		"page" 		=> "contact"
	),
	
);

$images = array( 
	"placeholder.png",
	"placeholder.png",
	"placeholder.png",
	"placeholder.png"
);

$cur_page = strlen( $_GET[ "route" ] ) > 0 ? $_GET[ "route" ] : "home";

foreach( $pages as $name => $page )
{

	if( $cur_page == $name )
	{
		$file =  SITE_PATH . "templates" . DIRSEP . $page[ "template" ] . ".php";

		if( file_exists( $file ) )
		{
			$template = $file;
		}
		else
		{
			die( "page can't be included" );
		}

		$p = $page;
	}

}

if( $cur_page != "home" )
{
	$page_title = $p[ "title" ] . " | Jonathan Sharp | Decoration, Refurbishment & Maintenance";
}

if( !$template )
{
	die( "404" );
}
else
{
	include $template;
}

*/
