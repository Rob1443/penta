<?php
//
///* @var $this yii\web\View */
//
//$this->title = 'PENTA';
//?>
<!---->
<!---->
<!--        <div>-->
<!--            <p class="t">--><?php //echo $product['title']; ?><!--</p>-->
<!--            <img src="--><?//= \yii\helpers\Url::to('@web/images/uploads/products/' . $product['image']) ?><!--">-->
<!--        </div>-->
<!---->
<!---->
<!--    </div>-->
<!-- Product Details Area Start -->
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
                <h3 class="t"><?= \yii\helpers\Url::to( $product['title']) ?></h3>
                <div class="kka">
                    <p class="price"><?= \yii\helpers\Url::to( $product['price']) ?></p>
                    <h6><?= \yii\helpers\Url::to( $product['sku']) ?></h6>
                    </a>
                    <div class="ratings-review mb-15 d-flex align-items-center justify-content-between">
                    </div>
                    <p class="avaibility"><i class="fa fa-circle"></i>Available Stock <?= \yii\helpers\Url::to( $product['available_stock']) ?></p>
                </div>

                <div class="short_overview my-5">
                    <p><?= \yii\helpers\Url::to( $product['content']) ?></p>
                </div>
                <form class="cart" method="post">
                    <button type="submit" name="addtocart" value="5" class="btn amado-btn">Add to cart</button>
                </form>

            </div>
        </div>
    </div>
</div>

