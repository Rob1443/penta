<?php

/* @var $this yii\web\View */

$this->title = 'PENTA';
?>
<div class="content1">
    <div class="kind111">
        <p class="text1">MEN'S</p>
    </div>
    <div class="ask">
        <div class="three">
            <?php foreach($men as $value){
                ?>
                <div class="ones">
                    <img src="<?= \yii\helpers\Url::to('@web/images/uploads/products/' . $value['image']) ?>">
                    <div>
                        <button class="under"><a href="<?= \yii\helpers\Url::to(['/site/single', 'id' =>$value['id'] ]) ?>" class="t">Buy For <?= \yii\helpers\Url::to( $value['price']) ?>$</a></button>
                    </div>
                </div>
                <?php
            }
            ?>

        </div>
    </div>
    <div class="sos1">
    </div>
</div>



