<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <!-- BXSLIDER -->
    <link rel="stylesheet" href="/css/jquery.bxslider.css">
    <!-- END OF BXSLIDER -->
    <!-- STYLES -->
    <link rel="stylesheet" href="/css/styles.css">
    <!-- END OF STYLES -->
</head>
<body id=#main-wrap>
<?php $this->beginBody() ?>
    <!-- SCRIPTS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- BXSLIDER -->
    <script src="/js/jquery.bxslider.min.js"></script>
    <!-- END OF BXSLIDER -->
    <script src="/js/main.js"></script>  
    <!-- END OF SCRIPTS -->

    <header>
        <!-- TOPLINE -->
        <div class="topline">
            <div class="container clearfix">        
                <a href="#" class="topline-elem1">
                    <img src="/img/topline-mail.png" alt="">
                    <span>
                        info@print4you.su
                    </span>
                </a>
                <a href="#" class="topline-elem2">
                    <img src="/img/topline-phone.png" alt="">
                    <span>
                        +7 (963) <strong>332 56 32</strong>
                    </span>
                </a>
                <a href="#" class="topline-elem3">Заказать звонок</a>
                <a href="<?= Url::to(['site/cabinet']) ?>" class="topline-elem4">      
                    <img src="/img/topline-lk.png" alt=""><span>Личный кабинет</span>
                </a>
            </div>
        </div>
        <!-- END OF TOPLINE -->

        <!-- TOPMENU -->
        <div class="topmenu">
            <div class="container clearfix">
                <a href="#" class="topmenu-left">
                    <img src="/img/header-logo.png">
                    <span>Печатаем и шьем <br> для вас</span>
                </a>
                <div class="topmenu-right">
                    <!-- TOP-RIGHT-ABOVE -->
                    <div class="topmenu-right-above clearfix">
                        <span class="topmenu-right-above-elem1">
                            Футболки Cанкт-Петербурга с принтом – дело наших рук!
                        </span>
                        <a href="#" class="topmenu-right-above-elem2 clearfix">
                            <img src="/img/header-pin.png" alt="">
                            <span>
                                Наб. реки Фонтанки, 38 
Гостиный двор (в арке)
                            </span>
                        </a>
                        <a href="#" class="topmenu-right-above-elem3 clearfix">
                            <img src="/img/header-pin.png" alt="">
                            <span>
                                Площадь Восстания 
Гончарная, 2
                            </span>
                        </a>
                        <div class="topmenu-right-above-elem4">
                            <a href="#">
                                <img src="/img/header-search.png" alt="">
                            </a>
                            <a href="#">
                                <img src="/img/header-menu.png" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- END OF TOP-RIGHT-ABOVE -->

                    <div class="topmenu-right-below clearfix">
                        <nav>
                            <a href="<?= Url::home() ?>" class='active'>Главная</a>
                            <a href="<?= Url::to(['site/about']) ?>">О нас</a>
                            <a href="<?= Url::to(['uslugi/']) ?>">Услуги</a>
                            <a href="<?= Url::to(['site/dostavka']) ?>">Оплата и доставка</a>
                            <a href="<?= Url::to(['site/calculator']) ?>">Конструктор</a>
                            <a href="<?= Url::to(['site/franchise']) ?>">Франшиза</a>
                            <a href="<?= Url::to(['site/contacts']) ?>">Контакты</a>
                        </nav>        
                        <a href="#" class="topmenu-right-below-in">
                            <img src="/img/header-in.png" alt="">
                        </a>
                        <a href="#" class="topmenu-right-below-vk">
                            <img src="/img/header-vk.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END OF TOPMENU -->
    </header>

    <?= Alert::widget() ?>
    <?= $content ?> 

    <footer>
        <div class="container clearfix">
            <div class="footer-left">
                <div class="footer-left-contacts">
                    <p>Студия на Площади Восстания</p>
                    <a href="tel:89633325632">+7 (963) <strong>332 56 32</strong></a>
                    <p class="with-margin">Студия на Фонтанке</p>
                    <a href="tel:89633092848"><strong>309 28 48</strong></a>
                    <a href="#" class="footer-left-callMe">Заказать звонок</a>
                </div>
            </div>
            <div class="footer-center">
                <a href="#">
                    <img src="/img/footer-logo.png" alt="" class="footer-center-print">
                </a>
                <span>Печатаем и шьем <br> для вас</span>
                <div class="footer-center-socials">
                    <a href="#"><img src="/img/footer-vk.png" alt=""></a>
                    <a href="#"><img src="/img/footer-in.png" alt=""></a>
                </div>
            </div>
            <div class="footer-right">
                <span>Последние фотографии</span>
                <div class="footer-right-photos">
                    <a href="#"><img src="/img/footer-photo1.png" alt=""></a>
                    <a href="#"><img src="/img/footer-photo2.png" alt=""></a>
                    <a href="#"><img src="/img/footer-photo3.png" alt=""></a>
                </div>
            </div>
        </div>
    </footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>