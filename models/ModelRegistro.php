<?php  

namespace app\models;

use Yii;
use yii\base\model;

class ModelRegistro extends model
{
	public $nombre;
	public $apellido;
	public $CI;
	public $email;	
	public $usuario;
	public $clave;		
	public $t_usuario;
	public function rules()
	{
		return 
		[

			[["nombre","apellido","CI","email","usuario","clave"],"required","message"=>"Campos requeridos"],
			["nombre","match","pattern"=>'/^[a-záéíóúñ\s]+$/i', 'message' => 'Sólo se aceptan letras'],
			["apellido","match","pattern"=>'/^[a-záéíóúñ\s]+$/i', 'message' => 'Sólo se aceptan letras'],
			["CI","match","pattern"=>'/^[0-9]+$/i', 'message' => 'Sólo se aceptan numeros'],
			["usuario","match","pattern"=>'/^[0-9a-z]+$/i','message'=>'solo se aceptan letras y numeros'],
		
		];
	} 


	public function attributeLabels()
	{
		
		return ["nombre"=>"Nombre","apellido"=>"Apellido","email"=>"Email","usuario"=>"Usuario","clave"=>"Contraseña"];
	
	}


}