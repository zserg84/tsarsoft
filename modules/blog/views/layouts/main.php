<?php
use yii\helpers\Html;
use yii\widgets\Menu;
use app\assets\AppAsset;
use app\models\BlogCategory;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="/favicon.jpg" type="image/x-icon" />
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>

    <?php $this->beginBody();?>
    <div class="wrap-global blog">
        <div class="header">
            <div class="decorate-bg"></div>
            <div class="inner-content wrap-column">
                <div class="logo column">
                    <a href="<?=Yii::$app->homeUrl ?>">
                        <img src="/img/logo-landing.png" alt="Царь Софт">
                    </a>
                </div>
                <div class="slogan column">
                    <h1 class="h1">Разрабатываем в лучших русских традициях</h1>
                </div>
                <div class="phone column">
                    <a href="callto:83433459185" class="link link-special link-dashed">8 (343) 345-91-85</a>
                </div>
            </div>
        </div>
        <div class="main-content blog">
            <div class="inner-content wrap-column">
                <div class="wrap-list-article column">
                    <?php echo $content ?>
                </div>
                <div class="article-category column">
                    <?php
                    $categories = BlogCategory::find()->all();
                    $items['all']['label'] = 'Все записи';
                    $items['all']['url'] = ['index', 'cat'=>'all'];
                    foreach($categories as $k=>$category){
                        $items[$k]['label'] = $category->name;
                        $items[$k]['url'] = ['default/index', 'cat'=>$category->tag];
                    }
                    echo Menu::widget([
                        'items' =>$items,
                        'options'=>[
                            'class'=>'a-c-list'
                        ],
                        'itemOptions'=>[
                            'class'=>'a-c-elem'
                        ]
                    ]);
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="decorate-bg"></div>
        <div class="head-line wrap-column">
            <div class="column blog-block">Много интересного о компании<br>в нашем <a href="#" class="link link-follow link-solid">Царь-Блоге</a></div>
            <div class="column social-link">
                <div class="head">Расскажите о нас друзьям</div>
<!--                <ul class="soc-list">-->
<!--                    <li class="soc-elem">-->
<!--                        <a rel="nofollow" href="#" class="soc-link vk"></a>-->
<!--                    </li>-->
<!--                    <li class="soc-elem">-->
<!--                        <a rel="nofollow" href="#" class="soc-link fb"></a>-->
<!--                    </li>-->
<!--                    <li class="soc-elem">-->
<!--                        <a rel="nofollow" href="#" class="soc-link tw"></a>-->
<!--                    </li>-->
<!--                </ul>-->
                <script type="text/javascript" src="//yastatic.net/share/share.js" charset="utf-8"></script><div class="yashare-auto-init" data-yashareL10n="ru" data-yashareType="none" data-yashareQuickServices="vkontakte,facebook,twitter"></div>
            </div>
        </div>
        <div class="bottom-line">
            <div class="cont wrap-column">
                <div class="column copyright">Copyright (С) Царь-софт, 2013-2014</div>
                <div class="column Gods-help">Разработно с Божьей помощью</div>
            </div>`1
        </div>
    </div>
    <?php $this->endBody() ?>
        <script src="/js/jquery.slimscroll.min.js"></script>
        <script src="/js/jquery.easings.min.js"></script>
        <script src="/js/jquery.fullPage.min.js"></script>
        <script src="/js/jquery.selectric.js"></script>
        <script src="/js/respond.min.js"></script>
        <script src="/js/jquery.fancybox.pack.js"></script>
        <script src="/js/script.js"></script>
    </body>
    </html>
<?php $this->endPage() ?>