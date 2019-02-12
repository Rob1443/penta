<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers;
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>


    <header>
        <div class="n" id="n1">
            <div class="penta">
                <div class="mail"><p>(077)777777</p></div>
                <div  class="mail1"><p>pt@mail.ru</p></div>
            </div>
            <div class="penta"><h1 class="pen">Penta</h1></div>
            <div class="penta"><nav>
                    <li><a href="<?= \yii\helpers\Url::to(['/']) . 'site/signup' ?>">SIGN UP</a></li>
                    <li><a href="<?= \yii\helpers\Url::to(['/']) . 'site/login' ?>">LOGIN</a></li>
                    <li><a href="<?= \yii\helpers\Url::to(['/']) . 'site/about' ?>">ABOUT</a></li>
                    <li><a href="<?= \yii\helpers\Url::to(['/']) . 'site/contact' ?>">CONTACT</a></li>
                </nav></div>
        </div>
        <div class="n" id="n2">
            <nav class="nav">
                <li class="li1"><a href="<?= \yii\helpers\Url::to(['/']) . 'site/index' ?>">HOME</a></li>
                <li><a href="">MEN'S</a></li>
                <li><a href="">WOMEN'S</a></li>
                <li><a href="">KIDS'S</a></li>
            </nav>
        </div>
    </header>
        <?= $content ?>

</div>


    <footer>
        <nav class="nav1">
            <li>CONTACT</li>
            <li>RETURN POLICY</li>
            <li>SHIPPING</li>
            <li>ABOUT</li>
            <li>PRIVACY POLICY</li>
            <br>

        </nav>
    </footer>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
