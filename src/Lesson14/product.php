<?php
session_start();
?>

<form method="post" action="basket.php">
    <h2>Добавте товар в корзину</h2>
    <input type="checkbox" name="Молоко">Молоко</br>
    <input type="checkbox" name="Йогурт">Йогурт</br>
    <input type="checkbox" name="Кефир">Кефир</br>
    <input type="checkbox" name="Ряженка">Ряженка</br>
    <input type="checkbox" name="Сметана">Сметана</br>
    <input type="submit" value="Корзина">
</form>

<?php
echo "<h1>";
$unserialize = unserialize($_SESSION['SSS']);
//var_dump($unserialize);
echo "<h2>ТОВАРИ КОТОРЫЕ НАХОДЯТЬСЯ У ВАШЕЙ КОРЗИНЕ</h2>";
foreach ($unserialize as $key => $value) {
    echo '<h3>';
    echo $key;
    echo '</h3>';
}
?>

