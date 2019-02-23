<?php

/* @var $this yii\web\View */

$this->title = 'PENTA';
?>
<style>
    .lock{
        height: 50px;
        width: 70px;
        float: left;
        display: inline;
        margin: 11px;
    }
    .lock1{
        height: 50px;
        width: 70px;
        float: left;
        display: inline;
        margin-left: 0;
        margin-top: 10px;
        margin-right: 10px;
    }
    .block{
        width: 100%;
        margin-left: 130px;
        margin-right: -200px;
    }
    .varchar{
        margin-left: -250px;
    }
</style>
<div class="d">
    <div class="row">
        <div class="col-12 col-lg-7">
            <div class="single_product_thumb">
                <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                    <div class="block">
                        <div class="sss">
                            <img src="<?= \yii\helpers\Url::to('@web/images/uploads/products/' . $product['image']) ?>">
                            </a>
                        </div>

                        <div class="lock1">
                            <img src="<?= \yii\helpers\Url::to('@web/images/uploads/products/' . $product['image'])?>" height="100" >
                            </a>
                        </div>
                        <div class="lock">
                            <img  src="<?= \yii\helpers\Url::to('@web/images/uploads/products/' . $product['image'])?>" height="100" >
                            </a>
                        </div>
                        <div class="lock">
                            <img  src="<?= \yii\helpers\Url::to('@web/images/uploads/products/' . $product['image'])?>" height="100">
                            </a>
                        </div>
                        <div class="lock">
                            <img  src="<?= \yii\helpers\Url::to('@web/images/uploads/products/' . $product['image'])?>" height="100">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-5">
            <div class="varchar">
                <h2 class="t"><?= \yii\helpers\Url::to( $product['title']) ?></h2>
                <div class="kka">
                    <h4 class="t">Price <?= \yii\helpers\Url::to( $product['price']) ?>$</h4>
                    <h4 class="t">Sale Price <?= \yii\helpers\Url::to( $product['sale_price']) ?>$</h4>
                    <h4 class="t"><?= \yii\helpers\Url::to( $product['sku']) ?></h4>
<!--                    senq te jenskii sumka-->
                    </a>
                    <h4 class="t">Available Stock <?= \yii\helpers\Url::to( $product['available_stock']) ?></h4>
                </div>

                <div class="short_overview my-5">
                    <h4 class="t" ><?= \yii\helpers\Url::to( $product['content']) ?></h4>
<!--                    ese en erkar barak bnutagirne-->
                </div>
                <form class="cart" method="post">
                    <button type="submit" name="addtocart" value="5" class="t"><a href="<?= \yii\helpers\Url::to(['/site/cart/']) ?>">Add to cart</a></button>
                    <button type="submit" name="addtocart" value="5" class="t">Buy For Sale Price <?= \yii\helpers\Url::to( $product['sale_price']) ?>$</button>
                </form>

            </div>
        </div>
    </div>
</div>

