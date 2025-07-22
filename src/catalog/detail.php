<?php
use lib\SiteHelper;
use lib\Repositories\ProductsRepository;
use lib\Models\ProductListModel;
$productRepository = new ProductsRepository();
/** @var string|bool $productId */
$productId = (isset($_REQUEST["id"]) && !empty($_REQUEST["id"])) ? htmlspecialchars($_REQUEST["id"]) : false;
if (!$productId) {
    die("Ошибка: неверный Id товара");
}
/** @var ProductListModel $product */
$product = $productRepository->getById($productId);
?>
<div style="width: 1100px; margin: 0 auto">
    <hr>
    <div style="margin-bottom: 20px; float: left;">
        <h2>
            Товар каталога
        </h2>
        <?php if ($product) { ?>
            <?php if ($product->Picture) { ?>
                <div id="openedProduct-img">
                    <img src="<?= $product->Picture ?>">
                </div>
            <?php } ?>
            <div id="openedProduct-content">
                <?php if ($product->Name) { ?>
                    <h1 id="openedProduct-name">
                        <?= $product->Name ?>
                    </h1>
                <?php } ?>
                <?php if ($product->Text) { ?>
                    <div id="openedProduct-desc">
                        <?= $product->Text ?>
                    </div>
                <?php } ?>
                <?php if ($product->Price) { ?>
                    <div id="openedProduct-price">
                        Цена: <?= $product->Price ?> $
                    </div>
                <?php } ?>
                <a href="/catalog/" class="shopUnitMore">
                    Обратно к каталогу
                </a>
            </div>
        <?php } else { ?>
            <h2>
                Выбранный товар не найден!
            </h2>
        <?php } ?>
    </div>
</div>
<script>
    document.title = "<?= $product->Name ?>";
</script>