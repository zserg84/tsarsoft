<?php
use yii\helpers\Html;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="/favicon.jpg" type="image/x-icon" />
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>

        <link rel="stylesheet" type="text/css" href="/css/styles.css">
        <!--<link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css">-->
        <?php $this->head() ?>
    </head>
    <body>

    <?php $this->beginBody() ?>
    <?
    /*массив с компетенциями*/
    $comp = [
        'design'=>[
            [
                'name' => 'design_interface',
                'label' => 'Проектирование интерфейсов',
                'hint' => 'От 15 тыс. рублей',
            ], [
                'name' => 'design_logo',
                'label' => 'Логотип и фирменный стиль',
                'hint' => 'От 20 тыс. рублей',
            ], [
                'name' => 'design_presentation',
                'label' => 'Полиграфия и презентации',
                'hint' => 'От 25 тыс. рублей',
            ]
        ],
        'development'=>[
            [
                'name' => 'development_landing',
                'label' => 'Landing-page',
                'hint' => 'От 25 тыс. рублей',
            ],
            [
                'name' => 'development_shop',
                'label' => 'Интернет-магазин',
                'hint' => 'От 50 тыс. рублей',
            ],
            [
                'name' => 'development_order',
                'label' => 'Заказная разработка',
                'hint' => 'Цена договорная',
            ]
        ],
        'marketing'=>[
            [
                'name' => 'marketing_seo',
                'label' => 'Seo (поисковая оптимизация сайта)',
                'hint' => 'Цена договорная',
            ],
            [
                'name' => 'marketing_advertisment',
                'label' => 'Контекстная реклама',
                'hint' => 'Цена договорная',
            ],
            [
                'name' => 'marketing_smm',
                'label' => 'SMM (маркетинг в социальных сетях)',
                'hint' => 'От 10 тыс. рублей за группу<br/>От 25 тыс. рублей за стратегию',
            ]
        ],
        'consulting'=>[
            [
                'name' => 'consulting_audit',
                'label' => 'Аудит сайта/проекта',
                'hint' => 'От 10 тыс. рублей',
            ],
            [
                'name' => 'consulting_digital',
                'label' => 'Разработка Digital-стратегии',
                'hint' => 'Цена договорная',
            ],
            [
                'name' => 'consulting_startup',
                'label' => 'Консультация для Start-Up проект',
                'hint' => 'Бесплатно',
            ]
        ],
    ];
    $simpleComp = [];
    foreach($comp as $c){
        foreach($c as $value){
            $simpleComp[$value['label']] = $value['label'];
        }
    }
    $simpleComp['Хочу у вас работать'] = 'Хочу у вас работать';
    $simpleComp['Предложение о сотрудничестве'] = 'Предложение о сотрудничестве';
    ?>
    <div class="main-menu bottom" id="myMenu">
        <ul class="m-m-list">
            <li class="m-m-elem" data-menuanchor="window-0" style="display:none;">
                <a href="#window-0" class="m-m-link link link-action">IT-компетенции</a>
            </li>
            <li class="m-m-elem" data-menuanchor="window-1">
                <a href="#window-1" class="m-m-link link link-action">IT-компетенции</a>
            </li>
            <li class="m-m-elem" data-menuanchor="window-2">
                <a href="#window-2" class="m-m-link link link-action">Процесс разработки</a>
            </li>
            <li class="m-m-elem" data-menuanchor="window-3">
                <a href="#window-3" class="m-m-link link link-action">Портфолио</a>
            </li>
            <li class="m-m-elem" data-menuanchor="window-4">
                <a href="#window-4" class="m-m-link link link-action">Наши партнеры</a>
            </li>
            <li class="m-m-elem" data-menuanchor="window-5">
                <a href="#window-5" class="m-m-link link link-action">Обратная связь</a>
            </li>
            <li class="m-m-elem" data-menuanchor="window-6">
                <a href="<?php echo \yii\helpers\Url::toRoute('blog/default/index')?>" class="m-m-link link link-action">Перейти в блог</a>
            </li>
        </ul>
    </div>
    <div class="wrap-global landing" id="fullpage">
        <div class="section fp-section" id="section0" data-anchor="window-1">
            <div class="frame frame-0">
                <div class="decorate decorate-img-1"></div>
                <div class="decorate decorate-img-2"></div>
                <div class="decorate decorate-bg"></div>
                <div class="wrap-content">
                    <div class="content">
                        <a href="#" class="main-logo">
                            <img src="/img/logo-landing.png" alt="Царь Софт">
                        </a>
                        <ul class="main-priority">
                            <li class="m-p-elem">Царь Софт</li>
                            <li class="m-p-elem">Царь Клиент</li>
                            <li class="m-p-elem">Царь Сайт</li>
                        </ul>
                        <h1 class="header h1">Разрабатываем в лучших русских традициях</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="section fp-section" id="section1" data-anchor="window-1">
            <div class="frame frame-1">
                <div class="wrap-content">
                    <div class="kaleidoscope little-k">
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-4"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-4"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-4"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-4"></div>
                    <div class="k-elem color-4"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-4"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-4"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-4"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-4"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-4"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-4"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-4"></div>
                    <div class="k-elem color-4"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-4"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-4"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-4"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-4"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-4"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-4"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-4"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-4"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-4"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-4"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-4"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-4"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-4"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-4"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-4"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-4"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-4"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-4"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-4"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-4"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-4"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-4"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-4"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-4"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-4"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-4"></div>
                    <div class="k-elem color-4"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-4"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-4"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-4"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-4"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-3"></div>
                    <div class="k-elem color-4"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-5"></div>
                    <div class="k-elem color-2"></div>
                    <div class="k-elem color-1"></div>
                    <div class="k-elem color-4"></div>
                    <div class="k-elem color-5"></div>
                </div>
                <h3 class="header h3">it-компетенции</h3>
                <ul class="mosaic">
                    <li class="mosaic-elem first">
                        <a href="#comp-1" class="mosaic-link fancybox">Веб-дизайн</a>
                    </li>
                    <li class="mosaic-elem big second">
                        <a href="#comp-2" class="mosaic-link fancybox">Разработка сайтов</a>
                    </li>
                    <li class="mosaic-elem big third">
                        <a href="#comp-3" class="mosaic-link fancybox">Интернет-маркетинг</a>
                    </li>
                    <li class="mosaic-elem fourth">
                        <a href="#comp-4" class="mosaic-link fancybox">Консалтинг</a>
                    </li>
                </ul>
                <a href="#window-5" class="btn btn-success full-w">Запрос на услугу</a>
            </div>
        </div>
    </div>
        <div class="section fp-section" id="section2" data-anchor="window-2">
            <div class="frame frame-2">
                <div class="wrap-content">
                    <h3 class="header h3">Процесс разработки</h3>
                    <div class="header-hint">Готовность к изменениям важнее следования первоначальному плану</div>
                    <div class="process-cicle">
                        <div class="process-item item1">
                            <div class="item-header">1.ЦАРЬ КЛИЕНТ</div>
                            <div class="item-hint">Все начинается с идеи</div>
                        </div>
                        <div class="process-item item2">
                            <div class="item-header">2.ЦАРЬ СОФТ</div>
                            <div class="item-hint">В вебе нет ничего такого,<br/>что мы не смогли бы сделать</div>
                        </div>
                        <div class="process-item item3">
                            <div class="item-header">3.ЦАРЬ САЙТ</div>
                            <div class="item-hint">Решение разработали,<br/>клиента порадовали</div>
                        </div>
                    </div>
                    <div class="formula">
                        <div class="hint">Простая, но всегда работающая формула</div>
                        <div class="formula-entry">
                            <span class="summand">ЦАРЬ СОФТ</span>
                            <span class="sign">+</span>
                            <span class="summand">ЦАРЬ КЛИЕНТ</span>
                            <span class="sign">=</span>
                            <span class="result">ЦАРЬ САЙТ</span>
                        </div>
                    </div>
                    <a href="#window-5" class="btn btn-success">Запрос на услугу</a>
                </div>
            </div>
        </div>
        <div class="section fp-section" id="section3" data-anchor="window-3">
        <div class="frame frame-3">
        <h3 class="header h3">
            <div class="header-text">Портфолио</div>
            <div class="hint">Творчество - это самый совершенный бунт</div>
        </h3>
        <div class="wrap-content">
        <div class="kaleidoscope big-k">
        <div class="k-elem color-1"></div>
        <div class="k-elem color-2"></div>
        <div class="k-elem color-3"></div>
        <div class="k-elem color-4"></div>
        <div class="k-elem color-5"></div>
        <div class="k-elem color-1"></div>
        <div class="k-elem color-2"></div>
        <div class="k-elem color-3"></div>
        <div class="k-elem color-4"></div>
        <div class="k-elem color-5"></div>
        <div class="k-elem color-1"></div>
        <div class="k-elem color-2"></div>
        <div class="k-elem color-3"></div>
        <div class="k-elem color-4"></div>
        <div class="k-elem color-5"></div>
        <div class="k-elem color-1"></div>
        <div class="k-elem color-2"></div>
        <div class="k-elem color-3"></div>
        <div class="k-elem color-4"></div>
        <div class="k-elem color-5"></div>
        <div class="k-elem color-1"></div>
        <div class="k-elem color-2"></div>
        <div class="k-elem color-3"></div>
        <div class="k-elem color-4"></div>
        <div class="k-elem color-5"></div>
        <div class="k-elem color-1"></div>
        <div class="k-elem color-2"></div>
        <div class="k-elem color-3"></div>
        <div class="k-elem color-4"></div>
        <div class="k-elem color-5"></div>
        <div class="k-elem color-1"></div>
        <div class="k-elem color-2"></div>
        <div class="k-elem color-3"></div>
        <div class="k-elem color-4"></div>
        <div class="k-elem color-5"></div>
        <div class="k-elem color-1"></div>
        <div class="k-elem color-2"></div>
        <div class="k-elem color-3"></div>
        <div class="k-elem color-4"></div>
        <div class="k-elem color-5"></div>
        <div class="k-elem color-1"></div>
        <div class="k-elem color-2"></div>
        <div class="k-elem color-3"></div>
        <div class="k-elem color-4"></div>
        <div class="k-elem color-5"></div>
        <div class="k-elem color-1"></div>
        <div class="k-elem color-2"></div>
        <div class="k-elem color-3"></div>
        <div class="k-elem color-4"></div>
        <div class="k-elem color-5"></div>
        <div class="k-elem color-1"></div>
        <div class="k-elem color-2"></div>
        <div class="k-elem color-3"></div>
        <div class="k-elem color-4"></div>
        <div class="k-elem color-5"></div>
        <div class="k-elem color-1"></div>
        <div class="k-elem color-2"></div>
        <div class="k-elem color-3"></div>
        <div class="k-elem color-4"></div>
        <div class="k-elem color-5"></div>
        <div class="k-elem color-1"></div>
        <div class="k-elem color-2"></div>
        <div class="k-elem color-3"></div>
        <div class="k-elem color-4"></div>
        <div class="k-elem color-5"></div>
        <div class="k-elem color-1"></div>
        <div class="k-elem color-2"></div>
        <div class="k-elem color-3"></div>
        <div class="k-elem color-4"></div>
        <div class="k-elem color-5"></div>
        <div class="k-elem color-1"></div>
        <div class="k-elem color-2"></div>
        <div class="k-elem color-3"></div>
        <div class="k-elem color-4"></div>
        <div class="k-elem color-5"></div>
        <div class="k-elem color-1"></div>
        <div class="k-elem color-2"></div>
        <div class="k-elem color-3"></div>
        <div class="k-elem color-4"></div>
        <div class="k-elem color-5"></div>
        <div class="k-elem color-1"></div>
        <div class="k-elem color-2"></div>
        <div class="k-elem color-3"></div>
        <div class="k-elem color-4"></div>
        <div class="k-elem color-5"></div>
        <div class="k-elem color-1"></div>
        <div class="k-elem color-2"></div>
        <div class="k-elem color-3"></div>
        <div class="k-elem color-4"></div>
        <div class="k-elem color-5"></div>
        <div class="k-elem color-1"></div>
        <div class="k-elem color-2"></div>
        <div class="k-elem color-3"></div>
        <div class="k-elem color-4"></div>
        <div class="k-elem color-5"></div>
        <div class="k-elem color-1"></div>
        <div class="k-elem color-2"></div>
        <div class="k-elem color-3"></div>
        <div class="k-elem color-4"></div>
        <div class="k-elem color-5"></div>
        <div class="k-elem color-1"></div>
        <div class="k-elem color-2"></div>
        <div class="k-elem color-3"></div>
        <div class="k-elem color-4"></div>
        <div class="k-elem color-5"></div>
        <div class="k-elem color-1"></div>
        <div class="k-elem color-2"></div>
        <div class="k-elem color-3"></div>
        <div class="k-elem color-4"></div>
        <div class="k-elem color-5"></div>
        <div class="k-elem color-1"></div>
        <div class="k-elem color-2"></div>
        <div class="k-elem color-3"></div>
        <div class="k-elem color-4"></div>
        <div class="k-elem color-5"></div>
        <div class="k-elem color-1"></div>
        <div class="k-elem color-2"></div>
        <div class="k-elem color-3"></div>
        <div class="k-elem color-4"></div>
        <div class="k-elem color-5"></div>
        <div class="k-elem color-1"></div>
        <div class="k-elem color-2"></div>
        <div class="k-elem color-3"></div>
        <div class="k-elem color-4"></div>
        <div class="k-elem color-5"></div>
        <div class="k-elem color-1"></div>
        <div class="k-elem color-2"></div>
        <div class="k-elem color-3"></div>
        <div class="k-elem color-4"></div>
        <div class="k-elem color-5"></div>
        <div class="k-elem color-1"></div>
        <div class="k-elem color-2"></div>
        <div class="k-elem color-3"></div>
        <div class="k-elem color-4"></div>
        <div class="k-elem color-5"></div>
        <div class="k-elem color-1"></div>
        <div class="k-elem color-2"></div>
        <div class="k-elem color-3"></div>
        <div class="k-elem color-4"></div>
        <div class="k-elem color-5"></div>
        <div class="k-elem color-1"></div>
        <div class="k-elem color-2"></div>
        <div class="k-elem color-3"></div>
        <div class="k-elem color-4"></div>
        <div class="k-elem color-5"></div>
        <div class="k-elem color-1"></div>
        <div class="k-elem color-2"></div>
        <div class="k-elem color-3"></div>
        <div class="k-elem color-4"></div>
        <div class="k-elem color-5"></div>
        <div class="k-elem color-1"></div>
        <div class="k-elem color-2"></div>
        <div class="k-elem color-3"></div>
        <div class="k-elem color-4"></div>
        <div class="k-elem color-5"></div>
        <div class="k-elem color-1"></div>
        <div class="k-elem color-2"></div>
        <div class="k-elem color-3"></div>
        <div class="k-elem color-4"></div>
        <div class="k-elem color-5"></div>
        <div class="k-elem color-1"></div>
        <div class="k-elem color-2"></div>
        <div class="k-elem color-3"></div>
        <div class="k-elem color-4"></div>
        <div class="k-elem color-5"></div>
        <div class="k-elem color-1"></div>
        <div class="k-elem color-2"></div>
        <div class="k-elem color-3"></div>
        <div class="k-elem color-4"></div>
        <div class="k-elem color-5"></div>
        <div class="k-elem color-1"></div>
        <div class="k-elem color-2"></div>
        <div class="k-elem color-3"></div>
        <div class="k-elem color-4"></div>
        <div class="k-elem color-5"></div>
        <div class="k-elem color-1"></div>
        <div class="k-elem color-2"></div>
        <div class="k-elem color-3"></div>
        <div class="k-elem color-4"></div>
        <div class="k-elem color-5"></div>
        <div class="k-elem color-1"></div>
        <div class="k-elem color-2"></div>
        <div class="k-elem color-3"></div>
        <div class="k-elem color-4"></div>
        <div class="k-elem color-5"></div>
        <div class="k-elem color-1"></div>
        <div class="k-elem color-2"></div>
        <div class="k-elem color-3"></div>
        <div class="k-elem color-4"></div>
        <div class="k-elem color-5"></div>
        <div class="k-elem color-1"></div>
        <div class="k-elem color-2"></div>
        <div class="k-elem color-3"></div>
        <div class="k-elem color-4"></div>
        <div class="k-elem color-5"></div>
        <div class="k-elem color-1"></div>
        <div class="k-elem color-2"></div>
        <div class="k-elem color-3"></div>
        <div class="k-elem color-4"></div>
        <div class="k-elem color-5"></div>
        </div>

        <ul class="portfolio-list">
            <li class="portfolio-elem elem-1">
                <div class="title">Веб-дизайн</div>
                <div class="description">
                    <div class="description-text">
                                        <span>Разработка веб-дизайна для посадочной страницы лучшего ресейлера Coral Travel по Екатеринбургу - компании "Ост-Вест"
                                        </span>
                    </div>
                    <div class="description-img">
                        <img src="/img/port-des.jpg" class="des-img">
                    </div>
                    <div class="close"></div>
                </div>
            </li>
            <li class="portfolio-elem elem-2">
                <div class="title">Интернет-маркетинг</div>
                <div class="description">
                    <div class="description-text">
                                        <span>Разработка SMM-стратегии для магазина Авторской вязаной игрушки Светланы Перцевой.
                                        </span>
                    </div>
                    <div class="close"></div>
                    <div class="description-img">
                        <img src="/img/port-mar.png" class="mar-img">
                    </div>
                </div>
            </li>
            <li class="portfolio-elem elem-3">
                <div class="title">Разработка</div>
                <div class="description">
                    <div class="description-img">
                        <img src="/img/port-dev.png" class="dev-img">
                    </div>
                    <div class="close"></div>
                    <div class="description-text">
                                        <span>Разработка портала для развития проектов и компетенций инноваторов Уральского Федерального Университета
                                        </span>
                    </div>
                </div>
            </li>
            <li class="portfolio-elem elem-4">
                <div class="title">Консалтинг</div>
                <div class="description">
                    <div class="description-img">
                        <img src="/img/port-con.png" class="con-img">
                    </div>
                    <div class="description-text">
                                        <span>Консультация по разработке логотипа и фирменного стиля Российского Государственного Профессионально-педагогического Университета
                                        </span>
                    </div>
                    <div class="close"></div>
                </div>
            </li>
        </ul>
        </div>
        </div>
        </div>
        <div class="section fp-section" id="section4" data-anchor="window-4">
            <div class="frame frame-4">
                <div class="decorate decorate-img-1"></div>
                <div class="decorate decorate-img-2"></div>
                <div class="wrap-content">
                    <h3 class="header h3">
                        <div class="header-text">Наши партнеры по IT-проектам</div>
                        <div class="header-hint">Быть на рынке, Быть в команде.</div>
                    </h3>
                    <ul class="partners-list">
                        <li class="p-l-elem">
                            <a href="http://plasticoma.com/" class="p-l-link" target="_blank">
                                <div class="wrap-img">
                                    <img src="/img/partner-1.jpg" alt="" class="partner-logo">
                                </div>
                                <div class="partner-name">Plasticoma</div>
                                <div class="partner-comment">Когда дизайн выходит за<br/>рамки привычного</div>
                            </a>
                        </li>
                        <li class="p-l-elem">
                            <a href="http://www.iidf.club/fb/" class="p-l-link" target="_blank">
                                <div class="wrap-img">
                                    <img src="/img/partner-2.jpg" alt="" class="partner-logo">
                                </div>
                                <div class="partner-name">Famous bastards</div>
                                <div class="partner-comment">Когда масштаб стратегии<br/>действительно digital</div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section fp-section" id="section5" data-anchor="window-5">
            <div class="frame frame-5">
                <div class="decorate decorate-bg"></div>
                <div class="wrap-content">
                    <h3 class="header h3">
                        <div class="header-text">Обратная связь</div>
                        <div class="header-hint">Царьсофт открыт миру</div>
                    </h3>
                    <div class="call-me">Нам можно позвонить <span>8-343-345-91-85</span> или написать</div>
                    <div class="wrap-form">
                        <?php $form = \yii\widgets\ActiveForm::begin([
                            'options' => ['action'=>'site/feedback']
                        ]); ?>
                            <div class="form-line">
                                <input type="text" placeholder="Фамилия Имя" class="input-text" name="fio" />
                            </div>
                            <div class="form-line">
                                <input type="text" placeholder="Контактный телефон" class="input-phone" name="phone" />
                            </div>
                            <div class="form-line">
                                <input type="email" placeholder="E-mail" class="input-email" name="email" />
                            </div>
                            <div class="form-line">
                                <?= Html::dropDownList('service', '', $simpleComp, ['id'=>'form_service', 'placeholder'=>"Что вас интересует?", 'style'=>'font-weight:bold']);?>
                            </div>
                            <div class="form-line">
                                <textarea placeholder="Примечания" name="desc" ></textarea>
                            </div>
                            <div class="form-line">
                                <?php \demogorgorn\ajax\AjaxSubmitButton::begin([
                                    'label' => 'Отправить',
                                    'ajaxOptions' => [
                                        'type'=>'POST',
                                        'url'=>'site/feedback',
                                        /*'cache' => false,*/
                                        'success' => new \yii\web\JsExpression('function(html){
                                            console.log(html);
                                        }'),
                                    ],
                                    'options' => ['class' => 'btn btn-success', 'type' => 'submit'],
                                ]);
                                \demogorgorn\ajax\AjaxSubmitButton::end();
                                ?>
                            </div>
                        <?php \yii\widgets\ActiveForm::end(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="section fp-section" id="section6" data-anchor="window-6">
        <div class="frame frame-6">
            <div class="content">
                <h3 class="header h3">Почему стоит связаться с нами</h3>
                <ul class="why-we">
                    <li class="w-w-elem elem-1">
                        <span class="w-w-text">Новые знакомства<br/>это новые возможности</span>
                    </li>
                    <li class="w-w-elem elem-2">
                        <span class="w-w-text">Унать о способах решения<br/>именно вашей бизнес задачи</span>
                    </li>
                    <li class="w-w-elem elem-3">
                        <span class="w-w-text">Каждый клиент получает<br/>welcome скидку 5%</span>
                    </li>
                </ul>
            </div>
            <div class="footer">
                <div class="decorate-bg"></div>
                <div class="head-line wrap-column">
                    <div class="column blog-block">Много интересного о компании<br/>в нашем <a href="<?php echo \yii\helpers\Url::toRoute('blog/default/index')?>" class="link link-follow link-solid">Царь-Блоге</a></div>
                    <div class="column social-link">
                        <div class="head">Расскажите о нас друзьям</div>
<!--                        <ul class="soc-list">-->
<!--                            <li class="soc-elem">-->
<!--                                <a href="#" class="soc-link vk"></a>-->
<!--                            </li>-->
<!--                            <li class="soc-elem">-->
<!--                                <a href="#" class="soc-link fb"></a>-->
<!--                            </li>-->
<!--                            <li class="soc-elem">-->
<!--                                <a href="#" class="soc-link tw"></a>-->
<!--                            </li>-->
<!--                        </ul>-->
                        <script type="text/javascript" src="//yastatic.net/share/share.js" charset="utf-8"></script><div class="yashare-auto-init" data-yashareL10n="ru" data-yashareType="none" data-yashareQuickServices="vkontakte,facebook,twitter"></div>
                    </div>
                </div>
                <div class="bottom-line">
                    <div class="cont wrap-column">
                        <div class="column copyright">Copyright (С) Царь-софт, 2013-2014</div>
                        <div class="column Gods-help">Разработно с Божьей помощью</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div id="comp-1" class="popup">
        <div class="header-popup">Веб-дизайн</div>
        <div class="wrap-popup-form">
            <form class="form popup-form">
                <?
                echo Html::radioList('design', '', $comp['design'], [
                    'item' => function ($index, $label, $name, $checked, $value) {
                        return "
                            <label class=\"p-f-label\">
                                <input type=\"radio\" name='".$name."' value='".$label['label']."'>
                                <div class=\"pseudo-radio\"></div>
                                <div class=\"text-label\">".$label['label']."</div>
                                <div class=\"hint\">".$label['hint']."</div>
                            </label>";
                    }
                ]);
                ?>
                <div class="control-line">
                    <a href="#window-5" class="btn btn-success full-w popup-ok">Отправить запрос</a>
                </div>
            </form>
        </div>
    </div>
    <div id="comp-2" class="popup">
        <div class="header-popup">Разработка сайтов</div>
        <div class="wrap-popup-form">
            <form class="form popup-form">
                <?
                echo Html::radioList('development', '', $comp['development'], [
                    'item' => function ($index, $label, $name, $checked, $value) {
                        return "
                            <label class=\"p-f-label\">
                                <input type=\"radio\" name='".$name."' value='".$label['label']."'>
                                <div class=\"pseudo-radio\"></div>
                                <div class=\"text-label\">".$label['label']."</div>
                                <div class=\"hint\">".$label['hint']."</div>
                            </label>";
                    }
                ]);
                ?>
                <div class="control-line">
                    <a href="#window-5" class="btn btn-success full-w popup-ok">Отправить запрос</a>
                </div>
            </form>
        </div>
    </div>
    <div id="comp-3" class="popup">
        <div class="header-popup">Интернет-маркетинг</div>
        <div class="wrap-popup-form">
            <form class="form popup-form">
                <?
                echo Html::radioList('marketing', '', $comp['marketing'], [
                    'item' => function ($index, $label, $name, $checked, $value) {
                        return "
                            <label class=\"p-f-label\">
                                <input type=\"radio\" name='".$name."' value='".$label['label']."'>
                                <div class=\"pseudo-radio\"></div>
                                <div class=\"text-label\">".$label['label']."</div>
                                <div class=\"hint\">".$label['hint']."</div>
                            </label>";
                    }
                ]);
                ?>
                <div class="control-line">
                    <a href="#window-5" class="btn btn-success full-w popup-ok">Отправить запрос</a>
                </div>
            </form>
        </div>
    </div>
    <div id="comp-4" class="popup">
        <div class="header-popup">Консалтинг</div>
        <div class="wrap-popup-form">
            <form class="form popup-form">
                <?
                echo Html::radioList('consulting', '', $comp['consulting'], [
                    'item' => function ($index, $label, $name, $checked, $value) {
                        return "
                            <label class=\"p-f-label\">
                                <input type=\"radio\" name='".$name."' value='".$label['label']."'>
                                <div class=\"pseudo-radio\"></div>
                                <div class=\"text-label\">".$label['label']."</div>
                                <div class=\"hint\">".$label['hint']."</div>
                            </label>";
                    }
                ]);
                ?>
                <div class="control-line">
                    <a href="#window-5" class="btn btn-success full-w popup-ok">Отправить запрос</a>
                </div>
            </form>
        </div>
    </div>

    <?php $this->endBody() ?>


<!--    <script src="/js/jquery-1.11.1.min.js"></script>-->
    <script src="/js/jquery.slimscroll.min.js"></script>
    <script src="/js/jquery.easings.min.js"></script>
    <script src="/js/jquery.fullPage.min.js"></script>
    <script src="/js/jquery.selectric.js"></script>
    <script src="/js/respond.min.js"></script>
    <script src="/js/jquery.fancybox.pack.js"></script>
    <script src="/js/script.js"></script>
    <script>
        $(function(){
            $(".popup-ok").on('click', function(){
                var value = $(this).closest("form").find("input[type=radio]:checked").val();console.log(value);
//                $("#form_service").val(value);
                $("#form_service :contains('"+value+"')").attr("selected", "selected");
                $('#form_service').selectric('refresh');
                $.fancybox.close();
            });
        });
    </script>
    </body>
    </html>
<?php $this->endPage() ?>