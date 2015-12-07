<?php 
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<h1> Registro de usuarios</h1>

<?php $form = ActiveForm::begin(["method"=>"post","enableClientValidation"=>true]); ?>

<div class="row">
	<div class="form-group">
		<div class="col-sm-4">
			<?php echo $form->field($model,"nombre")->input("text");  ?>
		</div>
	</div>
</div>

<div class="row">
	<div class="form-group">
		<div class="col-sm-4">
			<?php echo $form->field($model,"apellido")->input("text")  ?>
		</div>
	</div>
</div>

<div class="row">
	<div class="form-group">
		<div class="col-sm-4">
			<?php echo $form->field($model,"CI")->input("text")  ?>
		</div>
	</div>
</div>

<div class="row">
	<div class="form-group">
		<div class="col-sm-4">
			<?php echo $form->field($model,"email")->input("email")  ?>
		</div>
	</div>
</div>

<div class="row">
	<div class="form-group">
		<div class="col-sm-4">
			<?php echo $form->field($model,"t_usuario")->input("text")->label("TIpo de usuario")  ?>
		</div>
	</div>
</div>

<div class="row">
	<div class="form-group">
		<div class="col-sm-4">
			<?php echo $form->field($model,"usuario")->input("text")  ?>
		</div>
	</div>
</div>

<div class="row">
	<div class="form-group">
		<div class="col-sm-4">
			<?php echo $form->field($model,"clave")->input("text")  ?>
		</div>
	</div>
</div>




<?= Html::submitButton("Registrar",["class"=>"btn btn-primary"]) ?>

<?php $form->end() ?>