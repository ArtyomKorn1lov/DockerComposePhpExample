<?php
require($_SERVER["DOCUMENT_ROOT"]."/template/header.php");
use lib\SiteHelper;
?>
    <div id="promo">
        <h1 id="promoText">
            Интернет магазин для продажи телефонов
        </h1>
    </div>

    <div id="mainTextWrap">
        <div id="mainText">
            <?php SiteHelper::includeArea("/include/main/main-text.php") ?>
        </div>
    </div>
    <script>
        document.title = "Главная";
    </script>
<?php require($_SERVER["DOCUMENT_ROOT"]."/template/footer.php"); ?>