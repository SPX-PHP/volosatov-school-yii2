<?php

	namespace app\controllers;

	use yii\web\Controller;

	class SiteController extends Controller
	{

		public function actionIndex()
		{
			return $this->render('index');
		}

		public function actionJoin()
		{
			return $this->render('join');
		}

		public function actionLogin()
		{
			return $this->render('login');
		}

		public function actionAbout()
		{
			return $this->render('about');
		}
	}