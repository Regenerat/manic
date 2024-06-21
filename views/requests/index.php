<?php

use app\models\Requests;
use app\models\Roles;
use app\models\Status;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\RequestsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Requests';

?>
<div class="requests-index">

    <h1>Заявки</h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'user',
            'master',
            'date',
            'time',
            'status',
            [
                'attribute' => 'Сменить статус',
                'visible' => (Yii::$app->user->identity->role_id == Roles::ADMIN_ROLE ? true : false),
                'format' => 'raw',
                'value' => function($model){

                    if($model->status_id == Status::NEW_STATUS){
                        $html = Html::beginForm(Url::to(['update', 'id' => $model->id]));
                        $html .= Html::activeDropDownList($model, 'status_id',[
                            '2' => 'Принять',
                            '3' => 'Отклонить',
                        ]);

                        $html .= Html::submitButton('Save', ['class' => 'btn btn-success']);
                        $html .= Html::endForm();
                        return $html;
                    }
                    return "";
                }
            ],

        ],
    ]); ?>


</div>
