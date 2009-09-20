<?php
/**
 * Das index, ja?
 */

define( "DIRSEP", DIRECTORY_SEPARATOR );
define( "SITE_PATH", realpath( dirname( __FILE__ ) . DIRSEP . '..' . DIRSEP ) . DIRSEP );
define( "WWW_PATH", preg_replace( "/(.*?)\/index.php/", "$1", $_SERVER[ 'PHP_SELF' ] ) );
 
$page_title = "JPS";

$pages = array (
	"home" => "Home",
	"tiling" => "Tiling"
);

$cur_page = strlen( $_GET[ "route" ] ) > 0 ? $_GET[ "route" ] : "home";

foreach( $pages as $page => $title )
{
	if( $cur_page == $page )
	{
		$file =  SITE_PATH . "pages" . DIRSEP . $page . ".php";
		if( file_exists( $file ) )
		{
			$include = $file;
		}
		else
		{
			die( "page can't be included" );
		}
	}
}
if( !$include )
{
	die( "404" );
}
?><!DOCTYPE html>
<html>
	<head>
		<title><?php echo $page_title ?></title>
	</head>
	<body>
		<h1><?php echo $page_title ?></h1>
		<div id="wrapper">
			<div id="navigation">
			<ul>
			<?php foreach( $pages as $page => $title ): ?>
				<li <?php echo ( $cur_page == $page ? "class=\"selected\" " : null )?>id="<?php echo $page?>"><a href="<?php echo WWW_PATH . "/" . $page ?>"><?php echo $title?></a></li>
			<?php endforeach; ?>
			</ul>
			</div>
			<div id="content">
				<?php include $include; ?>
			</div>
		</div>
	</body>
</html>