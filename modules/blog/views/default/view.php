<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Blog */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Blogs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article">
    <div class="article-content">

    <!--    <h1>--><?//= Html::encode($this->title) ?><!--</h1>-->

        <?if($model->image):?>
        <img src="<?=$model->getImagePath()?>" class="article-img">
        <?endif?>
        <div class="article-text">
            <h3 class="article-header"><?=Html::encode($this->title)?></h3>
            <span class="article-category">
                <?=\yii\helpers\Html::a($model->blogCategory->name, \yii\helpers\Url::toRoute(['index', 'cat'=>$model->blogCategory->tag]), [
                    'class'=>'a-c-link'
                ])?>
            </span>
            <span class="article-date"><?=Yii::$app->formatter->asDate($model->date_create)?></span>
        </div>
        <div class="article-main-content">
            <p><?= nl2br(htmlspecialchars_decode($model->text)) ?></p>
        </div>
    </div>
</div>