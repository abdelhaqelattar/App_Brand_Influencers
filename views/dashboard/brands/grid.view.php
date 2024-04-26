<?php include APP_FOLDER . '/views/dashboard/layout/open.php' ?>

<div class="grid brands">


    <?php
    if ($data) {
        foreach ($data as $brand) {
    ?>
            <div class="grid-card col-12 col-sm-6 col-md-4">
                <a href="<?=APP_URL?>/brands/<?=$brand->id?>">
                    <img src="<?= strlen($brand->avatar) ?  $brand->avatar : "https://brandwiki.ru/up/brands/adidas_avatar.gif" ?>" alt="">
                    <div class="info">
                        <h2><?= $brand->name ?></h2>
                        <h4>$ <?= number_format($brand->revenue, 2, '.', ',') ?></h4>
                    </div>
                </a>
            </div>

    <?php
        }
    }
    ?>
</div>

<?php include APP_FOLDER . '/views/dashboard/layout/close.php' ?>
