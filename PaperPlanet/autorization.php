<?php
$login = $_POST['login'];
$password = $_POST['password'];
$error="";
if(trim($login)=="" or trim($password)=="") {
    $error = "Введіть всі данні!";
} elseif ($login != 'sobolv' or $password != 'pass') {
    $error = "Неправильно введений пароль чи логін";
}

if($error != '') {
    print($error);
    exit();
} else {
    setcookie('user','online', time() + 130, '/');
    header('Location: http://localhost/PaperPlanet/?page=lending');
}

?>