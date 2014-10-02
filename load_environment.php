<?php
	
	if ( is_file(__DIR__ . "/production_env.json") ) {
		$json = file_get_contents(__DIR__ . "/production_env.json");
	} elseif( is_file(__DIR__ . "/staging_env.json") ) {
		$json = file_get_contents(__DIR__ . "/staging_env.json");
	} elseif( is_file(__DIR__ . "/development_env.json") ) {
		$json = file_get_contents(__DIR__ . "/development_env.json");
	} else {
		die("(No environment file could be loaded.)");
	}

	$data = json_decode($json, true);
	$_ENV = array_merge($_ENV, $data);