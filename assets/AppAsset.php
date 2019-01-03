<?php
	/**
	 * Created by PhpStorm.
	 * User: Lavryniuk Andrii
	 * Date: 03.01.2019
	 * Time: 11:33
	 */

	namespace app\assets;


	use yii\web\AssetBundle;

	class AppAsset extends AssetBundle
	{
		public $basePath = '@webroot';
		public $baseUrl = '@web';

		public $css = [
			'css/bootstrap.min.css',
			'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css',
			'css/owl.carousel.css',
			'css/owl.theme.default.min.css',
			'css/style.css',
		];
		public $js = [
			'js/bootstrap.min.js',
			'js/owl.carousel.min.js',
			'js/cbpAnimatedHeader.js',
			'js/jquery.appear.js',
			'js/SmoothScroll.min.js',
			'js/mooz.themes.scripts.js',
//			'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js',
			'http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js',
			'js/custom.js',
		];
		public $depends = [
			'yii\web\YiiAsset',
			'yii\bootstrap\BootstrapAsset',
		];
	}