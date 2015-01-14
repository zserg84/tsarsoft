<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Blogs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-index">

<!--    <h1>--><?//= Html::encode($this->title) ?><!--</h1>-->

    <div class="l-a">
        <?=
        \yii\widgets\ListView::widget([
            'dataProvider' => $dataProvider,
            'itemView' => '_blogItem'
        ]);
        ?>
    </div>

</div>
