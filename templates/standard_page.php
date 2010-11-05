<!DOCTYPE html>
<html>
	<head>
		<title><?=$title ?> | JonathanSharp.co.uk</title>
		<base href="http://<?=HOST?><?=BASE_HREF?>/"/>
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
				<?=$menu?>
				<div id="content">
					<div id="contentinnershadow">
					&nbsp;</div>
					<h2><?=$title?></h2>
<?=$content?>
				</div>
			</div>
			<div id="rndbot">
			&nbsp;
			</div>
			<?=$footer?>
		</div>
		<div id="scattered">
			<img src="img/scattered.png" width="528" height="260" />
		</div>
	</body>
</html>
