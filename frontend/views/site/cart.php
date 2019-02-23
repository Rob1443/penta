<div class="table">
    <div class="layout-inline row th">
        <div class="col col-pro"><p>Product</p></div>
        <div class="col col-price align-center "><p>Price</p></div>
        <div class="col col-qty align-center"><p>Available <br> Stock</p></div>
        <div class="col col-qty align-center"><p>Buy</p></div>

    </div>
    <?php foreach($product as $item){
        ?>
        <div class="layout-inline row">

            <div class="col col-pro layout-inline">
                <img src="<?= \yii\helpers\Url::to('@web/images/uploads/products/' . $item['image']) ?>"  >
                <p class="col col-pro layout-inline"><?= \yii\helpers\Url::to( $item['title']) ?></p>
            </div>

            <div class="col col-price col-numeric align-center ">
                <p><?= \yii\helpers\Url::to( $item['price']) ?>$</p>
            </div>

            <div class="col col-qty layout-inlin">
                <input type="numeric" value="<?= \yii\helpers\Url::to( $item['available_stock']) ?>"/>
            </div>
            <button type="submit" name="addtocart" value="5" class="t">Buy For Sale Price <?= \yii\helpers\Url::to( $item['sale_price']) ?>$</button>

        </div>


        <?php
    }
    ?>

        </div>



<style>
    @font-face {
        font-family: 'Cinzel', serif;
    }
    p {
        color: black;
    }

    input {
        font-size: 1.4em;
        color: black;
        text-align: center;
    }

    img {
        max-width: 9em;
        width: 100%;
        overflow: hidden;
        margin-right: 1em;
    }

    a {
        text-decoration: none;
    }
    .clo{
        background-color: #f7f7f7;
        display: inline;
        float: left;
    }

    .heading {
        padding: 1em;
        position: relative;
        z-index: 1;
        color: #f7f7f7;
    }
    .table {
        background: #f7f7f7;
        border-radius: 0.6em;
        clear: both;
    }


    .layout-inline > * {
        display: inline-block;
    }

    .align-center {
        text-align: center;
    }

    .th {
        color: #f7f7f7;
        text-transform: uppercase;
        font-weight: bold;
        font-size: 1.5em;
    }

    .tf {
        text-transform: uppercase;
        text-align: right;
    }

    .tf p {
        color: #f7f7f7;
    }

    .col {
        padding: 1em;
    }

    .col-pro {
        width: 44%;
    }

    .col-pro > * {
        vertical-align: middle;
    }

    .col-qty {
        text-align: center;
        width: 17%;
    }

    .col-numeric p {

    }
    .tf .col {
        width: 20%;
    }

    .row > div {
        vertical-align: middle;
    }

    .row-bg2 {
        background: #f7f7f7;
    }


    .col-qty > * {
        vertical-align: middle;
    }

    .col-qty > input {
        max-width: 2em;
    }
    .btn {
        padding: 10px 30px;
        border-radius: 0.3em;
        font-size: 1.4em;
        font-weight: bold;
        color: #fff;
    }

    .btn:hover {
        box-shadow: 0 3px 0 rgba(59,154,198, 0)
    }

    .btn-update {
        float: right;
        margin: 0 0 1.5em 0;
    }

    .transition {
        transition: all 0.3s ease-in-out;
    }

    @media screen and ( max-width: 755px) {
        .container {
            width: 98%;
        }

        .col-pro {
            width: 35%;
        }

        .col-qty {
            width: 22%;
        }

        img {
            max-width: 100%;
            margin-bottom: 1em;
        }
    }

    @media screen and ( max-width: 591px) {

    }
    .col col-pro layout-inline{
        font-family: 'Cinzel', serif;
        font-size: 10px;
    }
</style>