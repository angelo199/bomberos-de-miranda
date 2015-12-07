<?php 

use yii\helpers\Html;
use yii\widgets\ActiveForm;

 ?>


<?php $form = ActiveForm::begin(["method"=>"post","enableClientValidation"=>true]); ?>


 <div class="row">
 	<div class="form-group">
 		<div class="col-sm-4">
			<?= $form->field($model,"usuario")->input("text")->label("Usuario") ?> 	
 		</div>
 	</div>
 </div>

  <div class="row">
 	<div class="form-group">
 		<div class="col-sm-4">
			<?= $form->field($model,"clave")->passwordInput() ?> 	
 		</div>
 	</div>
 </div>

 <?= Html::submitButton("Ingresar", ["class"=>"btn btn-primary"]) ?>

 <?php $form->end() ?>