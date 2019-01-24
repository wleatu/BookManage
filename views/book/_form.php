<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Book */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="book-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'booktitle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bookauthor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bookpress')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bookdate')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
