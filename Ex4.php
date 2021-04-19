<?php
if(isset($_GET['string'])) {
    echo strrev($_GET['string']);
}
?>

<form>
    <p>Слово:</p><input type="text" name="string">
    <br><br>
    <button name="form">Отправить!</button>
</form>