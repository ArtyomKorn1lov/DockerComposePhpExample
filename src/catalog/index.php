<?php
require($_SERVER["DOCUMENT_ROOT"]."/template/header.php");
/** Выбор страницы каталога или детальной страницы товара */
/** @var string|bool $productId */
$productId = isset($_REQUEST["id"]) && !empty($_REQUEST["id"]) && htmlspecialchars($_REQUEST["id"]);
if ($productId) {
    require_once "detail.php";
}
else {
    require_once "catalog.php";
}
?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/template/footer.php"); ?>
