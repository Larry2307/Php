<?php
if(isset($_GET['days'])) {
    echo "Секунд:".$_GET['days']*86400;
}
?>

<form>
    <p>Дней:</p><input type="text" name="days">
    <br><br>
    <button name="form">Отправить!</button>
</form>
