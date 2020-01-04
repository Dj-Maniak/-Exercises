<?php
session_start();
if (empty($_POST)) {
    echo "<h1>ТОВАРОВ НЕТУ</h1>"; ?>
    <a href="product.php">Вернуться для вибора товаров</a>
    <?php
} else {
    $productArray = $_POST;
    echo '<h2>Ваши товары:</h2>';
    foreach ($productArray as $key => $value) {
        echo '<h3>';
        echo $key;
        echo '</h3>';
    }
    $serialize = serialize($productArray);
    $_SESSION['SSS'] = $serialize;
    echo '</br>';
    // var_dump($_SESSION['SSS']);
    ?>
    <a href="product.php">Добавить еще товари</a></br>
    <?php
}
?>
<h2>Оформить заказ</h2>
<h4>Для оформления уведите ваш номер телефона</h4>
<input type="text">
<input type="submit">




