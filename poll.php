<?php

require_once('config/config.php');

function tail($filename, $sliceSize) {
	$filename = preg_replace('/([()"])/S', '$1', $filename);
	//echo $filename, "\n";
	return trim(shell_exec('tail -n ' . $sliceSize . ' "' . $filename . '"'));
}

$response = array();

foreach($config['watchList'] as $path => $filter) {
	if(is_dir($path)) {
		$path = preg_replace('/\/$/', '', $path);
		$files = scandir($path);
		if($files) {
			unset($files[0], $files[1]);
			foreach($files as $k => $filename) {
				$fullPath = $path . '/' . $filename;
				if(preg_match('/' . $filter . '/S', $filename) && is_file($fullPath))
					$response[$fullPath] = htmlentities(tail($fullPath, $config['sliceSize']));
			}
		}
	}
	elseif(file_exists($path))
		$response[$path] = htmlentities(tail($path, $config['sliceSize']));
}

echo json_encode($response);