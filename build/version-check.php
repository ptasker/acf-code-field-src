<?php
$version_checks = array(
	"$plugin_slug.php" => array(
		'@Version:\s+(.*)\n@' => 'header',
	)
);
