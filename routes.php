<?php // Routes

$routes = array(
    '^([a-z]+)(\.html)?$' => 'JPS:method=page;page=$1;__cache__=on',
	'^(index|home)?(\.html)?$' => 'JPS:page=home;__cache__=on'
);
