<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="content1">
    <div class="kind111">
        <p class="text1">WOMEN'S</p>
    </div>
    <div class="ask">
        <div class="three">
            <?php foreach($women as $value){
                ?>
                <div class="ones">
                    <img src="<?= \yii\helpers\Url::to('@web/images/uploads/products/' . $value['image']) ?>"  height="250">

                </div>
                <?php
            }
            ?>

        </div>
    </div>
    <div class="sos1">
    </div>
</div>

