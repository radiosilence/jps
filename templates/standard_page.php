<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<meta name="Description" content"Jon provides services including Refurbishment, Decoration, Painting, Tiling, and Maintenance in Surrey, Sussex and Kent." />
		<meta name="keywords" content="painting,decorating,surrey,sussex,kent,maintenance,refurbishment,redhill" />
		<link rel="canonical" href="http://<?=HOST?><?=BASE_HREF?>/<?=$page?>.html" />
		<title>Jonathan Sharp &raquo; Refurbishment & Decoration &raquo; <?=$title?></title>
		<base href="http://<?=HOST?><?=BASE_HREF?>/"/>
		<link rel="stylesheet" href="css_lib/screen.css">
		<?php if($is_mobile): ?>
		<link rel="stylesheet" href="css_lib/mobile.css">
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
		<?php endif;?>
		<!--[if lt IE 7]>
			<script defer type="text/javascript" src="js_lib/pngfix.js"></script>
			<link rel="stylesheet" href="css_lib/ie6.css">
		<![endif]-->

<!-- Google Analytics-->

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-19614413-1']);
  _gaq.push(['_setDomainName', 'none']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!--// Google Analytics-->
	</head>
	<body id="<?=$page?>">
		<div id="wrapper">
			<div id="rndtop">
			&nbsp;
			</div>
			<div id="shadow">
				<div id="header">
					<a href="home.html"><h1>Jonathan Sharp - Decoration, Refurbishment &amp; Maintenance around Surrey, Sussex &amp; Kent</h1></a>
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
