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
		<title>VideoSchool</title>
		<!-- Bootstrap core CSS -->
		<!--<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		Custom styles for this template
		<link href="css/owl.carousel.css" rel="stylesheet">
		<link href="css/owl.theme.default.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">-->
		<?php $this->head(); ?>
	</head>
	<?php $this->beginBody() ?>
	<body id="page-top">
	<!-- Navigation -->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header page-scroll">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
				        data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand page-scroll" href="#page-top"><img src="images/logo.png" alt="Sanza theme logo"></a>
			</div>

			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	<!-- Header -->
	<header>
		<div class="container">
			<div class="slider-container">
				<div class="intro-text">
					<div class="intro-lead-in">Welcome To MOOZ Themes!</div>
					<div class="intro-heading">YOUR FAVORITE SOURCE OF FREE BOOTSTRAP THEMES</div>
					<a href="#about" class="page-scroll btn btn-xl">Tell Me More</a>
				</div>
			</div>
		</div>
	</header>
	<?php
		NavBar::begin([
			'brandLabel' => '<img src="/web/images/logo.png" alt="Sanza theme logo">',
			'brandUrl' => Yii::$app->homeUrl,
			'options' => [
				'class' => 'navbar navbar-default navbar-fixed-top'
			]
		]);
		$menu = [
			'items' => [
				['label' => 'About', 'url' => ['#' => 'about']],
				['label' => 'Services', 'url' => ['#' => 'services']],
				['label' => 'Portfolio', 'url' => ['#' => 'portfolio']],
				['label' => 'Team', 'url' => ['#' => 'team']],
				['label' => 'Contact', 'url' => ['#' => '#contact']],
				['label' => 'GSS Grid', 'url' => '/grid']

			],
			'options' => ['class' => 'navbar-nav navbar-right']
		];
		echo Nav::widget($menu);
		NavBar::end();
	?>
	<?= $content; ?>

	<p id="back-top">
		<a href="#top"><i class="fa fa-angle-up"></i></a>
	</p>
	<footer>
		<div class="container text-center">
			<p>Designed by <a href="http://moozthemes.com"><span>MOOZ</span>Themes.com</a></p>
		</div>
	</footer>

	<!-- Modal for portfolio item 1 -->
	<div class="modal fade" id="Modal-1" tabindex="-1" role="dialog" aria-labelledby="Modal-label-1">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
								aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="Modal-label-1">Dean & Letter</h4>
				</div>
				<div class="modal-body">
					<img src="images/demo/portfolio-1.jpg" alt="img01" class="img-responsive"/>
					<div class="modal-works"><span>Branding</span><span>Web Design</span></div>
					<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal for portfolio item 2 -->
	<div class="modal fade" id="Modal-2" tabindex="-1" role="dialog" aria-labelledby="Modal-label-2">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
								aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="Modal-label-2">Startup Framework</h4>
				</div>
				<div class="modal-body">
					<img src="images/demo/portfolio-2.jpg" alt="img01" class="img-responsive"/>
					<div class="modal-works"><span>Branding</span><span>Web Design</span></div>
					<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal for portfolio item 3 -->
	<div class="modal fade" id="Modal-3" tabindex="-1" role="dialog" aria-labelledby="Modal-label-3">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
								aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="Modal-label-3">Lamp & Velvet</h4>
				</div>
				<div class="modal-body">
					<img src="images/demo/portfolio-3.jpg" alt="img01" class="img-responsive"/>
					<div class="modal-works"><span>Branding</span><span>Web Design</span></div>
					<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal for portfolio item 4 -->
	<div class="modal fade" id="Modal-4" tabindex="-1" role="dialog" aria-labelledby="Modal-label-4">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
								aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="Modal-label-4">Smart Name</h4>
				</div>
				<div class="modal-body">
					<img src="images/demo/portfolio-4.jpg" alt="img01" class="img-responsive"/>
					<div class="modal-works"><span>Branding</span><span>Web Design</span></div>
					<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal for portfolio item 5 -->
	<div class="modal fade" id="Modal-5" tabindex="-1" role="dialog" aria-labelledby="Modal-label-5">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
								aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="Modal-label-5">Fast People</h4>
				</div>
				<div class="modal-body">
					<img src="images/demo/portfolio-5.jpg" alt="img01" class="img-responsive"/>
					<div class="modal-works"><span>Branding</span><span>Web Design</span></div>
					<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Bootstrap core JavaScript
		================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
	<!--<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>-->
	<!--<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/cbpAnimatedHeader.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script src="js/mooz.themes.scripts.js"></script>-->
	<?php $this->endBody(); ?>
	</body>

	</html>
<?php $this->endPage(); ?>