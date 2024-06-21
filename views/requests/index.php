<?php

use app\models\Requests;
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
        ],
    ]); ?>


</div>
