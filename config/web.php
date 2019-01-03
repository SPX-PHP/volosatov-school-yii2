<?php
	return [
		'id' => 'school_web',
		'basePath' => realpath(__DIR__ . '/../'),
		'aliases' => [
			'@bower' => '@vendor/bower-asset',
			'@npm' => '@vendor/npm-asset',


		],
		'components' => [
			'assetManager' => array(  // руководит браузерными скриптами и CSS
				'bundles' => array(
					'yii\web\JqueryAsset' => array( // изменяем используемый файл/версию Jquery
						'sourcePath' => null,
						'js' => array(
							'//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js', // путь к новому файлу
						),
					),
				)
			)
		]
	];