<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $page_title ?></title>
		<link rel="stylesheet" href="css_lib/screen.css">
		<!--[if lt IE 7]>
			<script defer type="text/javascript" src="js_lib/pngfix.js"></script>
			<link rel="stylesheet" href="css_lib/ie6.css">
		<![endif]-->

	</head>
	<body id="<?php echo $cur_page?>">
		<div id="wrapper">
			<div id="rndtop">
			&nbsp;
			</div>
			<div id="shadow">
				<div id="header">
					<h1>Jonathan Sharp</h1>
					<p>Decoration, Refurbishment &amp; Maintenance</p>
				</div>
				<div id="nav_border">
				</div>
				<div id="navigation">
					<ul>
					<?php foreach( $pages as $name => $page ): ?>
						<li <?php echo ( $cur_page == $name ? "class=\"selected\" " : null )?>id="<?php echo $name?>"><a href="<?php echo WWW_PATH . "/" . $name ?>.html" id="<?php echo $name ?>"><?php echo $page[ "title" ]?></a></li>
					<?php endforeach; ?>
					</ul>
				</div>
				<div id="gallery">
					<ul>
					<?php foreach( $images as $image ): ?>
	<li><img src="img/aftershots/<?php echo $image?>" /></li>
					<?php endforeach; ?>
					</ul>
				</div>
				<div id="content">
					<div id="contentinnershadow">
					&nbsp;</div>
					<h2><?php echo $p[ "title" ] ?></h2>
<?php include "../pages/" . $p[ "page" ] . ".html" ?>
				</div>
			</div>
			<div id="rndbot">
			&nbsp;
			</div>
			<div id="bottomlinks">
				<p>Copyright &copy; <?=$date->format('Y')?> Jonathan Sharp | E-Mail: <a href="mailto:jonathansharp1@gmail.com">jonathansharp1@gmail.com</a> | Tel: 07973 320277</p>
				<p class="plug">Website by <a href="http://www.jamescleveland.co.uk">James Cleveland</a></p>
			</div>
		</div>
		<div id="scattered">
			<img src="img/scattered.png" width="528" height="260" />
		</div>
	</body>
</html>
