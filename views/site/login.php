<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Вход';

?>

<style>
    html,
body {
  height: 100%;
}

.form-signin {
  max-width: 330px;
  padding: 1rem;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

#carbonads-container {display:none} [data-anchorjs-icon]::after {content:""} h1[id] {padding-top:0px; margin-top:20px} .zero-clipboard {display:none !important} .bd-content>h2[id]::before, .bd-content>h3[id]::before, .bd-content>h4[id]::before {margin-top:0 !important; height:0rem !important} .bd-home .bd-masthead {padding-top:50px !important} .bd-docs .col-md-9 {flex: 0 0 100% !important} .bd-navbar {display:none !important} .bd-sidebar {display:none !important} .bd-content {right:0px !important; width:100% !important} .bd-toc {display:none !important} .bs-old-docs {display:none} .bd-clipboard {display:none !important} .bs-social {display:none} .bs-sidebar {display:none !important} .bd-docs .col-xl-8 {max-width:none !important} .bd-content>ol, .bd-content>p, .bd-content>ul {max-width:none !important} .bd-docs .bd-content {padding-left:15px !important; padding-top:0 !important} .bd-subnavbar {display:none !important} .bd-layout {display:block !important} .pl-lg-4 {padding-left:0 !important} .bd-intro {padding-top:0 !important} .bd-docs .bd-title {margin-top:10px !important} .col-md-9[role=main] {flex:none !important; width:100% !important; max-width:none !important; padding:0 2rem 1rem !important} .bd-masthead {padding-top:2rem !important} .navbar-fixed-top {position:absolute !important} @media (min-width: 992px) { .bd-main {grid-template-columns:4fr 0}}

</style>

<div class="site-login">




    <div class="row">
        <div class="col-lg-5">

            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'fieldConfig' => [
                    'template' => "{label}\n{input}\n{error}",
                    'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3'],
                    'inputOptions' => ['class' => 'col-lg-3 form-control'],
                    'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
                ],
            ]); ?>
        </div>
    </div>
    <div class="d-flex align-items-center py-4 ">
<div class="form-signin w-100 m-auto">
  <form>
    <h1 class="h3 mb-3 fw-normal"><?= Html::encode($this->title) ?></h1>
    <div class="form-floating">
    <?= $form->field($model, 'login')->textInput(['autofocus' => true]) ?>
    </div>
    <div class="form-floating">
      
      <?= $form->field($model, 'password')->passwordInput() ?>
    </div>

    <div class="form-check text-start my-3">
    <?= $form->field($model, 'rememberMe')->checkbox([
                'template' => "<div class=\"custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
            ]) ?>
    </div>
    <?= Html::submitButton('Login', ['class' => 'btn btn-primary w-100 py-2', 'name' => 'login-button']) ?>
  </form>
</div>
</div>
            

            

            
            <?php ActiveForm::end(); ?>
</div>
