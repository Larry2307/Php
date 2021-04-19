<?php
if(isset($_POST['surname']) AND isset($_POST['firstname']) AND isset($_POST['patronymic']) ) {
    echo $_POST['surname']." ".$_POST['firstname']." ".$_POST['patronymic'];
}
?>



<form method="post">
    <p>Фамилия:</p><input type="text" name="surname">
    <p>Имя:</p><input type="text" name="firstname">
    <p>Отчество:</p><input type="text" name="patronymic">
    <br><br>
    <button name="form">Отправить!</button>
</form>