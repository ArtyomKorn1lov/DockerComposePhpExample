<?php
use lib\SiteHelper;
use lib\Repositories\ProductsRepository;
use lib\Models\ProductListModel;
$productRepository = new ProductsRepository();
$products = $productRepository->getAll();
/** @var ProductListModel|bool $dayProduct */
$dayProduct = false;
/** @var ProductListModel $product */
foreach ($products as $product) {
    if ($product->ProductDay) {
        $dayProduct = $product;
        break;
    }
}
?>
<div style="width: 1100px; margin: 0 auto">
    <hr>
    <h2>
        Огромный выбор телефонов по самой выгодной цене
    </h2>
    <?php if ($dayProduct) { ?>
        <div style="margin-bottom: 20px; float: left;">
            <hr>
            <h2>
                Товар дня!
            </h2>

            <?php if ($dayProduct->Picture) { ?>
                <div id="openedProduct-img">
                    <img src="<?= $dayProduct->Picture ?>">
                </div>
            <?php } ?>
            <div id="openedProduct-content">
                <?php if ($dayProduct->Name) { ?>
                    <h1 id="openedProduct-name">
                        <?= $dayProduct->Name ?>
                    </h1>
                <?php } ?>
                <?php if ($dayProduct->Text) { ?>
                    <div id="openedProduct-desc">
                        <?= SiteHelper::truncateString($dayProduct->Text, 1000) ?>
                    </div>
                <?php } ?>
                <?php if ($dayProduct->Price) { ?>
                    <div id="openedProduct-price">
                        Цена: <?= $dayProduct->Price ?> $
                    </div>
                <?php } ?>
                <a href="?id=<?= $dayProduct->Id ?>" class="shopUnitMore">
                    Подробнее
                </a>
            </div>
        </div>
    <?php } ?>
    <hr>

    <div style="width: 1100px; margin: 0 auto">
        <h1>
            Каталог товаров
        </h1>
        <div>
            <?php if ($products) { ?>
                <?php /* @var $product ProductListModel */
                foreach ($products as $product) { ?>
                    <div class="shopUnit" id="<?= $product->Id ?>">
                        <?php if ($product->Picture) { ?>
                            <img src="<?= $product->Picture ?>"/>
                        <?php } ?>
                        <?php if ($product->Name) { ?>
                            <div class="shopUnitName">
                                <?= $product->Name ?>
                            </div>
                        <?php } ?>
                        <?php if ($product->Text) { ?>
                            <div class="shopUnitShortDesc">
                                <?= SiteHelper::truncateString($product->Text, 400) ?>
                            </div>
                        <?php } ?>
                        <?php if ($product->Price) { ?>
                            <div class="shopUnitPrice">
                                Цена: <?= $product->Price ?> $
                            </div>
                        <?php } ?>
                        <a href="?id=<?= $product->Id ?>" class="shopUnitMore">
                            Подробнее
                        </a>
                    </div>
                <?php } ?>
            <?php } else { ?>
                <p>Извините, товары не найдены</p>
            <?php } ?>
        </div>
    </div>
</div>
<script>
    document.title = "Каталог";
</script>