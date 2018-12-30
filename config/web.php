<?php
	return [
		'id' => 'school_web',
		'basePath' => realpath(__DIR__ . '/../'),
		'aliases' => [
			'@bower' => '@vendor/bower-asset',
			'@npm'   => '@vendor/npm-asset',
		]
	];