<?php

/* @var $this yii\web\View */

$this->title = 'PENTA';
?>
<div class="content">
    <div class="arajin">
        <div class="sumka"><p class="bigsale">BIG SALE</p><br>
            <button class="but"><a class="st">DISCOVER STORE</a></button>
            <button class="but1"><a class="st">LEARN MORE</a></button>
        </div>
        <div class="sumka"><img class="imm" src="images/Layer-22.png" height="495"></div>
    </div>
    <div class="arajin1">
        <div class="sumka">
            <div class="b1">
                <p class="bigsale1"><?php echo $categories[0]["title"] ?></p>
                <p class="col">COLECTION</p>
                <button class="but11"><a href="site/men" class="st">DISCOVER NOW</a></button>
            </div>
            <div class="img"><img class="im" src="images/<?= $categories[0]["image"] ?>" height="495"></div></div>
        <div class="sumka2">
            <div class="two">
                <p class="wom"><?php  echo $categories[1]["title"] ?></p>
                <p class="col1">COLECTION</p>
                <button class="but11"><a href="site/women" class="st">DISCOVER NOW</a></button>
                <div class="imw"><img src="images/<?= $categories[1]["image"] ?>" height="220"></div>
            </div>
            <div class="two1">
                <p class="wom"><?php  echo $categories[2]["title"] ?></p>
                <p class="col1">COLECTION</p>
                <button class="but11"><a href="site/kids" class="st">DISCOVER NOW</a></button>
                <div class="imw"><img src="images/<?= $categories[2]["image"] ?>" height="220"></div>
            </div>
        </div>
    </div>
    <div class="ask">
        <div class="kind">
            <p class="text">WHATS NEW</p>
        </div>
        <div class="three">
        <?php foreach($new as $item){
          ?>
            <div class="ones">
                <img src="<?= \yii\helpers\Url::to('@web/images/uploads/products/' . $item['image']) ?>">
                <div>
                    <button class="under"><a href="<?= \yii\helpers\Url::to(['/site/single', 'id' =>$item['id'] ]) ?>" class="t">Buy For <?= \yii\helpers\Url::to( $item['price']) ?>$</a></button>
                </div>
            </div>

            <?php
        }
        ?>

        </div>
    </div>
    <div class="ask11">
        <div class="kind11">
            <p class="text">FEATURED PRODUCTS</p>
        </div>
        <div class="three1">
            <?php foreach($featured as $item){
                ?>
                <div class="ones111">
                    <img src="<?= \yii\helpers\Url::to('@web/images/uploads/products/' . $item['image']) ?>"  >
                    <div>
                        <button class="under"><a href="<?= \yii\helpers\Url::to(['/site/single', 'id' =>$item['id'] ]) ?>" class="t">Buy For <?= \yii\helpers\Url::to( $item['price']) ?>$</a></button></div>
                </div>
                <?php
            }
            ?>

        </div>
        </div>
    <div class="sos">
        <div class="kind11">
            <p class="text">LATEST POSTS</p>
        </div>
        <?php foreach($forstylish as $item){
            ?>
            <div class="rufer1" >
                <img src="<?= \yii\helpers\Url::to('@web/images/uploads/products/' . $item['image'])?>" width="100%" height="280"><br>
                <p>Top 15 Personalized Gift Ideas For Mom</p>
            </div>
            <?php
        }
        ?>
    </div>
    </div>


