<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
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
                    <li>SIGN UP</li>
                    <li>LOGIN</li>
                    <li>ABOUT</li>
                    <li>CONTACT</li>
                </nav></div>
        </div>
        <div class="n" id="n2">
            <nav class="nav">
                <li>HOME</li>
                <li>MEN'S</li>
                <li>WOMEN'S</li>
                <li>BABY</li>
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
