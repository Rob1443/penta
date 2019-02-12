<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="content">
    <div class="arajin">
        <div class="sumka"><p class="bigsale">BIG SALE</p><br>
            <button class="but"><a class="st">DISCOVER STORE</a></button>
            <button class="but1"><a class="st">LEARN MORE</a></button>
        </div>
        <div class="sumka"><img class="im" src="image/Layer-22.png" height="495"></div>
    </div>
    <div class="arajin1">
        <?php
        if(!empty($categories)) {
            foreach($categories as $cat) {

            }
        }

        ?>

        <div class="sumka">
            <div class="b1">

                <p class="bigsale1"><?php  echo $categories[0]["title"] ?></p>
                <p class="col">COLECTION</p>
                <button class="but11"><a class="st">DISCOVER NOW</a></button>
            </div>
            <div class="img"><img class="im" src="image/<?= $categories[0]["image"] ?>" height="495"></div></div>
        <div class="sumka2">
            <div class="two">
                <p class="wom"><?php  echo $categories[1]["title"] ?></p>
                <p class="col1">COLECTION</p>
                <button class="but11"><a class="st">DISCOVER NOW</a></button>
                <div class="imw"><img src="image/<?= $categories[1]["image"] ?>" height="220"></div>
            </div>
            <div class="two1">
                <p class="wom"><?php  echo $categories[2]["title"] ?></p>
                <p class="col1">COLECTION</p>
                <button class="but11"><a class="st">DISCOVER NOW</a></button>
                <div class="imw"><img src="image/<?= $categories[2]["image"] ?>"" height="220"></div>
            </div>
        </div>
    </div>
    <div class="ask">
        <div class="kind">
            <p class="text">WHATS NEW</p>
        </div>
        <div class="three">
            <div class="ones">
                <img class="imlo" src="image/Layer-4.png" height="250">

            </div>
            <div class="ones">
                <img src="image/Layer-11.png" height="350"></div>

            <div class="ones1">
                <img src="image/Layer-12.png" height="350"></div>

        </div>
    </div>
    <div class="ask">
        <div class="kind11">
            <p class="text">FEATURED PRODUCTS</p>

        </div>
        <div class="three">
            <div class="ones">
                <img class="imlo" src="image/Layer-4.png" height="250">

            </div>
            <div class="ones">
                <img src="image/Layer-11.png" height="350"></div>

            <div class="ones1">
                <img src="image/Layer-15.png" height="350"></div>

        </div>
        <div class="three1">
            <div class="ones">
                <img class="imlo111" src="image/Layer-13.png" height="350">

            </div>
            <div class="ones">
                <img src="image/Layer-15.png" height="350"></div>

            <div class="ones1">
                <img src="image/Layer-12.png" height="350"></div>

        </div>
    </div>
    <div class="sos">
        <div class="kind11">
            <p class="text">LATEST POSTS</p>
        </div>
        <div class="rufer1" >
            <img src="image/Layer-8.png" width="100%" height="280"><br>
            <p>Top 15 Personalized Gift Ideas For Mom</p>
        </div>
        <div class="rufer" > <img src="image/Layer-7.png" width="100%" height="280"><br>
            <p>Top 15 Personalized Gift Ideas For Mom</p>
        </div>
        <div class="rufer" > <img src="image/Layer-10.png" width="100%" height="280"><br>
            <p>Top 15 Personalized Gift Ideas For Mom</p>
        </div>
    </div>

</div>
</div>
