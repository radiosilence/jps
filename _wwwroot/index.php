<?php
/**
 * Das index, ja?
 */

define( "DIRSEP", DIRECTORY_SEPARATOR );
define( "SITE_PATH", realpath( dirname( __FILE__ ) . DIRSEP . '..' . DIRSEP ) . DIRSEP );
define( "WWW_PATH", preg_replace( "/(.*?)\/index.php/", "$1", $_SERVER[ 'PHP_SELF' ] ) );
 
$page_title = "Jonathan Sharp | Decoration, Refurbishment & Maintenance";

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


?>