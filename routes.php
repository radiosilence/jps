<?php // Routes

$routes = array(
	'^quotes$' => 'JPS:method=page;page=quotes',
	'^contact$' => 'JPS:method=page;page=contact',
	'^(index|home)?$' => 'JPS:page=home;'
);
