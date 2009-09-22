<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $page_title ?></title>
		<link rel="stylesheet" href="css_lib/screen.css">
	</head>
	<body>
		<div id="wrapper">
			<div id="rndtop">
			&nbsp;
			</div>
			<div id="shadow">
				<div id="header">
					Jonathan Sharp
					Decoration, Refurbishment &amp; Maintenance
				</div>
				<div id="nav_border">
				</div>
				<div id="navigation">
					<ul>
					<?php foreach( $pages as $name => $page ): ?>
						<li <?php echo ( $cur_page == $name ? "class=\"selected\" " : null )?>id="<?php echo $name?>"><a href="<?php echo WWW_PATH . "/" . $name ?>"><?php //echo $page[ "title" ]?></a></li>
					<?php endforeach; ?>
					</ul>
				</div>
				<div id="gallery">
				some images
				</div>
				<div id="content">
					<div id="contentinnershadow">
					&nbsp;</div>
					<h2>Some slogan or something</h2>
					<div class="column">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut enim elit. Donec vel enim quis metus pellentesque consectetur eu eu dui. Integet.</p><p>Nunc ut lacus eu neque mollis fermentum quis sit amet magna. Donec ultricies tristique ante at rhoncus.</p>
					</div>
					<div class="column">
					<p>Pellentesque ut enim elit. Donec vel enim quis metus pellentesque consectetur eu eu dui. Integer interdum ullamcorper cursus. Morbi feugiat.</p><p>Nunc ut lacus eu neque mollis fermentum quis sit amet magna. Donec ultricies tristique ante at rhoncus.</p>
					</div>
				</div>
			</div>
			<div id="rndbot">
			&nbsp;
			</div>
			<div id="bottomlinks">
			Blah blah blah
			</div>
		</div>
	</body>
</html>