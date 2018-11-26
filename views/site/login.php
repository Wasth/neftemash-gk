<?php
$this->title = 'Вход для администратора';

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<?= $this->render('/blocks/menu') ?>
<?= $this->render('/blocks/header') ?>
<div class="container">
    <div id="adminWrapper">
        <h1>Вход для администратора</h1>

        <?php $form = ActiveForm::begin() ?>

        <?= $form->field($model,'username')->textInput(['placeholder'=>'Логин'])->label("") ?>
        <?= $form->field($model,'password')->passwordInput(['placeholder'=>'Пароль'])->label("") ?>

        <?= Html::submitButton('Войти') ?>

        <?php ActiveForm::end() ?>
    </div>
</div>
