<?php 

namespace app\models;
use Yii;
use yii\db\ActiveRecord;

class DbPerfil extends ActiveRecord
{
	
	public static function getDb()
	{
		return yii::$app->db;
	}

	public static function tableName(){

		return 'perfil;'
	}
}