<?php

$config = array(
	'sliceSize'		=> 500,
	'pollingRate'	=> 500,
	'watchList'		=> array(
		'/var/log/hhvm/error.log'	=> '',
		'/var/log/apache2'			=> '\.log$'
	)
);