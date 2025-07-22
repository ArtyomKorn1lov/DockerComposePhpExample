<?php
require($_SERVER["DOCUMENT_ROOT"]."/template/header.php");
?>
<h2>
    Связаться с нами
</h2>
<form id="form" action="/ajax/contact-us.php" method="post">
    <h5>Имя</h5>
    <input type="text" placeholder="Введите имя" name="name" minlength="2" maxlength="32" required>
    <h5>Телефон</h5>
    <input type="phone" pattern="^\+7[1-9]{10}$" placeholder="Введите номер телефона" name="phone" required>
    <h5>Эл. Почта</h5>
    <input type="email" placeholder="Введите email пользователя" name="email" required>
    <h5>Опишите вашу проблему</h5>
    <textarea name="description" cols="30" rows="10" placeholder="Введите описание"></textarea>
    <button type="submit">Отправить</button>
</form>
<script>
    document.title = "Связаться с нами";
</script>
<?php require($_SERVER["DOCUMENT_ROOT"]."/template/footer.php"); ?>
