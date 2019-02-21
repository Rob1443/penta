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

    <header>
        <div class="n" id="n1">
            <div class="penta">
                <div class="mail"><p>(077)777777</p></div>
                <div  class="mail1"><p>pt@mail.ru</p></div>
            </div>
            <div class="penta"><h1 class="pen">Penta</h1></div>
            <div class="penta">
                <?php
                $menuItems = [
                    ['label' => 'About', 'url' => ['site/about']],
                    ['label' => 'Contact', 'url' => ['site/contact']],
                ];
                if (Yii::$app->user->isGuest) {
                    $menuItems[] = ['label' => 'Signup', 'url' => ['site/signup']];
                    $menuItems[] = ['label' => 'Login', 'url' => ['site/login']];
                } else {
                    $menuItems[] = '<li class="li">'
                        . Html::beginForm(['/site/logout'], 'post')
                        . Html::submitButton(
                            'Logout (' . Yii::$app->user->identity->username . ')',
                            ['class' => 'logout']
                        )
                        . Html::endForm()
                        . '</li>';
                }
                echo Nav::widget([
                    'options' => ['class' => 'li'],
                    'items' => $menuItems,
                ]);

                ?>
            </div>
        </div>
        <div class="n" id="n2">
            <ul class="nav">
                <li class="li1"><a href="<?= \yii\helpers\Url::to(['/']) ?>">HOME</a></li>
                <?php
                $menuItems = [
                    ['label' => "MEN'S", 'url' => ['site/men']],
                    ['label' => "WOMEN'S", 'url' => ['site/women']],
                    ['label' => "KIDS'S", 'url' => ['site/kids']],
                ];
                echo Nav::widget([
                    'options' => ['class' => 'wmk'],
                    'items' => $menuItems,
                ]);

                ?>
            </ul>
        </div>
    </header>
        <?= $content ?>
    <footer>
        <ul class="nav1">
            <li>CONTACT</li>
            <li>RETURN POLICY</li>
            <li>SHIPPING</li>
            <li>ABOUT</li>
            <li>PRIVACY POLICY</li>
            <br>

        </ul>
    </footer>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
