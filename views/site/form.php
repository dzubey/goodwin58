<?php 
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php if ($name) { ?> <p>Вы ввели имя <b><?=$name?></b> и email <b><?=$email?></b>.</p><?php } ?>
<?php $f = ActiveForm::begin(); ?>
<?= $f->field( $form, 'name' ) ?>
<?= $f->field( $form, 'email' ) ?>
<?= Html::submitButton( 'Отправить' ) ?>
<?php ActiveForm::end(); ?>