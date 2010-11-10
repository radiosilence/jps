<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<meta name="description" content"Jonathan Sharp provides services including but not limited to Refurbishment, Decoration, Painting, Tiling, Fitting, Windows, and General Maintenance on properties in or around Surrey, Sussex and Kent. He brings 15 years of experience to the table and is based in Redhill, Surrey. He does exceptionally high quality work and builds a great relationship with his clients through honesty and taking a pride in what he does." />
		<meta name="keywords" content="painting,decorating,surrey,sussex,kent,maintenance,refurbishment,windows,tiling,experience,honest,doors,hanging,hung,floors,ceramic,wallpapering,repairs,repair,renovation,woodwork,locks,fitting,kitchens,furniture,Jonathan,Paul,Sharp,high,quality,redhill,reigate,guildford,london,horley,cambridge,gatton,monson,nutfield,bletchingly,godstone,banstead,salfords,gatwick" />
		<title>Jonathan Sharp &raquo; Refurbishment Decoration Maintenance Surrey Sussex Kent &raquo; <?=$title?></title>
		<base href="http://<?=HOST?><?=BASE_HREF?>/"/>
		<link rel="stylesheet" href="css_lib/screen.css">
		<?php if($is_mobile or $_SERVER['REMOTE_ADDR'] == '82.21.65.254'): ?>
		<link rel="stylesheet" href="css_lib/mobile.css">
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
		<?php endif;?>
		<!--[if lt IE 7]>
			<script defer type="text/javascript" src="js_lib/pngfix.js"></script>
			<link rel="stylesheet" href="css_lib/ie6.css">
		<![endif]-->

	</head>
	<body id="<?=$page?>">
		<div id="wrapper">
			<div id="rndtop">
			&nbsp;
			</div>
			<div id="shadow">
				<div id="header">
					<h1>Jonathan Sharp - Decoration, Refurbishment &amp; Maintenance around Surrey, Sussex &amp; Kent<</h1>
				</div>
				<?=$menu?>
				<div id="content">
					<div id="contentinnershadow">
					&nbsp;</div>
					<h2 id="section_title"><?=$title?></h2>
					<?=$content?>
					<div class="following">
					<p>Please <a href="contact.html">contact</a> for a free survey and quotation.</p>
					<p>References available on request</p>
					</div>
				</div>
			</div>
			<div id="rndbot">
			&nbsp;
			</div>
			<?=$footer?>
		</div>
	</body>
</html>
