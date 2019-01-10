<?php

	use app\assets\AppAsset;
	use yii\bootstrap\Nav;
	use yii\bootstrap\NavBar;

?>
<?php
	AppAsset::register($this);
	$this->beginPage(); ?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="favicon.ico">
		<title>Css Grid</title>
		<?php $this->head(); ?>
	</head>
	<?php $this->beginBody() ?>



	<?php $this->endBody(); ?>
	</body>
	<?= $content ?>
	</html>
<?php $this->endPage(); ?>