<?php
	/**
	 * Created by PhpStorm.
	 * User: Lavryniuk Andrii
	 * Date: 08.01.2019
	 * Time: 10:48
	 */

	namespace app\controllers;


	use yii\web\Controller;


	class GridController extends Controller
	{
		public function actionGrid()
		{
			$this->layout = '@app/views/layouts/grid-main.php';
			return $this->render('grid');
		}

	}