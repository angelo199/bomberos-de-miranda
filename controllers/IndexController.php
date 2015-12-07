<?php  

namespace app\controllers;

use Yii;
use yii\web\Controller;

use app\models\ModelRegistro;
use app\models\DbUsuarios;
use app\models\DbPerfil;


class IndexController extends Controller
{
	
	public function actionIndex()
	{
		$model = new ModelRegistro;
		
		return $this->render("index",["model"=>$model]);
	}

	public function actionRegistro()
	{	
		$model = new ModelRegistro;
		

		if ($model->load(yii::$app->request->post())) 
		{
		
			$tabla1 = new DbPerfil;
			$tabla2 = new DbUsuarios;

			$tabla1->nombre = $model->nombre;

		} else {
			# code...
		}
		
		return $this->render("registro", ["model"=>$model]);
	}
}