<?php // Routes

$routes = array(
	'^services$' => 'JPS:method=page;page=services',
	'^contact$' => 'JPS:method=page;page=contact',
	'^(index|home)?$' => 'JPS:page=home;'
);
