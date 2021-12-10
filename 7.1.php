<?php
$firstname = htmlspecialchars($_GET["firstname"]);
$lastname = htmlspecialchars($_GET["lastname"]);
$age = htmlspecialchars($_GET["age"]);
$type_of_activity = htmlspecialchars($_GET["type_of_activity"]);
$successfully = htmlspecialchars($_GET["successfully"]);
echo 'Вас', ' ', 'Зовут', ':', ' ', $firstname, ' ', $lastname, '<br/>';
echo 'Ваш', ' ', 'Возраст', ':', ' ', $age, '<br/>';
echo 'Вид', ' ', 'Деятельности', ':', ' ', $type_of_activity, '<br/>';
echo 'Насколько', ' ', 'Вы', ' ', 'Успешны', ':', ' ', $successfully, '<br/>';
?>