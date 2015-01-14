<div class="l-a-elem">
    <div class="article-content">
        <a href="#" class="image-link">
            <img src="<?=$model->getImagePath()?>" alt="Супер пост" class="article-img">
        </a>
        <div class="article-text">
            <?=\yii\helpers\Html::a('<h3 class="article-header">'.$model->title.'</h3>', \yii\helpers\Url::toRoute(['view', 'id'=>$model->id]), [
                'class'=>'header-link'
            ])?>
            <span class="article-category">
                <?=\yii\helpers\Html::a($model->blogCategory->name, \yii\helpers\Url::toRoute(['index', 'cat'=>$model->blogCategory->tag]), [
                    'class'=>'a-c-link'
                ])?>
            </span>
            <span class="article-date"><?=Yii::$app->formatter->asDate($model->date_create)?></span>
        </div>
    </div>
</div>